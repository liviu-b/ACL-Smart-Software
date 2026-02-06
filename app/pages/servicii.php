<section class="page-head">
  <div class="container">
    <h1>Servicii</h1>
    <p class="muted">Flux de lucru și abordare pentru fiecare serviciu.</p>
  </div>
</section>

<?php
$workflow = [
  'custom-software-dev' => [
    'steps' => [
      'Discovery & audit procese',
      'Arhitectură + prototipare',
      'Dezvoltare, testare, lansare',
      'Mentenanță & optimizări continue',
    ],
  ],
  'custom-web-app' => [
    'steps' => [
      'Workshop de nevoi & scope',
      'UX/UI + arhitectură API',
      'Implementare & QA automat',
      'Scalare + monitorizare',
    ],
  ],
  'website-build' => [
    'steps' => [
      'Structură + conținut',
      'Design & dezvoltare',
      'SEO tehnic + performanță',
      'Lansare & mentenanță',
    ],
  ],
  'ecommerce-store' => [
    'steps' => [
      'Analiză funnel & catalog',
      'Integrare plăți + stoc',
      'Automatizări & facturare',
      'Optimizare conversie',
    ],
  ],
  'saas-app-development' => [
    'steps' => [
      'Definire MVP & roadmap',
      'Arhitectură multi‑tenant',
      'Build + billing + admin',
      'Scalare & securitate',
    ],
  ],
  'qa-testing' => [
    'steps' => [
      'Plan de testare',
      'Testare funcțională',
      'Automatizare E2E',
      'Raportare & follow‑up',
    ],
  ],
  'api-integration' => [
    'steps' => [
      'Specificație & mapping',
      'Implementare + retry',
      'Observabilitate',
      'Hardening & QA',
    ],
  ],
  'consulting-architecture' => [
    'steps' => [
      'Audit & diagnostic',
      'Design arhitectural',
      'Roadmap & prioritizare',
      'Suport implementare',
    ],
  ],
  'ai-chatbots' => [
    'steps' => [
      'Definire fluxuri',
      'Integrare CRM & canale',
      'Antrenare + optimizare',
      'Monitorizare performanță',
    ],
  ],
];

$defaultSteps = [
  'Discovery & plan',
  'Design & implementare',
  'QA & lansare',
  'Îmbunătățiri continue',
];
?>

<section class="section">
  <div class="container">
    <div class="services-diagram" aria-label="Diagrame servicii">
      <div class="diagram-line" aria-hidden="true"></div>
      <?php foreach ($services as $slug => $s): ?>
        <?php $steps = $workflow[$slug]['steps'] ?? $defaultSteps; ?>
        <div class="diagram-node" data-reveal>
          <a class="diagram-card" href="/servicii/<?= htmlspecialchars($slug) ?>">
            <div class="diagram-icon"><?= htmlspecialchars($s['icon']) ?></div>
            <div class="diagram-content">
              <div class="diagram-title"><?= htmlspecialchars($s['title']) ?></div>
              <div class="diagram-desc muted"><?= htmlspecialchars($s['short']) ?></div>
              <div class="diagram-steps">
                <?php foreach ($steps as $step): ?>
                  <span class="diagram-step"><?= htmlspecialchars($step) ?></span>
                <?php endforeach; ?>
              </div>
              <div class="diagram-link">Vezi detalii →</div>
            </div>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
