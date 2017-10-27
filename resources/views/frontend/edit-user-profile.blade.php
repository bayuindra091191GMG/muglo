@extends('layouts.frontend')

@section('body-content')
    <!-- CONTENT START -->
    <div class="content">

        <!--======= SUB BANNER =========-->
        <section class="sub-banner animate fadeInUp" data-wow-delay="0.4s">
            <div class="container">
                <h4>UBAH PROFIL ANDA</h4>
                <!-- Breadcrumb -->
                <ol class="breadcrumb">
                    <li><a href="#">Beranda</a></li>
                    <li>Profil Anda</li>
                    <li class="active">Ubah</li>
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
                                    {!! Form::open(array('action' => 'Frontend\UserController@update', 'method' => 'POST', 'role' => 'form')) !!}
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
                                                <label for="email">Email:</label>
                                                <input id="email" type="text" class="form-control" value="{{ $user->email }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="fname">Nama Depan:</label>
                                                <input id="fname" type="text" class="form-control" value="{{ $user->first_name }}" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="lname">Nama Belakang:</label>
                                                <input id="lname" type="text" class="form-control" value="{{ $user->last_name }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label for="phone">Nomor Telepon:</label>
                                                <input id="phone" type="number" class="form-control" value="{{ $user->phone }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-small btn-dark" value="Simpan">
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