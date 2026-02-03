<?php
$current = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? '/';
$current = rtrim($current, '/');
$current = $current === '' ? '/' : $current;
?>
<!doctype html>
<html lang="ro">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>ACL-Smart Software</title>
  <meta name="description" content="ACL-Smart Software - software personalizat, aplicații web, eCommerce, SaaS, QA, integrări API, consultanță." />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/assets/css/style.css" />
</head>
<body>
  <div class="bg">
    <div class="radial-glow"></div>

    <header class="header">
      <div class="container header-inner">
        <a class="brand" href="/">
          <span class="brand-dot"></span>
          <span class="brand-title font-tech">ACL-Smart Software</span>
        </a>

        <nav class="nav" id="nav">
          <a class="nav-link <?= $current==='/'?'active':'' ?>" href="/">Acasă</a>
          <a class="nav-link" href="/#cine-suntem">Cine suntem</a>


          <div class="nav-dropdown" data-dropdown>
            <button class="nav-link nav-btn <?= str_starts_with($current,'/servicii') || $current==='/ce-putem-oferi' ? 'active':'' ?>" type="button">
              Servicii
              <span class="chev">▾</span>
            </button>
            <div class="dropdown-panel">
              <a class="dropdown-item" href="/ce-putem-oferi">Ce putem oferi</a>
              <div class="dropdown-sep"></div>
              <?php foreach ($services as $slug => $s): ?>
                <a class="dropdown-item" href="/servicii/<?= htmlspecialchars($slug) ?>">
                  <span class="drop-ic"><?= htmlspecialchars($s['icon']) ?></span>
                  <span><?= htmlspecialchars($s['title']) ?></span>
                </a>
              <?php endforeach; ?>
              <div class="dropdown-sep"></div>
              <a class="dropdown-item" href="/servicii">Toate serviciile</a>
            </div>
          </div>

          <a class="nav-link <?= $current==='/contact'?'active':'' ?>" href="/contact">Contact</a>

          <a class="btn btn-primary small" href="/contact">Cere ofertă</a>
        </nav>

        <button class="burger" id="burger" aria-label="Deschide meniul" type="button">
          <span></span><span></span><span></span>
        </button>
      </div>
    </header>

    <main class="main">
