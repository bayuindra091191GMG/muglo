@extends('layouts.frontend')

@section('body-content')
	<!--======= HOME MAIN SLIDER =========-->
	<section class="home-slider boxedcontainer">
		<div class="tp-banner-container">
			<div class="tp-banner-box" >
				<ul>
					<!-- Slider 1 -->
					<li data-transition="random" data-slotamount="7"> <img src="{{ asset('frontend_images/slides/slide-10.jpg') }}" data-bgposition="center top" alt="" />
						<!-- Layer -->
						<div class="tp-caption sfb font-playfair text-center tp-resizeme rs-parallaxlevel-4"
							 data-x="90"
							 data-y="220"
							 data-speed="700"
							 data-start="1000"
							 data-easing="easeOutBack"
							 data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
							 data-splitin="none"
							 data-splitout="none"
							 data-elementdelay="0.1"
							 data-endelementdelay="0.1"
							 data-endspeed="300"
							 data-captionhidden="on"
							 style="color: #af5875; font-style:italic; font-size: 20px;"> HELLO SPRING/SUMMER 2015 </div>
						<!-- Layer -->
						<div class="tp-caption sft font-montserrat text-uppercase tp-resizeme rs-parallaxlevel-4"
							 data-x="85"
							 data-y="260"
							 data-speed="700"
							 data-start="1700"
							 data-easing="easeOutBack"
							 data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
							 data-splitin="none"
							 data-splitout="none"
							 data-elementdelay="0.1"
							 data-endelementdelay="0.1"
							 data-endspeed="300"
							 data-captionhidden="on"
							 style="color: #333333; font-size: 72px; font-weight: bold; "> Navy check </div>

						<!-- Layer -->
						<div class="tp-caption sfb font-montserrat text-uppercase text-left tp-resizeme rs-parallaxlevel-4"
							 data-x="90"
							 data-y="370"
							 data-speed="700"
							 data-start="2400"
							 data-easing="easeOutBack"
							 data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
							 data-splitin="none"
							 data-splitout="none"
							 data-elementdelay="0.1"
							 data-endelementdelay="0.1"
							 data-endspeed="300"
							 data-captionhidden="on"
							 style="color: #b8b8b8; font-weight: bold; font-size: 13px; letter-spacing: 0px; line-height: 24px;"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do<br>
							eiusmod tempor incididunt ut labore et dolore magna <br>
							aliqua. Ut enim ad minim veniam, quis nostrud exercitation <br>
							ullamco laboris . </div>

						<!-- Layer -->
						<div class="tp-caption sfb tp-resizeme rs-parallaxlevel-4"
							 data-x="90"
							 data-y="480"
							 data-speed="700"
							 data-start="3000"
							 data-easing="easeOutBack"
							 data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
							 data-splitin="none"
							 data-splitout="none"
							 data-elementdelay="0.1"
							 data-endelementdelay="0.1"
							 data-endspeed="300"
							 data-captionhidden="on"> <a style="background:#272727; border-color:#272727;" href="#." class="btn btn-1"> Shop Now </a> </div>
					</li>

					<!-- Slider 2 -->
					<li data-transition="random" data-slotamount="7"> <img src="{{ asset('frontend_images/slides/slide-11.jpg') }}" data-bgposition="center top" alt="" />
						<!-- Layer -->
						<div class="tp-caption sfb font-playfair text-center tp-resizeme rs-parallaxlevel-4"
							 data-x="90"
							 data-y="220"
							 data-speed="700"
							 data-start="1000"
							 data-easing="easeOutBack"
							 data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
							 data-splitin="none"
							 data-splitout="none"
							 data-elementdelay="0.1"
							 data-endelementdelay="0.1"
							 data-endspeed="300"
							 data-captionhidden="on"
							 style="color: #272727; font-style:italic; font-size: 20px;"> HELLO SPRING/SUMMER 2015 </div>

						<!-- Layer -->
						<div class="tp-caption sft font-montserrat text-uppercase tp-resizeme rs-parallaxlevel-4"
							 data-x="85"
							 data-y="260"
							 data-speed="700"
							 data-start="1700"
							 data-easing="easeOutBack"
							 data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
							 data-splitin="none"
							 data-splitout="none"
							 data-elementdelay="0.1"
							 data-endelementdelay="0.1"
							 data-endspeed="300"
							 data-captionhidden="on"
							 style="color: #273e67; font-size: 72px; font-weight: bold; "> SALE OFF 70% </div>

						<!-- Layer -->
						<div class="tp-caption sfb font-montserrat text-uppercase text-left tp-resizeme rs-parallaxlevel-4"
							 data-x="90"
							 data-y="370"
							 data-speed="700"
							 data-start="2400"
							 data-easing="easeOutBack"
							 data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
							 data-splitin="none"
							 data-splitout="none"
							 data-elementdelay="0.1"
							 data-endelementdelay="0.1"
							 data-endspeed="300"
							 data-captionhidden="on"
							 style="color: #272727; font-weight: bold; font-size: 18px; letter-spacing: 7px; line-height: 24px;"> Noisy May Cadance Lace Up Tee</div>

						<!-- Layer -->
						<div class="tp-caption sfb tp-resizeme rs-parallaxlevel-4"
							 data-x="90"
							 data-y="480"
							 data-speed="700"
							 data-start="3000"
							 data-easing="easeOutBack"
							 data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
							 data-splitin="none"
							 data-splitout="none"
							 data-elementdelay="0.1"
							 data-endelementdelay="0.1"
							 data-endspeed="300"
							 data-captionhidden="on"> <a style="background: #272727;  border-color:#272727;" href="#." class="btn btn-1">Shop Now</a> </div>
					</li>

					<!-- Slider 3 -->
					<li data-transition="random" data-slotamount="7"> <img src="{{ asset('frontend_images/slides/slide-12.jpg') }}" data-bgposition="center center" alt="" />

						<!-- Layer -->
						<div class="tp-caption font-montserrat text-center text-uppercase sft tp-resizeme rs-parallaxlevel-4"
							 data-x="550"
							 data-y="center" data-voffset="-80"
							 data-speed="700"
							 data-start="1000"
							 data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
							 data-easing="Back.easeOut"
							 data-splitin="none"
							 data-splitout="none"
							 data-elementdelay="0.1"
							 data-endelementdelay="0.1"
							 data-endspeed="300"
							 data-captionhidden="on"
							 style="color: #272727; font-size: 24px; font-weight: bold; letter-spacing: 0px; padding:20px 0; "> J Brand 811 Mid Rise Ankle Skinny Jeans <br>
							With Raw Hem & Ripped Knees </div>

						<!-- Layer -->
						<div class="tp-caption font-montserrat text-center text-uppercase sfb tp-resizeme rs-parallaxlevel-4"
							 data-x="650"
							 data-y="center" data-voffset="0"
							 data-speed="700"
							 data-start="1700"
							 data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
							 data-easing="Back.easeOut"
							 data-splitin="none"
							 data-splitout="none"
							 data-elementdelay="0.1"
							 data-endelementdelay="0.1"
							 data-endspeed="300"
							 data-captionhidden="on"
							 style="color: #272727; font-size: 14px; font-weight: bold; letter-spacing: 7px; padding:10px 0; border-top:1px solid #272727; border-bottom:1px solid #272727;"> FREE SHIPPING WORLDWIDE </div>

						<!-- Layer -->
						<div class="tp-caption sfb tp-resizeme rs-parallaxlevel-4"
							 data-x="750"
							 data-y="430"
							 data-speed="700"
							 data-start="2400"
							 data-easing="easeOutBack"
							 data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
							 data-splitin="none"
							 data-splitout="none"
							 data-elementdelay="0.1"
							 data-endelementdelay="0.1"
							 data-endspeed="300"
							 data-captionhidden="on"> <a style="background: #272727;  border-color:#272727;" href="#." class="btn btn-1">Shop Now</a> </div>
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
					<p>Treding fashion</p>
				</div>

				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist animate fadeInUp" data-wow-delay="0.4s">
					<li role="presentation" class="active"><a href="#men" aria-controls="men" role="tab" data-toggle="tab">MEN’S</a></li>
					<li role="presentation"><a href="#women" aria-controls="women" role="tab" data-toggle="tab">WOMAN</a></li>
					<li role="presentation"><a href="#access" aria-controls="access" role="tab" data-toggle="tab">ACCESSORIES</a></li>
					<li role="presentation"><a href="#shoes" aria-controls="shoes" role="tab" data-toggle="tab">SHOES</a></li>
					<li role="presentation"><a href="#bags" aria-controls="bags" role="tab" data-toggle="tab">BAGS</a></li>
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
										<img src="{{ asset('frontend_images/new-item-5.jpg') }}" alt="">
										<!-- Hover Details -->
										<div class="over-item">
											<ul class="animated fadeIn">
												<li> <a href="{{ asset('frontend_images/new-item-5.jpg') }}" data-lighter><i class="ion-search"></i></a></li>
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
						<img src="{{ asset('frontend_images/week-img-1.jpg') }}" alt="">
						<!-- Hover Details -->
						<div class="over-item">
							<ul class="animated fadeIn">
								<li> <a href="{{ asset('frontend_images/week-img-1.jpg') }}" data-lighter><i class="ion-search"></i></a></li>
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
						<img src="{{ asset('frontend_images/week-img-2.jpg') }}" alt="">
						<!-- Hover Details -->
						<div class="over-item">
							<ul class="animated fadeIn">
								<li> <a href="{{ asset('frontend_images/week-img-2.jpg') }}" data-lighter><i class="ion-search"></i></a></li>
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
						<img src="{{ asset('frontend_images/week-img-3.jpg') }}" alt="">
						<!-- Hover Details -->
						<div class="over-item">
							<ul class="animated fadeIn">
								<li> <a href="{{ asset('frontend_images/week-img-3.jpg') }}" data-lighter><i class="ion-search"></i></a></li>
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
						<img src="{{ asset('frontend_images/week-img-4.jpg') }}" alt="">
						<!-- Hover Details -->
						<div class="over-item">
							<ul class="animated fadeIn">
								<li> <a href="{{ asset('frontend_images/week-img-4.jpg') }}" data-lighter><i class="ion-search"></i></a></li>
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
								<div class="item-img"> <a href="#"> <img class="media-object" src="{{ asset('frontend_images/small-item.jpg') }}" alt=""> </a> </div>
							</div>
							<!--  Details -->
							<div class="media-body"> <a class="media-heading" href="#.">FLAT SOLE PATENT SANDAL</a> <span class="font-montserrat">129.00 USD</span> <a href="#." class="btn btn-small">ADD TO CART</a>
								<ul class="main-link">
									<li> <a href="{{ asset('frontend_images/small-item.jpg') }}" data-lighter><i class="ion-search"></i></a></li>
									<li> <a href="#."><i class="ion-shuffle"></i></a></li>
									<li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
								</ul>
							</div>
						</div>

						<!--  Item  2 -->
						<div class="media">
							<div class="media-left">
								<!--  Image -->
								<div class="item-img"> <a href="#"> <img class="media-object" src="{{ asset('frontend_images/small-item-3.jpg') }}" alt=""> </a> </div>
							</div>
							<!--  Details -->
							<div class="media-body"> <a class="media-heading" href="#.">FLAT SOLE PATENT SANDAL</a> <span class="font-montserrat">129.00 USD</span> <a href="#." class="btn btn-small">ADD TO CART</a>
								<ul class="main-link">
									<li> <a href="{{ asset('frontend_images/small-item-3.jpg') }}" data-lighter><i class="ion-search"></i></a></li>
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
								<div class="item-img"> <a href="#"> <img class="media-object" src="{{ asset('frontend_images/small-item-1.jpg') }}" alt=""> </a> </div>
							</div>
							<!--  Details -->
							<div class="media-body"> <a class="media-heading" href="#.">FLAT SOLE PATENT SANDAL</a> <span class="font-montserrat">129.00 USD</span> <a href="#." class="btn btn-small">ADD TO CART</a>
								<ul class="main-link">
									<li> <a href="{{ asset('frontend_images/small-item-1.jpg') }}" data-lighter><i class="ion-search"></i></a></li>
									<li> <a href="#."><i class="ion-shuffle"></i></a></li>
									<li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
								</ul>
							</div>
						</div>

						<!--  Item  2 -->
						<div class="media">
							<div class="media-left">
								<!--  Image -->
								<div class="item-img"> <a href="#"> <img class="media-object" src="{{ asset('frontend_images/small-item-4.jpg') }}" alt=""> </a> </div>
							</div>
							<!--  Details -->
							<div class="media-body"> <a class="media-heading" href="#.">FLAT SOLE PATENT SANDAL</a> <span class="font-montserrat">129.00 USD</span> <a href="#." class="btn btn-small">ADD TO CART</a>
								<ul class="main-link">
									<li> <a href="{{ asset('frontend_images/small-item-4.jpg') }}" data-lighter><i class="ion-search"></i></a></li>
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
								<div class="item-img"> <a href="#"> <img class="media-object" src="{{ asset('frontend_images/small-item-2.jpg') }}" alt=""> </a> </div>
							</div>
							<!--  Details -->
							<div class="media-body"> <a class="media-heading" href="#.">FLAT SOLE PATENT SANDAL</a> <span class="font-montserrat">129.00 USD</span> <a href="#." class="btn btn-small">ADD TO CART</a>
								<ul class="main-link">
									<li> <a href="{{ asset('frontend_images/small-item-2.jpg') }}" data-lighter><i class="ion-search"></i></a></li>
									<li> <a href="#."><i class="ion-shuffle"></i></a></li>
									<li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
								</ul>
							</div>
						</div>

						<!--  Item  2 -->
						<div class="media">
							<div class="media-left">
								<!--  Image -->
								<div class="item-img"> <a href="#"> <img class="media-object" src="{{ asset('frontend_images/small-item-5.jpg') }}" alt=""> </a> </div>
							</div>
							<!--  Details -->
							<div class="media-body"> <a class="media-heading" href="#.">FLAT SOLE PATENT SANDAL</a> <span class="font-montserrat">129.00 USD</span> <a href="#." class="btn btn-small">ADD TO CART</a>
								<ul class="main-link">
									<li> <a href="{{ asset('frontend_images/small-item-5.jpg') }}" data-lighter><i class="ion-search"></i></a></li>
									<li> <a href="#."><i class="ion-shuffle"></i></a></li>
									<li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!--======= Blog =========-->
		<section class="section-p-60px blog">
			<div class="container">
				<!--  Tittle -->
				<div class="tittle tittle-3 animate fadeInUp" data-wow-delay="0.4s">
					<h5>RECENT BLOG</h5>
					<hr>
					<p>Our Blog</p>
				</div>

				<!--  Blog Posts -->
				<div class="blog-posts">
					<ul class="row">
						<!--  Posts 1 -->
						<li class="col-sm-4 animate fadeInLeft" data-wow-delay="0.4s">
							<!--  Image -->
							<img class="img-responsive" src="{{ asset('frontend_images/blog-small-1.jpg') }}" alt=""> <span class="tags">FASHION NEWS</span> <a href="#." class="tittle-post font-playfair">Mighty Healthy 2013 Spring/Summer</a>
							<p>Gumbo beet greens corn soko endive gumbo gourd. Parsley shallot courgette tatsoi pea sprouts fava bean collard greens danadelion.</p>
							<!--  Post Info -->
							<ul class="info">
								<li><i class="fa fa-user"></i> admin</li>
								<li><i class="fa fa-calendar-o"></i> 12 JULY</li>
								<li><i class="fa fa-eye"></i> 325</li>
							</ul>
						</li>

						<!--  Posts 2 -->
						<li class="col-sm-4 animate fadeInUp" data-wow-delay="0.4s">
							<!--  Image -->
							<img class="img-responsive" src="{{ asset('frontend_images/blog-small-2.jpg') }}" alt=""> <span class="tags">TRENDING NEWS</span> <a href="#." class="tittle-post font-playfair">No colors are the best ones.</a>
							<p>Gumbo beet greens corn soko endive gumbo gourd. Parsley shallot courgette tatsoi pea sprouts fava bean collard greens danadelion.</p>
							<!--  Post Info -->
							<ul class="info">
								<li><i class="fa fa-user"></i> admin</li>
								<li><i class="fa fa-calendar-o"></i> 12 JULY</li>
								<li><i class="fa fa-eye"></i> 325</li>
							</ul>
						</li>

						<!--  Posts 2 -->
						<li class="col-sm-4 animate fadeInRight" data-wow-delay="0.4s">
							<!--  Image -->
							<img class="img-responsive" src="{{ asset('frontend_images/blog-small-3.jpg') }}" alt=""> <span class="tags">MOTION GRAPHIC</span> <a href="#." class="tittle-post font-playfair">All in Black Venna</a>
							<p>Gumbo beet greens corn soko endive gumbo gourd. Parsley shallot courgette tatsoi pea sprouts fava bean collard greens danadelion.</p>
							<!-- Post Info -->
							<ul class="info">
								<li><i class="fa fa-user"></i> admin</li>
								<li><i class="fa fa-calendar-o"></i> 12 JULY</li>
								<li><i class="fa fa-eye"></i> 325</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</section>

		<!--======= BOXES =========-->
		<section class="section-p-60px no-padding-b">
			<div class="container">
				<div class="row">

					<!-- Shop Location -->
					<div class="col-md-4 animate fadeInLeft" data-wow-delay="0.4s">
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

					<!-- NEWSLETTER -->
					<div class="col-md-4 animate fadeInUp" data-wow-delay="0.4s">
						<div class="boxes-in">
							<h5>NEWSLETTER</h5>
							<hr>
							<div class="small-letter">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut </p>
								<input type="email" placeholder="ENTER EMAIL ADDRESS...">
								<button type="submit" class="btn">SUBSCRIBLE</button>
							</div>
						</div>
					</div>

					<!-- TESTIMONIAL -->
					<div class="col-md-4 animate fadeInRight" data-wow-delay="0.4s">
						<div class="boxes-in">
							<h5>TESTIMONIAL</h5>
							<hr>

							<!-- TESTIMONIAL SLIDER -->
							<div class="testi-slides">

								<!-- SLIDER -->
								<div class="slides">
									<div class="avatar"> <img src="{{ asset('frontend_images/avatar-1.jpg') }}" alt=""> </div>
									<p>“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.”</p>
									<h6>TYRION LANNISTER</h6>
									<p>Founder-Ceo. Dell Corp</p>
								</div>

								<!-- SLIDER -->
								<div class="slides">
									<div class="avatar"> <img src="{{ asset('frontend_images/avatar-2.jpg') }}" alt=""> </div>
									<p>“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.”</p>
									<h6>TYRION LANNISTER</h6>
									<p>Founder-Ceo. Dell Corp</p>
								</div>

								<!-- SLIDER -->
								<div class="slides">
									<div class="avatar"> <img src="{{ asset('frontend_images/avatar-3.jpg') }}" alt=""> </div>
									<p>“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.”</p>
									<h6>TYRION LANNISTER</h6>
									<p>Founder-Ceo. Dell Corp</p>
								</div>
							</div>
						</div>
					</div>
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
					<p>Treding blog</p>
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