<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Pemesan;
use App\Models\Barang;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{

    public function index(Request $request)
    {
        $id=$request['id'];
        $barangs=Barang::all();
        $invoice=Invoice::find($id);
        $data = Transaksi::where('FK_kode_invoice', $id)
                ->get();
        // dd($data);
        return view('transaksi/home')->with(['transaksi' => $data,'barangs' => $barangs,'invoice' => $invoice]);
    }


    public function create()
    {
        return view('transaksi/form_create');
    }


    public function store(Request $request)
    {
        $validated_data=$request->validate([
            'FK_kode_invoice'=>'required',
            'FK_kode_barang'=>'required',
            'jumlah'=>'required',
        ]);


        $transaksi=new Transaksi();

        $transaksi->fill($validated_data);

        $transaksi->save();

        return redirect()->route('transaksi.index', ['id' => $transaksi['FK_kode_invoice']])->with('success','data berhasil disimpan');
    }

    public function show(Transaksi $transaksi)
    {
        //
    }

    public function edit(Transaksi $transaksi)
    {
        //
    }


    public function update(Request $request, Transaksi $transaksi)
    {
        //
    }


    public function destroy(Transaksi $transaksi)
    {
        //
        $ids=$transaksi->invoice->id;
        $transaksi->delete();

        return redirect()->route('transaksi.index', ['id' => $ids])->with('success','data berhasil disimpan');
    }
}
