@extends('pages.home.index')

@section('content')
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
      <div class="header-container d-flex align-items-center">
        <div class="logo mr-auto">
          <h1 class="text-light"><a href="/"><span>MTs Bina Cendekia Cirebon</span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="{{asset('assets/img/logo.png')}}" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li class="active"><a href="#header">Beranda</a></li>
            <li><a href="#about">Tentang</a></li>
            <li><a href="#services">Fasilitas</a></li>
            <li><a href="#team">Pendiri</a></li>
            <li><a href="#contact">Kontak</a></li>
            <li class="get-started"><a href="/daftar">Daftar</a></li>
          </ul>
        </nav><!-- .nav-menu -->
      </div><!-- End Header Container -->
    </div>
  </header>

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
  @if (session('pesan'))
  <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4><i class="icon fa fa-check"></i>Success</h4>
    {{ session('pesan') }}
  </div>
  @endif
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
    <h1>Selamat Datang di MTs Bina Cendekia Cirebon</h1>
    <h2>Ayo Kita Belajar Bersama</h2>
    <a href="/daftar" class="btn-get-started scrollto">Daftar Sekarang</a>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
    <div class="container">

        <div class="row content">
        <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="{{asset('assets/img/kepala-sekolah.png')}}" alt="" class="img-fluid" style="background-color: #00805d" width="300ppx">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="200">
            <p>
            MTs Bina Cendekia Cirebon Di dirikan pada 20 April 2008
            </p>
            <p class="font-italic">
            MTs Bina Cendekia Cirebon yang berada di Jl. KH. Wahid Hasyim Desa Mertapada Wetan Kecamatan Astanajapura. Yang bernaung dibawah Yayasan Bina Cendekia Utama Cirebon. Dengan jumlah awal 100 siswa dan 5 guru dari kelas 7 sampe kelas 9. Kini Sekolah MTs Bina Cendekia telah menghasilkan ratusan lulusan di setiap tahun nya.
            </p>
        </div>
        </div>

    </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
    <div class="container">

        <div class="row">
        <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-right">
            <div class="content">
            <h3>Kenapa Memilih Sekolah Ini?</h3>
            <p>
                Lebih dari 500 siswa-siswi dengan beragam latar belakang datang ke Sekolah MTs Bina Cendekia Cirebon mencari sebuah lembaga pendidikan formal yang mempunyai pengakuan luar biasa baik secara prestasi akademik, proses belajar mengajar serta suasana belajar yang menyenangkan, tenaga pengajar dan staff yang kompeten, kesempatan untuk meraih beasiswa, dan penerapan
    kurikulum nasio di Indonesia tetapi juga kompeten secara global.
            </p>
            </div>
        </div>
        <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
            <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Ruang Kelas</h4>
                    <p>Ruang kelas dilengkapi  Laboratorium Komputer,Ruang Kesehatan, Kantin Sekolah, Perpustakaan & Masjid, Lapangan Olahraga.</p>
                </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Lebih Menekankan Kepada Pendidikan Karakter</h4>
                    <p>Memungkinkan Siswa Lebih Aktif, Inovatif dan Kreatif, Lebih Responsif Terhadap Fenomena Sosial yang Ada, Proses Penilaian Dilakukan Dari Semua Aspek, Lembaga Memperoleh Pendampingan dari Pusat.</p>
                </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>Prestasi Yang Didapatkan</h4>
                    <p>Juara 1 Three On Three	DSFM Competition 2011
                    Juara 1	Kejuaraan Silat Antar Pelajar
                    Juara 1 Lomba Debat Bahasa Inggris
                    Juara I Vocal Group Art Competition Tahun 2012
                    Juara II Futsal	UNPI FUTSAL LEAGUE 2012	</p>
                </div>
                </div>
            </div>
            </div><!-- End .content-->
        </div>
        </div>

    </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
    <div class="container">

        <div class="row">
        <div class="col-lg-4">
            <div class="section-title" data-aos="fade-right">
            <h2>Fasilitas</h2>
            <p>Fasilitas belajar merupakan sarana dan prasarana pembelajaran. Prasarana meliputi kantin, ruang belajar, lapangan olahraga, LAB Komputer, dll.</p>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="row">
            <div class="col-md-6 d-flex align-items-stretch">
                <div class="icon-box align-self-center" data-aos="zoom-in" data-aos-delay="100">
                <img src="{{asset('assets/img/kantin.jpg')}}" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                <div class="icon-box align-self-center" data-aos="zoom-in" data-aos-delay="200">
                <img src="{{asset('assets/img/kelas.jpg')}}" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-md-6 d-flex align-items-stretch mt-4">
                <div class="icon-box align-self-center" data-aos="zoom-in" data-aos-delay="300">
                <img src="{{asset('assets/img/lab komputer.jpg')}}" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-md-6 d-flex align-items-stretch mt-4">
                <div class="icon-box align-self-center" data-aos="zoom-in" data-aos-delay="400">
                <img src="{{asset('assets/img/lapangan.jpg')}}" class="img-fluid" alt="">
                </div>
            </div>

            </div>
        </div>
        </div>

    </div>
    </section><!-- End Services Section -->

    {{-- <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
    <div class="container">

        <div class="section-title" data-aos="fade-left">
        <h2>Prestasi</h2>
        <p>Dibawah ini adalah bukti dokumentasi prestasi yang didapatkan oleh sekolah kami :</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-akademik">Akademik</li>
            <li data-filter=".filter-olahraga">Olahraga</li>
            </ul>
        </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-4 col-md-6 portfolio-item filter-akademik">
            <div class="portfolio-wrap">
            <img src="{{asset('assets/img/vocal group.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>Vocal Group</h4>
                <p>Juara 1</p>
                <div class="portfolio-links">
                <a href="{{asset('assets/img/vocal group.jpg')}}" data-gall="portfolioGallery" class="venobox" title="Akademik"><i class="bx bx-plus"></i></a>
                </div>
            </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-olahraga">
            <div class="portfolio-wrap">
            <img src="{{asset('assets/img/basket1.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>Basket</h4>
                <p>Juara 2</p>
                <div class="portfolio-links">
                <a href="{{asset('assets/img/basket1.jpg')}}" data-gall="portfolioGallery" class="venobox" title="Olahraga"><i class="bx bx-plus"></i></a>
                </div>
            </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-akademik">
            <div class="portfolio-wrap">
            <img src="{{asset('assets/img/debat-inggris.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>Debat Bahasa Inggris</h4>
                <p>Juara 1</p>
                <div class="portfolio-links">
                <a href="{{asset('assets/img/debat inggris.jpg')}}" data-gall="portfolioGallery" class="venobox" title="Akademik"><i class="bx bx-plus"></i></a>
                </div>
            </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-olahraga">
            <div class="portfolio-wrap">
            <img src="{{asset('assets/img/SILAT.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>Pencak Silat</h4>
                <p>Juara 1</p>
                <div class="portfolio-links">
                <a href="{{asset('assets/img/SILAT.jpg')}}" data-gall="portfolioGallery" class="venobox" title="Olahraga"><i class="bx bx-plus"></i></a>
                </div>
            </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-akademik">
            <div class="portfolio-wrap">
            <img src="{{asset('assets/img/cerdas-cermat.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>Cerdas Cermat</h4>
                <p>Juara 2</p>
                <div class="portfolio-links">
                <a href="{{asset('assets/img/cerdas-cermat.jpg')}}" data-gall="portfolioGallery" class="venobox" title="Akademik"><i class="bx bx-plus"></i></a>
                </div>
            </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-olahraga">
            <div class="portfolio-wrap">
            <img src="{{asset('assets/img/futsal.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>Futsal</h4>
                <p>Juara 2</p>
                <div class="portfolio-links">
                <a href="{{asset('assets/img/futsal.jpg')}}" data-gall="portfolioGallery" class="venobox" title="Olahraga"><i class="bx bx-plus"></i></a>
                </div>
            </div>
            </div>
        </div>

        </div>

    </div>
    </section><!-- End Portfolio Section --> --}}

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
    <div class="container">

        <div class="row">
        <div class="col-lg-4">
            <div class="section-title" data-aos="fade-right">
            <h2>Pendiri Sekolah</h2>
            <p>Para pendiri sekolah yang berasal dari latar belakang berbeda namun bisa satu tujuan</p>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="row">

            <div class="col-lg-6" >
                <div class="member" data-aos="zoom-in" data-aos-delay="100" style="background-color: #00805d;
                ">
                {{-- <div class="pic"><img src="{{asset('assets/img/bg-2.jpeg')}}" class="img-fluid" alt=""></div> --}}
                <div class="member-info text-white">
                    <h4 class="text-white">Abuya Muhammad Ali</h4>
                    <span>Pendiri</span>
                    <p>Saya ingin mempersekolahkan orang lain dengan biaya murah</p>
                </div>
                </div>
            </div>

            </div>

        </div>
        </div>

    </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
    <div class="container">
        <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
            <div class="section-title">
            <h2>Kontak</h2>
            <p>Untuk info lebih lanjut bisa menghubungi kontak yang tercantum.</p>
            </div>
        </div>

        <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.690005439717!2d108.60671391431596!3d-6.807511868473395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f1b871ef4148d%3A0x3cd601ef4662b29f!2sSMP%20PLUS%20AL-MA&#39;ARIF!5e0!3m2!1sid!2sid!4v1660111543382!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="info mt-4">
            <i class="icofont-google-map"></i>
            <h4>Location:</h4>
            <p>Mertapada Wetan, Kec. Astanajapura, Kabupaten Cirebon, Jawa Barat 45181</p>
            </div>
            <div class="row">
            <div class="col-lg-6 mt-4">
                <div class="info">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>mtsbinacendekia@gmail.com</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="info w-100 mt-4">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+628972040545</p>
                </div>
            </div>
            </div>
        </div>
        </div>

    </div>
    </section><!-- End Contact Section -->

</main>
<!-- End #main -->
@endsection
