<!DOCTYPE html>
<html>
<head>
<title>About | DUNDER MIFFLIN</title>
<link href = "StyleSheet.css" rel = "stylesheet">
<link href = "CheckoutStyleSheet.css" rel = "stylesheet">

</head>

<body>
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
<center><img src="Images/Dunder_Mifflin_logo_Black.png" width=200px></center><br>

<center>


<font face = "Arial" color = "black">
<table width = "1000" CELLSPACING= 0 bgcolor = "#ffffff">
<tr height ="30">
<th>
<img src="Images/Dunder_Mifflin_Sign.jpeg" width=350px>
</th>
<th width=500px style="text-align:left;">
<font size = "6"><br>About Us</font><br><br><br>
<font size = "4">Dunder Mifflin is a mid-cap
regional paper and office supply distributor with
an emphasis on servicing small-business clients.
With a corporate office in New York City, Dunder
Mifflin has branches in Akron, Ohio; Nashua,
New Hampshire; Rochester, New York; Scranton,
Pennsylvania; Syracuse, New York; and Utica, New York.<br><br>

We were founded by Robert Dunder and Robert
Mifflin in 1949, where they supplied metal
brackets. After seeing a boom of small businesses in the area, we began selling
paper and opened several branches across the
Northeastern United States.<br><br>

In 2009, we unfortunately went bankrupt. It was then that we were adopted
by Sabre inc. In 2012, Sabre was
dissolved and the company became Dunder Mifflin
once again. We are no longer affiliated with Sabre.<br><br><br>

</font></th>
  </tr>
</table></font></center>

</body>


<br><br><br><br><br>


<footer class="footer">

</footer>





</html>
