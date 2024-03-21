<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('home') }}">Klinik Dokter</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('home') }}">KLINIK DOC</a>
        </div>
        <ul class="sidebar-menu">
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link {{ Request::is('dashboard*') ? 'active' : '' }}"><i class="fas fa-clinic-medical"></i><span>Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a href="{{ route('users.index') }}" class="nav-link {{ Request::is('users') ? 'active' : '' }}"><i class="fas fa-users"></i><span>Users</span></a>
            </li>
            <li class="nav-item">
                <a href="{{ route('doctors.index') }}" class="nav-link {{ Request::is('doctors') ? 'active' : '' }}"><i class="fas fa-user-md"></i><span>Doctors</span></a>
            </li>
            <li class="nav-item">
                <a href="{{ route('doctor-schedules.index') }}" class="nav-link {{ Request::is('doctor-schedules') ? 'active' : '' }}"><i class="fas fa-calendar"></i><span>Doctor Schedules</span></a>
            </li>
            <li class="nav-item">
                <a href="{{ route('patients.index') }}" class="nav-link {{ Request::is('patients') ? 'active' : '' }}"><i class="fas fa-user"></i><span>Patients</span></a>
            </li>
    </aside>
</div>
