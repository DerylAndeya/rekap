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
            @can('index-users')
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link"><i class="fas fa-table"></i><span>User List</span></a>
                </li>
            @endcan
            
        @show
        

    </ul> 
  </aside>