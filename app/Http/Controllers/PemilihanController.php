<?php

namespace App\Http\Controllers;

use App\Calon;
use App\HasilFinal;
use App\Monitoring;
use App\Pascode;
use Illuminate\Http\Request;

class PemilihanController extends Controller
{
    public function welcome(Request $request)
    {
        $kode = Pascode::where('status', 1)->inRandomOrder()->first();
        // dd($kode);
        return view('welcome', compact('kode'));
    }
    public function index($kode)
    {
        $cek = Pascode::where('pascode', $kode)->first();
        if ($cek) {
            $calon = Calon::orderBy('nomor_urut', 'asc')->get();
            // return view('calon.pemilihan', compact('calon'));
            return view('calon.pemilihan1');
        } else {
            return redirect('/');
        }
    }

    public function pilih_calon($pascode)
    {
        dd($pascode);
    }

    public function data_calon()
    {
        $calon = Calon::orderBy('id', 'asc')->get();
        return response()->json($calon);
    }

    public function store_data(Request $request)
    {
        $limit = count($request->users);

        if ($limit > 32) {
            return response()->json(['status' => 'failed', 'message' => 'Anda melebihi jumlah maksimal memilih, jumlah maksimal 32 Calon '], 200);
        } else {
            foreach ($request->users as $calons) {
                $calon = Monitoring::where('calon_id', $calons)->first();
                $calon->update([
                    'jumlah_pemilih' => $calon->jumlah_pemilih + 1
                ]);
            }
        }
    }

    public function final()
    {
        // $calon = Calon::orderBy('id', 'asc')->get();
        // foreach ($calon as $data) {
        //     HasilFinal::create([
        //         'nomor_urut' => $data->nomor_urut,
        //         'name'      => $data->name,
        //         "jumlah_pemilih"   => 0
        //     ]);
        // }
        $row_monitoring = HasilFinal::orderBy('jumlah_pemilih', 'desc')->get();
        return view('monitoring.monitoring', compact('row_monitoring'));
    }
}
