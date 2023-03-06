// const selectElement = (element) => document.querySelector(element);

// selectElement('.menu-icons').addEventListener('click' , () =>{
//   selectElement('nav').classList.toggle('active');
// })

// let iconCategory = document.getElementById('iconCategory');
// if ()

// document.addEventListener("scroll", cambiaNavbar);

// function cambiaNavbar(event) {
//     const MainNavbar= document.querySelector("#Main_Navbar")
//     if(window.scrollY > 100) {
//         MainNavbar.classList.add("sottile");
//         MainNavbar.classList.add("bg-white");
//     } else {
//         MainNavbar.classList.remove("sottile");
//         MainNavbar.classList.remove("bg-white");
//     }
// }

// document.addEventListener("scroll", cambiaLogo);

// function cambiaLogo(event) {
//     const logo= document.querySelector(".logo")
//     if(window.scrollY > 100) {
//        logo.classList.add("color_blue");

//     } else {
//         logo.classList.remove("color_blue") &&
//         logo.classList.add("text-white");
//          }
// }

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
