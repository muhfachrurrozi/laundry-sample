@extends('layouts\apphome')

@section('title')
    Edit Toko
@endsection

@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Edit Toko</h4>
            </div>
        </div>
        <form action="{{ Route('tokos.update', $toko->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-box">
                <h3 class="card-title">Toko Informations</h3>
                <div class="row">
                    <div class="col-md-12">
                        <div class="profile-img-wrap">
                            @if ($toko->logo_toko)
                            <img class="inline-block" src="{{ asset('logo-toko/'.$toko->logo_toko) }}" alt="user">
                            @else
                            <h3>No Image</h3>
                            @endif
                            <div class="fileupload btn">
                                <span class="btn-text">edit</span>
                                <input type="text" value="{{ $toko->logo_toko }}" name="logo_toko" id="logo_toko" hidden>
                                <input class="upload" type="file">
                            </div>
                        </div>
                        <div class="profile-basic">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-focus">
                                        <label class="focus-label">Nama Toko</label>
                                        <input name="name_toko" id="name_toko" type="text" class="form-control floating" value="{{ $toko->name_toko }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-focus">
                                        <label class="focus-label">Telepon</label>
                                        <input name="telepon_toko" id="telepon_toko" type="number" class="form-control floating" value="{{ $toko->telepon_toko }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group form-focus">
                                        <label class="focus-label">Alamat</label>
                                        <input name="alamat_toko" id="alamat_toko" type="text" class="form-control floating" value="{{ $toko->alamat_toko }}">
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
