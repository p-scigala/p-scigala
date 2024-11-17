<?php include("header.php"); ?>

<div id="film" class="content">

    <div class="full-img" id="img-film"></div>


    <div class="w1280">
        <h1>A vol d’oiseau</h1>
        <video id="film" type="video/mp4" controls loop="loop" autoplay muted>
            <source src="http://p-scigala.pl/pages/ecrin-de-la-tour/video/video_small.mp4" type="video/mp4">
        </video>
    </div>
    <style>

        .video-placeholder {
            position: relative;
        }

        .video-placeholder * {
            color: #FFFFFF;
        }

        .video-placeholder > div {
            position: absolute;
            text-align: center;
            height: 100px;
            margin: auto;
            width: 350px;
            bottom: 0;
            right: 0;
            left: 0;
            top: 0;
        }

    </style>

</div>

<style> .w1920 { padding-bottom: 0; } </style>

<script> setTimeout(function() { $(".full-img").css("animation", "move-image 60s infinite"); }, 500); </script>

<?php include("footer.php"); ?>