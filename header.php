<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="theme-color" content="#000000">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Strona portfolio. Strony internetowe, grafika komputerowa.">
    <meta name="keywords" content="przemek, przemysław, ścigała, graphic design, designer, 2D, 3D, web developer, frontend, portfolio">
    <title>Przemysław Ścigała</title>
    <link rel="stylesheet" href="style.min.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="style-dark.min.css?<?php echo time(); ?>">
    <script src="js/language.js?<?php echo time(); ?>"></script>
    <script src="js/portfolio-data.js?<?php echo time(); ?>"></script>
    <script src="js/abilities-data.js?<?php echo time(); ?>"></script>
    <script>
      function debounce(func, timeout = 300) {
        let timer;
        return (...args) => {
          clearTimeout(timer);
          timer = setTimeout(() => { func.apply(this, args); }, timeout);
        };
      }
    </script>
</head>

<body onload="animateHidden()" class="dark-mode">
    <header>
        <div>
            <div class="logo">
                <img class="logo-light" src="imgs/ps-logo-v2.svg" alt="Przemysław Ścigała">
                <img class="logo-dark" src="imgs/ps-logo-v1.svg" alt="Przemysław Ścigała">
            </div>

            <nav>
                <a href="#intro" data-text="intro"></a>
                <a href="#experience" data-text="experience"></a>
                <a href="#abilities" data-text="abilities"></a>
                <a href="#portfolio" data-text="portfolio"></a>
                <a href="#contact" data-text="contact"></a>
            </nav>

            <div class="header-icons">
                <button class="lang" onclick="langChanger()" aria-label="Wybór języka"></button>
                <button class="darkMode" onclick="darkMode()" aria-label="Wybór motywu">
                    <img class="dark" src="imgs/icons/dark.svg" alt="Dark mode">
                    <img class="light" src="imgs/icons/light.svg" alt="Light mode">
                </button>
            </div>
        </div>

        <button class="menu-button" aria-label="Menu"></button>

        <script>
            const menuBtn = document.querySelector('.menu-button');
            const header = document.querySelector('header');

            menuBtn.addEventListener('click', ()=> {
                menuBtn.classList.toggle('active');
                header.classList.toggle('active');
            });

            document.querySelectorAll('nav a').forEach(item => {
                item.addEventListener('click', ()=> {
                    menuBtn.classList.remove('active');
                    header.classList.remove('active');
                });
            });
        </script>
    </header>
