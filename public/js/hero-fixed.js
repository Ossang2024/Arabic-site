document.addEventListener('DOMContentLoaded', () => {
  const hero  = document.querySelector('.hero-fixed');
  const stage = document.querySelector('.stage');
  const next  = document.querySelector('.section2');
  if (!hero || !stage || !next) return;

  let ticking = false;

  function update() {
    const vh = window.innerHeight;

    // Sortie : à la fin de la section 2, le héro remonte avec elle
    const shift = Math.min(0, stage.getBoundingClientRect().bottom - vh);
    hero.style.transform = `translateY(${shift}px)`;
    hero.style.visibility = shift <= -vh ? 'hidden' : 'visible';

    // Bord blanc / foncé = bord haut de la section 2
    const top  = next.getBoundingClientRect().top - shift;
    const edge = Math.min(Math.max(top, 0), vh);
    hero.style.setProperty('--edge', edge + 'px');

    ticking = false;
  }

  function onScroll() {
    if (!ticking) {
      requestAnimationFrame(update);
      ticking = true;
    }
  }

  window.addEventListener('scroll', onScroll, { passive: true });
  window.addEventListener('resize', onScroll);
  update();
});