<html>
<head>
	<title>Animated Side Shopping cart with CSS and jQuery</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="overlay"></div>

	<!-- navbar -->
	<nav id="navbar">
		<div class="vertical-align">
			<img src="cd-logo.svg">
		</div>
	</nav>
	<!-- /Navbar -->

	<!-- Side Shopping cart  -->
	<div id="side-cart">
		<h3>Shopping Cart</h3>
		<ul>
			<li>Product name<span>100rs</span></li>
			<li>Product name<span>100rs</span></li>
			<li>Product name<span>100rs</span></li>
			<li>Product name<span>100rs</span></li>
		</ul>

		<button class="yellow-btn">Checkout</button>

		<a href="#" class="side-cart-toggle">
			<i class="fa fa-shopping-cart"></i> <!-- Font AWSM iCON -->
		</a>
	</div><!-- / Side shopping cart -->

	<!-- all your stuff here -->
	<div class="wrapper">
		<br><br><br>
		<center>
			<a href="http://blog.hackerkernel.com/2015/10/08/side-shopping-cart/">Tutorial</a> /
			<a href="http://demo.hackerkernel.com/download.php?url=v09cqf0qzi44nt8uabhajf8zspotf89s">Download</a> / 
			<a href="http://hackerkernel.com/contact.php">Want me to work on your dream project (Contact)</a>
		</center>
				<?php
			for ($i=0; $i <= 10; $i++) { 
				echo "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>";
			}
		?>
	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="main.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-65994623-1', 'auto');
  ga('send', 'pageview');

</script>	
</body>
</html>