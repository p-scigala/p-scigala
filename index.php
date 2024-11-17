<?php include('header.php'); ?>

<main>
    <section id="intro">
        <img class="h hidden" src="imgs/ps-photo-hex.webp" title="Przemysław Ścigała" alt="Przemysław Ścigała">
        <div class="page-title h hidden">
            <h1>Przemysław Ścigała</h1>
        </div>
        <p class="h hidden" data-text="aboutText"></p>
    </section>

    <section id="experience" class="bg">
        <canvas class="triangles" width="1920" height="1920"></canvas>

        <div>
            <div class="frame">
                <h2 data-text="experience"></h2>
            </div>

            <div class="row">
                <div class="col h hidden">
                    <div class="frame">
                        <h3 data-text="education"></h3>

                        <div class="block">
                            <div><b>2011-2013</b></div>
                            <div data-text="school1"></div>
                        </div>
                        <div class="block">
                            <div><b>2013-2016</b></div>
                            <div data-text="school2"></div>
                        </div>
                        <div class="block">
                            <div><b>2016-2018</b></div>
                            <div data-text="school3"></div>
                        </div>
                    </div>
                </div>

                <div class="col h hidden h-delay-2">
                    <div class="frame">
                        <h3 data-text="experience2"></h3>
                        <div class="block">
                            <div><b>2014</b></div>
                            <div data-text="workExp1"></div>
                        </div>
                        <div class="block">
                            <div><b>2016</b></div>
                            <div data-text="workExp2"></div>
                        </div>
                        <div class="block">
                            <div><b>2017</b></div>
                            <div data-text="workExp3"></div>
                        </div>
                        <div class="block">
                            <div><b>2017-2021</b></div>
                            <div data-text="workExp4"></div>
                        </div>
                        <div class="block">
                            <div><b>2021-2022</b></div>
                            <div data-text="workExp5"></div>
                        </div>
                        <div class="block">
                            <div><b>2022-...</b></div>
                            <div data-text="workExp6"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="abilities">
        <div>
            <h2 data-text="abilities" class="center"></h2>
            <div class="ability-list h hidden"></div>

            <br>

            <h2 data-text="otherAbilities" class="center"></h2>
            <div class="center h hidden" style="text-align: center;">
                <div data-text="languages"></div>
                <div data-text="carLicence"></div>
            </div>

            <script>
                const abilityList = document.querySelector('.ability-list');
            
                abilities.forEach(item => {
                    const wrapper = document.createElement('div');
                    wrapper.className = 'ability';
            
                    const icon = document.createElement('img');
                    icon.className = 'ability__icon';
                    icon.src = item.icon;
                    icon.alt = item.name;
                    icon.title = item.name;
                
                    const level = document.createElement('div');
                    level.className = 'ability__level';
            
                    const title = document.createElement('div');
                    title.className = 'ability__title';
                    title.innerText = item.name;

                    const levelName = document.createElement('span');
                    levelName.className = 'ability__level-name';
                    levelName.setAttribute('data-text', 'level' + item.level);
                    title.append(levelName);
                    level.append(title);

                    const levelStars = document.createElement('div');
                    levelStars.className = 'ability__level-stars';
            
                    for(x = 0; x < 5; x++) {
                        const levelStar = document.createElement('img');
                        levelStar.src = x < item.level ? 'imgs/icons/star-active.svg' : 'imgs/icons/star-inactive.svg';
                        levelStars.append(levelStar);
                    }
                    level.append(levelStars);
            
                    wrapper.append(icon, level);
                    abilityList.append(wrapper);
                });
            </script>
        </div>
    </section>

    <section id="portfolio" class="bg">
        <canvas class="triangles" width="1920" height="1920"></canvas>

        <div>
            <div class="frame">
                <h2 data-text="portfolio"></h2>
            </div>
            <div class="slider">
                <div class="categories">
                    <div class="category www">
                        <div class="h hidden">
                            <a href="https://naima.pl" target="_blank" class="frame">
                                <img src="imgs/portfolio/www/logo-naima.webp" alt="Naima logo" style="background-color: #E6E6E6">
                                <span><b>Naima</b></span>
                            </a>
                        </div>
                        <div class="h hidden h-delay-2">
                            <a href="https://tattva-band.pl" target="_blank" class="frame">
                                <img src="imgs/portfolio/www/logo-tattva-band.svg" alt="Tattva logo">
                                <span><b data-text="tattvaBand"></b></span>
                            </a>
                        </div>
                        <div class="h hidden h-delay-4">
                            <a href="http://p-scigala.pl/pages/ecrin-de-la-tour/" target="_blank" class="frame">
                                <img src="imgs/portfolio/www/logo-ecrin-de-la-tour.webp" alt="Ecrin de la Tour logo" style="background-color: #BA9C5C">
                                <span><b>Ecrin de la Tour</b></span>
                            </a>
                        </div>
                        <div class="h hidden">
                            <a href="http://p-scigala.pl/pages/residence-nyon/" target="_blank" class="frame">
                                <img src="imgs/portfolio/www/logo-central-park-nyon.webp" alt="Résidence Central Park Nyon logo">
                                <span><b>Résidence Central Park Nyon</b></span>
                            </a>
                        </div>
                    </div>

                    <div class="category graphic">
                        <div class="h hidden">
                            <button class="frame" onclick="portfolio(portfolioData.visualisations3D)" aria-label="Wizualizacje 3D">
                                <img src="imgs/portfolio/3D/room-1.webp">
                                <span><b data-text="visualisations3D"></b></span>
                            </button>
                        </div>
                        <div class="h hidden h-delay-2">
                            <button class="frame" onclick="portfolio(portfolioData.graphic2D)" aria-label="Grafika 2D">
                                <img src="imgs/portfolio/2D/poster-krotka-historia-czasu.webp">
                                <span><b data-text="graphic2D"></b></span>
                            </button>
                        </div>
                        <div class="h hidden h-delay-4">
                            <button class="frame" onclick="portfolio(portfolioData.ui)" aria-label="Interfejsy">
                                <img src="imgs/portfolio/ui/recepcja-1.webp">
                                <span><b data-text="ui"></b></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pagination frame">
                <button id="pag0" onclick="slider(0)" class="active" aria-label="WWW">WWW</button>
                <button id="pag1" onclick="slider(1)" aria-label="Grafika"><span data-text="graphic"></span></button>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="center h hidden">
            <h2 data-text="contact" class="center"></h2>
            <form id="form" method="POST">
                <input id="name" type="text" name="name" data-placeholder="name" data-validation-empty="true" required>
                <input id="email" type="e-mail" name="email" data-placeholder="email" data-validation-empty="true" data-validation-email="true" required>
                <textarea id="message" name="message" data-placeholder="message" data-validation-empty="true" rows="8" required></textarea>
                <button id="submit" type="button" name="submit" data-text="submit" aria-label="Wyślij"></button>
            </form>
        </div>
        <div class="contact-links h hidden">
            <a href="mailto: scigala.przemyslaw@gmail.com">
                <img src="imgs/icons/icon-mail.svg">
                <span>scigala.przemyslaw@gmail.com</span>
            </a>
            <a href="https://www.linkedin.com/in/p-scigala" target="_blank">
                <img src="imgs/icons/icon-linkedin.svg">
                <span>LinkedIn</span>
            </a>
            <a href="https://github.com/p-scigala" target="_blank">
                <img src="imgs/icons/icon-github.svg">
                <span>GitHub</span>
            </a>
        </div>
    </section>

</main>

<?php include('footer.php'); ?>
