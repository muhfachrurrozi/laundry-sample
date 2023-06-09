@extends('layouts\apphome')

@section('title')
    Create a new
@endsection

@section('content')
<div class="page-wrapper">
    <!--Add Patient form-->
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Tambah Data Toko</h4><br><br>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <form class="row g-3" action="{{ Route('tokos.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <!--logo toko-->
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Logo</label>
                                <div class="profile-upload">
                                    <div class="upload-img">
                                        <img alt="" src="{{ asset('assets/img/user.jpg') }}">
                                    </div>
                                    <div class="upload-input">
                                        <input type="file" class="form-control" id="logo_toko" name="logo_toko" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Name Toko-->
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Name Toko<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="name_toko" id="name_toko" required>
                            </div>
                        </div>
                        <!--Telepon Toko-->
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Telepon</label>
                                <input class="form-control" type="number" name="telepon_toko" id="telepon_toko" required>
                            </div>
                        </div>
                        <!-- Alamat -->
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Alamat Toko</label>
                                        <input type="text" class="form-control" name="alamat_toko" id="alamat_toko" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary submit-btn"> Tambah Toko</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<div class="sidebar-overlay" data-reff=""></div>
@endsection
