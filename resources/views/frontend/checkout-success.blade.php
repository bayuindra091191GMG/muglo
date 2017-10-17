@extends('layouts.frontend')

@section('body-content')
    <div class="content">

        <!--======= SUB BANNER =========-->
        <section class="sub-banner">
            <div class="container">
                <h4>PEMBAYARAN</h4>

                <!-- Breadcrumb -->
                <ol class="breadcrumb">
                    <li><a href="#">Beranda</a></li>
                    <li class="active">Pembayaran</li>
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
                        <li class="col-sm-4"> <i class="fa fa-truck"></i>
                            <h6>PENGIRIMAN</h6>
                        </li>

                        <!-- CHECK OUT DETAIL -->
                        <li class="col-sm-4 current"> <i class="fa fa-money"></i>
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
                                            <hr/>
                                            <div>
                                                Kurir: JNE YES - Rp 18.000
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
                                                    <h6 style="margin-bottom: 8px;">Metode Pembayaran</h6>
                                                    <div class="funkyradio">
                                                        <div class="funkyradio-primary">
                                                            <input type="radio" name="radio" id="radio1" value="manual" checked/>
                                                            <label for="radio1">Transfer Bank</label>
                                                        </div>
                                                        <div class="funkyradio-primary">
                                                            <input type="radio" name="radio" id="radio2" value="credit_card"/>
                                                            <label for="radio2">Kartu Kredit - Biaya Admin 3%</label>
                                                        </div>
                                                        <div class="funkyradio-primary">
                                                            <input type="radio" name="radio" id="radio3" value="bca_va"/>
                                                            <label for="radio3">Akun Virtual BCA - Biaya Admin Rp 4.000</label>
                                                        </div>
                                                        <div class="funkyradio-primary">
                                                            <input type="radio" name="radio" id="radio4" value="permata_va"/>
                                                            <label for="radio4">Akun Virtual Permata - Biaya Admin Rp 4.000</label>
                                                        </div>
                                                    </div>
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
                                        <p>ADMIN FEE <span id="checkout-admin-fee">Rp 4.000</span></p>
                                        <p>TOTAL PESANAN <span>250.00 USD</span></p>
                                        <a href="#." class="btn btn-small btn-dark pull-right">BAYAR SEKARANG</a> </div>
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
