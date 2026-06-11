# JamesApp.cz

Produktový web pro **James** — software pro emitenty dluhopisů od CFG Tech a.s.
Postaven na sjednoceném tech stacku skupiny CFG: **vanilla HTML/CSS/JS + Express**, bez frameworku a bez databáze.

## Struktura

```
james/
├── server/
│   ├── index.js          # Express app — statické soubory, clean URL, 301 redirecty
│   └── routes/lead.js     # POST /api/lead — validace, honeypot, rate limit, webhook
├── public/
│   ├── index.html         # Onepager (#funkce, #cenik, #recenze, #kontakt …)
│   ├── funkce.html         # Stránka /funkce — kompletní přehled funkcí
│   ├── 404.html
│   ├── james-brand.css     # Přepis --brand-* tokenů (fialová identita James)
│   ├── styles.css          # Produktové styly (vlastní design, nekopíruje cfg.cz)
│   ├── main.js             # Nav, FAQ, modaly, formulář, cookie lišta, reveal
│   ├── robots.txt, sitemap.xml
│   └── assets/             # img + video
├── .env.example
└── package.json
```

**CSS vrstvy:** `cfg-base.css` (sdílený základ skupiny — žije v kořeni monorepa) → `james-brand.css` (barvy) → `styles.css` (specifika).
Server servíruje `cfg-base.css` z kořene repa na `/cfg-base.css`. Při samostatném deployi stačí soubor zkopírovat do `public/`.

## Spuštění

```bash
cd james
cp .env.example .env     # doplnit FORM_API_URL (webhook na lead-service skupiny)
npm install
npm run dev              # node --watch, http://localhost:3000
npm start                # produkce
```

## Formulář / API

`POST /api/lead` — serverová validace, honeypot (`website`), rate limiting dle IP (5 / min).
Doručení řídí `LEAD_DELIVERY`:
- `webhook` (výchozí) — přepošle JSON na `FORM_API_URL` (volitelně `Authorization: Bearer FORM_API_TOKEN`).
- `smtp` — místo připraveno v `routes/lead.js` (Nodemailer / Amazon SES), zatím neimplementováno dle zadání.

## Routing & SEO

- Clean URL: `/`, `/funkce`.
- `/registrace` → **301** na `REGISTRACE_URL` (výchozí `https://emitent.jamesapp.cz`).
- 301 ze starých WP URL: `/reistrace` → `/registrace`, `/uvodni-stranka` → `/`, `/home` → `/`.
- `sitemap.xml`, `robots.txt` (index, follow), OG meta, JSON-LD `SoftwareApplication`.

## ⚠️ Před nasazením doplnit (TODO)

1. **Typeform ID** — v `public/main.js` nahraď `TYPEFORM_ID = 'XXXXXXXX'` skutečným formulářem.
   Tlačítko „Vyzkoušet zdarma" otevírá modal s tímto Typeform iframe.
2. **Reálné screenshoty aplikace** — `public/assets/img/jamesapp-hero.png` je placeholder; doplnit aktuální UI
   (hero + ilustrace na `/funkce`).
3. **Loga klientů** — máme jen CEE (`client-cee.png`); Silverline, Real Luxembourg, Buffler, Holdingtex
   jsou zatím textové. Po dodání log nahradit v sekci „Loga klientů" a referencích.
4. **Fotky týmu** — Dominik Lamacz, Maroš Kasinec, Jan Čaban jsou zatím iniciálové avatary.
5. **Webhook** — nastavit `FORM_API_URL` na produkční lead-service / CRM endpoint skupiny.
6. **Právní stránky** — `/zpracovani-osobnich-udaju`, `/obchodni-podminky` zatím nejsou vytvořeny (odkazy existují).

## Sjednocující prvky skupiny CFG (splněno)

- Badge „člen skupiny CFG" v headeru (proklik na cfg.cz, nové okno).
- CFG blok ve footeru s odkazy na weby skupiny.
- Jednotná cookie lišta.
- Breakpointy 1280 / 1024 / 640 px.

## Sjednocená data

- Délka trialu: **14 dní** (jednotně v celém webu).
- CFG Tech na trhu **od roku 2017**.
- Provozovatel: CFG Tech a.s., Vinohradská 2828/151, 130 00 Praha 3, IČ 06504591, tel. +420 770 181 045.
