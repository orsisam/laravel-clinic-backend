<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Klinik Sehat</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="{{ Route::is('home') ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{ route('home') }}"><i class="fas fa-fire"></i> <span>Dashboard</span></a>
            </li>
    
            <li class="nav-item dropdown ">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-users"></i><span>Users</span></a>
                <ul class="dropdown-menu {{ Route::is('users.*') ? 'active' : '' }}">
                    <li class="">
                        <a class="nav-link"
                            href="{{ route('users.index') }}"><i class="fas fa-user"></i> <span>User</span></a>
                    </li>
                </ul>
                <ul class="dropdown-menu {{ Route::is('doctors.*') ? 'active' : '' }}">
                    <li class="">
                        <a class="nav-link"
                            href="{{ route('doctors.index') }}"><i class="fas fa-stethoscope"></i> <span>Doctor</span></a>
                    </li>
                </ul>
            </li>


            
        </ul>

        <div class="hide-sidebar-mini mt-4 mb-4 p-3">
            <a href="https://getstisla.com/docs"
                class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
            </a>
        </div>
    </aside>
</div>
