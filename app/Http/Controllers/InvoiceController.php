<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Invoice::all();

        return view('invoice/home')->with('invoice', $data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('invoice/form_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated_data=$request->validate([
            'nomor_invoice'=>'required',
            'tanggal_transaksi'=>'required',
            'FK_metode_pembayaran'=>'required',
            'rekening'=>'required',
            'FK_bank'=>'required',
            'FK_pegawai'=>'required',
            'FK_pemesan'=>'required',
        ]);
        $validated_data['isDeleted'] = false;

        $invoice=new Invoice();

        $invoice->fill($validated_data);

       // dd($invoice);

        $invoice->save();

        return redirect()->route('invoice.index')->with('success','data berhasil disimpan');

    }

    /**
     * Display the specified resource.
     */
    public function show(Invoice $invoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Invoice $invoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Invoice $invoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Invoice $invoice)
    {
        //
    }
}