@extends('layouts.index')

@section('content')
<div class="container-fluid">
    <a href="/admin" class="btn btn-danger mb-5">Back</a>
    <a href="../../admin/view/{{$item ->id}}"><button type="button" class="btn btn-primary mb-5">View Card </button></a>
    <div class="card">
        <div class="card-body">
            <h4>Data Lengkap Peserta</h4>
            <div class="row">
                <table class="table table-bordered">
                    <tr>
                        <td>Nama</td>
                        <td>{{ $item->nama_siswa }}</td>
                    </tr>
                    <tr>
                        <td>TTL</td>
                        <td>{{ $item-> tempat_lahir }}, {{ $item->tanggal_lahir }}</td>
                    </tr>
                    <tr>
                        <td>Asal Sekolah</td>
                        <td>{{ $item->asal_sekolah }}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>{{ $item->Alamat }}</td>
                    </tr>
                    <tr>
                        <td>No Telepon</td>
                        <td>{{ $item->no_telp }}</td>
                    </tr>
                    <tr>
                        <td>nama ibu</td>
                        <td>{{ $ayah->nama_ayah }}</td>
                    </tr>
                    <tr>
                        <td>nama ibu</td>
                        <td>{{ $ibu->nama_ibu }}</td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>{{ $item->gender }}</td>
                    </tr>

                    <tr>
                        <td>Pekerjaan Ayah</td>
                        <td>{{ $ayah->Pekerjaan }}</td>
                    </tr>
                    <tr>
                        <td>Pekerjaan Ibu</td>
                        <td>{{ $ibu->pekerjaan_ibu }}</td>
                    </tr>
                    <tr>
                        <td>Penghasilan Ayah</td>
                        <td>{{ $ayah->Penghasilan }}</td>
                    </tr>
                    {{-- <tr>
                        <td>Penghasilan Ibu</td>
                        <td>{{ $ibu->penghasilan_ibu }}</td>
                    </tr> --}}
                    <tr>
                        <td>No Telepon Ortu</td>
                        <td>{{  $ibu->no_telp_ortu }}</td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>{{ $item->status }}</td>
                    </tr>
                    <tr>
                        <td>Aksi</td>
                        <td>
                            @if ($item->status == 'MENUNGGU')
                                <form method="post" class="d-inline-block" action="{{ route('peserta-diterima', $item->id) }}">
                                    @method('PATCH')
                                    @csrf
                                    <button type="submit" class="btn btn-success mr-2" href="https://wa.me/089506037357?text=Halo%20nama%20saya%20nadine">
                                        TERIMA
                                    </button>
                                </form>
                                <form method="post" class="d-inline-block" action="{{ route('peserta-ditolak', $item->id) }}">
                                    @method('PATCH')
                                    @csrf
                                    <button type="submit" class="btn btn-danger mr-2">
                                        TOLAK
                                    </button>
                                </form>
                            @else
                                <button class="btn btn-success mr-2" disabled>
                                    TERIMA
                                </button>
                                <button class="btn btn-danger mr-2" disabled>
                                    TOLAK
                                </button>
                            @endif
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
