<!DOCTYPE html>
<html>
<head>
<title>FAQ | DUNDER MIFFLIN</title>
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

<br><br><br><br><br><br>
<center><img src="Images/Dunder_Mifflin_logo_Black.png" width=200px></center><br>

  <center>
    <br>
  	<h2>FREQUENTLY ASKED QUESTIONS (Paper Related)</h2><br>
  	   <details>
  	   	<summary class = "summary">How do I know which paper
  			is right for me?</summary>

  		<p class = "sumText">The specifications of each paper
  		is stated on each product page, with all the necssary
  		information needed to make an informed decision
  		on which paper to purchase.</p>
          </details><br><br>
  	<details>
  		<summary class = "summary">Will you have more types of
  		paper available?</summary>

  		<p class = "sumText">We strive to have
  		the widest selection of high quality paper available.
  		If there is a specific type of paper that is not
  		available now, then we have not found a suitable
  		supplier that has met our standards. We will add
		the paper to our lineup of
  		quality products as soon as we find a suitable
  		supplier.</p>
          </details><br><br>
  	<details>
  	   	<summary class = "summary">Do you offer refunds?</summary>

  		<p class = "sumText">Yes, we do indeed offer refunds.
  		We guarantee the quality of our products, but if
  		you are not satified with your purchase, email us at
  		CreedBratton@DunderMifflin.com to receive instructions
  		on how to refund the purchased product.</p>
          </details><br><br>
  	<details>
  	   	<summary class = "summary">Is the paper you sell eco-friendly?</summary>

  		<p class = "sumText">All paper sold at Dunder Mifflin
  		is 100% recycled, and we pride ourselves of this
  		fact.</p>
          </details><br><br>

  	<h2>FREQUENTLY ASKED QUESTIONS (NOT paper related)
	  </h2><br>
  	<details>
  	   	<summary class = "summary">Does Michael Scott still work  at Dunder Mifflin?</summary>

  		<p class = "sumText">Michael G. Scott (Aka Ping,
  		Michael the Magic, Michael Scarn, Michael Klump,
  		Date Mike, Mike, Blind Guy McSqueezy, Prison Mike,
  		Caleb Crawdad, Master of Guidance, Michael Wonka,
  		Reginald Poofta, Michael Scotch, Spiros, Orville
  		Tootenbacher, Jesus Christ, Johnny Carson, Michael
  		J Fox, Mr. Fox, Nicki Minaj, The Incredible Mr. Fox,
  		Santa Bond, Beyoncé, Captain Bruisin', Michael Jackson,
  		Ryan's Girlfriend, Dennis the Menace, Eddie Murphy,
  		Spicoli Guy, MC Mike Scott, Michael Snot, Elton, Mr.
  		Scott, and Hot Tie Guy) unfortunately resigned in 2011.
		Our Scranton branch is now bring managed by Dwight Schrute.</p>
          </details><br><br>

  	<details>
  	   	<summary class = "summary">Has the company had any
  		incidents with fire exits?</summary>

  		<p class = "sumText"> In the past, we have had issues with fire safety.  However, we have since stripped our fire safety manager of his title.</p>
          </details><br><br><br>
  </center>
</p>
</font></body>

<br>

<footer class="footer">
</footer>





</html>
