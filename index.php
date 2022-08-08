<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Travelsite</title>
  <link rel="stylesheet" href="index.css">
  
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
  <nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
      <i class="fas fa-bars"></i>
    </label>
    <label class="logo">Travelsite</label>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </nav>

<div class="slider">
  <div class="slides">
    <input type="radio" name="radio-btn" id="radio1">
    <input type="radio" name="radio-btn" id="radio2">
    <input type="radio" name="radio-btn" id="radio3">
    <input type="radio" name="radio-btn" id="radio4">

    <div class="slide first">
      <img src="img1.jpg" alt="">
    </div>
    <div class="slide first">
      <img src="img2.jpg" alt="">
    </div>
    <div class="slide first">
      <img src="img3.jpg" alt="">
    </div>
    <div class="slide first">
      <img src="img4.jpg" alt="">
    </div>

    <!-- automatic navigation -->
    <div class="navigation-auto">
      <div class="auto-btn1"></div>
      <div class="auto-btn2"></div>
      <div class="auto-btn3"></div>
      <div class="auto-btn4"></div>
    </div>
    <!-- manual navigation -->
    <div class="navigation-manual">
      <label for="radio1" class="manual-btn"></label>
      <label for="radio2" class="manual-btn"></label>
      <label for="radio3" class="manual-btn"></label>
      <label for="radio4" class="manual-btn"></label>
    </div>

  </div>
</div>

</body>
</html>