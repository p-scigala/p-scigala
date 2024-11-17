<?php include('header.php'); ?>

<div id="accueil" class="content">
  <div class="video-full"></div>
</div>

<style>
  #vid2 {
    width: 100vw;
    height: auto;
    display: block;
    max-height: 100vh;
  }

  @media only screen and (max-width: 800px) {
    #main-wrapper {
      padding-top: 80px;
      background-color: #dddddd;
    }

    #accueil {
      margin-top: 0;
    }

    body {
      min-height: 100vh;
      background-color: #7ea94d;
    }

    #main-wrapper,
    #wrapper,
    #accueil,
    #vid2 {
      height: 100%;
      margin-bottom: 0;
    }
  }
</style>

<script>
  var video = $('<video />', {
    id: 'vid2',
    type: 'video/mp4',
    controls: true,
    autoplay: true,
    loop: true,
  });

  video.appendTo($('.video-full'));

  var source = $('<source />', {
    src: 'http://p-scigala.pl/pages/residence-nyon/nyon.webm',
    type: 'video/mp4',
  });

  source.appendTo($('#vid2'));

  var video = document.getElementById('vid2');
  video.addEventListener(
    'click',
    function () {
      video.play();
    },
    false
  );

  setTimeout(function () {
    $('#vid-info').css('opacity', '0');
  }, 4000);
</script>

<?php include('footer.php'); ?>
