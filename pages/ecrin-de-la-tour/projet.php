<?php include("header.php"); ?>

<div id="projet" class="content">
    <div class="full-img" id="img-projet"></div>

    <div>
        <div class="w1280">
            <div class="half left">
                <h1>70 coins de paradis</h1>
                <p>Modernes, fonctionnels, avenants et confortables, les 70 logements bénéficient tous d’une terrasse ou d’un balcon privatif, ainsi que d’une cuisine ouverte sur le séjour, afin de créer un vaste espace de vie convivial. De généreuses baies vitrées assurent un maximum de luminosité. Les 3, 4 et 5 pièces disposent au minimum d’une suite parentale, avec salle de bains et armoire encastrée.</p>
            </div><div class="half right">
            <img src="http://p-scigala.pl/pages/ecrin-de-la-tour/imgs/vis/int02.jpg">
            </div>
        </div>
    </div>

    <div class="gold">
        <div class="w1280">
            <div class="half left">
                <img src="http://p-scigala.pl/pages/ecrin-de-la-tour/imgs/vis/int03.jpg">
            </div><div class="half right">
            <h1>Convivialité et tranquillité</h1>
            <p>Paisible et conviviale, La Tour-de-Peilz jouit d’une situation géographique privilégiée, sur les principaux axes de transport, proche de toutes les infrastructures. Son panorama de carte postale, avec les Préalpes dans son dos, le Léman à ses pieds, des hectares de vignoble sur les hauteurs, un château médiéval et un port bucolique, lui confère un charme irrésistible.</p>
            </div>
        </div>
    </div>

    <div id="maps" class="section">
        <div class="w1280">
            <div><h1>Un investissement idéal</h1>
                <p style="margin-bottom: 45px;">Du studio au 5 pièces, les appartements de L’Écrin de La Tour répondent parfaitement à la diversité de la demande. Aménageables au gré de l’acquéreur, avec un large choix de finitions, ils partagent tous la même qualité quant aux matériaux et aux finitions. L’investissement idéal par excellence.</p>
            </div>
            <div class="half left">
                <button class="p-map" onclick="openMap(1)" target="_blank" href="http://p-scigala.pl/pages/ecrin-de-la-tour/imgs/map1.png"/><img src="http://p-scigala.pl/pages/ecrin-de-la-tour/imgs/map1.png"/>
                <button class="p-map" onclick="openMap(2)" target="_blank" href="http://p-scigala.pl/pages/ecrin-de-la-tour/imgs/map2.png"/><img src="http://p-scigala.pl/pages/ecrin-de-la-tour/imgs/map2.png"/>
            </div><div class="half right">
            <button class="p-map" onclick="openMap(3)" target="_blank" href="http://p-scigala.pl/pages/ecrin-de-la-tour/imgs/masterplan_ecrin.jpg"/><img src="http://p-scigala.pl/pages/ecrin-de-la-tour/imgs/masterplan_ecrin.jpg"/>
            </div>
        </div>
    </div>
</div>

<div id="map-big" onclick="close()" class="img-big">
    <img id="map1" src="http://p-scigala.pl/pages/ecrin-de-la-tour/imgs/map1.png">
    <img id="map2" src="http://p-scigala.pl/pages/ecrin-de-la-tour/imgs/map2.png">
    <img id="map3" src="http://p-scigala.pl/pages/ecrin-de-la-tour/imgs/masterplan_ecrin.jpg">
    <button id="close" onclick="close()">&times;</button>
    <div class="center"></div>
</div>

<script>

    function openMap(x) {
        $("#map-big img").css("display", "none");
        $("#map" + x).css("display", "inline-block");
        $("#map-big").css("display", "block");
        setTimeout(function() { $("#map-big").css("opacity", "1"); }, 10);
    }

    $("#map-big").on("click", function() {
        $("#map-big").css("opacity", "0");
        setTimeout(function() { $("#map-big").css("display", "none"); }, 310);   
    });

    setTimeout(function() { $(".full-img").css("animation", "move-image 60s infinite"); }, 500);

</script>

<?php include("footer.php"); ?>