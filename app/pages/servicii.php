<section class="page-head">
  <div class="container">
    <h1>Servicii</h1>
    <p class="muted">Mai jos ai o pagină dedicată pentru fiecare serviciu. Tu vei completa detaliile.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="service-grid">
      <?php foreach ($services as $slug => $s): ?>
        <a class="service-card" data-reveal href="/servicii/<?= htmlspecialchars($slug) ?>">
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
</section>
