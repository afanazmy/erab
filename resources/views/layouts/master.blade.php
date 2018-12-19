<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>e-Rancangan Anggaran Biaya</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('meta')
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{!! asset('notika/') !!}img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{!! asset('notika/css/bootstrap.min.css') !!}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{!! asset('notika/css/font-awesome.min.css') !!}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{!! asset('notika/css/owl.carousel.css') !!}">
    <link rel="stylesheet" href="{!! asset('notika/css/owl.theme.css') !!}">
    <link rel="stylesheet" href="{!! asset('notika/css/owl.transitions.css') !!}">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="{!! asset('notika/css/meanmenu/meanmenu.min.css') !!}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{!! asset('notika/css/animate.css') !!}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{!! asset('notika/css/normalize.css') !!}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{!! asset('notika/css/scrollbar/jquery.mCustomScrollbar.min.css') !!}">
    <!-- jvectormap CSS
		============================================ -->
    <link rel="stylesheet" href="{!! asset('notika/css/jvectormap/jquery-jvectormap-2.0.3.css') !!}">
    <!-- notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="{!! asset('notika/css/notika-custom-icon.css') !!}">
    <!-- bootstrap select CSS
		============================================ -->
    <link rel="stylesheet" href="{!! asset('notika/css/bootstrap-select/bootstrap-select.css') !!}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{!! asset('notika/css/chosen/chosen.css') !!}">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="{!! asset('notika/css/wave/waves.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('notika/css/wave/button.css') !!}">
    <!-- Data Table JS
		============================================ -->
    <link rel="stylesheet" href="{!! asset('notika/css/jquery.dataTables.min.css') !!}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{!! asset('notika/css/main.css') !!}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{!! asset('notika/css/style.css') !!}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{!! asset('notika/css/responsive.css') !!}">

    <style media="screen">
        .navbar-links {
            font-size: 15px;
        }
    </style>

    @yield('css')
    <!-- modernizr JS
		============================================ -->
    <script src="{!! asset('notika/js/vendor/modernizr-2.8.3.min.js') !!}"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="#"><img src="{!! asset('treviso/images/ERAB.png') !!}" alt="e-Rancangan Anggaran Biaya" /></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav">
                            {{-- @guest
                                @else
                                    @if (Auth::user()->division_id == null)
                                        <li class="nav-item dropdown">
                                            <a href="{!! route('admin.index') !!}" class="nav-link dropdown-toggle">
                                                <span class="navbar-links">Pengurus</span>
                                            </a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a href="{!! route('admin.setting') !!}" class="nav-link dropdown-toggle">
                                                <span class="navbar-links">Setting</span>
                                            </a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a href="{!! route('admin.certif') !!}" class="nav-link dropdown-toggle" target="_blank">
                                                <span class="navbar-links">Sertifikat</span>
                                            </a>
                                        </li>
                                        @else
                                            <li class="nav-item dropdown">
                                                <a href="{!! route('user.index') !!}" class="nav-link dropdown-toggle">
                                                    <span class="navbar-links">Profile</span>
                                                </a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a href="{!! route('user.preview') !!}" class="nav-link dropdown-toggle" target="_blank">
                                                    <span class="navbar-links">Preview Sertifikat</span>
                                                </a>
                                            </li>
                                    @endif
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <span class="navbar-links">{{ __('Logout') }}</span>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            </li>
                            @endguest --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->

    <!-- Main Menu area End-->
    @yield('content')
    @include('sweetalert::alert')
    <!-- Start Footer area-->
    {{-- <div class="footer-copyright-area" style="position:fixed; bottom: 0; left: 0; width: 100%">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Code with <i class="fa fa-heart"></i>  by Muhammad 'Afan 'Azmi.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="footer-copyright-area" style="bottom: 0px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Code with <i class="fa fa-heart"></i> by Muhammad 'Afan 'Azmi.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer area-->
    <!-- jquery
		============================================ -->
    <script src="{!! asset('notika/js/vendor/jquery-1.12.4.min.js') !!}"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{!! asset('notika/js/bootstrap.min.js') !!}"></script>
    <!-- wow JS
		============================================ -->
    <script src="{!! asset('notika/js/wow.min.js') !!}"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{!! asset('notika/js/jquery-price-slider.js') !!}"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{!! asset('notika/js/owl.carousel.min.js') !!}"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{!! asset('notika/js/jquery.scrollUp.min.js') !!}"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{!! asset('notika/js/meanmenu/jquery.meanmenu.js') !!}"></script>
    <!-- counterup JS
		============================================ -->
    <script src="{!! asset('notika/js/counterup/jquery.counterup.min.js') !!}"></script>
    <script src="{!! asset('notika/js/counterup/waypoints.min.js') !!}"></script>
    <script src="{!! asset('notika/js/counterup/counterup-active.js') !!}"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{!! asset('notika/js/scrollbar/jquery.mCustomScrollbar.concat.min.js') !!}"></script>
    <!-- jvectormap JS
		============================================ -->
    {{-- <script src="{!! asset('notika/js/jvectormap/jquery-jvectormap-2.0.2.min.js') !!}"></script>
    <script src="{!! asset('notika/js/jvectormap/jquery-jvectormap-world-mill-en.js') !!}"></script>
    <script src="{!! asset('notika/js/jvectormap/jvectormap-active.js') !!}"></script> --}}
    <!-- sparkline JS
		============================================ -->
    <script src="{!! asset('notika/js/sparkline/jquery.sparkline.min.js') !!}"></script>
    <script src="{!! asset('notika/js/sparkline/sparkline-active.js') !!}"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="{!! asset('notika/js/flot/jquery.flot.js') !!}"></script>
    <script src="{!! asset('notika/js/flot/jquery.flot.resize.js') !!}"></script>
    <script src="{!! asset('notika/js/flot/curvedLines.js') !!}"></script>
    <script src="{!! asset('notika/js/flot/flot-active.js') !!}"></script>
    <!-- knob JS
		============================================ -->
    <script src="{!! asset('notika/js/knob/jquery.knob.js') !!}"></script>
    <script src="{!! asset('notika/js/knob/jquery.appear.js') !!}"></script>
    <script src="{!! asset('notika/js/knob/knob-active.js') !!}"></script>
    <!--  wave JS
		============================================ -->
    <script src="{!! asset('notika/js/wave/waves.min.js') !!}"></script>
    <script src="{!! asset('notika/js/wave/wave-active.js') !!}"></script>
    <!--  todo JS
		============================================ -->
    <script src="{!! asset('notika/js/todo/jquery.todo.js') !!}"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{!! asset('notika/js/plugins.js') !!}"></script>
    <!--  chosen JS
		============================================ -->
    <script src="{!! asset('notika/js/chosen/chosen.jquery.js') !!}"></script>
    <!-- bootstrap select JS
       ============================================ -->
    <script src="{!! asset('notika/js/bootstrap-select/bootstrap-select.js') !!}"></script>
    <!--  Chat JS
		============================================ -->
    <script src="{!! asset('notika/js/chat/moment.min.js') !!}"></script>
    <script src="{!! asset('notika/js/chat/jquery.chat.js') !!}"></script>
    <!-- main JS
		============================================ -->
    <script src="{!! asset('notika/js/main.js') !!}"></script>
    <!-- Data Table JS
		============================================ -->
    <script src="{!! asset('notika/js/data-table/jquery.dataTables.min.js') !!}"></script>
    <!-- tawk chat JS
		============================================ -->
    {{-- <script src="{!! asset('notika/js/tawk-chat.js') !!}"></script> --}}
    <script src="{!! asset('js/jquery.inputmask.bundle.js') !!}" charset="utf-8"></script>
    <script src="{!! asset('js/jquery.number.js') !!}" charset="utf-8"></script>
    <script type="text/javascript">
        $('.currency').inputmask("numeric", {
            radixPoint: ",",
            groupSeparator: ".",
            digits: 2,
            autoGroup: true,
            rightAlign: false,
            removeMaskOnSubmit: true,
            oncleared: function() {
                self.Value('');
            }
        });
    </script>
    @yield('script')
</body>

</html>