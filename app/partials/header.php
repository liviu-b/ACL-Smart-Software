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
  <title>ACL Smart Software</title>
  <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
  <meta name="description" content="ACL Smart Software - software personalizat, aplicații web, eCommerce, SaaS, QA, integrări API, consultanță." />
  <link rel="stylesheet" href="/assets/css/style.css?v=202602171" />
</head>
<body>
  <div class="bg">
    <div class="radial-glow"></div>

    <header class="header">
      <div class="container header-inner">
        <a class="brand" href="/">
          <span class="brand-mark">&lt;/&gt;</span>
          <span class="brand-title"><span class="acl-orange">ACL</span> Smart Software</span>
        </a>

        <nav class="nav" id="nav">
          <a class="nav-link <?= $current==='/'?'active':'' ?>" href="/" id="homeLink">Cine suntem?</a>

          <div class="nav-dropdown" data-dropdown>
            <button class="nav-link nav-btn <?= $current==='/ce-putem-oferi' ? 'active':'' ?>" type="button">
              Ce putem oferii?
              <span class="chev">▾</span>
            </button>
            <div class="dropdown-panel">
              <?php foreach ($services as $slug => $s): ?>
                <a class="dropdown-item" href="/servicii/<?= htmlspecialchars($slug) ?>">
                  <span class="drop-ic"><?= htmlspecialchars($s['icon']) ?></span>
                  <span><?= htmlspecialchars($s['title']) ?></span>
                </a>
              <?php endforeach; ?>
            </div>
          </div>

          <a class="nav-link <?= $current==='/portofoliu'?'active':'' ?>" href="/portofoliu">Portofoliu</a>
        </nav>

        <button class="burger" id="burger" aria-label="Deschide meniul" type="button">
          <span></span><span></span><span></span>
        </button>
      </div>
    </header>

    <main class="main">
