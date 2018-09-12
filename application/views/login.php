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

    <title>Login Warga| SIAR</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <link href="<?= base_url().'assets/css/dashboard.css' ?>" rel="stylesheet" />
    <link href="<?= base_url().'assets/plugins/charts-c3/plugin.css' ?>" rel="stylesheet" />
    <link href="<?= base_url().'assets/plugins/maps-google/plugin.css' ?>" rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url().'assets/plugins/toastr/toastr.min.css' ?>">


    <script src="<?= base_url().'assets/js/vendors/jquery-3.2.1.min.js' ?>"></script>
    <script src="<?= base_url().'assets/plugins/toastr/toastr.min.js' ?>"></script>

<style media="screen">
  body{
    background: url('<?= base_url().'image/background_warga.png' ?>');
    background-repeat: no-repeat;
    background-size: cover;
  }
  .card{
    border-radius: 15px;
    background-color: #d9dde8;
  }
  .card img{
    width: 100px;
    height: 100px;
  }
</style>

  </head>
  <body>
    <div class="page">
      <div class="page-single">
        <div class="container">
          <div class="row">
            <div class="col col-login mx-auto">
              <form class="card " id="form-login">
                <div class="card-body p-6">
                  <div class="card-title text-center"> <img src="<?= base_url().'image/logo.png' ?>" alt=""> </div>
                  <div class="form-group">
                    <label class="form-label">Nomor KK</label>
                    <input type="text" class="form-control" id="no_kk" name="no_kk" aria-describedby="emailHelp">
                  </div>
                  <div class="form-group">
                    <label class="form-label">
                      <span>Password</span>
                    </label>
                    <input type="password" class="form-control" id="password" name="password">
                  </div>
                  <div class="form-group">
                    <label class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" />
                      <span class="custom-control-label">Show password</span>
                    </label>
                  </div>
                  <div class="form-footer">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>


    <script type="text/javascript">
    // function validasi
    $(document).ready(function(){
      $('#form-login').on('submit',function(e){
        e.preventDefault(); //function untuk mematikan loading

        var submit = true;

        $(this).find('#no_kk, #password').each(function(){
          if ($(this).val() == '' ) {
            submit = false;
          }else {
            submit = true;
          }
        }); //function menciari data sudah terisi / belum

          if (submit == true ) {
            toastr.success('Berhasil nih yeee');
          }else{
            toastr.error('Gagal Shobb');
          }
      });
      toastr.options = {
      "closeButton": false,
      "debug": false,
      "newestOnTop": false,
      "progressBar": false,
      "positionClass": "toast-top-right",
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

// Function Show Password
    $('.custom-control-input').click(function(){
      if ($(this).is(':checked')) {
        $('#password').attr('type','text');
      }else{
        $('#password').attr('type','password');
      }
    });
    });

    </script>
  </body>
</html>
