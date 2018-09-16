<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en" />
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">

    <title>RT | SIAR</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <link rel="stylesheet" href="<?= base_url().'assets/fonts/fontawesome/css/fontawesome.min.css' ?>">
    <link rel="stylesheet" href="<?= base_url().'assets/css/dashboard.css' ?>">
    <link rel="stylesheet" href="<?= base_url().'assets/plugins/toastr/toastr.min.css' ?>">
    <link rel="stylesheet" href="<?= base_url().'assets/plugins/jquery-ui/jquery-ui.min.css' ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url().'image/logo.png' ?>">

    <style media="screen">
      .page .header{
        background: #ecba7aeb;
      }
      #headerMenuCollapse{
        background: #ecba7a;
      }
      .container ul li{
        color: #fff;
      }
      .footer a:not(.btn) {
        color: #ffffff;
      }
      .footer {
        background: #ecba7a;
        color: #ffffff;
      }
      .d-flex .header-brand img{
        width: 75px;
        height: 75px;
      }
      .d-flex .dropdown .nav-link {
        margin-top: 30px;
      }
      .d-flex .dropdown .text-muted,.text-default{
        color: #ffffff !important;
    }
    </style>
  </head>
  <body>
    <div class="page">
      <div class="page-main">
        <div class="header py-4">
          <div class="container">
            <div class="d-flex">
              <a class="header-brand" href="#/dashboard">
                <img src="<?= base_url().'image/logo.png' ?>" class="header-brand-img" alt="tabler logo">
              </a>
              <div class="d-flex order-lg-1 ml-auto">
                <div class="dropdown">
                  <a class="nav-link pr-0 leading-none" data-toggle="dropdown">
                    <span class="avatar" style="background-image: url(<?= base_url().'image/yugi.jpg' ?>)"></span>
                    <span class="ml-2 d-none d-lg-block">
                      <span class="text-default"><strong>Selamat Datang ,</strong></span>
                      <small class="text-muted d-block mt-1">Yugi Setiawan</small>
                    </span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                    <a class="dropdown-item" id="btn_pass">
                      <i class="dropdown-icon fe fe-lock" ></i> Change Password
                    </a>

                    <a class="dropdown-item" href="<?= base_url().'auth/logout_admin' ?>">
                      <i class="dropdown-icon fe fe-log-out"></i> Logout
                    </a>
                  </div>
                </div>
              </div>
              <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
                <span class="header-toggler-icon"></span>
              </a>
            </div>
          </div>
        </div>
        <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg order-lg-first">
                <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                  <li class="nav-item">
                    <a href="#/dashboard" class="nav-link"><i class="fe fe-home"></i><strong>Dashboard</strong></a>
                  </li>
                  <li class="nav-item">
                    <a href="#/halaman1" class="nav-link"><i class="fe fe-file-text"></i><strong>RT 1</strong></a>
                  </li>
                  <li class="nav-item">
                    <a href="#/halaman2" class="nav-link"><i class="fe fe-users"></i><strong>RT 2</strong></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="my-3 my-md-5">
        </div>
      </div>
      <div id="content">

      </div>
      <footer class="footer">
        <div class="container">
          <div class="row align-items-center flex-row-reverse">

            <div class="col-12 col-lg-auto mt-3 mt-lg-0 text-center">
              <strong>Copyright © 2018 SIAR.All rights reserved.</strong>
            </div>
          </div>
        </div>
      </footer>
      <!-- Modal -->
      <div id="m_pass" title="Ganti Password">
        <form id="form_pass">
          <div class="form-group">
            <label class="form-label">Password Lama</label>
            <input type="password" class="form-control" name="old_pass" id="old_pass" >
          </div>
          <div class="form-group">
            <label class="form-label">Password Baru</label>
            <input type="password" class="form-control" name="new_pass" id="new_pass">
          </div>
          <div class="form-group">
            <label class="form-label">Ulangi Password</label>
            <input type="password" class="form-control" name="rtp_pass" id="rtp_pass">
          </div>
          <div class="form-group">
            <center><button type="submit" class="btn btn-primary">Simpan</button></center>
          </div>
        </form>
      </div>
    </div>

    <script src="<?= base_url().'assets/js/vendors/jquery-3.2.1.min.js' ?>" type="text/javascript"></script>
    <script src="<?= base_url().'assets/js/vendors/bootstrap.bundle.min.js' ?>" type="text/javascript"></script>
    <script src="<?= base_url().'assets/js/core.js' ?>" type="text/javascript"></script>
    <script src="<?= base_url().'assets/fonts/fontawesome/js/fontawesome.min.js' ?>" type="text/javascript"></script>
    <script src="<?= base_url().'assets/plugins/toastr/toastr.min.js' ?>"></script>
    <script src="<?= base_url().'assets/plugins/jquery-ui/jquery-ui.min.js' ?>" type="text/javascript"></script>

    <!-- Function Load-->
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
// Modal
        $('#m_pass').dialog({
          autoOpen: false,
          modal: true,
          draggable: false
        });
        $('#btn_pass').click(function(){
          $('#m_pass').dialog("open");
        });
//Function validasi ganti password
      $('#form_pass').on('submit',function(e){
        e.preventDefault();

        var submit = true;

        $(this).find('#old_pass, #new_pass, #rtp_pass').each(function(){
          if ($(this).val() == ''){
            submit = false;
          }else {
            submit = true;
          }
        });
        if (submit == true) {
         if ($('#new_pass').val() != $('#rtp_pass').val() ) {
           toastr.warning('Password Tidak Sama')
         }else {
           toastr.success('Password Berhasil di Perbaharui')
           $('#m_pass').dialog("close");
           $('#form_pass')[0].reset();
         }
        }else {
          toastr.error('Masukkan Password')
        }
      });
      toastr.options = {
      "closeButton": false,
      "debug": false,
      "newestOnTop": false,
      "progressBar": false,
      "positionClass": "toast-top-center",
      "preventDuplicates": true,
      "onclick": null,
      "showDuration": "300",
      "hideDuration": "1000",
      "timeOut": "5000",
      "extendedTimeOut": "1000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
      }
      });
    </script>
  </body>
</html>
