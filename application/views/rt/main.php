<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dashboard | SIAR</title>
  </head>
  <body>
    <h1>Punyee RT bree</h1>
    <ul>
      <li>
        <a href="#/dashboard">Dashboard</a>
      </li>
      <li>
        <a href="#/halaman1">Halaman 1</a>
      </li>
      <li>
        <a href="#/halaman2">Halaman 2</a>
      </li>
    </ul>

    <div id="content">

    </div>

    <h3>Footer</h3>
    <script src="<?= base_url().'assets/jQuery/jquery.min.js' ?>" charset="utf-8"></script>


    <script type="text/javascript">
      $(document).ready(function(){

        var href;

        function load_content(link){
          // $.get(url,function);
          $.get(`<?= base_url().'rt/' ?>${link}`,function(content){
            $('#content').html(content);
          });
        }

        // Navigasi
        $(window).on('hashchange',function(){
          href = location.hash.substr(2);
          load_content(href);
        });

        //URL
        if (location.hash) {
          href = location.hash.substr(2);
          load_content(href);

        }else{
          location.hash ='#/dashboard';
        }
      });
    </script>
  </body>
</html>
