@extends('layouts.frontend')

@section('body-content')
    <!-- CONTENT START -->
    <div class="content">

        <!--======= SUB BANNER =========-->
        <section class="sub-banner animate fadeInUp" data-wow-delay="0.4s">
            <div class="container">
                <h4>KONFIRMASI TRANSFER BANK</h4>
                <!-- Breadcrumb -->
                <ol class="breadcrumb">
                    <li><a href="#">Beranda</a></li>
                    <li class="active">Konfirmasi Transfer Bank</li>
                </ol>
            </div>
        </section>

        <!--  FAQS -->
        <section class="section-p-30px">
            <div class="container">
                <div class="row animate fadeInUp" data-wow-delay="0.4s">
                    <div class="col-md-3"></div>

                    <!--======= SETTING =========-->
                    <div class="col-md-6">
                        <div class="faqs">
                            <div class="col-lg-12 col-md-12">
                                <div class="custom-container">
                                    {!! Form::open(array('action' => array('Frontend\PaymentController@bankConfirmSubmit', $trxId), 'method' => 'POST', 'role' => 'form')) !!}
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
                                                <label for="transfer_date">Tanggal Transfer:</label>
                                                <input id="transfer_date" name="transfer_date" type="text" class="form-control" value="{{ old('transfer_date') }}" placeholder="Tanggal transfer pembayaran" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label for="bank_name">Bank Pengirim:</label>
                                                <input id="bank_name" name="bank_name" type="text" class="form-control" value="{{ old('bank_name') }}" placeholder="BCA, Mandiri, BNI, etc" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label for="sender_name">Nama Rekening Pengirim:</label>
                                                <input id="sender_name" name="sender_name" type="text" class="form-control" value="{{ old('sender_name') }}" placeholder="Atas nama rekening pengirim" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label for="receiver_bank">Bank Tujuan/Penerima:</label>
                                                <select id="receiver_bank" name="receiver_bank" class="form-control">
                                                    <option value="-1" selected>Pilih bank tujuan</option>
                                                    @foreach($banks as $bank)
                                                        <option value="{{ $bank->id }}">{{ $bank->bank_name }} - {{ $bank->acc_number }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label for="transfer_amount">Jumlah Transfer:</label>
                                                <input id="transfer_amount" name="transfer_amount" type="text" class="form-control" value="{{ old('transfer_amount') }}" placeholder="Jumlah yang ditransfer" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label for="receipt">Bukti Pembayaran (Opsional):</label>
                                                {!! Form::file('receipt', array('id' => 'receipt')) !!}
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
                    <div class="col-md-3"></div>
                </div>
            </div>
        </section>
    </div>

@endsection