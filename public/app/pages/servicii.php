<?php
$workflow = [
  'custom-software-dev'     => ['Discovery & audit procese','Arhitectură + prototipare','Dezvoltare, testare, lansare','Mentenanță & optimizări'],
  'custom-web-app'          => ['Workshop nevoi & scope','UX/UI + arhitectură API','Implementare & QA automat','Scalare + monitorizare'],
  'website-build'           => ['Structură + conținut','Design & dezvoltare','SEO tehnic + performanță','Lansare & mentenanță'],
  'ecommerce-store'         => ['Analiză funnel & catalog','Integrare plăți + stoc','Automatizări & facturare','Optimizare conversie'],
  'saas-app-development'    => ['Definire MVP & roadmap','Arhitectură multi-tenant','Build + billing + admin','Scalare & securitate'],
  'qa-testing'              => ['Plan de testare','Testare funcțională','Automatizare E2E','Raportare & follow-up'],
  'api-integration'         => ['Specificație & mapping','Implementare + retry','Observabilitate','Hardening & QA'],
  'consulting-architecture' => ['Audit & diagnostic','Design arhitectural','Roadmap & prioritizare','Suport implementare'],
  'ai-chatbots'             => ['Definire fluxuri','Integrare CRM & canale','Antrenare + optimizare','Monitorizare performanță'],
];
$default = ['Discovery & plan','Design & implementare','QA & lansare','Îmbunătățiri continue'];
?>

<!-- Header -->
<section class="workflow-head">
  <div class="wrap" data-reveal>
    <h1>Flux de lucru pentru fiecare serviciu</h1>
    <p class="muted">Pași clari de la idee la produs în producție.</p>
  </div>
</section>

<!-- Workflow cards -->
<section>
  <div class="wrap">
    <div class="workflow-list">
      <?php foreach($services as $slug=>$s): $steps = $workflow[$slug] ?? $default; ?>
      <a class="wf-card" href="/servicii/<?= htmlspecialchars($slug) ?>" data-reveal-stagger>
        <div class="svc-icon"><?= $s['icon'] ?></div>
        <div class="wf-body">
          <h3><?= htmlspecialchars($s['title']) ?></h3>
          <p class="muted"><?= htmlspecialchars($s['short']) ?></p>
          <div class="wf-steps">
            <?php foreach($steps as $st): ?>
            <div class="wf-step"><?= htmlspecialchars($st) ?></div>
            <?php endforeach; ?>
          </div>
          <div class="wf-link">Vezi detalii →</div>
        </div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>
