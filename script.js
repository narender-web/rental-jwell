const menuToggle = document.querySelector('.menu-toggle');
const siteNav = document.getElementById('siteNav');

if (menuToggle && siteNav) {
  const syncMenuA11yState = () => {
    const isOpen = siteNav.classList.contains('open');
    menuToggle.setAttribute('aria-expanded', String(isOpen));
    menuToggle.setAttribute('aria-label', isOpen ? 'Close navigation menu' : 'Open navigation menu');
  };

  syncMenuA11yState();

  menuToggle.addEventListener('click', () => {
    siteNav.classList.toggle('open');
    syncMenuA11yState();
  });

  siteNav.querySelectorAll('a').forEach((link) => {
    link.addEventListener('click', () => {
      siteNav.classList.remove('open');
      syncMenuA11yState();
    });
  });
}

const animatedSections = document.querySelectorAll('.section-animate');
if ('IntersectionObserver' in window) {
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
        }
      });
    },
    { threshold: 0.2 }
  );

  animatedSections.forEach((section) => observer.observe(section));
} else {
  animatedSections.forEach((section) => section.classList.add('visible'));
}
