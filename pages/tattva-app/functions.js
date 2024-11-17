let songs = document.querySelectorAll('section');
let menuState = false;

function getSong(name) {
  songs.forEach((song) => song.classList.remove('active'));
  document.querySelector('#' + name).classList.add('active');
  menuToggle(false);
}

getSong('akt-1');

function changeSong(dir) {
  // dir=true - left | dir=false - right
  let previous = document.querySelector('section.active');
  if (dir) {
    current = previous.nextElementSibling;
    if (current === null) current = document.querySelector('section');
  } else {
    current = previous.previousElementSibling;
    if (current === null)
      current = document.querySelector(
        'section:nth-child(' + songs.length + ')'
      );
  }
  getSong(current.getAttribute('id'));
}

function menuToggle(state) {
  menuState = state;
  if (state) {
    document.querySelector('nav').classList.add('active');
  } else {
    document.querySelector('nav').classList.remove('active');
  }
}

function menuToggleNoState() {
  menuState = !menuState;
  menuToggle(menuState);
}

let textSize = 2,
  maxTextSize = 12;
function changeTextSize(size) {
  textSize = size ? textSize - 1 : textSize + 1;

  document.querySelector('.sizeUp').classList.remove('disabled');
  document.querySelector('.sizeDown').classList.remove('disabled');

  if (textSize >= maxTextSize) {
    textSize = maxTextSize;
    document.querySelector('.sizeUp').classList.add('disabled');
  }
  if (textSize <= 0) {
    textSize = 0;
    document.querySelector('.sizeDown').classList.add('disabled');
  }

  document.querySelector('main').style.fontSize = 10 + textSize * 5 + 'px';
  document.querySelectorAll('h2').forEach((h2) => {
    h2.style.fontSize = 20 + textSize * 5 + 'px';
  });
}

document.querySelectorAll('nav button').forEach((button) => {
  let id = button.getAttribute('data-id');
  button.addEventListener('click', () => getSong(id));
});

document.addEventListener('keydown', (e) => {
  if (e.keyCode === 32) menuToggleNoState(); //space
  if (e.keyCode === 39) changeSong(true); //right arrow
  if (e.keyCode === 37) changeSong(false); //left arrow
  //if(e.keyCode === 38) menuToggle(false); //up arrow
  //if(e.keyCode === 40) menuToggle(true); //down arrow
  if (e.keyCode === 109) changeTextSize(true); //+
  if (e.keyCode === 107) changeTextSize(false); //-
});

document.addEventListener('touchstart', handleTouchStart, false);
document.addEventListener('touchmove', handleTouchMove, false);

var xDown = null;
var yDown = null;

function getTouches(evt) {
  return (
    evt.touches || // browser API
    evt.originalEvent.touches
  ); // jQuery
}

function handleTouchStart(evt) {
  const firstTouch = getTouches(evt)[0];
  xDown = firstTouch.clientX;
  yDown = firstTouch.clientY;
}

function handleTouchMove(evt) {
  if (!xDown || !yDown) {
    return;
  }

  var xUp = evt.touches[0].clientX;
  var yUp = evt.touches[0].clientY;

  var xDiff = xDown - xUp;
  var yDiff = yDown - yUp;

  if (Math.abs(xDiff) > Math.abs(yDiff)) {
    changeSong(xDiff > 0 ? true : false);
  } else {
    if (yDiff > 0) {
      /* down swipe */
    } else {
      /* up swipe */
    }
  }
  /* reset values */
  xDown = null;
  yDown = null;
}

var elem = document.documentElement;

/* View in fullscreen */
function openFullscreen() {
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  } else if (elem.webkitRequestFullscreen) {
    elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) {
    elem.msRequestFullscreen();
  }
}

document.addEventListener('click', () => openFullscreen());
document.addEventListener('touch', () => openFullscreen());
document.addEventListener('keydown', () => openFullscreen());
