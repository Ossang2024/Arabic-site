document.addEventListener('DOMContentLoaded', () => {
  const header = document.querySelector('.site-header');
  if (!header) return;

  // Hauteur du header, pour compenser sa sortie du flux
  const setHeight = () =>
    document.documentElement.style.setProperty('--header-h', header.offsetHeight + 'px');
  setHeight();
  window.addEventListener('resize', setHeight);
  window.addEventListener('load', setHeight);   // après chargement du logo

  const DELTA = 6;            // ignore les micro-mouvements
  let lastY = window.scrollY;
  let ticking = false;

  // Page rechargée en milieu de page : header caché au départ
  if (lastY > 5) header.classList.add('is-hidden', 'is-solid');

  function update() {
    const y = Math.max(window.scrollY, 0);   // évite le rebond sur iOS
    const diff = y - lastY;

    if (y <= 10) {
      // Tout en haut : look d'origine (transparent)
      header.classList.remove('is-hidden', 'is-solid');
      lastY = y;
    } else if (Math.abs(diff) > DELTA) {
      if (diff > 0 && y > header.offsetHeight) {
        header.classList.add('is-hidden');                 // scroll vers le bas
      } else if (diff < 0) {
        header.classList.remove('is-hidden');              // scroll vers le haut
        header.classList.add('is-solid');
      }
      lastY = y;
    }
    ticking = false;
  }

  window.addEventListener('scroll', () => {
    if (!ticking) {
      requestAnimationFrame(update);
      ticking = true;
    }
  }, { passive: true });
});