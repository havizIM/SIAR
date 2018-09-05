<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Rukun Warga | SIAR</title>
  <!-- Bootstrap -->
  <link href="<?= base_url().'assets/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css' ?>" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="<?= base_url().'assets/gentelella/vendors/font-awesome/css/font-awesome.min.css' ?>" rel="stylesheet">
  <!-- NProgress -->
  <link href="<?= base_url().'assets/gentelella/vendors/nprogress/nprogress.css'?>" rel="stylesheet">
  <!-- iCheck -->
  <link href="<?= base_url().'assets/gentelella/vendors/iCheck/skins/flat/green.css' ?>" rel="stylesheet">
  <!-- bootstrap-progressbar -->
  <link href="<?= base_url().'assets/gentelella/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css' ?>" rel="stylesheet">
  <!-- JQVMap -->
  <link href="<?= base_url().'assets/gentelella/vendors/jqvmap/dist/jqvmap.min.css' ?>" rel="stylesheet"/>
  <!-- bootstrap-daterangepicker -->
  <link href="<?= base_url().'assets/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.css' ?>" rel="stylesheet">
  <!-- jQuery custom content scroller -->
  <link href="<?= base_url().'assets/gentelella/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css' ?>" rel="stylesheet"/>
  <!-- Custom Theme Style -->
  <link href="<?= base_url().'assets/gentelella/build/css/custom.min.css' ?>" rel="stylesheet">
</head>
<body class="nav-md">
<div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="#/dashboard" class="site_title"><i class="fa fa-paw"></i> <span>SIAR</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="image/yugi.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Yugi Setiawan</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>MenuBar</h3>
                <ul class="nav side-menu">
                  <li><a href="#/dashboard"><i class="fa fa-home"></i> Dashboard </a></li>
                  <li><a href="#/halaman1"><i class="fa fa-edit"></i> Halaman 1 </a></li>
                  <li><a href="#/halaman2"><i class="fa fa-desktop"></i> Halaman 2 </a></li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
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
                    <i class="fa fa-user fa-4"></i>ADMIN
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
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
                <div id="content">

                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Universitas Bung Karno
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>




  <!-- Footer Ground -->
    <div>
      <!-- jQuery -->
          <script src="<?= base_url().'assets/gentelella/vendors/jquery/dist/jquery.min.js' ?>"></script>
      <!-- Bootstrap -->
          <script src="<?= base_url().'assets/gentelella/vendors/bootstrap/dist/js/bootstrap.min.js' ?>"></script>
      <!-- FastClick -->
          <script src="<?= base_url().'assets/gentelella/vendors/fastclick/lib/fastclick.js' ?>"></script>
      <!-- NProgress -->
          <script src="<?= base_url().'assets/gentelella/vendors/nprogress/nprogress.js' ?>"></script>
      <!-- Chart.js -->
          <script src="<?= base_url().'assets/gentelella/vendors/Chart.js/dist/Chart.min.js' ?>"></script>
      <!-- gauge.js -->
          <script src="<?= base_url().'assets/gentelella/vendors/gauge.js/dist/gauge.min.js' ?>"></script>
      <!-- bootstrap-progressbar -->
          <script src="<?= base_url().'assets/gentelella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js' ?>"></script>
      <!-- iCheck -->
          <script src="<?= base_url().'assets/gentelella/vendors/iCheck/icheck.min.js' ?>"></script>
      <!-- skycons -->
          <script src="<?= base_url().'assets/gentelella/vendors/skycons/skycons.js' ?>"></script>
      <!-- Flot -->
          <script src="<?= base_url().'assets/gentelella/vendors/Flot/jquery.flot.js' ?>"></script>
          <script src="<?= base_url().'assets/gentelella/vendors/Flot/jquery.flot.pie.js' ?>"></script>
          <script src="<?= base_url().'assets/gentelella/vendors/Flot/jquery.flot.time.js' ?>"></script>
          <script src="<?= base_url().'assets/gentelella/vendors/Flot/jquery.flot.stack.js' ?>"></script>
          <script src="<?= base_url().'assets/gentelella/vendors/Flot/jquery.flot.resize.js' ?>"></script>
      <!-- Flot plugins -->
          <script src="<?= base_url().'assets/gentelella/vendors/flot.orderbars/js/jquery.flot.orderBars.js' ?>"></script>
          <script src="<?= base_url().'assets/gentelella/vendors/flot-spline/js/jquery.flot.spline.min.js' ?>"></script>
          <script src="<?= base_url().'assets/gentelella/vendors/flot.curvedlines/curvedLines.js' ?>"></script>
      <!-- DateJS -->
          <script src="<?= base_url().'assets/gentelella/vendors/DateJS/build/date.js' ?>"></script>
      <!-- JQVMap -->
          <script src="<?= base_url().'assets/gentelella/vendors/jqvmap/dist/jquery.vmap.js' ?>"></script>
          <script src="<?= base_url().'assets/gentelella/vendors/jqvmap/dist/maps/jquery.vmap.world.js' ?>"></script>
          <script src="<?= base_url().'assets/gentelella/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js' ?>"></script>
      <!-- bootstrap-daterangepicker -->
          <script src="<?= base_url().'assets/gentelella/vendors/moment/min/moment.min.js' ?>"></script>
          <script src="<?= base_url().'assets/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js' ?>"></script>
      <!--  Custom Theme Script -->
          <script src="<?= base_url().'assets/gentelella/build/js/custom.min.js' ?>"></script>
      <!-- JQuery custom scroller -->
          <script src="<?= base_url().'assets/gentelella/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js' ?>"></script>
    </div>
    <!-- Function load -->
    <script type="text/javascript">

            $(document).ready(function()
            {
              var href;

              function load_content(link)
              {
                $.get(`<?= base_url().'rw/'?>${link}`,function(content)
                {
                  $('#content').html(content);
                });
              }

              // URL load
              if (location.hash)
              {
                href = location.hash.substr(2);
                load_content(href);
              }else
              {
                location.hash ='#/dashboard';
              }

              // Navigasi Load
              $(window).on('hashchange',function()
              {
                href = location.hash.substr(2);
                load_content(href);
              });


            });



          </script>


  </body>
</html>
