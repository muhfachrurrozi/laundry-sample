@extends('layouts\memberhome')

@section('content')
    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-posts" class="recent-posts sections-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Transaksi Pesanan Anda</h2>
            </div>
            <div class=" col-lg-8 offset-lg-2">
                <form class="row g-3" action="{{ route('pesans.update', $proses->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Nama</label>
                            <input class="form-control" type="text" name="nota" id="nota" value="{{ $proses->nota }}" readonly>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Nama</label>
                            <input class="form-control" type="text" name="user_id" id="user_id" value="{{ $proses->user_id }}" readonly>
                        </div>
                    </div>
                    <!-- Toko -->
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Item</label>
                            <select name="items" id="items" class="form-control select">
                                <option value="{{ $proses->jasa->item }}">{{ $proses->jasa->item }}</option>
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
                                <option value="{{ $proses->jasa->servis }}">{{ $proses->jasa->servis }}</option>
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
                                <option value="{{ $proses->jasa->paket }}">{{ $proses->jasa->paket }}</option>
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
                                <option value="{{ $proses->jasa->kategori }}">{{ $proses->jasa->kategori }}</option>
                                <option value="Satuan">Satuan</option>
                                <option value="Kg">Kg</option>
                            </select>
                        </div>
                    </div>
                    <!--Name-->
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Jumlah</label>
                            <input class="form-control" type="number" name="jumlah" id="jumlah" value="{{ $proses->jumlah }}" required>
                        </div>
                    </div>
                    <div class="col-sm-4"></div>
                    <div class="col-sm-5">
                    <div class="form-group">
                        <input class="form-control" type="number" name="jasa_id" id="jasa_id" hidden>
                        <input class="form-control" type="number" name="status_id" id="status_id" value="1" hidden>
                    </div>
                    <div class="col-md-8"></div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary start-50">Pesan Sekarang</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </section><!-- End Recent Blog Posts Section -->


    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
        <div class="container" data-aos="zoom-out">
            <div class="clients-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><img src="{{ asset('style/img/unilever.png') }}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('style/img/indomart.png') }}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('style/img/ubp.png') }}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('style/img/alfamart.png') }}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('style/img/bumn.png') }}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('style/img/kemenkes.png') }}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('style/img/mui.png') }}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('style/img/RANS Entertainment.png') }}" class="img-fluid" alt=""></div>
                </div>
            </div>
        </div>
    </section><!-- End Clients Section -->
@endsection
