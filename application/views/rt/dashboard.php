<div class="my-3 my-md-5"></div>
<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <div class="card animated zoomIn" id="data1">
        <div class="card-body">
          <div class="row">
            <div class="col-md-2">
              <i class="fa fa-copy fa-5x text-primary" style="font-size:100px;"></i>
            </div>
            <div class="col-md-10 text-right">
              <div class="h3" style="margin-bottom:0px;">Jumlah Pengajuan</div>
              <div class="h1 text-pink" style="font-size:75px; margin-bottom:0px;" id="jml_pengajuan">0</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card animated zoomIn" id="data2">
        <div class="card-body">
          <div class="row">
            <div class="col-md-2">
              <i class="fa fa-users fa-5x text-primary" style="font-size:100px;"></i>
            </div>
            <div class="col-md-10 text-right">
              <div class="h3" style="margin-bottom:0px;">Jumlah Keluarga</div>
              <div class="h1 text-pink" style="font-size:75px; margin-bottom:0px;" id="jml_keluarga">0</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header bg-primary">
          <h1 class="card-title" style="font-size:25px; color:#ffffff;">Daftar Pengajuan</h1>
          <div class="col-lg-4 ml-auto">
            <form class="input-icon my-3 my-lg-0">
              <input type="search" class="form-control header-search" placeholder="Masukkan No KK atau No NIK" tabindex="1">
              <div class="input-icon-addon">
                <i class="fe fe-search"></i>
              </div>
            </form>
          </div>
        </div>
        <div class="card-body ">
          <div class="table-responsive">
            <table class="table card-table table-vcenter text-wrap" id="t_pengajuan">
              <thead>
                <tr>
                  <th class="w-1">#</th>
                  <th>No.Kartu Keluarga</th>
                  <th>NIK</th>
                  <th>Nama</th>
                  <th class="text-wrap">Keperluan</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody></tbody>
            </table>
          </div>
        </div>
        <!-- <div class="card-footer">

      </div> -->
      </div>
    </div>
  </div>
</div>


<div class="modal animated bounceInDown delay-2s" id="modal_detail">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title">Detail</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h2>Pengajuan</h2>
        <table class="table" id="t_detail">
          <tr>
            <th>No Pengajuan</th>
            <td id="t_nopeng"></td>
          </tr>
          <tr>
            <th>No KK</th>
            <td id="t_nokk"></td>
          </tr>
          <tr>
            <th>Tanggal Pengajuan</th>
            <td id="t_tgl"></td>
          </tr>
          <tr>
            <th>NIK</th>
            <td id="t_nik"></td>
          </tr>
          <tr>
            <th>Nama pengajuan</th>
            <td id="t_nama"></td>
          </tr>
          <tr>
            <th>Jenis Kelamin</th>
            <td id="t_jkel"></td>
          </tr>
          <tr>
            <th>Tanggal Lahir</th>
            <td id="t_tglLahir"></td>
          </tr>
          <tr>
            <th>Tempat Lahir</th>
            <td id="t_tmpLahir"></td>
          </tr>
          <tr>
            <th>Pekerjaan</th>
            <td id="t_kerja"></td>
          </tr>
          <tr>
            <th>Kewarganegaraan</th>
            <td id="t_wn"></td>
          </tr>
          <tr>
            <th>Pendidikan</th>
            <td id="t_pend"></td>
          </tr>
          <tr>
            <th>Agama</th>
            <td id="t_agama"></td>
          </tr>
          <tr>
            <th>Alamat</th>
            <td id="t_alamat"></td>
          </tr>
          <tr>
            <th>Keperluan</th>
            <td id="t_kper"></td>
          </tr>
          <tr>
            <th>Status Pengajuan</th>
            <td id="t_stts"></td>
          </tr>
        </table>
        <h3>Dokumen Pelengkap</h3>
        <div class="" id="t_pelengkap"></div>
      </div>
      <div class="modal-footer" id="content_btn"></div>
    </div>
  </div>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<script type="text/javascript">
  function load_data(cari)
  {
    $.ajax({
      url: '<?= base_url().'api/select_pengajuan' ?>',
      type: 'POST',
      dataType: 'JSON',
      success: function(data){
        var html = '';
        var no = 1;

        if(data.pengajuan.length != 0){
          $.each(data.pengajuan, function(k,v){
            html += `<tr>`;
            html += `<td>${no++}</td>`;
            html += `<td>${v.no_pengajuan}</td>`;
            html += `<td>${v.NIK}</td>`;
            html += `<td>${v.nama_pengajuan}</td>`;
            html += `<td>${v.keperluan}</td>`;
            html += `<td><button class="btn btn-info btn-md" id="btn_cek" data-id="${v.no_pengajuan}"><i class="fa fa-check"></i> Lihat</button></td>`;
            html += `</tr>`;
          });

        } else {
          html += `<tr><td colspan="6" align="center">Tidak ada pengajuan</td></td>`
        }

        $.each(data.summary, function(k,v){
          $('#jml_keluarga').text(v.jml_keluarga);
          $('#jml_pengajuan').text(v.jml_pengajuan);
        });

        $('#t_pengajuan tbody').html(html);
      },
      error: function(){
        alert('Halaman tidak dapat di akses');
      }
    });
  }

  function loadDetail(id)
  {
    var link = '<?= base_url().'api/detail_pengajuan/' ?>'+id

    $.ajax({
      url: link,
      type: 'GET',
      dataType: 'JSON',
      success: function(data){

        var html ='';
        $.each(data.detail, function(k, v){
          $('#t_nopeng').text(v.no_pengajuan);
          $('#t_nokk').text(v.no_kk);
          $('#t_tgl').text(v.tgl_pengajuan);
          $('#t_nik').text(v.NIK);
          $('#t_nama').text(v.nama_pengajuan);
          $('#t_jkel').text(v.jenis_kelamin);
          $('#t_tglLahir').text(v.tgl_lahir);
          $('#t_tmpLahir').text(v.tempat_lahir);
          $('#t_kerja').text(v.pekerjaan);
          $('#t_wn').text(v.kewarganegaraan);
          $('#t_pend').text(v.pendidikan);
          $('#t_agama').text(v.agama);
          $('#t_alamat').text(v.alamat);
          $('#t_kper').text(v.keperluan);
          $('#t_stts').text(v.status_pengajuan);
          $('#content_btn').html(`<button class="btn btn-md btn-info" id="btn_validasi" data-id="${v.no_pengajuan}"><i class="fa fa-check"></i> Validasi</button> <button type="button" class="btn btn-danger btn-md" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i> Cancel</button>`);
        });

        $.each(data.pelengkap, function(k, v){
          html+= `<p>${v.keterangan}</p>`;
          html+= `<img src="<?= base_url().'image/dokumen/'  ?>${v.foto_dokumen}"/>`;
        });
        $('#t_pelengkap').html(html);
      },
      error: function(){
        alert('Tidak dapat mengakses halaman');
      }
    });
  }

  $(document).ready(function(){
    load_data();

    $(document).on('click', '#btn_cek', function(){
      var id = $(this).data('id');
      loadDetail(id);
      $('#modal_detail').modal('show');
    })

    $(document).on('click', '#btn_validasi', function(){
      var konfirmasi = confirm('Apakah anda yakin ingin memvalidasi pengajuan ?');

      if(konfirmasi){
        var no_pengajuan = $(this).data('id');

        $.ajax({
          url: '<?= base_url().'api/validasi_pengajuan' ?>',
          type: 'POST',
          data: {no_pengajuan: no_pengajuan},
          success: function(data){
            if(data == 'berhasil'){
              toastr.info('Berhasil validasi pengajuan', 'Success');
              $('#modal_detail').modal('hide');
            } else {
              toastr.error('Gagal validasi pengajuan', 'Error');
            }
            load_data();
          },
          error: function(){
            alert('Halaman tidak dapat diakses');
          }
        });
      }
    });

  });
</script>
