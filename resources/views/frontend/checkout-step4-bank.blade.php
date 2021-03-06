@extends('layouts.frontend')

@section('body-content')
    <!-- BREADCRUMBS -->
    <section class="breadcrumb parallax margbot30"></section>
    <!-- //BREADCRUMBS -->


    <!-- PAGE HEADER -->
    <section class="page_header">

        <!-- CONTAINER -->
        <div class="container border0 margbot0">
            <h3 class="pull-left"><b>Checkout</b></h3>

            <div class="pull-right">
                <a href="{{ route('cart-list') }}" >Back shopping bag<i class="fa fa-angle-right"></i></a>
            </div>
        </div><!-- //CONTAINER -->
    </section><!-- //PAGE HEADER -->


    <!-- CHECKOUT PAGE -->
    <section class="checkout_page">

        <!-- CONTAINER -->
        <div class="container">

            <!-- CHECKOUT BLOCK -->
            <div class="checkout_block">
                <ul class="checkout_nav">
                    <li class="done_step2">1. Shipping Address</li>
                    <li class="done_step">2. Delivery</li>
                    <li class="active_step">3. Confirm Order</li>
                    <li class="last">4. Payment</li>
                </ul>


                <form class="checkout_form clearfix" role="form" method="POST" action="{{ route('checkout3BankSubmit') }}">
                    {{ csrf_field() }}

                    @if ($errors->has('sender_name') || $errors->has('transfer_date') || $errors->has('receiver_bank') || $errors->has('transfer_amount'))
                        <div class="form-group">
                            <div class="control-label col-md-3 col-sm-3 col-xs-12"></div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="alert alert-danger">
                                    {{ $errors->first('sender_name') }}
                                    <br>
                                    {{ $errors->first('transfer_date') }}
                                    <br>
                                    {{ $errors->first('receiver_bank') }}
                                    <br>
                                    {{ $errors->first('transfer_amount') }}
                                </div>
                            </div>
                        </div>
                    @endif

                    <div class="checkout_form_input ">
                        <label>Sender Name <span class="color_red">*</span></label>
                        <input type="text" name="sender_name" value="" placeholder="" />
                    </div>

                    <div class="checkout_form_input ">
                        <label>Transfer date <span class="color_red">*</span></label>
                        <div class="input-group date" data-provide="datepicker" data-date-format="dd/mm/yyyy">
                            <input type="text" name="transfer_date" class="form-control">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                        </div>
                    </div>


                    <div class="checkout_form_input ">
                        <label>Receiver Bank <span class="color_red">*</span></label>
                        <input type="text" name="receiver_bank" value="" placeholder="" />
                    </div>

                    <div class="checkout_form_input">
                        <label>Transfer Amount <span class="color_red">*</span></label>
                        <div class="price-format">
                            <input type="text" name="transfer_amount" value="" placeholder="" />
                        </div>
                    </div>

                    <div class="checkout_form_input2 ">
                        <label>Note</label>
                        <input type="text" name="note" value="" placeholder="" />
                    </div>
                    <div class="clear"></div>

                    <div class="checkout_form_note">All fields marked with (<span class="color_red">*</span>) are required</div>

                    <input type="submit" value="Submit" class="btn active pull-right">
                </form>
            </div><!-- //CHECKOUT BLOCK -->
        </div><!-- //CONTAINER -->
    </section><!-- //CHECKOUT PAGE -->
@endsection