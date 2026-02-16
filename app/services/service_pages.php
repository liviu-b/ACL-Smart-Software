<?php
$viewKey = $service['view'] ?? '';
$extras = [
  'custom-software-dev' => [
    'intro' => 'Aplicatii interne care reduc costurile si cresc controlul operational.',
    'pills' => ['Discovery & Analiza', 'Arhitectura modulara', 'Livrare iterativa'],
    'blocks' => [
      [
        'heading' => 'Ce construim',
        'text' => 'Aplicatii software complet personalizate, adaptate exact pe procesele si nevoile afacerii tale. Sisteme interne de gestiune a comenzilor, dashboard-uri operationale pentru echipe distribuite, motoare de automatizare a fluxurilor repetitive — proiectam si livram solutii robuste, testate si pregatite de productie.',
      ],
      [
        'heading' => 'Cum lucram',
        'text' => 'Fiecare proiect incepe cu o faza de discovery in care analizam impreuna procesele existente, identificam punctele de frictiune si definim un scope clar. Construim arhitectura modulara, scalabila, cu API-uri bine definite si separare clara a responsabilitatilor. Dezvoltam iterativ, cu sprint-uri scurte, demo-uri frecvente si feedback constant.',
      ],
      [
        'heading' => 'Ce primesti',
        'text' => 'Testare automata (unit, integration, E2E) din prima zi, astfel incat fiecare release este stabil si predictibil. Lansare controlata cu monitorizare, alerting si suport post-launch. Optimizari continue bazate pe date reale, nu presupuneri.',
      ],
    ],
    'fit' => [
      ['Companii cu procese interne complexe', 'Automatizare fluxuri, reducere erori manuale.'],
      ['Echipe distribuite', 'Dashboard-uri si tools pentru coordonare la distanta.'],
      ['Firme de logistica si productie', 'Gestiune comenzi, stocuri, flotte.'],
      ['Business-uri in crestere rapida', 'Sisteme care scaleaza odata cu echipa.'],
    ],
  ],
  'custom-web-app' => [
    'intro' => 'Aplicatii web rapide, sigure si usor de extins.',
    'pills' => ['UX & Design', 'Frontend & Backend', 'Securitate & Scalare'],
    'blocks' => [
      [
        'heading' => 'Ce construim',
        'text' => 'Aplicatii web moderne — de la panouri de administrare si platforme interne pana la produse publice cu mii de utilizatori. Folosim framework-uri dovedite, arhitectura API-first si componente reutilizabile pentru a livra rapid, fara compromisuri la calitate.',
      ],
      [
        'heading' => 'Procesul complet',
        'text' => 'UX research si wireframe-uri, design UI responsiv, implementare frontend si backend, integrare cu servicii externe (plati, email, analytics) si optimizare de performanta. Aplicatia incarca rapid, functioneaza impecabil pe orice dispozitiv si e pregatita sa creasca odata cu business-ul tau.',
      ],
      [
        'heading' => 'Securitate si mentenabilitate',
        'text' => 'Autentificare, autorizare, validare input, protectie CSRF/XSS. Observabilitate completa: logs structurate, metrici, health checks. Cod curat, documentat si usor de extins de orice echipa tehnica. Pregatit pentru audit si scalare.',
      ],
    ],
    'fit' => [
      ['Startup-uri cu MVP validat', 'Trecerea de la prototip la produs stabil.'],
      ['Companii B2B', 'Portale client, panouri admin, rapoarte.'],
      ['Echipe de produs', 'Platforme cu mii de utilizatori activi.'],
      ['Agentii si firme de servicii', 'Aplicatii interne pentru operatiuni.'],
    ],
  ],
  'website-build' => [
    'intro' => 'Site-uri moderne, rapide si optimizate pentru conversie.',
    'pills' => ['Design responsiv', 'SEO & Performanta', 'Mentenanta inclusa'],
    'blocks' => [
      [
        'heading' => 'Ce construim',
        'text' => 'Site-uri web performante, cu design curat si navigare fara frictiune. Site de prezentare corporate, landing page pentru campanii sau blog optimizat SEO — livram solutii care arata profesionist si convertesc vizitatori in clienti.',
      ],
      [
        'heading' => 'Totul inclus',
        'text' => 'Structura informatiei, copywriting tehnic, design responsiv, implementare cu cod semantic, optimizare de viteza (Lighthouse 90+), configurare SEO tehnic (meta tags, sitemap, schema markup, Core Web Vitals) si integrare analytics.',
      ],
      [
        'heading' => 'Extensibil si intretinut',
        'text' => 'Baza modulara, usor de extins — poti adauga pagini, sectiuni sau functionalitati noi fara refactorizari majore. Mentenanta lunara: update-uri de securitate, backup, monitorizare uptime si suport tehnic dedicat.',
      ],
    ],
    'fit' => [
      ['IMM-uri si freelanceri', 'Prezenta online profesionala, rapida.'],
      ['Clinici si cabinete', 'Site cu programari, servicii, locatie.'],
      ['Restaurante si HoReCa', 'Meniu, rezervari, galerie foto.'],
      ['Agentii si consultanti', 'Landing page-uri de campanie si portofoliu.'],
      ['ONG-uri si institutii', 'Site informativ, transparent, accesibil.'],
    ],
  ],
  'ecommerce-store' => [
    'intro' => 'Magazine online optimizate pentru conversie si operatiuni.',
    'pills' => ['Catalog & Checkout', 'Plati & Livrare', 'Optimizare conversie'],
    'blocks' => [
      [
        'heading' => 'Ce construim',
        'text' => 'Magazine online complete: catalog, cos de cumparaturi, checkout optimizat, integrari cu procesatori de plata (Stripe, Netopia, PayU) si sisteme de livrare (FAN Courier, Sameday, DPD). Fiecare magazin este gandit sa maximizeze rata de conversie si sa simplifice operatiunile zilnice.',
      ],
      [
        'heading' => 'Automatizari si integrari',
        'text' => 'Sincronizare stocuri, generare automata de facturi (SmartBill, Oblio), notificari de comanda, email-uri transactionale si rapoarte de vanzari. Feed-uri pentru marketplace-uri (eMAG, Google Shopping) si campanii de remarketing integrate.',
      ],
      [
        'heading' => 'Optimizare conversie',
        'text' => 'Filtrare avansata, pagini de produs rapide, checkout simplificat, guest checkout, upsell si cross-sell. Mai putine cosuri abandonate, operatiuni fluide si o experienta de cumparare care fidelizeaza clientii pe termen lung.',
      ],
    ],
    'fit' => [
      ['Magazine fizice care vor sa vanda online', 'Digitalizare catalog si comenzi.'],
      ['Branduri D2C (direct-to-consumer)', 'Control total pe experienta de cumparare.'],
      ['Producatori locali si artizani', 'Magazin propriu, fara comisioane marketplace.'],
      ['Business-uri cu catalog mare', 'Filtrare, variante, stocuri automate.'],
      ['Firme cu vanzari B2B si B2C', 'Preturi diferentiate, conturi corporate.'],
    ],
  ],
  'saas-app-development' => [
    'intro' => 'Platforme SaaS scalabile, de la MVP la produs matur.',
    'pills' => ['MVP rapid', 'Multi-tenant', 'Billing & Analytics'],
    'blocks' => [
      [
        'heading' => 'Ce construim',
        'text' => 'Platforme SaaS de la zero — de la validarea ideii si MVP pana la un produs matur, cu abonamente, facturare recurenta, administrare multi-tenant si analitice avansate. Lucram cu fondatori, startup-uri si echipe de produs care vor sa lanseze rapid si sa itereze pe baza feedback-ului real.',
      ],
      [
        'heading' => 'Arhitectura SaaS completa',
        'text' => 'Izolare date per tenant, sistem de roluri si permisiuni granulare, onboarding automatizat, billing flexibil (Stripe Billing, integrari locale), dashboard admin si rapoarte de utilizare. Totul pe o baza scalabila, pregatita sa sustina cresterea de la 10 la 10.000 de utilizatori fara refactorizari.',
      ],
      [
        'heading' => 'Observabilitate si livrare',
        'text' => 'Logs structurate, metrici de performanta, alerting si health checks din start. Sprint-uri scurte cu CI/CD automatizat — fiecare feature ajunge rapid in productie, testat si monitorizat. Zero surprize la deploy.',
      ],
    ],
    'fit' => [
      ['Fondatori cu o idee de produs', 'De la concept la MVP functional.'],
      ['Startup-uri early-stage', 'Lansare rapida, iteratie pe feedback real.'],
      ['Companii care vor sa productizeze un serviciu', 'Transformare serviciu in platforma.'],
      ['Echipe de produs existente', 'Scalare, billing, multi-tenancy.'],
    ],
  ],
  'qa-testing' => [
    'intro' => 'Testare manuala si automata pentru stabilitate si incredere.',
    'pills' => ['Testare manuala', 'Automatizare E2E', 'Integrare CI/CD'],
    'blocks' => [
      [
        'heading' => 'Ce oferim',
        'text' => 'Servicii complete de testare QA — de la testare manuala exploratorie si de regresie pana la automatizare completa cu Cypress, Playwright sau Selenium. Reducem defectele, crestem stabilitatea si iti dam incredere ca fiecare release functioneaza corect.',
      ],
      [
        'heading' => 'Abordare structurata',
        'text' => 'Plan de testare clar: scenarii critice, fluxuri de business, edge case-uri relevante. Testare functionala, compatibilitate (cross-browser, cross-device), testare de performanta si testare de securitate de baza. Nimic nu ajunge in productie fara validare.',
      ],
      [
        'heading' => 'Automatizare CI/CD',
        'text' => 'Suite de teste automate integrate in pipeline: unit tests, integration tests, end-to-end tests. Raportare clara, cu prioritizare pe severitate si impact. Lucram direct cu echipa de dezvoltare pentru a rezolva rapid problemele identificate.',
      ],
    ],
    'fit' => [
      ['Echipe fara QA dedicat', 'Externalizare testare, fara angajari.'],
      ['Startup-uri pre-launch', 'Validare completa inainte de lansare.'],
      ['Companii cu release-uri frecvente', 'Automatizare integrata in CI/CD.'],
      ['Proiecte cu cerinte de conformitate', 'Testare documentata, audituri.'],
      ['Echipe care vor sa reduca bug-urile', 'Regresie si smoke tests automate.'],
    ],
  ],
  'api-integration' => [
    'intro' => 'Integrari sigure si reziliente intre sisteme.',
    'pills' => ['Plati & CRM', 'Rezilienta & Logging', 'Migrare API'],
    'blocks' => [
      [
        'heading' => 'Ce conectam',
        'text' => 'Procesatori de plati (Stripe, PayPal, Netopia), CRM-uri (HubSpot, Salesforce), ERP-uri, platforme de email marketing (Mailchimp, SendGrid), servicii de logistica, API-uri AI (OpenAI, Anthropic) si orice alt serviciu extern relevant pentru business-ul tau.',
      ],
      [
        'heading' => 'Rezilienta si fiabilitate',
        'text' => 'Retry logic, circuit breaker, validare de date si logging detaliat — integrarea functioneaza stabil chiar si cand serviciile externe au probleme. Documentam fiecare flux, definim contracte clare intre sisteme si implementam webhook-uri si event-driven architecture.',
      ],
      [
        'heading' => 'Consultanta si migrare',
        'text' => 'Alegerea API-urilor potrivite, optimizarea costurilor de integrare si migrarea de la integrari vechi la solutii moderne. Un ecosistem de aplicatii conectat, fiabil si usor de monitorizat pe termen lung.',
      ],
    ],
    'fit' => [
      ['Companii cu mai multe sisteme interne', 'Sincronizare date intre aplicatii.'],
      ['Magazine online cu integrari multiple', 'Plati, livrare, facturare, stocuri.'],
      ['Echipe care migreaza de la legacy', 'Inlocuire integrari vechi cu API modern.'],
      ['Fintech si plati', 'Integrari sigure cu procesatori.'],
      ['Business-uri care vor automatizari', 'Conectare CRM, ERP, email, analytics.'],
    ],
  ],
  'consulting-architecture' => [
    'intro' => 'Decizii tehnice solide: audit, arhitectura, roadmap.',
    'pills' => ['Audit de cod', 'Design arhitectura', 'Roadmap tehnic'],
    'blocks' => [
      [
        'heading' => 'Ce oferim',
        'text' => 'Consultanta tehnica pentru echipe si fondatori care au nevoie de claritate inainte de a incepe (sau continua) un proiect software. Audit de cod, evaluare arhitectura existenta, identificare riscuri tehnice si propuneri concrete, prioritizate si realiste.',
      ],
      [
        'heading' => 'Review si design',
        'text' => 'Review de arhitectura (monolith vs microservices, alegere tech stack, design patterns), audit de securitate de baza, evaluare de scalabilitate si performanta. Roadmap tehnic cu etape, estimari si dependente clare — nu documente vagi, ci planuri actionabile.',
      ],
      [
        'heading' => 'Suport hands-on',
        'text' => 'Lucram si cu echipe care au deja un produs in productie dar se confrunta cu probleme de performanta, datorii tehnice sau dificultati de scalare. Recomandari actionabile, documentatie clara si, la cerere, suport direct pentru implementarea schimbarilor.',
      ],
    ],
    'fit' => [
      ['CTO-uri si tech leads', 'Second opinion pe decizii de arhitectura.'],
      ['Fondatori non-tehnici', 'Claritate tehnica inainte de a investi.'],
      ['Echipe care vor sa scaleze', 'Evaluare si plan de crestere.'],
      ['Companii cu datorie tehnica', 'Audit, prioritizare si roadmap de refactorizare.'],
    ],
  ],
  'ai-chatbots' => [
    'intro' => 'Chatboti orientati pe suport si vanzari, cu integrare completa.',
    'pills' => ['RAG & LLM', 'Integrare multicanal', 'Monitorizare & Optimizare'],
    'blocks' => [
      [
        'heading' => 'Ce construim',
        'text' => 'Chatboti AI personalizati care automatizeaza suportul, califica lead-uri si reduc volumul de tichete. Integram cu website-ul tau, WhatsApp, Facebook Messenger sau alte canale — si conectam chatbot-ul cu CRM-ul, baza de cunostinte si sistemele interne existente.',
      ],
      [
        'heading' => 'Tehnologie moderna',
        'text' => 'RAG, embeddings, LLM-uri fine-tuned — chatboti care inteleg contextul, raspund natural si stiu cand sa escaladeze catre un agent uman. Antrenati pe documentatia, FAQ-urile si procesele tale specifice, astfel incat raspunsurile sa fie relevante si precise.',
      ],
      [
        'heading' => 'Monitorizare si optimizare',
        'text' => 'Analizam rata de rezolvare, identificam intrebarile frecvente fara raspuns si optimizam continuu. Costuri de suport reduse cu 40-60%, timp de raspuns instant 24/7 si o experienta de client superioara, masurabila din prima luna.',
      ],
    ],
    'fit' => [
      ['Magazine online', 'Raspunsuri instant la intrebari despre produse, comenzi, retur.'],
      ['Companii cu volum mare de suport', 'Reducere tichete cu 40-60%.'],
      ['Agentii imobiliare', 'Calificare lead-uri si programare vizionari automat.'],
      ['Clinici si centre medicale', 'Programari, informatii servicii, FAQ medical.'],
      ['Business-uri cu FAQ complex', 'Raspunsuri precise, antrenate pe documentatia ta.'],
    ],
  ],
];

$intro  = $extras[$viewKey]['intro']  ?? '';
$blocks = $extras[$viewKey]['blocks'] ?? [];
$fit    = $extras[$viewKey]['fit']    ?? [];
$pills  = $extras[$viewKey]['pills']  ?? ['Audit & Discovery', 'Build & Launch', 'Suport continuu'];
?>

<section class="service-hero service-hero-redesign" data-reveal>
  <div class="container service-hero-grid">
    <div class="service-hero-left service-hero-left-redesign">
      <div class="service-pill">Servicii</div>
      <h1><?= htmlspecialchars($service['title']) ?></h1>
      <p class="service-hero-text">
        <?= htmlspecialchars($service['short']) ?>
        <?= $intro ? ' ' . htmlspecialchars($intro) : '' ?>
      </p>
      <div class="service-pills-row">
        <?php $pillClasses = ['most', 'popular', 'new']; ?>
        <?php foreach ($pills as $i => $pill): ?>
          <span class="badge-pill <?= $pillClasses[$i] ?? 'most' ?>"><?= htmlspecialchars($pill) ?></span>
        <?php endforeach; ?>
      </div>
    </div>

    <div class="service-hero-right service-hero-right-redesign">
      <div class="service-mockup service-window-only">
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
      </div>
    </div>
  </div>
</section>

<?php if ($blocks): ?>
<section class="svc-detail svc-detail-redesign">
  <div class="container">
    <div class="svc-detail-head" data-reveal>
      <div class="service-pill service-pill-center">Cum livrăm</div>
    </div>
    <div class="svc-detail-grid">
      <?php $n = 1; foreach ($blocks as $b): ?>
        <div class="svc-detail-block" data-reveal-stagger>
          <div class="svc-detail-num"><?= sprintf('%02d', $n++) ?></div>
          <h3><?= htmlspecialchars($b['heading']) ?></h3>
          <p><?= htmlspecialchars($b['text']) ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if ($fit): ?>
<section class="section svc-fit-section">
  <div class="container">
    <div class="section-head" style="text-align:center;" data-reveal>
      <div class="service-pill service-pill-center">Potrivit pentru</div>
    </div>
    <div class="svc-fit-grid">
      <?php foreach ($fit as $i => $f): ?>
        <div class="svc-fit-card" data-reveal-stagger>
          <div class="svc-fit-icon">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M16.7 5.3a1 1 0 0 1 0 1.4l-8 8a1 1 0 0 1-1.4 0l-4-4a1 1 0 1 1 1.4-1.4L8 12.58l7.3-7.3a1 1 0 0 1 1.4 0Z" fill="#60a5fa"/></svg>
          </div>
          <div class="svc-fit-body">
            <div class="svc-fit-title"><?= htmlspecialchars($f[0]) ?></div>
            <div class="svc-fit-desc"><?= htmlspecialchars($f[1]) ?></div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<section class="section">
  <div class="container cta-simple service-cta-redesign" data-reveal>
    <h2>Preț personalizat în funcție de nevoie</h2>
    <button class="btn btn-primary" data-modal-trigger>Solicită ofertă →</button>
  </div>
</section>
