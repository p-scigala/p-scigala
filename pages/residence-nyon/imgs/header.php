<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="theme-color" content="#7EA94D" />
    <meta
      name="description"
      content="Central Park, votre nouveau projet immobilier de standing au cœur de Nyon."
    />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <div id="header-wrapper">
      <div id="header">
        <button id="menu-btn" onclick="menu()">
          <span></span><span></span><span></span>
        </button>

        <nav id="site-navigation" class="main-navigation" role="navigation">
          <div class="menu-primary-menu-container">
            <ul id="menu-primary-menu" class="menu">
              <li
                id="menu-item-60"
                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-60"
              >
                <a href="http://p-scigala.pl/pages/residence-nyon/"
                  >Accueil</a
                >
              </li>
              <li
                id="menu-item-39"
                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-39"
              >
                <a href="http://p-scigala.pl/pages/residence-nyon/projet/"
                  >Projet</a
                >
              </li>
              <li
                id="menu-item-38"
                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38"
              >
                <a href="http://p-scigala.pl/pages/residence-nyon/situation/"
                  >Situation</a
                >
              </li>
              <li
                id="menu-item-37"
                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-37"
              >
                <a href="http://p-scigala.pl/pages/residence-nyon/galerie/"
                  >Galerie</a
                >
              </li>
              <li
                id="menu-item-40"
                class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-9 current_page_item menu-item-40"
              >
                <a
                  href="http://p-scigala.pl/pages/residence-nyon/plans-prix/"
                  aria-current="page"
                  >Plans &amp; Prix</a
                >
              </li>
            </ul>
          </div>
        </nav>

        <nav id="menu-left" class="main-navigation" role="navigation">
          <div class="menu-menu-1-container">
            <ul id="menu-menu-1" class="menu">
              <li
                id="menu-item-25"
                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-25"
              >
                <a href="http://p-scigala.pl/pages/residence-nyon/"
                  >Accueil</a
                >
              </li>
              <li
                id="menu-item-23"
                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23"
              >
                <a href="http://p-scigala.pl/pages/residence-nyon/projet/"
                  >Projet</a
                >
              </li>
              <li
                id="menu-item-22"
                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22"
              >
                <a href="http://p-scigala.pl/pages/residence-nyon/situation/"
                  >Situation</a
                >
              </li>
            </ul>
          </div>
          <div id="triangle-wrapper-1"><div id="header-triangle-1"></div></div>
        </nav>

        <div class="site-branding">
          <a href="http://p-scigala.pl/pages/residence-nyon/"
            ><img
              src="http://p-scigala.pl/pages/residence-nyon/imgs/Logo_Central_Park.png"
          /></a>
        </div>

        <nav id="menu-right" class="main-navigation" role="navigation">
          <div class="menu-menu-2-container">
            <ul id="menu-menu-2" class="menu">
              <li
                id="menu-item-27"
                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-27"
              >
                <a href="http://p-scigala.pl/pages/residence-nyon/galerie/"
                  >Galerie</a
                >
              </li>
              <li
                id="menu-item-28"
                class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-9 current_page_item menu-item-28"
              >
                <a
                  href="http://p-scigala.pl/pages/residence-nyon/plans-prix/"
                  aria-current="page"
                  >Plans &amp; Prix</a
                >
              </li>
              <li
                id="menu-item-26"
                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-26"
              >
                <a
                  href="http://p-scigala.pl/pages/residence-nyon/?page_id=18"
                  >Contact</a
                >
              </li>
            </ul>
          </div>
          <div id="triangle-wrapper-2"><div id="header-triangle-2"></div></div>
        </nav>
      </div>
    </div>

    <script>
      var show = true;
      function menu() {
        if (show) {
          document.getElementById('site-navigation').style.left = '0';
          document.getElementById('menu-left').style.width = '100%';
          show = false;
        } else {
          document.getElementById('site-navigation').style.left = '-300px';
          document.getElementById('menu-left').style.width = '80px';
          show = true;
        }
        $('#site-navigation').toggleClass('navigation-bg');
      }

      /*** href fluently ***/
      $('a[href*="#"]')
        // Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function (event) {
          // On-page links
          if (
            location.pathname.replace(/^\//, '') ==
              this.pathname.replace(/^\//, '') &&
            location.hostname == this.hostname
          ) {
            // Figure out element to scroll to
            var target = $(this.hash);
            target = target.length
              ? target
              : $('[name=' + this.hash.slice(1) + ']');
            // Does a scroll target exist?
            if (target.length) {
              // Only prevent default if animation is actually gonna happen
              event.preventDefault();
              $('html, body').animate(
                {
                  scrollTop: target.offset().top,
                },
                1000,
                function () {
                  // Callback after animation
                  // Must change focus!
                  var $target = $(target);
                  $target.focus();
                  if ($target.is(':focus')) {
                    // Checking if the target was focused
                    return false;
                  } else {
                    $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                    $target.focus(); // Set focus again
                  }
                }
              );
            }
          }
        });

      /*** TRANSITION AFTER GO TO SUBPAGE ***/

      $('.main-navigation a').click(function () {
        $('.content').css('margin-left', '100%');
        $('.content').css('opacity', '0');
      });
    </script>

    <div id="main-wrapper">
      <div id="wrapper">