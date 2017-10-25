@extends('layouts.auth')

@section('body-content')
    <!-- CONTENT START -->
    <div class="content">

        <!--======= SUB BANNER =========-->
        <section class="sub-banner animate fadeInUp" data-wow-delay="0.4s">
            <div class="container">
                <div class="logo margin-b-20"> <a href="#."><img src="{{ asset('frontend_images/logomuglo.png') }}" style="width: auto; height: 45px;" alt=""></a> </div>
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
                                <div class="custom-container">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input id="email" name="email" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="fname">Nama Depan</label>
                                                <input id="fname" name="fname" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="lname">Nama Belakang</label>
                                                <input id="lname" name="lname" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label for="phone">Nomor Ponsel</label>
                                                <input id="phone" name="phone" type="number" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label>Gender</label>
                                                <div class="funkyradio">
                                                    <div class="funkyradio-primary">
                                                        <input type="radio" name="gender" id="radio1" value="male" checked />
                                                        <label for="radio1" style="margin-top: 1em;">Pria</label>
                                                    </div>
                                                    <div class="funkyradio-primary">
                                                        <input type="radio" name="gender" id="radio2" value="female"/>
                                                        <label for="radio2" style="margin-top: 1em;">Wanita</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label for="password">Kata Sandi</label>
                                                <input id="password" name="password" type="password" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label for="confirm-password">Konfirmasi Sandi Anda</label>
                                                <input id="confirm-password" name="confirm-password" type="password" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <a href="#" class="btn btn-small btn-dark">Daftar Sekarang</a>
                                            </div>
                                        </div>
                                    </div>
                                    <hr/>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                Sudah punya akun?<br/>
                                                <a href="#" style="text-decoration: underline !important;">Masuk ke Muglo</a>
                                            </div>
                                        </div>
                                    </div>
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