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
                                                {{ $addr->name }}<br/>
                                                {{ $addr->detail }}<br/>
                                                {{ $addr->subdistrict_name }}, {{ $addr->city_name }}<br/>
                                                {{ $addr->province_name }}, {{ $addr->postal_code }}<br/>
                                                {{ $user->phone }}
                                            </div>
                                            <hr/>
                                            <div>
                                                Kurir: {{ $carts->first()->courier->description }} {{ $carts->first()->deliveryType->description }} - Rp {{ $carts->first()->delivery_fee }}
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
                                                        @foreach($methods as $method)
                                                            <div class="funkyradio-primary">
                                                                <input type="radio" name="payment" data-fee="{{ $method->fee ?? 0 }}" data-code="{{ $method->code }}" id="{{ 'radio_'. $method->id }}" value="{{ $method->id }}" @if($method->code == 'manual') checked @endif/>
                                                                <label for="{{ 'radio_'. $method->id }}">{{ $method->description }} @if($method->code != 'manual') - Rp {{ $method->fee }} @endif @if($method->code == 'credit_card') + 3% @endif</label>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </li>
                                                <li class=" margin-t-20">
                                                    <a href="#." class="btn btn-small btn-dark">BAYAR SEKARANG</a>
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
                                        @foreach($carts as $cart)
                                            <div class="item-order">
                                                <p>{{ $cart->product->name }} <span class="color"> x{{ $cart->quantity }} </span></p>
                                                <p class="text-right">Rp {{ $cart->product->price }}</p>
                                            </div>
                                        @endforeach

                                        @php( $totalPriceStr = number_format($totalPrice, 0, ",", ".") )
                                        <p>TOTAL HARGA <span id="checkout-total-price" data-total-price="{{ $totalPrice }}">Rp {{ $totalPriceStr }}</span></p>
                                        <p>ONGKOS KIRIM <span id="checkout-shipping-cost" data-delivery-fee="{{ $carts->first()->getOriginal('delivery_fee') }}">Rp {{ $carts->first()->delivery_fee }}</span></p>
                                        <p id="checkout-admin-fee-section" style="display: none;">BIAYA ADMIN <span id="checkout-admin-fee" data-admin-fee="4000">Rp 4.000</span></p>
                                        <p>TOTAL PESANAN <span id="checkout-total-payment">Rp {{ $totalPayment }}</span></p>
                                    </div>
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
