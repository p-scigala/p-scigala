<!DOCTYPE html>
<html>
    <head>
        <meta name="theme-color" content="#DFCEA1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <title>L'Écrin de la Tour – Appartements à vendre à La Tour-de-Peilz</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
        <link rel="stylesheet" id="avp-style-css" href="http://p-scigala.pl/pages/ecrin-de-la-tour/style.css" type="text/css" media="all">
    </head>

    <body class="overlay">
        <div id="menu-overflow"></div>
        <div id="menu">
            <div id="menu-btn-wrap">
                <button id="menu-btn" onclick="menu()">
                    <span></span>
                </button>
            </div><div id="nav-wrap">
            <nav id="site-navigation" class="main-navigation" role="navigation">
                <div class="menu-main-menu-container">
                    <ul id="menu-main-menu" class="menu">
                        <li id="menu-item-32" class="menu-accueil menu-item menu-item-type-post_type menu-item-object-page menu-item-home page_item page-item-9 menu-item-32"><a href="http://p-scigala.pl/pages/ecrin-de-la-tour/" aria-current="page">Accueil</a></li>
                        <li id="menu-item-30" class="menu-projet menu-item menu-item-type-post_type menu-item-object-page menu-item-30"><a href="http://p-scigala.pl/pages/ecrin-de-la-tour/projet.php">Le Projet</a></li>
                        <li id="menu-item-29" class="menu-appartements-plans menu-item menu-item-type-post_type menu-item-object-page menu-item-29"><a href="http://p-scigala.pl/pages/ecrin-de-la-tour/appartements-plans.php">Les Appartements</a></li>
                        <li id="menu-item-31" class="menu-galerie menu-item menu-item-type-post_type menu-item-object-page menu-item-31"><a href="http://p-scigala.pl/pages/ecrin-de-la-tour/galerie.php">Galerie</a></li>
                        <li id="menu-item-28" class="menu-film menu-item menu-item-type-post_type menu-item-object-page menu-item-28"><a href="http://p-scigala.pl/pages/ecrin-de-la-tour/film.php">Film</a></li>
                        <li id="menu-item-27" class="menu-contact menu-item menu-item-type-post_type menu-item-object-page menu-item-27"><a href="http://p-scigala.pl/pages/ecrin-de-la-tour/contact.php">Contact</a></li>
                    </ul>
                </div>
            </nav>
            </div>
        </div>

        <div class="site-branding">
            <a id="logo" href="http://p-scigala.pl/pages/ecrin-de-la-tour/"><img title="Ecrin de la Tour" alt="Ecrin de la Tour - Promotion Immobiliere" id="logo-img" src="http://p-scigala.pl/pages/ecrin-de-la-tour/imgs/logo-ecrin.png"><span>La Tour-de-Peilz</span></a>            <a id="header-link" href="http://p-scigala.pl/pages/ecrin-de-la-tour/">Accueil</a>
        </div>

        <script>
            var show = true;
            var ww;

            $(window).resize(function() {
                ww = $(window).width();
            });

            function menu() {
                ww = $(window).width();
                if(ww <= 1024) {
                    if (show) {
                        $("#menu").css("right", "0");
                        $("#menu-btn").css("transform", "rotate(90deg)");
                        show = false;
                    } else {
                        $("#menu-btn").css("transform", "");
                        if(ww >= 800) { $("#menu").css("right", ""); }
                        else { $("#menu").css("right", ""); }
                        show = true;
                    }
                    $("#site-navigation").toggleClass("navigation-bg");
                }
            }

            /*** TRANSITION AFTER GO TO SUBPAGE ***/

            $(".main-navigation a").click(function(e) {
                //$(".content").css("margin-left", "100%");
                $(".content").css("opacity", "0");
                var link = this.href;
                e.preventDefault();
                setTimeout(function() { window.location.href = link; }, 500);
                show = false;
                menu();
            });

        </script>

        <div id="main-wrapper">
            <div id="wrapper">