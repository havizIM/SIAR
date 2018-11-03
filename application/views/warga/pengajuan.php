<!-- Form Pengajuan -->
<div class="my-3 my-md-5"></div>
<div class="container">
  <div class="col-md-12">
    <div class="card" id="form_pengajuan">
      <div class="card-header" id="judul" style="padding-left: 35%; padding-top: 15px;">
        <div class="card-title ">
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
      <div class="card animated zoomIn">
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
            <input type="text" class="form-control" id="keterangan" name="keterangan" />
          </div>
          <div class="form-group">
            <label class="form-label">Dokumen Pelengkap</label>
            <input type="file" class="form-control" id="foto_dokumen" name="foto_dokumen" />
          </div>
          <div class="form-grup">
            <center><button type="submit" class="btn btn-primary" style="width: 90%">Upload</button></center>
          </div>
        </form>
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
          html += `<td><button class="btn btn-md btn-success" id="btn_upload" data-id="${v.no_pengajuan}">Upload</button> <button class="btn btn-md btn-info">Lihat</button> <button class="btn btn-md btn-danger" id="btn_hapus" data-id="${v.no_pengajuan}">Batal</button></td>`;
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
      toastr.info('Berhasil Upload dokumen pelengkap', 'Success');
      $('#modal_dok').modal('hide');
    } else {
      toastr.error('Gagal mengakses halaman', 'Error');
    }
  });

});


</script>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
