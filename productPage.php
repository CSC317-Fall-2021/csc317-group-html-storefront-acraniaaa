<!DOCTYPE html>
<html>
  <title>Copy Paper: 8.5x11 White | DUNDER MIFFLIN</title>
  <head>
    <link href = "StyleSheet.css" rel = "stylesheet">
    <link href = "paperStyle.css" rel = "stylesheet">
  </head>
  <!--Header links-->
  <body>
    
    <div class = "nav">
	<img class = "leftNav" src="Images/Dunder_Mifflin_logo.png" width="140" height="80">
	<a class = "leftNav" href="index.html"> HOME</a>
	<a class = "leftNav" href="products.php"> PAPER</a>
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
    
    <font face = "Times New Roman">
      <div class = "grid-container">
        <div id = "product-image">
          <?php
            session_start();
            $conn = new mysqli("localhost", "user", "password", "main");
            $id = $_SESSION['product_id'];
            $sql = "SELECT image_path FROM products WHERE id=$id";
            $result = $conn->query($sql);
            $row = $result -> fetch_assoc();
            echo "<img class='image' width='400' height='400' src='".$row['image_path']."'>";
          ?>
        </div>
        <div id = "product-name">
          <?php
          $sql = "SELECT color, product_type, product_size FROM products WHERE id=$id";
          $result = $conn->query($sql);
          $row = $result -> fetch_assoc();
          echo "<h2>".$row['product_type']." Paper: ".$row['product_size']." ".$row['color']."</h2>";
          ?>
        </div>
        <div id = "product-desc">
          <p id = "paragraph-title"><b>Product Description</b></p>
          <ul id = "product-desc-list">
            <?php
            $sql = "SELECT product_size, product_quantity, color FROM products WHERE id=$id";
            $result = $conn->query($sql);
            $row = $result -> fetch_assoc();
            echo "<li>".$row['product_size']."</li>
            <li>".$row['product_quantity']."</li>
            <li>".$row['color']."</li>";
            ?>
          </ul>
          <?php
            $sql="SELECT color, product_type, product_size FROM products WHERE id=$id";
            $result = $conn->query($sql);
            $row = $result -> fetch_assoc();
            echo "<br><p><b>Dunder Mifflin ".$row['product_type']." Paper</b>:Dunder Mifflin ".$row['color']." ".$row['product_size']." ".$row['product_type']." paper
            works as hard as you do. This dependable, everyday ".$row['product_type']." paper runs great through all types of equipment.
            <br><b>100% Recycled Paper!</b><br><b>99.92% Jam Free-Guarantee!</b></p>";
          ?>
        </div>
        <div class = "product-buy">
          <?php
            $sql="SELECT product_price FROM products WHERE id=$id";
            $result = $conn->query($sql);
            $row = $result -> fetch_assoc();
            echo "<b>Price: $".$row['product_price']."</b><br><br>";
          ?>
          <form method="post">
          <input type="button" id="product-button-buy" value="Add to Cart">
          </form>
          <?php
            if(array_key_exists('product-button-buy', $_POST)) {
              addToCartButton();
            }
          function addToCartButton() {
            //maybe
            $cookie_name = $_SESSION['product_id'];
            $cookie_value = "John Doe";
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

          }
          ?>
        </div>
        <div id="similar-products-title">
          <b>Other Products</b>
        </div>
        <div class = "similar-products"></div>
          <div id = "product-one">
            <?php
              $sid = rand(1,18);
              $sql = "SELECT color, product_type, image_path FROM products WHERE id=$sid";
              $result = $conn -> query($sql);
              $row = $result -> fetch_assoc();
              echo "<a href = 'productPage.php'><img class='image' width = '200' height = '200' src = '".$row['image_path']."'></a>
              <br><h4>".$row['color']." ".$row['product_type']." Paper</h4>";             
            ?>
          </div>
          <div id = "product-two">
          <?php
              while(true) {
                $cond = rand(1,18);
                if($cond === $sid) {
                  continue;
                } else {
                  $sid = $cond;
                  break;
                }
              }
              $sql = "SELECT color, product_type, image_path FROM products WHERE id=$sid";
              $result = $conn -> query($sql);
              $row = $result -> fetch_assoc();
              echo "<a href = 'productPage.php'><img class='image' width = '200' height = '200' src = '".$row['image_path']."'></a>
              <br><h4>".$row['color']." ".$row['product_type']." Paper</h4>";
            ?>
          </div>
          <div id = "product-three">
          <?php
              while(true) {
                $cond = rand(1,18);
                if($cond === $sid) {
                  continue;
                } else {
                  $sid = $cond;
                  break;
                }
              }
              $sql = "SELECT color, product_type, image_path FROM products WHERE id=$sid";
              $result = $conn -> query($sql);
              $row = $result -> fetch_assoc();
              echo "<a href = 'productPage.php'><img class='image' width = '200' height = '200' src = '".$row['image_path']."'></a>
              <br><h4>".$row['color']." ".$row['product_type']." Paper</h4>";             
              $conn->close(); 
            ?>
          </div>
      </div>
    </font>



  </body>
  <footer class="footer">

  </footer>

</html>