@extends('layouts.frontend')

@section('body-content')
    <div class="content">

        <!--======= SUB BANNER =========-->
        <section class="sub-banner">
            <div class="container">
                <h4>KERANJANG BELANJA</h4>
                <!-- Breadcrumb -->
                <ol class="breadcrumb">
                    <li><a href="#">Beranda</a></li>
                    <li class="active">Keranjang Belanja</li>
                </ol>
            </div>
        </section>

        <!--======= PAGES INNER =========-->
        <section class="section-p-30px pages-in chart-page">
            <div class="container">


                <div class="shopping-cart text-center">
                    <div class="cart-head">
                        <ul class="row">
                            <!-- PRODUCTS -->
                            <li class="col-sm-3">
                                <h6>PRODUK</h6>
                            </li>
                            <!-- NAME -->
                            <li class="col-sm-3">
                                <h6>NAMA</h6>
                            </li>
                            <!-- QTY -->
                            <li class="col-sm-1">
                                <h6>KUANTITAS</h6>
                            </li>
                            <!-- PRICE -->
                            <li class="col-sm-2">
                                <h6>HARGA</h6>
                            </li>
                            <!-- TOTAL PRICE -->
                            <li class="col-sm-2">
                                <h6>TOTAL HARGA</h6>
                            </li>
                            <li class="col-sm-1"> </li>
                        </ul>
                    </div>

                    <!-- Cart Details -->
                    <ul class="row cart-details">
                        <li class="col-sm-6">
                            <div class="media">
                                <!-- Media Image -->
                                <div class="media-left media-middle"> <a href="#." class="item-img"> <img class="media-object" src="{{ asset('frontend_images/week-img-2.jpg') }}" alt=""> </a> </div>

                                <!-- Item Name -->
                                <div class="media-body">
                                    <div class="position-center-center">
                                        <h6>LOOSE-FIT TRENCH COAT</h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- QTY -->
                        <li class="col-sm-1">
                            <div class="position-center-center">
                                <input type="text" value="02">
                            </div>
                        </li>

                        <!-- PRICE -->
                        <li class="col-sm-2">
                            <div class="position-center-center"> <span> 129.00 USD</span> </div>
                        </li>
                        <!-- TOTAL PRICE -->
                        <li class="col-sm-2">
                            <div class="position-center-center"> <span>258.00 USD</span> </div>
                        </li>

                        <!-- EDIT AND REMOVE -->
                        <li class="col-sm-1">
                            <div class="position-center-center"> <a href="#."><i class="fa fa-times"></i></a> </div>
                        </li>
                    </ul>

                    <!-- Cart Details -->
                    <ul class="row cart-details">
                        <li class="col-sm-6">
                            <div class="media">
                                <!-- Media Image -->
                                <div class="media-left media-middle"> <a href="#." class="item-img"> <img class="media-object" src="{{ asset('frontend_images/week-img-3.jpg') }}" alt=""> </a> </div>

                                <!-- Item Name -->
                                <div class="media-body">
                                    <div class="position-center-center">
                                        <h6>LOOSE-FIT TRENCH COAT</h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- QTY -->
                        <li class="col-sm-1">
                            <div class="position-center-center">
                                <input type="text" value="02">
                            </div>
                        </li>

                        <!-- PRICE -->
                        <li class="col-sm-2">
                            <div class="position-center-center"> <span> 129.00 USD</span> </div>
                        </li>
                        <!-- TOTAL PRICE -->
                        <li class="col-sm-2">
                            <div class="position-center-center"> <span>258.00 USD</span> </div>
                        </li>

                        <!-- EDIT AND REMOVE -->
                        <li class="col-sm-1">
                            <div class="position-center-center"> <a href="#."><i class="fa fa-times"></i></a> </div>
                        </li>
                    </ul>

                    <!-- BTN INFO -->
                    <div class="btn-sec">

                        <!-- CLEAR SHOPPING CART -->
                        {{--<a href="#." class="btn btn-dark"> <i class="fa fa-trash-o"></i> CLEAR SHOPPING CART </a>--}}

                        <!-- UPDATE SHOPPING CART -->
                        {{--<a href="#." class="btn btn-dark"> <i class="fa fa-arrow-circle-o-up"></i> UPDATE SHOPPING CART </a>--}}

                        <!-- CONTINUE SHOPPING -->
                        {{--<a href="#." class="btn btn-dark right-btn"> <i class="fa fa-shopping-cart"></i> CONTINUE SHOPPING </a> --}}
                    </div>

                    <!-- SHOPPING INFORMATION -->
                    <div class="cart-ship-info">
                        <div class="row">

                            <!-- DISCOUNT CODE -->
                            <div class="col-sm-4">
                                {{--<h6>DISCOUNT CODE</h6>--}}
                                {{--<form>--}}
                                    {{--<input type="text" value="" placeholder="ENTER YOUR CODE IF YOU HAVE ONE">--}}
                                    {{--<button type="submit" class="btn btn-small btn-dark">APPLY CODE</button>--}}
                                {{--</form>--}}
                            </div>

                            <!-- ESTIMATE SHIPPING & TAX -->
                            <div class="col-sm-4">
                                {{--<h6>ESTIMATE SHIPPING & TAX</h6>--}}
                                {{--<form>--}}
                                    {{--<!-- *COUNTRY -->--}}
                                    {{--<label> *COUNTRY--}}
                                        {{--<select class="selectpicker">--}}
                                            {{--<option>UNITED KINGDOM</option>--}}
                                            {{--<option>UNITED STATE</option>--}}
                                            {{--<option>PAKISTAN</option>--}}
                                        {{--</select>--}}
                                    {{--</label>--}}

                                    {{--<!-- STATE/PROVINCE -->--}}
                                    {{--<label> STATE/PROVINCE--}}
                                        {{--<input type="text" value="" placeholder="">--}}
                                    {{--</label>--}}
                                    {{--<!-- ZIP/POSTAL CODE -->--}}
                                    {{--<label> ZIP/POSTAL CODE--}}
                                        {{--<input type="text" value="" placeholder="">--}}
                                    {{--</label>--}}
                                    {{--<button type="submit" class="btn btn-small btn-dark">APPLY CODE</button>--}}
                                {{--</form>--}}
                            </div>

                            <!-- SUB TOTAL -->
                            <div class="col-sm-4">
                                <div class="grand-total"> <span>SUB TOTAL: 258.00 USD</span>
                                    <h4>GRAND: <span> 258.00 USD </span></h4>
                                    <a href="#." class="btn">PROCEED TO CHECK OUT</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
