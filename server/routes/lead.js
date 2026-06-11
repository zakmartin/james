const express = require('express');

const router = express.Router();

/* ===== Jednoduchý in-memory rate limiting dle IP ===== */
const WINDOW_MS = 60 * 1000;   // okno 1 minuta
const MAX_HITS = 5;            // max. odeslání za okno
const hits = new Map();        // ip -> [timestamp, ...]

function rateLimited(ip) {
  const now = Date.now();
  const recent = (hits.get(ip) || []).filter((t) => now - t < WINDOW_MS);
  recent.push(now);
  hits.set(ip, recent);
  return recent.length > MAX_HITS;
}

// Periodický úklid staré evidence (ať Map neroste donekonečna)
setInterval(() => {
  const now = Date.now();
  for (const [ip, ts] of hits) {
    const recent = ts.filter((t) => now - t < WINDOW_MS);
    if (recent.length) hits.set(ip, recent);
    else hits.delete(ip);
  }
}, 5 * WINDOW_MS).unref();

const isEmail = (v) => typeof v === 'string' && /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v);
const isPhone = (v) => typeof v === 'string' && /^[+()/\d\s-]{6,20}$/.test(v.trim());

/* ===== Adaptér doručení leadu ===== */
async function deliverLead(lead) {
  const mode = (process.env.LEAD_DELIVERY || 'webhook').toLowerCase();

  if (mode === 'webhook') {
    if (!process.env.FORM_API_URL) {
      throw new Error('FORM_API_URL není nastavena.');
    }
    const headers = { 'Content-Type': 'application/json' };
    if (process.env.FORM_API_TOKEN) {
      headers.Authorization = `Bearer ${process.env.FORM_API_TOKEN}`;
    }
    const resp = await fetch(process.env.FORM_API_URL, {
      method: 'POST',
      headers,
      body: JSON.stringify(lead),
    });
    if (!resp.ok) {
      throw new Error(`Lead-service vrátil ${resp.status}`);
    }
    return;
  }

  // Místo pro budoucí adaptér "smtp" (Nodemailer / Amazon SES) — viz prompt.
  throw new Error(`Neznámý LEAD_DELIVERY: ${mode}`);
}

// POST /api/lead
router.post('/', async (req, res) => {
  const ip = req.ip || req.connection?.remoteAddress || 'unknown';
  if (rateLimited(ip)) {
    return res.status(429).json({ error: 'Příliš mnoho pokusů. Zkuste to prosím za chvíli.' });
  }

  const { name, email, phone, company, gdpr, website } = req.body || {};

  // Honeypot — skryté pole "website" musí zůstat prázdné (vyplní ho jen bot)
  if (website) {
    return res.json({ ok: true }); // tváříme se úspěšně, lead zahodíme
  }

  // Serverová validace
  if (!name || String(name).trim().length < 2) {
    return res.status(400).json({ error: 'Vyplňte prosím své jméno.' });
  }
  if (!isEmail(email) && !isPhone(phone)) {
    return res.status(400).json({ error: 'Zadejte platný e-mail nebo telefon.' });
  }
  if (!gdpr) {
    return res.status(400).json({ error: 'Pro odeslání je nutný souhlas se zpracováním osobních údajů.' });
  }

  const lead = {
    source: 'jamesapp.cz',
    name: String(name).trim(),
    email: isEmail(email) ? email.trim() : '',
    phone: isPhone(phone) ? phone.trim() : '',
    company: company ? String(company).trim() : '',
    createdAt: new Date().toISOString(),
  };

  try {
    await deliverLead(lead);
    res.json({ ok: true });
  } catch (err) {
    console.error('Lead delivery error:', err.message);
    res.status(502).json({ error: 'Odeslání se nepodařilo. Zkuste to prosím znovu, nebo nám zavolejte.' });
  }
});

module.exports = router;
