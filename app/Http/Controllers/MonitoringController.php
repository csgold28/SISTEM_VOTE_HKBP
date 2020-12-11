<?php

namespace App\Http\Controllers;

use App\Calon;
use App\Done;
use App\Monitoring;
use Illuminate\Http\Request;

class MonitoringController extends Controller
{
    public function index()
    {
        $row_monitoring = Monitoring::orderBy('jumlah_pemilih', 'DESC')->get();
        $jml_pemilih = Monitoring::sum('jumlah_pemilih');
        return view('monitoring.index', compact('row_monitoring', 'jml_pemilih'));
    }

    public function s()
    {
        $monitoring = Calon::orderBy('id', 'asc')->with('done')->get();
        // dd($monitoring);
        return view('monitoring.monitoring', compact('monitoring'));
    }
}
