<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
        </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <img src="{{ asset("/public/dist/img/user2-160x160.jpg") }}" class="user-image img-circle elevation-2" alt="User Image">
                <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <!-- User image -->
                <li class="user-header bg-primary">
                    <img src="{{ asset("/public/dist/img/user2-160x160.jpg") }}" class="img-circle elevation-2" alt="User Image">
                    <p>
                        {{ Auth::user()->name }} <br> <span class="w3-small">Developer</span>
                    </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body w3-small">
                    <div class="row">
                        <button class="col-4 btn btn-default btn-flat"><i
                                class="fas fa-plus-circle"></i>&nbsp;User</button>
                        <button class="col-4 btn btn-default btn-flat">Users</button>
                        <button class="col-4 btn btn-default btn-flat">Profile</button>
                    </div>
                    <!-- /.row -->
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                    <a href="{{ route('logout') }}" class="btn btn-default btn-flat float-right w3-pale-red w3-hover-border-red" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><i
                            class="w3-text-red fas fa-sign-out-alt"></i>&nbsp;Sign out</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </li>
    </ul>
</nav>
