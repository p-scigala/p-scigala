<?php include("header.php"); ?>

<div id="evenement3">
    <div>
        <form action="appartements-plans/" method="POST"><button type="submit" name="last" id="last">Dernières chances ! Des appartements sont revenus à la vente ! Cliquez ici</button></form>
    </div>
</div>

<div id="form-popup">
    <div>
        <p>Tous les appartements de&nbsp;ce&nbsp;projet sont vendus.</p>
        <p><b>BIENTÔT</b></p>
        <p>Un&nbsp;nouveau projet verra le&nbsp;jour à&nbsp;La&nbsp;Tour-de-Peilz.<br>Pour rester informé, veuillez remplir le&nbsp;formulaire de&nbsp;contact ci-dessous&nbsp;:</p>
        <div role="form" class="wpcf7" id="wpcf7-f241-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
<form action="" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="241">
<input type="hidden" name="_wpcf7_version" value="5.3.2">
<input type="hidden" name="_wpcf7_locale" value="en_US">
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f241-o1">
<input type="hidden" name="_wpcf7_container_post" value="0">
<input type="hidden" name="_wpcf7_posted_data_hash" value="">
</div>
<p><label> Prénom* <span class="wpcf7-form-control-wrap first_name"><input type="text" name="first_name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span><br>
</label><label> Nom* <span class="wpcf7-form-control-wrap surname"><input type="text" name="surname" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span><br>
</label><label> Adresse E-mail* <span class="wpcf7-form-control-wrap sender"><input type="email" name="sender" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false"></span><br>
</label><label> N° de téléphone <span class="wpcf7-form-control-wrap phone"><input type="text" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false"></span></label></p>
<div class="checkboxes"><span class="wpcf7-form-control-wrap checkbox-120"><span class="wpcf7-form-control wpcf7-checkbox"><span class="wpcf7-list-item first"><label><input type="checkbox" name="checkbox-120[]" value="Studio"><span class="wpcf7-list-item-label">Studio</span></label></span><span class="wpcf7-list-item"><label><input type="checkbox" name="checkbox-120[]" value="2p"><span class="wpcf7-list-item-label">2p</span></label></span><span class="wpcf7-list-item"><label><input type="checkbox" name="checkbox-120[]" value="3p"><span class="wpcf7-list-item-label">3p</span></label></span><span class="wpcf7-list-item"><label><input type="checkbox" name="checkbox-120[]" value="4p"><span class="wpcf7-list-item-label">4p</span></label></span><span class="wpcf7-list-item last"><label><input type="checkbox" name="checkbox-120[]" value="5p"><span class="wpcf7-list-item-label">5p</span></label></span></span></span></div>
<p>* champs obligatoires<br>
<input type="submit" value="Envoyer" class="wpcf7-form-control wpcf7-submit"></p>
<div class="wpcf7-response-output" aria-hidden="true"></div></form></div>
    </div>
    <button class="arrow" onclick="popup()"></button>
</div>

<script>

    function popup() {
        $("#form-popup").toggleClass("active");
    }
    setTimeout(function() { popup(); }, 3000);

</script>

<style>
    #evenement3 {
        height: auto;
        padding: 0 !important;
    }

    @media only screen and (max-width: 800px) {
        #evenement3 {
            height: auto;
        }
    }

    #last {
        border: none;
        color: #FFFFFF;
        background-color: transparent;
        padding: 30px;
        margin-bottom: 0;
        text-align: center;
        margin: auto;
        width: 100%;
    }
</style>

<div id="accueil" class="content">

    <div class="full-img" id="img-accueil">
        <video id="home-video" width="1280" height="720" type="video/mp4" autobuffer muted autoplay="autoplay" loop="loop">
            <source src="http://p-scigala.pl/pages/ecrin-de-la-tour/video/accueil.mp4" type="video/mp4">
        </video>
    </div>

    <div class="w1280">
        <div class="half left">
            <h2>Un écrin de verdure</h2>
            <p>Une ode aux espaces verts et à l’élégance en plein cœur de La Tour-de-Peilz, sur une parcelle de 5’000 m<sup>2</sup>. L’Écrin de La Tour invite au bonheur, ses 70 appartements de qualité (du studio au 5 pièces) et ses deux immeubles aux lignes fluides, contemporaines et épurées avec son grand parc arborisé dessiné par notre architecte paysagiste. Les espaces communs seront agrémentés d’un nombre important d’arbre à haute tige.</p>
        </div><div class="half right">
        <img title="" alt="" src="http://p-scigala.pl/pages/ecrin-de-la-tour/imgs/vis/900/int02.jpg">

        </div>
    </div>

    <div class="section full-img" id="img-map"></div>

    <div class="w1280">
        <div class="half left">
            <button class="p-map" onclick="openMap(1)" target="_blank" href="http://p-scigala.pl/pages/ecrin-de-la-tour/imgs/map1.png"/><img src="http://p-scigala.pl/pages/ecrin-de-la-tour/imgs/map1.png"/>
        </div><div class="half right">
        <h2>Une situation exceptionnelle</h2>
        <p>Situé dans le quartier du Clos d’Aubonne, L’Écrin de La Tour jouit d’une localisation privilégiée, à proximité immédiate des commerces (supermarchés, banque, pharmacies, etc.), des transports publics (gare CFF, bus) et des infrastructures (écoles, poste, salles de sport, etc.). Le bord du lac se trouve à moins de 250 mètres. L’endroit rêvé pour joindre l’utile à l’agréable.</p>
        </div>
    </div>

    <div id="fullscreen" style="display: none">
        <button onclick="fullscreen()"><div style="background-image: url(http://p-scigala.pl/pages/ecrin-de-la-tour/imgs/map3.png)"></div></button>
        <button id="close" onclick="fullscreen()">&times;</button>
    </div>
</div>

<div id="map-big" onclick="close()" class="img-big">
    <img id="map1" src="http://p-scigala.pl/pages/ecrin-de-la-tour/imgs/map3.png">
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

</script>

<?php include("footer.php"); ?>