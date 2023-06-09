@extends('layouts\apphome')

@section('title')
    Edit Toko
@endsection

@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Proses Bayar</h4>
            </div>
        </div>
        <form action="{{ Route('proses.update', $proses->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-box">
                <div class="row">
                    <div class="col-md-12">
                        <div class="profile-basic">
                            <br>
                            <div class="row">
                                <div class="col-md-5">
                                </div>
                                    <h3><strong>Transaksi</strong></h3>
                                <div class="col-md-5"></div><br><br>
                                {{-- baris 1 --}}
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="focus-label">ID Transaksi</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for=""> : {{ $proses->nota }}</label>
                                    </div>
                                </div>
                                <div class="col-md-3"></div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="focus-label">Status</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for=""> : {{ $proses->status->name_status }}</label>
                                    </div>
                                </div>
                                {{-- baris 2 --}}
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="focus-label">Nama Member</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for=""> : {{ $proses->user_id }}</label>
                                    </div>
                                </div>
                                <div class="col-md-3"></div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="focus-label">Kategori</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for=""> : {{ $proses->jasa->kategori }}</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    _______________________________________________________________________________________________________
                                </div>
                                <br>
                                <br>
                                <div class="col-md-1">
                                    <label for=""><strong>Item</strong></label>
                                </div>
                                <div class="col-md-2">
                                    <label for=""><strong>Servis</strong></label>
                                </div>
                                <div class="col-md-2">
                                    <label for=""><strong>Paket</strong></label>
                                </div>
                                <div class="col-md-1">
                                    <label for=""><strong>Jumlah</strong></label>
                                </div>
                                <div class="col-md-3">
                                    <label for=""><strong>Harga</strong></label>
                                </div>
                                <div class="col-md-2">
                                    <label for=""><strong>Total Harga</strong></label>
                                </div>

                                <div class="col-md-12">
                                    _______________________________________________________________________________________________________
                                </div>
                                <div class="col-md-1">
                                    <label for="">{{ $proses->jasa->item }}</label>
                                </div>
                                <div class="col-md-2">
                                    <label for="">{{ $proses->jasa->servis }}</label>
                                </div>
                                <div class="col-md-2">
                                    <label for="">{{ $proses->jasa->paket }}</label>
                                </div>
                                <div class="col-md-1">
                                    <label for="">{{ $proses->jumlah }}</label>
                                </div>
                                <div class="col-md-3">
                                    <label for="">Rp. {{ $proses->jasa->harga }}</label>
                                </div>
                                <div class="col-md-2">
                                    <label for="">Rp. {{ $proses->jumlah*$proses->jasa->harga }}</label>
                                </div>
                                <div class="col-md-6"></div>
                                <div class="col-md-3">
                                    <label for=""><strong>Bayar</strong></label>
                                </div>
                                <div class="col-md-2">
                                    <input type="text" name="total" id="total" class="form-control">
                                    <input type="text" name="status_id" id="status_id" value="2" hidden>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="text-center m-t-20">
                <button class="btn btn-primary submit-btn">Save Changes</button>
            </div>
            </div>
        </form>
    </div>
</div>
<div class="sidebar-overlay" data-reff=""></div>
@endsection
