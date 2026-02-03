<section class="hero">
  <div class="container hero-grid">
    <div class="hero-left">
      <div class="pill">Software • Web • SaaS • eCommerce</div>
      <h1 class="hero-title">
        Construim produse digitale care cresc business-uri.
      </h1>
      <p class="hero-clarifier font-tech">
        Inginerie de produs pentru echipe care vor lansări rapide și scalare sigură.
      </p>
      <p class="hero-sub">
        <span class="font-tech">ACL-Smart Software</span> proiectează și livrează platforme digitale orientate pe
        rezultate — timp de lansare mai mic, conversie mai bună și operațiuni stabile.
      </p>

      <div class="hero-rotate font-tech" aria-live="polite">
        <span class="muted">Construim:</span>
        <span class="rotate-word" id="heroRotate">Software personalizat</span>
      </div>

      <div class="hero-ctas">
        <a class="btn btn-primary" href="/contact">Programează un apel →</a>
        <a class="btn btn-ghost" href="/servicii">Vezi cum lucrăm</a>
      </div>

      <div class="stats">
        <div class="stat">
          <div class="stat-nr font-tech">-40% Timp de lansare</div>
          <div class="stat-txt muted">Lansări mai rapide</div>
        </div>
        <div class="stat">
          <div class="stat-nr font-tech">-55% Rată bug-uri</div>
          <div class="stat-txt muted">Stabilitate în producție</div>
        </div>
        <div class="stat">
          <div class="stat-nr font-tech">Scalabil prin design</div>
          <div class="stat-txt muted">Arhitectură pregătită de creștere</div>
        </div>
      </div>

      <div class="hero-trust muted">Încredere din partea fondatorilor și echipelor în creștere</div>
    </div>

    <div class="hero-card" data-reveal>
      <div class="hero-card-top">
        <div class="chip font-tech">aclsmart@build</div>
        <div class="chip">v1.0</div>
      </div>

      <div class="service-grid">
        <?php foreach ($services as $slug => $s): ?>
          <a class="service-card" href="/servicii/<?= htmlspecialchars($slug) ?>">
            <div class="service-ic"><?= htmlspecialchars($s['icon']) ?></div>
            <div class="service-meta">
              <div class="service-title"><?= htmlspecialchars($s['title']) ?></div>
              <div class="service-short muted"><?= htmlspecialchars($s['short']) ?></div>
            </div>
            <div class="service-arrow">→</div>
          </a>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<section class="page-head" id="cine-suntem">
  <div class="container">
    <h1>Cine suntem</h1>
    <p class="muted">O echipă orientată pe produs, calitate și livrare predictibilă.</p>
  </div>
</section>

<section class="section">
  <div class="container split">
    <div>
      <h2>Povestea ACL-Smart Software</h2>
        <p class="muted">
        (Editează aici) Spune pe scurt cine ești, ce probleme rezolvi și pentru cine.
      </p>

      <div class="bullets">
        <div class="bullet"><span class="dot"></span><span>Focus: aplicații personalizate & integrare sisteme</span></div>
        <div class="bullet"><span class="dot"></span><span>Proces: descoperire → construcție → QA → lansare</span></div>
        <div class="bullet"><span class="dot"></span><span>Mentalitate: performanță, securitate, mentenabilitate</span></div>
      </div>
    </div>

    <div class="anim-wrap" aria-hidden="true">
      <div class="orb orb-1"></div>
      <div class="orb orb-2"></div>
      <div class="orb orb-3"></div>
      <div class="terminal" data-reveal>
        <div class="terminal-bar">
          <span class="t-dot"></span><span class="t-dot"></span><span class="t-dot"></span>
          <span class="terminal-title font-tech">about.php</span>
        </div>
        <pre class="terminal-body"><code id="typewriter"></code></pre>
      </div>
    </div>
  </div>
</section>

<section class="section" id="sectiunea-1">
  <div class="container">
    <div class="section-head">
      <h2>Secțiunea 1 (o vei edita)</h2>
      <p class="muted">Text provizoriu - poți adăuga orice: valori, calendar, tehnologii, etc.</p>
    </div>
    <div class="card" data-reveal>
      <p class="muted">(Editează aici)</p>
    </div>
  </div>
</section>

<section class="section" id="sectiunea-2">
  <div class="container">
    <div class="section-head">
      <h2>Secțiunea 2 (o vei edita)</h2>
      <p class="muted">Text provizoriu - testimonial, studiu de caz, echipă, etc.</p>
    </div>
    <div class="card" data-reveal>
      <p class="muted">(Editează aici)</p>
    </div>
  </div>
</section>


<section class="section">
  <div class="container">
    <div class="section-head">
      <h2>Ce facem, pe scurt</h2>
      <p class="muted">Poți edita ulterior textele și structura, dar ai deja layout complet.</p>
    </div>

    <div class="cards-3">
      <div class="card" data-reveal>
        <div class="card-kicker font-tech">Descoperire</div>
        <h3>Clarificăm obiectivele</h3>
        <p class="muted">Arie, riscuri, estimări, calendar și plan de livrare.</p>
      </div>
      <div class="card" data-reveal>
        <div class="card-kicker font-tech">Construcție</div>
        <h3>Dezvoltăm rapid și curat</h3>
        <p class="muted">Implementare iterativă, feedback constant, transparență.</p>
      </div>
      <div class="card" data-reveal>
        <div class="card-kicker font-tech">Scalare</div>
        <h3>Stabilizăm și optimizăm</h3>
        <p class="muted">QA, performanță, observabilitate, îmbunătățiri.</p>
      </div>
    </div>
  </div>
</section>
