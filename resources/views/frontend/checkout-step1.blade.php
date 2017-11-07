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

                        @if(\Illuminate\Support\Facades\Session::has('error'))
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="alert alert-danger alert-dismissible fade in" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                        </button>
                                        <strong>{{ \Illuminate\Support\Facades\Session::get('error') }}</strong>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <div class="row">
                            <!-- ESTIMATE SHIPPING & TAX -->
                            <div class="col-sm-7">
                                <div class="row margin-b-20">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="custom-container">
                                            @if(!empty($addr))
                                                <div>
                                                    <h6>Detail Pembeli</h6>
                                                    {{ $addr->name }}<br/>
                                                    {{ $addr->detail }}<br/>
                                                    {{ $addr->subdistrict_name }}, {{ $addr->city_name }}<br/>
                                                    {{ $addr->province_name }}, {{ $addr->postal_code }}<br/>
                                                    {{ $user->phone }}
                                                </div>
                                                <div>
                                                    <a href="{{ route('user-address-edit', ['redirect' => 'checkout']) }}" class="btn btn-small btn-dark">Ubah Alamat</a>
                                                </div>
                                            @else
                                                <div>
                                                    <h6>Belum ada alamat</h6>
                                                </div>
                                                <div>
                                                    <a href="{{ route('user-address-create', ['redirect' => 'checkout']) }}" class="btn btn-small btn-dark">Tambah Alamat</a>
                                                </div>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                                <div class="row margin-b-20">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="custom-container" id="checkout-shipping">
                                            <ul>
                                                <li>
                                                    <label> KURIR
                                                        <select id="checkout-shipping-option" class="selectpicker" onchange="selectShippingAgent(this)">
                                                            <option value="-1">Pilih agen pengiriman</option>

                                                            @if(!empty($carts->first()->delivery_fee))
                                                                @php( $courierCode =  $carts->first()->courier->code )
                                                                @php( $shippingCode = $carts->first()->deliveryType->code )
                                                                @foreach($deliveries as $delivery)
                                                                    @php( $feeStr = number_format($delivery->getFee(), 0, ",", ".") )
                                                                    <option value="{{ $delivery->getAgentId() }},{{ $delivery->getShippingId() }}" data-agent-id="{{ $delivery->getAgentId() }}" data-shipping-id="{{ $delivery->getShippingId() }}" data-fee="{{ $delivery->getFee() }}" @if($courierCode == $delivery->getAgent() && $shippingCode == $delivery->getShipping()) selected @endif>{{ $delivery->getAgentDesc() }} - {{ $delivery->getShippingDesc() }} - Rp {{ $feeStr }}</option>
                                                                @endforeach
                                                            @else
                                                                @foreach($deliveries as $delivery)
                                                                    @php( $feeStr = number_format($delivery->getFee(), 0, ",", ".") )
                                                                    <option value="{{ $delivery->getAgentId() }},{{ $delivery->getShippingId() }}" data-agent-id="{{ $delivery->getAgentId() }}" data-shipping-id="{{ $delivery->getShippingId() }}" data-fee="{{ $delivery->getFee() }}">{{ $delivery->getAgentDesc() }} - {{ $delivery->getShippingDesc() }} - Rp {{ $feeStr }}</option>
                                                                @endforeach
                                                            @endif
                                                            {{--<option>JNE - Rp 18.000</option>--}}
                                                            {{--<option>TIKI - Rp 15.000</option>--}}
                                                            {{--<option>POS - Rp 10.000</option>--}}
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
                                        @foreach($carts as $cart)
                                            <div class="item-order">
                                                <p>{{ $cart->product->name }} <span class="color"> x{{ $cart->quantity }} </span></p>
                                                <p class="text-right">Rp {{ $cart->product->price }}</p>
                                            </div>
                                        @endforeach
                                        {{--<div class="item-order">--}}
                                            {{--<p>DRAEY TRENCH COAT <span class="color"> x1 </span></p>--}}
                                            {{--<p>COLOR: BLACK </p>--}}
                                            {{--<p class="text-right">250.00 USD</p>--}}
                                        {{--</div>--}}
                                        @php( $totalPriceStr = number_format($totalPrice, 0, ",", ".") )
                                        <p>TOTAL HARGA <span id="checkout-total-price" data-total-price="{{ $totalPrice }}">Rp {{ $totalPriceStr }}</span></p>

                                        @if(!empty($carts->first()->delivery_fee))
                                            <p id="checkout-shipping-section">
                                                ONGKOS KIRIM <span id="checkout-shipping-cost">Rp {{ $carts->first()->delivery_fee }}</span>
                                            </p>
                                        @else
                                            <p id="checkout-shipping-section" style="display: none;">
                                                ONGKOS KIRIM <span id="checkout-shipping-cost">Rp 500.000</span>
                                            </p>
                                        @endif

                                        <p>TOTAL PESANAN <span id="checkout-total-payment">Rp {{ $totalPayment }}</span></p>
                                        {!! Form::open(array('action' => 'Frontend\PaymentController@step1Submit', 'method' => 'POST', 'role' => 'form')) !!}

                                        @if(!empty($carts->first()->delivery_fee))
                                            {{ Form::hidden('courier_id', $carts->first()->courier_id , array('id' => 'courier_id')) }}
                                            {{ Form::hidden('delivery_type_id', $carts->first()->delivery_type_id, array('id' => 'delivery_type_id')) }}
                                            {{ Form::hidden('delivery_fee', $carts->first()->delivery_fee, array('id' => 'delivery_fee')) }}
                                        @else
                                            {{ Form::hidden('courier_id', '-1' , array('id' => 'courier_id')) }}
                                            {{ Form::hidden('delivery_type_id', '-1', array('id' => 'delivery_type_id')) }}
                                            {{ Form::hidden('delivery_fee', '0', array('id' => 'delivery_fee')) }}
                                        @endif

                                            <input type="submit" class="btn btn-small btn-dark pull-right" value="PILIH METODE PEMBAYARAN">
                                        {!! Form::close() !!}
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
