<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a target="_blank" href="{{ url('/') }}" class="nav-link">Home</a>
        </li>

        <li class="nav-item d-none d-sm-inline-block">
            <a target="_blank" href="{{ route('result') }}" class="nav-link">Public Results</a>
        </li>
    </ul>

    <!-- SEARCH FORM -->
{{--    <form class="form-inline ml-3" action="#">--}}
{{--        <div class="input-group input-group-sm">--}}
{{--            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">--}}
{{--            <div class="input-group-append">--}}
{{--                <button class="btn btn-navbar" type="submit">--}}
{{--                    <i class="fas fa-search"></i>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </form>--}}

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
            <form action="{{ route('logout') }}" method="post"> @csrf
                <button type="submit" class="btn btn-sm btn-default">Logout</button>
            </form>
{{--            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">--}}
{{--                <div class="dropdown-item">--}}
                    <!-- Message Start -->
{{--                    <div class="media">--}}
{{--                        <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">--}}
{{--                        <div class="media-body">--}}
{{--                            <h3 class="dropdown-item-title">--}}
{{--                                Brad Diesel--}}
{{--                                <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>--}}
{{--                            </h3>--}}
{{--                            <p class="text-sm">Call me whenever you can...</p>--}}
{{--                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <a class="btn-primary btn" href="#">Profile</a>--}}
{{--                    <form action="{{ route('logout') }}" method="post"> @csrf--}}
{{--                        <button type="submit" class="btn btn-info">Logout</button>--}}
{{--                    </form>--}}
                    <!-- Message End -->
{{--                </div>--}}
{{--                <div class="dropdown-divider"></div>--}}
{{--                <a href="#" class="dropdown-item">--}}
{{--                    <!-- Message Start -->--}}
{{--                    <div class="media">--}}
{{--                        <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">--}}
{{--                        <div class="media-body">--}}
{{--                            <h3 class="dropdown-item-title">--}}
{{--                                John Pierce--}}
{{--                                <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>--}}
{{--                            </h3>--}}
{{--                            <p class="text-sm">I got your message bro</p>--}}
{{--                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- Message End -->--}}
{{--                </a>--}}

{{--            </div>--}}
        </li>


        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
                    class="fas fa-th-large"></i></a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
