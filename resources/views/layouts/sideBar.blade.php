<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="{{ asset('assets/images/xs/avatar1.jpg') }}" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown">{{ Auth::user()->name }}</div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="button"> keyboard_arrow_down </i>
                <ul class="dropdown-menu slideUp">
                    <li><a href="/profile"><i class="material-icons">person</i>Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="/logout"><i class="material-icons">input</i>Sign Out</a></li>
                </ul>
            </div>
            <div class="email">{{ Auth::user()->email }}</div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            <li class="{{ (request()->is('dashboard*')) ? 'active' : '' }} open"><a href="/dashboard"><i class="zmdi zmdi-home"></i><span>Dashboard</span> </a></li>
            <li class="{{ (request()->is('timeline*')) ? 'active' : '' }}"><a href="/timeline"><i class="zmdi zmdi-time-restore"></i><span>TimeLine</span> </a></li>
            <li class="{{  (request()->is('incidents/*')) ? 'active' : '' }}"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-hc-fw"></i><span>Incident</span> </a>
                <ul class="ml-menu">
                    <li class="{{  (request()->is('incidents/listIncident')) ? 'active' : '' }}"><a href="/incidents/listIncident">List Incident</a></li>
                    <li class="{{  (request()->is('incidents/createIncident')) ? 'active' : '' }}"><a href="/incidents/createIncident">Create Incident</a></li>
                    <li><a href="">Schedule maintenance</a></li>
                    <li><a href="">Postmortems</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <!-- #Menu -->
</aside>
