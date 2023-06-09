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
                                <div class="col-md-4">
                                </div>
                                <div class="text-center">
                                    <h3><strong>Selesaikan Pesanan</strong></h3> -
                                    <h2>{{ $proses->nota }}</h2>
                                </div>
                                <input type="text" name="status_id" id="status_id" value="3" hidden>
                                <div class="col-md-2">
                                    <input type="text" name="status_id" id="status_id" value="3" hidden>
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
