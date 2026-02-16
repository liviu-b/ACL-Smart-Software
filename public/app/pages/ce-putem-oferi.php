<section class="offer-hero">
  <div class="container">
    <div class="offer-shell" data-reveal>
      <div class="offer-shell-left">
        <div class="service-pill">Ce putem oferi</div>
        <h1>Soluții software create pentru creștere reală</h1>
        <p class="muted">Alege un serviciu și intră direct în detalii. Fiecare flux este construit pentru rezultate clare, livrare predictibilă și scalare fără blocaje.</p>
      </div>

      <div class="offer-shell-right">
        <div class="offer-picker">
          <label class="muted" for="serviceSelect">Selectează serviciul</label>
          <div class="offer-picker-row">
            <select id="serviceSelect" class="select">
              <option value="">-- alege --</option>
              <?php foreach ($services as $slug => $s): ?>
                <option value="/servicii/<?= htmlspecialchars($slug) ?>"><?= htmlspecialchars($s['title']) ?></option>
              <?php endforeach; ?>
            </select>
            <button class="btn btn-primary small" id="goService" type="button">Deschide</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section offer-section">
  <div class="container">
    <div class="offer-grid">
      <?php foreach ($services as $slug => $s): ?>
        <a class="offer-card" data-reveal href="/servicii/<?= htmlspecialchars($slug) ?>">
          <div class="offer-card-head">
            <span class="offer-icon"><?= htmlspecialchars($s['icon']) ?></span>
            <span class="badge-pill new">Serviciu</span>
          </div>
          <h3><?= htmlspecialchars($s['title']) ?></h3>
          <p class="muted"><?= htmlspecialchars($s['short']) ?></p>
          <div class="offer-link">Vezi detalii <span>→</span></div>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>
