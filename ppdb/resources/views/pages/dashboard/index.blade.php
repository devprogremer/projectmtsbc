@extends('layouts.index')
@push('style')
<link href="{{asset('sbadmin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endpush
@section('content')

@if (session('pesan'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4><i class="icon fa fa-check"></i>Success</h4>
    {{ session('pesan') }}
</div>
@endif
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>

    </div>
    <div>
        <div class="text-end mt-2 mt-sm-0">
            {{-- &nbsp; <button class="btn btn-info waves-effect waves-light mb-4" onClick="window.print();">Print</button> --}}
            <button class="btn btn-info waves-effect waves-light mb-4" onclick="printContent('div1')"><i
                class="fa fa-print"> PRINT</i></button>
            {{-- <button class="btn btn-info waves-effect waves-light mb-4" onclick="printDiv('cetak')"><i
                class="fa fa-print"> PRINT</i></button> --}}
        </div>
    </div>
    <!-- Content Row -->


    <div class="row mt-5" id="div1">
        <div class="col-12">
            <h1>Data Peserta PPDB</h1>
        </div>
        <div class="col-12">
            <div class="row-6">
            <div class="card mt-3">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Asal Sekolah</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1 ?>
                                @foreach($items as $item)
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$item->nama_siswa}}</td>
                                    <td>{{$item->asal_sekolah}}</td>>
                                    <td>
                                        @if ($item->status == 'MENUNGGU')
                                            <div class="font-weight-bold text-warning">MENUNGGU</div>
                                        @endif
                                        @if ($item->status == 'DITOLAK')
                                            <div class="font-weight-bold text-danger">DITOLAK</div>
                                        @endif
                                        @if ($item->status == 'DITERIMA')
                                            <div class="font-weight-bold text-success">DITERIMA</div>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="admin/detail/{{$item ->id}}" class="btn btn-primary">
                                            Detail
                                        </a>
                                    @if($item -> status == 'DITERIMA')
                                       <a href="https://wa.me/{{ $item->no_telp }}?text=Hallo%20 *{{ $item->nama_siswa }}*

                                       Saya Admin Dari MTs Bina Cendekia Cirebon Ingin memberi tahu bahwa pendaftaran anda sudah di terima silahkan bergabung dengan link ini untuk informasi lebih lanjut https://chat.whatsapp.com/FTioRDhADVw5tUukl9TmRw" class="btn btn-success">Kirim Pesan</a>
                                    @endif
                                    </td>

                                </tr>
                                <?php $i++; ?>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('script')
    <!-- Page level plugins -->
    <script src="{{asset('sbadmin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('sbadmin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('sbadmin/js/demo/datatables-demo.js')}}"></script>
@endpush
