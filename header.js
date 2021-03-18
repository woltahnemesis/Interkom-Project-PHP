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

let askedQuestions = document.querySelectorAll('.div-about .div-sub-about .div-asked .div-questions .div-question-section .div-title');
let answeredQuestions = document.querySelectorAll('.div-about .div-sub-about .div-asked .div-questions .div-question-section .div-answer-section');
let pAnswered = document.querySelectorAll('.div-about .div-sub-about .div-asked .div-questions .div-question-section .div-answer-section p');
let answeredArrow = document.querySelectorAll('.div-about .div-sub-about .div-asked .div-questions .div-question-section .div-title .div-icon');
let pHeight;

console.log(answeredArrow);

askedQuestions.forEach(function(val, i){

  val.addEventListener('click', function(e){

    let currentPHeight = parseInt(answeredQuestions[i].style.height.split('px')[0]);

    // When value is empty
    if(!currentPHeight) {
      currentPHeight = 0;
    }

    if(currentPHeight <= 0) {

      pHeight = pAnswered[i].offsetHeight + 20;

      $(answeredQuestions[i]).animate({height: pHeight, paddingTop: 20});
      $(answeredArrow[i]).css({'transform': 'rotate(-270deg)'});

    } else if(currentPHeight > 0) {

      $(answeredQuestions[i]).animate({height: '0', paddingTop: 0});
      $(answeredArrow[i]).css({'transform': 'rotate(0deg)'});

    }
  });
});

// Carousel About-2 Section
let arrows = document.querySelectorAll('body > div.carousel-container > div.div-about > div.div-about-2 > div > div.div-left-about > div > div > i');
let slidersContainer = document.querySelector('body > div.carousel-container > div.div-about > div.div-about-2 > div > div.div-right-about > div > div.div-carousel > div.div-slider-container');
let sliderImgSrc = [
  'https://woltahnemesis.github.io/Interkom-Project-HTML/Images/author-1.jpg',
  'https://woltahnemesis.github.io/Interkom-Project-HTML/Images/author-2.jpg',
  'https://woltahnemesis.github.io/Interkom-Project-HTML/Images/author-3.jpg'
]


let imgArrayNum = 1;

let boolClick = false;

arrows.forEach(function(val, i) {
  val.addEventListener('click', function(e){

    let divSliders = document.querySelectorAll('body > div.carousel-container > div.div-about > div.div-about-2 > div > div.div-right-about > div > div.div-carousel > div > div.div-slider');

    let sliderHTML = '<p>“Praesent scelerisque, odio eu fermentum malesuada, nisi arcu volutpat nisl, sit amet convallis nunc turp.”</p><hr/> <div class="div-review"> <div class="div-img"> <img src="https://woltahnemesis.github.io/Interkom-Project-HTML/Images/author-1.jpg" alt=""> </div><div class="div-profile-info"> <h5>Mr. Jems Bond</h5> <p>CEO Mbuild Firm</p></div><div class="div-stars-review"> <div class="div-stars"> <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> </div><p>( 7 Reviews )</p></div></div>';
    let newDivSlider = document.createElement('div');

    newDivSlider.innerHTML = sliderHTML;
    newDivSlider.classList.toggle('div-slider');
    $(newDivSlider).css({'padding' : '0', width : '0'});

    if(i == 0) {
      slidersContainer.insertBefore(newDivSlider, divSliders[0]);
      $(divSliders[2]).animate({'padding' : '0', width: '0'}, 'easeInExpo');
      setTimeout(function(){divSliders[2].remove()}, 400);
    } else {
      slidersContainer.appendChild(newDivSlider);
      $(divSliders[0]).animate({'padding' : '0', width: '0'}, 'easeInExpo');
      setTimeout(function(){divSliders[0].remove()}, 400);
    }

    let newImages = document.querySelectorAll('body > div.carousel-container > div.div-about > div.div-about-2 > div > div.div-right-about > div > div.div-carousel > div > div > div > div.div-img > img');

    if(i == 0) {
      imgArrayNum++;

      if(imgArrayNum > 2) {
        imgArrayNum = 0;
      }

    } else if (i == 1) {

      imgArrayNum--;

      if(imgArrayNum < 0) {
        imgArrayNum = 2;
      }
    }

    if(i == 0) {
      newImages[0].setAttribute('src', sliderImgSrc[imgArrayNum]);
      newImages[1].setAttribute('src', sliderImgSrc[imgArrayNum % 3]);
    } else {
      newImages[2].setAttribute('src', sliderImgSrc[imgArrayNum]);
      setTimeout(function(){
        newImages[1].setAttribute('src', sliderImgSrc[imgArrayNum % 3]);
      }, 300);
    }

    let newSliders = document.querySelectorAll('body > div.carousel-container > div.div-about > div.div-about-2 > div > div.div-right-about > div > div.div-carousel > div > div.div-slider');

    newSliders.forEach(function(val, i){
      $(val).animate({'padding' : '40px 30px 50px 30px', width: '500px'}, 'easeInExpo');
    });

    boolClick = true;

    arrows[1].style.pointerEvents = 'none';
    arrows[0].style.pointerEvents = 'none';
    setTimeout(function(){
      arrows[1].style.pointerEvents = 'auto';
      arrows[0].style.pointerEvents = 'auto';
    }, 800);

  });
});

function autoSlide(){

  let interval = setInterval(function(){

    console.log('Click: '+boolClick);

    if(boolClick) {
      clearInterval(interval);
      boolClick = false;
      autoSlide();
    } else {
      arrows[1].click();
    }

  }, 2500);


}

autoSlide();
