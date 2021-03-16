let navLinks = document.querySelectorAll('.div-nav nav ul:nth-child(2) li a');
let divNav = document.querySelector('.div-nav');
let divLogo = document.querySelector('.div-nav nav .div-logo');
let divNavLinks = document.querySelector('.div-nav nav .list-links');
let divNavBtn = document.querySelector('.div-nav nav .list-btns');

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

      navLinks.forEach(function(val){
        val.setAttribute('class', '');
      });

      navLinks[i].classList.toggle('active');

    },1000);


  });

});

// Portfolio Section

let workList = document.querySelectorAll('.div-portfolio .div-works ul li');
let featuredImgList = document.querySelectorAll('.div-portfolio .div-works .div-works-image .div-featured-image');

workList.forEach(function(val, i){

  workList[i].addEventListener('click', function(e){

    workList.forEach(function(val, i){
      val.setAttribute('class', '');
    });

    workList[i].setAttribute('class', 'active');

    switch(i) {
      case 0:

        featuredImgList.forEach(function(val, x){
          $(featuredImgList[x]).animate({width: '275px', top: '0', left: '0', opacity: '1'}, 1000, "linear");
        });

        break;

      case 1:

        $(featuredImgList[0]).animate({width: '275px', top: '0', left: '0', opacity: '1'}, 1000, "linear");
        $(featuredImgList[2]).animate({width: '275px', top: '0', left: '0', opacity: '1'}, 1000, "linear");
        $(featuredImgList[7]).animate({width: '275px', top: '0', left: '0', opacity: '1'}, 1000, "linear");

        $(featuredImgList[1]).animate({width: '0', top: '137.5px', left: '137.5px', opacity: '0'}, 1000, "linear");
        $(featuredImgList[3]).animate({width: '0', top: '137.5px', left: '137.5px', opacity: '0'}, 1000, "linear");
        $(featuredImgList[4]).animate({width: '0', top: '137.5px', left: '137.5px', opacity: '0'}, 1000, "linear");
        $(featuredImgList[5]).animate({width: '0', top: '137.5px', left: '137.5px', opacity: '0'}, 1000, "linear");
        $(featuredImgList[6]).animate({width: '0', top: '137.5px', left: '137.5px', opacity: '0'}, 1000, "linear");
        $(featuredImgList[8]).animate({width: '0', top: '137.5px', left: '137.5px', opacity: '0'}, 1000, "linear");

        break;

      case 2:

        $(featuredImgList[1]).animate({width: '275px', top: '0', left: '0', opacity: '1'}, 1000, "linear");
        $(featuredImgList[2]).animate({width: '275px', top: '0', left: '0', opacity: '1'}, 1000, "linear");
        $(featuredImgList[4]).animate({width: '275px', top: '0', left: '0', opacity: '1'}, 1000, "linear");
        $(featuredImgList[8]).animate({width: '275px', top: '0', left: '0', opacity: '1'}, 1000, "linear");

        $(featuredImgList[0]).animate({width: '0', top: '137.5px', left: '137.5px', opacity: '0'}, 1000, "linear");
        $(featuredImgList[3]).animate({width: '0', top: '137.5px', left: '137.5px', opacity: '0'}, 1000, "linear");
        $(featuredImgList[5]).animate({width: '0', top: '137.5px', left: '137.5px', opacity: '0'}, 1000, "linear");
        $(featuredImgList[6]).animate({width: '0', top: '137.5px', left: '137.5px', opacity: '0'}, 1000, "linear");
        $(featuredImgList[7]).animate({width: '0', top: '137.5px', left: '137.5px', opacity: '0'}, 1000, "linear");

        break;

      case 3:

        $(featuredImgList[0]).animate({width: '275px', top: '0', left: '0', opacity: '1'}, 1000, "linear");
        $(featuredImgList[3]).animate({width: '275px', top: '0', left: '0', opacity: '1'}, 1000, "linear");
        $(featuredImgList[5]).animate({width: '275px', top: '0', left: '0', opacity: '1'}, 1000, "linear");
        $(featuredImgList[7]).animate({width: '275px', top: '0', left: '0', opacity: '1'}, 1000, "linear");

        $(featuredImgList[1]).animate({width: '0', top: '137.5px', left: '137.5px', opacity: '0'}, 1000, "linear");
        $(featuredImgList[2]).animate({width: '0', top: '137.5px', left: '137.5px', opacity: '0'}, 1000, "linear");
        $(featuredImgList[4]).animate({width: '0', top: '137.5px', left: '137.5px', opacity: '0'}, 1000, "linear");
        $(featuredImgList[6]).animate({width: '0', top: '137.5px', left: '137.5px', opacity: '0'}, 1000, "linear");
        $(featuredImgList[8]).animate({width: '0', top: '137.5px', left: '137.5px', opacity: '0'}, 1000, "linear");

        break;

      case 4:

        $(featuredImgList[1]).animate({width: '275px', top: '0', left: '0', opacity: '1'}, 1000, "linear");
        $(featuredImgList[3]).animate({width: '275px', top: '0', left: '0', opacity: '1'}, 1000, "linear");
        $(featuredImgList[6]).animate({width: '275px', top: '0', left: '0', opacity: '1'}, 1000, "linear");

        $(featuredImgList[0]).animate({width: '0', top: '137.5px', left: '137.5px', opacity: '0'}, 1000, "linear");
        $(featuredImgList[2]).animate({width: '0', top: '137.5px', left: '137.5px', opacity: '0'}, 1000, "linear");
        $(featuredImgList[4]).animate({width: '0', top: '137.5px', left: '137.5px', opacity: '0'}, 1000, "linear");
        $(featuredImgList[5]).animate({width: '0', top: '137.5px', left: '137.5px', opacity: '0'}, 1000, "linear");
        $(featuredImgList[7]).animate({width: '0', top: '137.5px', left: '137.5px', opacity: '0'}, 1000, "linear");
        $(featuredImgList[8]).animate({width: '0', top: '137.5px', left: '137.5px', opacity: '0'}, 1000, "linear");

        break;

      default:
        break;
    }

  });
});
