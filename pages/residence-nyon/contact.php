<?php include('header.php'); ?>

<div id="contact" class="wide content">
  <div class="row">
    <div id="contact-form">
      <h2>Contact</h2>
      <form action="" method="POST">
        <p><input type="text" name="nom" placeholder="Nom *" required /></p>
        <p>
          <input type="text" name="prenom" placeholder="Prénom *" required />
        </p>
        <p>
          <input
            type="text"
            name="telephone"
            placeholder="Téléphone *"
            required
          />
        </p>
        <p>
          <input
            type="email"
            name="email"
            placeholder="E-mail adresse *"
            required
          />
        </p>
        <p>
          <textarea
            name="message"
            rows="3"
            placeholder="Message *"
            required
          ></textarea>
        </p>
        <p style="margin-bottom: 15px">Champs obligatoires *</p>
        <p id="submit-wrapper">
          <input id="submit" type="submit" value="Envoyer" />
        </p>
      </form>
    </div>
    <div id="contact-data">
        <h2>&nbsp;</h2>
      <div id="contact-text">
        <div class="person">
          <div
            style="
              background-image: url(http://p-scigala.pl/pages/residence-nyon/imgs/didier-hermann.jpg);
            "
          ></div>
          <h3>Didier Hermann</h3>
          <p><a href="tel:00 41 79 449 07 80">+41 79 449 07 80</a></p>
          <p>
            <a href="mailto: didier.hermann@omnia.ch"
              >didier.hermann@omnia.ch</a
            >
          </p>
        </div>
        <div class="person">
          <div
            style="
              background-image: url(http://p-scigala.pl/pages/residence-nyon/imgs/jean-sebastien-schenk.jpg);
            "
          ></div>
          <h3>Jean-Sébastien Schenk</h3>
          <p><a href="tel:00 41 79 666 39 12">+41 79 666 39 12</a></p>
          <p>
            <a href="mailto: jean-sebastien.schenk@omnia.ch"
              >jean-sebastien.schenk@omnia.ch</a
            >
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include('footer.php'); ?>
