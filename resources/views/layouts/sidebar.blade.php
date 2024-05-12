<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index.html">REKAP</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index.html">RK</a>
    </div>
    <ul class="sidebar-menu">

        @section('sidebar')
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Tabel
                    </span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('barang.index')}}">Barang</a></li>
                    <li><a class="nav-link" href="{{route('jenis_kendaraan.index')}}">Jenis Kendaraan</a></li>
                    <li><a class="nav-link" href="{{route('metode_pembayaran.index')}}">Metode Pembayaran</a></li>
                    <li><a class="nav-link" href="{{route('pegawai.index')}}">Pegawai</a></li>
                    <li><a class="nav-link" href="{{route('pemesan.index')}}">Pemesan</a></li>
                    <li><a class="nav-link" href="{{route('penerima.index')}}">Penerima</a></li>
                    <li><a class="nav-link" href="{{route('bank.index')}}">Bank</a></li>
                    <li><a class="nav-link" href="{{route('invoice.index')}}">Invoice</a></li>
                    <li><a class="nav-link" href="{{route('pengirim.index')}}">Pengirim</a></li>
                    <li><a class="nav-link" href="{{route('tanda_terima.index')}}">Tanda Terima</a></li>
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
            @can('index-users')
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link"><i class="fas fa-table"></i><span>User List</span></a>
                </li>
            @endcan

        @show


    </ul>
  </aside>
