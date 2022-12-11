@extends('layouts.index')

@section('content')
    {{-- &nbsp; <button onClick="window.print();">Print</button> --}}

    <div class="row">

        &nbsp; &nbsp; &nbsp;
        <div class="row my-4">
            &nbsp; &nbsp; &nbsp;
            <a href="/admin" class="btn btn-danger mb-5">Back</a>
            <div class="col">
                <div class="text-end mt-2 mt-sm-0">
                    <button class="btn btn-info waves-effect waves-light mb-4" onclick="printDiv('cetak')"><i
                        class="fa fa-print"> PRINT</i></button>
                </div>
            </div>
            <!-- end col -->
        </div>
        <form action="" method="GET HEAD" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="col-xl-12">
                <div class="card card-body" id="cetak" style="margin-bottom: -1rem">
                    <div class="p-4">
                        <div class="d-flex">
                            <div class="col-lg-3" style="text-align: center; margin-right:25px; margin-left:25px;">
                                <img width="110px" src="{{ asset('assets/img/logo.png') }}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <center>
                                    <label class="form-label" style="margin-top: -0.5rem"><strong class="d-block">KARTU
                                            PESERTA</strong></label>
                                    <h5 style="margin-top: -0.5rem"> <strong class="d-block">PENERIMAAN SISWA BARU</strong></h4>
                                        <h4 style="margin-top: -0.5rem"><strong class="d-block">MTs Bina Cendekia Cirebon</strong></h3>
                                            <p style="margin-top: -0.5rem"><strong class="d-block">Jl. KH. Wahid Hasyim, Mertapada Wetan, Kec.Astanajapura, Kabupaten
                                                Cirebon, Jawa Barat <br> 45181</strong></p>
                                </center>
                            </div>
                        </div>
                    </div>
                    <div class="card-body" style="margin-bottom: -4rem;">
                        <div class="p-4" style="border-top: 2px solid black!important; margin-top:-2.5rem;">
                            <div class="d-flex">
                                {{-- <div class="col-lg-4" style="text-align: center; margin-right:25px;">
                                    <img src="{{ asset($viewData->pas_foto) }}" width="250px" height="300" alt="">
                                </div> --}}
                                <div class="col-lg-4">
                                    <div class="mb-3 mb-4">
                                        <h4><strong>DATA PESERTA</strong></h4><br>
                                        <h5><strong>NAMA PESERTA &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : {{ $item->nama_siswa }}</strong><br>
                                        <h5><strong>TEMPAT TANGGAL LAHIR &nbsp; : {{ $item->tempat_lahir }}, {{ $item->tanggal_lahir }}</strong><br>
                                        <h5><strong>JENIS KELAMAIN &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : {{ $item->gender }}</strong><br>
                                        <h5><strong>ASAL SEKOLAH &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : {{ $item->asal_sekolah }}</strong><br>
                                        <h5><strong>ALAMAT &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : {{ $item->Alamat }}</strong><br>
                                        <h5><strong>NO TELPON &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : {{ $item->no_telp }}</strong><br>
                                        <h5><strong>NAMA AYAH  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : {{ $ayah->nama_ayah }}</strong><br>
                                        <h5><strong>NAMA IBU &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : {{ $ibu->nama_ibu }}</strong><br>
                                        <h5><strong>STATUS &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : {{ $item->status }}</strong><br>
                                    </div>
                                </div>

                            </div>
                            <br>
                            {{-- <div class="d-flex">
                                <div class="col-lg-6" style="width: 50%">
                                    <div class="mb-3 mb-4">
                                        <strong>PILIHAN 1</strong><br>
                                        <h5><strong>
                                                @foreach ($viewProdi as $z)
                                                    @if ($z->id_prodi == $viewData->pil1)
                                                        {{ $z->nama_prodi }}
                                                    @endif
                                                @endforeach
                                            </strong></h5>
                                    </div>
                                </div>
                                <div class="col-lg-6" style="width: 50%">
                                    <div class="mb-3 mb-4">
                                        <strong>PILIHAN 2</strong><br>
                                        <h5><strong>
                                                @foreach ($viewProdi as $z)
                                                    @if ($z->id_prodi == $viewData->pil2)
                                                        {{ $z->nama_prodi }}
                                                    @endif
                                                @endforeach
                                            </strong></h5>
                                    </div>
                                </div>
                            </div> --}}
                            <br>
                            <div class="mb-4">
                                <h4><strong>PERNYATAAN</strong></h4>
                                <h5 style="text-indent: 0.5in;text-align: justify;">Saya yang menyatakan bahwa data yang
                                    saya isikan dalam formulir pendaftaran penerimaan siswa baru MTs Bina Cendekia Cirebon
                                    tahun 2022 adalah benar dan saya bersedia menerima ketentuan yang berlaku. Saya
                                    bersedia menerima sanksi pembatalan penerimaan apabila melanggar pernyataan ini.</h5>
                            </div>
                            <div class="d-flex">
                                <div class="col-lg-6" style="width:50%; text-align: right; margin:15px;">
                                    {{-- <img width="150px" src="{{ asset('sipenmaru/images/qr.png') }}" alt=""> --}}
                                </div>
                                <div class="col-lg-6" style="width:50%;">
                                    <br>
                                    <center>
                                        <h5><label class="form-label"><strong
                                                    class="d-block">...............................,2022</strong></label>
                                        </h5>
                                        <br>
                                        <p style="color: rgb(156, 156, 156)">ttd</p>
                                        <br>
                                        <h5><strong class="d-block">{{ $item->nama_siswa }}</strong></h5>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row my-4">
                {{-- <div class="col">
                    <div class="text-end mt-2 mt-sm-0">
                        <button class="btn btn-info waves-effect waves-light mb-12" onclick="printDiv('cetak')"><i
                            class="fa fa-print"> </i></button>
                    </div>
                </div> --}}

                <!-- end col -->
            </div>
            <!-- end row-->
        </form>
    </div>
@endsection
