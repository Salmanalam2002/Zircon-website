<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name = "viewport" content = "width = device-width", initial-scale = "1.0">  
	<title>All Products - MyWebsite</title>
	<link rel="Stylesheet" href="./style.css">
	<link href = "https://fonts.googleapis.com/css2?
	family = Poppins:wght@300;400;500;600;700&display = swap"
	rel = "stylesheet">
	<link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class = "container">
		<div class = "navbar">
			<div class = "logo">
				<img src = "./zircon.jpeg" width="125px">
			</div>
			<nav>
				<ul id = "MenuItems">
					<li><a href = "./zircon-home.php">Home</a></li>
					<li><a href = "./products.php">Product</a></li>
					<li><a href = "">About</a></li>
					<li><a href = "">Contact</a></li>
					<li><a id= "acc" href = "./account.php">Account</a></li>
					<?php
						session_start();
							if(isset($_SESSION['userName']))
							{
						?>
						<script>
							var account = document.getElementById('acc');
							account.text = 'Profile';
							account.setAttribute("href", "./profile.php");
						</script>
					<?php
						}
					?>
				</ul>
			</nav>
			<a href = "./cart.php"><img src = "./cart.png"></a>
			<img src = "./menu.png" class = "menu-icon" onclick = "menutoggle()">
		</div>
	</div>	
	
	<!----------cart item details--------->
	<div classs = "small-container cart-page">
		<table>
			<tr>
				<th>Product</th>
				<th>Quantity</th>
				<th>Subtotal</th>
			</tr>
			<tr>
				<td>
					<div class = "cart-info">
						<img src = "./image9.png">
						<div>
							<p>Printed Tshirt</p>
							<small>Rs. 509</small>
							<br>
							<a href = "">Remove</a>
						</div>
					</div>
				</td>
				<td><input type = "number" value = "1"></td>
				<td>Rs. 509</td>
				
			</tr>
			<tr>
				<td>
					<div class = "cart-info">
						<img src = "./image13.png">
						<div>
							<p>Printed Tshirt</p>
							<small>Rs. 1449</small>
							<br>
							<a href = "">Remove</a>
						</div>
					</div>
				</td>
				<td><input type = "number" value = "1"></td>
				<td>Rs. 1449</td>
				
			</tr>
			<tr>
				<td>
					<div class = "cart-info">
						<img src = "./image16.png">
						<div>
							<p>Printed Tshirt</p>
							<small>Rs. 899</small>
							<br>
							<a href = "">Remove</a>
						</div>
					</div>
				</td>
				<td><input type = "number" value = "1"></td>
				<td>Rs. 899</td>
				
			</tr>
		</table>

		<div class = "total-price">
			<table>
				<tr>
					<td>Subtotal</td>
					<td>Rs. 2857 </td>
				</tr>
				<tr>
					<td>Tax</td>
					<td>Rs. 37 </td>
				</tr>
				<tr>
					<td>Total</td>
					<td>Rs. 2894 </td>
				</tr>
			</table>
		</div>
	</div>

	
	<!---------footer---------->
	<div class = "footer">
		<div class = "container">
			<div class = "row">
				<div class = "footer-col-1">
					<h3>Download Our App</h3>
					<p>Download App for Android and ios mobile phones</p>
					<div class = "app-logo">
						<img src = "./appstore.png">
					</div>
				</div>
				<div class = "footer-col-2">
					<img src = "./zircon.jpeg">
					<p>Our Purpose Is To Sustainably Make The Pleasure And Benefits of Trending Clothes and  Accesories Available</p>
				</div>
				<div class = "footer-col-3">
					<h3>Useful Links</h3>
					<ul>
						<li>Coupons</li>
						<li>Blog Posts</li>
						<li>Return Policy</li>
						<li>Join Affiliate</li>
					</ul>
				</div>
				<div class = "footer-col-4">
					<h3>Follow Us</h3>
					<ul>
						<li>Facebook</li>
						<li>Twitter</li>
						<li>Instagram</li>
						<li>YouTube</li>
					</ul>
				</div>
			</div>
			<hr>
			<p class = "copyright">Copyright 2021</p>
		</div>
	</div>
	
	<!-----js for toggle menu----->
	<script>
		var MenuItems = document.getElementById("MenuItems");
		MenuItems.style.maxHeight = "0px";
		
		function menutoggle(){
		if(	MenuItems.style.maxHeight =="0px"){
			MenuItems.style.maxHeight = "200px";
		}else{
			MenuItems.style.maxHeight = "0px";
		}
	</script>
</body>
</html>	