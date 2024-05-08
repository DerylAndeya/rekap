<?php

namespace App\Http\Controllers;

use App\Models\jenis_kendaraan;
use Illuminate\Http\Request;

class JenisKendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = jenis_kendaraan::all();

        return view('jenis_kendaraan/home')->with('jenis_kendaraan', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        return view('jenis_kendaraan/form_create');//}


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){//

        $validated_data=$request->validate([
            'nama_jenis'=>'required',
        ]);

        $validated_data['isDeleted'] = false;

        $jenis_kendaraan=new jenis_kendaraan();

        $jenis_kendaraan->fill($validated_data);

        $jenis_kendaraan->save();

        return redirect()->route('jenis_kendaraan.index')->with('success','data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(jenis_kendaraan $jenis_kendaraan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(jenis_kendaraan $jenis_kendaraan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, jenis_kendaraan $jenis_kendaraan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(jenis_kendaraan $jenis_kendaraan)
    {
        //
    }
}
