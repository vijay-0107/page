<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Auto Image Slider</title>
  <style>
    body {
      margin: 10;
      padding: 10;
      overflow: hidden;
    }

    .slider-container {
      /* position: fixed; */
      bottom: 0;
      left: 0;
      width: 100vw;
      height: 50vh;
      transform: translateY(50%);
      overflow: hidden;
      z-index: -1;
    }

    .slider {
      display: flex;
      width: 100%;
      animation: slide 25s linear infinite;
    }

    .slide {
      width: 20%;
      height: 85vh;
      flex-shrink: 0;
      background-size: contain;
      background-repeat: no-repeat;
      background-position: center;
      margin-right: 5%; /* Increased spacing between images */
    }

    .slide:nth-child(1) { background-image: url('https://thelogicfactory.com/wp-content/uploads/2018/02/logo-the-logic-factory.png'); }
    .slide:nth-child(2) { background-image: url('https://codeforces.org/s/31458/images/flags/24/gb.png'); }
    .slide:nth-child(3) { background-image: url('https://cdn.overleaf.com/img/ol-brand/overleaf.svg'); }
    .slide:nth-child(4) { background-image: url('https://codeforces.org/s/31458/images/codeforces-sponsored-by-ton.png'); }
    .slide:nth-child(5) { background-image: url('https://codeforces.org/s/31458/images/codeforces-sponsored-by-ton.png'); }
    .slide:nth-child(6) { background-image: url('https://c03.s3.indeed.com/dist/header/ukraine_support.7ad2b5d444bc427dbc5d.png'); }
    .slide:nth-child(7) { background-image: url('https://ssl.gstatic.com/ui/v1/icons/mail/rfr/logo_gmail_server_1x.png'); }
    .slide:nth-child(8) { background-image: url('https://codeforces.org/s/31458/images/codeforces-sponsored-by-ton.png'); }
    .slide:nth-child(9) { background-image: url('https://codeforces.org/s/31458/images/codeforces-sponsored-by-ton.png'); }
    .slide:nth-child(10) { background-image: url('https://codeforces.org/s/31458/images/codeforces-sponsored-by-ton.png'); }

    @keyframes slide {
      0%, 100% {
        transform: translateX(0);
      }
      25% {
        transform: translateX(-25%);
      }
      50% {
        transform: translateX(-50%);
      }
      75% {
        transform: translateX(-75%);
      }
    }
  </style>
</head>
<body>
  <div class="slider-container">
    <div class="slider">
      <div class="slide"></div>
      <div class="slide"></div>
      <div class="slide"></div>
      <div class="slide"></div>
      <div class="slide"></div>
      <div class="slide"></div>
      <div class="slide"></div>
      <div class="slide"></div>
      <div class="slide"></div>
      <div class="slide"></div>

    </div>
  </div>
</body>
</html>
