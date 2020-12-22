<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') - SIPP</title>

    <!-- Bootstrap -->
    <link href="{{ asset('gentelella-master/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('gentelella-master/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('gentelella-master/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- Datatables -->
    <link href="{{ asset('gentelella-master/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('gentelella-master/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('gentelella-master/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('gentelella-master/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('gentelella-master/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('gentelella-master/build/css/custom.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mystyle.css') }}" rel="stylesheet">

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span > S I P P</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{ asset('gentelella-master/production/images/img.jpg') }}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="/"><i class="fa fa-home"></i> Home </a></li>

                  <li><a href="{{ route('penduduk.index') }}"><i class="fa fa-group"></i> Penduduk</a></li>
                  
                  <li><a href="{{ route('kartuKeluarga.index') }}"><i class="fa fa-table"></i> Kartu Keluarga</a></li>

                  <li><a><i class="fa fa-file"></i> Laporan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('pendudukUsiaProduktif') }}">Penduduk Usia Produktif</a></li>
                      <li><a href="{{ route('pendudukNagari') }}">Penduduk Berdasar Nagari</a></li>
                      <li><a href="{{ route('pendudukLevelPendidikan') }}">Penduduk dengan Level Pendidikan SMP Kebawah</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('gentelella-master/production/images/img.jpg') }}" alt="">John Doe
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->

        <div class="right_col" role="main">
            <div class="">
              <div class="page-title">
                <div class="title_left">
                <h3>Sistem Informasi Pengelolaan Penduduk</h3>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        @yield('content')
        
        <!-- /page content -->
        </div>

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - 1711521012 - Nadilla Syihaq
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('gentelella-master/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('gentelella-master/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('gentelella-master/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('gentelella-master/vendors/nprogress/nprogress.js') }}"></script>
    <!-- Datatables -->
    <script src="{{ asset('gentelella-master/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script> <script src="{{ asset('gentelella-master/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('gentelella-master/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script> <script src="{{ asset('gentelella-master/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('gentelella-master/vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script> <script src="{{ asset('gentelella-master/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('gentelella-master/vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script> <script src="{{ asset('gentelella-master/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('gentelella-master/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script> <script src="{{ asset('gentelella-master/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('gentelella-master/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script> <script src="{{ asset('gentelella-master/vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}"></script>
    <script src="{{ asset('gentelella-master/vendors/jszip/dist/jszip.min.js') }}"></script> 
    <script src="{{ asset('gentelella-master/vendors/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('gentelella-master/vendors/pdfmake/build/vfs_fonts.js') }}"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="{{ asset('gentelella-master/build/js/custom.min.js') }}"></script>
    <!-- Include sweetalert -->
    @include('sweetalert::alert')
    <script src="{{ asset('js/myscript.js') }}"></script>
  </body>
</html>
