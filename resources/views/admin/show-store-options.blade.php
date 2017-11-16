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
            <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h3>Alamat Toko</h3>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">
                        @if(!empty($option) && !empty($option->address_name))
                            <p>
                                {{ $option->address_name }}<br/>
                                {{ $option->address_detail }}<br/>
                                {{ $option->subdistrict_name }}<br/>
                                {{ $option->city_name }}<br/>
                                {{ $option->province_name }}, {{ $option->postal_code }}<br/>
                            </p>
                            <a href="{{ route('option-address-edit') }}" class="btn btn-small btn-dark">Ubah Alamat</a>
                        @else
                            <p>
                                Anda belum membuat alamat baru
                            </p>
                            <a href="{{ route('option-address-create') }}" class="btn btn-small btn-dark">Buat Alamat Baru</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection