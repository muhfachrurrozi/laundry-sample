@extends('layouts.apphome')

@section('content')
<div class="page-wrapper">
    <div class="content">
        <!--Stats-->
        <div class="row">
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                <div class="dash-widget">
                    <span class="dash-widget-bg2"><i class="fa fa-check-circle"></i></span>
                    <div class="dash-widget-info text-right">
                        <h3>{{ $count1 }}</h3>
                        <span class="widget-title2">Selesai <i class="fa fa-check" aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                <div class="dash-widget">
                    <span class="dash-widget-bg4"><i class="fa fa-compress" aria-hidden="true"></i></span>
                    <div class="dash-widget-info text-right">
                        <h3>{{ $count2 }}</h3>
                        <span class="widget-title4">Berjalan <i class="fa fa-check" aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                <div class="dash-widget">
                    <span class="dash-widget-bg3"><i class="fa fa-spinner" aria-hidden="true"></i></span>
                    <div class="dash-widget-info text-right">
                        <h3>{{ $count3 }}</h3>
                        <span class="widget-title3">Proses <i class="fa fa-check" aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <!--Upcoming Appointments-->
        <div class="row">
            <div class="col-12 col-md-6 col-lg-8 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title d-inline-block">Proses Transaksi laundry</h4> <a href="{{ route('proses.create') }}" class="btn btn-primary float-right">Tambah Transaksi</a>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="">
                                    <tr>
                                        <th>ID Transaksi</th>
                                        <th>Nama Customer</th>
                                        <th>Jumlah</th>
                                        <th>Harga</th>
                                        <th>Total Bayar</th>
                                        <th>Status</th>
                                        <th class="text-right">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($proses as $proses)
                                    <input type="text" value="{{ $bayar = $proses->jumlah*$proses->jasa->harga }}" hidden>

                                    <tr>
                                        <td>{{ $proses->nota }}</td>
                                        <td>{{ $proses->user_id }}</td>
                                        <td>{{ $proses->jumlah }}</td>
                                        <td>{{ $proses->jasa->harga }}</td>
                                        <td>{{ $bayar }}</td>
                                        <td><span class="custom-badge status-red">{{ $proses->status->name_status }}</span></td>
                                        <td class="text-right">
                                            <a href="{{ route('proses.edit', $proses->id) }}" class="btn btn-outline-primary take-btn">Bayar</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
@endsection
