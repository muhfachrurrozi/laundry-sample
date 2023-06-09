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
                <h4 class="page-title">Tambah Data User</h4><br><br>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <form class="row g-3" action="{{ Route('users.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <!--Img-->
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Foto</label>
                                <div class="profile-upload">
                                    <div class="upload-img">
                                        <img alt="" src="{{ asset('assets/img/user.jpg') }}">
                                    </div>
                                    <div class="upload-input">
                                        <input type="file" class="form-control" id="poto" name="poto" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Toko -->
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Toko</label>
                                <select name="toko_id" id="toko_id" class="form-control select">
                                    @foreach ($tokos as $toko)
                                        <option value="{{ $toko->id }}">{{ $toko->name_toko }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!--IDM-->
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>ID Member<span class="text-danger"></span></label>
                                <input class="form-control" type="number" name="idm" id="idm" readonly value="{{ date('d').$autoNumber }}">
                            </div>
                        </div>
                        <!--Name-->
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" type="text" name="name" id="name" required>
                            </div>
                        </div>
                        <!--email-->
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" name="email" id="email" required>
                            </div>
                        </div>
                        <!--telepon-->
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Telepon</label>
                                <input class="form-control" type="number" name="telepon" id="telepon" required>
                            </div>
                        </div>
                        <!-- Alamat -->
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" class="form-control" name="alamat" id="alamat" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Hak-->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Sebagai</label>
                                <select name="hak" id="hak" class="form-control select">
                                    <option value="member"> --Pilih sebagai-- </option>
                                    <option value="member">Member</option>
                                    <option value="kasir">Karyawan</option>
                                </select>
                            </div>
                        </div>
                        <!--Password-->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" type="password" name="password" id="password" required>
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
