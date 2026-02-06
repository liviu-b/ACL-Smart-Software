<?php
$viewKey = $service['view'] ?? '';
$extras = [
  'custom-software-dev' => [
    'intro' => 'Aplicatii interne care reduc costurile si cresc controlul operational.',
    'workflow' => [
      ['Discovery & scope', 'Analiza proceselor si clarificare obiective.'],
      ['Arhitectura & prototip', 'Design scalabil si validare rapida.'],
      ['Build & QA', 'Livrari iterative cu testare automata.'],
      ['Launch & optimize', 'Monitorizare si imbunatatiri continue.'],
    ],
    'values' => [
      ['UX', 'Fluxuri clare', 'Experiente curate si eficiente.'],
      ['Performance', 'Rapid si stabil', 'Optimizari tehnice si observabilitate.'],
      ['Scalability', 'Pregatit de crestere', 'Arhitectura modulara, API-first.'],
    ],
  ],
  'custom-web-app' => [
    'intro' => 'Aplicatii web rapide, sigure si usor de extins.',
    'workflow' => [
      ['Discovery & scope', 'Obiective, KPI si cerinte tehnice.'],
      ['UX/UI & architecture', 'Flow-uri clare si arhitectura moderna.'],
      ['Build & QA', 'Implementare + testare automata.'],
      ['Launch & optimize', 'Monitorizare si imbunatatiri continue.'],
    ],
    'values' => [
      ['UX', 'Conversion-first', 'User journeys optimizate.'],
      ['Performance', 'Fast by design', 'Optimizari si caching.'],
      ['Scalability', 'Ready to grow', 'Componentizare si API-first.'],
    ],
  ],
  'website-build' => [
    'intro' => 'Site-uri moderne, rapide si optimizate pentru conversie.',
    'workflow' => [
      ['Structura & continut', 'Definire layout si informatie.'],
      ['Design & build', 'UI curat si implementare.'],
      ['SEO & performance', 'Optimizare tehnica completa.'],
      ['Launch & support', 'Lansare si mentenanta.'],
    ],
    'values' => [
      ['UX', 'Clar si curat', 'Navigare fara frictiune.'],
      ['Performance', 'Rapid', 'Timp de incarcare optim.'],
      ['Scalability', 'Extensibil', 'Structura modulara.'],
    ],
  ],
  'ecommerce-store' => [
    'intro' => 'Magazine online optimizate pentru conversie si operatiuni.',
    'workflow' => [
      ['Audit catalog & funnel', 'Analiza produse si parcurs client.'],
      ['Plati & livrare', 'Integrari cu procesatori si curieri.'],
      ['Automatizari', 'Facturare si stocuri.'],
      ['Optimizare conversie', 'Testare si imbunatatiri.'],
    ],
    'values' => [
      ['UX', 'Checkout rapid', 'Conversie crescuta.'],
      ['Performance', 'Stabil', 'Fluxuri eficiente.'],
      ['Scalability', 'Ready to scale', 'Operatiuni automatizate.'],
    ],
  ],
  'saas-app-development' => [
    'intro' => 'Platforme SaaS scalabile, de la MVP la produs matur.',
    'workflow' => [
      ['MVP & roadmap', 'Validare rapida si plan clar.'],
      ['Multi-tenant', 'Arhitectura scalabila.'],
      ['Billing & admin', 'Abonamente, plati, analytics.'],
      ['Scale & security', 'Stabilitate si securitate.'],
    ],
    'values' => [
      ['UX', 'Onboarding clar', 'Adoptie rapida.'],
      ['Performance', 'Reliable', 'Observabilitate completa.'],
      ['Scalability', 'Enterprise-ready', 'Arhitectura elastica.'],
    ],
  ],
  'qa-testing' => [
    'intro' => 'Testare manuala si automata pentru stabilitate si securitate.',
    'workflow' => [
      ['Plan de testare', 'Scenarii critice si scope.'],
      ['Testare functionala', 'Regresie si validare.'],
      ['Automatizare', 'Unit, integration, E2E.'],
      ['Raportare', 'Prioritizare si fix-uri.'],
    ],
    'values' => [
      ['UX', 'Stabilitate', 'Experienta fara erori.'],
      ['Performance', 'Predictibil', 'Reducere defecte.'],
      ['Scalability', 'Sisteme robuste', 'QA continuu.'],
    ],
  ],
  'api-integration' => [
    'intro' => 'Integrari sigure si reziliente intre sisteme.',
    'workflow' => [
      ['Mapping & contracte', 'Definire fluxuri si date.'],
      ['Implementare', 'Retry logic si validari.'],
      ['Observabilitate', 'Logs si monitorizare.'],
      ['Hardening', 'Testare si stabilizare.'],
    ],
    'values' => [
      ['UX', 'Fluxuri clare', 'Date corecte, sincronizate.'],
      ['Performance', 'Stabil', 'Erori minime.'],
      ['Scalability', 'Extensibil', 'Integrari viitoare.'],
    ],
  ],
  'consulting-architecture' => [
    'intro' => 'Decizii tehnice solide: audit, arhitectura, roadmap.',
    'workflow' => [
      ['Audit tehnic', 'Identificare riscuri.'],
      ['Design arhitectural', 'Propuneri scalabile.'],
      ['Roadmap', 'Prioritati si etape.'],
      ['Suport', 'Implementare asistata.'],
    ],
    'values' => [
      ['UX', 'Claritate', 'Decizii rapide.'],
      ['Performance', 'Cost control', 'Eficienta tehnica.'],
      ['Scalability', 'Pe termen lung', 'Arhitectura robusta.'],
    ],
  ],
  'ai-chatbots' => [
    'intro' => 'Chatboti orientati pe suport si vanzari, cu integrare completa.',
    'workflow' => [
      ['Intentii & fluxuri', 'Scenarii conversationale.'],
      ['Integrari', 'CRM, canale, widget.'],
      ['Antrenare', 'RAG si optimizare.'],
      ['Monitorizare', 'Analitice si imbunatatiri.'],
    ],
    'values' => [
      ['UX', 'Conversational', 'Interactiuni naturale.'],
      ['Performance', 'Reducere costuri', 'Tichete mai putine.'],
      ['Scalability', 'Automatizare', 'Operatiuni eficiente.'],
    ],
  ],
];

$intro = $extras[$viewKey]['intro'] ?? '';
$workflow = $extras[$viewKey]['workflow'] ?? [];
$values = $extras[$viewKey]['values'] ?? [];
?>

<section class="service-hero">
  <div class="container service-hero-grid">
    <div class="service-hero-left">
      <div class="service-pill service-pill-center">Servicii</div>
      <h1><?= htmlspecialchars($service['title']) ?></h1>
      <p class="service-hero-text">
        <?= htmlspecialchars($service['short']) ?>
        <?= $intro ? ' ' . htmlspecialchars($intro) : '' ?>
      </p>
      <div class="service-hero-ctas">
        <a class="btn btn-primary" href="/contact">Solicita oferta</a>
      </div>
    </div>
    <div class="service-hero-right">
      <div class="service-mockup">
        <div class="mockup-card mockup-main">
          <div class="mockup-bar"><span></span><span></span><span></span></div>
          <pre class="mockup-code"><code>
<span class="code-k">interface</span> <span class="code-t">ServiceFlow</span> {
  audit: <span class="code-t">Step</span>;
  build: <span class="code-t">Step</span>;
  scale: <span class="code-t">Step</span>;
}

<span class="code-k">const</span> <span class="code-v">workflow</span> = [
  <span class="code-s">"Discovery"</span>,
  <span class="code-s">"Design"</span>,
  <span class="code-s">"Build"</span>,
  <span class="code-s">"Launch"</span>
];
          </code></pre>
        </div>
        <div class="mockup-card mockup-side">
          <div class="mockup-line"></div>
          <div class="mockup-line"></div>
          <div class="mockup-line short"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section workflow-section">
  <div class="container">
    <div class="section-head">
      <div class="service-pill service-pill-center">Workflow</div>
    </div>
    <div class="workflow-timeline horizontal">
      <?php $i = 1; foreach ($workflow as $step): ?>
        <div class="workflow-step">
          <div class="workflow-number"><?= sprintf('%02d', $i++) ?></div>
          <div class="workflow-content">
            <h3><?= htmlspecialchars($step[0]) ?></h3>
            <p class="muted"><?= htmlspecialchars($step[1]) ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section">
  <div class="container cta-simple" data-reveal>
    <h2>Pret personalizat in functie de nevoie</h2>
    <p class="muted">Spune-ne scope-ul, iar noi propunem o estimare clara.</p>
    <a class="btn btn-primary" href="/contact">Solicita oferta</a>
  </div>
</section>
