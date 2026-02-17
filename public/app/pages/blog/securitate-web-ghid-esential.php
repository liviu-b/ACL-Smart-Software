<?php
$pageTitle = 'Securitate Web: Ghid esențial pentru business-uri | ACL Smart Software';
$pageDesc  = 'Cele mai importante practici de securitate web pe care orice business ar trebui să le cunoască — de la HTTPS la protecție SQL injection.';
?>
<!-- Blog Article -->
<section class="blog-hero blog-hero--article">
  <div class="wrap">
    <a class="blog-back" href="/blog">← Înapoi la blog</a>
    <div class="blog-article-badge" data-reveal>
      <span class="badge badge-new">Securitate</span>
      <span class="blog-date">20 Iulie 2025</span>
      <span>·</span>
      <span>9 min citire</span>
    </div>
    <h1 data-reveal>Securitate Web: Ghid esențial pentru business-uri</h1>
    <p class="blog-hero-sub" data-reveal>Ce trebuie să știi ca să-ți protejezi afacerea online.</p>
  </div>
</section>

<article class="blog-article">
  <div class="wrap blog-content">

    <p class="blog-lead">Un atac cibernetic costă în medie 200.000 EUR pentru un IMM european. Majoritatea atacurilor exploatează vulnerabilități care pot fi prevenite cu practici standard de securitate.</p>

    <h2>De ce contează securitatea web</h2>
    <p>Nu este vorba doar despre „hackeri" — este vorba despre încrederea clienților tăi, conformitate GDPR, și continuitatea afacerii. Un breach de securitate poate distruge reputația construită în ani de zile.</p>

    <h2>Top 5 vulnerabilități web (OWASP 2025)</h2>

    <h3>1. Injection (SQL, NoSQL, LDAP)</h3>
    <p>Atacatorul trimite date malițioase prin formularele site-ului, care sunt executate direct în baza de date. Protecția: parametrizarea query-urilor, validare strictă a inputului.</p>

    <h3>2. Broken Authentication</h3>
    <p>Sesiuni nesecurizate, parole stocate în plaintext, lipsa 2FA. Protecția: bcrypt pentru parole, token-uri JWT cu expirare, autentificare multi-factor.</p>

    <h3>3. Cross-Site Scripting (XSS)</h3>
    <p>Cod JavaScript injectat în pagini vizualizate de alți utilizatori. Protecția: sanitizarea outputului, Content Security Policy (CSP), escape HTML.</p>

    <h3>4. Broken Access Control</h3>
    <p>Utilizatorii pot accesa resurse la care nu ar trebui să aibă acces. Protecția: verificare de rol pe fiecare endpoint, principiul least privilege.</p>

    <h3>5. Security Misconfiguration</h3>
    <p>Credențiale default, directoare expuse, mesaje de eroare detaliate. Protecția: audit de configurare, headers de securitate, environment variables.</p>

    <div class="blog-highlight">
      <strong>Statistică:</strong> 94% din aplicațiile web testate au cel puțin o vulnerabilitate din top 10 OWASP. Testarea regulată nu este opțională.
    </div>

    <h2>Checklist de securitate minimă</h2>
    <ul>
      <li><strong>HTTPS obligatoriu</strong> — certificat SSL pe toate paginile</li>
      <li><strong>Headers de securitate</strong> — CSP, HSTS, X-Frame-Options, X-Content-Type-Options</li>
      <li><strong>Validare input</strong> — server-side, nu doar client-side</li>
      <li><strong>Parole hashate</strong> — bcrypt sau argon2, niciodată MD5/SHA1</li>
      <li><strong>Rate limiting</strong> — protecție împotriva brute-force</li>
      <li><strong>Backup-uri automate</strong> — testate periodic, criptate</li>
      <li><strong>Actualizări regulate</strong> — dependențe, framework-uri, OS</li>
      <li><strong>Logging și monitorizare</strong> — alerting pe activitate suspectă</li>
    </ul>

    <h2>GDPR și securitate</h2>
    <p>Regulamentul GDPR impune măsuri tehnice și organizatorice adecvate pentru protecția datelor personale. Un breach trebuie raportat în 72 de ore. Amenzile pot ajunge la 4% din cifra de afaceri anuală globală.</p>

    <h2>Când ai nevoie de un audit de securitate?</h2>
    <ul>
      <li>Înainte de lansarea unui produs nou</li>
      <li>După integrarea cu servicii terțe (plăți, CRM)</li>
      <li>La fiecare 6 luni pentru aplicații cu date sensibile</li>
      <li>După orice incident de securitate</li>
    </ul>

    <div class="blog-cta-box">
      <h3>Vrei un audit de securitate pentru aplicația ta?</h3>
      <p>Echipa noastră identifică vulnerabilitățile și livrează un plan concret de remediere.</p>
      <button class="btn btn-primary" data-modal-trigger>Solicită audit →</button>
    </div>

  </div>
</article>
