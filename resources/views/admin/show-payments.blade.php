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
            <div class="page-title">
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            @include('admin.partials._success')
                            <h2>Status Pembayaran</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Invoice</th>
                                    <th>Nama Pembeli</th>
                                    <th>Metode Pembayaran</th>
                                    <th>Nama Pengirim</th>
                                    <th>Jumlah Transfer</th>
                                    <th>Total Pembayarab</th>
                                    <th>Tanggal Transfer</th>
                                    <th>Tanggal Pembayaran Terkonfirmasi</th>
                                    <th>Status</th>
                                    <th>Opsi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($transactions as $trx)
                                    @php( $trans = $trx->transfer_confirmation()->first())
                                    <tr>
                                        <td>{{ $trx->invoice }}</td>
                                        <td>{{ $trx->user->first_name }}&nbsp;{{ $trx->user->last_name }}</td>
                                        <td>{{ $trx->payment_method->description }}</td>
                                        <td>{{ $trans->sender_name ?? '-'}}</td>
                                        <td>
                                            @if(!empty($trans))
                                                Rp {{ $trans->transfer_amount }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td>Rp {{ $trx->total_payment }}</td>
                                        <td>
                                            @if(!empty($trans->transfer_date))
                                                {{ \Carbon\Carbon::parse($trans->transfer_date)->format('j M Y') }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td>
                                            @if(!empty($trans->created_on))
                                                {{ \Carbon\Carbon::parse($trans->created_on)->format('j M Y G:i:s') }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td>
                                            @if($trx->status_id == 3)
                                                <span style="color: red;">Pending Payment</span>
                                            @elseif($trx->status_id == 4)
                                                <span style="color: orange;">In Verification</span>
                                            @else
                                                <span style="color: orange;">Challenge</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="/admin/transaction/detail/{{ $trx->id }}" class="btn btn-primary">Detail</a>
                                            @if(!empty($trans))
                                                <a onclick="modalPop('{{ $trans->id }}', 'transfer', '/admin/payment/confirm/')" class="btn btn-success">Konfirmasi</a>
                                            @endif
                                            <a onclick="modalPop('{{ $trx->id }}', 'cancel', '/admin/payment/cancel/')" class="btn btn-danger">Batalkan</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->

    <!-- small modal -->
    @include('admin.partials._small_modal')
    <!-- /small modal -->

@endsection