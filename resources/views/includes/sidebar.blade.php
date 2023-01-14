<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <img src="{{ asset('temp') }}/img/bem.png" style="display:block; margin:auto;" class="img-circle"
                    alt="Logo" width="100px" height="100px">
                <span class="text-center" style="display:block; margin:auto;"><strong>BEM STMIK Bandung</strong></span>
            </li>
            <li class="nav-item">
                <a href="/home" class="{{ Request::is('home') ? 'active' : '' }}"><i class="fa fa-home fa-fw"></i>
                    Home</a>
            </li>
            <li class="nav-item">
                <a href="/daftar" class="{{ Request::is('daftar') ? 'active' : '' }}"><i class="fa fa-edit fa-fw"></i>
                    Forms</a>
            </li>
            @can('admin')
                <li class="nav-item">
                    <a href="/anggota" class="{{ Request::is('anggota') ? 'active' : '' }}"><i
                            class="fa fa-fw fa-user-plus"></i> Data Pendaftar</a>
                </li>
            @endcan
        </ul>
    </div>
</div>
