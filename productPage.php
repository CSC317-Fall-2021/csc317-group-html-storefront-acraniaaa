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

          <?php
          


          ?>
          
          <form action="productPage.php" method="post">
          <input type="submit" id="product-button-buy" name="atc" value="Add to Cart">
          </form>
          
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
        </div>
        <div id="similar-products-title">
          <b>Other Products</b>
        </div>
        <div class = "similar-products"></div>
          <div id = "product-one">
            <?php
              $sid = rand(1,18);
              $sql = "SELECT * FROM products WHERE id=$sid";
              $result = $conn -> query($sql);
              $row = $result -> fetch_assoc();
              echo "<a href = 'redirect.php?product_id=".$row['id']."'><img class='image' width = '200' height = '200' src = '".$row['image_path']."'></a>
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
              $sql = "SELECT * FROM products WHERE id=$sid";
              $result = $conn -> query($sql);
              $row = $result -> fetch_assoc();
              echo "<a href = 'redirect.php?product_id=".$row['id']."'><img class='image' width = '200' height = '200' src = '".$row['image_path']."'></a>
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
              $sql = "SELECT * FROM products WHERE id=$sid";
              $result = $conn -> query($sql);
              $row = $result -> fetch_assoc();
              echo "<a href = 'redirect.php?product_id=".$row['id']."'><img class='image' width = '200' height = '200' src = '".$row['image_path']."'></a>
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
