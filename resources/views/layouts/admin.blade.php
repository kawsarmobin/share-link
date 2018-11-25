<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- META SECTION -->
        <title>Stored Your URLs</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->

        <!-- CSS INCLUDE -->
        <link rel="stylesheet" type="text/css" id="theme" href="{!! asset('admin/css/theme-default.css') !!}"/>
        <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
        <!-- EOF CSS INCLUDE -->
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">

            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="{!! route('home') !!}">Stored URL</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="{!! asset('admin/assets/images/users/no-image.jpg') !!}" alt="John Doe"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="{!! asset('admin/assets/images/users/no-image.jpg') !!}" alt="John Doe"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name">{{ Auth::user()->name }}</div>
                                @if ($profiles)
                                    @foreach ($profiles as $profile)
                                        <div class="profile-data-title">{{ $profile->status }}</div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="{!! route('home') !!}"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
                    </li>
                    <li>
                        <a href="{!! route('profiles.index') !!}" class="profile-control-left"><span class="fa fa-user"></span> <span class="xn-text">Profile</span></a>
                    </li>
                    <li>
                        <a href="{!! route('category.index') !!}"><span class="fa fa-save"></span> <span class="xn-text">Category</span></a>
                    </li>
                    <li>
                        <a href="{!! route('storedurl.index') !!}"><span class="fa fa-th-list"></span> <span class="xn-text">Your Links</span></a>
                    </li>

                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->

            <!-- PAGE CONTENT -->
            <div class="page-content">

                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->

                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>
                    </li>
                    <!-- END SIGN OUT -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->



                <!-- PAGE CONTENT WRAPPER -->
                @yield('content')
                <!-- END PAGE CONTENT WRAPPER -->



            </div>
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="{!! asset('admin/audio/alert.mp3') !!}" preload="auto"></audio>
        <audio id="audio-fail" src="{!! asset('admin/audio/fail.mp3') !!}" preload="auto"></audio>
        <!-- END PRELOADS -->

    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="{!! asset('admin/js/plugins/jquery/jquery.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('admin/js/plugins/jquery/jquery-ui.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('admin/js/plugins/bootstrap/bootstrap.min.js') !!}"></script>
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->
        <script type='text/javascript' src='{!! asset('admin/js/plugins/icheck/icheck.min.js') !!}'></script>
        <script type="text/javascript" src="{!! asset('admin/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('admin/js/plugins/scrolltotop/scrolltopcontrol.js') !!}"></script>

        <script type="text/javascript" src="{!! asset('admin/js/plugins/datatables/jquery.dataTables.min.js') !!}"></script>

        <script type="text/javascript" src="{!! asset('admin/js/plugins/morris/raphael-min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('admin/js/plugins/morris/morris.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('admin/js/plugins/rickshaw/d3.v3.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('admin/js/plugins/rickshaw/rickshaw.min.js') !!}"></script>
        <script type='text/javascript' src='{!! asset('admin/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') !!}'></script>
        <script type='text/javascript' src='{!! asset('admin/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') !!}'></script>
        <script type='text/javascript' src='{!! asset('admin/js/plugins/bootstrap/bootstrap-datepicker.js') !!}'></script>
        <script type="text/javascript" src="{!! asset('admin/js/plugins/owl/owl.carousel.min.js') !!}"></script>

        <script type="text/javascript" src="{!! asset('admin/js/plugins/moment.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('admin/js/plugins/daterangepicker/daterangepicker.js') !!}"></script>
        <!-- END THIS PAGE PLUGINS-->

        <!-- START TEMPLATE -->
        {{-- <script type="text/javascript" src="{!! asset('admin/js/settings.js') !!}"></script> --}}
        <script type="text/javascript" src="{!! asset('admin/js/plugins.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('admin/js/actions.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('admin/js/demo_dashboard.js') !!}"></script>
        <!-- END TEMPLATE -->

        <script src="{{ asset('js/toastr.min.js') }}"></script>
        <script>

          @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}")
          @endif

          @if (Session::has('info'))
            toastr.info("{{ Session::get('info') }}")
          @endif

        </script>

    <!-- END SCRIPTS -->
    </body>
</html>
