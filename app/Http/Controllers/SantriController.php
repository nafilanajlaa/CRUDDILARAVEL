<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Santri;
use Illuminate\Http\Request;

class SantriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $santri = santri::all();
        return view('santri.index', compact('santri'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('santri.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pesan =[
            'nis.required' => 'nis masih kosong!',
            'nama.required' => 'nama masih kosong!',
        ];

        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
        ], $pesan);

        $santri = new Santri();
         
        $santri->nis = $request->nis;
        $santri->nama = $request->nama;

        $santri->save();

        return redirect()->route('santri.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $santri = Santri::findOrfail($id);

        return view('santri.show', compact('santri'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $santri = Santri::findOrfail($id);

        return view('santri.edit', compact('santri'));
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
       
        $santri = Santri::findOrfail($id); 
        $santri->nis = $request->nis;
        $santri->nama = $request->nama;

        $santri->update();

        return redirect()->route('santri.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $santri = Santri::findOrfail($id);
        $santri->delete();
        return redirect()->back();
    }
}
