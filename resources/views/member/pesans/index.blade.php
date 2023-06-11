@extends('layouts\memberhome')

@section('content')
    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-posts" class="recent-posts sections-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Transaksi Pesanan Anda</h2>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4>Status Pesanan</h4>
                        <a href="{{ route('pesans.create') }}" class="btn btn-primary">Tambah Pesanan</a>
                </div>
                <table class="table mb-0">
                    <thead class="">
                    <tr>
                        <th>ID Transaksi</th>
                        <th>Nama Customer</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Total Bayar</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pesan as $order)
                    <input type="text" value="{{ $bayar = $order->jumlah*$order->jasa->harga }}" hidden>

                    <tr>
                        <td>{{ $order->nota }}</td>
                        <td>{{ Auth::user()->name }}</td>
                        <td>{{ $order->jumlah }}</td>
                        <td>{{ $order->jasa->harga }}</td>
                        <td>{{ $bayar }}</td>
                        <td><span class="text-warning">{{ $order->status->name_status }}</span></td>
                        <td class="col justify-content-end">
                            <form onsubmit="return confirm('Delete this user permanently?')" action="{{ route('pesans.destroy', $order->id) }}" method="post">
                            <a class="btn btn-warning " href="{{ route('pesans.edit', $order->id) }}"><i class="bi bi-pencil-square"></i> </a> |
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" ><i class="bi bi-trash"></i> </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
    </section><!-- End Recent Blog Posts Section --> <!-- ======= Recent Blog Posts Section ======= -->

    <section id="recent-posts" class="recent-posts sections-bg">
        <div class="container" data-aos="fade-up">
            <div class="card">
                <div class="card-header">
                    <h4>Status Pesanan Selesai</h4>
                </div>
                <table class="table mb-0">
                    <thead class="">
                    <tr>
                        <th>ID Transaksi</th>
                        <th>Nama Customer</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Total Bayar</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pesan1 as $order1)
                    <input type="text" value="{{ $bayar1 = $order1->jumlah*$order1->jasa->harga }}" hidden>

                    <tr>
                        <td>{{ $order1->nota }}</td>
                        <td>{{ Auth::user()->name }}</td>
                        <td>{{ $order1->jumlah }}</td>
                        <td>{{ $order1->jasa->harga }}</td>
                        <td>{{ $bayar1 }}</td>
                        <td><span class="text-primary">{{ $order1->status->name_status }}</span></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
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
