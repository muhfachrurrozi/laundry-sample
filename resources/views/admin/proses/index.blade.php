@extends('layouts.apphome')

@section('content')
<div class="page-wrapper">
    <div class="content">
        <!--Upcoming Appointments-->
        <div class="row">
            <div class="col-12 col-md-6 col-lg-8 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title d-inline-block">Proses Cuci</h4> <a href="{{ route('proses.create') }}" class="btn btn-primary float-right">Tambah Transaksi</a>
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
                                    @foreach ($proses as $transaksi)
                                    <input type="text" value="{{ $bayar = $transaksi->jumlah*$transaksi->jasa->harga }}" hidden>

                                    <tr>
                                        <td>{{ $transaksi->nota }}</td>
                                        <td>{{ $transaksi->user_id }}</td>
                                        <td>{{ $transaksi->jumlah }}</td>
                                        <td>{{ $transaksi->jasa->harga }}</td>
                                        <td>{{ $bayar }}</td>
                                        <td><span class="custom-badge status-red">{{ $transaksi->status->name_status }}</span></td>
                                        <td class="text-right">
                                            <a href="{{ route('proses.edit', $transaksi->id) }}" class="btn btn-outline-primary take-btn">Bayar</a>
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
