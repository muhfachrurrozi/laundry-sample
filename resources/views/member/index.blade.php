@extends('layouts\memberhome')

@section('content')

<section id="recent-posts" class="recent-posts sections-bg">
    <div class="container" data-aos="fade-up">
        <div class="row gy-4">
            <div class="col-xl-4 col-md-6">
                <article>
                    <div class="post-img">
                        <img src="{{ asset('/assets/img/laundry-22.jpg') }}" alt="" class="img-fluid">
                    </div>
                    <p class="post-category">Economis tetapi tidak menurunkan kualitas Lanudry</p>
                    <h2 class="title">
                        <a href="{{ route('pesans.create') }}">Kg</a>
                    </h2>
                </article>
            </div><!-- End post list item -->

            <div class="col-xl-4 col-md-6">
                <article>
                    <div class="post-img">
                        <img src="{{ asset('/assets/img/laundry-2.png') }}" alt="" class="img-fluid">
                    </div>
                    <p class="post-category">Memjadikan baju anda Nyaman saat di gunakan</p>
                    <h2 class="title">
                        <a href="blog-details.html" class="cta-btn">Satuan</a><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                    </h2>
                </article>
            </div><!-- End post list item -->

            <div class="col-xl-4 col-md-6">
                <article>
                    <div class="post-img">
                        <img src="{{ asset('assets/img/laundry-11.jpg') }}" alt="" class="img-fluid">
                    </div>
                    <p class="post-category">Kecepatan Laundry, dan tidak melupakan detail sekecil apapun.</p>
                    <h2 class="title">
                        <a href="blog-details.html">Express </a>
                    </h2>
                </article>
            </div><!-- End post list item -->
        </div><!-- End recent posts list -->
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


      <div class="section-header">
        <h2>Paket Laundry Yang Menarik Untuk Anda</h2>
        <p>Kami memberikan paket yang menarik untuk ada kepuasan anda adalah prioritas kami, Seilahkan di pesan.</p>
    </div>

@endsection
