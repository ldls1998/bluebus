<?php
include_once("src/conexion.php");
include_once("src/clases/Empresa.php");

$newEmpresa = new Empresa($con);

/*Visualiza datos de empresas*/


$verempresas = $newEmpresa->ver();


?>





<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang=""> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>BootStrap HTML5 CSS3 Theme</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/scrollbar.css">
	<link rel="stylesheet" href="css/jquery.mmenu.all.css">
	<link rel="stylesheet" href="css/prettyPhoto.css">
	<link rel="stylesheet" href="css/transitions.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/color.css">
	<link rel="stylesheet" href="css/responsive.css">
	<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body>
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<!--************************************
				Loader Start
	*************************************-->
	<div class="loader">
		<div class="span">
			<div class="location_indicator"></div>
		</div>
	</div>
	<!--************************************
				Loader End
	*************************************-->
	<!--************************************
			Mobile Menu Start
	*************************************-->
	<nav id="menu">
		<ul>
			<li><a href="javascript:void(0);">Home</a>
				<ul>
					<li><a href="index.html">Home ~ Modern</a></li>
					<li><a href="indexv2.html">Home ~ Full Screen</a></li>
					<li><a href="indexv3.html">Home ~ Creative</a></li>
					<li><a href="indexv4.html">Home ~ Simple</a></li>
					<li><a href="indexv5.html">Home ~ Video</a></li>
				</ul>
			</li>
			<li><a href="destinations.html">Destinations</a></li>
			<li><a href="javascript:void(0);">Listings</a>
				<div>
					<ul>
						<li><a href="listingvone.html">list style one</a></li>
						<li><a href="listingvtwo.html">list style two</a></li>
						<li><a href="listingvthree.html">list style three</a></li>
						<li><a href="listingvfour.html">list style four</a></li>
						<li><a href="listingvfive.html">list style five</a></li>
						<li><a href="listingvsix.html">list style six</a></li>
					</ul>
					<div class="tg-sliderarea">
						<h2>Popular Tours</h2>
						<div class="tg-trendingtripsslider tg-trendingtrips owl-carousel">
							<div class="item tg-trendingtrip">
								<figure>
									<a href="javascript:void(0);">
										<img src="images/tours/img-05.jpg" alt="image destinations">
										<div class="tg-hover">
											<span class="tg-stars"><span></span></span>
											<span class="tg-tourduration">7 Days</span>
											<span class="tg-locationname">Paris</span>
											<div class="tg-pricearea">
												<span>from</span>
												<h4>$600</h4>
											</div>
										</div>
									</a>
								</figure>
							</div>
							<div class="item tg-trendingtrip">
								<figure>
									<a href="javascript:void(0);">
										<img src="images/tours/img-06.jpg" alt="image destinations">
										<div class="tg-hover">
											<span class="tg-stars"><span></span></span>
											<span class="tg-tourduration">7 Days</span>
											<span class="tg-locationname">Paris</span>
											<div class="tg-pricearea">
												<span>from</span>
												<h4>$600</h4>
											</div>
										</div>
									</a>
								</figure>
							</div>
							<div class="item tg-trendingtrip">
								<figure>
									<a href="javascript:void(0);">
										<img src="images/tours/img-07.jpg" alt="image destinations">
										<div class="tg-hover">
											<span class="tg-stars"><span></span></span>
											<span class="tg-tourduration">7 Days</span>
											<span class="tg-locationname">Paris</span>
											<div class="tg-pricearea">
												<span>from</span>
												<h4>$600</h4>
											</div>
										</div>
									</a>
								</figure>
							</div>
							<div class="item tg-trendingtrip">
								<figure>
									<a href="javascript:void(0);">
										<img src="images/tours/img-08.jpg" alt="image destinations">
										<div class="tg-hover">
											<span class="tg-stars"><span></span></span>
											<span class="tg-tourduration">7 Days</span>
											<span class="tg-locationname">Paris</span>
											<div class="tg-pricearea">
												<span>from</span>
												<h4>$600</h4>
											</div>
										</div>
									</a>
								</figure>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li><a href="javascript:void(0);">Pages</a>
				<ul>
					<li><a href="faqs.html">FAQ’s</a></li>
					<li><a href="packages.html">Table</a></li>
					<li><a href="aboutus.html">About Us</a></li>
					<li><a href="contactus.html">Contact us</a></li>
					<li><a href="billingdetail.html">Billing Detail</a></li>
					<li><a href="404error.html">404 Error</a></li>
					<li><a href="comingsoon.html">Coming Soon</a></li>
					<li><a href="cart.html">cart</a></li>
					<li>
						<a href="javascript:void(0);">Tours</a>
						<ul>
							<li><a href="tourcatagory.html">Tour Catagory</a></li>
							<li><a href="tourbookingdetail.html">Tour Detail</a></li>
							<li><a href="tourpaymentdetail.html">Tour Payment</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li><a href="javascript:void(0);">Shop</a>
				<ul>
					<li><a href="shop.html">Shop</a></li>
					<li><a href="shopdetail.html">Shop Detail</a></li>
					<li><a href="cart.html">Cart</a></li>
				</ul>
			</li>
			<li><a href="javascript:void(0);">Blog</a>
				<ul>
					<li><a href="blog.html">Blog</a></li>
					<li><a href="blogdetail.html">Blog Detail</a></li>
				</ul>
			</li>
		</ul>
	</nav>
	<!--************************************
			Mobile Menu End
	*************************************-->
	<!--************************************
			Wrapper Start
	*************************************-->
	<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
		<!--************************************
				Header Start
		*************************************-->
		<header id="tg-header" class="tg-header tg-haslayout">
			<div class="container-fluid">
				<div class="row">
					<div class="tg-topbar">
						<nav class="tg-infonav">
							<ul>
								<li>
									<i><img src="images/icons/icon-01.png" alt="image destinations"></i>
									<span>1-800-321-6543</span>
								</li>
								<li>
									<i><img src="images/icons/icon-02.png" alt="image destinations"></i>
									<span>CHOOSE YOUR EXPERIENCE <a href="javascript:void(0);">Discover more</a></span>
								</li>
							</ul>
						</nav>
						<div class="tg-addnavcartsearch">
							<nav class="tg-addnav">
								<ul>
									<li><a href="javascript:void(0);">about</a></li>
									<li><a href="javascript:void(0);">contact</a></li>
								</ul>
							</nav>
							<nav class="tg-cartsearch">
								<ul>
									<li>
										<a href="javascript:void(0);"><img src="images/icons/icon-03.png" alt="image destinations"></a>
										<div class="tg-cartitems">
											<div class="tg-cartlistitems">
												<h3>Shopping Cart</h3>
												<div class="tg-cartitem">
													<figure class="tg-itemimg"><img src="images/products/img-11.jpg" alt="image description"></figure>
													<div class="tg-contentbox">
														<div class="tg-producthead">
															<em>x 2</em>
															<h4><a href="javascript:void(0);">Switzerland – 12 Days<span>Hiking Tour</span></a></h4>
														</div>
														<span>$600</span>
													</div>
												</div>
												<div class="tg-cartitem">
													<figure class="tg-itemimg"><img src="images/products/img-11.jpg" alt="image description"></figure>
													<div class="tg-contentbox">
														<div class="tg-producthead">
															<em>x 2</em>
															<h4><a href="javascript:void(0);">Switzerland – 12 Days<span>Hiking Tour</span></a></h4>
														</div>
														<span>$600</span>
													</div>
												</div>
												<div class="tg-subtotal">
													<h2>Subtotal</h2>
													<span>$830</span>
												</div>
											</div>
											<div class="tg-btnarea">
												<a class="tg-btn" href="#"><span>view cart</span></a>
											</div>
										</div>
									</li>
									<li><a href="#tg-search"><img src="images/icons/icon-04.png" alt="image destinations"></a></li>
								</ul>
							</nav>
						</div>
					</div>
					<div class="tg-navigationarea tg-headerfixed">
						<strong class="tg-logo"><a href="index.html"><img src="images/logo.png" alt="company logo here"></a></strong>
						<div class="tg-socialsignin">
							<ul class="tg-socialicons">
								<li><a href="javascript:void(0);"><i class="icon-facebook-logo-outline"></i></a></li>
								<li><a href="javascript:void(0);"><i class="icon-instagram-social-outlined-logo"></i></a></li>
								<li><a href="javascript:void(0);"><i class="icon-twitter-social-outlined-logo"></i></a></li>
							</ul>
							<div class="tg-userbox">
								<a id="tg-btnsignin" class="tg-btn" href="#tg-loginsingup"><span>sign in</span></a>
								<div class="dropdown tg-dropdown">
									<button class="tg-btndropdown" id="tg-dropdowndashboard" type="button" data-toggle="dropdown">
										<img src="images/author/img-01.jpg" alt="image description">
										<span>john smith</span>
										<i class="fa fa-caret-down"></i>
									</button>
									<ul class="dropdown-menu tg-dropdownusermenu" aria-labelledby="tg-dropdowndashboard">
										<li><a href="dashboard.html">Dashboard</a></li>
										<li><a href="dashboard.html">Edit Profile</a></li>
										<li><a href="javascript:void(0);">Sign Out</a></li>
									</ul>
								</div>
							</div>
						</div>
						<nav id="tg-nav" class="tg-nav">
							<div class="navbar-header">
								<a href="#menu" class="navbar-toggle collapsed">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</a>
							</div>
							<div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
								<ul>
									<li class="menu-item-has-children"><a href="javascript:void(0);">Home</a>
										<ul class="sub-menu">
											<li><a href="index.html">Home ~ Modern</a></li>
											<li><a href="indexv2.html">Home ~ Full Screen</a></li>
											<li><a href="indexv3.html">Home ~ Creative</a></li>
											<li><a href="indexv4.html">Home ~ Simple</a></li>
											<li><a href="indexv5.html">Home ~ Video</a></li>
										</ul>
									</li>
									<li><a href="destinations.html">destinations</a></li>
									<li class="menu-item-has-children menu-item-has-mega-menu current-menu-item"><a href="javascript:void(0);">listings</a>
										<div class="mega-menu">
											<ul>
												<li><a href="listingvone.html">list style one</a></li>
												<li class="current-menu-item"><a href="listingvtwo.html">list style two</a></li>
												<li><a href="listingvthree.html">list style three</a></li>
												<li><a href="listingvfour.html">list style four</a></li>
												<li><a href="listingvfive.html">list style five</a></li>
												<li><a href="listingvsix.html">list style six</a></li>
											</ul>
											<div class="tg-sliderarea">
												<h2>Popular Tours</h2>
												<div class="tg-trendingtripsslider tg-trendingtrips owl-carousel">
													<div class="item tg-trendingtrip">
														<figure>
															<a href="javascript:void(0);">
																<img src="images/tours/img-05.jpg" alt="image destinations">
																<div class="tg-hover">
																	<span class="tg-stars"><span></span></span>
																	<span class="tg-tourduration">7 Days</span>
																	<span class="tg-locationname">Paris</span>
																	<div class="tg-pricearea">
																		<span>from</span>
																		<h4>$600</h4>
																	</div>
																</div>
															</a>
														</figure>
													</div>
													<div class="item tg-trendingtrip">
														<figure>
															<a href="javascript:void(0);">
																<img src="images/tours/img-06.jpg" alt="image destinations">
																<div class="tg-hover">
																	<span class="tg-stars"><span></span></span>
																	<span class="tg-tourduration">7 Days</span>
																	<span class="tg-locationname">Paris</span>
																	<div class="tg-pricearea">
																		<span>from</span>
																		<h4>$600</h4>
																	</div>
																</div>
															</a>
														</figure>
													</div>
													<div class="item tg-trendingtrip">
														<figure>
															<a href="javascript:void(0);">
																<img src="images/tours/img-07.jpg" alt="image destinations">
																<div class="tg-hover">
																	<span class="tg-stars"><span></span></span>
																	<span class="tg-tourduration">7 Days</span>
																	<span class="tg-locationname">Paris</span>
																	<div class="tg-pricearea">
																		<span>from</span>
																		<h4>$600</h4>
																	</div>
																</div>
															</a>
														</figure>
													</div>
													<div class="item tg-trendingtrip">
														<figure>
															<a href="javascript:void(0);">
																<img src="images/tours/img-08.jpg" alt="image destinations">
																<div class="tg-hover">
																	<span class="tg-stars"><span></span></span>
																	<span class="tg-tourduration">7 Days</span>
																	<span class="tg-locationname">Paris</span>
																	<div class="tg-pricearea">
																		<span>from</span>
																		<h4>$600</h4>
																	</div>
																</div>
															</a>
														</figure>
													</div>
												</div>
											</div>
										</div>
									</li>
									<li class="menu-item-has-children"><a href="javascript:void(0);">pages</a>
										<ul class="sub-menu">
											<li><a href="faqs.html">FAQ’s</a></li>
											<li><a href="packages.html">Table</a></li>
											<li><a href="aboutus.html">About Us</a></li>
											<li><a href="contactus.html">Contact us</a></li>
											<li><a href="billingdetail.html">Billing Detail</a></li>
											<li><a href="404error.html">404 Error</a></li>
											<li><a href="comingsoon.html">Coming Soon</a></li>
											<li><a href="cart.html">cart</a></li>
											<li class="menu-item-has-children">
												<a href="javascript:void(0);">Tours</a>
												<ul class="sub-menu">
													<li><a href="tourcatagory.html">Tour Catagory</a></li>
													<li><a href="tourbookingdetail.html">Tour Detail</a></li>
													<li><a href="tourpaymentdetail.html">Tour Payment</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li><a href="shop.html">shop</a></li>
									<li><a href="blog.html">blog</a></li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</header>
		<!--************************************
				Header End
		*************************************-->
		<!--************************************
				Inner Banner Start
		*************************************-->
		<section class="tg-parallax tg-innerbanner" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-05.jpg">
			<div class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<h1>Listing Style 2</h1>
							<h2>Donec id elit non mi porta gravida at eget metus</h2>
							<ol class="tg-breadcrumb">
								<li><a href="javascript:void(0);">Home</a></li>
								<li class="tg-active">Listing</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--************************************
				Inner Banner End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-sectionspace tg-haslayout">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div id="tg-content" class="tg-content">
							<div class="tg-listing tg-listingvtwo">
								<div class="tg-sectiontitle">
									<h2>Europe Tours</h2>
								</div>
								<div class="clearfix"></div>
								<div class="row">
									<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
										<div class="tg-trendingtrip">
											<figure>
												<a href="tourbookingdetail.html">
													<img src="images/tours/img-19.jpg" alt="image destinations">
													<div class="tg-hover">
														<span class="tg-stars"><span></span></span>
														<span class="tg-tourduration">7 Days</span>
														<span class="tg-locationname">Paris</span>
														<div class="tg-pricearea">
															<span>from</span>
															<h4>$600</h4>
														</div>
													</div>
												</a>
											</figure>
											<div class="tg-populartourcontent">
												<div class="tg-populartourtitle">
													<h3><a href="tourbookingdetail.html">City Tours in Europe, Paris</a></h3>
												</div>
												<div class="tg-description">
													<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh...</p>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
										<div class="tg-trendingtrip">
											<figure>
												<a href="tourbookingdetail.html">
													<img src="images/tours/img-20.jpg" alt="image destinations">
													<div class="tg-hover">
														<span class="tg-stars"><span></span></span>
														<span class="tg-tourduration">7 Days</span>
														<span class="tg-locationname">Paris</span>
														<div class="tg-pricearea">
															<span>from</span>
															<h4>$600</h4>
														</div>
													</div>
												</a>
											</figure>
											<div class="tg-populartourcontent">
												<div class="tg-populartourtitle">
													<h3><a href="tourbookingdetail.html">Best of Canada Tours and Travel</a></h3>
												</div>
												<div class="tg-description">
													<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh...</p>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
										<div class="tg-trendingtrip">
											<figure>
												<a href="tourbookingdetail.html">
													<img src="images/tours/img-21.jpg" alt="image destinations">
													<div class="tg-hover">
														<span class="tg-stars"><span></span></span>
														<span class="tg-tourduration">7 Days</span>
														<span class="tg-locationname">Paris</span>
														<div class="tg-pricearea">
															<span>from</span>
															<h4>$600</h4>
														</div>
													</div>
												</a>
											</figure>
											<div class="tg-populartourcontent">
												<div class="tg-populartourtitle">
													<h3><a href="tourbookingdetail.html">Italy – 3 Days in Rome, Golden Gate</a></h3>
												</div>
												<div class="tg-description">
													<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh...</p>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
										<div class="tg-trendingtrip">
											<figure>
												<a href="javascript:void(0);">
													<img src="images/tours/img-22.jpg" alt="image destinations">
													<div class="tg-hover">
														<span class="tg-stars"><span></span></span>
														<span class="tg-tourduration">7 Days</span>
														<span class="tg-locationname">Paris</span>
														<div class="tg-pricearea">
															<span>from</span>
															<h4>$600</h4>
														</div>
													</div>
												</a>
											</figure>
											<div class="tg-populartourcontent">
												<div class="tg-populartourtitle">
													<h3><a href="javascript:void(0);">City Tours in Europe, Paris</a></h3>
												</div>
												<div class="tg-description">
													<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh...</p>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
										<div class="tg-trendingtrip">
											<figure>
												<a href="javascript:void(0);">
													<img src="images/tours/img-23.jpg" alt="image destinations">
													<div class="tg-hover">
														<span class="tg-stars"><span></span></span>
														<span class="tg-tourduration">7 Days</span>
														<span class="tg-locationname">Paris</span>
														<div class="tg-pricearea">
															<span>from</span>
															<h4>$600</h4>
														</div>
													</div>
												</a>
											</figure>
											<div class="tg-populartourcontent">
												<div class="tg-populartourtitle">
													<h3><a href="javascript:void(0);">Best of Canada Tours and Travel</a></h3>
												</div>
												<div class="tg-description">
													<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh...</p>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
										<div class="tg-trendingtrip">
											<figure>
												<a href="javascript:void(0);">
													<img src="images/tours/img-24.jpg" alt="image destinations">
													<div class="tg-hover">
														<span class="tg-stars"><span></span></span>
														<span class="tg-tourduration">7 Days</span>
														<span class="tg-locationname">Paris</span>
														<div class="tg-pricearea">
															<span>from</span>
															<h4>$600</h4>
														</div>
													</div>
												</a>
											</figure>
											<div class="tg-populartourcontent">
												<div class="tg-populartourtitle">
													<h3><a href="javascript:void(0);">Italy – 3 Days in Rome, Golden Gate</a></h3>
												</div>
												<div class="tg-description">
													<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh...</p>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
										<div class="tg-trendingtrip">
											<figure>
												<a href="javascript:void(0);">
													<img src="images/tours/img-25.jpg" alt="image destinations">
													<div class="tg-hover">
														<span class="tg-stars"><span></span></span>
														<span class="tg-tourduration">7 Days</span>
														<span class="tg-locationname">Paris</span>
														<div class="tg-pricearea">
															<span>from</span>
															<h4>$600</h4>
														</div>
													</div>
												</a>
											</figure>
											<div class="tg-populartourcontent">
												<div class="tg-populartourtitle">
													<h3><a href="javascript:void(0);">City Tours in Europe, Paris</a></h3>
												</div>
												<div class="tg-description">
													<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh...</p>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
										<div class="tg-trendingtrip">
											<figure>
												<a href="javascript:void(0);">
													<img src="images/tours/img-26.jpg" alt="image destinations">
													<div class="tg-hover">
														<span class="tg-stars"><span></span></span>
														<span class="tg-tourduration">7 Days</span>
														<span class="tg-locationname">Paris</span>
														<div class="tg-pricearea">
															<span>from</span>
															<h4>$600</h4>
														</div>
													</div>
												</a>
											</figure>
											<div class="tg-populartourcontent">
												<div class="tg-populartourtitle">
													<h3><a href="javascript:void(0);">Best of Canada Tours and Travel</a></h3>
												</div>
												<div class="tg-description">
													<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh...</p>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
										<div class="tg-trendingtrip">
											<figure>
												<a href="javascript:void(0);">
													<img src="images/tours/img-27.jpg" alt="image destinations">
													<div class="tg-hover">
														<span class="tg-stars"><span></span></span>
														<span class="tg-tourduration">7 Days</span>
														<span class="tg-locationname">Paris</span>
														<div class="tg-pricearea">
															<span>from</span>
															<h4>$600</h4>
														</div>
													</div>
												</a>
											</figure>
											<div class="tg-populartourcontent">
												<div class="tg-populartourtitle">
													<h3><a href="javascript:void(0);">Italy – 3 Days in Rome, Golden Gate</a></h3>
												</div>
												<div class="tg-description">
													<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh...</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="clearfix"></div>
								<nav class="tg-pagination">
									<ul>
										<li class="tg-active"><a href="javascript:void(0);">1</a></li>
										<li><a href="javascript:void(0);">2</a></li>
										<li><a href="javascript:void(0);">3</a></li>
										<li><a href="javascript:void(0);">4</a></li>
										<li class="tg-nextpage"><a href="javascript:void(0);"><i class="fa fa-angle-right"></i></a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!--************************************
				Main End
		*************************************-->
		<!--************************************
				Footer Start
		*************************************-->
		<footer id="tg-footer" class="tg-footer tg-haslayout">
			<div class="tg-fourcolumns">
				<div class="container">
					<div class="row">
						<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
							<div class="tg-footercolumn tg-widget tg-widgettext">
								<div class="tg-widgettitle">
									<h3>About Travlu</h3>
								</div>
								<div class="tg-widgetcontent">
									<div class="tg-description">
										<p>Nunc cursus liero purs ac cogue arcu cursus ut sed vitae pulvinar massaidp nequetiam lore elerisque</p>
									</div>
									<span>1-800-321-6543</span>
									<a href="mailto:info@travlu.com">info@travlu.com</a>
									<ul class="tg-socialicons tg-socialiconsvtwo">
										<li><a href="javascript:void(0);"><i class="icon-facebook-logo-outline"></i></a></li>
										<li><a href="javascript:void(0);"><i class="icon-instagram-social-outlined-logo"></i></a></li>
										<li><a href="javascript:void(0);"><i class="icon-twitter-social-outlined-logo"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
							<div class="tg-footercolumn tg-widget tg-widgettravelunews">
								<div class="tg-widgettitle">
									<h3>Travelu News</h3>
								</div>
								<div class="tg-widgetcontent">
									<ul>
										<li>
											<figure>
												<a href="javascript:void(0);"><img src="images/thumbnail/img-01.jpg" alt="image destinations"></a>
											</figure>
											<div class="tg-newcontent">
												<h4><a href="javascript:void(0);">Bungee Jumping Trip</a></h4>
												<div class="tg-description">
													<p>Nunc cursus libero purus congue arcu vitae pulvinar</p>
												</div>
												<time datetime="2017-06-06">Feb 22, 2017</time>
											</div>
										</li>
										<li>
											<figure>
												<a href="javascript:void(0);"><img src="images/thumbnail/img-02.jpg" alt="image destinations"></a>
											</figure>
											<div class="tg-newcontent">
												<h4><a href="javascript:void(0);">Trip to White Castle</a></h4>
												<div class="tg-description">
													<p>Nunc cursus libero purus congue arcu vitae pulvinar</p>
												</div>
												<time datetime="2017-06-06">Feb 22, 2017</time>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
							<div class="tg-footercolumn tg-widget tg-widgetdestinations">
								<div class="tg-widgettitle">
									<h3>Top Destinations</h3>
								</div>
								<div class="tg-widgetcontent">
									<ul>
										<li><a href="javascript:void(0);">Bayonne, Melbourne</a></li>
										<li><a href="javascript:void(0);">Greenville, New Jersey</a></li>
										<li><a href="javascript:void(0);">The Heights, London</a></li>
										<li><a href="javascript:void(0);">West Side, New York</a></li>
										<li><a href="javascript:void(0);">Upper East Side, New York</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
							<div class="tg-footercolumn tg-widget tg-widgetnewsletter">
								<div class="tg-widgettitle">
									<h3>Newsletter</h3>
								</div>
								<div class="tg-widgetcontent">
									<div class="tg-description"><p>Sign up for our mailing list to get latest updates and offers</p></div>
									<form class="tg-formtheme tg-formnewsletter">
										<fieldset>
											<input type="email" name="email" class="form-control" placeholder="Your Email">
											<button type="submit"><img src="images/icons/icon-08.png" alt="image destinations"></button>
										</fieldset>
									</form>
									<span>We respect your privacy</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tg-footerbar">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<p>Copyright &copy; 2017 Travlu. All  rights reserved</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!--************************************
				Footer End
		*************************************-->
	</div>
	<!--************************************
			Wrapper End
	*************************************-->
	<!--************************************
			Search Start
	*************************************-->
	<div id="tg-search" class="tg-search">
		<button type="button" class="close"><i class="icon-cross"></i></button>
		<form>
			<fieldset>
				<div class="form-group">
					<input type="search" name="search" class="form-control" value="" placeholder="search here">
					<button type="submit" class="tg-btn"><span class="icon-search2"></span></button>
				</div>
			</fieldset>
		</form>
		<ul class="tg-destinations">
			<li>
				<a href="javascript:void(0);">
					<h3>Europe</h3>
					<em>(05)</em>
				</a>
			</li>
			<li>
				<a href="javascript:void(0);">
					<h3>Africa</h3>
					<em>(15)</em>
				</a>
			</li>
			<li>
				<a href="javascript:void(0);">
					<h3>Asia</h3>
					<em>(12)</em>
				</a>
			</li>
			<li>
				<a href="javascript:void(0);">
					<h3>Oceania</h3>
					<em>(02)</em>
				</a>
			</li>
			<li>
				<a href="javascript:void(0);">
					<h3>North America</h3>
					<em>(08)</em>
				</a>
			</li>
		</ul>
	</div>
	<!--************************************
			Search End
	*************************************-->
	<!--************************************
			Login Singup Start
	*************************************-->
	<div id="tg-loginsingup" class="tg-loginsingup" data-vide-bg="poster: images/singup-img.jpg" data-vide-options="position: 0% 50%">
		<div class="tg-contentarea tg-themescrollbar">
			<div class="tg-scrollbar">
				<button type="button" class="close">x</button>
				<div class="tg-logincontent">
					<nav id="tg-loginnav" class="tg-loginnav">
						<ul>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Contact Us</a></li>
							<li><a href="#">My Account</a></li>
							<li><a href="#">My Wishlist</a></li>
						</ul>
					</nav>
					<div class="tg-themetabs">
						<ul class="tg-navtbs" role="tablist">
							<li role="presentation" class="active"><a href="#home" data-toggle="tab">Already Registered</a></li>
							<li role="presentation"><a href="#profile" data-toggle="tab">New to Travleu ?</a></li>
						</ul>
						<div class="tg-tabcontent tab-content">
							<div role="tabpanel" class="tab-pane active fade in" id="home">
								<form class="tg-formtheme tg-formlogin">
									<fieldset>
										<div class="form-group">
											<label>Name or Email <sup>*</sup></label>
											<input type="text" name="firstname" class="form-control" placeholder="">
										</div>
										<div class="form-group">
											<label>Password <sup>*</sup></label>
											<input type="password" name="password" class="form-control" placeholder="">
										</div>
										<div class="form-group">
											<div class="tg-checkbox">
												<input type="checkbox" name="remember" id="rememberpass">
												<label for="rememberpass">Remember Me</label>
											</div>
											<span><a href="#">Lost your password?</a></span>
										</div>
										<button class="tg-btn tg-btn-lg"><span>update profile</span></button>
									</fieldset>
								</form>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="profile">
								<form class="tg-formtheme tg-formlogin">
									<fieldset>
										<div class="form-group">
											<label>Name or Email <sup>*</sup></label>
											<input type="text" name="firstname" class="form-control" placeholder="">
										</div>
										<div class="form-group">
											<label>Password <sup>*</sup></label>
											<input type="password" name="password" class="form-control" placeholder="">
										</div>
										<div class="form-group">
											<div class="tg-checkbox">
												<input type="checkbox" name="remember" id="remember">
												<label for="remember">Remember Me</label>
											</div>
											<span><a href="#">Lost your password?</a></span>
										</div>
										<button class="tg-btn tg-btn-lg"><span>update profile</span></button>
									</fieldset>
								</form>
							</div>
						</div>
					</div>
					<div class="tg-shareor"><span>or</span></div>
					<div class="tg-signupwith">
						<h2>Sign in With...</h2>
						<ul class="tg-sharesocialicon">
							<li class="tg-facebook"><a href="#"><i class="icon-facebook-1"></i><span>Facebook</span></a></li>
							<li class="tg-twitter"><a href="#"><i class="icon-twitter-1"></i><span>Twitter</span></a></li>
							<li class="tg-googleplus"><a href="#"><i class="icon-google4"></i><span>Google+</span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--************************************
			Login Singup End
	*************************************-->
	<script src="js/vendor/jquery-library.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&language=en"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/jquery-scrolltofixed.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.mmenu.all.js"></script>
	<script src="js/packery.pkgd.min.js"></script>
	<script src="js/jquery.vide.min.js"></script>
	<script src="js/scrollbar.min.js"></script>
	<script src="js/prettyPhoto.js"></script>
	<script src="js/countdown.js"></script>
	<script src="js/parallax.js"></script>
	<script src="js/gmap3.js"></script>
	<script src="js/main.js"></script>
</body>
</html>