@extends('layouts.frontend')

@section('body-content')
    <!-- CONTENT START -->
    <div class="content">

        <!--======= SUB BANNER =========-->
        <section class="sub-banner animate fadeInUp" data-wow-delay="0.4s">
            <div class="container">
                <h4>DAFTAR TRANSAKSI</h4>
                <!-- Breadcrumb -->
                <ol class="breadcrumb">
                    <li><a href="#">Beranda</a></li>
                    <li class="active">Daftar Transaksi</li>
                </ol>
            </div>
        </section>

        <!--  FAQS -->
        <section class="section-p-30px">
            <div class="container">
                <div class="row animate fadeInUp" data-wow-delay="0.4s">
                    <div class="col-md-3">
                        @include('frontend.partials._sidebar-transaction')
                    </div>

                    <!--======= SETTING =========-->
                    <div class="col-md-9">
                        <div class="faqs">
                            <div class="col-lg-12 col-md-12">
                                <div class="custom-container">
                                    <form class="form-inline">
                                        <div class="form-group">
                                            <div class="input-daterange input-group" id="datepicker">
                                                <input id="start" type="text" class="input-sm form-control" name="start"/>
                                                <span  class="input-group-addon">to</span>
                                                <input id="end" type="text" class="input-sm form-control" name="end"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" id="invoice" name="invoice" class="form-control" id="email" placeholder="invoice">
                                        </div>
                                        <div class="btn btn-default" onclick="orderFilter('/purchase/order')"><i class="fa fa-search"></i></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection