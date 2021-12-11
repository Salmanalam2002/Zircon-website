<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name = "viewport" content = "width = device-width", initial-scale = "1.0">  
	<title>zircon</title>
	<link rel="Stylesheet" href="./style.css">
	<link href = "https://fonts.googleapis.com/css2?
	family = Poppins:wght@300;400;500;600;700&display = swap"
	rel = "stylesheet">
	<link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class = "header">
	<div class = "container">
		<div class = "navbar">
			<div class = "logo">
				<img src = "./zircon.jpeg" width = "125px">
			</div>
			<nav>
				<ul id = "MenuItems">
					<li><a href = "./zircon-home.php">Home</a></li>
					<li><a href = "./products.php">Product</a></li>
					<li><a href = "">About</a></li>
					<li><a href = "">Contact</a></li>
					<li><a id="acc" href = "./account.php">Account</a></li>
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
		<div class = "row">
			<div class = "col-2">
				<h1>Give Your Life<br>a New Style!</h1>
				<a href = "" class = "btn">Explore Now &#8594</a>
			</div>
			<div class = "col-2">
				<img src = "./image5.png">
			</div>
		</div>
	</div>	
	</div>
	
	<!------ featured categories---->
	<div class = "categories">
		<div class = "small-container">
			<div class = "row">
			<div class = "col-3">
				<img src = "./image6.png">
			</div>
			<div class = "col-3">
				<img src = "./image7.png">
			</div>
			<div class = "col-3">
				<img src = "./image8.png">
			</div>
		</div>
		</div>
	</div>
	<!----featured Products--->
	<div class = "small-container">
		<h2 class = "title">Featured Products</h2>
		<div class = "row">
			<div class = "col-4">
				<img src = "./image9.png">
				<h4>Printed T-shirt</h4>
				<div class = "rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p>Rs. 509</p>
			</div>
			<div class = "col-4">
				<img src = "./image11.png">
				<h4>Sneakers</h4>
				<div class = "rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
				</div>
				<p>Rs. 1149</p>
			</div>
			<div class = "col-4">
				<img src = "./image10.png">
				<h4>Polo T-shirt</h4>
				<div class = "rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p>Rs. 569</p>
			</div>
			
		</div>
			<h2 class = "title">Latest Products</h2>
			<div class = "row">
			<div class = "col-4">
				<img src = "./image12.png">
				<h4>Hooded Sweatshirt</h4>
				<div class = "rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p> From Rs.709</p>
			</div>
			<div class = "col-4">
				<img src = "./image13.png">
				<h4>Sneakers</h4>
				<div class = "rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
				</div>
				<p>Rs. 1449</p>
			</div>
			<div class = "col-4">
				<img src = "./image14.png">
				<h4>Leather Jacket</h4>
				<div class = "rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p>Rs. 1734</p>
			</div>
			<div class = "row">
			<div class = "col-4">
				<img src = "./image15.png">
				<h4>Sweatshirt</h4>
				<div class = "rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p>Rs. 687</p>
			</div>
			<div class = "col-4">
				<img src = "./image16.png">
				<h4>Watches</h4>
				<div class = "rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
				</div>
				<p>Rs. 899</p>
			</div>
			<div class = "col-4">
				<img src = "./image17.png">
				<h4>Socks</h4>
				<div class = "rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p>Rs. 69</p>
			</div>
			
			</div>
		</div>
	</div>
	<!----------testimonial---------->
	<div class = "testimonial">
		<div class = "small-container">
			<div class = "row">
				<div class = "col-3">
					<i class = "fa fa-quote-left"></i>
					<p>You guys are the best !</p>
					<p>Keep up the great work !</p>
					<div class = "rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					</div>
					<h3>Umang Baranwal</h3>
				</div>
				<div class = "col-3">
					<i class = "fa fa-quote-left"></i>
					<p>The layout is very  clean,  but also kind of bland.  It makes you feel
						comfortable  with the site  because  you  don't  feel  overwhelmed  by
						information, but the  presentation of the site needs to be worked on a
						bit more.</p>
					<div class = "rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-o"></i>
					</div>
					<h3>Arpit Agrahari</h3>
				</div>
				<div class = "col-3">
					<i class = "fa fa-quote-left"></i>
					<p>Overall, excellent page with lots of heart.  I just love the warm feel
						of it. Beautiful  work!  The  only  touch  ups are  minor  and do not
						effect  the  average  persons  experience. </p>
					<div class = "rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half-o"></i>
					</div>
					<h3>Utkarsh Mishra</h3>
				</div>
			</div>
		</div>
	</div>	
	<!-----offer----->
	<div class = "offer">
		<div class = "small-container">
			<div class = "row">
				<div class = "col-2">
					<img src = "./image18.png" class = "offer-img">
				</div>
				<div class = "col-2">
					<p>Exclusively Available on MyWebsite</p>
					<h1>Xiaomi Smart Band 2</h1>
					<small>It helps you track your Activity</small>
					<a href = "" class = "btn">Buy Now &#8594;</a>
				</div>
			</div>
		</div>
	</div>
	
	<!----------testinomial---------->
	<div class = "testinomial">
		<div class = "small-container">
			<div class = "row">
				<div class = "col-3">
					<i class = "fa fa-quote-left"></i>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
					<div class = "rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-o"></i>
					</div>
				</div>
			</div>
		</div>
	</div>	
	<!----------brands---------->
	<div class = "brands">
		<div class = "small-container">
			<div class = "row">
				<div class = "col-5">
					<img src = "./logo-godrej.png">
				</div>
				<div class = "col-5">
					<img src = "./logo-samsung.png">
				</div>
				<div class = "col-5">
					<img src = "./logo-philips.png">
				</div>
				<div class = "col-5">
					<img src = "./logo-nike.png">
				</div>
			</div>
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
					<p>Our Purpose Is To Sustainably Make The Pleasure And Benefits of Trending Clothes and Accesories Available</p>
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
	}
	</script>
</body>
</html>