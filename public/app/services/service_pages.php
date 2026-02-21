<?php
$viewKey = $service['view'] ?? '';
$extras = [
  'custom-software-dev' => [
    'intro' => 'Aplicații interne care reduc costurile și cresc controlul operațional.',
    'pills' => ['Discovery & Analiză','Arhitectură modulară','Livrare iterativă'],
    'blocks' => [
      ['heading'=>'Ce construim','text'=>'Realizăm dezvoltare software la comandă pentru procese critice: management comenzi, fluxuri interne de aprobare, dashboard-uri KPI și automatizări între departamente. Fiecare aplicație este proiectată pe modelul real de lucru al companiei, astfel încât operațiunile devin mai rapide, mai transparente și mai ușor de scalat.'],
      ['heading'=>'Cum lucrăm','text'=>'Pornim cu analiză de business, mapăm procesele actuale și definim clar obiectivele tehnice și obiectivele de eficiență. Construim arhitectura software modulară, cu API-uri documentate, apoi livrăm iterativ în sprinturi scurte, cu demo-uri periodice, feedback aplicat și prioritizare pe impact operațional direct.'],
      ['heading'=>'Ce primești','text'=>'Primești o aplicație stabilă, testată automat și validată pe scenarii reale de utilizare, plus lansare controlată în producție. Configurăm monitorizare, alertare, backup și suport post-lansare, iar apoi optimizăm continuu performanța și funcționalitățile în funcție de date concrete și obiective de business.'],
    ],
    'fit' => [
      ['Companii cu procese interne complexe','Au nevoie de dezvoltare software personalizată pentru automatizare de fluxuri, trasabilitate completă și reducerea erorilor manuale din operațiuni zilnice.'],
      ['Echipe distribuite','Au nevoie de aplicații centralizate pentru colaborare la distanță, vizibilitate pe statusul taskurilor și decizii rapide bazate pe date actualizate.'],
      ['Firme de logistică și producție','Se potrivesc când procesele de comenzi, stocuri, livrare și planificare trebuie integrate într-un singur sistem software robust și scalabil.'],
      ['Business-uri în creștere rapidă','Beneficiază de arhitectură pregătită pentru extindere, astfel încât aplicația să susțină mai mulți utilizatori, mai multe fluxuri și volume mai mari.'],
    ],
  ],
  'custom-web-app' => [
    'intro' => 'Aplicații web rapide, sigure și ușor de extins.',
    'pills' => ['UX & Design','Frontend & Backend','Securitate & Scalare'],
    'blocks' => [
      ['heading'=>'Ce construim','text'=>'Construim aplicații web personalizate pentru administrare internă, portaluri B2B, platforme client și produse digitale publice. Soluțiile includ frontend modern, backend scalabil și integrare API, astfel încât afacerea să livreze experiențe rapide, clare și orientate pe conversie.'],
      ['heading'=>'Procesul complet','text'=>'Procesul include cercetare UX, structură de informație, wireframe, design UI responsive, dezvoltare frontend și dezvoltare backend cu testare continuă. Optimizăm timpii de încărcare, fluxurile esențiale și accesibilitatea, astfel încât aplicația web să performeze pe desktop, tabletă și mobil.'],
      ['heading'=>'Securitate și mentenabilitate','text'=>'Implementăm autentificare sigură, control de acces pe roluri, validare riguroasă de date și protecție împotriva vulnerabilităților web frecvente. Livrezi mai repede și mai sigur datorită codului modular, observabilității complete și unei baze tehnice care poate fi extinsă fără refaceri costisitoare.'],
    ],
    'fit' => [
      ['Startup-uri cu MVP validat','Când ai deja tracțiune și vrei transformarea prototipului într-o aplicație web stabilă, securizată și pregătită pentru creștere rapidă.'],
      ['Companii B2B','Pentru portaluri de clienți, administrare contracte, fluxuri de aprobare și raportare în timp real care reduc timpul operațional.'],
      ['Echipe de produs','Atunci când ai nevoie de arhitectură scalabilă pentru volume mari de utilizatori activi și lansări frecvente de funcționalități noi.'],
      ['Agenții și firme de servicii','Pentru digitalizarea proceselor interne, automatizarea taskurilor repetitive și creșterea productivității echipei comerciale și operaționale.'],
    ],
  ],
  'website-build' => [
    'intro' => 'Site-uri moderne, rapide și optimizate pentru conversie.',
    'pills' => ['Design responsiv','SEO & Performanță','Mentenanță inclusă'],
    'blocks' => [
      ['heading'=>'Ce construim','text'=>'Dezvoltăm site-uri web de prezentare, landing page-uri și website-uri corporate cu structură clară, design modern și mesaje orientate pe conversie. Fiecare pagină este gândită pentru SEO on-page, navigare intuitivă și încredere, astfel încât vizitatorii să devină lead-uri reale.'],
      ['heading'=>'Totul inclus','text'=>'Serviciul include arhitectură de conținut, copywriting SEO, design responsive, implementare cu HTML semantic și optimizare de performanță pentru Core Web Vitals. Configurăm meta date, heading-uri corecte, indexare, sitemap, analytics și elemente esențiale pentru vizibilitate în Google.'],
      ['heading'=>'Extensibil și întreținut','text'=>'Primești un website ușor de extins cu pagini noi, secțiuni noi și funcționalități viitoare fără blocaje tehnice. Asigurăm mentenanță lunară cu actualizări de securitate, backup, monitorizare uptime, intervenții rapide și îmbunătățiri continue pe baza datelor din trafic.'],
    ],
    'fit' => [
      ['IMM-uri și freelanceri','Dacă vrei prezență online profesională care transmite credibilitate, explică serviciile clar și generează cereri de ofertă constant.'],
      ['Clinici și cabinete','Pentru prezentarea serviciilor medicale, programări rapide, localizare simplă și conținut optimizat local pentru căutări relevante din oraș.'],
      ['Restaurante și HoReCa','Ideal când ai nevoie de website cu meniu actualizabil, rezervări, galerie foto și pagini optimizate pentru căutări locale.'],
      ['Agenții și consultanți','Pentru landing page-uri de campanie, pagini de servicii și portofoliu care susțin vânzarea și poziționarea brandului.'],
      ['ONG-uri și instituții','Când comunicarea publică trebuie să fie clară, transparentă și accesibilă, cu structură ușor de parcurs pentru toate categoriile de utilizatori.'],
    ],
  ],
  'ecommerce-store' => [
    'intro' => 'Magazine online optimizate pentru conversie și operațiuni.',
    'pills' => ['Catalog & Checkout','Plăți & Livrare','Optimizare conversie'],
    'blocks' => [
      ['heading'=>'Ce construim','text'=>'Construim magazine online complete cu structură de catalog, pagini de produs optimizate SEO, coș de cumpărături rapid și checkout simplificat. Integram plăți online, livrare și administrare comenzi într-un flux clar care susține atât vânzările, cât și operațiunile de zi cu zi.'],
      ['heading'=>'Automatizări și integrări','text'=>'Automatizăm sincronizarea stocurilor, emiterea documentelor, notificările tranzacționale și rapoartele de vânzări. Conectăm magazinul cu ERP, CRM, curieri, marketplace-uri și platforme de marketing pentru un ecosistem eCommerce eficient și ușor de administrat.'],
      ['heading'=>'Optimizare conversie','text'=>'Optimizăm fiecare pas din funnel: căutare internă, filtre utile, descrieri clare, imagini relevante, recomandări de produse și checkout fără fricțiune. Rezultatul este scăderea abandonului de coș, creșterea valorii medii a comenzii și experiență mai bună pentru client.'],
    ],
    'fit' => [
      ['Magazine fizice care vor online','Pentru extinderea rapidă în digital cu catalog actualizabil, gestionare comenzi și proces simplu de livrare la nivel național.'],
      ['Branduri D2C','Dacă vrei control complet pe experiența de cumpărare, comunicare directă cu clienții și optimizare continuă a conversiei.'],
      ['Producători locali','Când urmărești vânzare directă fără comisioane de marketplace și vizibilitate mai bună în căutările organice pe produse.'],
      ['Business-uri cu catalog mare','Pentru administrarea eficientă a variantelor, stocurilor și filtrării avansate, inclusiv pe colecții și atribute multiple.'],
      ['Firme B2B și B2C','Dacă ai nevoie de prețuri diferențiate, conturi corporate, condiții comerciale distincte și fluxuri flexibile de comandă.'],
    ],
  ],
  'saas-app-development' => [
    'intro' => 'Platforme SaaS scalabile, de la MVP la produs matur.',
    'pills' => ['MVP rapid','Multi-tenant','Billing & Analytics'],
    'blocks' => [
      ['heading'=>'Ce construim','text'=>'Dezvoltăm aplicații SaaS de la MVP la platformă matură, cu planuri de abonament, facturare recurentă, management utilizatori și administrare centralizată. Focusul este pe time-to-market rapid, retenție mai bună și o bază tehnică pregătită pentru creștere accelerată.'],
      ['heading'=>'Arhitectură SaaS completă','text'=>'Implementăm arhitectură multi-tenant cu separare clară a datelor, roluri și permisiuni granulare, onboarding automatizat și billing flexibil. Platforma include dashboard-uri de produs, metrice de utilizare și mecanisme de scalare care susțin creșterea de la zeci la mii de clienți activi.'],
      ['heading'=>'Observabilitate și livrare','text'=>'Configurăm observabilitate completă din prima etapă: logs, metrici, alertare și health checks pentru componentele critice. Livrăm iterativ prin pipeline CI/CD, cu testare automată și release-uri frecvente, astfel încât evoluția produsului să fie predictibilă și sigură.'],
    ],
    'fit' => [
      ['Fondatori cu o idee de produs','Dacă vrei validare rapidă a ideii prin MVP funcțional, cu arhitectură corectă încă din faza inițială.'],
      ['Startup-uri early-stage','Pentru lansare rapidă, învățare din feedback real și iterații continue care cresc product-market fit.'],
      ['Companii care vor să productizeze','Când transformi un serviciu oferit manual într-o platformă SaaS repetabilă, scalabilă și monetizabilă prin abonamente.'],
      ['Echipe de produs existente','Pentru extinderea unui produs existent cu multi-tenancy, billing, analytics și procese solide de livrare continuă.'],
    ],
  ],
  'qa-testing' => [
    'intro' => 'Testare manuală și automată pentru stabilitate și încredere.',
    'pills' => ['Testare manuală','Automatizare E2E','Integrare CI/CD'],
    'blocks' => [
      ['heading'=>'Ce oferim','text'=>'Oferim servicii de testare QA manuală și automată pentru aplicații web, eCommerce și platforme SaaS. Acoperim testare funcțională, regresie, validare fluxuri critice și automatizare E2E, astfel încât lansările să fie stabile, iar defectele să fie identificate înainte să afecteze utilizatorii.'],
      ['heading'=>'Abordare structurată','text'=>'Construim plan de testare pe riscuri, definim scenarii de business prioritare și acoperim edge case-uri relevante pentru produs. Executăm testare cross-browser, testare de performanță și verificări de securitate de bază, cu raportare clară și recomandări concrete pentru remediere.'],
      ['heading'=>'Automatizare CI/CD','text'=>'Integrăm suite de teste automate în pipeline CI/CD, cu rulare la fiecare release și vizibilitate clară pe calitate. Combinăm teste unitare, integration și end-to-end, reducând riscul de regresii și accelerând lansarea de funcționalități fără compromisuri de stabilitate.'],
    ],
    'fit' => [
      ['Echipe fără QA dedicat','Pentru externalizarea testării fără extindere internă de echipă, dar cu acoperire profesionistă și proces clar de raportare.'],
      ['Startup-uri pre-launch','Când ai nevoie de validare completă înainte de lansare, pentru a evita bug-uri critice în primele interacțiuni cu utilizatorii.'],
      ['Companii cu release-uri frecvente','Pentru integrarea testării automate în CI/CD și reducerea problemelor care apar după deploy în producție.'],
      ['Proiecte cu cerințe de conformitate','Atunci când este necesară testare documentată, trasabilitate și dovezi clare pentru audit intern sau extern.'],
      ['Echipe care vor mai puține bug-uri','Pentru strategie de regresie, smoke testing și monitorizare a calității la fiecare ciclu de livrare software.'],
    ],
  ],
  'api-integration' => [
    'intro' => 'Integrări sigure și reziliente între sisteme.',
    'pills' => ['Plăți & CRM','Reziliență & Logging','Migrare API'],
    'blocks' => [
      ['heading'=>'Ce conectăm','text'=>'Realizăm integrare API între sisteme de plăți, CRM, ERP, logistică, marketing și servicii AI, astfel încât datele să circule automat între platforme. Eliminăm exporturile manuale și sincronizăm procesele critice pentru comenzi, facturare, lead-uri și raportare.'],
      ['heading'=>'Reziliență și fiabilitate','text'=>'Implementăm strategii de retry, idempotency, validare strictă a datelor și logging detaliat pentru fiecare flux de integrare. Definim contracte API clare, tratăm erorile controlat și construim webhook-uri robuste, astfel încât sistemele să rămână stabile în condiții reale de trafic.'],
      ['heading'=>'Consultanță și migrare','text'=>'Te ajutăm să alegi API-urile potrivite, să reduci costurile de integrare și să migrezi de la soluții legacy la integrare modernă, documentată și scalabilă. Planificăm migrarea etapizat, cu risc minim, testare riguroasă și continuitate operațională.'],
    ],
    'fit' => [
      ['Companii cu mai multe sisteme','Când ai aplicații separate și ai nevoie de sincronizare corectă a datelor pentru procese fără blocaje și fără introducere manuală.'],
      ['Magazine online cu integrări multiple','Pentru conectarea coerentă între plăți, curieri, facturare, stocuri și canale de marketing într-un flux eCommerce unificat.'],
      ['Echipe care migrează de la legacy','Atunci când vrei înlocuirea integrărilor fragile cu API-uri moderne, documentate și ușor de întreținut pe termen lung.'],
      ['Fintech și plăți','Pentru integrare API sigură, validare strictă și trasabilitate completă pe tranzacții, webhook-uri și reconciliere de date.'],
      ['Business-uri care vor automatizări','Când dorești conectarea CRM, ERP, email și analytics pentru procese automate care reduc timpul de lucru al echipei.'],
    ],
  ],
  'consulting-architecture' => [
    'intro' => 'Decizii tehnice solide: audit, arhitectură, roadmap.',
    'pills' => ['Audit de cod','Design arhitectură','Roadmap tehnic'],
    'blocks' => [
      ['heading'=>'Ce oferim','text'=>'Oferim consultanță software și arhitectură pentru companii care au nevoie de decizii tehnice clare înainte de investiții majore. Analizăm codul existent, riscurile de scalare, nivelul de securitate și blocajele operaționale pentru a defini direcții concrete și prioritizate.'],
      ['heading'=>'Review și design','text'=>'Realizăm review de arhitectură, alegere de stack tehnologic, evaluare monolit versus microservicii și design de integrare între componente. Construim roadmap tehnic cu etape, dependențe, estimări și obiective măsurabile, astfel încât echipa să execute predictibil și eficient.'],
      ['heading'=>'Suport hands-on','text'=>'Sprijinim echipele în implementare, refactorizare și reducerea datoriei tehnice, inclusiv pentru produse deja în producție. Intervenim pe performanță, stabilitate și procese de livrare, cu recomandări aplicabile imediat, documentație clară și focus pe rezultate de business.'],
    ],
    'fit' => [
      ['CTO-uri și tech leads','Pentru validarea deciziilor de arhitectură, reducerea riscului tehnic și alinierea strategiei de produs cu realitatea implementării.'],
      ['Fondatori non-tehnici','Când ai nevoie de claritate înainte de bugetare, selecție echipă tehnică și alegerea direcției corecte pentru produs.'],
      ['Echipe care vor să scaleze','Pentru evaluare obiectivă a limitelor curente și plan tehnic etapizat pentru creștere stabilă în trafic și funcționalități.'],
      ['Companii cu datorie tehnică','Atunci când este necesar audit de cod, prioritizare a refactorizării și reducerea costurilor ascunse generate de soluții improvizate.'],
    ],
  ],
  'ai-chatbots' => [
    'intro' => 'Chatboți orientați pe suport și vânzări, cu integrare completă.',
    'pills' => ['RAG & LLM','Integrare multicanal','Monitorizare & Optimizare'],
    'blocks' => [
      ['heading'=>'Ce construim','text'=>'Construim chatboți AI personalizați pentru suport clienți, preluare lead-uri și automatizare FAQ, integrați pe website, WhatsApp sau alte canale relevante. Soluția reduce volumul de tichete repetitive și oferă răspunsuri rapide, coerente și consistente în fiecare interacțiune.'],
      ['heading'=>'Tehnologie modernă','text'=>'Folosim arhitecturi RAG, embeddings și modele LLM pentru răspunsuri contextualizate bazate pe documentația companiei. Chatbotul înțelege intenția utilizatorului, oferă răspunsuri naturale și escaladează inteligent către operator uman când solicitarea depășește limitele automate definite.'],
      ['heading'=>'Monitorizare și optimizare','text'=>'Monitorizăm conversațiile, măsurăm rata de rezolvare și identificăm zonele unde utilizatorii nu primesc răspuns suficient. Actualizăm continuu baza de cunoștințe, fluxurile de conversație și integrarea cu CRM, pentru performanță mai bună și costuri de suport semnificativ reduse.'],
    ],
    'fit' => [
      ['Magazine online','Pentru răspuns instant la întrebări despre produse, stocuri, comenzi și retur, fără a încărca inutil echipa de suport.'],
      ['Companii cu volum mare de suport','Când ai multe solicitări repetitive și vrei reducerea timpului de răspuns plus scăderea costurilor operaționale de customer care.'],
      ['Agenții imobiliare','Pentru calificarea automată a lead-urilor, răspuns rapid pe oferte și programarea vizionărilor direct din conversație.'],
      ['Clinici și centre medicale','Ideal pentru preluare întrebări frecvente, prezentare servicii, colectare informații inițiale și direcționare eficientă către programări.'],
      ['Business-uri cu FAQ complex','Pentru organizații cu documentație bogată care au nevoie de răspunsuri precise, consistente și ușor de actualizat în timp.'],
    ],
  ],
];

$sectionCopy = [
  'custom-software-dev' => [
    'timelineTitle' => 'Ce include concret dezvoltarea software la comandă',
    'timelineText'  => 'Mai jos vezi cele 3 componente esențiale pe care le livrăm în proiect: ce construim efectiv, cum desfășurăm implementarea și ce primești la final. Informațiile sunt formulate ca să înțelegi clar rezultatele practice pentru operațiunile companiei.',
    'fitTitle'      => 'Pentru cine este potrivit acest serviciu',
    'fitText'       => 'Lista de mai jos nu este generală. Arată exact tipul de companie și contextul în care dezvoltarea software personalizată aduce rezultate măsurabile: timp salvat, mai puține erori și procese mai bine controlate.',
  ],
  'custom-web-app' => [
    'timelineTitle' => 'Ce primești într-un proiect de aplicație web',
    'timelineText'  => 'Secțiunile 01, 02 și 03 explică pe scurt dar concret: ce fel de aplicație construim, ce pași tehnici includem și ce nivel de securitate și mentenabilitate asigurăm după lansare.',
    'fitTitle'      => 'Pentru cine este potrivit serviciul de aplicații web',
    'fitText'       => 'Aici găsești cazuri reale de utilizare, nu formulări vagi. Dacă te regăsești în una dintre situațiile de mai jos, serviciul este potrivit pentru digitalizare, scalare și eficiență operațională.',
  ],
  'website-build' => [
    'timelineTitle' => 'Ce include concret dezvoltarea unui site web',
    'timelineText'  => 'Cele 3 secțiuni explică exact ce se livrează: structură și conținut orientat SEO, implementare tehnică pentru viteză și stabilitate, plus mentenanță pentru creștere constantă în timp.',
    'fitTitle'      => 'Pentru cine este potrivit serviciul de dezvoltare website',
    'fitText'       => 'Mai jos vezi tipurile de business pentru care un site bine construit aduce impact direct: vizibilitate în Google, credibilitate și mai multe cereri de ofertă relevante.',
  ],
  'ecommerce-store' => [
    'timelineTitle' => 'Ce include concret un magazin online performant',
    'timelineText'  => 'În secțiunile 01, 02 și 03 descriem clar livrabilele proiectului eCommerce: platforma de vânzare, integrările operaționale și optimizările de conversie care cresc venitul per vizitator.',
    'fitTitle'      => 'Pentru cine este potrivit serviciul de magazin online',
    'fitText'       => 'Această secțiune explică precis ce tip de business obține valoare reală dintr-un magazin online personalizat: control pe vânzări, fluxuri automate și costuri operaționale mai mici.',
  ],
  'saas-app-development' => [
    'timelineTitle' => 'Ce include concret dezvoltarea unei platforme SaaS',
    'timelineText'  => 'Mai jos este structura practică a proiectului: construcția produsului, arhitectura multi-tenant și procesul de livrare continuă. Scopul este clar: lansare rapidă și scalare fără refaceri costisitoare.',
    'fitTitle'      => 'Pentru cine este potrivit serviciul de dezvoltare SaaS',
    'fitText'       => 'Lista de mai jos te ajută să verifici rapid dacă modelul tău de business se potrivește cu un produs SaaS. Sunt descrise situații concrete în care investiția are randament și poate fi scalată.',
  ],
  'qa-testing' => [
    'timelineTitle' => 'Ce include concret serviciul de testare QA',
    'timelineText'  => 'Secțiunile 01–03 arată exact cum abordăm calitatea: ce testăm, cum prioritizăm riscurile și cum integrăm automatizarea în livrare. Obiectivul este reducerea bug-urilor care ajung în producție.',
    'fitTitle'      => 'Pentru cine este potrivit serviciul de QA testing',
    'fitText'       => 'Aici este descris clar când are sens externalizarea QA sau extinderea automatizării. Dacă te regăsești în exemplele de mai jos, poți îmbunătăți stabilitatea produsului fără blocaje de release.',
  ],
  'api-integration' => [
    'timelineTitle' => 'Ce include concret serviciul de integrare API',
    'timelineText'  => 'Mai jos vezi concret ce livrăm într-o integrare: conectarea sistemelor, hardening-ul fluxurilor și migrarea controlată de la soluții vechi. Accentul este pe date corecte și procese automate fiabile.',
    'fitTitle'      => 'Pentru cine este potrivit serviciul de integrare API',
    'fitText'       => 'Secțiunea de mai jos explică exact tipul de companii care beneficiază de integrare API: organizații cu multe sisteme, procese fragmentate și nevoia de sincronizare fără intervenție manuală.',
  ],
  'consulting-architecture' => [
    'timelineTitle' => 'Ce include concret consultanța de arhitectură software',
    'timelineText'  => 'În cele 3 puncte de mai jos explicăm clar livrabilele: audit tehnic, direcție arhitecturală și suport practic de implementare. Scopul este să iei decizii tehnice corecte, cu risc redus și impact real.',
    'fitTitle'      => 'Pentru cine este potrivită consultanța tehnică',
    'fitText'       => 'Aici identifici rapid dacă această consultanță este relevantă pentru etapa în care se află produsul tău: validare decizii, scalare, reducere datorie tehnică sau plan de refactorizare.',
  ],
  'ai-chatbots' => [
    'timelineTitle' => 'Ce include concret dezvoltarea de chatboți AI',
    'timelineText'  => 'Secțiunile 01, 02 și 03 descriu practic ce construim: chatbotul, tehnologia de bază și optimizarea continuă după lansare. Accentul este pe răspunsuri utile, reducerea tichetele repetitive și calificare mai bună a lead-urilor.',
    'fitTitle'      => 'Pentru cine este potrivit serviciul de chatboți AI',
    'fitText'       => 'Lista de mai jos arată clar în ce contexte chatboții AI produc rezultate vizibile: suport mai rapid, costuri mai mici și experiență mai bună pentru utilizatori pe canalele principale.',
  ],
];

$intro  = $extras[$viewKey]['intro']  ?? '';
$blocks = $extras[$viewKey]['blocks'] ?? [];
$fit    = $extras[$viewKey]['fit']    ?? [];
$pills  = $extras[$viewKey]['pills']  ?? ['Audit & Discovery','Build & Launch','Suport continuu'];
$timelineTitle = $sectionCopy[$viewKey]['timelineTitle'] ?? 'Ce include concret acest serviciu';
$timelineText  = $sectionCopy[$viewKey]['timelineText']  ?? 'Mai jos găsești explicat clar ce livrăm, cum lucrăm și ce rezultate primești în practică.';
$fitTitle      = $sectionCopy[$viewKey]['fitTitle']      ?? 'Pentru cine este potrivit acest serviciu';
$fitText       = $sectionCopy[$viewKey]['fitText']       ?? 'Această secțiune explică pe scurt ce tip de companie și ce context de business se potrivește acestui serviciu.';
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
      <h2><?= htmlspecialchars($timelineTitle) ?></h2>
      <p><?= htmlspecialchars($timelineText) ?></p>
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
      <h2><?= htmlspecialchars($fitTitle) ?></h2>
      <p><?= htmlspecialchars($fitText) ?></p>
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
