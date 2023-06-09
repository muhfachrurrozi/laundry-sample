<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bersih Laundry</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('style/img/1logo.png') }}" rel="icon">
  <link href="{{ asset('style/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('style/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('style/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('style/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('style/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('style/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('style/css/main.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Impact - v1.1.1
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <!-- <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{ asset('style/img/logobersih-removebg-preview.png') }}"  alt="">
        <!-- <h1>Impact<span>.</span></h1> -->
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#pricing">Pricing</a></li>
          <li class="dropdown"><a href="#"><span>Login</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <li><a href="{{ route('login') }}">Log in</a></li>

                    @if (Route::has('register'))
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @endif
                @endauth
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Selamat datang di <span><img src="{{ asset('style/img/logobersih-removebg-preview.png') }}" width="420px" height="200px" alt=""></span></h2>
          <p>Percayakan kepada kami, cucian anda pasti bersih, rapih, dan nyaman saat beraktifitas,
            kami hadir di daerah karawang dan sekitarnya.
          </p>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#pricing" class="btn-get-started">Get Started</a>
            <a href="https://www.youtube.com/watch?v=N9NPqVbySVU" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="{{ asset('style/img/laundry-dry-cleaning-concept-illustration_114360-7391-removebg-preview.png') }}" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>

    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-stars"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Clean Up</a></h4>
              <p>Memberikan kepusan kepada pelanggan</p>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-lightning"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Fast and Responsive</a></h4>
              <p>Pengerjaan yang Cepat, Detail, dan Teliti</p>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-repeat"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Comitmend</a></h4>
              <p>Menjaga Kwalitas, dan Kepuasan Pelanggan</p>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-award"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Winner</a></h4>
              <p>Sehingga menjadi yang terbaik</p>
            </div>
          </div>
          <!--End Icon Box -->

        </div>
      </div>
    </div>

    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">

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

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4 align-items-center">

          <div class="col-lg-6">
            <img src="{{ asset('style/img/stats-img.svg') }}" alt="" class="img-fluid">
          </div>

          <div class="col-lg-6">

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Happy Clients</strong> Pencapaian untuk menjadi yang terbaik cutomer senang.</p>
            </div><!-- End Stats Item -->

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Target Audience</strong> kunci kesuksesan dalam memulai bisnis.</p>
            </div><!-- End Stats Item -->

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="453" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Team Support</strong> Pekerja yang bisa saling membantu.</p>
            </div><!-- End Stats Item -->

          </div>

        </div>

      </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
      <div class="container text-center" data-aos="zoom-out">
        <a href="https://www.youtube.com/watch?v=M-YrvLNRGwI" class="glightbox play-btn"></a>
        <h3>Call To Action</h3>
        <p> Dengan Teknologi mutahir yang telah dikembangkan, yang bisa menjaga pakaian anda tetap terjaga kualitasnya,
          jika anda tidak memiliki cukup waktu untuk mencuci serahkan kepada kami. kami siap menjaga kualitas dan servis yang kami punya.</p>
        <a class="cta-btn" href="#pricing">Call To Action</a>
      </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= Our Services Section ======= -->
    <section id="services" class="services sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Services</h2>
          <p>Kami menyediakan beberapa layanan dalam melakukan proses pencucian agar kualitas pakaian anda tetap terjaga dengan baik.</p>
        </div>

        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6">
            <div class="service-item  position-relative">
              <div class="icon">
                <img src="{{ asset('style/img/servis/servis-1.png') }}" width="80px" alt="">
              </div>
              <h3>Kiloan</h3>
              <p>Layanan praktis bagi anda yang menginginkan jasa cuci, lipat, gosok dengan pilihan regular dan express.</p>
              <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <img src="{{ asset('style/img/servis/servis-2.png') }}" width="80px" alt="">
              </div>
              <h3>Satuan</h3>
              <p>Salah satu layanan spesial untuk anda yang menginginkan pencucian yang detail terhadap baju kesayangan anda.</p>
              <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <img src="{{ asset('style/img/servis/servis-3.png') }}" width="130px" alt="">
              </div>
              <h3>Perlengkapan Bayi</h3>
              <p>Sayangi buah hati anda dengan memberikan perhatian ekstra terhadap pakaian dan peralatan bayi anda.</p>
              <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <img src="{{ asset('style/img/servis/servis-4.png') }}" width="80px" alt="">
              </div>
              <h3>Boneka</h3>
              <p>Solusi perawatan benda kesayangan anda degan mencuci boneka anda agar terhindar dari bakteri dan bau apek.</p>
              <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <img src="{{ asset('style/img/servis/servis-5.png') }}" width="100px" alt="">
              </div>
              <h3>Karpet</h3>
              <p>Cara Ampuh hilangkan debuh dan bau di karpet keluarga & membuat keluarga ketika bermain di ruangan nyaman, dan jauh dari bakteri.</p>
              <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <img src="{{ asset('style/img/servis/servis-6.png') }}" width="100px" alt="">
              </div>
              <h3>Gordyn</h3>
              <p>Sedap dipandang mata dan udara yang wangi saat membukakan jendela akan lebih segar dan harum.</p>
              <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Our Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Testimonials</h2>
          <p>Kepuasan pelanggan menjadi prioritas kami.</p>
        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="{{ asset('style/img/testimonials/testimonials-1.jpg') }}" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Abdul Gani</h3>
                      <h4>28-05-2023</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Best of the best, Terima kasih.😘😍❤✔
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="{{ asset('style/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Muhamad87</h3>
                      <h4>30-05-2023</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Tepat waktu bersih dan rapih.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="{{ asset('style/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Rika Cikampek</h3>
                      <h4>01-06-2023</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Service memuaskan, cucian bersih, rapih dan tepat waktu selesainya..rekomendasi laundry daerah Karawang sekitarnya. 👍👍👍
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="{{ asset('style/img/testimonials/testimonials-4.jpg') }}" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Bagus ajie</h3>
                      <h4>35-05-2023</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Cucian bersih, packing rapih 🥰🥰🥰, thx Bersih Laundry.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="{{ asset('style/img/testimonials/testimonials-5.jpg') }}" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Khoerunisa</h3>
                      <h4>31-05-2023</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Cucian bersih dan wangi tidak menyengat dan nyaman dipakai.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Team</h2>
          <p>Kerja tim terbaik datang dari orang-orang yang bekerja secara mandiri menuju satu tujuan secara serempak.</p>
        </div>

        <div class="row gy-3">

          <div class="col-xl-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="{{ asset('style/img/team/team-11.png') }}" class="img-fluid" alt="">
              <h4>Anita Khanza.R</h4>
              <span>Web Development</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <img src="{{ asset('style/img/team/team-22.png') }}" class="img-fluid" alt="">
              <h4>Karina</h4>
              <span>Web Development</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="{{  asset('style/img/team/team-33.png') }}" class="img-fluid" alt="">
              <h4>Bilqis Amalia.U</h4>
              <span>Web Development</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <img src="{{ asset('style/img/team/team-44.png') }}" class="img-fluid" alt="">
              <h4>Shelly Nur Azizah</h4>
              <span>Web Development</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <img src="{{ asset('style/img/team/team-55.png')}}" class="img-fluid" alt="">
              <h4>Adila Rahmawati</h4>
              <span>Web Development</span>
              <div class="social">
                <a target="_blank" href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>
    </section><!-- End Our Team Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Pricing</h2>
          <p>Terpercaya & Berpengalaman</p>
        </div>

        <div class="row g-4 py-lg-5" data-aos="zoom-out" data-aos-delay="100">

          <div class="col-lg-4">
            <div class="pricing-item">
              <h3>Satuan</h3>
              <div class="icon">
                <i class="bi bi-box"></i>
              </div>
              <h4><sup>$</sup>0<span> Mulai dari</span></h4>
              <h3>Rp. 8.000 / Kg</h3>
              <ul>
                <li><i class="bi bi-check"></i> Setelan Pria & Wanita</li>
                <li><i class="bi bi-check"></i> Celana jeans</li>
                <li><i class="bi bi-check"></i> Baju Muslimah & Baju Muslim</li>
                <li class="na"><i class="bi bi-x"></i> <span> Karpet</span></li>
                <li class="na"><i class="bi bi-x"></i> <span> Gordyn</span></li>
              </ul>
              <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4">
            <div class="pricing-item featured">
              <h3>Express</h3>
              <div class="icon">
                <i class="bi bi-airplane"></i>
              </div>
              <h4><span>Harga bisa bersaing.</span></h4>
              <h3>Rp. 15.000</h3>
              <ul>
                <li><i class="bi bi-check"></i> Secepat Kilat</li>
                <li><i class="bi bi-check"></i> Bersih dan Nyaman</li>
                <li><i class="bi bi-check"></i> Wangi sepanjang hari saat dipakai</li>
                <li><i class="bi bi-check"></i> kualitas terjamin</li>
                <li><i class="bi bi-check"></i> Is The Best</li>
              </ul>
              <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4">
            <div class="pricing-item">
              <h3>Kg</h3>
              <div class="icon">
                <i class="bi bi-send"></i>
              </div>
              <h4><span>Mulai dari</span></h4>
              <h3>Rp. 6.000 / Pcs</h3>
              <ul>
                <li><i class="bi bi-check"></i> Pakaian Random</li>
                <li><i class="bi bi-check"></i> Boneka kesayangan si kecil</li>
                <li><i class="bi bi-check"></i> Karpet terjaga dari bakteri</li>
                <li><i class="bi bi-check"></i> Terima bongkar pasang gorden</li>
                <li><i class="bi bi-check"></i> Kualitas terjamin</li>
              </ul>
              <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
            </div>
          </div><!-- End Pricing Item -->

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact</h2>
          <p>Hubungi Kami segera, Kami akan datang.</p>
        </div>

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-4">

            <div class="info-container d-flex flex-column align-items-center justify-content-center">
              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Location:</h4>
                  <p>Jl.HS.Ronggo Waluyo Puseurjaya Telukjambe Timur, Karawang, Jawa Barat, Indonesia, 41361.</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Gmail:</h4>
                  <p>ozi.code18@gmail.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Call:</h4>
                  <p>+62 869 E7I8 ZI86</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-clock flex-shrink-0"></i>
                <div>
                  <h4>Open Hours:</h4>
                  <p>Setiap Hari : 07:00 - 20:00 WIB</p>
                </div>
              </div><!-- End Info Item -->
            </div>

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="7" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span><img src="{{ asset('style/img/logobersih-removebg-preview.png') }}" alt=""></span>
          </a>
          <p>Percayakan kepada kami, cucian anda pasti bersih, rapih, dan nyaman saat beraktifitas,
            kami hadir di daerah karawang dan sekitarnya.</p>
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#team">Team</a></li>
            <li><a href="#pricing">Pricing</a></li>
            <li><a href="#login">Login</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Kiloan</a></li>
            <li><a href="#">Satuan</a></li>
            <li><a href="#">Perlengkapan Bayi</a></li>
            <li><a href="#">Boneka</a></li>
            <li><a href="#">Karpet</a></li>
            <li><a href="#">Gordyn</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            Jl.HS.Ronggo Waluyo Puseurjaya<br>
            Telukjambe Timur, Karawang, Jawa Barat.<br>
            41361, Indonesia<br><br>
            <strong>Phone:</strong> +62 869 E7I8 ZI86<br>
            <strong>Email:</strong> ozi.code18@gmail.com<br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Bersih</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('') }}style/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('') }}style/vendor/aos/aos.js"></script>
  <script src="{{ asset('') }}style/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ asset('') }}style/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{ asset('') }}style/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset('') }}style/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{ asset('') }}style/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('style/js/main.js')}}"></script>

</body>

</html>
