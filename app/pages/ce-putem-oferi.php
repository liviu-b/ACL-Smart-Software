<section class="page-head">
  <div class="container">
    <h1>Ce putem oferi</h1>
    <p class="muted">Alege un serviciu din listă sau explorează lista completă.</p>

    <div class="service-picker" data-reveal>
      <label class="muted" for="serviceSelect">Selectează serviciul</label>
      <select id="serviceSelect" class="select">
        <option value="">-- alege --</option>
        <?php foreach ($services as $slug => $s): ?>
          <option value="/servicii/<?= htmlspecialchars($slug) ?>"><?= htmlspecialchars($s['title']) ?></option>
        <?php endforeach; ?>
      </select>
      <button class="btn btn-primary small" id="goService" type="button">Deschide</button>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="cards-3">
      <?php foreach ($services as $slug => $s): ?>
        <a class="card card-link" data-reveal href="/servicii/<?= htmlspecialchars($slug) ?>">
          <div class="card-kicker font-tech"><?= htmlspecialchars($s['icon']) ?> Serviciu</div>
          <h3><?= htmlspecialchars($s['title']) ?></h3>
          <p class="muted"><?= htmlspecialchars($s['short']) ?></p>
          <div class="link-row">Detalii <span>→</span></div>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>
