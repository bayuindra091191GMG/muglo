@extends('layouts.frontend')

@section('body-content')
    <!-- CONTENT START -->
    <div class="content">

        <!--======= SUB BANNER =========-->
        <section class="sub-banner animate fadeInUp" data-wow-delay="0.4s">
            <div class="container">
                <h4>ATUR KATA SANDI</h4>
                <!-- Breadcrumb -->
                <ol class="breadcrumb">
                    <li><a href="#">Beranda</a></li>
                    <li class="active">Kata Sandi</li>
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
                                    {!! Form::open(array('action' => 'Frontend\UserController@passwordUpdate', 'method' => 'POST', 'role' => 'form')) !!}
                                    {{ csrf_field() }}

                                    @if(\Illuminate\Support\Facades\Session::has('success'))
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="alert alert-success alert-dismissable">
                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                    Berhasil ubah kata sandi anda!
                                                </div>
                                            </div>
                                        </div>
                                    @endif

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
                                                <label for="password-current">Current Password:</label>
                                                <input id="password-current" name="password-current" type="password" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label for="password">New Password:</label>
                                                <input id="password" name="password" type="password" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label for="password-confirm">Confirm Password:</label>
                                                <input id="password-confirm" name="password-confirm" type="password" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-small btn-dark" value="Ganti Kata Sandi">
                                            </div>
                                        </div>
                                    </div>

                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection