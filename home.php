<!DOCTYPE html>
<html>
<head>
<title>HOME | DUNDER MIFFLIN</title>

<link href = "StyleSheet.css" rel = "stylesheet">
<link href = "CheckoutStyleSheet.css" rel = "stylesheet">
<link href = "carousel.css" rel = "stylesheet">
<link href = "carousel2.css" rel = "stylesheet">

</head>

<body onload = "startTimer()" class = "body" id = "navbar">

<div class = "nav">
	<img class = "leftNav" src="Images/Dunder_Mifflin_logo.png" width="140" height="80">
	<a class = "leftNav" href="home.php"> HOME</a>
	<a class = "leftNav" href="products.php"> PAPER</a>
	<a class = "leftNav" href="about.php"> ABOUT</a>
	<a class = "leftNav" href="FAQ.php"> FAQ</a>


	<a class = "rightNav" href = "login.php">
    
  <?php
  session_start();
  if ($_SESSION['loginStatus'] == 0 || $_SESSION['loginStatus'] == NULL){
    echo 'LOG IN';
  } else {
    echo 'LOG OUT';
  }
  ?>

  </a>

	<a class = "rightNav" href = "cart.php"><img class = "rightImg" width = "30" 
		height = "30" src = "Images/cart_icon.png"></a>
</div>

<br><br><br><br><br><br><br>
<img class = "img" src="Images/Header_Image.png" width="101%">

<center>
<br>
<h1 style = "font-size: 55px;">Featured Products</h1>
<br><br>
<div class="slider5">
      <div class="carousel5">
        <input checked="checked" class="sections5" id="section1" name="carousel5" type="radio">
        <input class='sections5' id='section2' name='carousel5' type='radio'>
        <input class='sections5' id='section3' name='carousel5' type='radio'>
        <div class='controls5'>
          <label class='controlLooks5' for='section2'>
            >
          </label>
        </div>
        <div class='controls5'>
          <label class='controlLooks5' for='section1'>
            <
          </label>
          <label class='controlLooks5' for='section3'>
            >
          </label>
        </div>
        <div class='controls5'>
          <label class='controlLooks5' for='section2'>
            <
          </label>
        </div>
        <div class='visible5'>
          <div class='transition5'>
            <div class= "item5 item1">
              <div class= "slider5">
		<a href = 'redirect.php?product_id=19'>
                <img src = "Images/PaperCASE.png" width = "450" height = "450">
		</a>
		<div class="text5">White Special Copy Paper</div>
              </div>
            </div>
            <div class= "item5 item1">
              <div class= "slider5">
		<a href = 'redirect.php?product_id=15'>
                <img src = "Images/origamiRed.png" width = "450" height = "450">
		</a>
		<div class="text6">Red Origami Paper</div>
              </div>
            </div>
            <div class= "item5 item1">
              <div class="slider5">
		<a href = 'redirect.php?product_id=5'>
                <img src = "Images/paperBlue.png" width = "450" height = "450">
		</a>
		<div class="text7">Blue Paper</div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>

<br><br>
<img width = "50%" id="img" src="Images/ad_sabre.png"/>
<br><br><br><br><br>
<h1 style = "font-size: 45px;">Popular Products</h1>
<br><br>

<div class="slider">
      <div class='carousel'>
        <input checked='checked' class='sections' id='section4' name='carousel' type='radio'>
        <input class='sections' id='section5' name='carousel' type='radio'>
        <input class='sections' id='section6' name='carousel' type='radio'>
        <div class='controls'>
          <label class='controlLooks' for='section5'>
            >
          </label>
        </div>
        <div class='controls'>
          <label class='controlLooks' for='section4'>
            <
          </label>
          <label class='controlLooks' for='section6'>
            >
          </label>
        </div>
        <div class='controls'>
          <label class='controlLooks' for='section5'>
            <
          </label>
        </div>
        <div class='visible'>
          <div class='transition'>
            <div class= "item item3">
              <div class= "slider">
		<a href = 'redirect.php?product_id=1'>
                <img src = "Images/paperWhite.png" width = "250" height = "250">
		</a>
		<div class = "name1">White Paper</div>
              </div>
            </div>
            <div class= "item item3">
              <div class= "slider">
		<a href = 'redirect.php?product_id=13'>
                <img src = "Images/origamiWhite.png" width = "250" height = "250">
		</a>
		<div class = "name2">White Origami<br>Paper</div>
              </div>
            </div>
            <div class= "item item3">
              <div class="slider">
		<a href = 'redirect.php?product_id=7'>
                <img src = "Images/craftWhite.jpg" width = "250" height = "250">
		</a>
		<div class = "name3">White Kraft<br>Paper</div>
              </div>
            </div>
            <div class= "item item3">
              <div class= "slider">
		<a href = 'redirect.php?product_id=5'>
                <img src = "Images/paperBlue.png" width = "250" height = "250">
		</a>
		<div class = "name4">Blue Paper</div>
              </div>
            </div>
            <div class= "item item3">
              <div class= "slider">
		<a href = 'redirect.php?product_id=3'>
                <img src = "Images/paperRed.png" width = "250" height = "250">
		</a>
		<div class = "name5">Red Paper</div>
              </div>
            </div>
            <div class= "item item3">
              <div class= "slider">
		<a href = 'redirect.php?product_id=2'>
                <img src = "Images/paperYellow.png" width = "250" height = "250">
		</a>
		<div class = "name6">Yellow Paper</div>
              </div>
            </div>
            <div class= "item item3">
              <div class= "slider">
		<a href = 'redirect.php?product_id=11'>
                <img src = "Images/craftBlue.png" width = "250" height = "250">
		</a>
		<div class = "name7">Blue Kraft<br>Paper</div>
              </div>
            </div>
	    <div class= "item item3">
              <div class= "slider">
		<a href = 'redirect.php?product_id=6'>
                <img src = "Images/paperPink.png" width = "250" height = "250">
		</a>
		<div class = "name8">Pink Paper</div>
              </div>
            </div>
	    <div class= "item item3">
              <div class= "slider">
		<a href = 'redirect.php?product_id=16'>
                <img src = "Images/origamiPurple.png" width = "250" height = "250">
		</a>
		<div class = "name9">Purple Origami<br>Paper</div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>

<br><br><br><br><br>
<script src = "EJS.js"></script>
<script src = "Ads.js"></script>
</center>
</body>


<br>


<footer class="footer">

</footer>

</html>
