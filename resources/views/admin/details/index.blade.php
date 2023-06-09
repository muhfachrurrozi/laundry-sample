@extends('layouts.apphome')

@section('content')
<div class="page-wrapper">
    <div class="content">
        <!--Berjalan-->
        <div class="row">
            <div class="col-12 col-md-6 col-lg-8 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title d-inline-block">Proses Transaksi Laundry Sedang <strong>Berjalan</strong></h4> <a href="{{ route('proses.create') }}" class="btn btn-primary float-right">Tambah Transaksi</a>
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
                                        <td><span class="custom-badge status-warning">{{ $transaksi->status->name_status }}</span></td>
                                        <td class="text-right">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
                                                    <form onsubmit="return confirm('Delete this user permanently?')" action="{{ route('details.show', $transaksi->id) }}" method="post">
                                                        <a class="dropdown-item" href="{{ route('details.edit', $transaksi->id) }}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="dropdown-item"><i class="fa fa-print m-r-5"></i>Nota</button>
                                                    </form>
												</div>
											</div>
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


    <div class="content">
        <!--Berjalan-->
        <div class="row">
            <div class="col-12 col-md-6 col-lg-8 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title d-inline-block">Proses Transaksi Laundry <strong> Selesai</strong></h4> <h4 class=" btn btnfloat-right"></h4>
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
                                    @foreach ($proses3 as $proses)
                                    <input type="text" value="{{ $bayar = $proses->jumlah*$proses->jasa->harga }}" hidden>

                                    <tr>
                                        <td>{{ $proses->nota }}</td>
                                        <td>{{ $proses->user_id }}</td>
                                        <td>{{ $proses->jumlah }}</td>
                                        <td>{{ $proses->jasa->harga }}</td>
                                        <td>{{ $bayar }}</td>
                                        <td><span class="custom-badge status-green">{{ $proses->status->name_status }}</span></td>
                                        <td class="text-right">
                                            <a href="{{ route('details.show', $proses->id) }}" class="btn btn-outline-primary take-btn"><i class="fa fa-print" aria-hidden="true"></i> Nota</a>
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
@endsection
