<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Classroom</title>
    <link rel="stylesheet" href="{{asset('fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/OverlayScrollbars.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/adminlte.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/datatables.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/datatables-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/toastr.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/summernote.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

    <script src="{{asset('js/jquery.min.js')}}"></script>

    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400&display=swap" rel="stylesheet"> </head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
    <nav class="main-header navbar shadow-sm navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <p class="mt-2">Palash Kumar Das</p>
            </li>

        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link"  href="{{url('/Notification')}}">
                    <i class="far fa-bell"></i>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-user-circle"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item ">Logout</a>
                    <div class="dropdown-divider"></div>
                    <a href="{{url('/Profile')}}" class="dropdown-item">Profile</a>
                </div>
            </li>
        </ul>
    </nav>
    <aside class="main-sidebar sidebar-dark-danger elevation-1">
        <a href="/" class="brand-link">
            <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">Classroom</span>
        </a>
        <div class="sidebar ">
            <nav class="mt-2 pb-4">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                    <li class="nav-item">
                        <a href="{{url('/Dashboard')}}" class="nav-link"><i class="nav-icon fa fa-home"></i><p>Dasboard</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/" class="nav-link"><i class="nav-icon fa fa-desktop"></i><p>Main Site</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{url('/Tutorial')}}" class="nav-link"><i class="nav-icon fa fa-book"></i><p>Tutorials</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{url('/Files')}}" class="nav-link"><i class="nav-icon fa fa-folder"></i><p>Files</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{url('/Message')}}" class="nav-link"><i class="nav-icon far fa-envelope"></i><p>Messages</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://web.facebook.com/?_rdc=1&_rdr" class="nav-link"><i class="nav-icon fab fa-facebook"></i><p>Join Discussion</p>
                        </a>
                    </li>

                   <li class="nav-item">
                       <a href="{{url('/Certificate')}}" class="nav-link"><i class="nav-icon fa fa-certificate"></i><p>Certificate</p>
                      </a>
                  </li>


                </ul>
            </nav>
        </div>
    </aside>
    <div class="content-wrapper">
        @yield('content')
    </div>

</div>

<script src="{{asset('js/datatables.min.js')}}"></script>
<script src="{{asset('js/datatables-select.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/adminlte.min.js')}}"></script>
<script src="{{asset('js/dashboard2.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script src="{{asset('js/config.js')}}"></script>
<script src="{{asset('js/toastr.min.js')}}"></script>
<script src="{{asset('js/axios.min.js')}}"></script>
<script src="{{asset('js/summernote.min.js')}}"></script>
@yield('script')
</body>
</html>

