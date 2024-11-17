let fsContainer = document.createElement('div');
fsContainer.classList.add('fs-container');

let fsPaginationSlider = document.createElement('div');
fsPaginationSlider.classList.add('fs-pagination-slider');

let fsPaginationLeft = document.createElement('button');
fsPaginationLeft.classList.add('controls', 'previous');
fsPaginationLeft.addEventListener('click', () => slidePagination(false));

let fsPaginationRight = document.createElement('button');
fsPaginationRight.classList.add('controls', 'next');
fsPaginationRight.addEventListener('click', () => slidePagination(true));

let fsPaginationSliderWrapper = document.createElement('div');
fsPaginationSliderWrapper.append(fsPaginationSlider);

let fsPagination = document.createElement('div');
fsPagination.classList.add('fs-pagination');
fsPagination.append(
  fsPaginationLeft,
  fsPaginationSliderWrapper,
  fsPaginationRight
);

let fsBg = document.createElement('div');
fsBg.classList.add('fs-bg');
fsBg.addEventListener('click', () => close());

let fsClose = document.createElement('button');
fsClose.classList.add('close');
fsClose.addEventListener('click', () => close());

let frame = document.createElement('div');
frame.classList.add('frame');
frame.append(fsContainer, fsPagination, fsClose);

let fullscreen = document.createElement('div');
fullscreen.classList.add('fullscreen');
fullscreen.append(fsBg, frame);

function slidePagination(direction) {
  let l = parseInt(fsPaginationSlider.style.left) || 0;
  let buttonWidth = 180 + 15;
  let border =
    fsPaginationSlider.parentElement.clientWidth -
    fsPaginationSlider.clientWidth;

  l = direction ? l - buttonWidth : l + buttonWidth;
  if (l > 0) l = 0;
  if (l < border) l = border;

  fsPaginationSlider.style.left = l + 'px';
}

function portfolio(data) {
  document.body.classList.add('body-fullscreen');
  document.body.append(fullscreen);

  setTimeout(() => fullscreen.classList.add('active'), 50);

  fsPaginationSlider.innerHTML = '';

  for (var x = 0; x < Object.keys(data.work).length; x++) {
    let d = data.work[x];

    let img = document.createElement('img');
    img.src = data.url + 'thumb/' + d.thumb;

    let obj = document.createElement('button');
    obj.addEventListener('click', () => getElement(data.url, d));
    obj.append(img);

    fsPaginationSlider.appendChild(obj);
  }

  getElement(data.url, data.work[0]);

  setTimeout(() => {
    fsPaginationSlider.style.minWidth =
      Object.keys(data.work).length * (180 + 15) + 'px';
  }, 100);
}

function getElement(baseUrl, o) {
  var obj = null;

  fsContainer.classList.add('transition');

  setTimeout(() => {
    let type, src;
    if (o.type === 'img') {
      type = 'img';
      src = baseUrl + o.url;
    } else if (o.type === 'link') {
      type = 'iframe';
      src = o.url;
    } else if (o.type === 'video') {
      type = 'video';
      src = baseUrl + o.url;
    }

    const obj = document.createElement(type);
    obj.src = src;

    fsContainer.innerHTML = '';
    fsContainer.append(obj);
  }, 300);

  setTimeout(() => {
    fsContainer.classList.remove('transition');
  }, 600);
}

function close() {
  fullscreen.classList.remove('active');
  fsPaginationSlider.style.left = '';
  setTimeout(() => fullscreen.remove(), 300);
}
