let navLinks = document.querySelectorAll('.div-nav nav ul:nth-child(2) li a');
let divNav = document.querySelector('.div-nav');
let divLogo = document.querySelector('.div-nav nav .div-logo');
let divNavLinks = document.querySelector('.div-nav nav .list-links');
let divNavBtn = document.querySelector('.div-nav nav .list-btns')
console.log(divNavLinks);

let divNavPos = divNav.offsetTop;

window.addEventListener('scroll', function(e){
  if(divNavPos < window.scrollY) {
    if(divNav.getAttribute('class').split(' ')[1] != 'on-scroll-background') {
      divNav.setAttribute('class', 'div-nav on-scroll-background');
      divLogo.setAttribute('class', 'div-logo on-scroll-logo');
      divNavLinks.setAttribute('class', 'list-links on-scroll-links');
      divNavBtn.setAttribute('class', 'list-btns on-scroll-btns');
    }
  } else {
    divNav.setAttribute('class', 'div-nav');
    divLogo.setAttribute('class', 'div-logo');
    divNavLinks.setAttribute('class', 'list-links');
    divNavBtn.setAttribute('class', 'list-btns');
  }
});

navLinks.forEach(function(val, i){

  navLinks[i].addEventListener('click', function(e){

    navLinks.forEach(function(val, i){
      if(navLinks[i].getAttribute('class') === 'active') {
        navLinks[i].setAttribute('class', '');
      }
    });

    setTimeout(function(){
      navLinks[i].classList.toggle('active');
    },1000);


  });

});
