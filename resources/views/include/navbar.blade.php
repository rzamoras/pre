
<div id="addUser" class="w3-modal">
    <div class="w3-card w3-modal-content  w3-animate-top w3-round">
        <header class="w3-container w3-light-blue">
            <span onclick="document.getElementById('addUser').style.display='none'"
            class="w3-button w3-display-topright">&times;</span><br>
            <div class="text-center"><p>ADD USER</p></div>
        </header>

<form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="w3-section w3-padding w3-col">

        <label for="name" class="">{{ __('Name') }}</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        <label for="email" class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        <label for="username" class="col-form-label text-md-right">{{ __('Username') }}</label>

            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username">

            @error('username')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>

            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        <label for="password-confirm" class="col-form-label text-md-right">{{ __('Confirm Password') }}</label>

            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

    <div class="w3-padding">
        <div class="">
            <button type="submit" class="btn btn-primary">
                {{ __('Register') }}
            </button>
        </div>
    </div>
    </div>
</form>
        <footer class="w3-container">

        </footer>
    </div>
</div>

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('dashboard') }}" class="nav-link">Home</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <img src="{{ asset("/public/dist/img/user2-160x160.jpg") }}" class="user-image img-circle elevation-2" alt="User Image">
                <span class="d-none d-md-inline text-uppercase">{{ Auth::user()->username }}</span>
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
                        <button class="col-4 btn btn-default btn-flat" onclick="document.getElementById('addUser').style.display='block'"><i
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
