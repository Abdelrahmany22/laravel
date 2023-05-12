<?php
use App\Models\Category;

$categories = Category::all(); 

foreach ($categories as $data) {
    # code...
    // echo $data['id'];
}
?>


<!DOCTYPE html>
<html lang="zxx">

<head>
	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>FreshMart - Organic, Fresh Food, Farm Store HTML Template</title>

	<meta name="keywords" content="Organic, Fresh Food, Farm Store">
	<meta name="description" content="FreshMart - Organic, Fresh Food, Farm Store HTML Template">
	<meta name="author" content="tivatheme">

	<!-- Favicon -->
	<link rel="shortcut icon" href="img/favicon.png" type="image/png">

	<!-- Mobile Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:300,400,700" rel="stylesheet">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="{{ asset('assets/frontend/libs/bootstrap/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/frontend/libs/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/frontend/libs/font-material/css/material-design-iconic-font.min.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/frontend/libs/nivo-slider/css/nivo-slider.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/frontend/libs/nivo-slider/css/animate.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/frontend/libs/nivo-slider/css/style.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/frontend/libs/owl.carousel/assets/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/frontend/libs/slider-range/css/jslider.css')}}">

	<!-- Template CSS -->
	<link rel="stylesheet" href="{{asset('assets/frontend/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('assets/frontend/css/reponsive.css')}}">
</head>

<body class="home home-3">
	<div id="all">
		<!-- Header -->
		<header id="header">
			<div class="container">
				<div class="header-top">
					<div class="row align-items-center">
						<!-- Header Left -->
						<div class="col-lg-5 col-md-5 col-sm-12">
							<!-- Main Menu -->
							<div id="main-menu">
								<ul class="menu">
									<li class="dropdown">
										<a href="index.html" title="Homepage">Home</a>
									</li>

									<li class="dropdown">
										<a href="product-grid-left-sidebar.html" title="Product">Product</a>
										<div class="dropdown-menu">
											<ul>
                                                @for ($i=0 ; $i <count($categories)-1 ; $i ++)  
                                               
                                                <?php
                                                $img=$categories[$i]['image'];
                                                ?>
												<li class="has-image">
													<img src="{{asset( 'assets/frontend/'.$categories[$i]->image )}}"
														alt="Product Category Image">
													<a href="product-grid-left-sidebar.html"
														title="Vegetables">{{$categories[$i]['name']}}</a>
												</li>
                                                @endfor
											</ul>
										</div>
									</li>

									<li class="dropdown">
										<a href="blog.html">Blog</a>

									</li>

									<li>
										<a href="about-us.html">About Us</a>
									</li>

									<li>
										<a href="page-contact.html">Contact</a>
									</li>
								</ul>
							</div>
						</div>

						<!-- Header Center -->
						<div class="col-lg-2 col-md-2 col-sm-12 header-center justify-content-center">
							<!-- Logo -->
							<div class="logo">
								<a href="home-3.html">
									<img class="img-responsive" src="{{asset('assets/frontend/img/logo.png')}}" alt="Logo">
								</a>
							</div>

							<span id="toggle-mobile-menu"><i class="zmdi zmdi-menu"></i></span>
						</div>


						<!-- Header Right -->
						<div
							class="col-lg-5 col-md-5 col-sm-12 header-right d-flex justify-content-end align-items-center">
							<!-- Search -->
							<div class="form-search">
								<form action="#" method="get">
									<input type="text" class="form-input" placeholder="Search">
									<button type="submit" class="fa fa-search"></button>
								</form>
							</div>

							<!-- Cart -->
							<div class="block-cart dropdown">
								<div class="cart-title">
									<i class="fa fa-shopping-basket" aria-hidden="true"></i>
									<span class="cart-count">2</span>
								</div>

								<div class="dropdown-content">
									<div class="cart-content">
										<table>
											<tbody>
												<tr>
													<td class="product-image">
														<a href="product-detail-left-sidebar.html">
															<img src="{{asset('assets/frontend/img/product/7.jpg')}}" alt="Product">
														</a>
													</td>
													<td>
														<div class="product-name">
															<a href="product-detail-left-sidebar.html">Organic
																Strawberry Fruits</a>
														</div>
														<div>
															2 x <span class="product-price">$28.98</span>
														</div>
													</td>
													<td class="action">
														<a class="remove" href="#">
															<i class="fa fa-trash-o" aria-hidden="true"></i>
														</a>
													</td>
												</tr>

												<tr>
													<td class="product-image">
														<a href="product-detail-left-sidebar.html">
															<img src="{{asset('assets/frontend/img/product/6.jpg')}}" alt="Product">
														</a>
													</td>
													<td>
														<div class="product-name">
															<a href="product-detail-left-sidebar.html">Organic
																Strawberry</a>
														</div>
														<div>
															1 x <span class="product-price">$35.00</span>
														</div>
													</td>
													<td class="action">
														<a class="remove" href="#">
															<i class="fa fa-trash-o" aria-hidden="true"></i>
														</a>
													</td>
												</tr>

												<tr class="total">
													<td>Total:</td>
													<td colspan="2">$92.96</td>
												</tr>

												<tr>
													<td colspan="3">
														<div class="cart-button">
															<a class="btn btn-primary" href="{{route('frontend.viewcart')}}"
																title="View Cart">View Cart</a>
															<a class="btn btn-primary" href="product-checkout.html"
																title="Checkout">Checkout</a>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>


							<!-- My Account -->
							<div class="my-account dropdown toggle-icon">
								<div class="dropdown-toggle" data-toggle="dropdown">
									<i class="zmdi zmdi-menu"></i>
								</div>
								<div class="dropdown-menu">
									<div class="item">
										<a href="#" title="Log in to your customer account"><i class="fa fa-cog"></i>My
											Account</a>
									</div>
									<div class="item">
										<a href="user-login.html" title="Log in to your customer account"><i
												class="fa fa-sign-in"></i>Login</a>
									</div>
									<div class="item">
										<a href="user-register.html" title="Register Account"><i
												class="fa fa-user"></i>Register</a>
									</div>
									<div class="item">
										<a href="#" title="My Wishlists"><i class="fa fa-heart"></i>My Wishlists</a>
									</div>
									<div class="item">
										<!-- Language -->
										<div class="language switcher">
											<a href="#" title="Language English" class="active"><img
													src="{{asset('assets/frontend/img/language-en.jpg')}}" alt="Language English"></a>
											<a href="#" title="Language French"><img src="{{asset('assets/frontend/img/language-fr.jpg')}}"
													alt="Language French"></a>
											<a href="#" title="Language Deutsch"><img src="{{asset('assets/frontend/img/language-de.jpg')}}"
													alt="Language Deutsch"></a>
										</div>

										<!-- Currency -->
										<div class="currency switcher">
											<a href="#" title="USD" class="active">USD</a>
											<a href="#" title="EUR">EUR</a>
											<a href="#" title="GBP">GBP</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>


		<!-- Main Content -->

		@yield('content')


		<!-- Footer -->
		<footer id="footer">
			<div class="footer">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<div class="footer-intro">
								<a href="home-3.html" class="logo-footer">
									<img src="{{asset('assets/frontend/img/logo-3.png')}}" alt="Logo">
								</a>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
									incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
									incididunt ut labore et dolore </p>
								<div class="social">
									<ul>
										<li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
										<li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
										<li><a href="#"><i class="zmdi zmdi-dribbble"></i></a></li>
										<li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
									</ul>
								</div>
							</div>
						</div>

						<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
							<div class="footer-top">
								<div class="row">
									<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer-col">
										<div class="block menu">
											<h2 class="block-title">Information</h2>

											<div class="block-content">
												<ul>
													<li><a href="#">Specials</a></li>
													<li><a href="#">New products</a></li>
													<li><a href="#">Best sellers</a></li>
													<li><a href="#">Terms and conditions</a></li>
												</ul>
											</div>
										</div>
									</div>

									<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer-col">
										<div class="block menu">
											<h2 class="block-title">About Us</h2>

											<div class="block-content">
												<ul>
													<li><a href="#">Who are we ?</a></li>
													<li><a href="#">Delivery and return</a></li>
													<li><a href="#">Size guide</a></li>
													<li><a href="#">Legal Mentions</a></li>
												</ul>
											</div>
										</div>
									</div>

									<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer-col">
										<div class="block menu">
											<h2 class="block-title">Your account</h2>

											<div class="block-content">
												<ul>
													<li><a href="#">My merchandise returns</a></li>
													<li><a href="#">My credit slips</a></li>
													<li><a href="#">My addresses</a></li>
													<li><a href="#">My personal info</a></li>
												</ul>
											</div>
										</div>
									</div>

									<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer-col">
										<div class="block menu">
											<h2 class="block-title">Customer Service</h2>

											<div class="block-content">
												<ul>
													<li><a href="#">Store Locator</a></li>
													<li><a href="#">Returns Policy</a></li>
													<li><a href="#">Order Tracking</a></li>
													<li><a href="#">Give Back Box</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="footer-bottom">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 footer-left">
										<div class="block newsletter">
											<h2 class="block-title">Newsletter</h2>

											<div class="block-content">
												<p class="description">Sign up for newsletter to receive special offers
													and exclusive news about FreshMart products</p>
												<form action="#" method="post">
													<input type="text" placeholder="Enter Your Email">
													<button type="submit" class="btn btn-primary">Subscribe</button>
												</form>
											</div>
										</div>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 footer-right">
										<div class="block text">
											<h2 class="block-title">Contact Us</h2>

											<div class="block-content">
												<div class="contact">
													<div class="item d-flex">
														<div>
															<i class="zmdi zmdi-home"></i>
														</div>
														<div>
															<span>123 Suspendis matti, VST District, NY Accums, North
																American</span>
														</div>
													</div>
													<div class="item d-flex">
														<div>
															<i class="zmdi zmdi-phone-in-talk"></i>
														</div>
														<div>
															<span>0123-456-78910<br>0987-654-32100</span>
														</div>
													</div>
													<div class="item d-flex">
														<div>
															<i class="zmdi zmdi-email"></i>
														</div>
														<div>
															<span><a
																	href="mailto:support@domain.com">support@domain.com</a><br><a
																	href="mailto:contact@domain.com">contact@domain.com</a></span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="footer-copyright">
								<div class="row">
									<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
										<div class="copyright"><a target="_blank"
												href="https://www.templateshub.net">Templates Hub</a></div>
									</div>
								</div>

								<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 align-right">
									<div class="payment">
										<img src="{{asset('assets/frontend/img/payment.png')}}" alt="Payment">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</div>
	</footer>

	<!-- Go Up button -->
	<div class="go-up">
		<a href="#">
			<i class="fa fa-long-arrow-up"></i>
		</a>
	</div>

	<!-- Page Loader -->
	<div id="page-preloader">
		<div class="page-loading">
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="dot"></div>
		</div>
	</div>
	</div>

	<!-- Vendor JS -->
	<script src="{{asset('assets/frontend/libs/jquery/jquery.js')}}"></script>
	<script src="{{asset('assets/frontend/libs/bootstrap/js/bootstrap.js')}}"></script>
	<script src="{{asset('assets/frontend/libs/jquery.countdown/jquery.countdown.js')}}"></script>
	<script src="{{asset('assets/frontend/libs/nivo-slider/js/jquery.nivo.slider.js')}}"></script>
	<script src="{{asset('assets/frontend/libs/owl.carousel/owl.carousel.min.js')}}"></script>
	<script src="{{asset('assets/frontend/libs/slider-range/js/tmpl.js')}}"></script>
	<script src="{{asset('assets/frontend/libs/slider-range/js/jquery.dependClass-0.1.js')}}"></script>
	<script src="{{asset('assets/frontend/libs/slider-range/js/draggable-0.1.js')}}"></script>
	<script src="{{asset('assets/frontend/libs/slider-range/js/jquery.slider.js')}}"></script>
	<script src="{{asset('assets/frontend/libs/elevatezoom/jquery.elevatezoom.js')}}"></script>

	<!-- Template CSS -->
	<script src="{{asset('assets/frontend/js/main.js')}}"></script>
</body>


</html>  