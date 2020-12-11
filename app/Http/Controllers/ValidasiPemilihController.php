<?php

namespace App\Http\Controllers;

use App\Pascode;
use Illuminate\Http\Request;

class ValidasiPemilihController extends Controller
{
    public function validasi_kode(Request $request)
    {
        $this->validate($request, [
            'kode' => 'required|exists:pascodes,pascode',
        ], [
            'kode.required' => 'Kolom Kode Pemilihan masih kosong',
            'kode.exists' => 'Kode Pemilih Yang Anda isi Salah'
        ]);

        $kode = Pascode::where('pascode', $request->get('kode'))->first();

        // if ($kode->status == 1) {
        //     $kode->update([
        //         'status' => 2
        //     ]);
        //     return redirect()->route('pemilihan.index', [$request->get('kode')]);
        // } else {
        //     return 'Kode Pemilih Sudah terpakai';
        // }
        if ($kode) {
            return redirect()->route('pemilihan.index', [$request->get('kode')]);
        }
    }
}
