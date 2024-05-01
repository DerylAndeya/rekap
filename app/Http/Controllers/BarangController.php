<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { $data=barang::all();

        return view('barang/index')->with('barang',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    { return view('barang/form_tambah');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
