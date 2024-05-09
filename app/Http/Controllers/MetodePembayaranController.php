<?php

namespace App\Http\Controllers;

use App\Models\MetodePembayaran;
use App\Http\Requests\StoreMetodePembayaranRequest;
use App\Http\Requests\UpdateMetodePembayaranRequest;
use Illuminate\Http\Request;

class MetodePembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = MetodePembayaran::all();

        return view('metode_pembayaran/home')->with('metode_pembayaran', $data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('metode_pembayaran/form_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated_data=$request->validate([
            'nama_metode'=>'required',
        ]);
        $validated_data['isDeleted'] = false;

        $metode_pembayaran=new MetodePembayaran();

        $metode_pembayaran->fill($validated_data);

       // dd($metode_pembayaran);

        $metode_pembayaran->save();

        return redirect()->route('metode_pembayaran.index')->with('success','data berhasil disimpan');

    }

    /**
     * Display the specified resource.
     */
    public function show(MetodePembayaran $metodePembayaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MetodePembayaran $metodePembayaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMetodePembayaranRequest $request, MetodePembayaran $metodePembayaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MetodePembayaran $metodePembayaran)
    {
        //
    }
}
