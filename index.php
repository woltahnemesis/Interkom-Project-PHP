<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous" async defer></script>
    <title>Interkom Project</title>
  </head>
  <body>
    <style media="screen">

    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap');

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

    </style>
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
              <img src="Images/1.png" class="d-block w-80" alt="...">
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
              <img src="Images/2.png" class="d-block w-80" alt="...">
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
              <img src="Images/3.png" class="d-block w-80" alt="...">
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
  </body>
</html>
