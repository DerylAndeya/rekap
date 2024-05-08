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
                                    <th>Pemesan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @isset($invoice)
                                    @foreach ($invoice as $i)
                                        <tr>
                                            <td>{{ $i->nomor_invoice }}</td>
                                            <td>{{ $i->tanggal_transaksi }}</td>
                                            <td>{{ $i->FK_metode_pembayaran }}</td>
                                            <td>{{ $i->rekening }}</td>
                                            <td>{{ $i->FK_bank }}</td>
                                            <td>{{ $i->FK_pegawai }}</td>
                                            <td>{{ $i->FK_pemesan }}</td>
                                            <td>
                                                <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title=""
                                                    data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                                <a class="btn btn-danger btn-action trigger--fire-modal-1" data-toggle="tooltip"
                                                    title=""
                                                    data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                                    data-confirm-yes="alert('Deleted')" data-original-title="Delete"><i
                                                        class="fas fa-trash"></i></a>
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

@section('sidebar')

    @parent

    <li class="menu-header">Rekap</li>
    <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Tabel
            </span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link" href="layout-default.html">Barang</a></li>
            <li><a class="nav-link" href="layout-transparent.html">Kendaraan</a></li>
            <li><a class="nav-link" href="layout-top-navigation.html">Jenis Kendaraan</a></li>
        </ul>
    </li>
    <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Hasil
                Rekap </span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link" href="layout-default.html">Bulanan</a></li>
            <li><a class="nav-link" href="layout-transparent.html">Tahunan</a></li>
        </ul>
    </li>
@endsection
