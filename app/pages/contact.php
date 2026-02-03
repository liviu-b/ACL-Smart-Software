<section class="page-head">
  <div class="container">
    <h1>Contact</h1>
    <p class="muted">Trimite-ne un mesaj și revenim rapid. (Poți conecta ulterior la un mailer / CRM.)</p>
  </div>
</section>

<section class="section">
  <div class="container split">
    <div class="card" data-reveal>
      <h2>Formular</h2>
      <form class="form" method="post" action="#">
        <div class="row">
          <div class="field">
            <label for="name" class="muted">Nume</label>
            <input id="name" name="name" type="text" placeholder="Nume complet" required>
          </div>
          <div class="field">
            <label for="email" class="muted">Email</label>
            <input id="email" name="email" type="email" placeholder="nume@firma.ro" required>
          </div>
        </div>

        <div class="field">
          <label for="subject" class="muted">Subiect</label>
          <input id="subject" name="subject" type="text" placeholder="Ex: dezvoltare aplicație web">
        </div>

        <div class="field">
          <label for="message" class="muted">Mesaj</label>
          <textarea id="message" name="message" rows="6" placeholder="Scrie detalii despre proiect..."></textarea>
        </div>

        <button class="btn btn-primary" type="submit">Trimite</button>
        <p class="muted small">* Text provizoriu. Dacă vrei, îți fac integrare reală (PHPMailer / API).</p>
      </form>
    </div>

    <div>
      <div class="card" data-reveal>
        <h2>Detalii</h2>
        <p class="muted">(Editează aici) Email, telefon, adresă, program, etc.</p>
        <div class="contact-list">
          <div class="contact-item"><span class="font-tech">Email:</span> contact@aclsmart.ro</div>
          <div class="contact-item"><span class="font-tech">Telefon:</span> +40 7xx xxx xxx</div>
          <div class="contact-item"><span class="font-tech">Locație:</span> România</div>
        </div>
      </div>

      <div class="card" data-reveal>
        <h3>Preferi un apel?</h3>
        <p class="muted">Propune 2-3 intervale și revenim cu confirmare.</p>
        <a class="btn btn-ghost" href="#">Programează</a>
      </div>
    </div>
  </div>
</section>
