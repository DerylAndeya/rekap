<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Barang::all();

        return view('barangs/home')->with('barangs', $data);
    }



  public function create(){
      return view('barangs/form_create');//}


  }
  public function store(Request $request){//

        $validated_data=$request->validate([
            'nama_barang'=>'required',
            'harga'=>'required',
        ]);

        $validated_data['isDeleted'] = false;

        $barang=new Barang();

        $barang->fill($validated_data);

        $barang->save();

        return redirect()->route('barang.index')->with('success','data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(barang $barang)
    { return view('barang.form_edit',compact('barang'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, barang $barang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(barang $barang)
    {
        $barang->delete();

        return redirect()->route('barang.index')
            ->with('success', 'Data barang berhasil diperbarui');
        //
    }
}
