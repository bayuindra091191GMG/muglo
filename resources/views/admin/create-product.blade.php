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
    <div class="">
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Tambah Produk Baru</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        {!! Form::open(array('action' => 'Admin\ProductController@store', 'method' => 'POST', 'role' => 'form', 'enctype' => 'multipart/form-data', 'class' => 'form-horizontal form-label-left', 'novalidate')) !!}
                        {{ csrf_field() }}

                        @if(count($errors))
                            <div class="form-group">
                                <div class="col-md-3 col-sm-3 col-xs-12"></div>
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

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="name" class="form-control col-md-7 col-xs-12"  name="name" required="required" type="text">
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Kategori <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select id="category" name="category" class="form-control col-md-7 col-xs-7">
                                    <option value="-1">Select category</option>

                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" >Harga <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12 price-format">
                                <input id="price" name="price" required class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Opsi Diskon
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-default active">
                                        <input type="radio" name="options" value="none" id="disc-none-opt" checked> Tidak Diskon
                                    </label>
                                    <label class="btn btn-default">
                                        <input type="radio" name="options" value="percent" id="disc-percent-opt"> Diskon Persentase
                                    </label>
                                    <label class="btn btn-default">
                                        <input type="radio" name="options" value="flat" id="disc-flat-opt"> Diskon Angka
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div id="disc-percent" class="item form-group" style="display: none;">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Diskon Persentase
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="discount-percent" name="discount-percent" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div id="disc-flat" class="item form-group" style="display: none;">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Diskon Angka
                            </label>
                            <div class="price-format col-md-6 col-sm-6 col-xs-12">
                                <input id="discount-flat" name="discount-flat" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Berat (Gram) <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12 price-format">
                                <input id="weight" name="weight" required class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="item form-group" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Stok
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="qty" name="qty" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        @if ($errors->has('qty'))
                            <div class="form-group">
                                <div class="control-label col-md-3 col-sm-3 col-xs-12"></div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="alert alert-danger">
                                        {{ $errors->first('qty') }}
                                    </div>
                                </div>
                            </div>
                        @endif

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" style="padding-top: 0;">Foto Utama <span class="required">*</span><br/>
                                <span style="color: red;">recommended image ratio 3:4 or exact 270x370 pixel</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                {!! Form::file('product-featured', array('id' => 'product-featured', 'class' => 'file-loading')) !!}
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" style="padding-top: 0;">Tambah Foto<br/>
                                <span style="color: red;">recommended image ratio 3:4 or exact 270x370 pixel</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::file('product-photos[]', array('id' => 'product-photos', 'class' => 'file-loading', 'multiple' )) !!}
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Deskripsi Tambahan
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <textarea rows="5" style="resize: vertical" id="description" name="description" class="form-control col-md-7 col-xs-12"></textarea>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                                <a href="{{ route('product-list') }}" class="btn btn-primary">Batal</a>
                                <button id="send" type="submit" class="btn btn-success">Tambah Baru</button>
                            </div>
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page content -->

<!-- footer content -->
@include('admin.partials._footer')
<!-- footer content -->

@endsection