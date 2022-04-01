<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Shopper.com - Our Products</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
	<!-- bootstrap -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="themes/css/bootstrappage.css" rel="stylesheet" />

	<!-- global styles -->
	<link href="themes/css/flexslider.css" rel="stylesheet" />
	<link href="themes/css/main.css" rel="stylesheet" />

	<!-- Social Icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- scripts -->
	<script src="themes/js/jquery-1.7.2.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="themes/js/superfish.js"></script>
	<script src="themes/js/jquery.scrolltotop.js"></script>
	<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
</head>

<body>
	<!-- <div id="top-bar" class="container">
			<div class="row">
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">				
							<li><a href="register.html">My Account</a></li>
							<li><a href="cart.html">Your Cart</a></li>
							<li><a href="checkout.html">Checkout</a></li>					
							<li><a href="register.html">Login</a></li>			
						</ul>
					</div>
				</div>
			</div>
		</div> -->
	<div id="wrapper" class="container">
		<section class="navbar main-menu">
			<div class="navbar-inner main-menu">
				<a href="http://localhost/Shopper/index.php" class="logo pull-left"><img src="themes/images/logo.png" class="site_logo" alt=""></a>
				<nav id="menu" class="pull-right">
					<ul>
						<li><a href="./http://localhost/Shopper/index.php">Home Page</a></li>
						<li><a href="http://localhost/Shopper/about.php">About Us</a></li>
						<li><a href="http://localhost/Shopper/contact.php">Contact Us</a>
					</ul>
				</nav>
			</div>
		</section>
		<section class="header_text sub">
			<img class="pageBanner" src="themes/images/pageBanner.png" alt="New products">
			<h4><span>New products</span></h4>
		</section>
		<section class="main-content">
			<?php
			// Database connection
			$connection = mysqli_connect('localhost', 'root', '', 'shopper');

			if (!$connection) {
				die("Connection Failed : " . mysqli_connect_error());
			}

			$sql = "SELECT * FROM products WHERE image_source='themes/images/cloth/18.jpg'";
			$result = mysqli_query($connection, $sql);

			$num = mysqli_num_rows($result);

			if ($num > 0) {
				$rows = mysqli_fetch_assoc($result);
			}
			?>
			<div class="row">
				<div class="span9">
					<ul class="thumbnails listing-products">
						<li class="span3">
							<div class="product-box">
								<span class="sale_tag"></span>
								<a href="http://localhost/Shopper/product_detail.php?link=themes/images/cloth/18.jpg"><img alt="" src="<?php echo $rows['image_source'] ?>"></a><br />
								<a href="http://localhost/Shopper/product_detail.php?link=themes/images/cloth/18.jpg" class="title"><?php echo $rows['product_type'] ?></a><br />
								<a href="http://localhost/Shopper/product_detail.php?link=themes/images/cloth/18.jpg" class="category">By <?php echo $rows['brand'] ?></a>
								<p class="price"><?php echo $rows['price'] ?></p>
							</div>
						</li>
						<?php $rows = mysqli_fetch_assoc($result); ?>
					</ul>
					<hr>
					<div class="pagination pagination-small pagination-centered">
						<ul>
							<li><a href="./products.php">Prev</a></li>
							<li><a href="./products.php">1</a></li>
							<li class="active"><a href="#">2</a></li>
						</ul>
					</div>
				</div>
				<div class="span3 col">
					<div class="block">
						<ul class="nav nav-list">
							<li class="nav-header">SUB CATEGORIES</li>
							<li><a href="products.html">Nullam semper elementum</a></li>
							<li class="active"><a href="products.html">Phasellus ultricies</a></li>
							<li><a href="products.html">Donec laoreet dui</a></li>
							<li><a href="products.html">Nullam semper elementum</a></li>
							<li><a href="products.html">Phasellus ultricies</a></li>
							<li><a href="products.html">Donec laoreet dui</a></li>
						</ul>
						<br />
						<ul class="nav nav-list below">
							<li class="nav-header">MANUFACTURES</li>
							<li><a href="products.html">Adidas</a></li>
							<li><a href="products.html">Nike</a></li>
							<li><a href="products.html">Dunlop</a></li>
							<li><a href="products.html">Yamaha</a></li>
						</ul>
					</div>
					<div class="block">
						<h4 class="title">
							<span class="pull-left"><span class="text">Randomize</span></span>
							<span class="pull-right">
								<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
							</span>
						</h4>
						<div id="myCarousel" class="carousel slide">
							<div class="carousel-inner">
								<div class="active item">
									<ul class="thumbnails listing-products">
										<li class="span3">
											<div class="product-box">
												<span class="sale_tag"></span>
												<img alt="" src="themes/images/products/1.jpg"><br />
												<a href="product_detail.html" class="title">Fusce id molestie massa</a><br />
												<a href="#" class="category">Suspendisse aliquet</a>
												<p class="price">$261</p>
											</div>
										</li>
									</ul>
								</div>
								<div class="item">
									<ul class="thumbnails listing-products">
										<li class="span3">
											<div class="product-box">
												<img alt="" src="themes/images/products/2.jpg"><br />
												<a href="product_detail.html" class="title">Tempor sem sodales</a><br />
												<a href="#" class="category">Urna nec lectus mollis</a>
												<p class="price">$134</p>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="block">
						<h4 class="title"><strong>Best</strong> Seller</h4>
						<ul class="small-product">
							<li>
								<a href="#" title="Praesent tempor sem sodales">
									<img src="themes/images/products/3.jpg" alt="Praesent tempor sem sodales">
								</a>
								<a href="#">Praesent tempor sem</a>
							</li>
							<li>
								<a href="#" title="Luctus quam ultrices rutrum">
									<img src="themes/images/products/4.jpg" alt="Luctus quam ultrices rutrum">
								</a>
								<a href="#">Luctus quam ultrices rutrum</a>
							</li>
							<li>
								<a href="#" title="Fusce id molestie massa">
									<img src="themes/images/products/5.jpg" alt="Fusce id molestie massa">
								</a>
								<a href="#">Fusce id molestie massa</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<section id="footer-bar">
			<div class="row">
				<div class="span3">
					<h4>Navigation</h4>
					<ul class="nav">
						<li><a href="./index.html">Homepage</a></li>
						<li><a href="./about.html">About Us</a></li>
						<li><a href="./contact.html">Contact Us</a></li>
						<li><a href="./cart.html">Your Cart</a></li>
						<li><a href="./register.html">Login</a></li>
					</ul>
				</div>
				<div class="span4">
					<h4>My Account</h4>
					<ul class="nav">
						<li><a href="#">My Account</a></li>
						<li><a href="#">Order History</a></li>
						<li><a href="#">Wish List</a></li>
						<li><a href="#">Newsletter</a></li>
					</ul>
				</div>
				<div class="span5">
					<p class="logo"><img src="themes/images/logo.png" class="site_logo" alt=""></p>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. the Lorem Ipsum has been the industry's standard dummy text ever since the you.</p>
					<br />
				</div>
				<div>
					<ul>
						<a href="#" class="fa fa-facebook"></a>
						<a href="#" class="fa fa-twitter"></a>
						<a href="#" class="fa fa-skype"></a>
						<a href="#" class="fa fa-vimeo"></a>
					</ul>
				</div>
			</div>
		</section>
		<section id="copyright">
			<span>Copyright 2013 bootstrappage template All right reserved.</span>
		</section>
	</div>
	<script src="themes/js/common.js"></script>
</body>

</html>