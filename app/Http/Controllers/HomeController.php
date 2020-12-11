<?php

namespace App\Http\Controllers;

use App\Calon;
use App\HasilFinal;
use App\Monitoring;
use App\Pascode;
use App\Peserta;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $calon = Calon::count();
        $pascode = Pascode::orderBy('id', 'desc')->count();
        $pascode_terpakai = Pascode::where('status', 2)->count();
        $peserta = Peserta::all()->count();
        $monitoring = Calon::with('monitoring')->get();
        $row_monitoring = Monitoring::orderBy('jumlah_pemilih', 'DESC')->get();
        $jml_pemilih = Monitoring::sum('jumlah_pemilih');
        // dd($pascode);

        return view('home', compact('calon', 'pascode', 'pascode_terpakai', 'peserta', 'monitoring', 'jml_pemilih', 'row_monitoring'));
    }

    public function index_2()
    {
        $calon = Calon::count();
        $pascode = Pascode::orderBy('id', 'desc')->count();
        $pascode_terpakai = Pascode::where('status', 2)->count();
        $peserta = Peserta::all()->count();
        $monitoring = Calon::with('monitoring')->get();
        $row_monitoring = HasilFinal::orderBy('id', 'asc')->get();
        $jml_pemilih = Monitoring::sum('jumlah_pemilih');
        // dd($pascode);

        return view('home2', compact('calon', 'pascode', 'pascode_terpakai', 'peserta', 'monitoring', 'jml_pemilih', 'row_monitoring'));
    }
}
