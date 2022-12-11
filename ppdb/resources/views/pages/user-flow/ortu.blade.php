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
            <li class="active"><a href="/">Home</a></li>
          </ul>
        </nav><!-- .nav-menu -->
      </div><!-- End Header Container -->
    </div>
  </header>
<main id="main">
    <div class="container" style="margin-top: 150px;">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
        @endif

        <h2 class="text-center mt-5 mb-3">Tata Cara PPDB Online</h2>
        <div class="row">
            <div class="col-md-3">
                <div class="card h-100 d-flex">
                    <div class="card-body text-center">
                        <h4>Daftar</h4>
                        <p>Calon peserta didik baru akses laman situs PPDB online</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card h-100 d-flex">
                    <div class="card-body text-center">
                        <h4>Memberikan Bukti Berkas</h4>
                        <p>Calon peserta didik mempersiapkan beberapa dokumen penting yang dibutuhkan untuk memverifikasi data</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card h-100 d-flex">
                    <div class="card-body text-center">
                        <h4>Verifikasi Data</h4>
                        <p>Operator akan melakukan verifikasi pengajuan akun dan berkas secara online</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card h-100 d-flex">
                    <div class="card-body text-center">
                        <h4>Hasil</h4>
                        <p>Calon peserta didik baru akan mengecek apakah mereka telah lulus atau tidak di halaman <strong>"Hasil Pendaftaran"</strong></p>
                    </div>
                </div>
            </div>
        </div>

                        <div class="col-12">
                            <h1 class="mt-5">Biodata Orang Tua</h1>
                            <hr>
                            <form class="" action="/ortu" method="post">

                              @csrf
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Nama Orang Tua (Ayah)</label>
                                <input type="text" name="nama_ayah" class="form-control" autocomplete="off" autofocus>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Pekerjaan Ayah</label>
                                <input type="text" name="Pekerjaan" class="form-control" autocomplete="off" autofocus>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Penghasilan Ayah</label>
                                <select class="form-control" name="Penghasilan">
                                    <option value="">Pilih Gaji Ayah</option>
                                    <option value="1.000.000">Kurang dari 1.000.000</option>
                                    <option value=">1.000.000">1.000.000 - 2.000.000</option>
                                    <option value="2.000.000">2.500.000 - 5.000.000</option>
                                    <option value=">3.000.000">5.000.000 - 10.000.000</option>
                                    <option value=">4.000.000">S\Di atas 10.000.000</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Nama Orang Tua (Ibu)</label>
                                <input type="text" name="nama_ibu" class="form-control" autocomplete="off" autofocus>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Pekerjaan Ibu</label>
                                <input type="text" name="pekerjaan_ibu" class="form-control" autocomplete="off" autofocus>
                            </div>
                        </div>
                        {{-- <div class="col-md-12">
                            <div class="form-group">
                                <label>Penghasilan Ibu</label>
                                <select class="form-control" name="penghasilan_ibu">
                                    <option value="">Pilih Gaji Ibu</option>
                                    <option value="1.000.000">Kurang dari 1.000.000</option>
                                    <option value=">1.000.000">1.000.000 - 2.000.000</option>
                                    <option value="2.000.000">2.500.000 - 5.000.000</option>
                                    <option value=">3.000.000">5.000.000 - 10.000.000</option>
                                    <option value=">4.000.000">S\Di atas 10.000.000</option>
                                </select>
                            </div>
                        </div> --}}
                        <div class="col-12">
                            <div class="form-group">
                                <label>No Telepon Ortu (*Contoh : 6289654782344)</label>
                                <input type="text" name="no_telp_ortu" class="form-control">
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100" type="submit">Kirim</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<!-- End #main -->
@endsection
