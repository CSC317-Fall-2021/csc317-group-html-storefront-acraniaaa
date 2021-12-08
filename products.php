<!DOCTYPE html>
<html>
  <title>Products | DUNDER MIFFLIN</title>
  <head>
    <script src="products.js"></script>
    <link href = "StyleSheet.css" rel = "stylesheet">
    <link href = "CheckoutStyleSheet.css" rel = "stylesheet"> 
    <!--The style of the page goes here-->
    <style>
      h1 {
        text-align: center;
      }
      .product-selection {
        border: 0.5px ridge grey;
        background-color: rgb(235, 235, 235);
        grid-row-start: 1;
        grid-row-end: -1;
        grid-column-start: col0;
        grid-column-end: col1;
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);

      }
      .product-image {
        text-align: center;
        grid-row-start: r0;
        grid-row-end: r1;
        padding-top: 10px;
      }

      .product-desc {
        text-align: center;
        background-color: white;
        grid-row-start: r1;
        grid-row-end: auto;

      }
      .grid-container {
        display: grid;
        row-gap: 20px;
        column-gap: 10px;
        grid-template-rows: [row0] 325px [row1] 325px [row2] 325px [row3] 325px;
        grid-template-columns: [col0] 15% [col1] auto [col2] auto [col3] auto [col4] auto [col5] auto;
      }

      .grid-product {
        border: 2px solid rgba(0, 0, 0, 0.05);
        background-color: white;
        margin: 12px;
        display: grid;
        grid-template-rows: [r0] 200px [r1] auto;
        grid-template-columns: [c0] auto;
        transition-duration: 400ms;
      }
      .product-selection-container {
        margin-top: 10px;
        margin-left: 10px;
      }

      .grid-product:hover {
        transition-duration: 400ms;
        transform: scale(1.04);
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
        
      }
        /*The following styles are taken from this website: https://www.w3schools.com/howto/howto_css_custom_checkbox.asp
        I had no idea how to customize checkboxes so I had to google it and found this source*/

      /* Customize the label (the container) */
      .filter {
        display: block;
        position: relative;
        padding: 8px;
        padding-left: 35px;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 20px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      /* Hide the browser's default checkbox */
      .filter input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
      }

      /* Create a custom checkbox */
      .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 25px;
        width: 25px;
        background-color: #eee;
        border: 1px solid black;
      }

      /* On mouse-over, add a grey background color */
      .filter:hover input ~ .checkmark {
        background-color: #ccc;
      }

      /* When the checkbox is checked, add a blue background */
      .filter input:checked ~ .checkmark {
        background-color: #2196F3;
      }

      /* Create the checkmark/indicator (hidden when not checked) */
      .checkmark:after {
        content: "";
        position: absolute;
        display: none;
      }

      /* Show the checkmark when checked */
      .filter input:checked ~ .checkmark:after {
        display: block;
      }

      /* Style the checkmark/indicator */
      .filter .checkmark:after {
        left: 9px;
        top: 5px;
        width: 5px;
        height: 10px;
        border: solid white;
        border-width: 0 3px 3px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
      }

    </style>
  </head>

  <!--Navigation links-->
  <body class = "body">
    <?php
    session_start();
    $conn = new mysqli("localhost", "user", "password", "main");
    ?>
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
    <main>
      <font face = "Arial"><br><br><br><br><br><br><br><br><br>
        <center><img src="Images/Dunder_Mifflin_logo_Black.png" width=200px></center><br><br>

        <h1 id = "products-title"></h1>
        <div class="grid-container">
          <div class = "product-selection">
              <div class = "product-selection-container">
                <h3>Paper Color</h3>
                <label class="filter">White
                  <input type="checkbox" class = "filter-option" data-color = "White" onclick= "filterProductColor(this)">
                  <span class="checkmark"></span>
                </label>

                <label class="filter">Blue
                  <input type="checkbox" class = "filter-option" data-color = "Blue" onclick= "filterProductColor(this)">
                  <span class="checkmark"></span>
                </label>

                <label class="filter">Red
                  <input type="checkbox" class = "filter-option" data-color = "Red" onclick= "filterProductColor(this)">
                  <span class="checkmark"></span>
                </label>
                <label class="filter">Yellow
                  <input type="checkbox" class = "filter-option" data-color = "Yellow" onclick= "filterProductColor(this)">
                  <span class="checkmark"></span>
                </label>
                <label class="filter">Pink
                  <input type="checkbox" class = "filter-option" data-color = "Pink" onclick= "filterProductColor(this)">
                  <span class="checkmark"></span>
                </label>
                <label class="filter">Purple
                  <input type="checkbox" class = "filter-option" data-color = "Purple" onclick= "filterProductColor(this)">
                  <span class="checkmark"></span>
                </label>
                <br>
                <h3></h3>
              </div>
          </div>
          <?php
            $sql = "SELECT * FROM products";
            $result = $conn->query($sql);
            while($row = $result -> fetch_assoc()) {
              echo "<div class = 'grid-product' data-color= '".$row['color']."' data-size = '".$row['product_size']."'>
              <div class = 'product-image'>
              <a href = 'redirect.php?product_id=".$row['id']."'><img width = '200' height = '200' src = '".$row['image_path']."'></a>
              </div>
              <div class = 'product-desc'>
                <br><h4>".$row['color']." ".$row['product_type']." Paper</h4><br>
              </div>
            </div>";
            }
          ?>
        </div>
      </font>
    </main>
  </body>

  <footer class = "footer">

  </footer>
</html>

