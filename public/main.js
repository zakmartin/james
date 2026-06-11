/* JamesApp.cz — interaktivita (progressive enhancement).
   Web je plně funkční i bez JS; tento skript pouze vylepšuje UX. */
(function () {
  'use strict';

  /* >>> Typeform: nahraď ID skutečným formulářem registrace/poptávky <<< */
  var TYPEFORM_ID = 'XXXXXXXX';
  var TYPEFORM_URL = 'https://form.typeform.com/to/' + TYPEFORM_ID;

  var $ = function (s, c) { return (c || document).querySelector(s); };
  var $$ = function (s, c) { return Array.prototype.slice.call((c || document).querySelectorAll(s)); };

  /* ===== Mobile nav ===== */
  var nav = $('.jnav');
  var burger = $('.jnav__burger');
  if (nav && burger) {
    burger.addEventListener('click', function () {
      var open = nav.classList.toggle('jnav--open');
      burger.setAttribute('aria-expanded', open ? 'true' : 'false');
      document.body.style.overflow = open ? 'hidden' : '';
    });
    $$('.jnav__drawer a').forEach(function (a) {
      a.addEventListener('click', function () {
        nav.classList.remove('jnav--open');
        burger.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
      });
    });
  }

  /* ===== FAQ accordion ===== */
  $$('.faq__item').forEach(function (item) {
    var q = $('.faq__q', item);
    var a = $('.faq__a', item);
    if (!q || !a) return;
    q.addEventListener('click', function () {
      var open = item.classList.toggle('faq__item--open');
      q.setAttribute('aria-expanded', open ? 'true' : 'false');
      a.style.maxHeight = open ? a.scrollHeight + 'px' : '';
    });
  });
  // „Zobrazit všechny dotazy"
  var faqMoreBtn = $('#faq-more');
  if (faqMoreBtn) {
    faqMoreBtn.addEventListener('click', function () {
      $$('.faq__item[hidden]').forEach(function (el) { el.removeAttribute('hidden'); });
      faqMoreBtn.parentNode.removeChild(faqMoreBtn);
    });
  }

  /* ===== Modaly (typeform + video) ===== */
  function openModal(modal) {
    if (!modal) return;
    modal.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
  }
  function closeModal(modal) {
    if (!modal) return;
    modal.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
    var v = $('video', modal);
    if (v) { v.pause(); v.currentTime = 0; }
  }

  var trialModal = $('#trial-modal');
  if (trialModal) {
    var iframe = $('iframe', trialModal);
    var loaded = false;
    $$('[data-trial]').forEach(function (btn) {
      btn.addEventListener('click', function (e) {
        e.preventDefault();
        if (!loaded && iframe) { iframe.src = TYPEFORM_URL; loaded = true; }
        openModal(trialModal);
      });
    });
  }

  var videoModal = $('#video-modal');
  $$('[data-video]').forEach(function (btn) {
    btn.addEventListener('click', function (e) {
      e.preventDefault();
      openModal(videoModal);
      var v = $('video', videoModal);
      if (v) v.play().catch(function () {});
    });
  });

  $$('.modal').forEach(function (modal) {
    $$('[data-close], .modal__overlay', modal).forEach(function (el) {
      el.addEventListener('click', function () { closeModal(modal); });
    });
  });
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') $$('.modal[aria-hidden="false"]').forEach(closeModal);
  });

  /* ===== Lead form ===== */
  var form = $('#lead-form');
  if (form) {
    var status = $('.form-status', form);
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      var data = Object.fromEntries(new FormData(form).entries());
      data.gdpr = form.querySelector('[name="gdpr"]').checked;

      if (!data.email && !data.phone) {
        setStatus('Zadejte prosím e-mail nebo telefon.', 'err'); return;
      }
      if (!data.gdpr) {
        setStatus('Potvrďte prosím souhlas se zpracováním osobních údajů.', 'err'); return;
      }

      var btn = $('button[type="submit"]', form);
      btn.disabled = true;
      var orig = btn.textContent;
      btn.textContent = 'Odesílám…';
      setStatus('', '');

      fetch('/api/lead', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(data),
      })
        .then(function (r) { return r.json().then(function (b) { return { ok: r.ok, body: b }; }); })
        .then(function (res) {
          if (res.ok) {
            form.reset();
            setStatus('Děkujeme! Ozveme se vám co nejdříve.', 'ok');
          } else {
            setStatus(res.body.error || 'Něco se pokazilo. Zkuste to prosím znovu.', 'err');
          }
        })
        .catch(function () { setStatus('Spojení selhalo. Zkuste to prosím znovu.', 'err'); })
        .finally(function () { btn.disabled = false; btn.textContent = orig; });
    });

    function setStatus(msg, kind) {
      if (!status) return;
      status.textContent = msg;
      status.className = 'form-status' + (kind ? ' form-status--' + kind : '');
    }
  }

  /* ===== Reveal on scroll ===== */
  var reveals = $$('.reveal');
  if (reveals.length && 'IntersectionObserver' in window) {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (en) {
        if (en.isIntersecting) { en.target.classList.add('is-visible'); io.unobserve(en.target); }
      });
    }, { threshold: 0.12 });
    reveals.forEach(function (el) { io.observe(el); });
  } else {
    reveals.forEach(function (el) { el.classList.add('is-visible'); });
  }

  /* ===== Feature karty — kaskáda + „kreslení" ikon ===== */
  /* Změříme délku každého tahu (getTotalLength) a uložíme do --len; CSS pak
     animuje stroke-dashoffset od plné délky k 0. --i řídí stagger kaskády.
     Aktivujeme jen když uživatel nemá vypnuté animace — jinak ikony zůstanou
     vykreslené staticky (CSS pravidla visí na .js-draw, kterou nepřidáme). */
  var reduceMotion = window.matchMedia &&
    window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  if (!reduceMotion) {
    $$('.features__grid').forEach(function (grid) {
      $$('.feature', grid).forEach(function (card, i) {
        card.style.setProperty('--i', i);
        $$('.feature__icon svg > *', card).forEach(function (el) {
          if (typeof el.getTotalLength !== 'function') return;
          try {
            el.style.setProperty('--len', Math.ceil(el.getTotalLength()) + 1);
          } catch (e) {}
        });
      });
      grid.classList.add('js-draw');
    });
  }

  /* ===== How it works — vertikální timeline řízená scrollem =====
     JS plní čáru (.steps__progress) podle scrollu a každému kroku nastaví
     --prom (0..1) podle blízkosti jeho odznaku ke středu obrazovky — krok
     uprostřed se zvětší, ostatní ustoupí do pozadí. Bez JS / u
     reduced-motion zůstává statika (vše plné). */
  var stepsEl = $('#steps');
  if (stepsEl) {
    var track = $('.steps__track', stepsEl);
    var bar = $('.steps__progress', stepsEl);
    var stepEls = $$('.step', stepsEl);
    var reduceSteps = window.matchMedia &&
      window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    if (!reduceSteps && track && bar && stepEls.length && 'requestAnimationFrame' in window) {
      stepsEl.classList.add('js-steps');
      var trackH = 0;

      var measureSteps = function () {
        var sTop = stepsEl.getBoundingClientRect().top;
        var first = $('.step__badge', stepEls[0]).getBoundingClientRect();
        var last = $('.step__badge', stepEls[stepEls.length - 1]).getBoundingClientRect();
        var firstC = (first.top - sTop) + first.height / 2;
        var lastC = (last.top - sTop) + last.height / 2;
        track.style.top = firstC + 'px';
        trackH = Math.max(0, lastC - firstC);
        track.style.height = trackH + 'px';
      };

      var updateSteps = function () {
        var vh = window.innerHeight;
        var t = track.getBoundingClientRect();
        var filled = Math.max(0, Math.min(vh * 0.5 - t.top, trackH));
        bar.style.height = filled + 'px';
        // prominence: krok nejblíž středu obrazovky = 1, vzdálené → 0
        var mid = vh / 2, range = vh * 0.42;
        stepEls.forEach(function (s) {
          var b = $('.step__badge', s).getBoundingClientRect();
          var center = b.top + b.height / 2;   // střed odznaku je neměnný vůči scale
          var prom = 1 - Math.min(Math.abs(center - mid) / range, 1);
          s.style.setProperty('--prom', prom.toFixed(3));
        });
      };

      var queued = false;
      var onScrollSteps = function () {
        if (queued) return;
        queued = true;
        requestAnimationFrame(function () { updateSteps(); queued = false; });
      };

      measureSteps(); updateSteps();
      window.addEventListener('scroll', onScrollSteps, { passive: true });
      window.addEventListener('resize', function () { measureSteps(); updateSteps(); });
      if (document.fonts && document.fonts.ready) {
        document.fonts.ready.then(function () { measureSteps(); updateSteps(); });
      }
    }
  }

  /* ===== Hero — počítadla přesvědčivých čísel ===== */
  var statNums = $$('.hero__stat-num');
  if (statNums.length) {
    var reduceStats = window.matchMedia &&
      window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    var renderStat = function (el, val) {
      el.textContent = val + (el.getAttribute('data-suffix') || '');
    };
    if (reduceStats || !('requestAnimationFrame' in window)) {
      statNums.forEach(function (el) {
        renderStat(el, parseFloat(el.getAttribute('data-count')) || 0);
      });
    } else {
      statNums.forEach(function (el) { renderStat(el, 0); });
      var easeOutStat = function (t) { return 1 - Math.pow(1 - t, 3); };
      var startCounters = function () {
        statNums.forEach(function (el) {
          var target = parseFloat(el.getAttribute('data-count')) || 0;
          var dur = 1500, t0 = null;
          var tick = function (ts) {
            if (t0 === null) t0 = ts;
            var p = Math.min((ts - t0) / dur, 1);
            renderStat(el, Math.round(target * easeOutStat(p)));
            if (p < 1) requestAnimationFrame(tick);
          };
          requestAnimationFrame(tick);
        });
      };
      window.setTimeout(startCounters, 650);
    }
  }

  /* ===== Cookie bar ===== */
  var cookie = $('#cookie');
  if (cookie) {
    var KEY = 'james_cookie_consent';
    try { if (localStorage.getItem(KEY)) cookie.hidden = true; } catch (e) {}
    $$('[data-cookie]', cookie).forEach(function (btn) {
      btn.addEventListener('click', function () {
        try { localStorage.setItem(KEY, btn.getAttribute('data-cookie')); } catch (e) {}
        cookie.hidden = true;
      });
    });
  }
})();
