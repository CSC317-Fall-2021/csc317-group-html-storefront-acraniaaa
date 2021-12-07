<!DOCTYPE html>
<html>
<head>
<title>Dunder Mifflin | TOS</title>

<link href = "StyleSheet.css" rel = "stylesheet">
<link href = "CheckoutStyleSheet.css" rel = "stylesheet">

</head>

<body class = "body">
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

	
	<center>
	  <br><br><br><br><br><br><br><br><br>
	<img src="Images/Dunder_Mifflin_logo_Black.png" width=200px>
	<br><br><br><br><br><br><br><br><br>
	<h1>Your item has been added to the cart.</h1><br>
	<?php
            if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['atc'])){       
              func();
            }
            function func(){

              if($_SESSION['product_id'] == 1){
                $_SESSION['Item1'] = 1;
              } else if($_SESSION['product_id'] == 2){
                $_SESSION['Item2'] = 1;
              } else if($_SESSION['product_id'] == 3){
                $_SESSION['Item3'] = 1;
              } else if($_SESSION['product_id'] == 4){
                $_SESSION['Item4'] = 1;
              } else if($_SESSION['product_id'] == 5){
                $_SESSION['Item5'] = 1;
              } else if($_SESSION['product_id'] == 6){
                $_SESSION['Item6'] = 1;
              } else if($_SESSION['product_id'] == 7){
                $_SESSION['Item7'] = 1;
              } else if($_SESSION['product_id'] == 8){
                $_SESSION['Item8'] = 1;
              } else if($_SESSION['product_id'] == 9){
                $_SESSION['Item9'] = 1;
              } else if($_SESSION['product_id'] == 10){
                $_SESSION['Item10'] = 1;
              } else if($_SESSION['product_id'] == 11){
                $_SESSION['Item11'] = 1;
              } else if($_SESSION['product_id'] == 12){
                $_SESSION['Item12'] = 1;
              } else if($_SESSION['product_id'] == 13){
                $_SESSION['Item13'] = 1;
              } else if($_SESSION['product_id'] == 14){
                $_SESSION['Item14'] = 1;
              } else if($_SESSION['product_id'] == 15){
                $_SESSION['Item15'] = 1;
              } else if($_SESSION['product_id'] == 16){
                $_SESSION['Item16'] = 1;
              } else if($_SESSION['product_id'] == 17){
                $_SESSION['Item17'] = 1;
              } else if($_SESSION['product_id'] == 18){
                $_SESSION['Item18'] = 1;
              } else if($_SESSION['product_id'] == 19){
                $_SESSION['Item19'] = 1;
              }

            }

        ?>
	</center>
	<script src = "EJS.js"></script>
	<script src = "redirectPage.js"></script>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	</body>

<footer class="footer">

</footer>

</html>
