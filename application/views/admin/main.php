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

    <title>Admin | SIAR</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <link rel="stylesheet" href="<?= base_url().'assets/fonts/fontawesome/css/fontawesome.min.css' ?>">
    <link rel="stylesheet" href="<?= base_url().'assets/css/dashboard.css' ?>">
    <link rel="stylesheet" href="<?= base_url().'assets/plugins/toastr/toastr.min.css' ?>">
    <link rel="stylesheet" href="<?= base_url().'assets/plugins/jquery-ui/jquery-ui.min.css' ?>">
    <link rel="stylesheet" href="<?= base_url().'assets/css/animate/animate.css' ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url().'image/logo.png' ?>">

    <style media="screen">

      .page .header{
        background: #ffffff;
      }
      #headerMenuCollapse{
        background: #034ea2;
      }
      .container ul li{
        color: #fff;
      }
      .footer a:not(.btn) {
        color: #ffffff;
      }
      .footer {
        background: #034ea2;
        color: #ffffff;
        padding:5px;
      }

      .d-flex .dropdown .nav-link {
        margin-top: 30px;
      }
      .d-flex .dropdown .text-muted,.text-default{
        color: black !important;
        font-size: 17px;
      }
      .avatar{
        width: 50px;
        height: 50px;
      }
      .header-brand img{
        width: 400px;
        height: 85px;
        position:relative;
      }
      #data{
        animation-delay: .1s;
        animation-duration: 1s;
      }
      #data2{
        animation-delay: .3s;
        animation-duration: 1s;
      }
      #data3{
        animation-delay: .5s;
        animation-duration: 1s;
      }
      #content{
        margin-top: 165px;
      }
    </style>
  </head>
  <body>
    <div class="page">
      <div class="page-main fixed-top">
        <div class="header py-4">
          <div class="container">
            <div class="d-flex">
              <a class="header-brand" href="#/dashboard">
                <img src="<?= base_url().'image/logo-main-1.png' ?>" class="header-brand-img" alt="tabler logo">
              </a>
              <div class="d-flex order-lg-1 ml-auto">
                <div class="dropdown">
                  <a class="nav-link pr-0 leading-none" data-toggle="dropdown">
                    <span class="avatar" style="background-image: url(<?= base_url().'image/logo-small.png' ?>)"></span>
                    <span class="ml-2 d-none d-lg-block">
                      <span class="text-default"><strong>Selamat Datang ,</strong></span>
                      <small class="text-muted d-block mt-1">Special Dummy</small>
                    </span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                    <a class="dropdown-item" id="btn_pass">
                      <i class="dropdown-icon fe fe-lock"></i> Change Password
                    </a>

                    <a class="dropdown-item" href="<?= base_url().'auth/logout_admin' ?>">
                      <i class="dropdown-icon fe fe-power"></i> Logout
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
                    <a href="#/pengajuan" class="nav-link"><i class="fe fe-file-text"></i><strong>Pengajuan</strong></a>
                  </li>
                  <li class="nav-item">
                    <a href="#/warga" class="nav-link"><i class="fe fe-users"></i><strong>Warga</strong></a>
                  </li>
                  <li class="nav-item">
                  <a href="#/laporan" class="nav-link"> <i class="fe fe-clipboard"></i><strong>Laporan</strong> </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="my-3 my-md-5">
      </div>
      <div id="content">

      </div>
      <footer class="footer fixed-bottom">
        <div class="container">
          <div class="row align-items-center flex-row-reverse">
            <div class="col-12 col-lg-auto mt-3 mt-lg-0 text-center">
              <strong>Copyright © 2018 SIAR.All rights reserved.</strong>
            </div>
          </div>
        </div>
      </footer>
    </div>

    <!-- Modal Dialog -->
    <div class="modal animated bounceInDown delay-2s" id="modal_pass">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title"><center>Ganti Password</center></h1>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="form_pass">
              <div class="form-group">
                <label class="form-label"  >Password lama</label>
                <input type="password" class="form-control" id="old_pass" name="old_pass" />
              </div>
              <div class="form-group">
                <label class="form-label " >Password Baru</label>
                <input type="password" class="form-control" id="new_pass" name="new_pass" />
              </div>
              <div class="form-group">
                <label class="form-label">Ulangi Password</label>
                <input type="password" class="form-control" id="rtp_pass" name="rtp_pass" />
              </div>
              <div class="form-grup">
                <center><button type="submit" class="btn btn-primary">Simpan</button></center>
              </div>
            </form>
          </div>
        </div>
      </div>
      </div>
    <!-- Modal -->

    <script src="<?= base_url().'assets/js/vendors/jquery-3.2.1.min.js' ?>" type="text/javascript"></script>
    <script src="<?= base_url().'assets/js/vendors/bootstrap.bundle.min.js' ?>" type="text/javascript"></script>
    <script src="<?= base_url().'assets/js/core.js' ?>" type="text/javascript"></script>
    <script src="<?= base_url().'assets/fonts/fontawesome/js/fontawesome.min.js' ?>" type="text/javascript"></script>
    <script src="<?= base_url().'assets/plugins/toastr/toastr.min.js' ?>"></script>
    <script src="<?= base_url().'assets/plugins/jquery-ui/jquery-ui.min.js' ?>" type="text/javascript"></script>

    <!-- Function load -->
    <script type="text/javascript">

            $(document).ready(function()
            {
              var href;

              function load_content(link)
              {
                $.get(`<?= base_url().'admin/'?>${link}`,function(content)
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

// Function modal
              $('#btn_pass').on('click',function(){
                $('#modal_pass').modal('show');
              });
// Function Validasi ganti password
              $('#form_pass').on('submit', function(e){
                e.preventDefault();

                var submit = true;

                $(this).find('#old_pass, #new_pass, #rtp_pass').each(function(){
                  if ($(this).val() == '') {
                    submit = false;
                  }else {
                    submit = true;
                  }
                });
                if (submit == true){
                  if ($('#new_pass').val() != $('#rtp_pass').val() ) {
                    toastr.warning('Password Tidak Sama')
                  }else {
                    toastr.success('Password Berhasil di Perbaharui')
                    $('#m_pass').dialog('close');
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
