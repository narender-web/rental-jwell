const header = document.querySelector('[data-header]');
const navToggle = document.querySelector('[data-nav-toggle]');
const mainNav = document.querySelector('[data-main-nav]');
const dropdownToggles = document.querySelectorAll('[data-dropdown-toggle]');

if (header) {
  const onScroll = () => {
    if (window.scrollY > 30) {
      header.classList.add('is-scrolled');
    } else {
      header.classList.remove('is-scrolled');
    }
  };
  onScroll();
  window.addEventListener('scroll', onScroll, { passive: true });
}

if (navToggle && mainNav) {
  const syncState = () => {
    const isOpen = mainNav.classList.contains('open');
    navToggle.setAttribute('aria-expanded', String(isOpen));
    navToggle.setAttribute('aria-label', isOpen ? 'Close menu' : 'Open menu');
  };

  navToggle.addEventListener('click', () => {
    mainNav.classList.toggle('open');
    syncState();
  });

  mainNav.querySelectorAll('a').forEach((link) => {
    link.addEventListener('click', () => {
      mainNav.classList.remove('open');
      syncState();
    });
  });

  syncState();
}

dropdownToggles.forEach((toggle) => {
  toggle.addEventListener('click', () => {
    const item = toggle.closest('.dropdown');
    if (item && window.innerWidth <= 760) {
      item.classList.toggle('open');
    }
  });
});

const revealItems = document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-zoom');
if ('IntersectionObserver' in window) {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
      }
    });
  }, { threshold: 0.2 });

  revealItems.forEach((item) => observer.observe(item));
} else {
  revealItems.forEach((item) => item.classList.add('visible'));
}

const galleryItems = document.querySelectorAll('[data-gallery-item]');
const loadMoreButton = document.querySelector('[data-load-more]');

if (galleryItems.length) {
  let visibleItems = 6;

  const updateGalleryVisibility = () => {
    galleryItems.forEach((item, index) => {
      item.classList.toggle('hidden', index >= visibleItems);
    });

    if (loadMoreButton) {
      if (visibleItems >= galleryItems.length) {
        loadMoreButton.style.display = 'none';
      }
    }
  };

  updateGalleryVisibility();

  if (loadMoreButton) {
    loadMoreButton.addEventListener('click', () => {
      visibleItems += 6;
      updateGalleryVisibility();
    });
  }
}

const lightbox = document.querySelector('[data-lightbox]');
const lightboxImage = document.querySelector('[data-lightbox-image]');
const lightboxClose = document.querySelector('[data-lightbox-close]');

if (lightbox && lightboxImage) {
  document.querySelectorAll('[data-lightbox-trigger]').forEach((trigger) => {
    trigger.addEventListener('click', () => {
      const image = trigger.querySelector('img');
      if (image) {
        lightboxImage.src = image.dataset.full || image.src;
        lightboxImage.alt = image.alt;
        lightbox.classList.add('open');
      }
    });
  });

  const closeLightbox = () => lightbox.classList.remove('open');

  if (lightboxClose) {
    lightboxClose.addEventListener('click', closeLightbox);
  }

  lightbox.addEventListener('click', (event) => {
    if (event.target === lightbox) {
      closeLightbox();
    }
  });

  window.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') {
      closeLightbox();
    }
  });
}
