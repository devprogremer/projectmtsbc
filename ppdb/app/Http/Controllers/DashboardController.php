<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\siswa;
use App\Models\ayah;
use App\Models\ibu;

class DashboardController extends Controller
{
  public function __construct()
{
  $this->middleware('auth');
}
public function index()
{
  $count_user = User::all()->count();
  $items = siswa::all();
  return view('pages.dashboard.index', compact('count_user','items'));
}


 function detail ($id)
{
  $item = siswa::where('id', $id)->first();
  $ayah = ayah::where('id_ayah', $id)->first();
  $ibu = ibu::where('id_ibu', $id)->first();

  return view('pages.dashboard.detail', compact('item','ayah','ibu'));
}
function view ($id)
{
  $item = siswa::where('id', $id)->first();
  $ayah = ayah::where('id_ayah', $id)->first();
  $ibu = ibu::where('id_ibu', $id)->first();

  return view('pdf.kartu_peserta', compact('item','ayah','ibu'));
}

public function terima($id)
    {
        $item = siswa::findOrFail($id);

        $item->status = 'DITERIMA';
        $item->update();

        return redirect()->route('home')->with('pesan', 'Siswa di terima !!!');
    }

    public function ditolak($id)
    {
        $item = siswa::findOrFail($id);

        $item->status = 'DITOLAK';
        $item->update();

        return redirect()->route('home')->with('pesan', 'Siswa di tolak !!!');;
    }

    public function download()
    {
        $data = siswa::all();
        $pdf = \PDF::loadView('pdf.laporan', [
                'data' => $data
            ]);
        return $pdf->download('laporan.pdf');
    }
}
