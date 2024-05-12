@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Form Tabel Transaksi</h1>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Input Text</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('transaksi.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Kode Invoice</label>
                            <select name="FK_kode_invoice" class="form-control select2 select2-hidden-accessible"
                                tabindex="-1" aria-hidden="true">
                                @forelse ($kds as $kd)
                                    <option value="{{ $kd->id }}">
                                        {{ $kd->kode_invoice }}
                                    </option>
                                @empty
                                    <option value="" disabled>
                                        Kosong
                                    </option>
                                @endforelse
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Kode Barang</label>
                            <select name="FK_kode_barang">
                                @forelse ($kdb as $b)
                                    <option value="{{ $b->id }}">
                                        {{ $b->nama_barang }}
                                    </option>
                                @empty
                                    <option value="" disabled>
                                        Kosong
                                    </option>
                                @endforelse
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jumlah</label>
                            <input type="text" class="form-control" name="jumlah">
                        </div>
                        <button type="submit" class="btn btn-primary col-1">Submit</button>
                </div>
                </form>



            </div>


        </div>
    </section>
@endsection

@push('customScript')
    <script src="{{ asset('assets/js/page/forms-advanced-forms.js') }}"></script>
    <script src="{{ asset('assets/select2/dist/js/select2.full.min.js') }}"></script>
@endpush
@push('customStyle')
    <link rel="stylesheet" href="{{ asset('assets/select2/dist/css/select2.min.css') }}">
@endpush
