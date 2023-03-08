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

//Bottone icona
  
  let myicon1=document.getElementById('myicon1')
  let mybottone1=document.getElementById('mybottone1')
  let myicon2=document.getElementById('myicon2')
  let mybottone2=document.getElementById('mybottone2')
  let myicon=document.getElementById('myicon')
  let mybottone=document.getElementById('mybottone')
//   function btnResize(element,element2){
//   window.addEventListener('resize', function () {
//     if (window.innerWidth < 993 ) {
//       element.style.display = ' inline-block';
//       element2.style.display = 'none';
//     } else {
//       element.style.display = 'none';
//       element2.style.display = ' inline-block';
//     }
//   });
// }
// function btnResize(element,element2){
//     window.addEventListener('resize', function () {
//       if (window.innerWidth < 993 ) {
//         element.style.display = ' inline-block';
//         element2.style.display = 'none';
//       } else {
//         element.style.display = 'none';
//         element2.style.display = ' inline-block';
//       }
//     });
//   }
// btnResize(myicon1,mybottone1);
// btnResize(myicon2,mybottone2);
// btnResize(myicon,mybottone);

// function btnLoad(element,element2){
//     window.addEventListener('load', function () {
//       if (window.innerWidth < 993 ) {
//         element.style.display = ' inline-block';
//         element2.style.display = 'none';
//       } else {
//         element.style.display = 'none';
//         element2.style.display = ' inline-block';
//       }
//     });
//   }
// btnLoad(myicon1,mybottone1);
// btnLoad(myicon2,mybottone2);
// btnLoad(myicon,mybottone);
window.addEventListener('scroll', function() {
  var scrollPosition = window.scrollY;
  var documentHeight = document.body.offsetHeight;
  var windowHeight = window.innerHeight;
  var progress = Math.floor((scrollPosition / (documentHeight - windowHeight)) * 100);
  document.getElementById('progress-bar').style.width = progress + '%';
});



