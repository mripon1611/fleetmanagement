<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">
        <div class="pcoded-navigatio-lavel">Navigation</div>
        <ul class="pcoded-item pcoded-left-item">

            <li class="{{ url()->current() == url('') ? 'active':'' }}">
                <a href="/">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Dashboard</span>
                </a>
            </li>

            <li class="pcoded-hasmenu {{ url()->current() == url('drivers') ? 'active pcoded-trigger':'' }}
                        {{ url()->current() == url('vehicle') ? 'active pcoded-trigger':'' }}
                        {{ url()->current() == url('refuel-requisition') ? 'active pcoded-trigger':'' }}">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fas fa-truck-monster"></i></span>
                    <span class="pcoded-mtext">Vehicle Management</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="{{ url()->current() == url('drivers') ? 'active':'' }}">
                        <a href="/drivers">
                            <span class="pcoded-mtext">Manage Driver</span>
                        </a>
                    </li>
                    <li class="{{ url()->current() == url('vehicle') ? 'active':'' }}">
                        <a href="/vehicle">
                            <span class="pcoded-mtext">Manage Vehicle</span>
                        </a>
                    </li>
                    <li class="{{ url()->current() == url('refuel-requisition') ? 'active':'' }}">
                        <a href="/refuel-requisition">
                            <span class="pcoded-mtext">Refuel Requisition</span>
                        </a>
                    </li>
                </ul>
            </li>

            <!--  Weekly Check Report start here -->
            <li class="pcoded-hasmenu {{ url()->current() == url('create-weekly-report') ? 'active pcoded-trigger':'' }}
                        {{ url()->current() == url('weekly-check-report') ? 'active pcoded-trigger':'' }}">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fas fa-viruses"></i></span>
                    <span class="pcoded-mtext">Weekly Check Report</span>
                </a>
                <ul class="pcoded-submenu">
                    <!-- <li class="{{ url()->current() == url('create-weekly-report') ? 'active':'' }}">
                        <a href="/create-weekly-report">
                            <span class="pcoded-mtext">Create Report</span>
                        </a>
                    </li> -->
                    <li class="{{ url()->current() == url('weekly-check-report') ? 'active pcoded-trigger':'' }}">
                        <a href="/weekly-check-report">
                            <span class="pcoded-mtext">View Report</span>
                        </a>
                    </li>
                    <!-- <li class="Disabled">
                        <a href="/modals">
                            <span class="pcoded-mtext">Modals</span>
                        </a>
                    </li> -->
                </ul>
            </li>
            <!-- Weekly Check Report ends here -->
        </ul>
                            
    </div>
</nav>