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

// Dropdown – hover on desktop, click on mobile
const isMobile = () => window.innerWidth <= 980;

document.querySelectorAll("[data-dropdown]").forEach((wrap) => {
  const btn = wrap.querySelector("button");
  if (!btn) return;
  let closeTimer = null;

  const open = () => {
    clearTimeout(closeTimer);
    document.querySelectorAll("[data-dropdown].open").forEach((w) => { if (w !== wrap) w.classList.remove("open"); });
    wrap.classList.add("open");
  };
  const close = () => {
    closeTimer = setTimeout(() => wrap.classList.remove("open"), 0);
  };

  // Desktop: hover
  wrap.addEventListener("mouseenter", () => { if (!isMobile()) open(); });
  wrap.addEventListener("mouseleave", () => { if (!isMobile()) close(); });

  // Mobile: click
  btn.addEventListener("click", (e) => {
    if (!isMobile()) return;
    e.stopPropagation();
    wrap.classList.toggle("open");
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

// WhatsApp tooltip - show after 3 seconds
const waTooltip = document.getElementById("waTooltip");
if (waTooltip) {
  setTimeout(() => {
    waTooltip.classList.add("show");
    // Auto-hide after 8 seconds
    setTimeout(() => {
      waTooltip.classList.remove("show");
    }, 8000);
  }, 3000);
}

// Contact Modal
const contactModal = document.getElementById("contactModal");
const modalClose = document.getElementById("modalClose");

// Open modal on CTA button clicks
document.addEventListener("click", (e) => {
  const trigger = e.target.closest("[data-modal-trigger]");
  if (trigger) {
    e.preventDefault();
    // Calculate scrollbar width and add padding to prevent layout shift
    const scrollbarWidth = window.innerWidth - document.documentElement.clientWidth;
    document.body.style.paddingRight = scrollbarWidth + 'px';
    document.body.style.overflow = "hidden";
    contactModal.classList.add("show");
  }
});

// Close modal on clicking the red dot
if (modalClose) {
  modalClose.addEventListener("click", (e) => {
    e.preventDefault();
    e.stopPropagation();
    contactModal.classList.remove("show");
    document.body.style.overflow = "";
    document.body.style.paddingRight = "";
  });
}

// Close modal on clicking overlay (outside modal)
if (contactModal) {
  contactModal.addEventListener("click", (e) => {
    if (e.target === contactModal) {
      contactModal.classList.remove("show");
      document.body.style.overflow = "";
      document.body.style.paddingRight = "";
    }
  });
}

// Close modal on Escape key
document.addEventListener("keydown", (e) => {
  if (e.key === "Escape" && contactModal.classList.contains("show")) {
    contactModal.classList.remove("show");
    document.body.style.overflow = "";
    document.body.style.paddingRight = "";
  }
});
