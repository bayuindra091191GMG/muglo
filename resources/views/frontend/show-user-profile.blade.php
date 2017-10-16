@extends('layouts.frontend')

@section('body-content')
    <!-- CONTENT START -->
    <div class="content">

        <!--======= SUB BANNER =========-->
        <section class="sub-banner animate fadeInUp" data-wow-delay="0.4s">
            <div class="container">
                <h4>PROFIL ANDA</h4>
                <!-- Breadcrumb -->
                <ol class="breadcrumb">
                    <li><a href="#">Beranda</a></li>
                    <li class="active">Profil Anda</li>
                </ol>
            </div>
        </section>

        <!--  FAQS -->
        <section class="section-p-30px">
            <div class="container">
                <div class="row animate fadeInUp" data-wow-delay="0.4s">
                    <div class="col-md-3">
                        <div class="side-bar">
































































































































































                            <!--  SEARCH -->
                            {{--<div class="search">--}}
                                {{--<form>--}}
                                    {{--<input type="text" placeholder="SEARCH FAQ">--}}
                                    {{--<button type="submit"> <i class="fa fa-search"></i></button>--}}
                                {{--</form>--}}
                            {{--</div>--}}

                            <!-- FAQS NAV -->
                            <ul class="cate faq-cate">
                                <li><a href="#."> Profil Anda</a></li>
                                <li><a href="#."> Keamanan dan Kata Sandi</a></li>
                                <li><a href="#."> Lain-lain</a></li>
                            </ul>
                        </div>
                    </div>

                    <!--======= FAQS =========-->
                    <div class="col-md-9">
                        <div class="faqs">
                            <div class="col-lg-12 col-md-12">
                                <div class="setting-container">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label for="email">Email:</label>
                                                <input id="email" type="text" class="form-control" readonly value="bayuindra091191@gmail.com">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="fname">Nama Depan:</label>
                                                <input id="fname" type="text" class="form-control" readonly value="Bayu">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="lname">Nama Belakang:</label>
                                                <input id="lname" type="text" class="form-control" readonly value="Indra">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label for="phone">Nomor Telepon:</label>
                                                <input id="phone" type="text" class="form-control" readonly value="081315908000">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <a href="#" class="btn btn-small btn-dark">Edit</a>
                                            </div>
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