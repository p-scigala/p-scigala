<?php include('header.php'); ?>

<div id="galerie" class="wide content">
  <div class="gallery-custom">
    <button class="gallery-item" data-id="1" data-src="imgs/cam03.jpg">
      <img src="imgs/cam03.jpg" />
    </button>
    <button class="gallery-item" data-id="2" data-src="imgs/cam_01_D.jpg">
      <img src="imgs/cam_01_D.jpg" />
    </button>
    <button class="gallery-item" data-id="3" data-src="imgs/cam_03_A.jpg">
      <img src="imgs/cam_03_A.jpg" />
    </button>
    <button class="gallery-item" data-id="4" data-src="imgs/cam_03_B.jpg">
      <img src="imgs/cam_03_B.jpg" />
    </button>
    <button class="gallery-item" data-id="5" data-src="imgs/cam_04.jpg">
      <img src="imgs/cam_04.jpg" />
    </button>
    <button class="gallery-item" data-id="6" data-src="imgs/cam_03_night.jpg">
      <img src="imgs/cam_03_night.jpg" />
    </button>
    <button class="gallery-item" data-id="7" data-src="imgs/masterplan.jpg">
      <img src="imgs/masterplan.jpg" />
    </button>
    <button class="gallery-item" data-id="8" data-src="imgs/cam_02_b_sign.jpg">
      <img src="imgs/cam_02_b_sign.jpg" />
    </button>
    <button class="gallery-item" data-id="9" data-src="imgs/cam_03_A_sign.jpg">
      <img src="imgs/cam_03_A_sign.jpg" />
    </button>
  </div>
</div>

<script>
  var currentId = null;
  var length = $('.gallery-item').length;
  var loadState = false;

  $('.gallery-item').on('click', function () {
    currentId = Number($(this).attr('data-id'));
    fullscreen();
  });

  function fullscreen() {
    var wrapper = document.createElement('div');
    var box = document.createElement('div');
    var img = document.createElement('img');
    var prev = document.createElement('button');
    var next = document.createElement('button');
    var close = document.createElement('button');

    wrapper.className = 'fullscreen-wrapper hidden';
    box.className = 'fullscreen-box';
    img.className = 'fullscreen-img';
    prev.className = 'fullscreen-prev';
    next.className = 'fullscreen-next';
    close.className = 'fullscreen-close';

    img.src = $('.gallery-item[data-id=' + currentId + ']').attr('data-src');

    prev.addEventListener('click', () => {
      if (!loadState) {
        currentId--;
        loadState = true;
        changeImg();
        setTimeout(() => (loadState = false), 300);
      }
    });
    next.addEventListener('click', () => {
      if (!loadState) {
        currentId++;
        loadState = true;
        changeImg();
        setTimeout(() => (loadState = false), 300);
      }
    });
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

    box.append(img, prev, next, close);
    wrapper.append(box);
    document.body.append(wrapper);

    setTimeout(() => wrapper.classList.remove('hidden'), 0);
  }

  function changeImg() {
    if (currentId < 1) currentId = length - 1;
    if (currentId > length - 1) currentId = 1;

    const src = $('.gallery-item[data-id=' + currentId + ']').attr('data-src');
    $('.fullscreen-img').attr('src', src);
  }
</script>

<?php include('footer.php'); ?>
