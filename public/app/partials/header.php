<?php
$cur = rtrim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? '/', '/') ?: '/';
$hasHero = in_array($cur, ['/', '/portofoliu']) || str_starts_with($cur, '/servicii/');

/* Meta defaults */
$pageTitle = $pageTitle ?? 'ACL Smart Software — Soluții Digitale Personalizate';
$pageDesc  = $pageDesc  ?? 'Dezvoltăm software personalizat, aplicații web, platforme SaaS și magazine online.';
$pageOg    = $pageOg    ?? [];
$ogType    = $pageOg['type'] ?? 'website';
$ogImage   = $pageOg['image'] ?? '/assets/img/og-default.png';
$canonical = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . ($_SERVER['HTTP_HOST'] ?? 'aclsmartsoftware.ro') . $cur;
?>
<!doctype html>
<html lang="ro">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title><?= htmlspecialchars($pageTitle) ?></title>
  <meta name="description" content="<?= htmlspecialchars($pageDesc) ?>">
  <link rel="canonical" href="<?= htmlspecialchars($canonical) ?>">

  <!-- Open Graph -->
  <meta property="og:title" content="<?= htmlspecialchars($pageTitle) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($pageDesc) ?>">
  <meta property="og:type" content="<?= $ogType ?>">
  <meta property="og:url" content="<?= htmlspecialchars($canonical) ?>">
  <meta property="og:image" content="<?= htmlspecialchars($ogImage) ?>">
  <meta property="og:locale" content="ro_RO">
  <meta property="og:site_name" content="ACL Smart Software">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= htmlspecialchars($pageTitle) ?>">
  <meta name="twitter:description" content="<?= htmlspecialchars($pageDesc) ?>">

  <link rel="icon" type="image/x-icon" href="/assets/img/favicon.ico">
  <meta name="google-site-verification" content="googlebf9aba8281af9a2c.html">

  <!-- Preload fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;600;700&display=swap">
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="/assets/css/style.css?v=5">
  <link rel="stylesheet" href="/assets/css/responsive.css?v=5">

  <!-- Schema.org JSON-LD -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "ProfessionalService",
    "name": "ACL Smart Software",
    "url": "https://aclsmartsoftware.ro",
    "logo": "https://aclsmartsoftware.ro/assets/img/favicon.ico",
    "description": "Dezvoltăm software personalizat, aplicații web, platforme SaaS și magazine online.",
    "telephone": "+40758154490",
    "email": "acl-smartsoftware@outlook.com",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Str. Horea 2/31",
      "addressLocality": "Petroșani",
      "postalCode": "332014",
      "addressCountry": "RO"
    },
    "priceRange": "$$",
    "areaServed": ["România", "Europa"],
    "knowsAbout": ["Software Development", "Web Development", "SaaS", "E-commerce", "QA Testing", "API Integration"],
    "sameAs": []
  }
  </script>
</head>
<body>

<!-- Skip to content (accessibility) -->
<a class="skip-link" href="#main-content">Salt la conținut</a>

<!-- Loading overlay -->
<div class="loader-overlay" id="loaderOverlay">
  <div class="loader-spinner"></div>
</div>

<header class="header<?= $hasHero ? ' header--hero' : '' ?>">
  <div class="wrap">
    <a class="brand" href="/">
      <img class="brand-logo" src="/assets/img/logo.png" alt="ACL Smart Software">
      <span class="brand-text"><strong class="accent">ACL</strong> Smart Software</span>
    </a>

    <nav class="nav" id="nav">
      <div class="nav-mob-head">
        <img class="brand-logo" src="/assets/img/logo.png" alt="ACL Smart Software">
        <span class="nav-mob-title"><strong class="accent">ACL</strong> Smart Software</span>
      </div>

      <div class="nav-mob-links">
        <a class="nav-link <?= $cur==='/'?'active':'' ?>" href="/">Cine suntem</a>

        <div class="dropdown">
          <button class="nav-link dropdown-btn <?= str_starts_with($cur,'/servicii')||$cur==='/ce-putem-oferi'?'active':'' ?>" type="button">
            Ce oferim <span class="chev">▾</span>
          </button>
          <div class="dropdown-menu">
            <?php foreach($services as $slug=>$s): ?>
            <a class="dropdown-item" href="/servicii/<?= htmlspecialchars($slug) ?>">
              <span class="ico"><?= $s['icon'] ?></span>
              <?= htmlspecialchars($s['title']) ?>
            </a>
            <?php endforeach; ?>
          </div>
        </div>

        <a class="nav-link <?= $cur==='/portofoliu'?'active':'' ?>" href="/portofoliu">Portofoliu</a>
        <a class="nav-link <?= $cur==='/blog'||str_starts_with($cur,'/blog/')?'active':'' ?>" href="/blog">Blog</a>
      </div>

      <div class="nav-mob-foot">
        <button class="btn btn-primary" data-modal-trigger>Contactează-ne →</button>
        <div class="nav-mob-contact">
          <a href="tel:0758154490">📞 0758 154 490</a>
          <a href="mailto:acl-smartsoftware@outlook.com">✉️ acl-smartsoftware@outlook.com</a>
        </div>
      </div>
    </nav>

    <button class="burger" id="burger" aria-label="Meniu" aria-expanded="false" type="button">
      <span class="burger-label">Meniu</span>
      <span class="burger-lines"><span></span><span></span><span></span></span>
    </button>
  </div>
</header>

<main id="main-content">
