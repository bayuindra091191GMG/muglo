@extends('layouts.frontend')

@section('body-content')
    <!-- CONTENT START -->
    <div class="content">

        <!--======= SUB BANNER =========-->
        <section class="sub-banner animate fadeInUp" data-wow-delay="0.4s">
            <div class="container">
                <h4>ALAMAT</h4>
                <!-- Breadcrumb -->
                <ol class="breadcrumb">
                    <li><a href="#">Beranda</a></li>
                    <li class="active">Alamat</li>
                </ol>
            </div>
        </section>

        <!--  FAQS -->
        <section class="section-p-30px">
            <div class="container">
                <div class="row animate fadeInUp" data-wow-delay="0.4s">
                    <div class="col-md-3">
                        @include('frontend.partials._sidebar-setting')
                    </div>

                    <!--======= SETTING =========-->
                    <div class="col-md-9">
                        <div class="faqs">
                            <div class="col-lg-12 col-md-12">
                                <div class="custom-container">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            @if(!empty($addr))
                                                <p>
                                                    {{ $addr->name }}<br/>
                                                    {{ $addr->detail }}<br/>
                                                    {{ $addr->subdistrict_name }}<br/>
                                                    {{ $addr->city_name }}<br/>
                                                    {{ $addr->province_name }}, {{ $addr->postal_code }}<br/>
                                                </p>
                                                <a href="{{ route('user-address-edit') }}" class="btn btn-small btn-dark">Ubah</a>
                                            @else
                                                <p>
                                                    Anda belum membuat alamat baru
                                                </p>
                                                <a href="{{ route('user-address-create') }}" class="btn btn-small btn-dark">Tambah</a>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection