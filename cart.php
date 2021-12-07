<?php
    $conn = new mysqli('localhost', 'user', 'password', 'main');
?>

<!DOCTYPE html>
<html>
<head>
   <title>Cart | DUNDER MIFFLIN</title>
   <link rel="stylesheet" href="IshaniStyleSheet.css">
   <link rel="stylesheet" href="StyleSheet.css">
</head>

<body>
<div class = "nav">
	<img class = "leftNav" src="Images/Dunder_Mifflin_logo.png" width="140" height="80">
	<a class = "leftNav" href="home.html"> HOME</a>
	<a class = "leftNav" href="products.html"> PAPER</a>
	<a class = "leftNav" href="about.html"> ABOUT</a>
	<a class = "leftNav" href="FAQ.html"> FAQ</a>


	<a class = "rightNav" href = "login.html">
    
  <?php
  session_start();
  if ($_SESSION['loginStatus'] == 0 || $_SESSION['loginStatus'] == NULL){
    echo 'LOG IN';
  } else {
    echo 'LOG OUT';
  }
  ?>

  </a>

	<a class = "rightNav" href = "cart.html"><img class = "rightImg" width = "30" 
		height = "30" src = "Images/cart_icon.png"></a>
</div>


<div class="container">
    <h1>Shopping Cart</h1>
    <div class="cart">
        <div class="products">


        <?php

         $_SESSION['subtotal'] = 0;

         if($_SESSION['Item1'] == 1){

            $sql="SELECT color, product_type, product_size, product_price, product_quantity, image_path FROM products WHERE id=(1)";
            $result = $conn->query($sql);
            $row = $result -> fetch_assoc();

            $price = floatval($row['product_price']);

            $_SESSION['subtotal'] += $price;

         echo  "<div class='product'>
               <img src= '".$row['image_path']."'>
               <div class='product-info'>
                  <h3 class='product-name'>".$row['color']."</h3>
                  <h4 class='product-price'>$".$row['product_price']."</h4>
                  <h4 class='product-offer'></h4>
                  <p class='product-remove'>
                     <i class='fa fa-trash' aria-hidden='true'></i>
                     <span class='remove'>Remove</span>
                  </p>
               </div>
            </div>";
         }

         if($_SESSION['Item2'] == 1){

            $sql="SELECT color, product_type, product_size, product_price, product_quantity, image_path FROM products WHERE id=(2)";
            $result = $conn->query($sql);
            $row = $result -> fetch_assoc();

            $price = floatval($row['product_price']);

            $_SESSION['subtotal'] += $price;

         echo  "<div class='product'>
               <img src= '".$row['image_path']."'>
               <div class='product-info'>
                  <h3 class='product-name'>".$row['color']."</h3>
                  <h4 class='product-price'>$".$row['product_price']."</h4>
                  <h4 class='product-offer'></h4>
                  <p class='product-remove'>
                     <i class='fa fa-trash' aria-hidden='true'></i>
                     <span class='remove'>Remove</span>
                  </p>
               </div>
            </div>";
         }

         if($_SESSION['Item3'] == 1){

            $sql="SELECT color, product_type, product_size, product_price, product_quantity, image_path FROM products WHERE id=(3)";
            $result = $conn->query($sql);
            $row = $result -> fetch_assoc();

            $price = floatval($row['product_price']);

            $_SESSION['subtotal'] += $price;

         echo  "<div class='product'>
               <img src= '".$row['image_path']."'>
               <div class='product-info'>
                  <h3 class='product-name'>".$row['color']."</h3>
                  <h4 class='product-price'>$".$row['product_price']."</h4>
                  <h4 class='product-offer'></h4>
                  <p class='product-remove'>
                     <i class='fa fa-trash' aria-hidden='true'></i>
                     <span class='remove'>Remove</span>
                  </p>
               </div>
            </div>";
         }

         if($_SESSION['Item4'] == 1){

            $sql="SELECT color, product_type, product_size, product_price, product_quantity, image_path FROM products WHERE id=(4)";
            $result = $conn->query($sql);
            $row = $result -> fetch_assoc();

            $price = floatval($row['product_price']);

            $_SESSION['subtotal'] += $price;

         echo  "<div class='product'>
               <img src= '".$row['image_path']."'>
               <div class='product-info'>
                  <h3 class='product-name'>".$row['color']."</h3>
                  <h4 class='product-price'>$".$row['product_price']."</h4>
                  <h4 class='product-offer'></h4>
                  <p class='product-remove'>
                     <i class='fa fa-trash' aria-hidden='true'></i>
                     <span class='remove'>Remove</span>
                  </p>
               </div>
            </div>";
         }

         if($_SESSION['Item5'] == 1){

            $sql="SELECT color, product_type, product_size, product_price, product_quantity, image_path FROM products WHERE id=(5)";
            $result = $conn->query($sql);
            $row = $result -> fetch_assoc();

            $price = floatval($row['product_price']);

            $_SESSION['subtotal'] += $price;

         echo  "<div class='product'>
               <img src= '".$row['image_path']."'>
               <div class='product-info'>
                  <h3 class='product-name'>".$row['color']."</h3>
                  <h4 class='product-price'>$".$row['product_price']."</h4>
                  <h4 class='product-offer'></h4>
                  <p class='product-remove'>
                     <i class='fa fa-trash' aria-hidden='true'></i>
                     <span class='remove'>Remove</span>
                  </p>
               </div>
            </div>";
         }

         if($_SESSION['Item6'] == 1){

            $sql="SELECT color, product_type, product_size, product_price, product_quantity, image_path FROM products WHERE id=(6)";
            $result = $conn->query($sql);
            $row = $result -> fetch_assoc();

            $price = floatval($row['product_price']);

            $_SESSION['subtotal'] += $price;

         echo  "<div class='product'>
               <img src= '".$row['image_path']."'>
               <div class='product-info'>
                  <h3 class='product-name'>".$row['color']."</h3>
                  <h4 class='product-price'>$".$row['product_price']."</h4>
                  <h4 class='product-offer'></h4>
                  <p class='product-remove'>
                     <i class='fa fa-trash' aria-hidden='true'></i>
                     <span class='remove'>Remove</span>
                  </p>
               </div>
            </div>";
         }

         if($_SESSION['Item7'] == 1){

            $sql="SELECT color, product_type, product_size, product_price, product_quantity, image_path FROM products WHERE id=(7)";
            $result = $conn->query($sql);
            $row = $result -> fetch_assoc();

            $price = floatval($row['product_price']);

            $_SESSION['subtotal'] += $price;

         echo  "<div class='product'>
               <img src= '".$row['image_path']."'>
               <div class='product-info'>
                  <h3 class='product-name'>".$row['color']."</h3>
                  <h4 class='product-price'>$".$row['product_price']."</h4>
                  <h4 class='product-offer'></h4>
                  <p class='product-remove'>
                     <i class='fa fa-trash' aria-hidden='true'></i>
                     <span class='remove'>Remove</span>
                  </p>
               </div>
            </div>";
         }

         if($_SESSION['Item1'] == 8){

            $sql="SELECT color, product_type, product_size, product_price, product_quantity, image_path FROM products WHERE id=(8)";
            $result = $conn->query($sql);
            $row = $result -> fetch_assoc();

            $price = floatval($row['product_price']);

            $_SESSION['subtotal'] += $price;

         echo  "<div class='product'>
               <img src= '".$row['image_path']."'>
               <div class='product-info'>
                  <h3 class='product-name'>".$row['color']."</h3>
                  <h4 class='product-price'>$".$row['product_price']."</h4>
                  <h4 class='product-offer'></h4>
                  <p class='product-remove'>
                     <i class='fa fa-trash' aria-hidden='true'></i>
                     <span class='remove'>Remove</span>
                  </p>
               </div>
            </div>";
         }

         if($_SESSION['Item9'] == 1){

            $sql="SELECT color, product_type, product_size, product_price, product_quantity, image_path FROM products WHERE id=(9)";
            $result = $conn->query($sql);
            $row = $result -> fetch_assoc();

            $price = floatval($row['product_price']);

            $_SESSION['subtotal'] += $price;

         echo  "<div class='product'>
               <img src= '".$row['image_path']."'>
               <div class='product-info'>
                  <h3 class='product-name'>".$row['color']."</h3>
                  <h4 class='product-price'>$".$row['product_price']."</h4>
                  <h4 class='product-offer'></h4>
                  <p class='product-remove'>
                     <i class='fa fa-trash' aria-hidden='true'></i>
                     <span class='remove'>Remove</span>
                  </p>
               </div>
            </div>";
         }

         if($_SESSION['Item10'] == 1){

            $sql="SELECT color, product_type, product_size, product_price, product_quantity, image_path FROM products WHERE id=(10)";
            $result = $conn->query($sql);
            $row = $result -> fetch_assoc();

            $price = floatval($row['product_price']);

            $_SESSION['subtotal'] += $price;

         echo  "<div class='product'>
               <img src= '".$row['image_path']."'>
               <div class='product-info'>
                  <h3 class='product-name'>".$row['color']."</h3>
                  <h4 class='product-price'>$".$row['product_price']."</h4>
                  <h4 class='product-offer'></h4>
                  <p class='product-remove'>
                     <i class='fa fa-trash' aria-hidden='true'></i>
                     <span class='remove'>Remove</span>
                  </p>
               </div>
            </div>";
         }

         if($_SESSION['Item11'] == 1){

            $sql="SELECT color, product_type, product_size, product_price, product_quantity, image_path FROM products WHERE id=(11)";
            $result = $conn->query($sql);
            $row = $result -> fetch_assoc();

            $price = floatval($row['product_price']);

            $_SESSION['subtotal'] += $price;

         echo  "<div class='product'>
               <img src= '".$row['image_path']."'>
               <div class='product-info'>
                  <h3 class='product-name'>".$row['color']."</h3>
                  <h4 class='product-price'>$".$row['product_price']."</h4>
                  <h4 class='product-offer'></h4>
                  <p class='product-remove'>
                     <i class='fa fa-trash' aria-hidden='true'></i>
                     <span class='remove'>Remove</span>
                  </p>
               </div>
            </div>";
         }

         if($_SESSION['Item1'] == 12){

            $sql="SELECT color, product_type, product_size, product_price, product_quantity, image_path FROM products WHERE id=(12)";
            $result = $conn->query($sql);
            $row = $result -> fetch_assoc();

            $price = floatval($row['product_price']);

            $_SESSION['subtotal'] += $price;

         echo  "<div class='product'>
               <img src= '".$row['image_path']."'>
               <div class='product-info'>
                  <h3 class='product-name'>".$row['color']."</h3>
                  <h4 class='product-price'>$".$row['product_price']."</h4>
                  <h4 class='product-offer'></h4>
                  <p class='product-remove'>
                     <i class='fa fa-trash' aria-hidden='true'></i>
                     <span class='remove'>Remove</span>
                  </p>
               </div>
            </div>";
         }

         if($_SESSION['Item1'] == 13){

            $sql="SELECT color, product_type, product_size, product_price, product_quantity, image_path FROM products WHERE id=(13)";
            $result = $conn->query($sql);
            $row = $result -> fetch_assoc();

            $price = floatval($row['product_price']);

            $_SESSION['subtotal'] += $price;

         echo  "<div class='product'>
               <img src= '".$row['image_path']."'>
               <div class='product-info'>
                  <h3 class='product-name'>".$row['color']."</h3>
                  <h4 class='product-price'>$".$row['product_price']."</h4>
                  <h4 class='product-offer'></h4>
                  <p class='product-remove'>
                     <i class='fa fa-trash' aria-hidden='true'></i>
                     <span class='remove'>Remove</span>
                  </p>
               </div>
            </div>";
         }

         if($_SESSION['Item1'] == 14){

            $sql="SELECT color, product_type, product_size, product_price, product_quantity, image_path FROM products WHERE id=(14)";
            $result = $conn->query($sql);
            $row = $result -> fetch_assoc();

            $price = floatval($row['product_price']);

            $_SESSION['subtotal'] += $price;

         echo  "<div class='product'>
               <img src= '".$row['image_path']."'>
               <div class='product-info'>
                  <h3 class='product-name'>".$row['color']."</h3>
                  <h4 class='product-price'>$".$row['product_price']."</h4>
                  <h4 class='product-offer'></h4>
                  <p class='product-remove'>
                     <i class='fa fa-trash' aria-hidden='true'></i>
                     <span class='remove'>Remove</span>
                  </p>
               </div>
            </div>";
         }

         if($_SESSION['Item1'] == 15){

            $sql="SELECT color, product_type, product_size, product_price, product_quantity, image_path FROM products WHERE id=(15)";
            $result = $conn->query($sql);
            $row = $result -> fetch_assoc();

            $price = floatval($row['product_price']);

            $_SESSION['subtotal'] += $price;

         echo  "<div class='product'>
               <img src= '".$row['image_path']."'>
               <div class='product-info'>
                  <h3 class='product-name'>".$row['color']."</h3>
                  <h4 class='product-price'>$".$row['product_price']."</h4>
                  <h4 class='product-offer'></h4>
                  <p class='product-remove'>
                     <i class='fa fa-trash' aria-hidden='true'></i>
                     <span class='remove'>Remove</span>
                  </p>
               </div>
            </div>";
         }

         if($_SESSION['Item1'] == 16){

            $sql="SELECT color, product_type, product_size, product_price, product_quantity, image_path FROM products WHERE id=(16)";
            $result = $conn->query($sql);
            $row = $result -> fetch_assoc();

            $price = floatval($row['product_price']);

            $_SESSION['subtotal'] += $price;

         echo  "<div class='product'>
               <img src= '".$row['image_path']."'>
               <div class='product-info'>
                  <h3 class='product-name'>".$row['color']."</h3>
                  <h4 class='product-price'>$".$row['product_price']."</h4>
                  <h4 class='product-offer'></h4>
                  <p class='product-remove'>
                     <i class='fa fa-trash' aria-hidden='true'></i>
                     <span class='remove'>Remove</span>
                  </p>
               </div>
            </div>";
         }

         if($_SESSION['Item1'] == 17){

            $sql="SELECT color, product_type, product_size, product_price, product_quantity, image_path FROM products WHERE id=(17)";
            $result = $conn->query($sql);
            $row = $result -> fetch_assoc();

            $price = floatval($row['product_price']);

            $_SESSION['subtotal'] += $price;

         echo  "<div class='product'>
               <img src= '".$row['image_path']."'>
               <div class='product-info'>
                  <h3 class='product-name'>".$row['color']."</h3>
                  <h4 class='product-price'>$".$row['product_price']."</h4>
                  <h4 class='product-offer'></h4>
                  <p class='product-remove'>
                     <i class='fa fa-trash' aria-hidden='true'></i>
                     <span class='remove'>Remove</span>
                  </p>
               </div>
            </div>";
         }

         if($_SESSION['Item1'] == 18){

            $sql="SELECT color, product_type, product_size, product_price, product_quantity, image_path FROM products WHERE id=(18)";
            $result = $conn->query($sql);
            $row = $result -> fetch_assoc();

            $price = floatval($row['product_price']);

            $_SESSION['subtotal'] += $price;

         echo  "<div class='product'>
               <img src= '".$row['image_path']."'>
               <div class='product-info'>
                  <h3 class='product-name'>".$row['color']."</h3>
                  <h4 class='product-price'>$".$row['product_price']."</h4>
                  <h4 class='product-offer'></h4>
                  <p class='product-remove'>
                     <i class='fa fa-trash' aria-hidden='true'></i>
                     <span class='remove'>Remove</span>
                  </p>
               </div>
            </div>";
         }

         if($_SESSION['Item1'] == 19){

            $sql="SELECT color, product_type, product_size, product_price, product_quantity, image_path FROM products WHERE id=(19)";
            $result = $conn->query($sql);
            $row = $result -> fetch_assoc();

            $price = floatval($row['product_price']);

            $_SESSION['subtotal'] += $price;

         echo  "<div class='product'>
               <img src= '".$row['image_path']."'>
               <div class='product-info'>
                  <h3 class='product-name'>".$row['color']."</h3>
                  <h4 class='product-price'>$".$row['product_price']."</h4>
                  <h4 class='product-offer'></h4>
                  <p class='product-remove'>
                     <i class='fa fa-trash' aria-hidden='true'></i>
                     <span class='remove'>Remove</span>
                  </p>
               </div>
            </div>";
         }

         
           ?>



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
                $tax = ($_SESSION['subtotal'] * 0.085);
                echo '$'.$tax;
                ?></span>
            </p>
            <p>
               <span>Total</span>
               <span>
                  <?php
                     $total =  ($tax + $_SESSION['subtotal']);
                     echo '$'.$total;
                  ?>   
               </span>
           </p>
            <a href="paymentinfo.html">Proceed to Checkout</a>
    </div>
  </div>
 </div>


</body>
</html>