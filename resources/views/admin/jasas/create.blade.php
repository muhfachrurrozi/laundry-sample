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
            <div class="col-lg-12 offset-lg-2">
                <form class="row g-3" action="{{ Route('jasas.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <!--item-->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Item<span class="text-danger"></span></label>
                                <input class="form-control" type="text" name="item" id="item" required>
                            </div>
                        </div>
                        <!--servis-->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>servis</label>
                                <select name="servis" id="servis" class="form-control select">
                                    <option value="Cuci, Lipat">--pilih Servis--</option>
                                    <option value="Cuci, Lipat">Cuci, Lipat</option>
                                    <option value="Cuci, Lipat, Gosok">Cuci, Lipat, Gosok</option>
                                </select>
                            </div>
                        </div>
                        <!-- kategori -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Kategori</label>
                                <select name="kategori" id="kategori" class="form-control select">
                                    <option value="Satuan">-- Pilih Kategori --</option>
                                    <option value="Satuan">Satuan</option>
                                    <option value="Kg">Kg</option>
                                </select>
                            </div>
                        </div>
                        <!-- kategori -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Paket</label>
                                <select name="paket" id="paket" class="form-control select">
                                    <option value="regular">-- Pilih Paket --</option>
                                    <option value="regular">Regular</option>
                                    <option value="expres">Kg</option>
                                </select>
                            </div>
                        </div>
                        <!--servis-->
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Harga</label>
                                        <input class="form-control" type="number" name="harga" id="harga" required>
                                    </div>
                                </div>
                            </div>
                        <div class="m-t-20 text-center">
                            <button class="btn btn-primary submit-btn"> Tambah Toko</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<div class="sidebar-overlay" data-reff=""></div>
@endsection
