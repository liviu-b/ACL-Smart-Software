    </main>

    <div class="ticker-wrap" role="marquee" aria-live="off" aria-label="Testimoniale clienți">
      <div class="ticker-track">
        <span class="ticker-item"><span class="ticker-stars">★★★★★</span> "Platformă SaaS livrată în 11 săptămâni." — <strong>Andrei P.</strong> <span class="ticker-service">SaaS</span></span>
        <span class="ticker-sep">·</span>
        <span class="ticker-item"><span class="ticker-stars">★★★★★</span> "Scoruri 95+ Lighthouse și trafic +40%." — <strong>Elena M.</strong> <span class="ticker-service">Site web</span></span>
        <span class="ticker-sep">·</span>
        <span class="ticker-item"><span class="ticker-stars">★★★★★</span> "ERP + plăți fără downtime, erori -70%." — <strong>Mihai D.</strong> <span class="ticker-service">Integrare API</span></span>
        <span class="ticker-sep">·</span>
        <span class="ticker-item"><span class="ticker-stars">★★★★★</span> "Conversie 1.4% → 2.1% în 3 luni." — <strong>Cristina V.</strong> <span class="ticker-service">eCommerce</span></span>
        <span class="ticker-sep">·</span>
        <span class="ticker-item"><span class="ticker-stars">★★★★★</span> "Tichete suport -60% cu chatbot." — <strong>Radu I.</strong> <span class="ticker-service">Chatboți AI</span></span>
        <span class="ticker-sep">·</span>
        <span class="ticker-item"><span class="ticker-stars">★★★★★</span> "Roadmap clar, economie ~4 luni." — <strong>Laura N.</strong> <span class="ticker-service">Consultanță</span></span>
        <span class="ticker-sep">·</span>
        <!-- duplicate for seamless loop -->
        <span class="ticker-item"><span class="ticker-stars">★★★★★</span> "Platformă SaaS livrată în 11 săptămâni." — <strong>Andrei P.</strong> <span class="ticker-service">SaaS</span></span>
        <span class="ticker-sep">·</span>
        <span class="ticker-item"><span class="ticker-stars">★★★★★</span> "Scoruri 95+ Lighthouse și trafic +40%." — <strong>Elena M.</strong> <span class="ticker-service">Site web</span></span>
        <span class="ticker-sep">·</span>
        <span class="ticker-item"><span class="ticker-stars">★★★★★</span> "ERP + plăți fără downtime, erori -70%." — <strong>Mihai D.</strong> <span class="ticker-service">Integrare API</span></span>
        <span class="ticker-sep">·</span>
        <span class="ticker-item"><span class="ticker-stars">★★★★★</span> "Conversie 1.4% → 2.1% în 3 luni." — <strong>Cristina V.</strong> <span class="ticker-service">eCommerce</span></span>
        <span class="ticker-sep">·</span>
        <span class="ticker-item"><span class="ticker-stars">★★★★★</span> "Tichete suport -60% cu chatbot." — <strong>Radu I.</strong> <span class="ticker-service">Chatboți AI</span></span>
        <span class="ticker-sep">·</span>
        <span class="ticker-item"><span class="ticker-stars">★★★★★</span> "Roadmap clar, economie ~4 luni." — <strong>Laura N.</strong> <span class="ticker-service">Consultanță</span></span>
        <span class="ticker-sep">·</span>
      </div>
    </div>

    <footer class="footer">
      <div class="container footer-grid">
        <div>
          <div class="footer-brand-wrap">
            <span class="brand-mark font-tech">&lt;/&gt;</span>
            <span class="footer-brand-text font-tech">ACL-Smart Software</span>
          </div>
          <p class="muted">
          Nu scriem doar cod. Construim produse care cresc business-uri.
          </p>
        </div>

        <div>
          <div class="footer-title">Servicii</div>
          <?php foreach ($services as $slug => $s): ?>
            <a class="footer-link" href="/servicii/<?= htmlspecialchars($slug) ?>"><?= htmlspecialchars($s['title']) ?></a>
          <?php endforeach; ?>
        </div>

        <div>
          <div class="footer-title">Contact</div>
          <a class="footer-link footer-contact" href="mailto:liviu.bancila95@gmail.com"><span class="footer-contact-ic">✉️</span>liviu.bancila95@gmail.com</a>
          <a class="footer-link footer-contact" href="tel:0758154490"><span class="footer-contact-ic">📞</span>0758 154 490</a>
          <span class="footer-link footer-contact"><span class="footer-contact-ic">📍</span>Str. Horea Cod 332014, Petrosani, Hunedoara</span>
          <span class="footer-link footer-contact"><span class="footer-contact-ic">🧾</span>CUI: 51219715</span>
          <span class="footer-link footer-contact"><span class="footer-contact-ic">🏢</span>Nr. Reg. Com.: J2025007081009</span>
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
