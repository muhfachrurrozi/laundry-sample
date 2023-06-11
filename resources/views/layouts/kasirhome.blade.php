<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Bersih Laundry</title>

    <link rel="shortcut icon" href="{{ asset('/assets/img/1logo.png') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/style.css') }}">
</head>

<body>
    <div class="main-wrapper">
        <div class="header">
			<div class="header-left">
				<!-- Logo-->
				<a href="{{ route('admin.index') }}" class="logo">
                    <img src="{{ asset('/assets/img/1logo.png') }}" wigth="35" height="35" alt="">
					 <span>bersih</span>
				</a>
			</div>
			<!--Navbar-->
			<a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img">
                            @if (Auth::user()->avatar)
                            <img class="rounded-circle" src="{{ asset('avatar/'.Auth::user()->avatar) }}" class="rounded-circle">
                            @else
                            <img class="rounded-circle" src="{{ asset('assets/img/user.jpg') }}" width="24" alt="Admin">
                            @endif
							<span class="status online"></span>
						</span>
						<span>{{ Auth::user()->name }}</span>
                    </a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="profile.html">My Profile</a>
						<a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
					</div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile.html">My Profile</a>
                    <a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
                    <a class="dropdown-item" href="login.html">Logout</a>
                </div>
            </div>
		</div>
		<!--Sidebar-->
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
                        <li class="active">
                            <a href="{{ route('admin.index') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
                        <li>
                            <a href="{{ route('details.index') }}"><i class="fa fa-pie-chart"></i> <span>Detail Transacsion</span></a>
                        </li>
                        <li>
                            <a href="{{ route('jasas.index') }}"><i class="fa fa-money"></i> <span>Princing</span></a>
                        </li>
                        <li>
                            <a href="{{ route('users.index') }}"><i class="fa fa-vcard-o"><span>User</span></i></a>
                        </li>
                        <li>
                            <a href="{{ route('tokos.index') }}"><i class="fa fa-university" aria-hidden="true"></i> <span>Toko</span></a>
                        </li>
                        {{-- <span class="badge badge-pill bg-primary float-right">5</span>--}}
                    </ul>
                </div>
            </div>
        </div>

                    @yield('content')

    <div class="sidebar-overlay" data-reff=""></div>
    <script src="{{ asset('/assets/js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/assets/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('/assets/js/Chart.bundle.js') }}"></script>
    <script src="{{ asset('/assets/js/chart.js') }}"></script>
    <script src="{{ asset('/assets/js/app.js') }}"></script>

</body>



</html>
