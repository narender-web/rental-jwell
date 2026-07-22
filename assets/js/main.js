const header = document.querySelector('[data-header]');
const navToggle = document.querySelector('[data-nav-toggle]');
const mainNav = document.querySelector('[data-main-nav]');
const navBackdrop = document.querySelector('[data-nav-backdrop]');
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
  const openMenu = () => {
    mainNav.classList.add('open');
    navToggle.classList.add('is-open');
    navToggle.setAttribute('aria-expanded', 'true');
    navToggle.setAttribute('aria-label', 'Close menu');
    if (navBackdrop) navBackdrop.classList.add('open');
    document.body.style.overflow = 'hidden';
  };

  const closeMenu = () => {
    mainNav.classList.remove('open');
    navToggle.classList.remove('is-open');
    navToggle.setAttribute('aria-expanded', 'false');
    navToggle.setAttribute('aria-label', 'Open menu');
    if (navBackdrop) navBackdrop.classList.remove('open');
    document.body.style.overflow = '';
  };

  navToggle.addEventListener('click', () => {
    if (mainNav.classList.contains('open')) {
      closeMenu();
    } else {
      openMenu();
    }
  });

  if (navBackdrop) {
    navBackdrop.addEventListener('click', closeMenu);
  }

  mainNav.querySelectorAll('a').forEach((link) => {
    link.addEventListener('click', closeMenu);
  });

  window.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') closeMenu();
  });
}

dropdownToggles.forEach((toggle) => {
  toggle.addEventListener('click', () => {
    const item = toggle.closest('.dropdown');
    if (item) {
      const isOpen = item.classList.contains('open');
      // Close all other dropdowns on mobile
      if (window.innerWidth <= 760) {
        document.querySelectorAll('.dropdown.open').forEach((d) => {
          if (d !== item) d.classList.remove('open');
        });
      }
      item.classList.toggle('open', !isOpen);
    }
  });
});

// Close desktop dropdowns on outside click
document.addEventListener('click', (e) => {
  if (window.innerWidth > 760 && !e.target.closest('.dropdown')) {
    document.querySelectorAll('.dropdown.open').forEach((d) => d.classList.remove('open'));
  }
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
