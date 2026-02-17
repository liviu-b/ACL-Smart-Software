/* ============================================================
   ACL Smart Software — main.js v3
   Clean rewrite: zero bloat, modern APIs
   ============================================================ */

;(function(){
  'use strict';

  // ── Loading overlay ──
  const loader = document.getElementById('loaderOverlay');
  if(loader){
    window.addEventListener('load', () => {
      loader.classList.add('hidden');
      setTimeout(() => { loader.style.display = 'none'; }, 400);
    });
    // fallback: hide after 3s max
    setTimeout(() => { if(loader){ loader.classList.add('hidden'); setTimeout(() => { loader.style.display = 'none'; }, 400); } }, 3000);
  }

  // ── Page Transitions ──
  window.addEventListener('pageshow', e => { if(e.persisted) document.body.classList.remove('page-leaving'); });
  document.body.classList.remove('page-leaving');

  document.addEventListener('click', e => {
    const a = e.target.closest('a[href]');
    if(!a) return;
    const h = a.getAttribute('href');
    if(!h || h.startsWith('#') || h.startsWith('mailto:') || h.startsWith('tel:') || a.target === '_blank') return;
    if(h === window.location.pathname) return;
    e.preventDefault();
    document.body.classList.add('page-leaving');
    setTimeout(() => window.location.href = h, 280);
  });

  // ── Header scroll ──
  const header = document.querySelector('.header');
  if(header){
    const check = () => header.classList.toggle('scrolled', scrollY > 4);
    check();
    window.addEventListener('scroll', check, {passive:true});
  }

  // ── Burger menu ──
  const burger = document.getElementById('burger');
  const nav = document.getElementById('nav');
  if(burger && nav){
    const closeNav = () => {
      nav.classList.remove('open');
      burger.classList.remove('active');
      burger.setAttribute('aria-expanded','false');
      document.body.classList.remove('nav-open');
      if(header) header.classList.remove('nav-open');
    };
    const setNavOpen = (open) => {
      document.body.classList.toggle('nav-open', open);
      if(header) header.classList.toggle('nav-open', open);
    };
    const navCloseBtn = document.getElementById('navClose');
    if(navCloseBtn) navCloseBtn.addEventListener('click', closeNav);
    burger.addEventListener('click', () => {
      const open = nav.classList.toggle('open');
      burger.classList.toggle('active', open);
      burger.setAttribute('aria-expanded', open);
      setNavOpen(open);
    });
    document.addEventListener('click', e => {
      if(!nav.contains(e.target) && !burger.contains(e.target)){
        nav.classList.remove('open');
        burger.classList.remove('active');
        burger.setAttribute('aria-expanded','false');
        setNavOpen(false);
      }
    });
    nav.querySelectorAll('a').forEach(l => l.addEventListener('click', () => {
      nav.classList.remove('open');
      burger.classList.remove('active');
      burger.setAttribute('aria-expanded','false');
      setNavOpen(false);
    }));
  }

  // ── Dropdowns ──
  const mobile = () => innerWidth <= 980;
  document.querySelectorAll('.dropdown').forEach(wrap => {
    const btn = wrap.querySelector('.dropdown-btn');
    if(!btn) return;
    let timer;
    const open = () => { clearTimeout(timer); document.querySelectorAll('.dropdown.open').forEach(w => { if(w!==wrap) w.classList.remove('open'); }); wrap.classList.add('open'); };
    const close = () => { timer = setTimeout(() => wrap.classList.remove('open'), 0); };
    wrap.addEventListener('mouseenter', () => { if(!mobile()) open(); });
    wrap.addEventListener('mouseleave', () => { if(!mobile()) close(); });
    btn.addEventListener('click', e => { if(!mobile()) return; e.stopPropagation(); wrap.classList.toggle('open'); });
  });
  document.addEventListener('click', () => document.querySelectorAll('.dropdown.open').forEach(w => w.classList.remove('open')));

  // ── Scroll reveal ──
  if('IntersectionObserver' in window){
    const io = new IntersectionObserver(entries => {
      entries.forEach(en => { if(en.isIntersecting){ en.target.classList.add('show'); io.unobserve(en.target); } });
    }, {threshold:.1});
    document.querySelectorAll('[data-reveal]').forEach(el => io.observe(el));

    const sio = new IntersectionObserver(entries => {
      entries.forEach(en => { if(en.isIntersecting){ en.target.classList.add('show'); sio.unobserve(en.target); } });
    }, {threshold:.06, rootMargin:'0px 0px -30px 0px'});
    document.querySelectorAll('[data-reveal-stagger]').forEach(el => sio.observe(el));
  } else {
    document.querySelectorAll('[data-reveal],[data-reveal-stagger]').forEach(el => el.classList.add('show'));
  }

  // ── Hero rotating words ──
  const rotEl = document.getElementById('heroRotate');
  if(rotEl && !matchMedia('(prefers-reduced-motion:reduce)').matches){
    const words = ['Software personalizat','Aplicații web','Platforme SaaS','Sisteme eCommerce','Soluții AI'];
    let i = 0;
    setInterval(() => {
      rotEl.classList.add('fade');
      setTimeout(() => { i = (i+1) % words.length; rotEl.textContent = words[i]; rotEl.classList.remove('fade'); }, 250);
    }, 2200);
  }

  // ── WhatsApp tooltip ──
  const tip = document.getElementById('waTooltip');
  if(tip){
    setTimeout(() => { tip.classList.add('show'); setTimeout(() => tip.classList.remove('show'), 8000); }, 3000);
  }

  // ── Contact modal ──
  const modal = document.getElementById('contactModal');
  const closeBtn = document.getElementById('modalClose');
  const openModal = () => {
    const sw = innerWidth - document.documentElement.clientWidth;
    document.body.style.paddingRight = sw + 'px';
    document.body.style.overflow = 'hidden';
    modal.classList.add('show');
  };
  const closeModal = () => {
    modal.classList.remove('show');
    document.body.style.overflow = '';
    document.body.style.paddingRight = '';
  };
  document.addEventListener('click', e => { if(e.target.closest('[data-modal-trigger]')){ e.preventDefault(); openModal(); } });
  if(closeBtn) closeBtn.addEventListener('click', e => { e.preventDefault(); e.stopPropagation(); closeModal(); });
  if(modal) modal.addEventListener('click', e => { if(e.target === modal) closeModal(); });
  document.addEventListener('keydown', e => { if(e.key === 'Escape' && modal.classList.contains('show')) closeModal(); });

  // ── Footer service cycle (mobile) ──
  ;(function(){
    const wrap = document.querySelector('.footer-svc-cycle');
    if(!wrap) return;
    const items = [...wrap.querySelectorAll('.footer-svc-item')];
    if(!items.length) return;
    let cur = 0, interval;
    const show = i => { items.forEach(el => { el.classList.remove('active','exit'); }); items[i].classList.add('active'); };
    const next = () => {
      const prev = cur;
      cur = (cur+1) % items.length;
      items[prev].classList.remove('active');
      items[prev].classList.add('exit');
      setTimeout(() => { items[prev].classList.remove('exit'); items[cur].classList.add('active'); }, 350);
    };
    const start = () => { show(cur); interval = setInterval(next, 5000); };
    const stop = () => { clearInterval(interval); interval = null; items.forEach(el => el.classList.remove('active')); };
    const check = () => { if(mobile()){ if(!interval) start(); } else { stop(); } };
    check();
    window.addEventListener('resize', check);
  })();

  // ── Hero video load ──
  document.querySelectorAll('.hero-bg video').forEach(v => {
    if(v.readyState >= 3) v.classList.add('loaded');
    else v.addEventListener('canplaythrough', () => v.classList.add('loaded'), {once:true});
  });

  // ── Particle network ──
  document.querySelectorAll('.hero canvas').forEach(canvas => {
    const ctx = canvas.getContext('2d');
    let w, h, pts = [], mouse = {x:-9999, y:-9999};
    const N = 80, D = 140, S = 0.22;

    const resize = () => {
      const r = canvas.parentElement.getBoundingClientRect();
      w = canvas.width = r.width;
      h = canvas.height = r.height;
    };
    const init = () => {
      pts = [];
      for(let i = 0; i < N; i++) pts.push({
        x: Math.random()*w, y: Math.random()*h,
        vx:(Math.random()-.5)*S, vy:(Math.random()-.5)*S,
        r: Math.random()*1.6+.5, a: Math.random()*.35+.1
      });
    };
    const draw = () => {
      ctx.clearRect(0,0,w,h);
      for(let i=0;i<pts.length;i++){
        for(let j=i+1;j<pts.length;j++){
          const dx=pts[i].x-pts[j].x, dy=pts[i].y-pts[j].y, d=Math.sqrt(dx*dx+dy*dy);
          if(d<D){
            ctx.beginPath(); ctx.moveTo(pts[i].x,pts[i].y); ctx.lineTo(pts[j].x,pts[j].y);
            ctx.strokeStyle=`rgba(255,255,255,${(1-d/D)*.1})`; ctx.lineWidth=.5; ctx.stroke();
          }
        }
      }
      for(const p of pts){
        ctx.beginPath(); ctx.arc(p.x,p.y,p.r,0,Math.PI*2);
        ctx.fillStyle=`rgba(255,255,255,${p.a})`; ctx.fill();
        const dx=p.x-mouse.x, dy=p.y-mouse.y, d=Math.sqrt(dx*dx+dy*dy);
        if(d<180){
          ctx.beginPath(); ctx.arc(p.x,p.y,p.r+3,0,Math.PI*2);
          ctx.fillStyle=`rgba(255,255,255,${(1-d/180)*.4})`; ctx.fill();
        }
        p.x+=p.vx; p.y+=p.vy;
        if(p.x<0||p.x>w) p.vx*=-1;
        if(p.y<0||p.y>h) p.vy*=-1;
      }
      requestAnimationFrame(draw);
    };

    const hero = canvas.closest('.hero, .svc-hero');
    if(hero){
      hero.addEventListener('mousemove', e => { const r=canvas.getBoundingClientRect(); mouse.x=e.clientX-r.left; mouse.y=e.clientY-r.top; });
      hero.addEventListener('mouseleave', () => { mouse.x=-9999; mouse.y=-9999; });
    }
    resize(); init(); draw();
    window.addEventListener('resize', () => { resize(); init(); });
  });

  // ── Cookie consent ──
  const cookieBanner = document.getElementById('cookieBanner');
  if(cookieBanner && !localStorage.getItem('cookie-consent')){
    setTimeout(() => cookieBanner.classList.add('show'), 1500);
    const dismiss = (val) => {
      localStorage.setItem('cookie-consent', val);
      cookieBanner.classList.remove('show');
    };
    const acceptBtn = document.getElementById('cookieAccept');
    const declineBtn = document.getElementById('cookieDecline');
    if(acceptBtn) acceptBtn.addEventListener('click', () => dismiss('accepted'));
    if(declineBtn) declineBtn.addEventListener('click', () => dismiss('declined'));
  }

  // ── Back to top ──
  const btt = document.getElementById('backToTop');
  if(btt){
    const toggleBtt = () => btt.classList.toggle('show', scrollY > 500);
    toggleBtt();
    window.addEventListener('scroll', toggleBtt, {passive:true});
    btt.addEventListener('click', () => window.scrollTo({top:0,behavior:'smooth'}));
  }

  // ── Section nav (in-hero terminal) ──
  const secNav = document.getElementById('secNav');
  if(secNav){
    const items = secNav.querySelectorAll('.hero-term-link');
    const sectionIds = Array.from(items).map(i => i.dataset.section);
    const sections = sectionIds.map(id => document.getElementById(id)).filter(Boolean);

    // Update active on scroll
    const updateActive = () => {
      const sy = scrollY;
      let activeId = sectionIds[0];
      for(const sec of sections){
        if(sec.offsetTop - window.innerHeight * 0.4 <= sy) activeId = sec.id;
      }
      items.forEach(item => {
        item.classList.toggle('active', item.dataset.section === activeId);
      });
    };
    updateActive();
    window.addEventListener('scroll', updateActive, {passive:true});

    // Click terminal to emerge from bg
    secNav.addEventListener('click', e => {
      if(!secNav.classList.contains('open')){
        e.stopPropagation();
        secNav.classList.add('open');
      }
    });

    // Click outside to sink back to bg
    document.addEventListener('click', e => {
      if(secNav.classList.contains('open') && !secNav.contains(e.target)){
        secNav.classList.remove('open');
      }
    });

    // Smooth scroll on link click
    items.forEach(item => {
      item.addEventListener('click', e => {
        e.preventDefault();
        e.stopPropagation();
        const target = document.getElementById(item.dataset.section);
        if(target) target.scrollIntoView({behavior:'smooth',block:'start'});
        secNav.classList.remove('open');
      });
    });
  }

})();
