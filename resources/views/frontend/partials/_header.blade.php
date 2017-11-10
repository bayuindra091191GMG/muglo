{{--@inject('categories', 'App\Service\CategoryHeader')--}}

<header class="header-style-2 header-style-3">
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container">
            <!-- Language -->
            <div class="language"> <a href="#." class="active">IN</a> <a href="#.">EN</a> </div>
            <div class="top-links">
                <ul>
                    @if(auth()->check())
                        <li><a href="{{ route('user-profile-show') }}">AKUN SAYA</a></li>
                        <li><a href="#.">PEMBELIAN SAYA</a></li>
                    @else
                        <li><a href="{{ route('login') }}">MASUK</a></li>
                        <li><a href="/register">DAFTAR</a></li>
                    @endif
                    <li class="font-montserrat">MATA UANG:
                        <select class="selectpicker">
                            <option>IDR</option>
                            {{--<option>EURO</option>--}}
                        </select>
                    </li>
                </ul>
                <!-- Social Icons -->
                <ul class="social_icons">
                    <li class="facebook"><a href="#."><i class="fa fa-facebook"></i> </a></li>
                    <li class="twitter"><a href="#."><i class="fa fa-twitter"></i> </a></li>
                    <li class="dribbble"><a href="#."><i class="fa fa-dribbble"></i> </a></li>
                    <li class="googleplus"><a href="#."><i class="fa fa-google-plus"></i> </a></li>
                    <li class="linkedin"><a href="#."><i class="fa fa-linkedin"></i> </a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Logo -->
    <div class="sticky">
        <div class="container">
            <div class="logo"> <a href="#."><img src="{{ asset('frontend_images/logotangerine.png') }}" style="width: auto; height: 45px;" alt=""></a> </div>

            <!-- Nav -->
            <!-- Nav -->
            <nav class="webimenu">
                <!-- MENU BUTTON RESPONSIVE -->
                <div class="menu-toggle"> <i class="fa fa-bars"> </i> </div>
                <ul class="ownmenu">
                    <li><a href="index.html">BERANDA</a>
                    </li>
                    <li class="meganav"><a href="02-shop-sidebar-right.html">KATEGORI</a>
                        <!--======= MEGA MENU =========-->
                        <ul class="megamenu full-width">
                            <li class="row nav-post">
                                <div class="col-sm-3">
                                    <h6>Shop Pages</h6>
                                    <ul>
                                        <li><a href="02-shop-sidebar-right.html">Shop Sidebar Right</a></li>
                                        <li><a href="02-shop-sidebar-left.html">Shop Sidebar Left</a></li>
                                        <li><a href="02-shop-sidebar.html">Shop Sidebar</a></li>
                                        <li><a href="02-shop-list-view.html">Shop LIST</a></li>
                                        <li><a href="02-shop-full_width-03.html">Shop Full 2 Col</a></li>
                                        <li><a href="02-shop-full_width-02.html">Shop Full 3 Col</a></li>
                                        <li><a href="02-shop-full_width-01.html">Shop Full 4 Col</a></li>
                                        <li><a href="02-shop-details-1.html">Shop Detail</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-3">
                                    <h6>Blog Pages</h6>
                                    <ul>
                                        <li><a href="08-01-blog-mansory.html">Blog Mansory</a></li>
                                        <li><a href="08-02-blog-left-side-bar.html">Blog Left Side Bar</a></li>
                                        <li><a href="08-02-blog-right-side-bar.html">Blog Right Side Bar</a></li>
                                        <li><a href="08-04-blog-medium-image.html">Blog Medium Image</a></li>
                                        <li><a href="08-05-blog-large-images.html">Blog Large Images</a></li>
                                        <li><a href="08-06-blog-02-col.html">Blog 02 Col</a></li>
                                        <li><a href="08-07-blog-03-col.html">Blog 03 Col</a></li>
                                        <li><a href="08-08-blog-04-col.html">Blog 04 Col</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-3">
                                    <h6>Portfolio Pages</h6>
                                    <ul>
                                        <li><a href="09-01-portfolio-grid.html">PORTFOLIO GRID 02 COL</a></li>
                                        <li><a href="09-02-portfolio-grid.html">PORTFOLIO GRID 03 COL</a></li>
                                        <li><a href="09-03-portfolio-grid.html">PORTFOLIO GRID 04 COL</a></li>
                                        <li><a href="09-03-portfolio-full-width.html">PORTFOLIO FULLWIDTH</a></li>
                                        <li><a href="09-05-portfolio-grid-default.html">PORTFOLIO 02 COL</a></li>
                                        <li><a href="09-06-portfolio-grid-default.html">PORTFOLIO 03 COL</a></li>
                                        <li><a href="09-07-portfolio-grid-default.html">PORTFOLIO 04 COL</a></li>
                                        <li><a href="09-08-portfolio-masonry.html">PORTFOLIO MANSORY 01</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-3">
                                    <h6>Portfolio Pages</h6>
                                    <ul>
                                        <li><a href="09-09-portfolio-masonry.html">PORTFOLIO MANSORY 02</a></li>
                                        <li><a href="09-10-portfolio-single.html">Portfolio Single 01</a></li>
                                        <li><a href="09-11-portfolio-single.html">Portfolio Single 02</a></li>
                                        <li><a href="05-about-us-01.html">About US 01</a></li>
                                        <li><a href="05-about-us-02.html">About US 02</a></li>
                                        <li><a href="04-contact-01.html">Contact US</a></li>
                                        <li><a href="03-pay-checkout.html">Pay Checkout</a></li>
                                        <li><a href="03-pay-viewcart.html">Pay Viewcart</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </li>
                    </li>

                    <!--======= Shopping Cart =========-->
                    <li class="shop-cart"><a href="#."><i class="fa fa-shopping-cart"></i></a> <span class="numb">2</span>
                        <ul class="dropdown">
                            <li>
                                <div class="media">
                                    <div class="media-left">
                                        <div class="cart-img"> <a href="#"> <img class="media-object img-responsive" src="{{ asset('frontend_images/item-col-img-1.jpg') }}" alt="..."> </a> </div>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="media-heading">DRAEY TRENCH COAT</h6>
                                        <span class="price">129.00 USD</span> <span class="qty">QTY: 01</span> </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="media-left">
                                        <div class="cart-img"> <a href="#"> <img class="media-object img-responsive" src="{{ asset('frontend_images/item-col-img-2.jpg') }}" alt="..."> </a> </div>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="media-heading">DRAEY TRENCH COAT</h6>
                                        <span class="price">129.00 USD</span> <span class="qty">QTY: 01</span> </div>
                                </div>
                            </li>
                            <li class="no-padding no-border">
                                <h5 class="text-center">SUBTOTAL: 258.00 USD</h5>
                            </li>
                            <li class="no-padding no-border">
                                <div class="row">
                                    <div class="col-xs-6"> <a href="#." class="btn btn-small">VIEW CART</a></div>
                                    <div class="col-xs-6 "> <a href="#." class="btn btn-1 btn-small">CHECK OUT</a></div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!--======= SEARCH ICON =========-->
                    <li class="search-nav"><a href="#."><i class="fa fa-search"></i></a>
                        <ul class="dropdown">
                            <li class="row">
                                <div class="col-sm-4 no-padding">
                                    <select class="selectpicker">
                                        <option>MEN'S</option>
                                        <option>WOMENS</option>
                                        <option>KIDS</option>
                                        <option>FASHION</option>
                                        <option>MEN'S</option>
                                        <option>WOMENS</option>
                                        <option>KIDS</option>
                                        <option>FASHION</option>
                                        <option>MEN'S</option>
                                        <option>WOMENS</option>
                                        <option>KIDS</option>
                                        <option>FASHION</option>
                                        <option>MEN'S</option>
                                        <option>WOMENS</option>
                                        <option>KIDS</option>
                                        <option>FASHION</option>
                                        <option>MEN'S</option>
                                        <option>WOMENS</option>
                                        <option>KIDS</option>
                                        <option>FASHION</option>
                                    </select>
                                </div>
                                <div class="col-sm-8 no-padding">
                                    <input type="search" class="form-control" placeholder="Search Here">
                                    <button type="submit"> <i class="fa fa-search"></i> </button>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>