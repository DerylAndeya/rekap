@extends('layouts.app')
@section('title','Dashboard')

@section('content')
    <section class="section">
        <div class="section-header">
        <h1>Form Invoice</h1>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-header">
                  <h4>Input Text</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('invoice.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Nomor Invoice</label>
                            <input type="text" class="form-control" name="nomor_invoice">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Transaksi</label>
                            <input type="text" class="form-control" name="tanggal_transaksi">
                        </div>
                        <div class="form-group">
                            <label>Metode Pembayaran</label>
                            <input type="text" class="form-control" name="FK_metode_pembayaran">
                        </div>
                        <div class="form-group">
                            <label>Rekening</label>
                            <input type="text" class="form-control" name="rekening">
                        </div>
                        <div class="form-group">
                            <label>Bank</label>
                            <input type="text" class="form-control" name="FK_bank">
                        </div>
                        <div class="form-group">
                            <label>Pegawai</label>
                            <input type="text" class="form-control" name="FK_pegawai">
                        </div>
                        <div class="form-group">
                            <label>Pemesan</label>
                            <input type="text" class="form-control" name="FK_pemesan">
                        </div>
                        <button type="submit" class="btn btn-primary col-1">Submit</button>
                        </div>
                    </form>



              </div>


        </div>
    </section>
@endsection

@section('sidebar')

    @parent

    <li class="menu-header">Rekap</li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Tabel </span></a>
      <ul class="dropdown-menu">
        <li><a class="nav-link" href="layout-default.html">Barang</a></li>
        <li><a class="nav-link" href="layout-transparent.html">Kendaraan</a></li>
        <li><a class="nav-link" href="layout-top-navigation.html">Jenis Kendaraan</a></li>
      </ul>
    </li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Hasil Rekap </span></a>
      <ul class="dropdown-menu">
        <li><a class="nav-link" href="layout-default.html">Bulanan</a></li>
        <li><a class="nav-link" href="layout-transparent.html">Tahunan</a></li>
      </ul>
    </li>
@endsection
