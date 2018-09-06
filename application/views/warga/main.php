<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Warga | SIAR</title>
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

    <!-- Custom Theme Style -->
    <link href="<?= base_url().'assets/gentelella/build/css/custom.min.css' ?>" rel="stylesheet">
  </head>
  <body class="nav-md">
    <!-- top navigation -->
            <div class="top_nav">
              <div class="nav_menu">
                <nav>
                  <ul class="nav navbar-nav navbar-left" style="margin-top:10px; padding-left:20px;">
                    <h2>Sistem Informasi Administrasi RW</h2>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                    <li class="">
                      <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <img src="images/img.jpg" alt="">John Doe
                        <span class=" fa fa-angle-down"></span>
                      </a>
                      <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <li><a href="javascript:;"> Profile</a></li>
                        <li>
                          <a href="javascript:;">
                            <span class="badge bg-red pull-right">50%</span>
                            <span>Settings</span>
                          </a>
                        </li>
                        <li><a href="javascript:;">Help</a></li>
                        <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                      </ul>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
            <!-- /top navigation -->

            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                    </div>

                    <div class="clearfix"></div>

                    <div class="">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                          <div class="x_title">
                            <h1>Mading Informasi</h1>

                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">
                            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                              <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                <li role="presentation" class=""><a href="#/dashboard" aria-expanded="true">Dashboard</a>
                                </li>
                                <li role="presentation" class=""><a href="#/halaman1"  aria-expanded="false">Halaman 1</a>
                                </li>
                                <li role="presentation" class=""><a href="#/halaman2" aria-expanded="false">Halaman 2</a>
                                </li>
                              </ul>
                            </div>
                            <div id="content">

                            </div>
                          </div>
                        </div>
                      </div>
                      </div>
                      <!-- footer content -->
       <footer>
         <div class="pull-right">
           Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
         </div>
         <div class="clearfix"></div>
       </footer>
       <!-- /footer content -->
                      </div>
                      </div>


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


    <!-- Function load -->
    <script type="text/javascript">

      $(document).ready(function()
      {
        var href;

        function load_content(link)
        {
          $.get(`<?= base_url().'warga/' ?>${link}`,function(content)
          {
            $('#content').html(content);
          });
        }

        //Load halaman with URL
        if(location.hash)
        {
          href = location.hash.substr(2);
          load_content(href);
        }else
        {
          location.hash ='#/dashboard';
          load_content(href);
        }

        // load halaman with Navigasi
        $(window).on('hashchange',function(){
          href = location.hash.substr(2);
          load_content(href);
        });

      });

    </script>

  </body>
</html>
