<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous" async defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./header.css">
    <link rel="stylesheet" href="./services.css">
    <script type="text/javascript" src="./header.js" async defer></script>
    <title>Interkom Project</title>
  </head>
  <body>
    <style media="screen">

    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');

    h1, h2, h3, h4, h5 {
      font-family: 'Poppins', sans-serif;
      font-weight: 700;
    }

    p {
      font-family: 'Poppins', sans-serif;
      font-weight: 400;
    }

    a {
      font-family: 'Poppins', sans-serif;
    }

    @media only screen and (min-width: 992px) {
      .carousel-inner .div-main-banner .div-banner-flex {
        display: 960px;
      }
    }

    @media only screen and (min-width: 768px) {
      .carousel-inner .div-main-banner .div-banner-flex {
        display: 720px;
      }
    }

    @media only screen and (min-width: 576px) {
      .carousel-inner .div-main-banner .div-banner-flex {
        display: 540px;
      }
    }

    .carousel-container {
      position: absolute;
      top: 0px;
      z-index: -1;
      width: 100%;
    }

    .carousel-inner {
      position: relative;
    }

    .carousel-inner .div-main-banner .div-banner-flex {
      display: flex;
      padding: 0 15px 0 15px;
      margin: 0 auto;
      width: 93%;
    }

    .div-banner-desc {
      /* background-color: lightgray; */
      position: relative;
      width: 50%;
      padding-top: 15em;
      padding-left: 6em;
      padding-right: 1em;
      box-sizing: border-box;
    }

    .div-banner-desc h1 {
      font-size: 88px;
      color: #fff;
      line-height: 96px;
      font-family: 'Poppins', sans-serif;
      font-weight: 700;
    }

    .div-banner-desc p {
      color: #fff;
      font-size: 16px;
      line-height: 24px;
      margin-top: 16px;
    }

    .div-banner-desc ul {
      display: flex;
      padding: 0;
    }

    .div-banner-desc ul li {
      list-style: none;
      margin: 16px 8px 0 8px;
      padding: 0 32px;
      border: 2px solid #fff;
      border-radius: 50px;
    }

    .div-banner-desc ul li a {
      text-decoration: none;
      color: #fff;
      font-weight: 700;
      font-size: 16px;
      line-height: 46px;
      color: #0067f4;
    }

    .div-banner-desc ul li:nth-child(1) {
      background-color: #fff;
      transition-property: all;
      transition-timing-function: ease-in-out;
      transition-duration: 0.4s;
    }

    .div-banner-desc ul li:nth-child(1) > a {
      transition-property: all;
      transition-timing-function: ease-in-out;
      transition-duration: 0.4s;
    }

    .div-banner-desc ul li:nth-child(1):hover {
      background-color: #0067f4;
      color: #fff;
    }

    .div-banner-desc ul li:nth-child(1):hover > a{
      color: #fff;
    }

    .div-banner-desc ul li:nth-child(2) {
      transition-property: all;
      transition-timing-function: ease-in-out;
      transition-duration: 0.4s;
    }

    .div-banner-desc ul li:nth-child(2) a {
      color: #fff;
      transition-property: all;
      transition-timing-function: ease-in-out;
      transition-duration: 0.4s;
    }

    .div-banner-desc ul li:nth-child(2):hover {
      background-color: #fff;
    }

    .div-banner-desc ul li:nth-child(2):hover > a {
      color: #0067f4;
    }

    .div-banner-desc .div-slant {
      width: 29em;
      height: 100%;
      background-color: darkgray;
      position: absolute;
      bottom: 0em;
      right: -30em;
      transform: skewX(20deg);
      background: -webkit-linear-gradient(rgba(0,103,244,0.3) 0%,rgba(43,219,220,0.3) 100%);
      background: linear-gradient(rgba(0,103,244,0.3) 0%,rgba(43,219,220,0.3) 100%);
    }

    .div-img {
      /* background-color: darkgray; */
      width: 50%;
      margin-top: 5em;
      position: relative;
    }

    .div-img img {
      /* background-color: darkgray; */
      width: 100%;
    }

    .carousel-container #carouselExampleIndicators .carousel-indicators {
      margin-bottom: 3em;
    }

    .carousel-indicators button.btn-indicator {
      width: 8px;
      height: 8px;
      border: 0px solid transparent;
      border-radius: 50px;
    }

    .carousel-indicators button.active {
      width: 16px;
    }

    .carousel-inner .btn-arrow-left {
      width: 2.5em;
      height: 2.5em;
      border: 0.5px solid #fff;
      top: 48%;
      left: 3%;
      border-radius: 5px;
    }

    .carousel-inner .btn-arrow-right {
      width: 2.5em;
      height: 2.5em;
      border: 0.5px solid #fff;
      top: 48%;
      right: 3%;
      border-radius: 5px;
    }

    .carousel-inner .btn-arrow-left,
    .carousel-inner .btn-arrow-right,
    .carousel-inner .btn-arrow-left:hover,
    .carousel-inner .btn-arrow-right:hover,
    .carousel-inner .btn-arrow-left:active,
    .carousel-inner .btn-arrow-right:active {
      background-color: transparent;
    }

    </style>
    <div class="div-nav">
      <nav>
        <div class="div-logo">
          <svg enable-background="new 0 0 64 64" height="64" viewBox="0 0 64 64" width="64" xmlns="http://www.w3.org/2000/svg">
            <g fill="#fff"><path d="m60 9.3h-56c-2.1 0-4 1.9-4 4v26.7c0 2.1 1.9 4 4 4h25.3v5.3h-10.6c-1.6 0-2.7 1.1-2.7 2.7s1.1 2.7 2.7 2.7h26.7c1.6 0 2.7-1.1 2.7-2.7s-1.1-2.7-2.7-2.7h-10.7v-5.3h25.3c2.1 0 4-1.9 4-4v-26.7c0-2.1-1.9-4-4-4zm-1.3 29.4h-53.4v-24h53.3v24z"/><path d="m17.3 36c2.1 0 4-1.9 4-4 1.3-1.1 3.5-2.7 5.3-4.3.6.3.9.3 1.4.3 1.1 0 1.9-.3 2.7-1.1l4.8 1.6c.8.3 1.6.3 2.4-.3l4.8-3.2c.5.3 1.1.3 1.6.3 2.1 0 4-1.9 4-4s-2.1-4-4.3-4c-1.9 0-3.2 1.1-3.7 2.7l-4.5 2.9-4.5-1.3c-.9-1.1-2-1.6-3.3-1.6-1.9 0-3.5 1.3-3.7 2.9-2.1 1.6-5.1 4-6.4 5.1h-.3c-2.4 0-4.3 1.9-4.3 4s1.9 4 4 4z"/></g>
          </svg>
        </div>
        <ul class="list-links">
          <li><a href="#home" class="active">HOME</a></li>
          <li><a href="#services">SERVICES</a></li>
          <li><a href="#portfolio">PORTFOLIO</a></li>
          <li><a href="#pricing">PRICING</a></li>
          <li><a href="#about">ABOUT</a></li>
          <li><a href="#team">TEAM</a></li>
          <li><a href="#contact">CONTACT</a></li>
        </ul>
        <ul class="list-btns">
          <li><a href="#">DOWNLOAD</a></li>
        </ul>
      </nav>
    </div>
    <div class="carousel-container">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="btn-indicator active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="btn-indicator" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="btn-indicator" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item w-100 div-main-banner active" style="background-color: #0067f4;">
            <div class="div-banner-flex">
              <div class="div-banner-desc">
                <h1>Business is Now Digital</h1>
                <p>We blend insights and strategy to create digital products for forward-thinking organisations.</p>
                <ul>
                  <li><a href="#">GET STARTED</a></li>
                  <li><a href="#">DOWNLOAD</a></li>
                </ul>
                <div class="div-slant">

                </div>
              </div>
              <div class="div-img">
                <img src="https://woltahnemesis.github.io/Interkom-Project-HTML/Images/1.png" class="d-block w-80" alt="...">
              </div>
            </div>
          </div>
          <div class="carousel-item div-main-banner w-100" style="background-color: #0067f4;">
            <div class="div-banner-flex">
              <div class="div-banner-desc">
                <h1>Crafted for Business</h1>
                <p>We blend insights and strategy to create digital products for forward-thinking organisations.</p>
                <ul>
                  <li><a href="#">GET STARTED</a></li>
                  <li><a href="#">DOWNLOAD</a></li>
                </ul>
                <div class="div-slant">

                </div>
              </div>
              <div class="div-img">
                <img src="https://woltahnemesis.github.io/Interkom-Project-HTML/Images/2.png" class="d-block w-80" alt="...">
              </div>
            </div>
          </div>
          <div class="carousel-item div-main-banner w-100" style="background-color: #0067f4;">
            <div class="div-banner-flex">
              <div class="div-banner-desc">
                <h1>Based on Bootstrap 4</h1>
                <p>We blend insights and strategy to create digital products for forward-thinking organisations.</p>
                <ul>
                  <li><a href="#">GET STARTED</a></li>
                  <li><a href="#">DOWNLOAD</a></li>
                </ul>
                <div class="div-slant">

                </div>
              </div>
              <div class="div-img">
                <img src="https://woltahnemesis.github.io/Interkom-Project-HTML/Images/3.png" class="d-block w-80" alt="...">
              </div>
            </div>
        </div>
        <button class="carousel-control-prev btn-arrow-left" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
          <span class="carousel-control-prev-icon left-arrow" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next btn-arrow-right" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
          <span class="carousel-control-next-icon right-arrow" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <div class="div-services">
      <div class="div-services-intro">
        <h3>Our Services</h3>
        <p>Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p>
      </div>
      <div class="div-featured-services">
        <div class="div-featured">

          <div class="div-title">

            <h4><a href="#">Graphics Design</a></h4>

            <div class="div-title-icon">

              <i class="bi bi-brush"></i>

              <div class="div-pink-img">
                <img src="https://woltahnemesis.github.io/Interkom-Project-HTML/Images/f-shape-1.svg" alt="Pink Background-Image">
              </div>

            </div>
          </div>

          <p>Short description for the ones who look for something new. Short description for the ones who look for something new.</p>

          <a href="#">LEARN MORE</a>

        </div>

        <div class="div-featured">

          <div class="div-title">

            <h4><a href="#">Website Design</a></h4>

            <div class="div-title-icon">

              <i class="bi bi-columns-gap"></i>

              <div class="div-pink-img">
                <img src="https://woltahnemesis.github.io/Interkom-Project-HTML/Images/f-shape-1.svg" alt="Pink Background-Image">
              </div>

            </div>
          </div>

          <p>Short description for the ones who look for something new. Short description for the ones who look for something new.</p>

          <a href="#">LEARN MORE</a>

        </div>

        <div class="div-featured">

          <div class="div-title">

            <h4><a href="#">Digital Marketing</a></h4>

            <div class="div-title-icon">

              <i class="bi bi-lightning-charge"></i>

              <div class="div-pink-img">
                <img src="https://woltahnemesis.github.io/Interkom-Project-HTML/Images/f-shape-1.svg" alt="Pink Background-Image">
              </div>

            </div>
          </div>

          <p>Short description for the ones who look for something new. Short description for the ones who look for something new.</p>

          <a href="#">LEARN MORE</a>

        </div>

      </div>
    </div>
  </body>
</html>
