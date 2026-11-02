function googleTranslateElementInit() {
  new google.translate.TranslateElement({
    pageLanguage: 'en',          // la page est écrite en anglais
    includedLanguages: 'ar',
    autoDisplay: false
  }, 'google_translate_element');
}

// Lit la langue courante depuis le cookie Google
function getCurrentLang() {
  const m = document.cookie.match(/googtrans=\/en\/(\w+)/);
  return m ? m[1] : 'en';
}

function changeLang(lang) {
  const past = 'expires=Thu, 01 Jan 1970 00:00:00 GMT';
  const host = location.hostname;

  if (lang === 'en') {
    // Retour à l'anglais : on supprime le cookie
    document.cookie = `googtrans=; path=/; ${past}`;
    document.cookie = `googtrans=; path=/; domain=${host}; ${past}`;
  } else {
    const value = '/en/' + lang;
    document.cookie = `googtrans=${value}; path=/`;
    document.cookie = `googtrans=${value}; path=/; domain=${host}`;
  }
  location.reload();
}

document.addEventListener('DOMContentLoaded', () => {
  const lang = getCurrentLang();

  // Sens de lecture (RTL pour l'arabe)
  document.documentElement.dir = lang === 'ar' ? 'rtl' : 'ltr';

  // Surbrillance du bouton actif
  document.querySelectorAll('.lang-switch button').forEach(btn => {
    btn.classList.toggle('active', btn.dataset.lang === lang);
  });

  // Empêche Google de décaler le body vers le bas
  new MutationObserver(() => {
    if (document.body.style.top) document.body.style.top = '0px';
  }).observe(document.body, { attributes: true, attributeFilter: ['style'] });
});