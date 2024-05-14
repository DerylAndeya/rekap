@extends('layouts.app')
@section('title','Dashboard')

@section('content')
    <section class="section">
        <div class="section-header">
        <h1>Tabel Pegawai</h1>
        </div>

        <div class="section-body">

          <div class="card">
            <div class="card-header">
              <h4>LIST TABEL PEGAWAI</h4>
              <div class="card-header-action">
                <a href="{{route('pegawai.create')}}" class="btn btn-primary">Tambah Baru</a>
              </div>
            </div>
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table table-striped mb-0">
                  <thead>
                      <tr>
                          <th>Nama</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      @isset($pegawai)
                          @foreach ($pegawai as $p)
                              <tr>
                                  <td>{{$p->nama_pegawai}}</td>
                                  <td>
                                    <a href="{{ route('pegawai.edit', ['pegawai' => $p]) }}" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                    <a class="btn btn-danger btn-action trigger--fire-modal-1" data-toggle="tooltip" title="" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')" data-original-title="Delete"><i class="fas fa-trash"></i></a>
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

