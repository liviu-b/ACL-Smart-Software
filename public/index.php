<?php
declare(strict_types=1);

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? '/';
$uri = rtrim($uri, '/') ?: '/';

$services = require __DIR__ . '/app/config/services.php';

function render(string $view, array $data = []): void {
  extract($data, EXTR_SKIP);
  require __DIR__ . '/app/partials/header.php';
  require __DIR__ . '/app/pages/' . $view . '.php';
  require __DIR__ . '/app/partials/footer.php';
}

function renderService(string $view, array $data = []): void {
  extract($data, EXTR_SKIP);
  require __DIR__ . '/app/partials/header.php';
  require __DIR__ . '/app/services/service_pages.php';
  require __DIR__ . '/app/partials/footer.php';
}

$routes = [
  '/' => fn() => render('cine-suntem', [
    'services'  => $services,
    'pageTitle' => 'ACL Smart Software — Soluții Digitale Personalizate',
    'pageDesc'  => 'Dezvoltăm software personalizat, aplicații web, platforme SaaS și magazine online. Soluții digitale complete pentru afacerea ta din România.',
    'pageOg'    => ['type' => 'website'],
  ]),
  '/ce-putem-oferi' => fn() => render('ce-putem-oferi', [
    'services'  => $services,
    'pageTitle' => 'Ce putem oferi | ACL Smart Software',
    'pageDesc'  => 'Descoperă cele 9 servicii digitale: dezvoltare software, aplicații web, magazine online, SaaS, testare QA, integrări API și consultanță IT.',
  ]),
  '/servicii' => fn() => render('servicii', [
    'services'  => $services,
    'pageTitle' => 'Servicii | ACL Smart Software',
    'pageDesc'  => 'Parcursul complet al unui proiect digital — de la analiză și design la dezvoltare, testare și lansare.',
  ]),
  '/portofoliu' => fn() => render('portofoliu', [
    'services'  => $services,
    'pageTitle' => 'Portofoliu | ACL Smart Software',
    'pageDesc'  => 'Proiecte reale livrate de ACL Smart Software — website-uri, aplicații web și platforme digitale cu rezultate măsurabile.',
  ]),
  '/termeni-si-conditii' => fn() => render('termeni-si-conditii', [
    'services'  => $services,
    'pageTitle' => 'Termeni și Condiții | ACL Smart Software',
    'pageDesc'  => 'Termenii și condițiile de utilizare a serviciilor ACL Smart Software.',
  ]),
  '/gdpr' => fn() => render('gdpr', [
    'services'  => $services,
    'pageTitle' => 'Politica GDPR | ACL Smart Software',
    'pageDesc'  => 'Politica de confidențialitate și protecția datelor personale — ACL Smart Software.',
  ]),
  '/blog' => fn() => render('blog', [
    'services'  => $services,
    'pageTitle' => 'Blog | ACL Smart Software',
    'pageDesc'  => 'Articole despre dezvoltare software, tendințe digitale și sfaturi practice pentru afacerea ta.',
  ]),
];

// Blog article routes
if (preg_match('#^/blog/([a-z0-9\-]+)$#', $uri, $m)) {
  $articleSlug = $m[1];
  $articleFile = __DIR__ . '/app/pages/blog/' . $articleSlug . '.php';
  if (file_exists($articleFile)) {
    render('blog/' . $articleSlug, ['services' => $services]);
    exit;
  }
}

// Service detail routes
if (preg_match('#^/servicii/([a-z0-9\-]+)$#', $uri, $m) && isset($services[$m[1]])) {
  $s = $services[$m[1]];
  renderService($s['view'], [
    'service'   => $s,
    'services'  => $services,
    'pageTitle' => $s['title'] . ' | ACL Smart Software',
    'pageDesc'  => $s['short'],
  ]);
  exit;
}

if (isset($routes[$uri])) { $routes[$uri](); exit; }

http_response_code(404);
render('404', [
  'services'  => $services,
  'pageTitle' => 'Pagina nu a fost găsită | ACL Smart Software',
  'pageDesc'  => 'Pagina pe care o cauți nu există sau a fost mutată.',
]);
