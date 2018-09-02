<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Rukun Tetangga | SIAR</title>
  </head>
  <body>
    <h1>Rukun Tetangga</h1>
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
  </body>
</html>
