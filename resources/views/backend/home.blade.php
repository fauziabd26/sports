<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sports Admin</title>

    <!-- Bootstrap -->
    <link href="{{ asset("/assets/backend/vendors/bootstrap/dist/css/bootstrap.min.css") }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset("/assets/backend/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css") }}" rel="stylesheet">
    <link href="{{ asset("/assets/backend/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css") }}" rel="stylesheet">
    <link href="{{ asset("/assets/backend/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css") }}" rel="stylesheet">
    @yield('css')

    <!-- Custom Theme Style -->
    <link href="{{ asset("/assets/backend/build/css/custom.min.css") }}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><span><img style="width: 90%;" src="{{ asset("/assets/front/img/logo-gunungmas.jpg") }}" alt=""></span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <i class="fa fa-user-circle-o fa-4x" style="margin-left: 15px;margin-top: 25px;"></i>
              </div>
              <div class="profile_info" style="margin-bottom: 25px;">
                <span>Hello,</span>
                <h2>{{ Auth::user()->fullname }}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            @include('backend.sidebar')

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <!--<a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>-->
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav class="" role="navigation">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-user-circle-o fa-3x"></i> {{ Auth::user()->fullname }}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"><i class="fa fa-user pull-left"></i> Profile</a></li>
                    <li><a href="{{ route('user.edit_pass') }}"><i class="fa fa-key pull-left"></i> Ubah Password</a></li>
                    <li><a href="{{ route('user.logout') }}"><i class="fa fa-sign-out pull-left"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          

  <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-1">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <div class="count"><h3>{{$user}}</h3></div>
                            <p>User</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <section class="col-lg-7 connectedSortable">
                </section>
            </div>
        </div>
    </section>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Copyright by <a href="https://deimago.net">DeImago Solution</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    <!-- jQuery -->
    <script src="{{ asset("/assets/backend/vendors/jquery/dist/jquery.min.js") }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset("/assets/backend/vendors/bootstrap/dist/js/bootstrap.min.js") }}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{ asset("/assets/backend/build/js/custom.min.js") }}"></script>
    <script src="{{ asset("/assets/backend/build/js/routes.js") }}"></script>
    <!-- Parsley -->
<script src="{{ asset("/assets/vendors/parsleyjs/dist/parsley.min.js")}}"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{ asset("/assets/vendors/moment/moment.min.js")}}"></script>
<script src="{{ asset("/assets/vendors/datepicker/daterangepicker.js")}}"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#formpass').parsley();
  });
</script>
  </body>
</html>