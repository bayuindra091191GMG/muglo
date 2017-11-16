@extends('layouts.admin')

@section('dashboard')

    <!-- sidebar -->
    @include('admin.partials._sidebar')
    <!-- sidebar -->

    <!-- top navigation -->
    @include('admin.partials._navigation')
    <!-- /top navigation -->

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Store Data</h2>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">
                        <br />
                        <form id="store-address-option-form" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="/admin/option/address/store">
                            {{ csrf_field() }}

                            @if(count($errors))
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3 alert alert-danger alert-dismissible fade in" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                        </button>
                                        <ul>
                                            @foreach($errors->all() as $error)
                                                <li> {{ $error }} </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @endif

                            <div class="form-group">
                                <label for="name" class="control-label col-md-3 col-sm-3 col-xs-12">Nama <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="name" name="name" required class="form-control col-md-7 col-xs-12" placeholder="Nama alamat">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="province">Provinsi <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control" id="province" name="province" onchange="getCity()">
                                        <option value="-1" selected>Pilih Provinsi</option>
                                        @foreach($provinces as $province)
                                            <option value="{{ $province->id }}">{{ $province->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div id="city-wrapper" class="form-group" style="display: none;">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="city">Kota/Kabupaten <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control" id="city" name="city" onchange="getSubdistrict()">

                                    </select>
                                </div>
                            </div>
                            <div id="subdistrict-wrapper" class="form-group" style="display: none;">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="subdistrict">Kecamatan <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select id="subdistrict" name="subdistrict" class="form-control">

                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="detail" class="control-label col-md-3 col-sm-3 col-xs-12">Detil Alamat <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="detail" name="detail" required class="form-control col-md-7 col-xs-12" placeholder="Nama jalan, gedung, lantai, etc">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="postal_code">Kode Pos <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="postal_code" name="postal_code" required class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function getCity(){
            var provId = $("#province option:selected").val();

            if(provId !== '-1'){
                $('#city-wrapper').hide();
                $('#subdistrict-wrapper').hide();
                $.get('/admin/rajaongkir/city/' + provId, function (data) {
                    if(data.success == true) {
                        $('#city').html(data.html);
                        $('#city-wrapper').show();
                    }
                });
            }
        }

        function getSubdistrict(){
            var cityId = $("#city option:selected").val();

            if(cityId !== '-1'){
                $('#subdistrict-wrapper').hide();
                $.get('/admin/rajaongkir/subdistrict/' + cityId, function (data) {
                    if(data.success == true) {
                        $('#subdistrict').html(data.html);
                        $('#subdistrict-wrapper').show();
                    }
                });
            }
        }
    </script>
@endsection