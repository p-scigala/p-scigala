<footer>
    <!-- <div class="social-media">
        <a href="https://github.com/pizmak11" target="_blank">
            <img src="imgs/icons/github.svg" alt="GitHub">
        </a>
        <a href="https://www.linkedin.com/in/przemysław-ścigała-2b9759160/" target="_blank">
            <img src="imgs/icons/linkedin.svg" alt="LinkedIn">
        </a>
    </div> -->
    <div>
        Copyright © <?php echo date("Y"); ?> <span data-text="footer"></span>
    </div>
</footer>

<script src="js/triangles-bg.js?<?php echo time(); ?>"></script>
<script src="js/triangles-svg.js?<?php echo time(); ?>"></script>
<script src="js/portfolio.js?<?php echo time(); ?>"></script>
<script src="js/form.js?<?php echo time(); ?>"></script>
<script src="js/mouse-move.js?<?php echo time(); ?>"></script>

<script>

    const iconsWrapper = document.querySelector('.icons');
    const icons = document.querySelectorAll('.icons .icon');

    function slider(x) {
        document.querySelector('.categories').style.left = "calc(" + (-100 * x) + "% + " + (-20 * x) + "px)";
        document.querySelector('.pagination .active').classList.remove('active');
        document.querySelector('#pag' + x).classList.add('active');
    }

    function darkMode() {
        document.body.classList.toggle('dark-mode');
        params.darkMode = !params.darkMode;
        drawBackground(params);
    }

    /*
    
    iconsData = {
        x: iconsWrapper.clientWidth,
        y: iconsWrapper.clientHeight,
    }

    icons.forEach(icon => iconsRandomize(icon));
    setTimeout(() => {
        icons.forEach(icon => iconsRandomize(icon));
    }, 50);

    function iconsRandomize(icon) {
        if(icon) {
            var s = Math.floor(Math.random() * 60 + 60)
            var x = Math.floor(Math.random() * (iconsData.x - s))
            var y = Math.floor(Math.random() * (iconsData.y - s))
          
            icon.style.top = y + "px";
            icon.style.left = x + "px";
            icon.style.width = s + "px";
            icon.style.height = s + "px";
        }
    }

    let int = 0;
    icons.forEach(icon => {
        int++;
        setInterval(() => {
            iconsRandomize(icon);
        }, 7000 + 200 * int);
    });

    */
        
    /* other */

    let wh = window.innerHeight;
    let ww = window.innerWidth;

    window.addEventListener("load", (e) => {
        window.addEventListener('resize', bodyResize);
    });

    const bodyResize = debounce(() => {
        wh = wh = window.innerHeight;
        ww = ww = window.innerWidth;

        /*
        iconsData = {
            x: iconsWrapper.clientWidth,
            y: iconsWrapper.clientHeight,
        }
        icons.forEach(icon => iconsRandomize(icon));
        */
    });

    document.addEventListener("scroll", (e) => animateHidden());

    const animateHidden = debounce (()=> {
        const hiddenElements = document.querySelectorAll('.h');
        if(hiddenElements) {
            hiddenElements.forEach(item => {
                let scr = (document.documentElement.scrollTop || document.body.scrollTop) + (wh * 0.9);
                let top = getOffset(item).top;
                if (scr > top) {
                    item.classList.remove('hidden');
                    setTimeout(()=> item.classList.remove('h'), 600);
                }
            });
        }
    }, 100);

    function getOffset(element) {
        if (!element.getClientRects().length) {
          return { top: 0, left: 0 };
        }

        let rect = element.getBoundingClientRect();
        let win = element.ownerDocument.defaultView;

        return ({
          top: rect.top + win.pageYOffset,
          left: rect.left + win.pageXOffset
        });   
    }


    langChanger();
</script>

</body>

</html>
