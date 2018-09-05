<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Rukun Tetangga | SIAR</title>
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
    

    <div id="content">

    </div>

    <h3>Footer</h3>

    <script type="text/javascript">
      $(document).ready(function(){

        var href;

        function load_content(link)
          {
          // Struktur => $.get(url,function);
          $.get(`<?= base_url().'rt/' ?>${link}`,function(content){
            $('#content').html(content);
          });
        }

        // load halaman with URL
        if (location.hash)
        {
          href = location.hash.substr(2);
          load_content(href);
        }else
        {
          location.hash ='#/dashboard';
        }

        // load halaman with Navigasi
        $(window).on('hashchange',function()
        {
          href = location.hash.substr(2);
          load_content(href);
        });
      });
    </script>

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


  </body>
</html>
