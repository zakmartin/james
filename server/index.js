require('dotenv').config({ path: require('path').join(__dirname, '..', '.env') });

const express = require('express');
const cors = require('cors');
const path = require('path');

const leadRouter = require('./routes/lead');

const app = express();
const PORT = process.env.PORT || 3000;
const REGISTRACE_URL = process.env.REGISTRACE_URL || 'https://emitent.jamesapp.cz';

app.disable('x-powered-by');
app.set('trust proxy', 1); // za reverse proxy (AWS) — správné req.ip
app.use(cors());
app.use(express.json({ limit: '32kb' }));

const PUBLIC = path.join(__dirname, '..', 'public');
const REPO_ROOT = path.join(__dirname, '..', '..'); // monorepo — sdílený cfg-base.css

// Sdílený design systém skupiny (žije v kořeni monorepa).
// Při samostatném deployi stačí cfg-base.css zkopírovat do public/.
app.get('/cfg-base.css', (req, res) => {
  res.type('text/css').sendFile(path.join(REPO_ROOT, 'cfg-base.css'), (err) => {
    if (err) res.sendFile(path.join(PUBLIC, 'cfg-base.css'));
  });
});

// API
app.use('/api/lead', leadRouter);

// Statické soubory webu
app.use(express.static(PUBLIC, { extensions: ['html'] }));

// ===== Clean URL routing =====
const page = (name) => (req, res) => res.sendFile(path.join(PUBLIC, name));

app.get('/', page('index.html'));
app.get('/funkce', page('funkce.html'));

// Registrace trialu — web jen odkazuje na stávající flow emitenta
app.get('/registrace', (req, res) => res.redirect(301, REGISTRACE_URL));

// ===== 301 přesměrování ze starých WordPress URL =====
const redirects = {
  '/reistrace': '/registrace',       // historický překlep v CTA
  '/uvodni-stranka': '/',
  '/home': '/',
};
for (const [from, to] of Object.entries(redirects)) {
  app.get(from, (req, res) => res.redirect(301, to));
}

// 404
app.use((req, res) => {
  res.status(404).sendFile(path.join(PUBLIC, '404.html'));
});

if (require.main === module) {
  app.listen(PORT, () => console.log(`JamesApp web běží na http://localhost:${PORT}`));
}

module.exports = app;
