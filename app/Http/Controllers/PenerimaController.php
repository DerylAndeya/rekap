<?php

namespace App\Http\Controllers;

use App\Models\Penerima;
use App\Http\Requests\StorePenerimaRequest;
use App\Http\Requests\UpdatePenerimaRequest;

class PenerimaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Penerima::all();

        return view('penerima/home')->with('penerima', $data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penerima/form_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePenerimaRequest $request)
    {
        $validated_data=$request->validate([
            'nama_penerima'=>'required',
        ]);
        $validated_data['isDeleted'] = false;

        $penerima=new Penerima();

        $penerima->fill($validated_data);

       // dd($penerima);

        $penerima->save();

        return redirect()->route('penerima.index')->with('success','data berhasil disimpan');

    }

    /**
     * Display the specified resource.
     */
    public function show(Penerima $penerima)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penerima $penerima)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePenerimaRequest $request, Penerima $penerima)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penerima $penerima)
    {
        //
    }
}
