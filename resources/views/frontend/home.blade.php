@extends('frontend.layout.app')
@section('content')
<div id="content" class="site-content">
			<!-- Slideshow -->
			<div class="section slideshow">
				<div class="tiva-slideshow-wrapper">
					<div id="tiva-slideshow" class="nivoSlider">
						<a href="#">
							<img class="img-responsive" src="{{asset('assets/frontend/img/slideshow/home3-slideshow-1.jpg')}}" alt="Slideshow Image">
						</a>
						<a href="#">
							<img class="img-responsive" src="{{asset('assets/frontend/img/slideshow/home3-slideshow-2.jpg')}}" alt="Slideshow Image">
						</a>
						<a href="#">
							<img class="img-responsive" src="{{asset('assets/frontend/img/slideshow/home3-slideshow-3.jpg')}}" alt="Slideshow Image">
						</a>
					</div>
				</div>
			</div>


			<!-- Product - New Arrivals -->
			<div class="section products-block product-tab tab-2">
				<div class="block-title">
					<h2 class="title">New <span>Arrivals</span></h2>
					<div class="sub-title">Lorem ipsum dolor sit amet consectetur adipiscing elit eiusmod tempor</div>
				</div>

				<div class="block-content">
					<div class="container">
						<!-- Tab Navigation -->
						<div class="tab-nav">
							<ul>
                                @foreach ($categories as $category)
                                
								<li class="">
									<a data-toggle="tab" href="#products{{$category->id}}">
										<img src="{{asset('assets/frontend/' . $category->image)}}" alt="All Product">
										<span>{{$category->name}}</span>
									</a>
								</li>
                                @endforeach
							</ul>
						</div>

						<!-- Tab Content -->
						<div class="tab-content">
							<!-- All Products -->
							<div role="tabpanel" class="tab-pane fade in active " id="products6">
								<div class="products owl-theme owl-carousel">
								@foreach ($allproducts as $products)
								<div class="product-group">
										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="{{asset('assets/frontend/' . $products->image)}}" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
												{{	$products-> name}}
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$ {{$products->price }}</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="{{route('frontend.addToCart',$products->id)}}">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>
									</div>
									@endforeach
								
								</div>
							</div>

							<!-- Vegetables -->
							<div role="tabpanel" class="tab-pane fade" id="products1">
								<div class="products owl-theme owl-carousel">
								@foreach ($vegiproducts as $vproducts)
								<div class="product-group">
										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="{{asset('assets/frontend/' . $vproducts->image)}}" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
												{{	$vproducts-> name}}
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$ {{$vproducts->price }}</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>
									</div>
									@endforeach

									
								</div>
							</div>
							<!-- fruits -->
							<div role="tabpanel" class="tab-pane fade" id="products2">
								<div class="products owl-theme owl-carousel">
								@foreach ($fproducts as $vproducts)
								<div class="product-group">
										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="{{asset('assets/frontend/' . $vproducts->image)}}" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
												{{	$vproducts-> name}}
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$ {{$vproducts->price }}</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>
									</div>
									@endforeach

									
								</div>
							</div>
							<!-- Bread -->
							<div role="tabpanel" class="tab-pane fade" id="products3">
								<div class="products owl-theme owl-carousel">
								@foreach ($bproducts as $products)
								<div class="product-group">
										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="{{asset('assets/frontend/' . $products->image)}}" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
												{{	$products-> name}}
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$ {{$products->price }}</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>
									</div>
									@endforeach

								</div>
							</div>

							<!-- Juices -->
							<div role="tabpanel" class="tab-pane fade" id="products4">
								<div class="products owl-theme owl-carousel">
								@foreach ($jproducts as $products)
								<div class="product-group">
										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="{{asset('assets/frontend/' . $products->image)}}" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
												{{	$products-> name}}
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$ {{$products->price }}</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>
									</div>
									@endforeach
									
									</div>
								</div>
							</div>

							<!-- Tea -->
							<div role="tabpanel" class="tab-pane fade" id="products5">
								<div class="products owl-theme owl-carousel">
								@foreach ($tproducts as $products)
								<div class="product-group">
										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="{{asset('assets/frontend/' . $products->image)}}" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
												{{	$products-> name}}
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$ {{$products->price }}</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>
									</div>
									@endforeach
									</div>

									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


			<!-- Intro -->
			<div class="section intro">
				<div class="block-content">
					<div class="container">
						<div class="intro-content">
							<div class="row">
								<div class="title">Why Choose Us</div>
								<div class="col-lg-6 col-md-6 col-xs-6 item up-left">
									<h4>100% Natural</h4>
									<p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut
										labore et dolore magna aliqua.</p>
								</div>
								<div class="col-lg-6 col-md-6 col-xs-6 item up-right">
									<h4>Always Fresh</h4>
									<p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut
										labore et dolore magna aliqua.</p>
								</div>
								<div class="col-lg-6 col-md-6 col-xs-6 item down-left">
									<h4>Premium Quality</h4>
									<p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut
										labore et dolore magna aliqua.</p>
								</div>
								<div class="col-lg-6 col-md-6 col-xs-6 item down-right">
									<h4>Super Healthy</h4>
									<p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut
										labore et dolore magna aliqua.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


			<!-- Product -->
			<div class="two-column">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="section products-block category-double no-border">
							<div class="block-title">
								<h2 class="title">Featured <span>Products</span></h2>
								<div class="sub-title">Lorem ipsum dolor sit amet consectetur adipiscing</div>
							</div>

							<div class="block-content">
								<div class="products owl-theme owl-carousel">
									<div class="product-item">
										<div class="product-image">
											<a href="product-detail-left-sidebar.html">
												<img src="{{asset('assets/frontend/img/product/4.jpg')}}" alt="Product Image">
											</a>
										</div>

										<div class="product-title">
											<a href="product-detail-left-sidebar.html">
												Organic Strawberry Fruits
											</a>
										</div>

										<div class="product-rating">
											<div class="star on"></div>
											<div class="star on"></div>
											<div class="star on "></div>
											<div class="star on"></div>
											<div class="star"></div>
										</div>

										<div class="product-price">
											<span class="sale-price">$80.00</span>
											<span class="base-price">$90.00</span>
										</div>

										<div class="product-buttons">
											<a class="add-to-cart" href="#">
												<i class="fa fa-shopping-basket" aria-hidden="true"></i>
											</a>

											<a class="add-wishlist" href="#">
												<i class="fa fa-heart" aria-hidden="true"></i>
											</a>

											<a class="quickview" href="#">
												<i class="fa fa-eye" aria-hidden="true"></i>
											</a>
										</div>
									</div>

									<div class="product-item">
										<div class="product-image">
											<a href="product-detail-left-sidebar.html">
												<img src="{{asset('assets/frontend/img/product/8.jpg')}}" alt="Product Image">
											</a>
										</div>

										<div class="product-title">
											<a href="product-detail-left-sidebar.html">
												Organic Strawberry Fruits
											</a>
										</div>

										<div class="product-rating">
											<div class="star on"></div>
											<div class="star on"></div>
											<div class="star on "></div>
											<div class="star on"></div>
											<div class="star"></div>
										</div>

										<div class="product-price">
											<span class="sale-price">$120.00</span>
										</div>

										<div class="product-buttons">
											<a class="add-to-cart" href="#">
												<i class="fa fa-shopping-basket" aria-hidden="true"></i>
											</a>

											<a class="add-wishlist" href="#">
												<i class="fa fa-heart" aria-hidden="true"></i>
											</a>

											<a class="quickview" href="#">
												<i class="fa fa-eye" aria-hidden="true"></i>
											</a>
										</div>
									</div>

									<div class="product-item">
										<div class="product-image">
											<a href="product-detail-left-sidebar.html">
												<img src="{{asset('assets/frontend/img/product/14.jpg')}}" alt="Product Image">
											</a>
										</div>

										<div class="product-title">
											<a href="product-detail-left-sidebar.html">
												Organic Strawberry Fruits
											</a>
										</div>

										<div class="product-rating">
											<div class="star on"></div>
											<div class="star on"></div>
											<div class="star on "></div>
											<div class="star on"></div>
											<div class="star"></div>
										</div>

										<div class="product-price">
											<span class="sale-price">$80.00</span>
											<span class="base-price">$90.00</span>
										</div>

										<div class="product-buttons">
											<a class="add-to-cart" href="#">
												<i class="fa fa-shopping-basket" aria-hidden="true"></i>
											</a>

											<a class="add-wishlist" href="#">
												<i class="fa fa-heart" aria-hidden="true"></i>
											</a>

											<a class="quickview" href="#">
												<i class="fa fa-eye" aria-hidden="true"></i>
											</a>
										</div>
									</div>

									<div class="product-item">
										<div class="product-image">
											<a href="product-detail-left-sidebar.html">
												<img src="{{asset('assets/frontend/img/product/6.jpg')}}" alt="Product Image">
											</a>
										</div>

										<div class="product-title">
											<a href="product-detail-left-sidebar.html">
												Organic Strawberry Fruits
											</a>
										</div>

										<div class="product-rating">
											<div class="star on"></div>
											<div class="star on"></div>
											<div class="star on "></div>
											<div class="star on"></div>
											<div class="star"></div>
										</div>

										<div class="product-price">
											<span class="sale-price">$120.00</span>
										</div>

										<div class="product-buttons">
											<a class="add-to-cart" href="#">
												<i class="fa fa-shopping-basket" aria-hidden="true"></i>
											</a>

											<a class="add-wishlist" href="#">
												<i class="fa fa-heart" aria-hidden="true"></i>
											</a>

											<a class="quickview" href="#">
												<i class="fa fa-eye" aria-hidden="true"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="section products-block category-double no-border">
							<div class="block-title">
								<h2 class="title">Best <span>Sellers</span></h2>
								<div class="sub-title">Lorem ipsum dolor sit amet consectetur adipiscing</div>
							</div>

							<div class="block-content">
								<div class="products owl-theme owl-carousel">
									<div class="product-item">
										<div class="product-image">
											<a href="product-detail-left-sidebar.html">
												<img src="{{asset('assets/frontend/img/product/16.jpg')}}" alt="Product Image">
											</a>
										</div>

										<div class="product-title">
											<a href="product-detail-left-sidebar.html">
												Organic Strawberry Fruits
											</a>
										</div>

										<div class="product-rating">
											<div class="star on"></div>
											<div class="star on"></div>
											<div class="star on "></div>
											<div class="star on"></div>
											<div class="star"></div>
										</div>

										<div class="product-price">
											<span class="sale-price">$80.00</span>
											<span class="base-price">$90.00</span>
										</div>

										<div class="product-buttons">
											<a class="add-to-cart" href="#">
												<i class="fa fa-shopping-basket" aria-hidden="true"></i>
											</a>

											<a class="add-wishlist" href="#">
												<i class="fa fa-heart" aria-hidden="true"></i>
											</a>

											<a class="quickview" href="#">
												<i class="fa fa-eye" aria-hidden="true"></i>
											</a>
										</div>
									</div>

									<div class="product-item">
										<div class="product-image">
											<a href="product-detail-left-sidebar.html">
												<img src="{{asset('assets/frontend/img/product/30.jpg')}}" alt="Product Image">
											</a>
										</div>

										<div class="product-title">
											<a href="product-detail-left-sidebar.html">
												Organic Strawberry Fruits
											</a>
										</div>

										<div class="product-rating">
											<div class="star on"></div>
											<div class="star on"></div>
											<div class="star on "></div>
											<div class="star on"></div>
											<div class="star"></div>
										</div>

										<div class="product-price">
											<span class="sale-price">$120.00</span>
										</div>

										<div class="product-buttons">
											<a class="add-to-cart" href="#">
												<i class="fa fa-shopping-basket" aria-hidden="true"></i>
											</a>

											<a class="add-wishlist" href="#">
												<i class="fa fa-heart" aria-hidden="true"></i>
											</a>

											<a class="quickview" href="#">
												<i class="fa fa-eye" aria-hidden="true"></i>
											</a>
										</div>
									</div>

									<div class="product-item">
										<div class="product-image">
											<a href="product-detail-left-sidebar.html">
												<img src="{{asset('assets/frontend/img/product/17.jpg')}}" alt="Product Image">
											</a>
										</div>

										<div class="product-title">
											<a href="product-detail-left-sidebar.html">
												Organic Strawberry Fruits
											</a>
										</div>

										<div class="product-rating">
											<div class="star on"></div>
											<div class="star on"></div>
											<div class="star on "></div>
											<div class="star on"></div>
											<div class="star"></div>
										</div>

										<div class="product-price">
											<span class="sale-price">$80.00</span>
											<span class="base-price">$90.00</span>
										</div>

										<div class="product-buttons">
											<a class="add-to-cart" href="#">
												<i class="fa fa-shopping-basket" aria-hidden="true"></i>
											</a>

											<a class="add-wishlist" href="#">
												<i class="fa fa-heart" aria-hidden="true"></i>
											</a>

											<a class="quickview" href="#">
												<i class="fa fa-eye" aria-hidden="true"></i>
											</a>
										</div>
									</div>

									<div class="product-item">
										<div class="product-image">
											<a href="product-detail-left-sidebar.html">
												<img src="{{asset('assets/frontend/img/product/20.jpg')}}" alt="Product Image">
											</a>
										</div>

										<div class="product-title">
											<a href="product-detail-left-sidebar.html">
												Organic Strawberry Fruits
											</a>
										</div>

										<div class="product-rating">
											<div class="star on"></div>
											<div class="star on"></div>
											<div class="star on "></div>
											<div class="star on"></div>
											<div class="star"></div>
										</div>

										<div class="product-price">
											<span class="sale-price">$120.00</span>
										</div>

										<div class="product-buttons">
											<a class="add-to-cart" href="#">
												<i class="fa fa-shopping-basket" aria-hidden="true"></i>
											</a>

											<a class="add-wishlist" href="#">
												<i class="fa fa-heart" aria-hidden="true"></i>
											</a>

											<a class="quickview" href="#">
												<i class="fa fa-eye" aria-hidden="true"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


			<!-- Banners -->
			<div class="section banners">
				<div class="row margin-0">
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 padding-0">
						<div class="banner-item">
							<div class="text">
								<h3>Tomato and Pepper</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
									incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
									exercitation ullamco laboris nisi ut aliquip</p>
								<a class="button" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i>SHOP
									NOW</a>
							</div>
							<div class="image-mask"></div>
							<img class="img-responsive" src="{{asset('assets/frontend/img/banner/home3-banner-1.jpg')}}" alt="Banner">
						</div>
					</div>

					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 padding-0">
						<div class="row margin-0">
							<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 padding-0">
								<div class="banner-item">
									<div class="text">
										<h3>Tomato and Pepper</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
										<a class="button" href="#"><i class="fa fa-shopping-cart"
												aria-hidden="true"></i>SHOP NOW</a>
									</div>
									<div class="image-mask"></div>
									<img class="img-responsive" src="{{asset('assets/frontend/img/banner/home3-banner-2.jpg')}}" alt="Banner">
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 padding-0">
								<div class="banner-item">
									<div class="text">
										<h3>Tomato and Pepper</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
										<a class="button" href="#"><i class="fa fa-shopping-cart"
												aria-hidden="true"></i>SHOP NOW</a>
									</div>
									<div class="image-mask"></div>
									<img class="img-responsive" src="{{asset('assets/frontend/img/banner/home3-banner-3.jpg')}}" alt="Banner">
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 padding-0">
								<div class="banner-item">
									<div class="text">
										<h3>Tomato and Pepper</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
										<a class="button" href="#"><i class="fa fa-shopping-cart"
												aria-hidden="true"></i>SHOP NOW</a>
									</div>
									<div class="image-mask"></div>
									<img class="img-responsive" src="{{asset('assets/frontend/img/banner/home3-banner-4.jpg')}}" alt="Banner">
								</div>
							</div>
							<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 padding-0">
								<div class="banner-item">
									<div class="text">
										<h3>Tomato and Pepper</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
										<a class="button" href="#"><i class="fa fa-shopping-cart"
												aria-hidden="true"></i>SHOP NOW</a>
									</div>
									<div class="image-mask"></div>
									<img class="img-responsive" src="{{asset('assets/frontend/img/banner/home3-banner-5.jpg')}}" alt="Banner">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


			<!-- Latest News -->
			<div class="section latest-news layout-2">
				<div class="block-title">
					<h2 class="title">Our <span>Blog</span></h2>
					<div class="sub-title">Lorem ipsum dolor sit amet consectetur</div>
				</div>

				<div class="block-content">
					<div class="container">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
								<div class="blog-item">
									<div class="blog-image">
										<a href="blog-detail.html" class="zoom-effect">
											<img src="{{asset('assets/frontend/img/blog/blog-1.jpg')}}" alt="Blog Image">
										</a>
									</div>
									<div class="blog-info">
										<div class="blog-time">
											<span><i class="zmdi zmdi-comments"></i>13 comment</span>
											<span><i class="zmdi zmdi-calendar-note"></i>20 APRIl 2017</span>
										</div>
										<div class="blog-title"><a href="blog-detail.html">5 Best fruits to make you
												fresh and healthy</a></div>
										<div class="blog-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
											sed diam nonummy...</div>
										<div class="readmore"><a href="blog-detail.html">Read more</a></div>
									</div>
								</div>
							</div>

							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
								<div class="blog-item">
									<div class="blog-image">
										<a href="blog-detail.html" class="zoom-effect">
											<img src="{{asset('assets/frontend/img/blog/blog-2.jpg')}}" alt="Blog Image">
										</a>
									</div>
									<div class="blog-info">
										<div class="blog-time">
											<span><i class="zmdi zmdi-comments"></i>13 comment</span>
											<span><i class="zmdi zmdi-calendar-note"></i>20 APRIl 2017</span>
										</div>
										<div class="blog-title"><a href="blog-detail.html">5 Best fruits to make you
												fresh and healthy</a></div>
										<div class="blog-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
											sed diam nonummy...</div>
										<div class="readmore"><a href="blog-detail.html">Read more</a></div>
									</div>
								</div>
							</div>

							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
								<div class="blog-item">
									<div class="blog-image">
										<a href="blog-detail.html" class="zoom-effect">
											<img src="{{asset('assets/frontend/img/blog/blog-3.jpg')}}" alt="Blog Image">
										</a>
									</div>
									<div class="blog-info">
										<div class="blog-time">
											<span><i class="zmdi zmdi-comments"></i>13 comment</span>
											<span><i class="zmdi zmdi-calendar-note"></i>20 APRIl 2017</span>
										</div>
										<div class="blog-title"><a href="blog-detail.html">5 Best fruits to make you
												fresh and healthy</a></div>
										<div class="blog-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
											sed diam nonummy...</div>
										<div class="readmore"><a href="blog-detail.html">Read more</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


			<!-- Testimonial -->
			<div class="section testimonial layout-2">
				<div class="container">
					<div class="row">
						<div class="testimonial-wrap owl-theme owl-carousel">
							<div class="item">
								<div class="image"><img src="{{asset('assets/frontend/img/testimonial-1.png')}}" alt=""></div>
								<div class="content"><i class="fa fa-quote-left" aria-hidden="true"></i> Proin gravida
									nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis bibendum auctor, nisi
									elit consequat ipsum, nec sagittis sem nibh id elit.”</div>
								<div class="name">WILLIAM JAMES</div>
								<div class="job">Hairstyle</div>
							</div>

							<div class="item">
								<div class="image"><img src="{{asset('assets/frontend/img/testimonial-2.png')}}" alt=""></div>
								<div class="content"><i class="fa fa-quote-left" aria-hidden="true"></i> Proin gravida
									nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis bibendum auctor, nisi
									elit consequat ipsum, nec sagittis sem nibh id elit.”</div>
								<div class="name">WILLIAM JAMES</div>
								<div class="job">Hairstyle</div>
							</div>

							<div class="item">
								<div class="image"><img src="{{asset('assets/frontend/img/testimonial-3.png')}}" alt=""></div>
								<div class="content"><i class="fa fa-quote-left" aria-hidden="true"></i> Proin gravida
									nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis bibendum auctor, nisi
									elit consequat ipsum, nec sagittis sem nibh id elit.”</div>
								<div class="name">WILLIAM JAMES</div>
								<div class="job">Hairstyle</div>
							</div>

							<div class="item">
								<div class="image"><img src="{{asset('assets/frontend/img/testimonial-2.png')}}" alt=""></div>
								<div class="content"><i class="fa fa-quote-left" aria-hidden="true"></i> Proin gravida
									nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis bibendum auctor, nisi
									elit consequat ipsum, nec sagittis sem nibh id elit.”</div>
								<div class="name">WILLIAM JAMES</div>
								<div class="job">Hairstyle</div>
							</div>

							<div class="item">
								<div class="image"><img src="{{asset('assets/frontend/img/testimonial-1.png')}}" alt=""></div>
								<div class="content"><i class="fa fa-quote-left" aria-hidden="true"></i> Proin gravida
									nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis bibendum auctor, nisi
									elit consequat ipsum, nec sagittis sem nibh id elit.”</div>
								<div class="name">WILLIAM JAMES</div>
								<div class="job">Hairstyle</div>
							</div>
						</div>
					</div>
				</div>
			</div>


		</div>
@endsection