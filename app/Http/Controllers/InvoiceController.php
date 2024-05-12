<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Invoice;
use App\Models\MetodePembayaran;
use App\Models\Pegawai;
use App\Models\Pemesan;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

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
        $metode_pembayaran = MetodePembayaran::all();
        $bank = Bank::all();
        $pegawai = Pegawai::all();
        $pemesan = Pemesan::all();
        return view('invoice/form_create')->with(['mps' => $metode_pembayaran, 'banks' => $bank, 'pegawais' => $pegawai, 'pemesans' => $pemesan]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'nomor_invoice' => 'required',
            'tanggal' => 'required',
            'FK_metode_pembayaran' => 'required',
            'rekening' => 'required',
            'FK_bank' => 'required',
            'FK_pegawai' => 'required',
            'FK_pemesan' => 'required',
        ]);
        $validated_data['isDeleted'] = false;

        $invoice = new Invoice();

        $invoice->fill($validated_data);

        // dd($invoice);

        $invoice->save();

        return redirect()->route('invoice.index')->with('success', 'data berhasil disimpan');
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

    public function exportToExcel()
    {
        $users = Invoice::where('isDeleted', false)->get();

        $spreadsheet = new Spreadsheet();

        // Set active sheet
        $spreadsheet->setActiveSheetIndex(0);
        $sheet = $spreadsheet->getActiveSheet();

        // Set headers
        $sheet->setCellValue('A1', 'nomor invoice');
        $sheet->setCellValue('B1', 'tanggal');
        $sheet->setCellValue('C1', 'metode pembayaran');
        $sheet->setCellValue('D1', 'rekening');
        $sheet->setCellValue('E1', 'bank');
        $sheet->setCellValue('F1', 'pegawai');
        $sheet->setCellValue('G1', 'pemesan');


        // Populate data
        $row = 2;
        foreach ($users as $user) {
            $sheet->setCellValue('A' . $row, $user->nomor_invoice);
            $sheet->setCellValue('B' . $row, $user->tanggal);
            $sheet->setCellValue('C' . $row, $user->metode_pembayaran['nama_metode']);
            $sheet->setCellValue('D' . $row, $user->rekening);
            $sheet->setCellValue('E' . $row, $user->bank['nama_bank']);
            $sheet->setCellValue('F' . $row, $user->pegawai['nama_pegawai']);
            $sheet->setCellValue('G' . $row, $user->pemesan['nama_pemesan']);
            $row++;
        }

        // Set headers for download
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        $date = date('Y-m-d_H-i-s');
        $filename = 'Invoice_' . $date . '.xlsx';
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');

        // Create Excel writer
        $writer = new Xlsx($spreadsheet);

        // Save the file to output
        $writer->save('php://output');
    }
}
