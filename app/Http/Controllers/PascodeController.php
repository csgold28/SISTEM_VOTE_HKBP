<?php

namespace App\Http\Controllers;

use App\Pascode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PascodeController extends Controller
{
    public function index()
    {
        $pascode = Pascode::orderBy('created_at', 'DESC')->get();
        return view('pascode.index', compact('pascode'));
    }

    public function create()
    {
        return view('pascode.create');
    }

    public function store()
    {
        // $this->validate($request, [
        //     'pascode' => 'required',
        // ], [
        //     'pascode.required' => 'Silahkan isi Jumlah Pascode'
        // ]);



        $create = Pascode::create([
            'user_id' => Auth::user()->id,
            'pascode' => rand(10000, 99999)
        ]);

        if ($create) {
            return back();
        }

        // for ($i = 10000; $i < 99999; $i++) {
        //     return $i;
        // }

        // dd($i);
    }
}
