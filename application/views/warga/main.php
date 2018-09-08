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

    <title>Warga | SIAR</title>

    <link rel="stylesheet" href="<?= base_url().'assets/fonts/fontawesome/css/fontawesome.min.css' ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <link rel="stylesheet" href="./assets/css/dashboard.css" />



  </head>
  <body>
    <div class="page">
      <div class="page-main">
        <div class="header py-4">
          <div class="container">
            <div class="d-flex">
              <!-- Taruh logo disini -->Logo Perusahaan
              <div class="d-flex order-lg-2 ml-auto">
                <div class="nav-item d-none d-md-flex">
                  <span class="btn btn-sm btn-outline-primary" target="_blank"><i class="fe fe-lock"></i> Change Password</span>
                </div>
                <div class="nav-item d-none d-md-flex">
                  <span class="btn btn-sm btn-outline-danger" target="_blank"><i class="fe fe-power"></i>  Logout</span>
                </div>
                <!-- <div class="dropdown">
                  <a class="nav-link pr-0 leading-none" data-toggle="dropdown">
                    <span class="avatar" style="background-image: url("<?= base_url().'images/yugi.jpg' ?>")"></span>
                    <span class="ml-2 d-none d-lg-block">
                      <span class="text-default">Selamat Datang,</span>
                      <small class="text-muted d-block mt-1">Yugi Setiawan</small>
                    </span>
                  </a>
                </div> -->
              </div>
              <a class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
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
                    <a href="#/dashboard" class="nav-link"><i class="fe fe-home"></i>Dashboard</a>
                  </li>
                  <li class="nav-item">
                    <a href="#/halaman1" class="nav-link"><i class="fe fe-file-text"></i>Pengajuan</a>
                  </li>
                  <li class="nav-item">
                    <a href="#/halaman2" class="nav-link"><i class="fe fe-users"></i>Profile Keluarga</a>
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
            <div class="col-auto ml-lg-auto">
              <div class="row align-items-center">
                <div class="col-auto">
                  <ul class="list-inline list-inline-dots mb-0">
                    <li class="list-inline-item"><a href="./docs/index.html">Documentation</a></li>
                    <li class="list-inline-item"><a href="./faq.html">FAQ</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-auto mt-3 mt-lg-0 text-center">
              Copyright © 2018 <a href=".">SIAR</a>.All rights reserved.
            </div>
          </div>
        </div>
      </footer>
    </div>
    <script src="<?= base_url().'assets/js/vendors/jquery-3.2.1.min.js' ?>" type="text/javascript"></script>
    <script src="<?= base_url().'assets/fonts/fontawesome/js/fontawesome.min.js' ?>" type="text/javascript"></script>


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
