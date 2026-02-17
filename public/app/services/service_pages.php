<?php
$viewKey = $service['view'] ?? '';
$extras = [
  'custom-software-dev' => [
    'intro' => 'Aplicații interne care reduc costurile și cresc controlul operațional.',
    'pills' => ['Discovery & Analiză','Arhitectură modulară','Livrare iterativă'],
    'blocks' => [
      ['heading'=>'Ce construim','text'=>'Aplicații software complet personalizate, adaptate exact pe procesele și nevoile afacerii tale. Sisteme interne de gestiune a comenzilor, dashboard-uri operaționale, motoare de automatizare a fluxurilor repetitive — proiectăm și livrăm soluții robuste, testate și pregătite de producție.'],
      ['heading'=>'Cum lucrăm','text'=>'Fiecare proiect începe cu o fază de discovery în care analizăm procesele existente, identificăm punctele de fricțiune și definim un scope clar. Construim arhitectura modulară, scalabilă, cu API-uri bine definite. Dezvoltăm iterativ, cu sprint-uri scurte, demo-uri frecvente și feedback constant.'],
      ['heading'=>'Ce primești','text'=>'Testare automată din prima zi, astfel încât fiecare release este stabil și predictibil. Lansare controlată cu monitorizare, alerting și suport post-launch. Optimizări continue bazate pe date reale.'],
    ],
    'fit' => [
      ['Companii cu procese interne complexe','Automatizare fluxuri, reducere erori manuale.'],
      ['Echipe distribuite','Dashboard-uri și tools pentru coordonare la distanță.'],
      ['Firme de logistică și producție','Gestiune comenzi, stocuri, flotte.'],
      ['Business-uri în creștere rapidă','Sisteme care scalează odată cu echipa.'],
    ],
  ],
  'custom-web-app' => [
    'intro' => 'Aplicații web rapide, sigure și ușor de extins.',
    'pills' => ['UX & Design','Frontend & Backend','Securitate & Scalare'],
    'blocks' => [
      ['heading'=>'Ce construim','text'=>'Aplicații web moderne — de la panouri de administrare și platforme interne până la produse publice cu mii de utilizatori. Folosim framework-uri dovedite, arhitectură API-first și componente reutilizabile.'],
      ['heading'=>'Procesul complet','text'=>'UX research și wireframe-uri, design UI responsiv, implementare frontend și backend, integrare cu servicii externe și optimizare de performanță. Aplicația încarcă rapid, funcționează impecabil pe orice dispozitiv.'],
      ['heading'=>'Securitate și mentenabilitate','text'=>'Autentificare, autorizare, validare input, protecție CSRF/XSS. Observabilitate completă: logs structurate, metrici, health checks. Cod curat, documentat și ușor de extins.'],
    ],
    'fit' => [
      ['Startup-uri cu MVP validat','Trecerea de la prototip la produs stabil.'],
      ['Companii B2B','Portale client, panouri admin, rapoarte.'],
      ['Echipe de produs','Platforme cu mii de utilizatori activi.'],
      ['Agenții și firme de servicii','Aplicații interne pentru operațiuni.'],
    ],
  ],
  'website-build' => [
    'intro' => 'Site-uri moderne, rapide și optimizate pentru conversie.',
    'pills' => ['Design responsiv','SEO & Performanță','Mentenanță inclusă'],
    'blocks' => [
      ['heading'=>'Ce construim','text'=>'Site-uri web performante, cu design curat și navigare fără fricțiune. Site de prezentare corporate, landing page pentru campanii sau blog optimizat SEO — livrăm soluții care arată profesionist și convertesc vizitatori în clienți.'],
      ['heading'=>'Totul inclus','text'=>'Structura informației, copywriting tehnic, design responsiv, implementare cu cod semantic, optimizare de viteză (Lighthouse 90+), configurare SEO tehnic și integrare analytics.'],
      ['heading'=>'Extensibil și întreținut','text'=>'Bază modulară, ușor de extins. Mentenanță lunară: update-uri de securitate, backup, monitorizare uptime și suport tehnic dedicat.'],
    ],
    'fit' => [
      ['IMM-uri și freelanceri','Prezență online profesională, rapidă.'],
      ['Clinici și cabinete','Site cu programări, servicii, locație.'],
      ['Restaurante și HoReCa','Meniu, rezervări, galerie foto.'],
      ['Agenții și consultanți','Landing page-uri și portofoliu.'],
      ['ONG-uri și instituții','Site informativ, transparent, accesibil.'],
    ],
  ],
  'ecommerce-store' => [
    'intro' => 'Magazine online optimizate pentru conversie și operațiuni.',
    'pills' => ['Catalog & Checkout','Plăți & Livrare','Optimizare conversie'],
    'blocks' => [
      ['heading'=>'Ce construim','text'=>'Magazine online complete: catalog, coș de cumpărături, checkout optimizat, integrări cu procesatori de plată (Stripe, Netopia, PayU) și sisteme de livrare. Fiecare magazin e gândit să maximizeze rata de conversie.'],
      ['heading'=>'Automatizări și integrări','text'=>'Sincronizare stocuri, generare automată de facturi, notificări de comandă, email-uri tranzacționale și rapoarte de vânzări. Feed-uri pentru marketplace-uri și campanii de remarketing.'],
      ['heading'=>'Optimizare conversie','text'=>'Filtrare avansată, pagini de produs rapide, checkout simplificat, guest checkout, upsell și cross-sell. Mai puține coșuri abandonate, operațiuni fluide.'],
    ],
    'fit' => [
      ['Magazine fizice care vor online','Digitalizare catalog și comenzi.'],
      ['Branduri D2C','Control total pe experiența de cumpărare.'],
      ['Producători locali','Magazin propriu, fără comisioane.'],
      ['Business-uri cu catalog mare','Filtrare, variante, stocuri automate.'],
      ['Firme B2B și B2C','Prețuri diferențiate, conturi corporate.'],
    ],
  ],
  'saas-app-development' => [
    'intro' => 'Platforme SaaS scalabile, de la MVP la produs matur.',
    'pills' => ['MVP rapid','Multi-tenant','Billing & Analytics'],
    'blocks' => [
      ['heading'=>'Ce construim','text'=>'Platforme SaaS de la zero — de la validarea ideii și MVP până la un produs matur, cu abonamente, facturare recurentă, administrare multi-tenant și analitice avansate.'],
      ['heading'=>'Arhitectură SaaS completă','text'=>'Izolare date per tenant, sistem de roluri și permisiuni granulare, onboarding automatizat, billing flexibil (Stripe Billing), dashboard admin și rapoarte de utilizare. Scalabilă de la 10 la 10.000 de utilizatori.'],
      ['heading'=>'Observabilitate și livrare','text'=>'Logs structurate, metrici de performanță, alerting și health checks din start. Sprint-uri scurte cu CI/CD automatizat — fiecare feature ajunge rapid în producție, testat și monitorizat.'],
    ],
    'fit' => [
      ['Fondatori cu o idee de produs','De la concept la MVP funcțional.'],
      ['Startup-uri early-stage','Lansare rapidă, iterație pe feedback real.'],
      ['Companii care vor să productizeze','Transformare serviciu în platformă.'],
      ['Echipe de produs existente','Scalare, billing, multi-tenancy.'],
    ],
  ],
  'qa-testing' => [
    'intro' => 'Testare manuală și automată pentru stabilitate și încredere.',
    'pills' => ['Testare manuală','Automatizare E2E','Integrare CI/CD'],
    'blocks' => [
      ['heading'=>'Ce oferim','text'=>'Servicii complete de testare QA — de la testare manuală exploratorie și de regresie până la automatizare completă cu Cypress, Playwright sau Selenium. Reducem defectele și creștem stabilitatea.'],
      ['heading'=>'Abordare structurată','text'=>'Plan de testare clar: scenarii critice, fluxuri de business, edge case-uri relevante. Testare funcțională, compatibilitate cross-browser, testare de performanță și securitate.'],
      ['heading'=>'Automatizare CI/CD','text'=>'Suite de teste automate integrate în pipeline: unit tests, integration tests, end-to-end tests. Raportare clară, cu prioritizare pe severitate și impact.'],
    ],
    'fit' => [
      ['Echipe fără QA dedicat','Externalizare testare, fără angajări.'],
      ['Startup-uri pre-launch','Validare completă înainte de lansare.'],
      ['Companii cu release-uri frecvente','Automatizare integrată în CI/CD.'],
      ['Proiecte cu cerințe de conformitate','Testare documentată, audituri.'],
      ['Echipe care vor mai puține bug-uri','Regresie și smoke tests automate.'],
    ],
  ],
  'api-integration' => [
    'intro' => 'Integrări sigure și reziliente între sisteme.',
    'pills' => ['Plăți & CRM','Reziliență & Logging','Migrare API'],
    'blocks' => [
      ['heading'=>'Ce conectăm','text'=>'Procesatori de plăți (Stripe, PayPal, Netopia), CRM-uri (HubSpot, Salesforce), ERP-uri, platforme de email marketing, servicii de logistică, API-uri AI (OpenAI, Anthropic).'],
      ['heading'=>'Reziliență și fiabilitate','text'=>'Retry logic, circuit breaker, validare de date și logging detaliat. Documentăm fiecare flux, definim contracte clare între sisteme și implementăm webhook-uri.'],
      ['heading'=>'Consultanță și migrare','text'=>'Alegerea API-urilor potrivite, optimizarea costurilor de integrare și migrarea de la integrări vechi la soluții moderne.'],
    ],
    'fit' => [
      ['Companii cu mai multe sisteme','Sincronizare date între aplicații.'],
      ['Magazine online cu integrări multiple','Plăți, livrare, facturare, stocuri.'],
      ['Echipe care migrează de la legacy','Înlocuire integrări vechi cu API modern.'],
      ['Fintech și plăți','Integrări sigure cu procesatori.'],
      ['Business-uri care vor automatizări','Conectare CRM, ERP, email, analytics.'],
    ],
  ],
  'consulting-architecture' => [
    'intro' => 'Decizii tehnice solide: audit, arhitectură, roadmap.',
    'pills' => ['Audit de cod','Design arhitectură','Roadmap tehnic'],
    'blocks' => [
      ['heading'=>'Ce oferim','text'=>'Consultanță tehnică pentru echipe și fondatori care au nevoie de claritate înainte de a începe sau continua un proiect software. Audit de cod, evaluare arhitectură, identificare riscuri tehnice.'],
      ['heading'=>'Review și design','text'=>'Review de arhitectură (monolith vs microservices, alegere tech stack, design patterns), audit de securitate, evaluare de scalabilitate. Roadmap tehnic cu etape, estimări și dependențe clare.'],
      ['heading'=>'Suport hands-on','text'=>'Lucrăm și cu echipe cu produs în producție dar cu probleme de performanță, datorii tehnice sau dificultăți de scalare. Recomandări acționabile, documentație clară.'],
    ],
    'fit' => [
      ['CTO-uri și tech leads','Second opinion pe decizii de arhitectură.'],
      ['Fondatori non-tehnici','Claritate tehnică înainte de a investi.'],
      ['Echipe care vor să scaleze','Evaluare și plan de creștere.'],
      ['Companii cu datorie tehnică','Audit, prioritizare și roadmap de refactorizare.'],
    ],
  ],
  'ai-chatbots' => [
    'intro' => 'Chatboți orientați pe suport și vânzări, cu integrare completă.',
    'pills' => ['RAG & LLM','Integrare multicanal','Monitorizare & Optimizare'],
    'blocks' => [
      ['heading'=>'Ce construim','text'=>'Chatboți AI personalizați care automatizează suportul, califică lead-uri și reduc volumul de tichete. Integrăm cu website-ul, WhatsApp, Facebook Messenger sau alte canale.'],
      ['heading'=>'Tehnologie modernă','text'=>'RAG, embeddings, LLM-uri fine-tuned — chatboți care înțeleg contextul, răspund natural și știu când să escaladeze către un agent uman. Antrenați pe documentația ta specifică.'],
      ['heading'=>'Monitorizare și optimizare','text'=>'Analizăm rata de rezolvare, identificăm întrebările frecvente fără răspuns și optimizăm continuu. Costuri de suport reduse cu 40-60%, timp de răspuns instant 24/7.'],
    ],
    'fit' => [
      ['Magazine online','Răspunsuri instant la întrebări despre produse, comenzi, retur.'],
      ['Companii cu volum mare de suport','Reducere tichete cu 40-60%.'],
      ['Agenții imobiliare','Calificare lead-uri și programare vizionări automat.'],
      ['Clinici și centre medicale','Programări, informații servicii, FAQ medical.'],
      ['Business-uri cu FAQ complex','Răspunsuri precise, antrenate pe documentația ta.'],
    ],
  ],
];

$intro  = $extras[$viewKey]['intro']  ?? '';
$blocks = $extras[$viewKey]['blocks'] ?? [];
$fit    = $extras[$viewKey]['fit']    ?? [];
$pills  = $extras[$viewKey]['pills']  ?? ['Audit & Discovery','Build & Launch','Suport continuu'];
?>

<!-- Service Hero -->
<section class="svc-hero hero">
  <div class="hero-bg">
    <video autoplay muted loop playsinline>
      <source src="/assets/video/hero-bg.mp4" type="video/mp4">
    </video>
  </div>
  <canvas></canvas>

  <div class="wrap" data-reveal>

    <h1><?= htmlspecialchars($service['title']) ?></h1>
    <p><?= htmlspecialchars($service['short']) ?><?= $intro ? ' ' . htmlspecialchars($intro) : '' ?></p>
    <div class="svc-pills">
      <?php $styles=['badge-hot','badge-pop','badge-new']; foreach($pills as $i=>$pill): ?>
      <span class="badge <?= $styles[$i] ?? 'badge-hot' ?>"><?= htmlspecialchars($pill) ?></span>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php if($blocks): ?>
<!-- Timeline -->
<section class="timeline">
  <div class="wrap">
    <div class="timeline-head" data-reveal>

    </div>
    <div class="timeline-steps">
      <?php $n=1; foreach($blocks as $b): ?>
      <div class="step" data-reveal-stagger>
        <div class="step-num"><?= sprintf('%02d',$n++) ?></div>
        <div class="step-content">
          <h3><?= htmlspecialchars($b['heading']) ?></h3>
          <p><?= htmlspecialchars($b['text']) ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if($fit): ?>
<!-- Fit section -->
<section>
  <div class="wrap">
    <div class="fit-head" data-reveal>

    </div>
    <div class="fit-list">
      <?php foreach($fit as $f): ?>
      <div class="fit-item" data-reveal-stagger>
        <div class="fit-check">
          <svg width="16" height="16" viewBox="0 0 20 20" fill="none"><path d="M16.7 5.3a1 1 0 010 1.4l-8 8a1 1 0 01-1.4 0l-4-4a1 1 0 111.4-1.4L8 12.58l7.3-7.3a1 1 0 011.4 0Z" fill="currentColor"/></svg>
        </div>
        <div class="fit-text">
          <strong><?= htmlspecialchars($f[0]) ?></strong>
          <span><?= htmlspecialchars($f[1]) ?></span>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- CTA -->
<section class="cta-band" data-reveal>
  <div class="wrap">
    <h2>Preț personalizat în funcție de nevoie</h2>
    <button class="btn btn-primary" data-modal-trigger>Solicită ofertă →</button>
  </div>
</section>
