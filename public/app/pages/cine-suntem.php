<!-- Hero Section: Asymmetric, Modern Layout -->
<section class="hero">
  <div class="hero-video-wrap">
    <video class="hero-video" id="heroVideo" autoplay muted loop playsinline>
      <source src="/assets/video/hero-bg.mp4" type="video/mp4">
    </video>
    <div class="hero-video-overlay"></div>
  </div>
  <canvas class="hero-particles-canvas" id="heroParticles"></canvas>
  
  <div class="container hero-grid">
    <!-- Left Column: Content -->
    <div class="hero-left">
      <div class="pill">Creștere prin tehnologie</div>
      <h1 class="hero-title">
        Nu scriem doar cod. Construim produse care cresc business-uri.
      </h1>
      
      <p class="hero-sub">
        <strong><span class="acl-orange">ACL</span> Smart Software</strong> proiectează și livrează platforme digitale orientate pe
        rezultate — timp de lansare mai mic, conversie mai bună și operațiuni stabile.
      </p>

      <div class="hero-rotate font-tech" aria-live="polite">
        <span class="muted">Construim:</span>
        <span class="rotate-word" id="heroRotate">Software personalizat</span>
      </div>

      <div class="hero-ctas">
        <button class="btn btn-primary" data-modal-trigger>Haide să discutăm →</button>
        <a class="btn btn-ghost" href="/ce-putem-oferi">Vezi serviciile</a>
      </div>
    </div>
    
    <!-- Right Column: Capability Matrix (Navy Card) -->
    <div class="capability-matrix" data-reveal>
      <div class="matrix-header">
        <div class="matrix-badge font-tech">Matrice de Capabilități</div>
        <div class="matrix-subtitle">Execuție tehnică end-to-end</div>
      </div>

      <div class="matrix-grid">
        <!-- Strategy Column -->
        <div class="matrix-col">
          <div class="matrix-col-header">
            <div class="matrix-pill font-tech">STRATEGIE</div>
          </div>
          <div class="matrix-items">
            <div class="matrix-item">
              <span class="matrix-icon">📋</span>
              <span>Audit Tehnic</span>
            </div>
            <div class="matrix-item">
              <span class="matrix-icon">🏗️</span>
              <span>Design Arhitectură</span>
            </div>
            <div class="matrix-item">
              <span class="matrix-icon">🗺️</span>
              <span>Roadmap Produs</span>
            </div>
          </div>
          <div class="matrix-desc">
            Reducerea riscului tehnic înainte de dezvoltare.
          </div>
        </div>

        <div class="matrix-divider"></div>

        <!-- Engineering Column -->
        <div class="matrix-col">
          <div class="matrix-col-header">
            <div class="matrix-pill font-tech">INGINERIE</div>
          </div>
          <div class="matrix-items">
            <div class="matrix-item">
              <span class="matrix-icon">💻</span>
              <span>Aplicații Web</span>
            </div>
            <div class="matrix-item">
              <span class="matrix-icon">☁️</span>
              <span>Platforme SaaS</span>
            </div>
            <div class="matrix-item">
              <span class="matrix-icon">🔗</span>
              <span>Integrări API</span>
            </div>
            <div class="matrix-item">
              <span class="matrix-icon">🤖</span>
              <span>Sisteme AI</span>
            </div>
          </div>
          <div class="matrix-desc">
            Construim sisteme scalabile, pregătite pentru producție.
          </div>
        </div>

        <div class="matrix-divider"></div>

        <!-- Scale Column -->
        <div class="matrix-col">
          <div class="matrix-col-header">
            <div class="matrix-pill font-tech">SCALARE</div>
          </div>
          <div class="matrix-items">
            <div class="matrix-item">
              <span class="matrix-icon">✓</span>
              <span>Automatizare QA</span>
            </div>
            <div class="matrix-item">
              <span class="matrix-icon">⚙️</span>
              <span>DevOps & CI/CD</span>
            </div>
            <div class="matrix-item">
              <span class="matrix-icon">⚡</span>
              <span>Optimizare Performanță</span>
            </div>
            <div class="matrix-item">
              <span class="matrix-icon">📊</span>
              <span>Analiză & Monitorizare</span>
            </div>
          </div>
          <div class="matrix-desc">
            Asigurăm stabilitate și creștere sustenabilă.
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- About Section: Split Layout with Code Terminal -->
<section class="section about-section" id="cine-suntem">
  <div class="container about-grid">
    <!-- Left Column: Text Content -->
    <div class="hero-left">
      <div class="matrix-badge about-badge">Partener Tehnic</div>
      <h2 class="about-title">
        Software Scalabil.<br>Arhitectură Robustă.
      </h2>
      <p class="hero-sub">
        <strong><span class="acl-orange">ACL</span> Smart Software</strong> construiește sisteme digitale personalizate, orientate pe performanță și stabilitate. 
        Livrăm soluții end-to-end — de la discovery și arhitectură, la execuție, testare și mentenanță — folosind tehnologii moderne și procese Agile.
      </p>
      
      <div class="hero-ctas about-ctas">
        <button class="btn btn-primary" data-modal-trigger">Haide să discutăm →</button>
        <a class="btn btn-ghost" href="/portofoliu">Vezi Portofoliu</a>
      </div>
    </div>

    <!-- Right Column: Animated Code Terminal -->
    <div class="anim-wrap about-anim" aria-hidden="true">
      <div class="about-orb"></div>
      
      <div class="about-terminal" data-reveal>
        <div class="about-terminal-bar">
          <div class="about-terminal-dots">
            <span class="about-dot about-dot-red"></span>
            <span class="about-dot about-dot-yellow"></span>
            <span class="about-dot about-dot-green"></span>
          </div>
          <span class="font-tech about-terminal-title">Architecture.ts</span>
        </div>
        
        <pre class="terminal-body about-terminal-body"><code class="font-tech scrolling-content" style="color: #e5e7eb; display: block; tab-size: 2;">
<span style="color: #c084fc;">interface</span> <span style="color: #fbbf24;">ScalableSystem</span> {
  security: <span style="color: #60a5fa;">SecurityLevel</span>;
  performance: <span style="color: #60a5fa;">Metric</span>[];
  uptime: <span style="color: #60a5fa;">number</span>;
}

<span style="color: #c084fc;">class</span> <span style="color: #fbbf24;">EnterpriseCore</span> <span style="color: #c084fc;">implements</span> <span style="color: #fbbf24;">ScalableSystem</span> {
  <span style="color: #c084fc;">private</span> services: <span style="color: #60a5fa;">ServiceContainer</span>;

  <span style="color: #9ca3af;">// Arhitectură optimizată pentru trafic intens</span>
  <span style="color: #c084fc;">public async</span> <span style="color: #60a5fa;">deploy</span>(): <span style="color: #fbbf24;">Promise</span>&lt;<span style="color: #fbbf24;">void</span>&gt; {
    <span style="color: #c084fc;">await</span> <span style="color: #fbbf24;">this</span>.loadBalancer.init();
    <span style="color: #c084fc;">await</span> <span style="color: #fbbf24;">this</span>.cacheLayer.warmup();
    <span style="color: #c084fc;">return</span> <span style="color: #fbbf24;">this</span>.monitorMetrics();
  }

  <span style="color: #c084fc;">private</span> <span style="color: #60a5fa;">optimize</span>(resource: <span style="color: #fbbf24;">Resource</span>): <span style="color: #fbbf24;">void</span> {
    <span style="color: #9ca3af;">// Auto-scaling logic</span>
    <span style="color: #c084fc;">if</span> (resource.load &gt; <span style="color: #a78bfa;">0.8</span>) {
      <span style="color: #fbbf24;">this</span>.cluster.expand();
    }
  }
}
</code></pre>
      </div>
    </div>
  </div>
</section>

<style>
  @keyframes scrollCode {
    0% { transform: translateY(0); }
    50% { transform: translateY(-20%); }
    100% { transform: translateY(0); }
  }
  .scrolling-content {
    animation: scrollCode 10s ease-in-out infinite;
  }
</style>
<!-- Trust/Stats Section: 4-Column Grid with Hover Effects -->
<section class="trust-section" aria-label="Ce ne recomandă">
  <div class="container">
    <div class="trust-head" data-reveal>
      <div class="service-pill">Ce ne recomandă</div>
      <h2>Rezultatele livrate și felul în care lucrăm</h2>
      <p class="muted">Combinăm execuție tehnică solidă cu comunicare clară, termene asumate și focus pe impact real în business.</p>
    </div>

    <div class="trust-grid">
      <article class="trust-card" data-reveal-stagger>
        <div class="trust-value">95%+</div>
        <div class="trust-label">Scor de satisfacție la predare</div>
      </article>
      <article class="trust-card" data-reveal-stagger>
        <div class="trust-value">24h</div>
        <div class="trust-label">Timp mediu de răspuns la solicitări</div>
      </article>
      <article class="trust-card" data-reveal-stagger>
        <div class="trust-value">100%</div>
        <div class="trust-label">Cod predat cu documentație și handover</div>
      </article>
      <article class="trust-card" data-reveal-stagger>
        <div class="trust-value">End-to-end</div>
        <div class="trust-label">De la analiză la lansare și suport</div>
      </article>
    </div>
  </div>
</section>

<!-- Services Section: 2-Column Alternating Grid (Not Standard Cards) -->
<section class="section" id="serviciile-noastre">
  <div class="container">
    <div class="section-head" style="text-align: center;">
      <div class="service-pill">Servicii &amp; expertiză</div>
      <h2 style="border: none; padding: 0; margin: var(--space-4) 0 var(--space-3);">
        Ce oferim
      </h2>
      <p class="muted">
        De la aplicații custom și platforme SaaS la integrare API și chatboți AI, acoperim cap‑coadă
        ciclul de dezvoltare software.
      </p>
    </div>

    <div class="svc-rail">
      <!-- Service Cards: Icon + Content Layout -->
      <a class="svc-row" data-reveal href="/servicii/custom-software-dev">
        <div class="svc-icon"><?= htmlspecialchars($services['custom-software-dev']['icon']) ?></div>
        <div class="svc-body">
          <div class="svc-head">
            <h3 class="svc-title">Dezvoltare <span class="acl-orange">software</span> la comandă</h3>
          </div>
          <p class="svc-desc">Proiectăm și dezvoltăm aplicații custom adaptate proceselor interne și obiectivelor de business.</p>
          <div class="svc-bullets">
            <span>Analiză funcțională și definire clară a cerințelor</span>
            <span>Arhitectură scalabilă și securizată</span>
            <span>Dezvoltare backend &amp; frontend</span>
            <span>Modernizare și refactorizare aplicații existente</span>
          </div>
        </div>
      </a>

      <a class="svc-row" data-reveal href="/servicii/custom-web-app">
        <div class="svc-icon"><?= htmlspecialchars($services['custom-web-app']['icon']) ?></div>
        <div class="svc-body">
          <div class="svc-head">
            <h3 class="svc-title">Aplicații <span class="acl-orange">web</span> personalizate</h3>
          </div>
          <p class="svc-desc">Construim aplicații web rapide, scalabile și optimizate pentru conversie.</p>
          <div class="svc-bullets">
            <span>Platforme web complexe: dashboard-uri, sisteme interne, portaluri clienți</span>
            <span>Aplicații orientate pe UX și performanță</span>
            <span>Arhitecturi moderne (SPA, API-first)</span>
            <span>Optimizare pentru viteză și scalare</span>
          </div>
        </div>
      </a>

      <a class="svc-row" data-reveal href="/servicii/website-build">
        <div class="svc-icon"><?= htmlspecialchars($services['website-build']['icon']) ?></div>
        <div class="svc-body">
          <div class="svc-head">
            <h3 class="svc-title">Dezvoltare site <span class="acl-orange">web</span></h3>
            <span class="badge-pill most">Cel mai solicitat</span>
          </div>
          <p class="svc-desc">Creăm site-uri moderne, responsive și ușor de administrat.</p>
          <div class="svc-bullets">
            <span>Website-uri de prezentare și pagini corporate</span>
            <span>Landing page-uri optimizate pentru conversie</span>
            <span>CMS personalizat sau integrare cu soluții existente</span>
            <span>Optimizare SEO tehnică și performanță</span>
          </div>
        </div>
      </a>

      <a class="svc-row" data-reveal href="/servicii/ecommerce-store">
        <div class="svc-icon"><?= htmlspecialchars($services['ecommerce-store']['icon']) ?></div>
        <div class="svc-body">
          <div class="svc-head">
            <h3 class="svc-title">Creare magazine <span class="acl-orange">online</span></h3>
            <span class="badge-pill popular">Popular</span>
          </div>
          <p class="svc-desc">Dezvoltăm magazine online optimizate pentru vânzări și vizibilitate.</p>
          <div class="svc-bullets">
            <span>Implementare platforme e-commerce</span>
            <span>Integrare plăți online și procesatori de plăți</span>
            <span>Automatizări pentru stocuri, livrare și facturare</span>
            <span>Optimizare UX pentru creșterea ratei de conversie</span>
          </div>
        </div>
      </a>

      <a class="svc-row" data-reveal href="/servicii/saas-app-development">
        <div class="svc-icon"><?= htmlspecialchars($services['saas-app-development']['icon']) ?></div>
        <div class="svc-body">
          <div class="svc-head">
            <h3 class="svc-title">Aplicații <span class="acl-orange">SaaS</span></h3>
            <span class="badge-pill most">Cel mai solicitat</span>
          </div>
          <p class="svc-desc">Transformăm idei în produse SaaS scalabile, de la MVP la platforme mature.</p>
          <div class="svc-bullets">
            <span>Arhitectură multi-tenant și infrastructură cloud</span>
            <span>Sisteme de abonamente și facturare recurentă</span>
            <span>Panouri de administrare și analitice</span>
            <span>Securitate, scalare și mentenanță continuă</span>
          </div>
        </div>
      </a>

      <a class="svc-row" data-reveal href="/servicii/qa-testing">
        <div class="svc-icon"><?= htmlspecialchars($services['qa-testing']['icon']) ?></div>
        <div class="svc-body">
          <div class="svc-head">
            <h3 class="svc-title">Testare <span class="acl-orange">QA</span></h3>
            <span class="badge-pill new">Nou</span>
          </div>
          <p class="svc-desc">Asigurăm calitate constantă prin procese riguroase de testare manuală și automată.</p>
          <div class="svc-bullets">
            <span>Testare funcțională și de regresie</span>
            <span>Automatizare teste (unit, integrare, end‑to‑end)</span>
            <span>Testare de performanță și securitate</span>
            <span>Documentare și raportare detaliată</span>
          </div>
        </div>
      </a>

      <a class="svc-row" data-reveal href="/servicii/api-integration">
        <div class="svc-icon"><?= htmlspecialchars($services['api-integration']['icon']) ?></div>
        <div class="svc-body">
          <div class="svc-head">
            <h3 class="svc-title">Integrare <span class="acl-orange">API</span></h3>
            <span class="badge-pill new">Nou</span>
          </div>
          <p class="svc-desc">Conectăm aplicațiile tale cu ecosisteme externe pentru eficiență operațională.</p>
          <div class="svc-bullets">
            <span>Integrare cu sisteme de plăți</span>
            <span>CRM, ERP și platforme de marketing</span>
            <span>Integrare servicii AI și automatizări</span>
            <span>Sincronizare logistică și procesare date</span>
          </div>
        </div>
      </a>

      <a class="svc-row" data-reveal href="/servicii/consulting-architecture">
        <div class="svc-icon"><?= htmlspecialchars($services['consulting-architecture']['icon']) ?></div>
        <div class="svc-body">
          <div class="svc-head">
            <h3 class="svc-title">Consultanță &amp; <span class="acl-orange">arhitectură</span></h3>
          </div>
          <p class="svc-desc">Oferim direcție tehnică solidă pentru proiecte noi sau existente.</p>
          <div class="svc-bullets">
            <span>Audit tehnic și evaluare infrastructură</span>
            <span>Design arhitectural și alegere stack tehnologic</span>
            <span>Definire roadmap de produs</span>
            <span>Optimizare performanță și costuri</span>
          </div>
        </div>
      </a>

      <a class="svc-row" data-reveal href="/servicii/ai-chatbots">
        <div class="svc-icon"><?= htmlspecialchars($services['ai-chatbots']['icon']) ?></div>
        <div class="svc-body">
          <div class="svc-head">
            <h3 class="svc-title">Chatboți <span class="acl-orange">AI</span></h3>
            <span class="badge-pill most">Cel mai solicitat</span>
          </div>
          <p class="svc-desc">Dezvoltăm chatboți inteligenți pentru suport, vânzări și automatizare procese.</p>
          <div class="svc-bullets">
            <span>Implementare chatboți conversaționali personalizați</span>
            <span>Integrare cu website-uri, aplicații și CRM</span>
            <span>Automatizare suport clienți și procese interne</span>
            <span>Antrenare modele și optimizare fluxuri conversaționale</span>
          </div>
        </div>
      </a>

    </div>
  </div>
</section>
