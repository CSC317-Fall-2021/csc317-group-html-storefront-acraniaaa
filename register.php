<!DOCTYPE html>
<html>
<head>
<title>Dunder Mifflin</title>

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

<p>

  <font face = "Arial"><body> <center>
    <br><br><br><br>
    <br><br><br><br>    <br><br>
    <table cellspacing="0" cellpadding="0" style="text-align:center;background-color:white;border-color:black;border-style:solid;border-width:1;box-shadow: 5px 10px;">
    <tr>
      <td width="600px" height="500px">

        <h1>REGISTER</h1>
  <div class="container">
      <form action="registerGet.php" method="get">
        <input type="text" name="FirstName" placeholder="First Name" required style="width: 200px;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;box-sizing: border-box;">&nbsp&nbsp
        <input type="text" name="LastName" placeholder="Last Name" required style="width: 200px;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;box-sizing: border-box;"><br>

        <input type="text" name="user" placeholder="Username" required style="width: 200px;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;box-sizing: border-box;">&nbsp&nbsp
        <input type="text" name="email" placeholder="Email" required style="width: 200px;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;box-sizing: border-box;"><br>

        <input type="password" name="Password" placeholder="Password" required style="width: 200px;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;box-sizing: border-box;">&nbsp&nbsp
        <input type="password" name="ConfPassword" placeholder="Confirm Password" required style="width: 200px;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;box-sizing: border-box;"><br>

        <input type="checkbox" id="TOS" name="agree" value="TOS" required>
        <label for="TOS"> I agree to the <br><a href="DMTOS.html">TERMS OF SERVICE</a></label><br>
<br>
        <input type="submit" value="REGISTER" style="background-color: #036ba8;color: white;padding: 14px 20px;margin: 8px 0;border: none;cursor: pointer;width: 200px;">

      </form>
  </div>
        <br>Already have an account?
        <br><a href="Login.html">LOGIN</a>

      </td>

    </tr>

  </table><br><br><br><br><br><br><br><br>
  </center></body></font>



<br></br>
</body>

<footer class="footer">

</footer>

</html>
