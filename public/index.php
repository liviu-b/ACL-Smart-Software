<?php
declare(strict_types=1);

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? '/';
$uri = rtrim($uri, '/');
$uri = $uri === '' ? '/' : $uri;

$services = require __DIR__ . '/app/config/services.php';

function render(string $view, array $data = []): void {
  extract($data, EXTR_SKIP);
  require __DIR__ . '/app/partials/header.php';
  require __DIR__ . '/app/pages/' . $view . '.php';
  require __DIR__ . '/app/partials/footer.php';
}

function renderService(string $serviceView, array $data = []): void {
  extract($data, EXTR_SKIP);
  require __DIR__ . '/app/partials/header.php';
  require __DIR__ . '/app/services/service_pages.php';
  require __DIR__ . '/app/partials/footer.php';
}

$routes = [
  '/' => fn() => render('cine-suntem', ['services' => $services]),
  '/ce-putem-oferi' => fn() => render('ce-putem-oferi', ['services' => $services]),
  '/servicii' => fn() => render('servicii', ['services' => $services]),
  '/portofoliu' => fn() => render('portofoliu', ['services' => $services]),
  '/termeni-si-conditii' => fn() => render('termeni-si-conditii', ['services' => $services]),
  '/gdpr' => fn() => render('gdpr', ['services' => $services]),
];

// Service routes: /servicii/{slug}
if (preg_match('#^/servicii/([a-z0-9\-]+)$#', $uri, $m)) {
  $slug = $m[1];
  if (isset($services[$slug])) {
    $view = $services[$slug]['view'];
    renderService($view, ['service' => $services[$slug], 'services' => $services]);
    exit;
  }
  http_response_code(404);
  render('cine-suntem', ['services' => $services]); // fallback
  exit;
}

if (isset($routes[$uri])) {
  $routes[$uri]();
  exit;
}

http_response_code(404);
render('cine-suntem', ['services' => $services]);
