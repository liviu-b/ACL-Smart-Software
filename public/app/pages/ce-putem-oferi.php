<!-- Ce putem oferi — Hero -->
<section class="offer-hero">
  <div class="wrap">
    <div class="offer-top" data-reveal>
      <div>
        <h1>Soluții software create pentru creștere reală</h1>
        <p class="muted">Alege un serviciu și intră direct în detalii. Fiecare flux e construit pentru rezultate clare, livrare predictibilă și scalare fără blocaje.</p>
      </div>
      <aside class="offer-picker">
        <label class="muted" for="serviceSelect">Selectează serviciul</label>
        <div class="offer-picker-row">
          <select id="serviceSelect" class="offer-select">
            <option value="">-- alege --</option>
            <?php foreach($services as $slug=>$s): ?>
            <option value="/servicii/<?= htmlspecialchars($slug) ?>"><?= htmlspecialchars($s['title']) ?></option>
            <?php endforeach; ?>
          </select>
          <button class="btn btn-primary btn-sm" id="goService" type="button">Deschide</button>
        </div>
      </aside>
    </div>
  </div>
</section>

<!-- Services Grid -->
<section>
  <div class="wrap">
    <div class="offer-grid">
      <?php foreach($services as $slug=>$s): ?>
      <a class="offer-card" href="/servicii/<?= htmlspecialchars($slug) ?>" data-reveal-stagger>
        <div class="offer-card-top">
          <span class="offer-card-ico"><?= $s['icon'] ?></span>
          <span class="badge badge-new">Serviciu</span>
        </div>
        <h3><?= htmlspecialchars($s['title']) ?></h3>
        <p class="muted"><?= htmlspecialchars($s['short']) ?></p>
        <div class="offer-card-foot">Vezi detalii →</div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>
