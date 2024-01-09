<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Image Slider</title>
  <style>
    .grid-block {
      width: 90%;
      margin-right: auto;
      margin-left: auto;
    }

    .home-carousel {
      position: relative; /* Added for positioning */
      display: flex;
      overflow: hidden;
    }

    .home-carousel div {
      flex: 0 0 100%; /* Each slide takes the full width */
      transition: transform 0.5s ease-in-out;
    }

    img {
      width: 100%; /* Make images fill their container */
      height: auto;
    }

    /* Added styles for navigation buttons */
    .nav-button {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      font-size: 24px;
      cursor: pointer;
      background: none;
      border: none;
    }

    .nav-button-left {
      left: 0;
    }

    .nav-button-right {
      right: 0;
    }
  </style>
</head>
<body>
  <div class="grid-block">
    <div class="home-carousel">
      <?php
      $imagePaths = [
        "images/slider/slider-1.png",
        "images/slider/slider-2.png",
        "images/slider/slider-3.png",
        "images/slider/p4.png",
        "images/slider/p5.jpg",
        "images/slider/p6.png",
        "images/slider/p7.png",
        "images/slider/p8.jpg",
        "images/slider/p9.jpg",
        "images/slider/slider-4.png",
        "images/slider/slider-5.png",
        "images/slider/slider-6.png"
      ];

      foreach ($imagePaths as $path) {
        echo '<div><img src="' . $path . '" alt="Slide"></div>';
      }
      ?>
      <button class="nav-button nav-button-left" onclick="prevSlide()">❮</button>
      <button class="nav-button nav-button-right" onclick="nextSlide()">❯</button>
    </div>
  </div>

  <script>
    // JavaScript for image slider
    document.addEventListener('DOMContentLoaded', function () {
      const slider = document.querySelector('.home-carousel');
      let currentIndex = 0;

      function showSlide(index) {
        const translateValue = -index * 100 + '%';
        slider.style.transform = 'translateX(' + translateValue + ')';
      }

      function nextSlide() {
        currentIndex = (currentIndex + 1) % slider.children.length;
        showSlide(currentIndex);
      }

      function prevSlide() {
        currentIndex = (currentIndex - 1 + slider.children.length) % slider.children.length;
        showSlide(currentIndex);
      }

      // Change slide every 3 seconds (adjust as needed)
      setInterval(nextSlide, 3000);
    });
  </script>
</body>
</html>
