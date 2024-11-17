const mouseMoveItems = document.querySelectorAll('.mouse-move');
mouseMoveItems.forEach((item) => {
  const parent = item.closest('section');
  const itemData = item.getBoundingClientRect();
  const itemX = itemData.left + itemData.width / 2;
  const itemY = itemData.top + itemData.height / 2;
  item.style.position = 'relative !important';
  item.style.transitionDuration = '0s !important';
  mouseMoveElement(item, parent, itemX, itemY);
});

function mouseMoveElement(item, parent, itemX, itemY) {
  parent.addEventListener('mousemove', (e) => {
    const x = e.clientX;
    const y = e.clientY;
    const rotateX = (-x + itemX) / 60;
    const rotateY = (-y + itemY) / 60;
    const translateX = (-x + itemX) / 60;
    const translateY = (-y + itemY) / 60;
    // const borderRight = translateX < 0 ? 0 : translateX;
    // const borderTop = -translateY < 0 ? 0 : -translateY;
    // const borderLeft = -translateX < 0 ? 0 : -translateX;
    // const borderBottom = translateY < 0 ? 0 : translateY;

    item.classList.add('mouse-move--active');
    item.style.transform = `translate(${translateX}px, ${translateY}px) rotateX(${-rotateY}deg) rotateY(${-rotateX}deg)`;
    item.style.boxShadow = `${translateX * 2}px ${translateY * 2}px 50px #000000`;
    // item.style.borderWidth = `${borderTop}px ${borderRight}px ${borderBottom}px ${borderLeft}px`;
  });

  parent.addEventListener('mouseout', () => {
    item.classList.remove('mouse-move--active');

    setTimeout(() => {
      item.style.transform = '';
      item.style.boxShadow = '';
      // item.style.borderWidth = '';
    }, 0);
  });
}
