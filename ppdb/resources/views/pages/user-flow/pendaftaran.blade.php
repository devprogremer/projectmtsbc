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

        <div class="card mt-5">
            <div class="card-body">
                <h1>Biodata Calon Siswa</h1>
                <hr>
                <form action="/daftar" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control" autocomplete="off" autofocus>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>No Telepon Siswa (*Contoh : 6289654782344)</label>
                                <input type="text" name="no_telp" class="form-control">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Agama</label>
                                <select class="form-control" name="agama">
                                  <option value="">Pilih agama anda</option>
                                  <option value="Islam">Islam</option>
                                  <option value="Khatolik">Khatolik</option>
                                  <option value="Protestan">Protestan</option>
                                  <option value="Hindu">Hindu</option>
                                  <option value="Budha">Budha</option>
                                  <option value="Konghucu">Konghucu</option>
                                </select>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Asal Sekolah</label>
                                <input type="text" name="asal_sekolah" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea name="alamat" rows="10" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Jenis Kelamin</label><br>
                                <input type="radio" name="gender" value="pria" class="">&nbsp;&nbsp;pria
                                <input type="radio" name="gender" value="wanita" class="">&nbsp;&nbsp;wanita

                            </div>

                        {{-- <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Ayah</label><br>
                                  <select class="form-control" name="id_ayah">
                                    @forelse ($ayah as $item)
                                    <option value="{{$item->id_ayah}}">{{ $item-> nama_ayah }}</option>
                                    @empty
                                    <option value="">No Data</option>
                                    @endforelse
                                  </select>

                                </div>
                        </div> --}}

                        {{-- <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Ibu</label><br>
                              <select class="form-control" name="id_ibu">
                                @forelse ($ibu as $item)
                                <option value="{{$item->id_ibu}}">{{ $item-> nama_ibu }}</option>
                                @empty
                                <option value="">No Data</option>
                                @endforelse
                              </select>

                        </div> --}}
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
