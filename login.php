<!DOCTYPE html>
<html>
<head>
<title>Dunder Mifflin</title>

<link href = "StyleSheet.css" rel = "stylesheet">
<link href = "CheckoutStyleSheet.css" rel = "stylesheet">

<?php

session_start();
$_SESSION['loginStatus'] = 0;

?>

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

<p>

  <font face = "Arial"><body><center>
    <br><br><br><br>
    <table cellspacing="0" cellpadding="0" style="text-align:center;background-color:white;border-color:black;border-style:solid;border-width:1;box-shadow: 5px 10px;">
    <tr>
      <td width="300px" height="400px" >

        <h1>LOGIN</h1>
  <div class="container">
      <form action="loginGet.php" method="get">
        <input type="text" name="username" placeholder="Username" required style="width: 80%;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;box-sizing: border-box;"><br>
        <input type="password" name="password" placeholder="Password" required style="width: 80%;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;box-sizing: border-box;"><br>
        <input type="submit" value="LOGIN" style="background-color: #036ba8;color: white;padding: 14px 20px;margin: 8px 0;border: none;cursor: pointer;width: 80%;">
      </form>
  </div>
        <br>Don't have an account?
        <br><a href="register.php">REGISTER</a>

      </td>
      <td width="400px" height="400px" style="border-left: 5px solid black;">

        <img align="center" width="100%" height="100%" src="Images/LoginImage.png" alt="DMPaper"/>

      </td>
    </tr>

  </table>
  </center></body></font>
  </p>



  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>




</body>
<footer class="footer">

</footer>

</html>
