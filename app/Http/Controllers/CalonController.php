<?php

namespace App\Http\Controllers;

use App\Calon;
use App\Monitoring;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CalonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calon = Calon::where('id', 'desc')->get();
        return view('calon.index', compact('calon'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('calon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'nomor_urut'    => 'nullable|min:1',
        //     'foto'          => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        //     'name'          => 'required|string|min:1',
        //     'kontak'        => 'required|string|min:1',
        //     'alamat'        => 'required|string|min:1',
        // ], [
        //     'nomor_urut.min'   => 'Minimal 1 Digit Angka / Huruf.',
        //     'foto.required'    => 'Harap Upload foto calon.',
        //     'foto.mimes'       => 'Format foto harus berupa JPEG, PNG, JPG',
        //     'foto.max'         => 'Maksimal file 2048 Kb',
        //     'name.required'    => 'Harap isi Kolom Nama Calon.',
        //     'name.min'         => 'Nama minimal 1 Huruf',
        //     'kontak.required'   => 'Harap isi Kolom Kontak Calon.',
        //     'kontak.min'        => 'Kontak minimal 1 Angka / Huruf',
        //     'alamat.required'   => 'Harap isi Kolom Alamat Calon.',
        //     'alamat.min'        => 'Alamat minimal 1 Angka / Huruf',
        // ]);

        // $new_calon = new Calon();
        // if ($request->get('nomor_urut')) {
        //     $new_calon->nomor_urut = $request->get('nomor_urut');
        // }
        // $request->file('foto')->move('calon/foto/', time() . $request->file('foto')->getClientOriginalName());
        // $new_calon->foto    = time() . $request->file('foto')->getClientOriginalName();
        // $new_calon->name    = $request->get('name');
        // $new_calon->kontak  = $request->get('kontak');
        // $new_calon->alamat  = $request->get('alamat');
        // $new_calon->user_id = Auth::user()->id;
        // $new_calon->save();

        // $monitoring = new Monitoring();
        // $monitoring->calon_id         = $new_calon->id;
        // $monitoring->jumlah_pemilih   = 0;
        // $monitoring->save();

        // return redirect()->route('calon.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
