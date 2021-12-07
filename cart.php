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
	<a class = "leftNav" href="index.html"> HOME</a>
	<a class = "leftNav" href="products.html"> PAPER</a>
	<a class = "leftNav" href="about.html"> ABOUT</a>
	<a class = "leftNav" href="FAQ.html"> FAQ</a>
	<a class = "rightNav" href = "login.html">LOG IN</a>
	<a class = "rightNav" href = "cart.html"><img class = "rightImg" width = "30" 
		height = "30" src = "Images/cart_icon.png"></a>
	<form class = "rightNav"><input type = "search" placeholder = "Search" 
		style="width: 300px; padding: 9px 20px; margin: 18px 10px; 
		display:inline-block; border: 1px solid#ccc; box-sizing: 
		border-box;"></form>
</div>


<div class="container">
    <h1>Shopping Cart</h1>
    <div class="cart">
        <div class="products">


        <?php



         if(isset($_COOKIE[1])){

            $sql="SELECT color, product_type, product_size, product_price, product_quantity, image_path FROM products WHERE id=($_COOKIE[1])";
            $result = $conn->query($sql);
            $row = $result -> fetch_assoc();

         echo  "<div class='product'>
               <img src= '".$row['image_path']."'>
               <div class='product-info'>
                  <h3 class='product-name'>".$row['color']."</h3>
                  <h4 class='product-price'>$".$row['product_price']."</h4>
                  <h4 class='product-offer'></h4>
                  <p class='product-quantity'>Qnt:<input value=".$row['product_quantity']." name=''>
                  <p class='product-remove'>
                     <i class='fa fa-trash' aria-hidden='true'></i>
                     <span class='remove'>Remove</span>
                  </p>
               </div>
            </div>";
         }
         if(isset($_COOKIE[2])){

            $sql="SELECT color, product_type, product_size, product_price, product_quantity, image_path FROM products WHERE id=($_COOKIE[1])";
            $result = $conn->query($sql);
            $row = $result -> fetch_assoc();

         echo  "<div class='product'>
               <img src= '".$row['image_path']."'>
               <div class='product-info'>
                  <h3 class='product-name'>".$row['color']."</h3>
                  <h4 class='product-price'>$".$row['product_price']."</h4>
                  <h4 class='product-offer'></h4>
                  <p class='product-quantity'>Qnt:<input value=".$row['product_quantity']." name=''>
                  <p class='product-remove'>
                     <i class='fa fa-trash' aria-hidden='true'></i>
                     <span class='remove'>Remove</span>
                  </p>
               </div>
            </div>";
         }
         if(isset($_COOKIE[3])){

            $sql="SELECT color, product_type, product_size, product_price, product_quantity, image_path FROM products WHERE id=($_COOKIE[1])";
            $result = $conn->query($sql);
            $row = $result -> fetch_assoc();

         echo  "<div class='product'>
               <img src= '".$row['image_path']."'>
               <div class='product-info'>
                  <h3 class='product-name'>".$row['color']."</h3>
                  <h4 class='product-price'>$".$row['product_price']."</h4>
                  <h4 class='product-offer'></h4>
                  <p class='product-quantity'>Qnt:<input value=".$row['product_quantity']." name=''>
                  <p class='product-remove'>
                     <i class='fa fa-trash' aria-hidden='true'></i>
                     <span class='remove'>Remove</span>
                  </p>
               </div>
            </div>";
         }
         if(isset($_COOKIE[4])){

            $sql="SELECT color, product_type, product_size, product_price, product_quantity, image_path FROM products WHERE id=($_COOKIE[1])";
            $result = $conn->query($sql);
            $row = $result -> fetch_assoc();

         echo  "<div class='product'>
               <img src= '".$row['image_path']."'>
               <div class='product-info'>
                  <h3 class='product-name'>".$row['color']."</h3>
                  <h4 class='product-price'>$".$row['product_price']."</h4>
                  <h4 class='product-offer'></h4>
                  <p class='product-quantity'>Qnt:<input value=".$row['product_quantity']." name=''>
                  <p class='product-remove'>
                     <i class='fa fa-trash' aria-hidden='true'></i>
                     <span class='remove'>Remove</span>
                  </p>
               </div>
            </div>";
         }
         if(isset($_COOKIE[5])){

            $sql="SELECT color, product_type, product_size, product_price, product_quantity, image_path FROM products WHERE id=($_COOKIE[1])";
            $result = $conn->query($sql);
            $row = $result -> fetch_assoc();

         echo  "<div class='product'>
               <img src= '".$row['image_path']."'>
               <div class='product-info'>
                  <h3 class='product-name'>".$row['color']."</h3>
                  <h4 class='product-price'>$".$row['product_price']."</h4>
                  <h4 class='product-offer'></h4>
                  <p class='product-quantity'>Qnt:<input value=".$row['product_quantity']." name=''>
                  <p class='product-remove'>
                     <i class='fa fa-trash' aria-hidden='true'></i>
                     <span class='remove'>Remove</span>
                  </p>
               </div>
            </div>";
         }
         if(isset($_COOKIE[6])){

            $sql="SELECT color, product_type, product_size, product_price, product_quantity, image_path FROM products WHERE id=($_COOKIE[1])";
            $result = $conn->query($sql);
            $row = $result -> fetch_assoc();

         echo  "<div class='product'>
               <img src= '".$row['image_path']."'>
               <div class='product-info'>
                  <h3 class='product-name'>".$row['color']."</h3>
                  <h4 class='product-price'>$".$row['product_price']."</h4>
                  <h4 class='product-offer'></h4>
                  <p class='product-quantity'>Qnt:<input value=".$row['product_quantity']." name=''>
                  <p class='product-remove'>
                     <i class='fa fa-trash' aria-hidden='true'></i>
                     <span class='remove'>Remove</span>
                  </p>
               </div>
            </div>";
         }
         if(isset($_COOKIE[7])){

            $sql="SELECT color, product_type, product_size, product_price, product_quantity, image_path FROM products WHERE id=($_COOKIE[1])";
            $result = $conn->query($sql);
            $row = $result -> fetch_assoc();

         echo  "<div class='product'>
               <img src= '".$row['image_path']."'>
               <div class='product-info'>
                  <h3 class='product-name'>".$row['color']."</h3>
                  <h4 class='product-price'>$".$row['product_price']."</h4>
                  <h4 class='product-offer'></h4>
                  <p class='product-quantity'>Qnt:<input value=".$row['product_quantity']." name=''>
                  <p class='product-remove'>
                     <i class='fa fa-trash' aria-hidden='true'></i>
                     <span class='remove'>Remove</span>
                  </p>
               </div>
            </div>";
         }
         if(isset($_COOKIE[8])){

            $sql="SELECT color, product_type, product_size, product_price, product_quantity, image_path FROM products WHERE id=($_COOKIE[1])";
            $result = $conn->query($sql);
            $row = $result -> fetch_assoc();

         echo  "<div class='product'>
               <img src= '".$row['image_path']."'>
               <div class='product-info'>
                  <h3 class='product-name'>".$row['color']."</h3>
                  <h4 class='product-price'>$".$row['product_price']."</h4>
                  <h4 class='product-offer'></h4>
                  <p class='product-quantity'>Qnt:<input value=".$row['product_quantity']." name=''>
                  <p class='product-remove'>
                     <i class='fa fa-trash' aria-hidden='true'></i>
                     <span class='remove'>Remove</span>
                  </p>
               </div>
            </div>";
         }
         if(isset($_COOKIE[9])){

            $sql="SELECT color, product_type, product_size, product_price, product_quantity, image_path FROM products WHERE id=($_COOKIE[1])";
            $result = $conn->query($sql);
            $row = $result -> fetch_assoc();

         echo  "<div class='product'>
               <img src= '".$row['image_path']."'>
               <div class='product-info'>
                  <h3 class='product-name'>".$row['color']."</h3>
                  <h4 class='product-price'>$".$row['product_price']."</h4>
                  <h4 class='product-offer'></h4>
                  <p class='product-quantity'>Qnt:<input value=".$row['product_quantity']." name=''>
                  <p class='product-remove'>
                     <i class='fa fa-trash' aria-hidden='true'></i>
                     <span class='remove'>Remove</span>
                  </p>
               </div>
            </div>";
         }
         if(isset($_COOKIE[10])){

            $sql="SELECT color, product_type, product_size, product_price, product_quantity, image_path FROM products WHERE id=($_COOKIE[1])";
            $result = $conn->query($sql);
            $row = $result -> fetch_assoc();

         echo  "<div class='product'>
               <img src= '".$row['image_path']."'>
               <div class='product-info'>
                  <h3 class='product-name'>".$row['color']."</h3>
                  <h4 class='product-price'>$".$row['product_price']."</h4>
                  <h4 class='product-offer'></h4>
                  <p class='product-quantity'>Qnt:<input value=".$row['product_quantity']." name=''>
                  <p class='product-remove'>
                     <i class='fa fa-trash' aria-hidden='true'></i>
                     <span class='remove'>Remove</span>
                  </p>
               </div>
            </div>";
         }
         if(isset($_COOKIE[11])){

            $sql="SELECT color, product_type, product_size, product_price, product_quantity, image_path FROM products WHERE id=($_COOKIE[1])";
            $result = $conn->query($sql);
            $row = $result -> fetch_assoc();

         echo  "<div class='product'>
               <img src= '".$row['image_path']."'>
               <div class='product-info'>
                  <h3 class='product-name'>".$row['color']."</h3>
                  <h4 class='product-price'>$".$row['product_price']."</h4>
                  <h4 class='product-offer'></h4>
                  <p class='product-quantity'>Qnt:<input value=".$row['product_quantity']." name=''>
                  <p class='product-remove'>
                     <i class='fa fa-trash' aria-hidden='true'></i>
                     <span class='remove'>Remove</span>
                  </p>
               </div>
            </div>";
         }
         if(isset($_COOKIE[12])){

            $sql="SELECT color, product_type, product_size, product_price, product_quantity, image_path FROM products WHERE id=($_COOKIE[1])";
            $result = $conn->query($sql);
            $row = $result -> fetch_assoc();

         echo  "<div class='product'>
               <img src= '".$row['image_path']."'>
               <div class='product-info'>
                  <h3 class='product-name'>".$row['color']."</h3>
                  <h4 class='product-price'>$".$row['product_price']."</h4>
                  <h4 class='product-offer'></h4>
                  <p class='product-quantity'>Qnt:<input value=".$row['product_quantity']." name=''>
                  <p class='product-remove'>
                     <i class='fa fa-trash' aria-hidden='true'></i>
                     <span class='remove'>Remove</span>
                  </p>
               </div>
            </div>";
         }
         if(isset($_COOKIE[13])){

            $sql="SELECT color, product_type, product_size, product_price, product_quantity, image_path FROM products WHERE id=($_COOKIE[1])";
            $result = $conn->query($sql);
            $row = $result -> fetch_assoc();

         echo  "<div class='product'>
               <img src= '".$row['image_path']."'>
               <div class='product-info'>
                  <h3 class='product-name'>".$row['color']."</h3>
                  <h4 class='product-price'>$".$row['product_price']."</h4>
                  <h4 class='product-offer'></h4>
                  <p class='product-quantity'>Qnt:<input value=".$row['product_quantity']." name=''>
                  <p class='product-remove'>
                     <i class='fa fa-trash' aria-hidden='true'></i>
                     <span class='remove'>Remove</span>
                  </p>
               </div>
            </div>";
         }
         if(isset($_COOKIE[14])){

            $sql="SELECT color, product_type, product_size, product_price, product_quantity, image_path FROM products WHERE id=($_COOKIE[1])";
            $result = $conn->query($sql);
            $row = $result -> fetch_assoc();

         echo  "<div class='product'>
               <img src= '".$row['image_path']."'>
               <div class='product-info'>
                  <h3 class='product-name'>".$row['color']."</h3>
                  <h4 class='product-price'>$".$row['product_price']."</h4>
                  <h4 class='product-offer'></h4>
                  <p class='product-quantity'>Qnt:<input value=".$row['product_quantity']." name=''>
                  <p class='product-remove'>
                     <i class='fa fa-trash' aria-hidden='true'></i>
                     <span class='remove'>Remove</span>
                  </p>
               </div>
            </div>";
         }
         if(isset($_COOKIE[15])){

            $sql="SELECT color, product_type, product_size, product_price, product_quantity, image_path FROM products WHERE id=($_COOKIE[1])";
            $result = $conn->query($sql);
            $row = $result -> fetch_assoc();

         echo  "<div class='product'>
               <img src= '".$row['image_path']."'>
               <div class='product-info'>
                  <h3 class='product-name'>".$row['color']."</h3>
                  <h4 class='product-price'>$".$row['product_price']."</h4>
                  <h4 class='product-offer'></h4>
                  <p class='product-quantity'>Qnt:<input value=".$row['product_quantity']." name=''>
                  <p class='product-remove'>
                     <i class='fa fa-trash' aria-hidden='true'></i>
                     <span class='remove'>Remove</span>
                  </p>
               </div>
            </div>";
         }
         if(isset($_COOKIE[16])){

            $sql="SELECT color, product_type, product_size, product_price, product_quantity, image_path FROM products WHERE id=($_COOKIE[1])";
            $result = $conn->query($sql);
            $row = $result -> fetch_assoc();

         echo  "<div class='product'>
               <img src= '".$row['image_path']."'>
               <div class='product-info'>
                  <h3 class='product-name'>".$row['color']."</h3>
                  <h4 class='product-price'>$".$row['product_price']."</h4>
                  <h4 class='product-offer'></h4>
                  <p class='product-quantity'>Qnt:<input value=".$row['product_quantity']." name=''>
                  <p class='product-remove'>
                     <i class='fa fa-trash' aria-hidden='true'></i>
                     <span class='remove'>Remove</span>
                  </p>
               </div>
            </div>";
         }
         if(isset($_COOKIE[17])){

            $sql="SELECT color, product_type, product_size, product_price, product_quantity, image_path FROM products WHERE id=($_COOKIE[1])";
            $result = $conn->query($sql);
            $row = $result -> fetch_assoc();

         echo  "<div class='product'>
               <img src= '".$row['image_path']."'>
               <div class='product-info'>
                  <h3 class='product-name'>".$row['color']."</h3>
                  <h4 class='product-price'>$".$row['product_price']."</h4>
                  <h4 class='product-offer'></h4>
                  <p class='product-quantity'>Qnt:<input value=".$row['product_quantity']." name=''>
                  <p class='product-remove'>
                     <i class='fa fa-trash' aria-hidden='true'></i>
                     <span class='remove'>Remove</span>
                  </p>
               </div>
            </div>";
         }
         if(isset($_COOKIE[18])){

            $sql="SELECT color, product_type, product_size, product_price, product_quantity, image_path FROM products WHERE id=($_COOKIE[1])";
            $result = $conn->query($sql);
            $row = $result -> fetch_assoc();

         echo  "<div class='product'>
               <img src= '".$row['image_path']."'>
               <div class='product-info'>
                  <h3 class='product-name'>".$row['color']."</h3>
                  <h4 class='product-price'>$".$row['product_price']."</h4>
                  <h4 class='product-offer'></h4>
                  <p class='product-quantity'>Qnt:<input value=".$row['product_quantity']." name=''>
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
                <span>$29.97</span>
            </p>
            <p>
                <span>Tax (8.5%)</span>
                <span>$2.55</span>
            </p>
            <p>
               <span>Total</span>
               <span>$32.52</span>
           </p>
            <a href="paymentinfo.html">Proceed to Checkout</a>
    </div>
  </div>
 </div>


</body>
</html>