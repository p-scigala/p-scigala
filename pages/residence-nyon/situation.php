<?php include('header.php'); ?>

<div id="situation" class="wide content">
  <div class="row">
    <div class="bg-img">
      <button
        class="map"
        onclick="fullscreen('http://p-scigala.pl/pages/residence-nyon/imgs/map1.png')"
        style="
          background-image: url(http://p-scigala.pl/pages/residence-nyon/imgs/map1.png);
        "
      ></button>
    </div>
    <div class="text-wrap right-text">
      <p>
        Situé sur l’une des plus belles parcelles de Nyon, cet immeuble de haut
        standing bénéficie d’une situation d’exception à deux pas de toutes les
        commodités et dans un parc de verdure hors de toutes nuisances.
      </p>
      <ul>
        <li>
          Transports publics : un arrêt de bus se trouve à 50 mètres de la
          résidence et la gare de Nyon est joignable en moins de 5 minutes à
          pied.
        </li>
        <li>
          Commodités : le centre-ville de Nyon ainsi que les commerces, banques,
          restaurants, poste, pharmacie, hôpital, etc. sont dans un rayon de 500
          mètres.
        </li>
        <li>
          Ecoles : l’école primaire du couchant se situe à 600 mètres, l’école
          secondaire de Marens à 500 mètres et le gymnase est à moins de 100
          mètres.
        </li>
        <li>
          L’Aéroport International de Genève est joignable en moins de 20
          minutes.
        </li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="text-wrap left-text">
      <p>
        La commune de Nyon est un lieu offrant un cadre de vie exceptionnel. Ses
        habitants peuvent en effet profiter des rives du lac, de grands espaces
        verts, du château emblématique ainsi que de diverses activités
        culturelles et des multiples infrastructures mises à disposition, ce qui
        en fait une ville de premier choix à l’excellente réputation.
      </p>
      <p>Taux fiscal (2018) : 0.61</p>
      <p style="text-align: center">
        <a
          class="button"
          target="_blank"
          href="https://www.google.com/maps/place/Route+de+Divonne+11,+1260+Nyon,+Swiss/@46.3835595,6.2293678,18z/data=!3m1!4b1!4m5!3m4!1s0x478c42d5da979f9d:0xdc516a8c544e1e87!8m2!3d46.3835595!4d6.2299344"
          >Google maps</a
        >
      </p>
    </div>
    <div class="bg-img">
      <button
        class="map"
        onclick="fullscreen('http://p-scigala.pl/pages/residence-nyon/imgs/map2.png')"
        style="
          background-image: url(http://p-scigala.pl/pages/residence-nyon/imgs/map2.png);
        "
      ></button>
    </div>
  </div>
</div>

<div id="map-overlay"></div>
<div id="mapsShow">
  <div class="close" style="color: #ffffff">&#10006;</div>
  <img src="" />
</div>

<script>
  var loadState = false;

  function fullscreen(src) {
    var wrapper = document.createElement('div');
    var box = document.createElement('div');
    var img = document.createElement('img');
    var close = document.createElement('button');

    wrapper.className = 'fullscreen-wrapper hidden';
    box.className = 'fullscreen-box';
    img.className = 'fullscreen-img';
    close.className = 'fullscreen-close';

    img.src = src;

    close.addEventListener('click', () => {
      if (!loadState) {
        loadState = true;
        wrapper.classList.add('hidden');
        setTimeout(() => {
          wrapper.remove();
          loadState = false;
        }, 300);
      }
    });

    box.append(img, close);
    wrapper.append(box);
    document.body.append(wrapper);

    setTimeout(() => wrapper.classList.remove('hidden'), 0);
  }
</script>

<script src="http://p-scigala.pl/pages/residence-nyon/js/esc.js"></script>

<?php include('footer.php'); ?>
