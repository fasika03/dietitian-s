var hamburgerBtn = document.getElementById('hamburgerBtn');
var navLinks = document.getElementById('navLinks');
hamburgerBtn.addEventListener('click', function(){
  var isOpen = navLinks.classList.toggle('open');
  hamburgerBtn.setAttribute('aria-expanded', isOpen);
});
navLinks.addEventListener('click', function(e){
  if(e.target.tagName === 'A'){
    navLinks.classList.remove('open');
    hamburgerBtn.setAttribute('aria-expanded', 'false');
  }
});

// Scroll-reveal: fade + rise sections into view as the user scrolls down.
// Respects prefers-reduced-motion, and skips straight to visible if JS
// is disabled or IntersectionObserver isn't supported.
if (!window.matchMedia('(prefers-reduced-motion: reduce)').matches && 'IntersectionObserver' in window) {
  var revealTargets = document.querySelectorAll('section');
  var observer = new IntersectionObserver(function(entries){
    entries.forEach(function(entry){
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12 });

  revealTargets.forEach(function(el){
    el.classList.add('reveal');
    observer.observe(el);
  });
}