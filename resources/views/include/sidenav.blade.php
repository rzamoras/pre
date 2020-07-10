<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
        <img src="{{ asset("public/img/sicc_logo.png") }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"><b>SICC</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset("public/dist/img/user2-160x160.jpg") }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item has-treeview menu-open">
                    <a href="{{ route('dashboard') }}" class="nav-link {{ request()->is('index', '/') ? ' active' : '' }}">
                        <i class="w3-text-orange nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview {{ request()->is('registration', 'fees')? 'active menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('registration', 'fees') ? 'active' : '' }}">
                        <i class="w3-text-green nav-icon fas fa-money-check-alt""></i>
                        <p>
                            Cashiering
                            <i class=" fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview w3-padding">
                        <li class="nav-item">
                            <a href="{{ route('cashiering.registration') }}" class="nav-link">
                                <i class="far fa-circle nav-icon {{ request()->is('registration') ? 'w3-text-blue' : '' }}"></i>
                                <p>Registration</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('cashiering.fees') }}" class="nav-link">
                                <i class="far fa-circle nav-icon {{ request()->is('fees') ? 'w3-text-blue' : '' }}"></i>
                                <p>Fees</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview {{ request()->is('soa', 'studentList', 'subsidiary', 'summary')? 'active menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('soa', 'studentList', 'subsidiary', 'summary')? 'active' : '' }}">
                        <i class="nav-icon fas fa-file-invoice-dollar w3-text-red"></i>
                        <p>
                            Student Account
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview w3-padding-small">
                        <li class="nav-item">
                            <a href="{{ route('studentAccount.soa') }}" class="nav-link">
                                <i class="far fa-circle nav-icon {{ request()->is('soa') ? 'w3-text-blue' : '' }}"></i>
                                <p>Statement of Account</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('studentAccount.list') }}" class="nav-link">
                                <i class="far fa-circle nav-icon {{ request()->is('studentList') ? 'w3-text-blue' : '' }}"></i>List</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('studentAccount.subsidiary') }}" class="nav-link">
                                <i class="far fa-circle nav-icon {{ request()->is('subsidiary') ? 'w3-text-blue' : '' }}"></i>
                                <p>Subsidiary Ledger</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('studentAccount.summary') }}" class="nav-link">
                                <i class="far fa-circle nav-icon {{ request()->is('summary') ? 'w3-text-blue' : '' }}"></i>
                                <p>Summary Ledger</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview {{ request()->is('dashboard', 'list', 'addPayor', 'records') ? 'active menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('dashboard', 'list', 'addPayor', 'records') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-graduate w3-text-khaki"></i>
                        <p>
                            Students
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview w3-padding">
                        <li class="nav-item">
                            <a href="{{ route('students.dashboard') }}" class="nav-link">
                                <i class="far fa-circle nav-icon {{ request()->is('dashboard') ? 'w3-text-blue' : '' }}"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('students.list') }}" class="nav-link">
                                <i class="far fa-circle nav-icon {{ request()->is('list') ? 'w3-text-blue' : '' }}"></i>
                                <p>Student list</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('students.addPayor') }}" class="nav-link">
                                <i class="far fa-circle nav-icon {{ request()->is('addPayor') ? 'w3-text-blue' : '' }}"></i>
                                <p>Add Payor</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('students.records') }}" class="nav-link">
                                <i class="far fa-circle nav-icon {{ request()->is('records') ? 'w3-text-blue' : '' }}"></i>
                                <p>Records</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeviewm {{ request()->is('manageBooks', 'borrow', 'return', 'monitoring') ? 'active menu-open' : ''}}">
                    <a href="#" class="nav-link {{ request()->is('manageBooks', 'borrow', 'return', 'monitoring') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-book w3-text-lime"></i>
                        <p>
                            Library
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview w3-padding">
                        <li class="nav-item">
                            <a href="{{ route('library.manageBooks') }}" class="nav-link">
                                <i class="far fa-circle nav-icon {{ request()->is('manageBooks') ? 'w3-text-blue' : '' }}"></i>
                                <p>Manage Books</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('library.borrow') }}" class="nav-link">
                                <i class="far fa-circle nav-icon {{ request()->is('borrow') ? 'w3-text-blue' : '' }}"></i>
                                <p>Borrow</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('library.return') }}" class="nav-link">
                                <i class="far fa-circle nav-icon {{ request()->is('return') ? 'w3-text-blue' : '' }}"></i>
                                <p>Return</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('library.monitoring') }}" class="nav-link">
                                <i class="far fa-circle nav-icon {{ request()->is('monitoring') ? 'w3-text-blue' : '' }}"></i>
                                <p>Monitoring</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview {{ request()->is('manageTeachers', 'faculties', 'personnel') ? 'active menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('manageTeachers', 'faculties', 'personnel') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-chalkboard-teacher w3-text-amber"></i>
                        <p>
                            Teachers
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview w3-padding">
                        <li class="nav-item">
                            <a href="{{ route('teachers.manageTeachers') }}" class="nav-link">
                                <i class="far fa-circle nav-icon {{ request()->is('manageTeachers') ? 'w3-text-blue' : '' }}"></i>
                                <p>Manage</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('teachers.faculties') }}" class="nav-link">
                                <i class="far fa-circle nav-icon {{ request()->is('faculties') ? 'w3-text-blue' : '' }}"></i>
                                <p>Faculties</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('teachers.personnel') }}" class="nav-link">
                                <i class="far fa-circle nav-icon {{ request()->is('personnel') ? 'w3-text-blue' : '' }}"></i>
                                <p>Personnel</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview {{ request()->is('manageCourse', 'course') ? 'active menu-open' : ''}}">
                    <a href="#" class="nav-link {{ request()->is('manageCourse', 'course') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-award w3-text-cyan"></i>
                        <p>
                            Course
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview w3-padding">
                        <li class="nav-item">
                            <a href="{{ route('course.manageCourse') }}" class="nav-link">
                                <i class="far fa-circle nav-icon {{ request()->is('manageCourse') ? 'w3-text-blue' : '' }}"></i>
                                <p>Manage</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('course.course') }}" class="nav-link">
                                <i class="far fa-circle nav-icon {{ request()->is('course') ? 'w3-text-blue' : ''}}"></i>
                                <p>Courses</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview {{ request()->is('manageEvents', 'addEvent', 'upcomingEvents') ? 'active menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('manageEvents', 'addEvent', 'upcomingEvents') ? 'active' : '' }}">
                        <i class="nav-icon far fa-calendar-alt w3-text-aqua"></i>
                        <p>
                            Events
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview w3-padding">
                        <li class="nav-item">
                            <a href="{{ route('events.manage') }}" class="nav-link">
                                <i class="far fa-circle nav-icon {{ request()->is('manageEvents') ? 'w3-text-blue' : '' }}"></i>
                                <p>Manage</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('events.addEvent') }}" class="nav-link">
                                <i class="far fa-circle nav-icon {{ request()->is('addEvent') ? 'w3-text-blue' : '' }}"></i>
                                <p>Add Events</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('events.upcomingEvents') }}" class="nav-link">
                                <i class="far fa-circle nav-icon  {{ request()->is('upcomingEvents') ? 'w3-text-blue' : '' }}"></i>
                                <p>Upcoming Events</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview {{ request()->is('feedback', 'email', 'sms') ? 'active menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('feedback', 'email', 'sms') ? 'active' : '' }}">
                        <i class="nav-icon far fa-envelope w3-text-pink"></i>
                        <p>
                            Messages
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview w3-padding">
                        <li class="nav-item">
                            <a href="{{ route('messages.feedback') }}" class="nav-link">
                                <i class="far fa-circle nav-icon {{ request()->is('feedback') ? 'w3-text-blue' : '' }}"></i>
                                <p>Feedback</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('messages.email') }}" class="nav-link">
                                <i class="far fa-circle nav-icon {{ request()->is('email') ? 'w3-text-blue' : '' }}"></i>
                                <p>Email</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('messages.sms') }}" class="nav-link">
                                <i class="far fa-circle nav-icon {{ request()->is('sms') ? 'w3-text-blue' : '' }}"></i>
                                <p>SMS</p>
                            </a>
                        </li>
                    </ul>
                </li>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
