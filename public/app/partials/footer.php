    </main>

    <footer class="footer">
      <div class="container footer-grid">
        <div>
          <div class="footer-brand-wrap">
            <span class="brand-mark">&lt;/&gt;</span>
            <span class="footer-brand-text"><span class="acl-orange">ACL</span> Smart Software</span>
          </div>
          <p class="muted">
          Nu scriem doar cod. Construim produse care cresc business-uri.
          </p>
        </div>

        <div>
          <div class="footer-title">Servicii</div>
          <div class="footer-services-cycle">
            <?php foreach ($services as $slug => $s): ?>
              <a class="footer-link footer-svc-item" href="/servicii/<?= htmlspecialchars($slug) ?>"><?= htmlspecialchars($s['title']) ?></a>
            <?php endforeach; ?>
          </div>
        </div>

        <div>
          <div class="footer-title">Contact</div>
          <a class="footer-link footer-contact" href="mailto:acl-smartsoftware@outlook.com"><span class="footer-contact-ic">✉️</span>acl-smartsoftware@outlook.com</a>
          <a class="footer-link footer-contact" href="tel:0758154490"><span class="footer-contact-ic">📞</span>0758 154 490</a>
          <span class="footer-link footer-contact"><span class="footer-contact-ic">📍</span>Str. Horea 2/31, Cod 332014, Petrosani, Hunedoara</span>
          <span class="footer-link footer-contact"><span class="footer-contact-ic">🧾</span>CUI: 51219715</span>
          <span class="footer-link footer-contact"><span class="footer-contact-ic">🏢</span>Nr. Reg. Com.: J2025007081009</span>
        </div>

        <div>
          <div class="footer-title">Protecția Consumatorului</div>
          <div class="footer-anpc-logos">
            <a href="https://anpc.ro/ce-este-sal/" target="_blank" rel="nofollow">
              <img src="https://wpfitness.eu/wp-content/uploads/2022/10/anpc-sal.png" alt="Soluționarea Alternativă a Litigiilor" width="200">
            </a>
            <a href="https://ec.europa.eu/consumers/odr" target="_blank" rel="nofollow">
              <img src="https://wpfitness.eu/wp-content/uploads/2022/10/anpc-sol.png" alt="Soluționarea Online a Litigiilor" width="200">
            </a>
            <a href="https://anpc.ro/" target="_blank" rel="nofollow" class="footer-anpc-link">ANPC</a>
            <a href="/termeni-si-conditii" class="footer-legal-link">Termeni și Condiții</a>
            <a href="/gdpr" class="footer-legal-link">GDPR</a>
          </div>
        </div>
      </div>

      <div class="container footer-bottom">
        <span class="muted">© <?= date('Y') ?> <span class="acl-orange">ACL</span> Smart Software. Toate drepturile rezervate.</span>
      </div>
    </footer>
  </div>

  <!-- WhatsApp floating button with tooltip -->
  <div class="whatsapp-wrapper">
    <div class="whatsapp-tooltip" id="waTooltip">
      Salut, eu sunt Smart AI, scrie-mi direct aici
    </div>
    <a href="https://wa.me/40758154490" target="_blank" rel="noopener" class="whatsapp-float" aria-label="Contact pe WhatsApp">
      <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" fill="currentColor"/>
      </svg>
    </a>
  </div>

  <!-- Contact Modal (Mac style) -->
  <div class="contact-modal-overlay" id="contactModal">
    <div class="contact-modal">
      <div class="modal-bar">
        <div class="modal-dots">
          <span class="modal-dot modal-dot-close" id="modalClose"></span>
          <span class="modal-dot"></span>
          <span class="modal-dot"></span>
        </div>
        <div class="modal-title">Contactează-mă</div>
      </div>
      <div class="modal-body">
        <p class="modal-intro">Alege metoda preferată de contact:</p>
        
        <a href="https://wa.me/40758154490" target="_blank" rel="noopener" class="modal-option">
          <div class="modal-option-icon" style="background: linear-gradient(135deg, #25D366, #128C7E);">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" fill="currentColor"/></svg>
          </div>
          <div class="modal-option-body">
            <div class="modal-option-title">WhatsApp</div>
            <div class="modal-option-desc">Scrie-mi direct pe WhatsApp</div>
          </div>
          <div class="modal-option-arrow">→</div>
        </a>

        <a href="tel:0758154490" class="modal-option">
          <div class="modal-option-icon" style="background: linear-gradient(135deg, #60a5fa, #3b82f6);">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56a.977.977 0 00-1.01.24l-1.57 1.97c-2.83-1.35-5.48-3.9-6.89-6.83l1.95-1.66c.27-.28.35-.67.24-1.02-.37-1.11-.56-2.3-.56-3.53 0-.54-.45-.99-.99-.99H4.19C3.65 3 3 3.24 3 3.99 3 13.28 10.73 21 20.01 21c.71 0 .99-.63.99-1.18v-3.45c0-.54-.45-.99-.99-.99z" fill="currentColor"/></svg>
          </div>
          <div class="modal-option-body">
            <div class="modal-option-title">Telefon</div>
            <div class="modal-option-desc">0758 154 490</div>
          </div>
          <div class="modal-option-arrow">→</div>
        </a>

        <a href="mailto:acl-smartsoftware@outlook.com" class="modal-option">
          <div class="modal-option-icon" style="background: linear-gradient(135deg, #a78bfa, #8b5cf6);">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" fill="currentColor"/></svg>
          </div>
          <div class="modal-option-body">
            <div class="modal-option-title">Email</div>
            <div class="modal-option-desc">acl-smartsoftware@outlook.com</div>
          </div>
          <div class="modal-option-arrow">→</div>
        </a>
      </div>
    </div>
  </div>

  <script src="/assets/js/main.js?v=202602064"></script>
</body>
</html>
