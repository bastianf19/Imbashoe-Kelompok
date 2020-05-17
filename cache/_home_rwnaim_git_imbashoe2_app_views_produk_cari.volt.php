

<!DOCTYPE html>
<html>
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?= $this->assets->outputCss() ?>	
	<!-- Title Tag  -->
    <title>Imbashoe</title>
	<!-- Favicon -->
	<link rel="icon" type="img/png" href="/img/Logoimba.png">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= $this->url->getStatic('css/signin.css') ?>" type="text/css">
	
    <!-- <link rel="stylesheet" href="<?= $this->url->getStatic('css/fontawesome.min.css') ?>" type="text/css"> -->
</head>
<body class="js">	
	<!-- Header -->
	<header class="header shop">
		<!-- End Topbar -->
		<div class="middle-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-12">
						<!-- Logo -->
						<div class="logo">
							<a href="index.volt"><img src="/img/Logoimba.png" alt="logo" width="150px"></a>
						</div>
						
						<!--/ End Logo -->
						<!-- Search Form -->
						<div class="search-top">
							<div class="top-search"><a href="#"><img src="/SVG/search-white.svg"width="20px"></a></div>
							<!-- Search Form -->
							<div class="search-top">
								<form method="POST" autocomplete="off"  action="<?= $this->url->get('produk/cari') ?>">
									<input type="text" placeholder="Search here..." name="nama">
									<button class="btnn"  type="button"><img class="searchsvg" src="SVG/search-white.svg" width="20px"></button>
								</form>
							</div>
							<!--/ End Search Form -->
						</div>
						<!--/ End Search Form -->
						<div class="mobile-nav"></div>
					</div>
					<div class="col-lg-8 col-md-7 col-12">
						<div class="search-bar-top">
							<div class="search-bar ">
								
								<form method="POST" autocomplete="off"  action="<?= $this->url->get('produk/cari') ?>">
									<input name="nama" placeholder="Search Products Here....." type="nama">
								</form>
								<select class="form-control" id="form_control">
									<option selected="selected">All Category</option>
									<option>Men</option>
									<option>Women</option>
									<option>Kids item</option>
								</select>
								<form method="POST" autocomplete="off"  action="<?= $this->url->get('produk/cari') ?>">
									<button class="btnn"><img class="searchsvg" src="/SVG/search-white.svg" width="20px"></button>
								</form>
								
								
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-12">
						<div class="right-bar">
							<!-- Search Form -->
							<div class="sinlge-bar signin">
								<a href="#" class="single-icon">Login</a>
                                <div class="signin-popup">
									<div class="dropdown-cart-header">
                                        <p class="signin-text">Login</p>
                                        <div class="sign-form">
                                            <form method="POST" action="<?= $this->url->get('Session/login') ?>" autocomplete="off" class="form-signin">
                                                
                                                <label for="username" class="sr-only">Username</label>
                                                <input type="text" name="username" id="username" class="form-control" placeholder="Username" required autofocus>
                                                <label for="pass" class="sr-only">Password</label>
                                                <input type="password" name="pass" id="pass" class="form-control" placeholder="Password" required>
                                                <div class="custom-control custom-checkbox" id="checkboxlogin">
													<input type="checkbox" class="custom-control-input" id="defaultUnchecked">
													<label class="custom-control-label" for="defaultUnchecked">Remember me</label>
												</div>
                                                <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
                                                <div class="belumpunyaakun">
                                                    <p>Belum punya akun?</p> <a href="<?= $this->url->get('/signup') ?>"> Daftar sekarang</a>
                                                </div>  
                                            </form>
                                        </div>
                                    </div>
                                    
                                   
								</div>
                            </div>
                           
							<div class="sinlge-bar shopping">
								<a href="#" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i> <span class="total-count">2</span></a>
								<!-- Shopping Item -->
								<div class="shopping-item">
									<div class="dropdown-cart-header">
										<span>2 Items</span>
										<a href="#">View Wishlist</a>
									</div>
									<ul class="shopping-list">
										<li>
											<a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
											<a class="cart-img" href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a>
											<h4><a href="#">Woman Ring</a></h4>
											<p class="quantity">1x - <span class="amount">$99.00</span></p>
										</li>
										<li>
											<a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
											<a class="cart-img" href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a>
											<h4><a href="#">Woman Necklace</a></h4>
											<p class="quantity">1x - <span class="amount">$35.00</span></p>
										</li>
									</ul>
									<div class="bottom">
										<div class="total">
											<span>Total</span>
											<span class="total-amount">$134.00</span>
										</div>
										<a href="checkout.html" class="btn animate">Lihat Selengkapnya</a>
									</div>
								</div>
								<!--/ End Shopping Item -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Header Inner -->
		<div class="header-inner">
			<div class="container">
				<div class="cat-nav-head">
					<div class="row">
						<div class="col-lg-3">
							<div class="nav main-menu menu navbar-nav">
								<li><a class="cat-heading" href="#"><i class="fa fa-bars" aria-hidden="true"></i><label><h5>CATEGORIES</label></h5></a>
								
									<ul class="dropdown main-category">
										<li><a href="#">New Arrivals<i class="fa fa-angle-right"></i></a>
											<ul class="sub-category">
												<li><a href="#">Best Selling</a></li>
												<li><a href="#">Top 100 Offer</a></li>
												<li><a href="#">Men’s Product</a></li>
												<li><a href="#">Women's Product</a></li>
												<li><a href="#">Kid's Item</a></li>
											</ul>
										</li>
										<li class="main-mega"><a href="#">best selling <i class="fa fa-angle-right"></i></a>
											<ul class="mega-menu">
												<li class="single-menu">
													<a href="#" class="title-link">Kid's Item</a>
													<div class="image">
														<img src="https://via.placeholder.com/225x155" alt="#">
													</div>
													<div class="inner-link">
														<a href="#">Nike</a>
														<a href="#">Adidas</a>
														<a href="#">Reebok</a>
														<a href="#">Puma</a>
													</div>
												</li>
												<li class="single-menu">
													<a href="#" class="title-link">Shop Men's</a>
													<div class="image">
														<img src="https://via.placeholder.com/225x155" alt="#">
													</div>
													<div class="inner-link">
														<a href="#">Converse</a>
														<a href="#">Nike</a>
														<a href="#">Adidas</a>
														<a href="#">Vans</a>
													</div>
												</li>
												<li class="single-menu">
													<a href="#" class="title-link">Women's Product</a>
													<div class="image">
														<img src="https://via.placeholder.com/225x155" alt="#">
													</div>
													<div class="inner-link">
														<a href="#">Sneaker</a>
														<a href="#">Nike</a>
														<a href="#">Adidas</a>
														<a href="#">Vans</a>
													</div>
												</li>
											</ul>
										</li>
										<li><a href="#">Top 100 Offer</a></li>
										<li><a href="#">Men’s Product</a></li>
										<li><a href="#">Womaen's Product</a></li>
										<li><a href="#">Kid's Item</a></li>
									</ul>
								
								
							</div>
						</div>
						<div class="col-lg-9 col-12">
							<div class="all-category"></div>
								<!-- Main Menu -->
								<nav class="navbar navbar-expand-lg">
									<div class="navbar-collapse">	
										<div class="nav-inner">	
											<ul class="nav main-menu menu navbar-nav">
												<!-- <a href="<?= $this->url->get('/produk') ?>" type="button" class="btn-sm btn-primary">Produk</a> -->
													<li class="active"><a href="#">Home</a></li>
													<li><a href="<?= $this->url->get('/produk') ?>">Product</a></li>												
													<li><a href="#">Service</a></li>
													<li><a href="#">Shop</i><span class="new">New</span></a>
														<ul class="dropdown">   
															<li><a href="shop-grid.html">Shop Grid</a></li>
															<li><a href="cart.html">Cart</a></li>
															<li><a href="checkout.html">Checkout</a></li>
														</ul>
													</li>
													<li><a href="#">Pages</a></li>									
													<li><a href="#">Blog <i class="fa fa-angle-down"></i></a> 
														<ul class="dropdown">
															<li><a href="blog-single-sidebar.html">Blog Single Sidebar</a></li>
														</ul>
													</li>
													<li><a href="contact.html">Contact Us</a></li>
												</ul>
										</div>
									</div>
								</nav>
								<!--/ End Main Menu -->	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Header Inner -->
	</header>
	<!--/ End Header -->

	<!-- Start Product Area -->
    <div class="product-area section">
        <div class="container">
            <h5 class="card-title text-center">Cari Produk | '<?php echo $nama_prod; ?>'</h5>
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Trending Item</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-info">
                        <div class="nav-main">
                            <!-- Tab Nav -->
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#man" role="tab">Man</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#women" role="tab">Woman</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#kids" role="tab">Kids</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#accessories" role="tab">Accessories</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#essential" role="tab">Essential</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#prices" role="tab">Prices</a></li>
                            </ul>
                            <!--/ End Tab Nav -->
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <!-- Start Single Tab -->
                            <div class="tab-pane fade show active" id="man" role="tabpanel">
                                <div class="tab-single">
                                    <div class="row">
                                        <?php foreach ($cari as $prod) { ?>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img class="default-img" src="<?= $this->url->get($prod->foto_produk) ?>" alt="#">
                                                        <!-- <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#"> -->
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <!--  <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>  -->
                                                            <a title="Wishlist" href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>Add to Wishlist</span></a>
                                                            <!--  <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>   -->
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Tambahkan ke Wishlist" href="#">Lihat Selengkapnya</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="#"><?= $prod->nama_produk ?></a></h3>
                                                    <div class="product-price">
                                                        <span>Rp <?= $prod->harga_produk ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <!--/ End Single Tab -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- End Product Area -->

	<!-- Start Shop Services Area -->
	<section class="shop-services section home">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-rocket"></i>
						<h4>Free shiping</h4>
						<p>Orders over $100</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-reload"></i>
						<h4>Free Return</h4>
						<p>Within 30 days returns</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-lock"></i>
						<h4>Sucure Payment</h4>
						<p>100% secure payment</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-tag"></i>
						<h4>Best Peice</h4>
						<p>Guaranteed price</p>
					</div>
					<!-- End Single Service -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Services Area -->
	
	<!-- Start Shop Newsletter  -->
	<section class="shop-newsletter section">
		<div class="container">
			<div class="inner-top">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 col-12">
						<!-- Start Newsletter Inner -->
						<div class="inner">
							<h4>Newsletter</h4>
							<p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
							<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
								<input name="EMAIL" placeholder="Your email address" required="" type="email">
								<button class="btn">Subscribe</button>
							</form>
						</div>
						<!-- End Newsletter Inner -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Newsletter -->
	
	<!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <!-- Product Slider -->
									<div class="product-gallery">
										<div class="quickview-slider-active">
											<div class="single-slider">
												<img src="https://via.placeholder.com/569x528" alt="#">
											</div>
											<div class="single-slider">
												<img src="https://via.placeholder.com/569x528" alt="#">
											</div>
											<div class="single-slider">
												<img src="https://via.placeholder.com/569x528" alt="#">
											</div>
											<div class="single-slider">
												<img src="https://via.placeholder.com/569x528" alt="#">
											</div>
										</div>
									</div>
								<!-- End Product slider -->
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="quickview-content">
                                    <h2>Flared Shift Dress</h2>
                                    <div class="quickview-ratting-review">
                                        <div class="quickview-ratting-wrap">
                                            <div class="quickview-ratting">
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="#"> (1 customer review)</a>
                                        </div>
                                        <div class="quickview-stock">
                                            <span><i class="fa fa-check-circle-o"></i> in stock</span>
                                        </div>
                                    </div>
                                    <h3>$29.00</h3>
                                    <div class="quickview-peragraph">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam.</p>
                                    </div>
									<div class="size">
										<div class="row">
											<div class="col-lg-6 col-12">
												<h5 class="title">Size</h5>
												<select>
													<option selected="selected">s</option>
													<option>m</option>
													<option>l</option>
													<option>xl</option>
												</select>
											</div>
											<div class="col-lg-6 col-12">
												<h5 class="title">Color</h5>
												<select>
													<option selected="selected">orange</option>
													<option>purple</option>
													<option>black</option>
													<option>pink</option>
												</select>
											</div>
										</div>
									</div>
                                    <div class="quantity">
										<!-- Input Order -->
										<div class="input-group">
											<div class="button minus">
												<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
													<i class="ti-minus"></i>
												</button>
											</div>
											<input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="1000" value="1">
											<div class="button plus">
												<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
													<i class="ti-plus"></i>
												</button>
											</div>
										</div>
										<!--/ End Input Order -->
									</div>
									<div class="add-to-cart">
										<a href="#" class="btn">Add to cart</a>
										<a href="#" class="btn min">  <i class="fa fa-heart" aria-hidden="true"></i></a>
										<a href="#" class="btn min"><i class="fa fa-compress"></i></a>
									</div>
                                    <div class="default-social">
										<h4 class="share-now">Share:</h4>
                                        <ul>
                                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                            <li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- Modal end -->
	
	<!-- Start Footer Area -->
	<footer class="footer">
		<!-- Footer Top -->
		<div class="footer-top section">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer about">
							<div class="logo">
								<a href="index.volt"><img src="/img/Logoimba.png" alt="#" width="100px"></a>
							</div>
							<p class="text">Imbashoe adalah perusahaan sepatu yang telah berdiri sejak April 2020. Memang baru, namun Imbashoe telah menjual lebih dari 200.000 produk selama 1 bulan pertama didirikan</p>
							<p class="call">Anda ingin bertanya mengenai produk Kami? Hubungi <span><a href="https://api.whatsapp.com/send?phone=6282234361869&text=Halo+Admin+Imbashoe%2C+saya+mau+bertanya+mengenai+produk+...">082234361869</a></span></p>
							<a type="button" class="btn btn-primary" value="kirimPesan" href="https://api.whatsapp.com/send?phone=6282234361869&text=Halo+Admin+Imbashoe%2C+saya+mau+bertanya+mengenai+produk+...">Kirim Pesan</a>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Information</h4>
							<ul>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Faq</a></li>
								<li><a href="#">Terms & Conditions</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Help</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Customer Service</h4>
							<ul>
								<li><a href="#">Payment Methods</a></li>
								<li><a href="#">Money-back</a></li>
								<li><a href="#">Returns</a></li>
								<li><a href="#">Shipping</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer social">
							<h4>Get In Tuch</h4>
							<!-- Single Widget -->
							<div class="contact">
								<ul>
									<li>NO. 342 - London Oxford Street.</li>
									<li>012 United Kingdom.</li>
									<li>info@eshop.com</li>
									<li>+032 3456 7890</li>
								</ul>
							</div>
							<!-- End Single Widget -->
							<ul>
								<li><a href="#"><i class="ti-facebook"></i></a></li>
								<li><a href="#"><i class="ti-twitter"></i></a></li>
								<li><a href="#"><i class="ti-flickr"></i></a></li>
								<li><a href="#"><i class="ti-instagram"></i></a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Footer Top -->
		<div class="copyright">
			<div class="container">
				<div class="inner">
					<div class="row">
						<div class="col-lg-6 col-12">
							<div class="left">
								<p>Copyright © 2020 <a href="http://www.wpthemesgrid.com" target="_blank">Wpthemesgrid</a>  -  All Rights Reserved.</p>
							</div>
						</div>
						<div class="col-lg-6 col-12">
							<div class="right">
								<img src="images/payments.png" alt="#">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- /End Footer Area -->
 
	<?= $this->assets->outputJs() ?>	
</body>
</html> 