<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand"#="index.html">
        <span class="align-middle">Donas.IT</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>

            <li class="sidebar-item {{ Request::is('dashboard*') ? 'active' : null }}">
                <a class="sidebar-link" href="/dashboard">
      <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
    </a>
            </li>

            <li class="sidebar-item {{ Request::is('program*') ? 'active' : null }}">
                <a class="sidebar-link" href="{{route('program.index')}}">
      <i class="align-middle" data-feather="user"></i> <span class="align-middle">Program</span>
    </a>
            </li>

            <li class="sidebar-item {{ Request::is('donatur*') ? 'active' : null }}">
                <a class="sidebar-link" href="/donatur">
      <i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Donatur</span>
    </a>
            </li>

            <li class="sidebar-item {{ Request::is('total user*') ? 'active' : null }}">
                <a class="sidebar-link" href="/totaluser">
      <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Total User</span>
    </a>
            </li>
            <li class="sidebar-item {{ Request::is('maps*') ? 'active' : null }}">
                <a class="sidebar-link" href="maps-google.html">
      <i class="align-middle" data-feather="map"></i> <span class="align-middle">Maps</span>
    </a>
            </li>
        </ul>


    </div>
</nav>
