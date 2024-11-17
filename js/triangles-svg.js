let afected, bg, bgParent, animated;
bgParent = document.querySelector('#experience');
bg = bgParent.querySelector('#triangles');
if (bg) {
  afected = bg.querySelectorAll('.afected');
  animated = bg.querySelectorAll('.animated');
}

if (afected) {
  afected.forEach((tri) => {
    // const c = Math.random() * 128 + 64;
    // tri.style.fill = `rgb(${c}, ${c}, ${c})`;

    const c = Math.random();
    tri.style.fill = `rgba(0, 0, 0, ${c / 2})`;

    //tri.style.transitionDuration = '0s';
    tri.style.transitionDuration = Math.random() * 3 + 's';
    tri.style.transitionDelay = Math.random() / 2 + 's';
  });

  animated.forEach((tri) => {
    tri.style.animationDuration = (Math.random() + 7) * 2 + 's';
    tri.style.animationDelay = -Math.random() * 10 + 's';
  });

  afected.forEach((tri) => {
    const c = Math.random() * 64;
    const a = Math.random();
    tri.style.fill = `rgb(${c}, ${c}, ${c})`;
    tri.style.fill = `rgba(0, 0, 0, ${a / 2})`;

    tri.style.transitionDuration = Math.random() * 3 + 's';
    tri.style.transitionDelay = Math.random() / 2 + 's';
  });

  bgParent.addEventListener('mousemove', (e) => {
    const x = e.screenX;
    const y = e.screenY;
    triangleAffect(x, y);

    // afected.forEach((tri) => {
    //   const distance = calculateDistance(tri, e.screenX, e.screenY);
    //   let o = (distance / 300).toFixed(2);
    //   if (o < 1) tri.style.opacity = o;
    // });
  });

  const triangleAffect = debounce((x, y) => {
    afected.forEach((tri) => {
      const distance = calculateDistance(tri,);
      let o = (distance / 300).toFixed(2);
      if (o < 1) tri.style.opacity = o;
    });
  });

  // function calculateDistance(elem, mouseX, mouseY) {
  //   return Math.floor(
  //     Math.sqrt(
  //       Math.pow(
  //         mouseX -
  //           (elem.getBoundingClientRect().left +
  //             elem.getBoundingClientRect().width / 2),
  //         2
  //       ) +
  //         Math.pow(
  //           mouseY -
  //             (elem.getBoundingClientRect().right +
  //               elem.getBoundingClientRect().height / 2),
  //           2
  //         )
  //     )
  //   );
  // }

  function calculateDistance(elem, mouseX, mouseY) {
    const pos = elem.getBoundingClientRect();
    return Math.floor(
      Math.sqrt(
        Math.pow(mouseX - (pos.left + pos.width / 2), 2) +
        Math.pow(mouseY - (pos.top + pos.height / 2), 2)
      )
    );
  }
}