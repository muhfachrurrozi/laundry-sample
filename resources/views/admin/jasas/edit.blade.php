@extends('layouts\apphome')

@section('title')
    Edit Toko
@endsection

@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Edit Harga</h4>
            </div>
        </div>
        <form action="{{ route('jasas.update', $jasa->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-box">
                <h3 class="card-title">Informasi Edit harga</h3>
                <div class="row">
                    <div class="col-md-12">
                        <div class="profile-basic">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-focus">
                                        <label class="focus-label">Item</label>
                                        <input name="item" id="item" type="text" class="form-control floating" value="{{ $jasa->item }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-focus">
                                        <label class="focus-label">Servis</label>
                                        <input name="servis" id="servis" type="text" class="form-control floating" value="{{ $jasa->servis }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-focus">
                                        <label class="focus-label">Kategori</label>
                                        <input name="kategori" id="kategori" type="text" class="form-control floating" value="{{ $jasa->kategori }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-focus">
                                        <label class="focus-label">paket</label>
                                        <input name="paket" id="paket" type="text" class="form-control floating" value="{{ $jasa->paket }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-focus">
                                        <label class="focus-label">Harga</label>
                                        <input name="harga" id="harga" type="text" class="form-control floating" value="{{ $jasa->harga }}">
                                    </div>
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
