<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\ayah;
use App\models\ibu;
use App\models\siswa;

class DaftarController extends Controller
{
    public function index()
    {


      return view('pages.user-flow.ortu');

    }

    public function siswa()
    {
      $ibu= ibu::all();
      $ayah= ayah::all();
      return view('pages.user-flow.Pendaftaran', compact('ayah','ibu'));
    }

    public function store(Request $request)
    {
      $validatedData = $request->validate([
        'nama_ayah' => 'required',
        'nama_ibu' => 'required',
        'Pekerjaan' => 'required',
        'pekerjaan_ibu' => 'required',
        'Penghasilan' => 'required',
        // 'penghasilan_ibu' => 'required',
        'no_telp_ortu' => 'required'

      ]);

      $ayah = new ayah;
      $ayah->nama_ayah = $request->nama_ayah;
      $ayah->Pekerjaan = $request->Pekerjaan;
      $ayah->Penghasilan = $request->Penghasilan;

      $ayah->save();

      $ibu = new ibu;
      $ibu->nama_ibu = $request->nama_ibu;
      $ibu->pekerjaan_ibu = $request->pekerjaan_ibu;
    //   $ibu->penghasilan_ibu = $request->penghasilan_ibu;
      $ibu->no_telp_ortu = $request->no_telp_ortu;

      $ibu->save();

      return redirect('/siswa');

    }

    public function siswaStore(Request $request)
    {




      $validatedData = $request->validate([
        'nama' => 'required',
        'no_telp' => 'required',
        'agama' => 'required',
        'tanggal_lahir' => 'required',
        'tempat_lahir' => 'required',
        'asal_sekolah' => 'required',
        'alamat' => 'required',
        'gender' => 'required'

      ]);



            $siswa = new siswa;
            $siswa->nama_siswa = $request->nama;
            $siswa->no_telp = $request->no_telp;
            $siswa->agama = $request->agama;
            $siswa->tanggal_lahir = $request->tanggal_lahir;
            $siswa->tempat_lahir = $request->tempat_lahir;
            $siswa->asal_sekolah = $request->asal_sekolah;
            $siswa->alamat = $request->alamat;
            $siswa->gender = $request->gender;
            // $siswa->id_ayah = $request->id_ayah;
            // $siswa->id_ibu = $request->id_ibu;



            $siswa->save();

            return redirect("/")->with('pesan', 'input berhasil!!!');;
    }
}
