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

<br><br><br><br>
<br><br><br>
	<center>
	  <br><br><br>
	<img src="Images/Dunder_Mifflin_logo_Black.png" width=200px>
	<h2>TERMS OF SERVICE</h2><br>
	Buy paper.
	</center>
	<script src = "EJS.js"></script>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	</body>

<footer class="footer">

</footer>

</html>
