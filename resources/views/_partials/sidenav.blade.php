<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('images/user.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>S.P Group Admin</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MASTER NAVIGATION</li>

            <li class="active">
                <a href="/">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>Labors</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{ route('add_labor') }}">
                            <i class="fa fa-circle-o"></i> Add New
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('all_labor') }}">
                            <i class="fa fa-circle-o"></i> All Labor
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="{{ route('attendance') }}">
                    <i class="fa fa-calendar-check-o"></i> <span>Attendance</span>
                </a>
            </li>

             <li>
                <a href="{{ route('wages') }}">
                    <i class="fa fa-bar-chart"></i> <span>Wages</span>
                </a>
            </li>

            <li>
                <a href="{{ route('account') }}">
                    <i class="fa fa-credit-card"></i> <span>Acounts</span>
                </a>
            </li> 

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-file-excel-o"></i>
                    <span>Report</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{ route('attendance_report') }}">
                            <i class="fa fa-circle-o"></i> Attendance
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('wages_report') }}">
                            <i class="fa fa-circle-o"></i> Wages
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
    </section>
</aside>
