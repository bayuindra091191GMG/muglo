@extends('layouts.frontend')

@section('body-content')
    <div class="content">

        <!--======= SUB BANNER =========-->
        <section class="sub-banner">
            <div class="container">
                <h4>PENGIRIMAN </h4>

                <!-- Breadcrumb -->
                <ol class="breadcrumb">
                    <li><a href="#">Beranda</a></li>
                    <li class="active">Pengiriman</li>
                </ol>
            </div>
        </section>

        <!--======= PAGES INNER =========-->
        <section class="section-p-30px pages-in chart-page">
            <div class="container">

                <!-- Payments Steps -->
                <div class="payment_steps">
                    <ul class="row">
                        <!-- SHOPPING CART -->
                        <li class="col-sm-4 current"> <i class="fa fa-truck"></i>
                            <h6>PENGIRIMAN</h6>
                        </li>

                        <!-- CHECK OUT DETAIL -->
                        <li class="col-sm-4"> <i class="fa fa-money"></i>
                            <h6>PEMBAYARAN</h6>
                        </li>

                        <!-- ORDER COMPLETE -->
                        <li class="col-sm-4"> <i class="fa fa-check"></i>
                            <h6>ORDER BERHASIL</h6>
                        </li>
                    </ul>
                </div>

                <!-- Payments Steps -->
                <div class="shopping-cart">

                    <!-- SHOPPING INFORMATION -->
                    <div class="cart-ship-info">
                        <div class="row">

                            <!-- ESTIMATE SHIPPING & TAX -->
                            <div class="col-sm-7">
                                <div class="row margin-b-20">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="custom-container">
                                            <div>
                                                <h6>Detail Pembeli</h6>
                                                Rumah<br/>
                                                Jl. Barata Tama 1 No. 116 RT 04/07 Karang Tengah<br/>
                                                Depan rumah ada box telpon umum warna biru<br/>
                                                Kecamatan Ciledug, Kota Tangerang<br/>
                                                Banten, 15157<br/>
                                                081315908000
                                            </div>
                                            <div>
                                                <a href="#" class="btn btn-small btn-dark">Ubah Alamat</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row margin-b-20">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="custom-container">
                                            <ul>
                                                <li>
                                                    <label> KURIR
                                                        <select class="selectpicker">
                                                            <option>JNE - Rp 18.000</option>
                                                            <option>TIKI - Rp 15.000</option>
                                                            <option>POS - Rp 10.000</option>
                                                        </select>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- SUB TOTAL -->
                            <div class="col-sm-5">
                                <div class="order-place">
                                    <h5>PESANAN ANDA</h5>
                                    <div class="order-detail">
                                        <p>PRODUK <span>TOTAL</span></p>
                                        <div class="item-order">
                                            <p>DRAEY TRENCH COAT <span class="color"> x1 </span></p>
                                            <p>COLOR: BLACK </p>
                                            <p class="text-right">250.00 USD</p>
                                        </div>
                                        <p>TOTAL HARGA <span>250.00 USD</span></p>
                                        <p>ONGKOS KIRIM <span>FREE SHIPPING</span></p>
                                        <p>TOTAL PESANAN <span>250.00 USD</span></p>
                                        <a href="#." class="btn btn-small btn-dark pull-right">PILIH METODE PEMBAYARAN</a> </div>
                                    </div>
                                    {{--<div class="pay-meth">--}}
                                        {{--<h5>PAYMENT METHODS</h5>--}}
                                        {{--<ul>--}}
                                            {{--<li>--}}
                                                {{--<div class="checkbox">--}}
                                                    {{--<input id="checkbox3-1" class="styled" type="checkbox">--}}
                                                    {{--<label for="checkbox3-1"> DIRECT BANK TRANSFER </label>--}}
                                                {{--</div>--}}
                                                {{--<p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>--}}
                                            {{--</li>--}}
                                            {{--<li>--}}
                                                {{--<div class="checkbox">--}}
                                                    {{--<input id="checkbox3-2" class="styled" type="checkbox">--}}
                                                    {{--<label for="checkbox3-2"> CHEQUE PAYMENT </label>--}}
                                                {{--</div>--}}
                                            {{--</li>--}}
                                            {{--<li>--}}
                                                {{--<div class="checkbox">--}}
                                                    {{--<input id="checkbox3-3" class="styled" type="checkbox">--}}
                                                    {{--<label for="checkbox3-3"> PAYPAL </label>--}}
                                                {{--</div>--}}
                                            {{--</li>--}}
                                            {{--<li>--}}
                                                {{--<div class="checkbox">--}}
                                                    {{--<input id="checkbox3-4" class="styled" type="checkbox">--}}
                                                    {{--<label for="checkbox3-4"> I’VE READ AND ACCEPT THE <span class="color"> TERMS & CONDITIONS </span> </label>--}}
                                                {{--</div>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                        {{--<a href="#." class="btn btn-small btn-dark pull-right">PLACE ORDER</a> </div>--}}
                                {{--</div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
