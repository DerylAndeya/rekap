<?php

namespace App\Http\Controllers;

use App\Models\Pemesan;
use Illuminate\Http\Request;

class PemesanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pemesan::all();

        return view('pemesan/home')->with('pemesan', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        return view('pemesan/form_create');//}


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){//

        $validated_data=$request->validate([
            'nama_pemesan'=>'required',
            'kota'=>'required',
        ]);
        $validated_data['isDeleted'] = false;

        $pemesan=new Pemesan();

        $pemesan->fill($validated_data);

       // dd($pemesan);

        $pemesan->save();

        return redirect()->route('pemesan.index')->with('success','data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pemesan $pemesan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pemesan $pemesan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pemesan $pemesan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pemesan $pemesan)
    {
        //
    }
}
