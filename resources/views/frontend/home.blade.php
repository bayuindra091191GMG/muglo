@extends('layouts.frontend')

@section('body-content')
	<!--======= HOME MAIN SLIDER =========-->
	<section class="home-slider boxedcontainer">
		<div class="tp-banner-container">
			<div class="tp-banner-box" >
				<ul>
					<!-- Slider 1 -->
					<li data-transition="random" data-slotamount="7"> <img src="{{ asset('frontend_images/example/banner-example.png') }}" data-bgposition="center top" alt="" />
					</li>

					<!-- Slider 2 -->
					<li data-transition="random" data-slotamount="7"> <img src="{{ asset('frontend_images/example/banner-example.png') }}" data-bgposition="center top" alt="" />
					</li>

					<!-- Slider 3 -->
					<li data-transition="random" data-slotamount="7"> <img src="{{ asset('frontend_images/example/banner-example.png') }}" data-bgposition="center center" alt="" />
					</li>
				</ul>
			</div>
		</div>
	</section>

	<!-- CONTENT START -->
	<div class="content">

		<!-- Add Banner -->
		<div class="add-bnr-4">
			<div class="container">
				<ul class="row">

					<!-- Add Banner 1 -->
					<li class="col-md-4 animate fadeInLeft" data-wow-delay="0.4s">
						<div class="inn-sec"> <img src="{{ asset('frontend_images/banner_1_370x200.jpg') }}" alt="">
							<div class="upper">
								<h4>SPRING</h4>
								<a href="#.">SHOP NOW</a> </div>
						</div>
					</li>

					<!-- Add Banner 2 -->
					<li class="col-md-4 animate fadeInUp" data-wow-delay="0.4s">
						<div class="inn-sec"> <img src="{{ asset('frontend_images/banner_2_370x200.jpg') }}" alt="">
							<div class="upper">
								<h4>NEW ARRIVAL</h4>
								<a href="#.">SHOP NOW</a> </div>
						</div>
					</li>

					<!-- Add Banner 3 -->
					<li class="col-md-4 animate fadeInRight" data-wow-delay="0.4s">
						<div class="inn-sec"> <img src="{{ asset('frontend_images/banner_3_370x200.jpg') }}" alt="">
							<div class="upper">
								<h4>HOT TREND</h4>
								<a href="#.">SHOP NOW</a> </div>
						</div>
					</li>
				</ul>
			</div>
		</div>

		<!--======= New Arrival =========-->
		<section class="section-p-30px new-arrival">
			<div class="container">

				<!--  Tittle -->
				<div class="tittle tittle-3 animate fadeInUp" data-wow-delay="0.4s">
					<h5>NEW TREND</h5>
					<hr>
					<p>Trending mug</p>
				</div>

				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist animate fadeInUp" data-wow-delay="0.4s">
					<li role="presentation" class="active"><a href="#men" aria-controls="men" role="tab" data-toggle="tab">STYLISH</a></li>
					<li role="presentation"><a href="#women" aria-controls="women" role="tab" data-toggle="tab">COOL</a></li>
					<li role="presentation"><a href="#access" aria-controls="access" role="tab" data-toggle="tab">CUTE</a></li>
					<li role="presentation"><a href="#shoes" aria-controls="shoes" role="tab" data-toggle="tab">MODERN</a></li>
					<li role="presentation"><a href="#bags" aria-controls="bags" role="tab" data-toggle="tab">CLASSIC</a></li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content animate fadeInUp" data-wow-delay="0.4s">
					<!-- MEN’S  -->
					<div role="tabpanel" class="tab-pane fade in active" id="men">

						<!--  New Arrival Tabs Products  -->
						<div class="popurlar_product">
							<ul class="row">

								<!--  New Arrival  -->
								<li class="col-sm-3">
									<div class="items-in">
										<!-- Image -->
										<img src="{{ asset('frontend_images/example/TangerineProduk-01.jpg') }}" alt="">
										<!-- Hover Details -->
										<div class="over-item">
											<ul class="animated fadeIn">
												<li> <a href="{{ asset('frontend_images/example/TangerineProduk-01.jpg') }}" data-lighter><i class="ion-search"></i></a></li>
												<li> <a href="#."><i class="ion-shuffle"></i></a></li>
												<li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
												<li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
												<!-- Rating Stars -->
												<li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
											</ul>
										</div>
										<!-- Item Name -->
										<div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
									</div>
								</li>

								<!--  New Arrival  -->
								<li class="col-sm-3">
									<div class="items-in">
										<!-- Image -->
										<img src="{{ asset('frontend_images/example/TangerineProduk-02.jpg') }}" alt="">
										<!-- Hover Details -->
										<div class="over-item">
											<ul class="animated fadeIn">
												<li> <a href="{{ asset('frontend_images/example/TangerineProduk-02.jpg') }}" data-lighter><i class="ion-search"></i></a></li>
												<li> <a href="#."><i class="ion-shuffle"></i></a></li>
												<li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
												<li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
												<!-- Rating Stars -->
												<li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
											</ul>
										</div>
										<!-- Item Name -->
										<div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
									</div>
								</li>

								<!--  New Arrival  -->
								<li class="col-sm-3">
									<div class="items-in">
										<!--  Tags  -->
										<div class="new-tag"> NEW </div>

										<!-- Image -->
										<img src="{{ asset('frontend_images/example/TangerineProduk-03.jpg') }}" alt="">
										<!-- Hover Details -->
										<div class="over-item">
											<ul class="animated fadeIn">
												<li> <a href="{{ asset('frontend_images/example/TangerineProduk-03.jpg') }}" data-lighter><i class="ion-search"></i></a></li>
												<li> <a href="#."><i class="ion-shuffle"></i></a></li>
												<li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
												<li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
												<!-- Rating Stars -->
												<li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
											</ul>
										</div>
										<!-- Item Name -->
										<div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
									</div>
								</li>

								<!--  New Arrival  -->
								<li class="col-sm-3">
									<div class="items-in">
										<!--  Tags  -->
										<div class="hot-tag"> HOT </div>
										<!-- Image -->
										<img src="{{ asset('frontend_images/example/TangerineProduk-04.jpg') }}" alt="">
										<!-- Hover Details -->
										<div class="over-item">
											<ul class="animated fadeIn">
												<li> <a href="{{ asset('frontend_images/example/TangerineProduk-04.jpg') }}" data-lighter><i class="ion-search"></i></a></li>
												<li> <a href="#."><i class="ion-shuffle"></i></a></li>
												<li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
												<li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
												<!-- Rating Stars -->
												<li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
											</ul>
										</div>
										<!-- Item Name -->
										<div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
									</div>
								</li>
							</ul>
						</div>
					</div>

					<!-- WOMAN  -->
					<div role="tabpanel" class="tab-pane fade" id="women">
						<!--  New Arrival Tabs Products  -->
						<div class="popurlar_product">
							<ul class="row">

								<!--  New Arrival  -->
								<li class="col-sm-3">
									<div class="items-in">
										<!-- Image -->
										<img src="{{ asset('frontend_images/new-item-1.jpg') }}" alt="">
										<!-- Hover Details -->
										<div class="over-item">
											<ul class="animated fadeIn">
												<li> <a href="{{ asset('frontend_images/new-item-1.jpg') }}" data-lighter><i class="ion-search"></i></a></li>
												<li> <a href="#."><i class="ion-shuffle"></i></a></li>
												<li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
												<li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
												<!-- Rating Stars -->
												<li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
											</ul>
										</div>
										<!-- Item Name -->
										<div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
									</div>
								</li>

								<!--  New Arrival  -->
								<li class="col-sm-3">
									<div class="items-in">
										<!-- Image -->
										<img src="{{ asset('frontend_images/new-item-3.jpg') }}" alt="">
										<!-- Hover Details -->
										<div class="over-item">
											<ul class="animated fadeIn">
												<li> <a href="{{ asset('frontend_images/new-item-3.jpg') }}" data-lighter><i class="ion-search"></i></a></li>
												<li> <a href="#."><i class="ion-shuffle"></i></a></li>
												<li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
												<li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
												<!-- Rating Stars -->
												<li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
											</ul>
										</div>
										<!-- Item Name -->
										<div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
									</div>
								</li>

								<!--  New Arrival  -->
								<li class="col-sm-3">
									<div class="items-in">
										<!--  Tags  -->
										<div class="new-tag"> NEW </div>

										<!-- Image -->
										<img src="{{ asset('frontend_images/new-item-2.jpg') }}" alt="">
										<!-- Hover Details -->
										<div class="over-item">
											<ul class="animated fadeIn">
												<li> <a href="{{ asset('frontend_images/new-item-2.jpg') }}" data-lighter><i class="ion-search"></i></a></li>
												<li> <a href="#."><i class="ion-shuffle"></i></a></li>
												<li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
												<li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
												<!-- Rating Stars -->
												<li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
											</ul>
										</div>
										<!-- Item Name -->
										<div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
									</div>
								</li>

								<!--  New Arrival  -->
								<li class="col-sm-3">
									<div class="items-in">
										<!--  Tags  -->
										<div class="hot-tag"> HOT </div>
										<!-- Image -->
										<img src="{{ asset('frontend_images/new-item-4.jpg') }}" alt="">
										<!-- Hover Details -->
										<div class="over-item">
											<ul class="animated fadeIn">
												<li> <a href="{{ asset('frontend_images/new-item-4.jpg') }}" data-lighter><i class="ion-search"></i></a></li>
												<li> <a href="#."><i class="ion-shuffle"></i></a></li>
												<li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
												<li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
												<!-- Rating Stars -->
												<li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
											</ul>
										</div>
										<!-- Item Name -->
										<div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
									</div>
								</li>
							</ul>
						</div>
					</div>

					<!-- ACCESSORIES  -->
					<div role="tabpanel" class="tab-pane fade" id="access">
						<!--  New Arrival Tabs Products  -->
						<div class="popurlar_product">
							<ul class="row">

								<!--  New Arrival  -->
								<li class="col-sm-3">
									<div class="items-in">
										<!-- Image -->
										<img src="{{ asset('frontend_images/example/TangerineProduk-01.jpg') }}" alt="">
										<!-- Hover Details -->
										<div class="over-item">
											<ul class="animated fadeIn">
												<li> <a href="{{ asset('frontend_images/example/TangerineProduk-01.jpg') }}" data-lighter><i class="ion-search"></i></a></li>
												<li> <a href="#."><i class="ion-shuffle"></i></a></li>
												<li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
												<li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
												<!-- Rating Stars -->
												<li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
											</ul>
										</div>
										<!-- Item Name -->
										<div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
									</div>
								</li>

								<!--  New Arrival  -->
								<li class="col-sm-3">
									<div class="items-in">
										<!-- Image -->
										<img src="{{ asset('frontend_images/example/TangerineProduk-01.jpg') }}" alt="">
										<!-- Hover Details -->
										<div class="over-item">
											<ul class="animated fadeIn">
												<li> <a href="{{ asset('frontend_images/example/TangerineProduk-01.jpg') }}" data-lighter><i class="ion-search"></i></a></li>
												<li> <a href="#."><i class="ion-shuffle"></i></a></li>
												<li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
												<li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
												<!-- Rating Stars -->
												<li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
											</ul>
										</div>
										<!-- Item Name -->
										<div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
									</div>
								</li>

								<!--  New Arrival  -->
								<li class="col-sm-3">
									<div class="items-in">
										<!--  Tags  -->
										<div class="new-tag"> NEW </div>

										<!-- Image -->
										<img src="{{ asset('frontend_images/new-item-4.jpg') }}" alt="">
										<!-- Hover Details -->
										<div class="over-item">
											<ul class="animated fadeIn">
												<li> <a href="{{ asset('frontend_images/new-item-4.jpg') }}" data-lighter><i class="ion-search"></i></a></li>
												<li> <a href="#."><i class="ion-shuffle"></i></a></li>
												<li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
												<li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
												<!-- Rating Stars -->
												<li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
											</ul>
										</div>
										<!-- Item Name -->
										<div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
									</div>
								</li>

								<!--  New Arrival  -->
								<li class="col-sm-3">
									<div class="items-in">
										<!--  Tags  -->
										<div class="hot-tag"> HOT </div>
										<!-- Image -->
										<img src="{{ asset('frontend_images/new-item-2.jpg') }}" alt="">
										<!-- Hover Details -->
										<div class="over-item">
											<ul class="animated fadeIn">
												<li> <a href="{{ asset('frontend_images/new-item-2.jpg') }}" data-lighter><i class="ion-search"></i></a></li>
												<li> <a href="#."><i class="ion-shuffle"></i></a></li>
												<li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
												<li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
												<!-- Rating Stars -->
												<li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
											</ul>
										</div>
										<!-- Item Name -->
										<div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
									</div>
								</li>
							</ul>
						</div>
					</div>

					<!-- SHOES  -->
					<div role="tabpanel" class="tab-pane fade" id="shoes">
						<!--  New Arrival Tabs Products  -->
						<div class="popurlar_product">
							<ul class="row">

								<!--  New Arrival  -->
								<li class="col-sm-3">
									<div class="items-in">
										<!-- Image -->
										<img src="{{ asset('frontend_images/new-item-1.jpg') }}" alt="">
										<!-- Hover Details -->
										<div class="over-item">
											<ul class="animated fadeIn">
												<li> <a href="{{ asset('frontend_images/new-item-1.jpg') }}" data-lighter><i class="ion-search"></i></a></li>
												<li> <a href="#."><i class="ion-shuffle"></i></a></li>
												<li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
												<li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
												<!-- Rating Stars -->
												<li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
											</ul>
										</div>
										<!-- Item Name -->
										<div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
									</div>
								</li>

								<!--  New Arrival  -->
								<li class="col-sm-3">
									<div class="items-in">
										<!-- Image -->
										<img src="{{ asset('frontend_images/new-item-4.jpg') }}" alt="">
										<!-- Hover Details -->
										<div class="over-item">
											<ul class="animated fadeIn">
												<li> <a href="{{ asset('frontend_images/new-item-4.jpg') }}" data-lighter><i class="ion-search"></i></a></li>
												<li> <a href="#."><i class="ion-shuffle"></i></a></li>
												<li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
												<li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
												<!-- Rating Stars -->
												<li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
											</ul>
										</div>
										<!-- Item Name -->
										<div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
									</div>
								</li>

								<!--  New Arrival  -->
								<li class="col-sm-3">
									<div class="items-in">
										<!--  Tags  -->
										<div class="new-tag"> NEW </div>

										<!-- Image -->
										<img src="{{ asset('frontend_images/new-item-3.jpg') }}" alt="">
										<!-- Hover Details -->
										<div class="over-item">
											<ul class="animated fadeIn">
												<li> <a href="{{ asset('frontend_images/new-item-3.jpg') }}" data-lighter><i class="ion-search"></i></a></li>
												<li> <a href="#."><i class="ion-shuffle"></i></a></li>
												<li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
												<li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
												<!-- Rating Stars -->
												<li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
											</ul>
										</div>
										<!-- Item Name -->
										<div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
									</div>
								</li>

								<!--  New Arrival  -->
								<li class="col-sm-3">
									<div class="items-in">
										<!--  Tags  -->
										<div class="hot-tag"> HOT </div>
										<!-- Image -->
										<img src="{{ asset('frontend_images/new-item-2.jpg') }}" alt="">
										<!-- Hover Details -->
										<div class="over-item">
											<ul class="animated fadeIn">
												<li> <a href="{{ asset('frontend_images/new-item-2.jpg') }}" data-lighter><i class="ion-search"></i></a></li>
												<li> <a href="#."><i class="ion-shuffle"></i></a></li>
												<li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
												<li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
												<!-- Rating Stars -->
												<li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
											</ul>
										</div>
										<!-- Item Name -->
										<div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
									</div>
								</li>
							</ul>
						</div>
					</div>

					<!-- BAGS  -->
					<div role="tabpanel" class="tab-pane fade" id="bags">
						<!--  New Arrival Tabs Products  -->
						<div class="popurlar_product">
							<ul class="row">

								<!--  New Arrival  -->
								<li class="col-sm-3">
									<div class="items-in">
										<!-- Image -->
										<img src="{{ asset('frontend_images/new-item-1.jpg') }}" alt="">
										<!-- Hover Details -->
										<div class="over-item">
											<ul class="animated fadeIn">
												<li> <a href="{{ asset('frontend_images/new-item-1.jpg') }}" data-lighter><i class="ion-search"></i></a></li>
												<li> <a href="#."><i class="ion-shuffle"></i></a></li>
												<li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
												<li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
												<!-- Rating Stars -->
												<li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
											</ul>
										</div>
										<!-- Item Name -->
										<div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
									</div>
								</li>

								<!--  New Arrival  -->
								<li class="col-sm-3">
									<div class="items-in">
										<!-- Image -->
										<img src="{{ asset('frontend_images/new-item-3.jpg') }}" alt="">
										<!-- Hover Details -->
										<div class="over-item">
											<ul class="animated fadeIn">
												<li> <a href="{{ asset('frontend_images/new-item-3.jpg') }}" data-lighter><i class="ion-search"></i></a></li>
												<li> <a href="#."><i class="ion-shuffle"></i></a></li>
												<li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
												<li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
												<!-- Rating Stars -->
												<li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
											</ul>
										</div>
										<!-- Item Name -->
										<div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
									</div>
								</li>

								<!--  New Arrival  -->
								<li class="col-sm-3">
									<div class="items-in">
										<!-- Image -->
										<img src="{{ asset('frontend_images/new-item-4.jpg') }}" alt="">
										<!-- Hover Details -->
										<div class="over-item">
											<ul class="animated fadeIn">
												<li> <a href="{{ asset('frontend_images/new-item-4.jpg') }}" data-lighter><i class="ion-search"></i></a></li>
												<li> <a href="#."><i class="ion-shuffle"></i></a></li>
												<li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
												<li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
												<!-- Rating Stars -->
												<li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
											</ul>
										</div>
										<!-- Item Name -->
										<div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
									</div>
								</li>

								<!--  New Arrival  -->
								<li class="col-sm-3">
									<div class="items-in">
										<!--  Tags  -->
										<div class="hot-tag"> HOT </div>
										<!-- Image -->
										<img src="{{ asset('frontend_images/new-item-2.jpg') }}" alt="">
										<!-- Hover Details -->
										<div class="over-item">
											<ul class="animated fadeIn">
												<li> <a href="{{ asset('frontend_images/new-item-2.jpg') }}" data-lighter><i class="ion-search"></i></a></li>
												<li> <a href="#."><i class="ion-shuffle"></i></a></li>
												<li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
												<li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
												<!-- Rating Stars -->
												<li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
											</ul>
										</div>
										<!-- Item Name -->
										<div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!--======= New Arrival =========-->
		<section class="section-p-30px new-arrival new-arri-w-slide">
			<div class="container">

				<!--  Tittle -->
				<div class="tittle tittle-3 animate fadeInUp" data-wow-delay="0.4s">
					<h5>POPULAR WEEKLY</h5>
					<hr>
					<p>Treding fashion</p>
				</div>

				<!--  New Arrival Tabs Products  -->
				<div class="popurlar_product client-slide animate fadeInUp" data-wow-delay="0.4s">

					<!--  New Arrival  -->
					<div class="items-in">
						<!-- Image -->
						<img src="{{ asset('frontend_images/example/TangerineProduk-05.jpg') }}" alt="">
						<!-- Hover Details -->
						<div class="over-item">
							<ul class="animated fadeIn">
								<li> <a href="{{ asset('frontend_images/example/TangerineProduk-05.jpg') }}" data-lighter><i class="ion-search"></i></a></li>
								<li> <a href="#."><i class="ion-shuffle"></i></a></li>
								<li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
								<li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
								<!-- Rating Stars -->
								<li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
							</ul>
						</div>
						<!-- Item Name -->
						<div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
					</div>

					<!--  New Arrival  -->
					<div class="items-in">
						<!-- Image -->
						<img src="{{ asset('frontend_images/example/TangerineProduk-06.jpg') }}" alt="">
						<!-- Hover Details -->
						<div class="over-item">
							<ul class="animated fadeIn">
								<li> <a href="{{ asset('frontend_images/example/TangerineProduk-06.jpg') }}" data-lighter><i class="ion-search"></i></a></li>
								<li> <a href="#."><i class="ion-shuffle"></i></a></li>
								<li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
								<li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
								<!-- Rating Stars -->
								<li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
							</ul>
						</div>
						<!-- Item Name -->
						<div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
					</div>

					<!--  New Arrival  -->
					<div class="items-in">
						<!-- Image -->
						<img src="{{ asset('frontend_images/example/TangerineProduk-07.jpg') }}" alt="">
						<!-- Hover Details -->
						<div class="over-item">
							<ul class="animated fadeIn">
								<li> <a href="{{ asset('frontend_images/example/TangerineProduk-07.jpg') }}" data-lighter><i class="ion-search"></i></a></li>
								<li> <a href="#."><i class="ion-shuffle"></i></a></li>
								<li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
								<li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
								<!-- Rating Stars -->
								<li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
							</ul>
						</div>
						<!-- Item Name -->
						<div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
					</div>

					<!--  New Arrival  -->
					<div class="items-in">
						<!--  Tags  -->
						<div class="off-tag"> -30% </div>
						<!-- Image -->
						<img src="{{ asset('frontend_images/example/TangerineProduk-08.jpg') }}" alt="">
						<!-- Hover Details -->
						<div class="over-item">
							<ul class="animated fadeIn">
								<li> <a href="{{ asset('frontend_images/example/TangerineProduk-08.jpg') }}" data-lighter><i class="ion-search"></i></a></li>
								<li> <a href="#."><i class="ion-shuffle"></i></a></li>
								<li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
								<li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
								<!-- Rating Stars -->
								<li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
							</ul>
						</div>
						<!-- Item Name -->
						<div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
					</div>
				</div>
			</div>
		</section>

		<!--======= END OF SEASON =========-->
		<div class="container animate fadeInUp" data-wow-delay="0.4s">
			<div class="section-p-60px end-season" data-stellar-background-ratio="0.9">
				<div class="row">
					<div class="col-md-6 text-center">
						<h5>END OF SEASON</h5>
						<h2>SALE UP70%</h2>
						<a href="#." class="btn">SHOPNOW</a> </div>
				</div>
			</div>
		</div>

		<!--======= Popurlar Product =========-->
		<section class="section-p-60px small-r-items no-padding-b">
			<div class="container">
				<!--  Small Items Row -->
				<div class="row">

					<!--  TOP SELLERS -->
					<div class="col-md-4 animate fadeInUp" data-wow-delay="0.4s">
						<!-- Tittle -->
						<h5>TOP SELLERS</h5>
						<!--  Item  1 -->
						<div class="media">
							<div class="media-left">
								<!--  Image -->
								<div class="item-img"> <a href="#"> <img class="media-object" src="{{ asset('frontend_images/example/TangerineProduk-09.jpg') }}" alt=""> </a> </div>
							</div>
							<!--  Details -->
							<div class="media-body"> <a class="media-heading" href="#.">FLAT SOLE PATENT SANDAL</a> <span class="font-montserrat">129.00 USD</span> <a href="#." class="btn btn-small">ADD TO CART</a>
								<ul class="main-link">
									<li> <a href="{{ asset('frontend_images/example/TangerineProduk-09.jpg') }}" data-lighter><i class="ion-search"></i></a></li>
									<li> <a href="#."><i class="ion-shuffle"></i></a></li>
									<li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
								</ul>
							</div>
						</div>

						<!--  Item  2 -->
						<div class="media">
							<div class="media-left">
								<!--  Image -->
								<div class="item-img"> <a href="#"> <img class="media-object" src="{{ asset('frontend_images/example/TangerineProduk-10.jpg') }}" alt=""> </a> </div>
							</div>
							<!--  Details -->
							<div class="media-body"> <a class="media-heading" href="#.">FLAT SOLE PATENT SANDAL</a> <span class="font-montserrat">129.00 USD</span> <a href="#." class="btn btn-small">ADD TO CART</a>
								<ul class="main-link">
									<li> <a href="{{ asset('frontend_images/example/TangerineProduk-10.jpg') }}" data-lighter><i class="ion-search"></i></a></li>
									<li> <a href="#."><i class="ion-shuffle"></i></a></li>
									<li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
								</ul>
							</div>
						</div>
					</div>

					<!--  SALE OFF -->
					<div class="col-md-4 animate fadeInUp" data-wow-delay="0.4s">
						<!-- Tittle -->
						<h5>SALE OFF</h5>
						<!--  Item  1 -->
						<div class="media">
							<div class="media-left">
								<!--  Image -->
								<div class="item-img"> <a href="#"> <img class="media-object" src="{{ asset('frontend_images/example/TangerineProduk-11.jpg') }}" alt=""> </a> </div>
							</div>
							<!--  Details -->
							<div class="media-body"> <a class="media-heading" href="#.">FLAT SOLE PATENT SANDAL</a> <span class="font-montserrat">129.00 USD</span> <a href="#." class="btn btn-small">ADD TO CART</a>
								<ul class="main-link">
									<li> <a href="{{ asset('frontend_images/example/TangerineProduk-11.jpg') }}" data-lighter><i class="ion-search"></i></a></li>
									<li> <a href="#."><i class="ion-shuffle"></i></a></li>
									<li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
								</ul>
							</div>
						</div>

						<!--  Item  2 -->
						<div class="media">
							<div class="media-left">
								<!--  Image -->
								<div class="item-img"> <a href="#"> <img class="media-object" src="{{ asset('frontend_images/example/TangerineProduk-12.jpg') }}" alt=""> </a> </div>
							</div>
							<!--  Details -->
							<div class="media-body"> <a class="media-heading" href="#.">FLAT SOLE PATENT SANDAL</a> <span class="font-montserrat">129.00 USD</span> <a href="#." class="btn btn-small">ADD TO CART</a>
								<ul class="main-link">
									<li> <a href="{{ asset('frontend_images/example/TangerineProduk-12.jpg') }}" data-lighter><i class="ion-search"></i></a></li>
									<li> <a href="#."><i class="ion-shuffle"></i></a></li>
									<li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
								</ul>
							</div>
						</div>
					</div>

					<!--  SALE OFF -->
					<div class="col-md-4 animate fadeInUp" data-wow-delay="0.4s">
						<!-- Tittle -->
						<h5>TOP RATE</h5>
						<!--  Item  1 -->
						<div class="media">
							<div class="media-left">
								<!--  Image -->
								<div class="item-img"> <a href="#"> <img class="media-object" src="{{ asset('frontend_images/example/TangerineProduk-13.jpg') }}" alt=""> </a> </div>
							</div>
							<!--  Details -->
							<div class="media-body"> <a class="media-heading" href="#.">FLAT SOLE PATENT SANDAL</a> <span class="font-montserrat">129.00 USD</span> <a href="#." class="btn btn-small">ADD TO CART</a>
								<ul class="main-link">
									<li> <a href="{{ asset('frontend_images/example/TangerineProduk-13.jpg') }}" data-lighter><i class="ion-search"></i></a></li>
									<li> <a href="#."><i class="ion-shuffle"></i></a></li>
									<li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
								</ul>
							</div>
						</div>

						<!--  Item  2 -->
						<div class="media">
							<div class="media-left">
								<!--  Image -->
								<div class="item-img"> <a href="#"> <img class="media-object" src="{{ asset('frontend_images/example/TangerineProduk-14.jpg') }}" alt=""> </a> </div>
							</div>
							<!--  Details -->
							<div class="media-body"> <a class="media-heading" href="#.">FLAT SOLE PATENT SANDAL</a> <span class="font-montserrat">129.00 USD</span> <a href="#." class="btn btn-small">ADD TO CART</a>
								<ul class="main-link">
									<li> <a href="{{ asset('frontend_images/example/TangerineProduk-14.jpg') }}" data-lighter><i class="ion-search"></i></a></li>
									<li> <a href="#."><i class="ion-shuffle"></i></a></li>
									<li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!--======= BOXES =========-->
		<section class="section-p-60px no-padding-b">
			<div class="container">
				<div class="row">
					<div class="col-md-4 animate fadeInLeft" data-wow-delay="0.4s"></div>

					<!-- Shop Location -->
					<div class="col-md-4 animate fadeInUp" data-wow-delay="0.4s">
						<div class="boxes-in">
							<h5>SHOP LOCATION</h5>
							<hr>
							<ul class="location">
								<li> <i class="fa fa-location-arrow"></i>
									<p>1234 Heaven Stress, Beverly
										United State</p>
								</li>
								<li> <i class="fa fa-phone"></i>
									<p>Phone: (800) 0123 4567 890</p>
								</li>
								<li> <i class="fa fa-envelope"></i>
									<p>Support@democompany.com</p>
								</li>
								<li> <i class="fa fa-clock-o"></i>
									<p>OPEN: 9AM - 8PM</p>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-md-4 animate fadeInRight" data-wow-delay="0.4s"></div>
				</div>
			</div>
		</section>

		<!--======= Core Feature =========-->
		<section class="section-p-60px our-clients">
			<div class="container">
				<!-- Tittle -->
				<div class="tittle tittle-3 animate fadeInUp" data-wow-delay="0.4s">
					<h5>OUR BANDS</h5>
					<hr>
				</div>

				<!--  Client Logo Slider -->
				<div class="client-slide client-border animate fadeInUp" data-wow-delay="0.4s">
					<div class="slide"><a href="#."><img class="img-responsive" src="{{ asset('frontend_images/client-logo-1.png') }}" alt=""></a></div>
					<div class="slide"><a href="#."><img class="img-responsive" src="{{ asset('frontend_images/client-logo-2.png') }}" alt=""></a></div>
					<div class="slide"><a href="#."><img class="img-responsive" src="{{ asset('frontend_images/client-logo-3.png') }}" alt=""></a></div>
					<div class="slide"><a href="#."><img class="img-responsive" src="{{ asset('frontend_images/client-logo-4.png') }}" alt=""></a></div>
					<div class="slide"><a href="#."><img class="img-responsive" src="{{ asset('frontend_images/client-logo-2.png') }}" alt=""></a></div>
					<div class="slide"><a href="#."><img class="img-responsive" src="{{ asset('frontend_images/client-logo-4.png') }}" alt=""></a></div>
				</div>
			</div>
		</section>
	</div>
@endsection