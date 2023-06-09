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
                <h4 class="page-title">Tambah Data Transaksi</h4><br><br>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <form class="row g-3" action="{{ Route('proses.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <!--IDM-->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>ID Transaksi<span class="text-danger"></span></label>
                                <input class="form-control" type="number" name="nota" id="nota" readonly value="{{ date('d').$autoNumber }}">
                            </div>
                        </div>
                        <!-- Toko -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Member</label>
                                <select name="user_id" id="user_id" class="form-control select">
                                    @foreach ($users as $user )
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!-- Toko -->
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Item</label>
                                <select name="items" id="items" class="form-control select">
                                    <Option value="Baju">--Pilih Item--</Option>
                                    <Option value="Baju">Baju</Option>
                                    <Option value="Celana">Celana</Option>
                                    <Option value="Jas">Jas</Option>
                                </select>
                            </div>
                        </div>
                        <!-- Toko -->
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Servis</label>
                                <select name="serviss" id="serviss" class="form-control select">
                                    <option value="Cuci, Lipat">--Pilih Servis--</option>
                                    <Option value="Cuci, Lipat">Cuci, Lipat</Option>
                                    <Option value="Cuci, Lipat, Gosok">Cuci, Lipat, Gosok</Option>
                                </select>
                            </div>
                        </div>
                        <!-- Toko -->
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Paket</label>
                                <select name="pakets" id="pakets" class="form-control select">
                                    <option value="Regular">--Pilih Paket--</option>
                                    <Option value="Regular">Regular</Option>
                                    <Option value="Expres">Express</Option>
                                </select>
                            </div>
                        </div>
                        <!-- Toko -->
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Kategori</label>
                                <select name="kategoris" id="kategoris" class="form-control select">
                                    <option value="Satuan">--Pilih Kategori--</option>
                                    <option value="Satuan">Satuan</option>
                                    <option value="Kg">Kg</option>
                                </select>
                            </div>
                        </div>
                        <!--Name-->
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Jumlah</label>
                                <input class="form-control" type="number" name="jumlah" id="jumlah" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <input class="form-control" type="number" name="jasa_id" id="jasa_id" hidden>
                            <input class="form-control" type="number" name="status_id" id="status_id" value="1" hidden>
                        </div>
                    </div>
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary submit-btn">Input Transaksi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<div class="sidebar-overlay" data-reff=""></div>
@endsection
