<?php

namespace App\Http\Controllers;

use App\Models\Pengirim;
use App\Http\Requests\StorePengirimRequest;
use App\Http\Requests\UpdatePengirimRequest;
use Illuminate\Http\Request;

class PengirimController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pengirim::all();

        return view('pengirim/home')->with('pengirim', $data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pengirim/form_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated_data=$request->validate([
            'nama_pengirim'=>'required',
        ]);
        $validated_data['isDeleted'] = false;

        $pengirim=new Pengirim();

        $pengirim->fill($validated_data);

       // dd($pengirim);

        $pengirim->save();

        return redirect()->route('pengirim.index')->with('success','data berhasil disimpan');

    }

    /**
     * Display the specified resource.
     */
    public function show(Pengirim $pengirim)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengirim $pengirim)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePengirimRequest $request, Pengirim $pengirim)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengirim $pengirim)
    {
        //
    }
}
