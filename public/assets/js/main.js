// ─── Page Transition ───
document.addEventListener("click", (e) => {
  const link = e.target.closest("a[href]");
  if (!link) return;
  const href = link.getAttribute("href");
  if (!href || href.startsWith("#") || href.startsWith("mailto:") || href.startsWith("tel:") || link.target === "_blank") return;
  if (href === window.location.pathname) return;
  e.preventDefault();
  document.body.classList.add("page-leaving");
  setTimeout(() => { window.location.href = href; }, 300);
});

// Mobile menu
const burger = document.getElementById("burger");
const nav = document.getElementById("nav");
const header = document.querySelector(".header");

if (header) {
  const onScroll = () => header.classList.toggle("scrolled", window.scrollY > 4);
  onScroll();
  window.addEventListener("scroll", onScroll, { passive: true });
}

if (burger && nav) {
  burger.addEventListener("click", () => nav.classList.toggle("open"));
  document.addEventListener("click", (e) => {
    const isClickInside = nav.contains(e.target) || burger.contains(e.target);
    if (!isClickInside) nav.classList.remove("open");
  });
}

// Dropdown (desktop + mobile)
document.querySelectorAll("[data-dropdown]").forEach((wrap) => {
  const btn = wrap.querySelector("button");
  if (!btn) return;

  btn.addEventListener("click", (e) => {
    e.stopPropagation();
    const isOpen = wrap.classList.contains("open");
    document.querySelectorAll("[data-dropdown].open").forEach((w) => w.classList.remove("open"));
    wrap.classList.toggle("open", !isOpen);
  });
});

document.addEventListener("click", () => {
  document.querySelectorAll("[data-dropdown].open").forEach((w) => w.classList.remove("open"));
});

// Service select routing
const select = document.getElementById("serviceSelect");
const goBtn = document.getElementById("goService");
if (select && goBtn) {
  goBtn.addEventListener("click", () => {
    const url = select.value;
    if (url) window.location.href = url;
  });
  select.addEventListener("change", () => {
    // Optional auto-navigate:
    // if (select.value) window.location.href = select.value;
  });
}

// Reveal on scroll
const revealEls = Array.from(document.querySelectorAll("[data-reveal]"));
if ("IntersectionObserver" in window) {
  const io = new IntersectionObserver((entries) => {
    entries.forEach((en) => {
      if (en.isIntersecting) en.target.classList.add("show");
    });
  }, { threshold: 0.12 });
  revealEls.forEach((el) => io.observe(el));
} else {
  revealEls.forEach((el) => el.classList.add("show"));
}

// Staggered reveal for service detail blocks
const staggerEls = Array.from(document.querySelectorAll("[data-reveal-stagger]"));
if (staggerEls.length && "IntersectionObserver" in window) {
  const sio = new IntersectionObserver((entries) => {
    entries.forEach((en) => {
      if (en.isIntersecting) {
        en.target.classList.add("show");
        sio.unobserve(en.target);
      }
    });
  }, { threshold: 0.08, rootMargin: "0px 0px -40px 0px" });
  staggerEls.forEach((el) => sio.observe(el));
} else {
  staggerEls.forEach((el) => el.classList.add("show"));
}

// Typewriter effect on Cine suntem page
const tw = document.getElementById("typewriter");
if (tw) {
  const lines = [
    "<?php",
    "  // ACL-Smart Software",
    "  $focus = ['aplicații personalizate', 'SaaS', 'eCommerce', 'QA', 'API'];",
    "  echo 'Livram predictibil, curat, scalabil.';",
    "?>"
  ];
  const text = lines.join("\n");
  let i = 0;

  const tick = () => {
    tw.textContent = text.slice(0, i++);
    if (i <= text.length) requestAnimationFrame(tick);
  };
  tick();
}

// Hero rotating keywords
const rotateEl = document.getElementById("heroRotate");
if (rotateEl) {
  const prefersReduced = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
  const words = [
    "Software personalizat",
    "Aplicații web",
    "Platforme SaaS",
    "Sisteme eCommerce",
    "Soluții AI"
  ];
  let idx = 0;

  const setWord = (next) => {
    rotateEl.textContent = next;
  };

  if (!prefersReduced) {
    setInterval(() => {
      rotateEl.classList.add("fade");
      setTimeout(() => {
        idx = (idx + 1) % words.length;
        setWord(words[idx]);
        rotateEl.classList.remove("fade");
      }, 260);
    }, 2000);
  } else {
    setWord(words[0]);
  }
}
