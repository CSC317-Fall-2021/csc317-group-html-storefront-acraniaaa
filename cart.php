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


<div class="container">
    <h1>Shopping Cart</h1>
    <div class="cart">
        <div class="products">


        <?php

         $_SESSION['subtotal'] = 0;

         if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['remove1'])){       
            $_SESSION['Item1'] = 0;
         }
         if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['remove2'])){       
            $_SESSION['Item2'] = 0;
         }
         if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['remove3'])){       
            $_SESSION['Item3'] = 0;
         }
         if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['remove4'])){       
            $_SESSION['Item4'] = 0;
         }
         if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['remove5'])){       
            $_SESSION['Item5'] = 0;
         }
         if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['remove6'])){       
            $_SESSION['Item6'] = 0;
         }
         if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['remove7'])){       
            $_SESSION['Item7'] = 0;
         }
         if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['remove8'])){       
            $_SESSION['Item8'] = 0;
         }
         if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['remove9'])){       
            $_SESSION['Item9'] = 0;
         }
         if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['remove10'])){       
            $_SESSION['Item10'] = 0;
         }
         if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['remove11'])){       
            $_SESSION['Item11'] = 0;
         }
         if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['remove12'])){       
            $_SESSION['Item12'] = 0;
         }
         if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['remove13'])){       
            $_SESSION['Item13'] = 0;
         }
         if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['remove14'])){       
            $_SESSION['Item14'] = 0;
         }
         if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['remove15'])){       
            $_SESSION['Item15'] = 0;
         }
         if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['remove16'])){       
            $_SESSION['Item16'] = 0;
         }
         if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['remove17'])){       
            $_SESSION['Item17'] = 0;
         }
         if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['remove18'])){       
            $_SESSION['Item18'] = 0;
         }
         if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['remove19'])){       
            $_SESSION['Item19'] = 0;
         }
         
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

                     <form action='cart.php' method='post'>
                     <input type 'submit' class='remove' name='remove1' value='REMOVE'>
                     <form action='productPage.php' method='post'>

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
                     <form action='cart.php' method='post'>
                     <input type 'submit' class='remove' name='remove2' value='REMOVE'>
                     <form>
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
                     <form action='cart.php' method='post'>
                     <input type 'submit' class='remove' name='remove3' value='REMOVE'>
                     <form action='productPage.php' method='post'>
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
                     <form action='cart.php' method='post'>
                     <input type 'submit' class='remove' name='remove4' value='REMOVE'>
                     <form action='productPage.php' method='post'>
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
                     <form action='cart.php' method='post'>
                     <input type 'submit' class='remove' name='remove5' value='REMOVE'>
                     <form action='productPage.php' method='post'>
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
                     <form action='cart.php' method='post'>
                     <input type 'submit' class='remove' name='remove6' value='REMOVE'>
                     <form action='productPage.php' method='post'>
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
                     <form action='cart.php' method='post'>
                     <input type 'submit' class='remove' name='remove7' value='REMOVE'>
                     <form action='productPage.php' method='post'>
                  </p>
               </div>
            </div>";
         }

         if($_SESSION['Item8'] == 1){

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
                     <form action='cart.php' method='post'>
                     <input type 'submit' class='remove' name='remove8' value='REMOVE'>
                     <form action='productPage.php' method='post'>
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
                     <form action='cart.php' method='post'>
                     <input type 'submit' class='remove' name='remove9' value='REMOVE'>
                     <form action='productPage.php' method='post'>
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
                     <form action='cart.php' method='post'>
                     <input type 'submit' class='remove' name='remove10' value='REMOVE'>
                     <form action='productPage.php' method='post'>
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
                     <form action='cart.php' method='post'>
                     <input type 'submit' class='remove' name='remove11' value='REMOVE'>
                     <form action='productPage.php' method='post'>
                  </p>
               </div>
            </div>";
         }

         if($_SESSION['Item12'] == 1){

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
                     <form action='cart.php' method='post'>
                     <input type 'submit' class='remove' name='remove12' value='REMOVE'>
                     <form action='productPage.php' method='post'>
                  </p>
               </div>
            </div>";
         }

         if($_SESSION['Item13'] == 1){

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
                     <form action='cart.php' method='post'>
                     <input type 'submit' class='remove' name='remove13' value='REMOVE'>
                     <form action='productPage.php' method='post'>
                  </p>
               </div>
            </div>";
         }

         if($_SESSION['Item14'] == 1){

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
                     <form action='cart.php' method='post'>
                     <input type 'submit' class='remove' name='remove14' value='REMOVE'>
                     <form action='productPage.php' method='post'>
                  </p>
               </div>
            </div>";
         }

         if($_SESSION['Item15'] == 1){

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
                     <form action='cart.php' method='post'>
                     <input type 'submit' class='remove' name='remove15' value='REMOVE'>
                     <form action='productPage.php' method='post'>
                  </p>
               </div>
            </div>";
         }

         if($_SESSION['Item16'] == 1){

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
                     <form action='cart.php' method='post'>
                     <input type 'submit' class='remove' name='remove16' value='REMOVE'>
                     <form action='productPage.php' method='post'>
                  </p>
               </div>
            </div>";
         }

         if($_SESSION['Item17'] == 1){

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
                     <form action='cart.php' method='post'>
                     <input type 'submit' class='remove' name='remove17' value='REMOVE'>
                     <form action='productPage.php' method='post'>
                  </p>
               </div>
            </div>";
         }

         if($_SESSION['Item18'] == 1){

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
                     <form action='cart.php' method='post'>
                     <input type 'submit' class='remove' name='remove18' value='REMOVE'>
                     <form action='productPage.php' method='post'>
                  </p>
               </div>
            </div>";
         }

         if($_SESSION['Item19'] == 1){

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
                     <form action='cart.php' method='post'>
                     <input type 'submit' class='remove' name='remove19' value='REMOVE'>
                     <form action='productPage.php' method='post'>
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
            <a href="paymentinfo.php">Proceed to Checkout</a>
    </div>
  </div>
 </div>


</body>
</html>