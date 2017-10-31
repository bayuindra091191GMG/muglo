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
                            <h2>Ubah Produk</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            {!! Form::open(array('action' => array('Admin\ProductController@update', $product->id), 'method' => 'POST', 'role' => 'form', 'enctype' => 'multipart/form-data', 'class' => 'form-horizontal form-label-left', 'novalidate')) !!}
                            {!! csrf_field() !!}

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
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama Produk <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-7 col-xs-12"  name="name" required="required" type="text" value="{{ $product->name }}">
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Kategori <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select id="category" name="category" class="form-control col-md-7 col-xs-1">
                                        <option value="-1">Pilih Kategori</option>
                                        @foreach($categories as $category)
                                            @if($category->id == $product->category_id)
                                                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                            @else
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" >Harga <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12 price-format">
                                    <input id="price" name="price" required class="form-control col-md-7 col-xs-12" value="{{ $product->getOriginal('price') }}">
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Opsi Diskon
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="btn-group" data-toggle="buttons">

                                        @if(!empty($product->discount))
                                            <label class="btn btn-default">
                                                <input type="radio" name="options" value="none" id="disc-none-opt"> Tidak Diskon
                                            </label>
                                            <label class="btn btn-default active">
                                                <input type="radio" name="options" value="percent" id="disc-percent-opt" checked> Persentase
                                            </label>
                                            <label class="btn btn-default">
                                                <input type="radio" name="options" value="flat" id="disc-flat-opt"> Angka
                                            </label>
                                        @elseif(!empty($product->discount_flat))
                                            <label class="btn btn-default">
                                                <input type="radio" name="options" value="none" id="disc-none-opt" checked> Tidak Diskon
                                            </label>
                                            <label class="btn btn-default">
                                                <input type="radio" name="options" value="percent" id="disc-percent-opt"> Persentase
                                            </label>
                                            <label class="btn btn-default active">
                                                <input type="radio" name="options" value="flat" id="disc-flat-opt" checked> Angka
                                            </label>
                                        @else
                                            <label class="btn btn-default active">
                                                <input type="radio" name="options" value="none" id="disc-none-opt" checked> Tidak Diskon
                                            </label>
                                            <label class="btn btn-default">
                                                <input type="radio" name="options" value="percent" id="disc-percent-opt"> Persentase
                                            </label>
                                            <label class="btn btn-default">
                                                <input type="radio" name="options" value="flat" id="disc-flat-opt"> Angka
                                            </label>
                                        @endif

                                    </div>
                                </div>
                            </div>

                            @if(!empty($product->discount))
                            <div id="disc-percent" class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Diskon Persentase
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="discount-percent" name="discount-percent" class="form-control col-md-7 col-xs-12" value="{{ $product->discount }}">
                                </div>
                            </div>

                            <div id="disc-flat" class="item form-group" style="display: none;">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Diskon Angka
                                </label>
                                <div class="price-format col-md-6 col-sm-6 col-xs-12">
                                    <input id="discount-flat" name="discount-flat" class="form-control col-md-7 col-xs-12" value="{{ $product->getOriginal('discount_flat') }}">
                                </div>
                            </div>
                            @elseif(!empty($product->discount_flat))
                                <div id="disc-percent" class="item form-group" style="display: none;">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Diskon Persentase
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="discount-percent" name="discount-percent" class="form-control col-md-7 col-xs-12" value="{{ $product->discount }}">
                                    </div>
                                </div>

                                <div id="disc-flat" class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Diskon Angka
                                    </label>
                                    <div class="price-format col-md-6 col-sm-6 col-xs-12">
                                        <input id="discount-flat" name="discount-flat" class="form-control col-md-7 col-xs-12" value="{{ $product->getOriginal('discount_flat') }}">
                                    </div>
                                </div>
                            @else
                                <div id="disc-percent" class="item form-group" style="display: none;">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Diskon Persentase
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="discount-percent" name="discount-percent" class="form-control col-md-7 col-xs-12" value="{{ $product->discount }}">
                                    </div>
                                </div>

                                <div id="disc-flat" class="item form-group" style="display: none;">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Diskon Angka
                                    </label>
                                    <div class="price-format col-md-6 col-sm-6 col-xs-12">
                                        <input id="discount-flat" name="discount-flat" class="form-control col-md-7 col-xs-12" value="{{ $product->getOriginal('discount_flat') }}">
                                    </div>
                                </div>
                            @endif

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Berat Dalam Gram <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12 price-format">
                                    <input id="weight" name="weight" required class="form-control col-md-7 col-xs-12" value="{{ $product->getOriginal('weight') }}">
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Stok
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="qty" name="qty" class="form-control col-md-7 col-xs-12" value="{{ $product->quantity }}">
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" style="padding-top: 0;">Gambar Utama<br/>
                                    <span style="color: red;">recommended image ratio 3:4 or exact 270x370 pixel</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    {!! Form::file('product-featured', array('id' => 'product-featured', 'class' => 'file-loading', 'data-image-featured-path' => asset('storage/product/'. $imgFeatured))) !!}
                                </div>
                            </div>

                            @if(!$imgPhotos->isEmpty())
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" style="padding-top: 0;">Gambar<br/>
                                        <span style="color: red;">recommended image ratio 3:4 or exact 270x370 pixel</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="cover-container">

                                            @foreach($imgPhotos as $photo)
                                                <div class="cover-item" id="{{ $photo->id. '_img' }}">
                                                    <div class="cover-image" style="background-image: url('{{ asset('storage/product/'. $photo->path) }}')">
                                                        <div class="cover-btn-group">
                                                            <div id="{{ $photo->id. '_btn_toggle' }}" class="btn btn-danger btn-cover-toggle" style="margin:0 auto;" onclick="makeFeatured('{{ $photo->id }}')">Make Featured</div><br/>
                                                            <div id="{{ $photo->id. '_btn_delete' }}" class="btn btn-danger btn-cover-delete" style="margin:0 auto;" onclick="deleteImageEdit('{{ $photo->id }}')" data-disabled="false")>Delete</div>

                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            @endif

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Tambah Gambar
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    {!! Form::file('product-photos[]', array('id' => 'product-photos', 'class' => 'file-loading', 'multiple' )) !!}
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Status <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select id="status" name="status" class="form-control col-md-7 col-xs-1">

                                        @if($product->status_id == 1)
                                            <option value="1" selected>Publish</option>
                                            <option value="0">Unpublish</option>
                                            <option value="2">Hapus</option>
                                        @else
                                            <option value="1">Publish</option>
                                            <option value="0" selected>Unpublish</option>
                                        @endif

                                    </select>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Deskripsi Tambahan
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea rows="5" id="description" name="description" class="form-control col-md-7 col-xs-12" style="resize: vertical;">{{ $product->description }}</textarea>
                                </div>
                            </div>

                            {{ Form::hidden('deleted_img_id', '', array('id' => 'deleted_img_id')) }}
                            {{ Form::hidden('img_featured_changed', '', array('id' => 'img_featured_changed')) }}
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <a href="{{ route('product-list') }}" class="btn btn-primary">Batal</a>
                                    <button id="send" type="submit" class="btn btn-success">Simpan</button>
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