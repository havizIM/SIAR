<div class="my-3 my-md-5"></div>
<div class="container">
  <div class="card animated zoomInDown" id="animate" style="border:2px solid #e41e7f; box-shadow: 0 3px 14px rgba(0, 0, 0, 0.66);">
    <div class="card-body">
      <div class="card-title text-center">
        <h1 style="font-size:50px; font-weight: 700;">KARTU <span style="color:#e41e7f;">KELUARGA</span></h1>
        <h2 id="no_kk"></h2><hr>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="table-responsive">
            <table class="table card-table table-vcenter" >
              <tbody>
                <tr>
                  <td> <i class="fa fa-user text-pink"></i> Nama Kepala Keluarga </td>
                  <td>:</td>
                  <td id="kepala_keluarga"></td>
                </tr>
                <tr>
                  <td> <i class="fa fa-address-card text-pink"></i> Alamat </td>
                  <td>:</td>
                  <td id="alamat"></td>
                </tr>
                <tr>
                  <td> <i class="fa fa-tags text-pink"></i> RT/RW </td>
                  <td>:</td>
                  <td id="rtrw"></td>
                </tr>
                <tr>
                  <td> <i class="fa fa-tags text-pink"></i> Desa/Kelurahan</td>
                  <td>:</td>
                  <td id="kelurahan"></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="col-md-6">
          <div class="table-responsive">
            <table class="table card-table table-vcenter" >
              <tbody>

                <tr>
                  <td> <i class="fa fa-tags text-pink"></i> Kecamatan</td>
                  <td>:</td>
                  <td id="kecamatan"></td>
                </tr>
                <tr>
                  <td> <i class="fa fa-tags text-pink"></i> Kabupaten/Kota</td>
                  <td>:</td>
                  <td id="kota"></td>
                </tr>
                <tr>
                  <td> <i class="fa fa-envelope text-pink"></i> Kode Pos </td>
                  <td>:</td>
                  <td id="kode_pos"></td>
                </tr>
                <tr>
                  <td> <i class="fa fa-tags text-pink"></i> Provinsi</td>
                  <td>:</td>
                  <td id="provinsi"></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
    </div>
    <!-- <div class="card-footer">
      <h1>Footer</h1>
    </div> -->
  </div>
</div>


<!-- Coba -->
<div class="container">
  <div class="flip">
    <div class="card front">
      <div class="card-header">
        <h3 class="card-title">Card 1</h3>
      </div>
      <div class="card-body">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt, iste, itaque minima neque pariatur perferendis sed suscipit velit vitae voluptatem. A consequuntur, deserunt eaque error nulla temporibus!
      </div>
    </div>
    <div class="card back">
      <div class="card-header">
        <h3 class="card-title">Card 2</h3>
      </div>
      <div class="card-body">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt, iste, itaque minima neque pariatur perferendis sed suscipit velit vitae voluptatem. A consequuntur, deserunt eaque error nulla temporibus!
      </div>
    </div>
  </div>
</div>
<!-- Profile Keluarga -->
  <div class="my-3 my-md-5"></div>

  <div class="container">
      <div class="row" id="anggota" >

      </div>
  </div>

  <div class="my-3 my-md-5"></div>

  <script type="text/javascript">




    function loadProfile()
    {
      $.ajax({
        url: '<?= base_url().'api/profile_keluarga' ?>',
        type: 'GET',
        dataType: 'JSON',
        success: function(data){
          var anggota = '';

          $.each(data.keluarga, function(k, v){
            $('#no_kk').text(v.no_kk);
            $('#kepala_keluarga').text(v.nama);
            $('#alamat').text(v.alamat);
            $('#rtrw').text(v.rtrw);
            $('#kelurahan').text(v.kelurahan);
            $('#kecamatan').text(v.kecamatan);
            $('#kota').text(v.kotamadya);
            $('#kode_pos').text(v.kode_pos);
            $('#provinsi').text(v.provinsi);
          });

          $.each(data.anggota, function(k,v){
            anggota += `<div class="col-lg-4">`;
              anggota += `<div class="card card-profile animated zoomIn delay-2s" style="border:2px solid #e41e7f">`;
                anggota += `<div class="card-header front" style="background-image: url(<?= base_url().'image/background-card.jpg' ?>);"></div>`;
                  anggota += `<div class="card-body text-center">`;
                    if(v.status_keluarga == 'Kepala Keluarga'){
                      anggota += `<img class="card-profile-img" src="<?= base_url().'image/logo-small-father.png' ?>">`;
                    } else if(v.status_keluarga == 'Istri'){
                      anggota += `<img class="card-profile-img" src="<?= base_url().'image/logo-small-mother.png' ?>">`;
                    } else {
                      if(v.jenis_kelamin == 'Laki-laki') {
                        anggota += `<img class="card-profile-img" src="<?= base_url().'image/logo-small-l.png' ?>">`;
                      } else {
                        anggota += `<img class="card-profile-img" src="<?= base_url().'image/logo-small-f.png' ?>">`;
                      }
                    }
                    anggota += `<h3 class="mb-3">${v.nama}</h3>`;
                    anggota += `<div class="table-responsive">`;
                    anggota += `<table class="table card-table table-vcenter" style="font-size: 13px;">`;
                      anggota += `<tbody class="text-left">`;
                        anggota += `<tr><td> <i class="fa fa-address-card"></i> NIK</td><td>:</td><td>${v.NIK}</td></tr>`;
                        anggota += `<tr><td> <i class="fa fa-mars-stroke"></i> Jenis Kelamin</td><td>:</td><td>${v.jenis_kelamin}</td></tr>`;
                        anggota += `<tr><td> <i class="fa fa-calendar"></i> TTL</td><td>:</td><td>${v.tempat_lahir}, ${v.tgl_lahir}</td></tr>`;
                        anggota += `<tr><td> <i class="fa fa-thumb-tack"></i> Agama</td><td>:</td><td>${v.agama}</td></tr>`;
                        anggota += `<tr><td><i class="fa fa-graduation-cap"></i> Pendidikan</td><td>:</td><td>${v.pendidikan}</td></tr>`;
                        anggota += `<tr><td><i class="fa fa-briefcase"></i> Pekerjaan</td><td>:</td><td>${v.pekerjaan}</td></tr>`;
                      anggota += `</tbody>`;
                    anggota += `</table>`;
                  anggota += `</div>`;
                anggota += `</div>`;
              anggota += `</div>`;
            anggota += `</div>`;

            anggota += `<div class="front">`;
              anggota += `<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>`;
            anggota += `</div>`;
          });

          $('#anggota').html(anggota);
        },
        error: function(){
          alert('Tidak dapat mengakses Halaman');
        }
      })
    }

    loadProfile();

    // Flip
    $(function(){
      $(".flip").flip({
      trigger: 'hover',

    });
    });

  </script>
