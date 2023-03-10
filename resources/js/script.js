

var scrollLink = document.querySelector('.scroll-link');
var scrollToTop = document.querySelector('.scroll-to-top');

window.addEventListener('scroll', function() {
  if (window.scrollY > 100) {
    scrollToTop.style.bottom = '20px';
  } else {
    scrollToTop.style.bottom = '-60px';
  }
});

scrollLink.addEventListener('click', function(e) {
  e.preventDefault();
  window.scrollTo({ top: 0, behavior: 'smooth' });
});

window.addEventListener('scroll', function() {
  var scrollPosition = window.scrollY;
  var documentHeight = document.body.offsetHeight;
  var windowHeight = window.innerHeight;
  var progress = Math.floor((scrollPosition / (documentHeight - windowHeight)) * 100);
  document.getElementById('progress-bar').style.width = progress + '%';
});

/* Modale Search */

  // let mostraModaleButton = document.getElementById('mostra-modale');
  // let modale = document.getElementById('modale');
  // let chiudiModaleButton = document.querySelector('.chiudi-modale');

  // mostraModaleButton.addEventListener('click', function() {
  //   modale.style.display = 'block';
  // });

  // chiudiModaleButton.addEventListener('click', function() {
  //   modale.style.display = 'none';
  // });

  // window.addEventListener('click', function(event) {
  //   if (event.target == modale) {
  //     modale.style.display = 'none';
  //   }
  // });


