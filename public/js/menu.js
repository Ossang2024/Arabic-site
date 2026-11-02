document.addEventListener('DOMContentLoaded', () => {
  const burger = document.getElementById('burger');
  const menu = document.getElementById('sideMenu');
  const backdrop = document.getElementById('menuBackdrop');

  if (!burger || !menu || !backdrop) return;

  function setMenuOpen(isOpen) {
    menu.classList.toggle('open', isOpen);
    burger.classList.toggle('is-open', isOpen);
    backdrop.classList.toggle('is-visible', isOpen);

    menu.setAttribute('aria-hidden', String(!isOpen));
    burger.setAttribute('aria-expanded', String(isOpen));
    burger.setAttribute('aria-label', isOpen ? 'Close menu' : 'Open menu');
    document.body.style.overflow = isOpen ? 'hidden' : '';
  }

  burger.addEventListener('click', () => {
    setMenuOpen(!menu.classList.contains('open'));
  });

  backdrop.addEventListener('click', () => setMenuOpen(false));

  document.addEventListener('keydown', event => {
    if (event.key === 'Escape') setMenuOpen(false);
  });

  menu.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => setMenuOpen(false));
  });

  document.querySelectorAll('.sub-toggle').forEach(button => {
    button.addEventListener('click', () => {
      const item = button.closest('.has-sub');
      const isOpen = item.classList.toggle('open');
      button.setAttribute('aria-expanded', String(isOpen));
    });
  });
});