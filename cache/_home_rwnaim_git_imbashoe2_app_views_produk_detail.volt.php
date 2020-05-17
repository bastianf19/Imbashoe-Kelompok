<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?= $this->assets->outputCss() ?>	

	<title>Imbashoe</title>
	
	<!-- Mobile Specific Meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <!-- Favicon -->
    <link rel="icon" type="img/png" href="img/Logoimba.png">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= $this->url->getStatic('css/signin.css') ?>" type="text/css">
	
    <link rel="stylesheet" href="<?= $this->url->getStatic('css/detail_produk.css') ?>" type="text/css">
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
									<button class="btnn"  type="button"><img class="searchsvg" src="/SVG/search-white.svg" width="20px"></button>
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
								<a href="#" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
								<div class="signin-popup">
									<div class="dropdown-cart-header">
										<p class="signin-text">Profile</p>
										<div class="sign-form">
											<div>
												<a>Halo <strong><?= $this->session->get('auth')['nama'] ?></strong>, selamat datang di <strong>Imbashoe</strong></a>
												
											</div>
											<div>
												<a href="<?= $this->url->get('/signup/edit/' . $this->session->get('auth')['id_user']) ?>">Edit Profile</a>
											</div>
											<div>
												<a href="<?= $this->url->get('Session/logout') ?>">Logout</a>
											</div>
										  
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
													<li class="active"><a href="/home">Home</a></li>
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
<section class="single-product">
	<div class="container">
		
		
		<div class="row mt-20">
			<div class="col-md-5">
				<div class="single-product-slider">
					<div id='carousel-custom' class='carousel slide' data-ride='carousel'>
						<div class='carousel-outer'>
							<!-- me art lab slider -->
							<div class='carousel-inner '>
								<div class='item active'>
									<img src='<?= $this->url->get($produk->foto_produk) ?>' alt='' data-zoom-image="<?= $this->url->get($produk->foto_produk) ?>" />
								</div>
								<div class='item'>
									<img src='images/shop/single-products/product-2.jpg' alt='' data-zoom-image="images/shop/single-products/product-2.jpg" />
								</div>
								
								<div class='item'>
									<img src='images/shop/single-products/product-3.jpg' alt='' data-zoom-image="images/shop/single-products/product-3.jpg" />
								</div>
								<div class='item'>
									<img src='images/shop/single-products/product-4.jpg' alt='' data-zoom-image="images/shop/single-products/product-4.jpg" />
								</div>
								<div class='item'>
									<img src='images/shop/single-products/product-5.jpg' alt='' data-zoom-image="images/shop/single-products/product-5.jpg" />
								</div>
								<div class='item'>
									<img src='images/shop/single-products/product-6.jpg' alt='' data-zoom-image="images/shop/single-products/product-6.jpg" />
								</div>
								
							</div>
							
							<!-- sag sol -->
							<a class='left carousel-control' href='#carousel-custom' data-slide='prev'>
								<i class="tf-ion-ios-arrow-left"></i>
							</a>
							<a class='right carousel-control' href='#carousel-custom' data-slide='next'>
								<i class="tf-ion-ios-arrow-right"></i>
							</a>
						</div>
						
						<!-- thumb -->
						<ol class='carousel-indicators mCustomScrollbar meartlab'>
							<li data-target='#carousel-custom' data-slide-to='0' class='active'>
								<img src='<?= $this->url->get($produk->foto_produk) ?>' alt='' />
							</li>
							<li data-target='#carousel-custom' data-slide-to='1'>
								<img src='images/shop/single-products/product-2.jpg' alt='' />
							</li>
							<li data-target='#carousel-custom' data-slide-to='2'>
								<img src='images/shop/single-products/product-3.jpg' alt='' />
							</li>
							<li data-target='#carousel-custom' data-slide-to='3'>
								<img src='images/shop/single-products/product-4.jpg' alt='' />
							</li>
							<li data-target='#carousel-custom' data-slide-to='4'>
								<img src='images/shop/single-products/product-5.jpg' alt='' />
							</li>
							<li data-target='#carousel-custom' data-slide-to='5'>
								<img src='images/shop/single-products/product-6.jpg' alt='' />
							</li>
							<li data-target='#carousel-custom' data-slide-to='6'>
								<img src='images/shop/single-products/product-7.jpg' alt='' />
							</li>
						</ol>
					</div>
				</div>
			</div>
			
			<div class="col-md-7">
				<div class="single-product-details">
					<h2><?= $produk->nama_produk ?></h2>
					<p class="product-price">Rp <?= $produk->harga_produk ?></p>
					
					<p class="product-description mt-20">
					Deskripsi Produk :	<br><?= $produk->deskripsi_produk ?>
					</p>
					<br>
					<h5>Brand : <?= $produk->brand_produk ?></h5>
					<br>
					
					<!-- <div class="color-swatches">
						<span>color:</span>
						<ul>
							<li>
								<a href="" class="swatch-violet"></a>
							</li>
							<li>
								<a href="" class="swatch-black"></a>
							</li>
							<li>
								<a href="" class="swatch-cream"></a>
							</li>
						</ul>
					</div> -->
					<div class="product-size">
						<span>Size tersedia:</span>
						<select class="form-control">
							<option>43</option>
							<option>41</option>
							<option>40</option>
							<option>38</option>
						</select>
					</div>
					<!-- <div class="product-quantity">
						<span>Quantity:</span>
						<div class="product-quantity-slider">
							<input id="product-quantity" type="text" value="0" name="product-quantity">
						</div>
					</div> -->
					<div class="product-category">
						<span>Categories:</span>
						<ul>
							<li><?= $produk->kategori ?></a></li>
						</ul>
					</div>
					<br>
					<h6>Stock tersedia</h6>
					<br>
					<br>
					<button class=" btn btn-lg btn-primary">Tambahkan ke Wishlist</button>
				</div>
			</div>
			
		</div>
		
		
	</div>
</section>

<!-- Modal -->
<!-- <div class="modal product-modal fade" id="product-modal">
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<i class="tf-ion-close"></i>
	</button>
  	<div class="modal-dialog " role="document">
    	<div class="modal-content">
	      	<div class="modal-body">
	        	<div class="row">
	        		<div class="col-md-8">
	        			<div class="modal-image">
		        			<img class="img-responsive" src="images/shop/products/modal-product.jpg" />
	        			</div>
	        		</div>
	        		<div class="col-md-3">
	        			<div class="product-short-details">
	        				<h2 class="product-title">GM Pendant, Basalt Grey</h2>
	        				<p class="product-price">$200</p>
	        				<p class="product-short-description">
	        					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem iusto nihil cum. Illo laborum numquam rem aut officia dicta cumque.
	        				</p>
	        				<a href="" class="btn btn-main">Add To Cart</a>
	        				<a href="" class="btn btn-transparent">View Product Details</a>
	        			</div>
	        		</div>
	        	</div>
	        </div>
    	</div>
  	</div>
</div> -->
<!-- Start Footer Area -->
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
						<p class="call">Anda ingin bertanya mengenai produk Kami? Hubungi <span><a href="https://wa.me/6282234361869?text=Halo+Admin+Imbashoe%2C+saya+mau+bertanya+mengenai+produk+...">082234361869</a></span></p>
							<a type="button" class="btn btn-primary" value="kirimPesan" href="https://wa.me/6282234361869?text=Halo+Admin+Imbashoe%2C+saya+mau+bertanya+mengenai+produk+...">Kirim Pesan</a>
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
								<li>Jl. Sukolilo Kasih, No.5, Keputih, Surabaya</li>
								<li>Indonesia</li>
								<li>info@imbashoe.com</li>
								<li>0822 3436 1869</li>
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
							<p>Copyright © 2020 <a href="#" target="_blank">Imbashoe</a>  -  All Rights Reserved.</p>
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
<?= $this->assets->outputJs() ?>	
</body>
</html>