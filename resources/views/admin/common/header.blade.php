<div class="header">
    <div class="header-left">
        <a href="{{ route('home') }}" class="logo">
            <img src="{{ asset('assets/admin/img/logo/logo.png') }}" width="80" height="40" alt="">
        </a>
    </div>
    <div class="page-title-box pull-left">
        <h3>IOSBD</h3>
    </div>
    <a id="mobile_btn" class="mobile_btn pull-left" href="#sidebar"><i class="fa fa-bars" aria-hidden="true"></i></a>
    <ul class="nav navbar-nav navbar-right user-menu pull-right">

        <li class="dropdown">
            <a href="javaScript:void(0)" class="dropdown-toggle user-link" data-toggle="dropdown" title="{{ Auth::user()->name }}">
                        <span class="user-img"><img class="img-circle" src="{{ asset('assets/admin/img/user.jpg') }}" width="40" alt="Admin">
							<span class="status online"></span></span>
                <span>{{ Auth::user()->name }}</span>
                <i class="caret"></i>
            </a>
            <ul class="dropdown-menu">
{{--                <li><a href="{{ route('profile') }}">My Profile</a></li>--}}
                <li>
                    <a href="javaScript:void(0)" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                </li>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </ul>
        </li>
    </ul>
    <div class="dropdown mobile-user-menu pull-right">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
        <ul class="dropdown-menu pull-right">
{{--            <li><a href="{{ route('profile') }}">My Profile</a></li>--}}
            <li>
                <a href="javaScript:void(0)" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
            </li>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </ul>
    </div>
</div>
