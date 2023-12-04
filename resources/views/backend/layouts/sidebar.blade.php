<div class="leftside-menu">
    <a href="{{ route('any', 'index') }}" class="logo logo-light">
        <span class="logo-lg">
            <img src="{{ asset('/images/logo.png') }}" alt="logo">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('/images/logo-sm.png') }}" alt="small logo">
        </span>
    </a>
    <a href="{{ route('any', 'index') }}" class="logo logo-dark">
        <span class="logo-lg">
            <img src="{{ asset('/images/logo-dark.png') }}" alt="logo">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('/images/logo-sm.png') }}" alt="small logo">
        </span>
    </a>
    <div class="button-sm-hover" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
        <i class="ri-checkbox-blank-circle-line align-middle"></i>
    </div>
    <div class="button-close-fullsidebar">
        <i class="ri-close-fill align-middle"></i>
    </div>
    <div class="h-100" id="leftside-menu-container" data-simplebar>
        <div class="leftbar-user">
            <a href="{{ route('second', ['pages', 'profile']) }}">
                <img src="{{ asset('/images/users/avatar-1.jpg') }}" alt="user-image" height="42" class="rounded-circle shadow-sm">
                <span class="leftbar-user-name mt-2">Tosha Minner</span>
            </a>
        </div>
        <ul class="side-nav">
            <li class="side-nav-title">Menu</li>
            <li class="side-nav-item">
                <a href="{{ route('any', ['dashboard']) }}" class="side-nav-link">
                    <i class="ri-dashboard-fill"></i>
                    <span> Dashboard </span>
                </a>
            </li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarSchedule" aria-expanded="false" aria-controls="sidebarSchedule" class="side-nav-link">
                    <i class="ri-calendar-todo-fill"></i>
                    <span> Data Jadwal Dokter </span>
                </a>
                <div class="collapse" id="sidebarSchedule">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('second', ['schedules', 'dates']) }}">Data Tanggal</a>
                        </li>
                        <li>
                            <a href="{{ route('second', ['schedules',  \Carbon\Carbon::today()->format('Y-m-d')]) }}">Data Jadwal</a>
                        </li>
                        <li>
                            <a href="{{ route('third', ['schedules', 'history', 'dates']) }}">Data Histori Jadwal</a>
                        </li>
                    </ul>
                </div>
            </li>
            @can('view clinics')
                <li class="side-nav-item">
                    <a href="{{ route('any', ['clinics']) }}" class="side-nav-link">
                        <i class="ri-hospital-fill"></i>
                        <span> Data Klinik </span>
                    </a>
                </li>
            @endcan
            @can('view business partners')
                <li class="side-nav-item">
                    <a href="{{ route('any', ['businessPartners']) }}" class="side-nav-link">
                        <i class="ri-briefcase-fill"></i>
                        <span> Data Asuransi </span>
                    </a>
                </li>
            @endcan
            @can('view users')
                <li class="side-nav-item">
                    <a href="{{ route('any', ['users']) }}" class="side-nav-link">
                        <i class="ri-user-3-fill"></i>
                        <span> Data User </span>
                    </a>
                </li>
            @endcan
            @can('view logs')
                <li class="side-nav-item">
                    <a href="{{ route('any', ['logs']) }}" class="side-nav-link">
                        <i class="ri-file-list-3-line"></i>
                        <span> Data Logs </span>
                    </a>
                </li>
            @endcan
        </ul>
        <div class="clearfix"></div>
    </div>
</div>
