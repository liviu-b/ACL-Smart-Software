    </main>

    <footer class="footer">
      <div class="container footer-grid">
        <div>
          <div class="footer-brand font-tech">ACL-Smart Software</div>
          <p class="muted">
          Nu scriem doar cod. Construim produse care cresc business-uri.
          </p>
        </div>

        <div>
          <div class="footer-title">Pagini</div>
          <a class="footer-link" href="/">Cine suntem</a>
          <a class="footer-link" href="/ce-putem-oferi">Ce putem oferi</a>
          <a class="footer-link" href="/servicii">Servicii</a>
          <a class="footer-link" href="/portofoliu">Portofoliu</a>
          <a class="footer-link" href="/contact">Contact</a>
        </div>

        <div>
          <div class="footer-title">Servicii</div>
          <?php $i=0; foreach ($services as $slug => $s): $i++; if ($i>5) break; ?>
            <a class="footer-link" href="/servicii/<?= htmlspecialchars($slug) ?>"><?= htmlspecialchars($s['title']) ?></a>
          <?php endforeach; ?>
          <a class="footer-link" href="/servicii">Vezi toate →</a>
        </div>
      </div>

      <div class="container footer-bottom">
        <span class="muted">© <?= date('Y') ?> ACL-Smart Software. Toate drepturile rezervate.</span>
      </div>
    </footer>
  </div>

  <script src="/assets/js/main.js?v=20260203"></script>
</body>
</html>
