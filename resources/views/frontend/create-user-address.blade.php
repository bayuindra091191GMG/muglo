@extends('layouts.frontend')

@section('body-content')
    <!-- CONTENT START -->
    <div class="content">

        <!--======= SUB BANNER =========-->
        <section class="sub-banner animate fadeInUp" data-wow-delay="0.4s">
            <div class="container">
                <h4>TAMBAH ALAMAT BARU</h4>
                <!-- Breadcrumb -->
                <ol class="breadcrumb">
                    <li><a href="#">Beranda</a></li>
                    <li>Alamat</li>
                    <li class="active">Tambah Baru</li>
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
                                    {!! Form::open(array('action' => 'Frontend\UserAddressController@store', 'method' => 'POST', 'role' => 'form')) !!}
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
                                                <label for="name">Nama:</label>
                                                <input id="name" name="name" type="text" class="form-control" required value="{{ old('name') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label for="province">Provinsi:</label>
                                                <select id="province" name="province" class="form-control" onchange="getCity()">
                                                    <option value="-1" selected>Pilih Provinsi</option>
                                                    @foreach($provinces as $province)
                                                        <option value="{{ $province->id }}">{{ $province->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" id="section-city" style="display: none;">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label for="city">Kota:</label>
                                                <select id="city" name="city" class="form-control" onchange="getSubdistrict()">

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" id="section-subdistrict" style="display: none;">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label for="subdistrict">Kecamatan:</label>
                                                <select id="subdistrict" name="subdistrict" class="form-control">

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label for="detail">Detil:</label>
                                                <textarea name="detail" cols="50" rows="5" class="form-control" placeholder="Detil alamat (nama jalan, lantai, dsb)">{{ old('detail') }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label for="postal">Kode Pos:</label>
                                                <input id="postal" name="postal" type="text" class="form-control" required value="{{ old('postal') }}">
                                            </div>
                                        </div>
                                    </div>

                                    {{ Form::hidden('redirect', $redirect, array('id' => 'redirect')) }}

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

    <script>
        function getCity(){
            var provinceId = $("#province option:selected").val();
            $('#section-city').hide();
            $('#section-subdistrict').hide();
            $.get('/rajaongkir/city/' + provinceId, function (data) {
                if(data.success == true) {
                    $('#city').html(data.html);
                    $('#section-city').show();
                }
            });
        }

        function getSubdistrict(){
            var cityId = $("#city option:selected").val();
            $('#section-subdistrict').hide();
            $.get('/rajaongkir/subdistrict/' + cityId, function (data) {
                if(data.success == true) {
                    $('#subdistrict').html(data.html);
                    $('#section-subdistrict').show();
                }
            });
        }
    </script>

@endsection