<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login | SIAR</title>
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
  <body class="login">
      <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>

        <div class="login_wrapper">
          <div class="animate form login_form">
            <section class="login_content">
              <form>
                <h1>Login Administrator</h1>
                <div>
                  <input type="text" class="form-control" placeholder="Username" required="" />
                </div><br>
                <div>
                  <input type="password" class="form-control" placeholder="Password" required="" />
                </div>
                <div>
                   <button type="submit" class="btn btn-info btn-lg" id="login">Login</button>
                </div>

                <div class="clearfix"></div>

                <div class="separator">
                  <div class="clearfix"></div><div>
                    <h4>Sistem Informasi Administrasi RW</h4>
                    <p>©2018 All Rights Reserved</p>
                  </div>
                </div>
              </form>
            </section>
          </div>
        </div>
      </div>
    </body>
</html>
