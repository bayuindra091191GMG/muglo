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
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label for="name">Nama:</label>
                                                <input id="name" name="name" type="text" class="form-control" value="Bayu Indra" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label for="province">Provinsi:</label>
                                                <select id="province" name="province" class="form-control">
                                                    <option selected>Banten</option>
                                                    <option>Jawa Barat</option>
                                                    <option>Jakarta</option>
                                                    <option>Aceh</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label for="city">Kota:</label>
                                                <select id="city" name="city" class="form-control">
                                                    <option selected>Tangerang</option>
                                                    <option>Jakarta</option>
                                                    <option>Bandung</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label for="subdistrict">Kecamatan:</label>
                                                <select id="subdistrict" name="subdistrict" class="form-control">
                                                    <option selected>Karang Tengah</option>
                                                    <option>Batuceper</option>
                                                    <option>Ciledug</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label for="detail">Detil:</label>
                                                <textarea name="detail" cols="50" rows="5" class="form-control" value="Jl. Barata Tama 1" placeholder="Detil alamat (nama jalan, lantai, dsb)"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label for="postal">Kode Pos:</label>
                                                <input id="postal" name="postal" type="text" class="form-control" value="15157" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <a href="#" class="btn btn-small btn-dark">Simpan</a>
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