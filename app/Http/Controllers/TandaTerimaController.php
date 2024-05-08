<?php

namespace App\Http\Controllers;

use App\Models\TandaTerima;
use App\Http\Requests\StoreTandaTerimaRequest;
use App\Http\Requests\UpdateTandaTerimaRequest;

class TandaTerimaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = TandaTerima::all();

        return view('tanda_terima/home')->with('tanda_terima', $data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tanda_terima/form_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTandaTerimaRequest $request)
    {
        $validated_data=$request->validate([
            'FK_kode_invoice'=>'required',
            'tanggal'=>'required',
            'FK_jenis_kendaraan'=>'required',
            'plat'=>'required',
            'FK_pegawai'=>'required',
            'FK_pengirim'=>'required',
            'FK_penerima'=>'required',
        ]);
        $validated_data['isDeleted'] = false;

        $tanda_terima=new TandaTerima();

        $tanda_terima->fill($validated_data);

       // dd($tanda_terima);

        $tanda_terima->save();

        return redirect()->route('tanda_terima.index')->with('success','data berhasil disimpan');

    }

    /**
     * Display the specified resource.
     */
    public function show(TandaTerima $tandaTerima)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TandaTerima $tandaTerima)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTandaTerimaRequest $request, TandaTerima $tandaTerima)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TandaTerima $tandaTerima)
    {
        //
    }
}
