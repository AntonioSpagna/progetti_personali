const navbarToggler = document.querySelector('.navbar-toggler');
const navbarNav = document.querySelector('.navbar-collapse');

navbarToggler.addEventListener('click', () => {
  navbarNav.classList.toggle('show');
  document.body.classList.toggle('no-scroll');
});


const navbarCollapse = document.querySelector('.navbar-collapse');

window.addEventListener('scroll', function() {
  if (navbarCollapse.classList.contains('show')) {
    navbarCollapse.classList.remove('show');
    navbarToggler.classList.remove('collapsed');
  }
});

