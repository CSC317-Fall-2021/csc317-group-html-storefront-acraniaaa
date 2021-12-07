<!DOCTYPE html>
<html>
<head>
<title>Dunder Mifflin | PAYMENT</title>

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

<br><br><br><br><br><br><br><br><br>

<div class="container">
  <h1>Checkout</h1>
  <div class="cart">
      <div class="products">

         <div class="product">

        <div class="row">
          <div class="col-50">
            <h3>Shipping Address</h3><br>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Firstname Lastname">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="example@mail.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="1234 Street St.">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="City">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="State">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="00000">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3><br>
            <label for="fname">Accepted Payment Methods</label>
            <div class="icon-container">

              <img src="Images/payment_methods.png" style="width: 100px;">

            </div>
            <label for="name">Name on Card</label>
            <input type="text" id="name" name="name" placeholder="Firstname Lastname">
            <label for="cardnum">Credit card number</label>
            <input type="text" id="cardnum" name="cardnum" placeholder="xxxx-xxxx-xxxx-xxxx">
            <label for="expirationmonth">Exp Month</label>
            <input type="text" id="expirationmonth" name="expirationmonth" placeholder="Month">

            <div class="row">
              <div class="col-50">
                <label for="expirationyear">Exp Year</label>
                <input type="text" id="expirationyear" name="expirationyear" placeholder="Year">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="CVV">
              </div>
            </div>
          </div>

        </div>
    </div>
  </div>


  <div class="cart-total">
            <p>
                <span>Subtotal</span>
                <span><?php echo '$'.$_SESSION['subtotal'];
                 ?></span>
            </p>
            <p>
                <span>Tax (8.5%)</span>
                <span><?php 
                $tax = round(($_SESSION['subtotal'] * 0.085), 2);
                echo '$'.$tax;
                ?></span>
            </p>
            <p>
               <span>Total</span>
               <span>
                  <?php
                     $total = round(($tax + $_SESSION['subtotal']), 2);
                     echo '$'.$total;
                  ?>   
               </span>
           </p>
            <a href="home.php">Proceed to Checkout</a>
    </div>
</form>
</div>
<br><br><br><br><br><br>

</body>

<footer style="background: #1F618D">

</footer>

</html>
