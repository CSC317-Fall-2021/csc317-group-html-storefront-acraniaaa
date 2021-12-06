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
    
    <font face = "Times New Roman">
      <div class = "grid-container">
        <div id = "product-image">
          <?php
            $conn = new mysqli("localhost", "user", "password", "main");
            $sql = "SELECT image_path FROM products WHERE id=1";
            $img = $conn->query($sql);
            $row = $img -> fetch_assoc();
            echo "<img id='product' width='400' height='400' src='".$row['image_path']."'>";
            $conn->close();
          ?>
        </div>
        <div id = "product-name">
          <h2>Copy Paper: 8.5<q>x11</q> White</h2>
        </div>
        <div id = "product-desc">
          <p id = "paragraph-title"><b>Product Description</b></p>
          <ul id = "product-desc-list">
            <li>8.5<q>x11</q></li>
            <li>92 TAPPI Brightness</li>
            <li>2 Reams</li>
            <li>White</li>
          </ul>

                <p><b>DUNDER MIFFLIN COPY PAPER</b>:Dunder Mifflin White 8.5<q>x11</q> printer and copying paper
          works as hard as you do. This dependable, everyday copy paper runs great through all types of equipment.
          <br><b>100% Recycled Paper!</b><br><b>99.92% Jam Free-Guarantee!</b></p>
        </div>
        <div class = "product-buy">
            <b>Price: $9.99</b><br><br>
            <input type="button" id="product-button-buy" value="Add to Cart">
        </div>
        <div id="similar-products-title">
          <b>Similar Products</b>
        </div>
        <div class = "similar-products"></div>
          <div id = "product-one">
            <a href = "paperPurple.html"><img width = "200" height = "200" src = "Images/paperPurple.png"></a>
            <br><h4>Purple Paper</h4>
          </div>
          <div id = "product-two">
            <a href = "paperBlue.html"><img width = "200" height = "200" src = "Images/paperBlue.png"></a>
            <br><h4>Blue Paper</h4>
          </div>
          <div id = "product-three">
            <a href = "paperYellow.html"><img width = "200" height = "200" src = "Images/paperYellow.png"></a>
            <br><h4>Yellow Paper</h4>
          </div>
      </div>
    </font>



  </body>
  <footer class="footer">

  </footer>

</html>