<!-- Form Pengajuan -->
<div class="my-3 my-md-5"></div>
<div class="container">
  <div class="col-md-12">
    <div class="card" id="form_pengajuan" style="border:2px solid #e41e7f; box-shadow: 0 3px 14px rgba(0, 0, 0, 0.66);">
      <div class="card-header" id="judul" style="padding-left: 35%; padding-top: 15px;background-color:#e41e7f; color: white;">
        <div class="card-title " style="background-color:#e41e7f; color: white;">
          <h2>Formulir Pengajuan</h2>
        </div>
      </div>
      <form id="form-data">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label class="form-label">NIK</label>
                <input type="text" name="nik" id="nik" class="form-control">
              </div>
              <div class="form-group">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" name="nama_pengajuan" id="nama_pengajuan" class="form-control">
              </div>
              <div class="form-group">
                <label class="form-label">Jenis Kelamin</label>
                <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                  <option value="">-- Jenis Kelamin --</option>
                  <option value="Laki-laki">Laki-laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>
              <div class="form-group">
                <label class="form-label">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control">
              </div>
              <div class="form-group">
                <label class="form-label">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control">
              </div>
              <div class="form-group">
                <label class="form-label">Pekerjaan</label>
                <input type="text" name="pekerjaan" id="pekerjaan" class="form-control">
              </div>
              <div class="form-group">
                <label class="form-label">Kewarganegaraan</label>
                <select class="form-control" name="kewarganegaraan" id="kewarganegaraan">
                  <option value="">-- Kewarganegaraan --</option>
                  <option value="WNI">WNI</option>
                  <option value="WNA">WNA</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-label">Pendidikan</label>
                <input type="text" name="pendidikan" id="pendidikan" class="form-control">
              </div>
              <div class="form-group">
                <label class="form-label">Agama</label>
                <select class="form-control" name="agama" id="agama">
                  <option value="">-- Agama --</option>
                  <option value="Islam">Islam</option>
                  <option value="Kristen">Kristen</option>
                  <option value="Katholik">Katholik</option>
                  <option value="Budha">Budha</option>
                  <option value="Hindu">Hindu</option>
                </select>
              </div>
              <div class="form-group">
                <label class="form-label">Alamat</label>
                <textarea name="alamat" id="alamat" rows="6" cols="45" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <label class="form-label">Keperluan</label>
                <select class="form-control" name="keperluan" id="keperluan">
                  <option value="">-- Keperluan --</option>
                  <option value="Pembuatan KTP">Pembuatan KTP</option>
                  <option value="Surat Domisili">Surat Domisili</option>
                  <option value="Surat Kehilangan">Surat Kehilangan</option>
                  <option value="Surat Kematian">Surat Kematian</option>
                  <option value="Surat Pindah">Surat Pindah</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <div class="btn-list text-right">
            <button type="submit" class="btn btn-pill btn-primary" id="btn_simpan">Simpan</button>
            <button type="button" class="btn btn-pill btn-danger" id="btn_batal">Batal</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- /Form Pengajuan -->


<div class="container">
  <div class="page-header text-right">
    <h1 class="page-title animated bounceIn" style="font-weight:600; font-size: 30px;">Daftar Pengajuan</h1>
    <button type="button" id="btn_tambah" class="btn btn-primary ml-auto animated bounceIn"> <i class="fe fe-plus"></i> Tambah Pengajuan </button>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card animated zoomIn"style="border:2px solid #e41e7f; box-shadow: 0 3px 14px rgba(0, 0, 0, 0.66);">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table card-table table-vcenter text-wrap" id="t_pengajuan">
              <thead>
                <tr>
                  <th class="w-1">No.</th>
                  <th>Tgl Pengajuan</th>
                  <th>NIK</th>
                  <th>Nama</th>
                  <th class="text-wrap">Keperluan</th>
                  <th>Dok. Pelengkap</th>
                  <th>Status</th>
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

<div class="modal animated bounceInDown delay-2s" id="modal_dok">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title">Upload Dokumen Pelengkap</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="form_dok">
          <div class="form-group">
            <label class="form-label">Nama Dokumen</label>
            <input type="hidden" name="no_pengajuan" id="no_pengajuan">
            <input type="text" class="form-control" id="keterangan" name="keterangan" />
          </div>
          <div class="form-group">
            <label class="form-label">Dokumen Pelengkap</label>
            <input type="file" class="form-control" id="foto_dokumen" name="foto_dokumen" />
          </div>
          <div class="form-grup">
            <center><button type="submit" class="btn btn-primary" style="width: 90%" id="submit_upload">Upload</button></center>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal animated bounceInDown delay-2s" id="modal_detail">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title">Detail Pengajuan</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h2>Detail</h2>
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
    </div>
  </div>
</div>

<script type="text/javascript">

function loadPengajuan(){
  $.ajax({
    url: '<?= base_url().'api/show_pengajuan' ?>',
    type: 'GET',
    dataType: 'JSON',
    success: function(data){
      var html = '';

      $.each(data.pengajuan, function(k,v){
        html += `<tr>`;
        html += `<td>${v.no_pengajuan}</td>`;
        html += `<td>${v.tgl_pengajuan}</td>`;
        html += `<td>${v.NIK}</td>`;
        html += `<td>${v.nama_pengajuan}</td>`;
        html += `<td>${v.keperluan}</td>`;
        html += `<td>${v.jml_pelengkap}</td>`;
        if(v.status_pengajuan == 'Proses') {
          html += `<td><button class="btn btn-md btn-success" id="btn_upload" data-id="${v.no_pengajuan}">Upload</button>`;
          html += `<button class="btn btn-md btn-info" id="btn_lihat" data-id="${v.no_pengajuan}">Lihat</button>`;
          html += `<button class="btn btn-md btn-danger" id="btn_hapus" data-id="${v.no_pengajuan}">Batal</button></td>`;
        } else {
          html += `</td>${v.status_pengajuan}</td>`;
        }
        html += `</tr>`;
      });

      $('#t_pengajuan tbody').html(html);
    },
    error: function(){
      alert('Tidak dapat mengakses halaman');
    }
  })
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

  // alert(link);
}

$(document).ready(function(){

  loadPengajuan();
  $('#form_pengajuan').hide();

  $('#btn_batal').click(function(){
    $('#form_pengajuan').hide("blind",{direction:"up"});
  });

  $('#btn_tambah').click(function(){
    $('#form_pengajuan').show("blind");
    $('#form-data')[0].reset();
  });

  $('#form-data').on('submit', function(e){
    e.preventDefault();

    $(this).find('#nik, #nama_pengajuan, #jenis_kelamin, #tgl_lahir, #tempat_lahir, #pekerjaan, #kewarganegaraan, #pendidikan, #agama, #alamat, #keperluan').each(function(){
      if ($(this).val() == '' ) {
        submit = false;
      }else {
        submit = true;
      }
    });

    if(submit == true) {
      $.ajax({
        url: '<?= base_url().'api/add_pengajuan' ?>',
        type: 'POST',
        data: $(this).serialize(),
        cache: false,
        beforeSend: function(){
          $('#btn_simpan').addClass('btn-loading');
        },
        success: function(data){
          if(data == 'berhasil'){
            toastr.info('Berhasil melakukan Pengajuan, silahkan upload dokumen pelengkap', 'Success');
          } else {
            toastr.error('Gagal melakukan pengajuan');
          }
          $('#btn_simpan').removeClass().addClass('btn btn-pill btn-primary');
          $('#form_pengajuan').hide("blind",{direction:"up"});
          loadPengajuan();
        },
        error: function(){
          toastr.warning('Tidak dapat mengakses halaman');
        }
      })
    } else {
      toastr.warning('Silahkan isi data dengan lengkap', 'Warning');
    }
  });

  $(document).on('click', '#btn_hapus', function(){
    var id = $(this).data('id');
    var cek = confirm('Apakah Anda yakin akan membatalkan pengajuan ini?');
    if(cek){
      $.ajax({
        url: '<?= base_url().'api/batal_pengajuan/' ?>'+id,
        type: 'GET',
        beforeSend: function(){
          $(this).addClass('btn-loading');
        },
        success: function(data){
          if(data == 'berhasil'){
            toastr.info('Berhasil membatalkan pengajuan', 'Success');
          } else {
            toastr.error('Gagal membatalkan pengajuan', 'Error')
          }
          loadPengajuan();
          $(this).removeClass().addClass('btn btn-md btn-danger');
        },
        error: function() {
          toastr.warning('Tidak dapat mengakses halaman');
        }
      });
    }
  });

  $(document).on('click', '#btn_upload', function(){
    $('#form_dok')[0].reset();
    $('#modal_dok').modal('show');
    $('#no_pengajuan').val($(this).data('id'));
  });

  $('#foto_dokumen').change(function(){
    var file = $(this)[0].files[0];
    var type = file.type;
    var name = file.name;
    var match_type = ["image/png", "image/jpeg"];
    if (!((type == match_type[0]) || (type == match_type[1]))) {
        toastr.warning('Format yang diperbolehkan hanya .png atau .jpg', 'Warning');
        $('#foto_dokumen').val('');
    }
  });


  $('#form_dok').on('submit', function(e) {
    e.preventDefault();

    $(this).find('#keterangan, #foto_dokumen').each(function(){
      if ($(this).val() == '' ) {
        submit = false;
      }else {
        submit = true;
      }
    });

    if(submit == true){
      $.ajax({
          url: '<?= base_url().'api/upload_dokumen' ?>',
          type: 'POST',
          data: new FormData(this),
          cache: false,
          processData: false,
          contentType: false,
          beforeSend: function() {
            $('#submit_upload').addClass('btn-loading');
          },
          success: function(data) {
              if (data == "berhasil") {
                toastr.info('Berhasil Upload dokumen pelengkap', 'Success');
                $('#modal_dok').modal('hide');
                $('#foto_dokumen').val('');
                $('#submit_upload').removeClass('btn-loading');
                loadPengajuan();
              } else {
                  toastr.error(`File tidak berhasil diupload`, 'Error');
              }
              $('#modalUpload').modal('hide');
          },
          error: function() {
              toastr.error('Tidak dapat memproses Data', 'Error');
          }
      });

    } else {
      toastr.error('Silahkan masukkan dokumen pelengkap', 'Error');
    }
  });

  $(document).on('click', '#btn_lihat' ,function(){
    var id = $(this).data('id');
    loadDetail(id);
    $('#modal_detail').modal('show');


  })



});


</script>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
