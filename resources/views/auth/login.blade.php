@extends('layouts.auth')

@section('body-content')
    <!-- CONTENT START -->
    <div class="content">

        <!--======= SUB BANNER =========-->
        <section class="sub-banner animate fadeInUp" data-wow-delay="0.4s">
            <div class="container">
                <div class="logo margin-b-20"> <a href="{{ route('landing') }}"><img src="{{ asset('frontend_images/logomuglo.png') }}" style="width: auto; height: 45px;" alt=""></a> </div>
                <h4>Masuk Muglo</h4>
            </div>
        </section>

        <!--  LOGIN FORM -->
        <section class="section-p-30px">
            <div class="container">
                <div class="row animate fadeInUp" data-wow-delay="0.4s">
                    <div class="col-lg-3  col-md-3 col-sm-3"></div>
                    <div class="col-lg-6  col-md-6 col-sm-6 col-xs-12">
                        <div class="faqs">
                            <div class="col-lg-12 col-md-12">
                                <div class="custom-container" style="text-align: center;">
                                    <form role="form" method="POST" action="{{ route('signin') }}">
                                        {{ csrf_field() }}

                                        @if($errors->count() > 0)
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="alert alert-danger alert-dismissable">
                                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                        @foreach($errors->all() as $error)
                                                            {{ $error }}<br/>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <input id="email" name="email" type="text" class="form-control" placeholder="Email" value="{{ old('email') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <input id="password" name="password" type="password" class="form-control" placeholder="Kata Sandi">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <div class="pull-left">
                                                        <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                                        <label for="remember"> Ingat Saya</label>
                                                    </div>
                                                    <a href="#" class="pull-right" style="text-decoration: underline !important;">Lupa Kata Sandi</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <input type="submit" class="btn btn-small btn-dark" value="Masuk ke Muglo">
                                                </div>
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    Belum punya akun?<br/>
                                                    <a href="#" style="text-decoration: underline !important;">Daftar Sekarang</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3  col-md-3 col-sm-3"></div>
                </div>
            </div>
        </section>
    </div>

@endsection