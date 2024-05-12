@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Invoice</h1>
        </div>

        <div class="section-body">

            <div class="card">
                <div class="card-header">
                    <h4>LIST INVOICE</h4>
                    <div class="card-header-action">
                        <a href="{{ route('invoice.create') }}" class="btn btn-primary">Tambah Baru</a>
                        <a href="{{ route('invoice.export') }}" class="btn btn-primary">Export</a>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Tanggal</th>
                                    <th>Metode</th>
                                    <th>Rekening</th>
                                    <th>Bank</th>
                                    <th>Pegawai</th>
                                    <th>Pemesan </th>
                                    <th>Action</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                @isset($invoice)
                                    @foreach ($invoice as $i)
                                        <tr>
                                            <td>{{ $i->nomor_invoice }}</td>
                                            <td>{{ $i->tanggal}}</td>
                                            <td>{{ $i->metode_pembayaran->nama_metode }}</td>
                                            <td>{{ $i->rekening }}</td>
                                            <td>{{ $i->bank->nama_bank }}</td>
                                            <td>{{ $i->pegawai->nama_pegawai }}</td>
                                            <td>{{ $i->pemesan->nama_pemesan }}</td>
                                            <td>
                                                <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title=""
                                                    data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                                <a class="btn btn-danger btn-action trigger--fire-modal-1" data-toggle="tooltip"
                                                    title=""
                                                    data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                                    data-confirm-yes="alert('Deleted')" data-original-title="Delete"><i
                                                        class="fas fa-trash"></i></a>
                                            </td>
                                            <td>
                                                <a href="{{ route('transaksi.index', ['id' => $i->id]) }}" class="btn btn-success btn-action mr-1" data-toggle="tooltip" title=""
                                                    data-original-title="Edit"><i class="fa fa-shopping-basket"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endisset
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection


