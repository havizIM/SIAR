<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Rukun Warga | SIAR</title>
  </head>
  <body>
    <h1>Rukun Warga</h1>

      <ul>
        <li> <a href="#/dashboard"> Dashboard </a></li>
        <li> <a href="#/halaman1"> Halaman 1 </a></li>
        <li> <a href="#/halaman2"> Halaman 2 </a></li>
      </ul>

      <div id="content">

      </div>

      <!-- Footer Ground -->
      <h3>Footer</h3>

      <!-- jQuery -->
      <script src="<?= base_url().'assets/jQuery/jquery.min.js' ?>" charset="utf-8"></script>

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
