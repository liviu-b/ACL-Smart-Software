<!-- Ce putem oferi — Hero -->
<section class="offer-hero">
  <div class="wrap">
    <div class="offer-intro" data-reveal>
      <h1>Totul sub un singur acoperiș digital</h1>
      <p class="muted">De la primele linii de cod la un produs complet — fiecare serviciu e construit pentru rezultate reale, livrare predictibilă și scalare fără blocaje.</p>
    </div>
  </div>
</section>

<!-- Services List -->
<section class="offer-list-section">
  <div class="wrap">
    <?php $n=1; foreach($services as $slug=>$s): ?>
    <a class="offer-row" href="/servicii/<?= htmlspecialchars($slug) ?>" data-reveal>
      <span class="offer-row-num"><?= sprintf('%02d',$n++) ?></span>
      <span class="offer-row-ico"><?= $s['icon'] ?></span>
      <div class="offer-row-body">
        <h3><?= htmlspecialchars($s['title']) ?></h3>
        <p><?= htmlspecialchars($s['short']) ?></p>
      </div>
      <span class="offer-row-arrow">→</span>
    </a>
    <?php endforeach; ?>
  </div>
</section>

<!-- CTA -->
<section class="cta-band">
  <div class="wrap" data-reveal>
    <h2>Nu știi exact ce ai nevoie?</h2>
    <p>Spune-ne despre proiectul tău și te ghidăm spre soluția potrivită.</p>
    <button class="btn btn-primary" data-modal-trigger>Hai să discutăm →</button>
  </div>
</section>
