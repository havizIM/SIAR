<!-- Form Pengajuan -->
<div class="my-3 my-md-5"></div>
<div class="container">
  <div class="col-lg-6">
    <div class="card" id="form_pengajuan">
      <div class="card-header">
        <div class="card-title">
          <h2>Form Pengajuan</h2>
        </div>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-lg-6">
            <div class="form-grup">
              <label class="form-label">No Kartu Keluarga</label>
              <input type="number" name="no_kk" value="" class="form-control">
            </div>
            <div class="form-grup">
              <label class="form-label">NIK</label>
              <input type="number" name="no_kk" value="" class="form-control">
            </div>
            <div class="form-grup">
              <label class="form-label">Nama Lengkap</label>
              <input type="text" name="no_kk" value="" class="form-control">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-grup">
              <label class="form-label">Keperluan</label>
              <textarea name="name" rows="6" cols="45" class="form-control"></textarea>
            </div>
          </div>
        </div>
      </div>
      <div class="card-footer">
        <div class="btn-list text-right">
          <button type="submit" class="btn btn-lg btn-primary" id="btn_simpan">Simpan</button>
          <button type="submit" class="btn btn-lg btn-danger" id="btn_batal">Batal</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /Form Pengajuan -->


<div class="container">
  <div class="page-header text-right">
    <h1 class="page-title animated bounceIn">Daftar Pengajuan</h1>
    <button type="submit" id="btn_tambah" class="btn btn-primary ml-auto animated bounceIn"> <i class="fe fe-plus"></i> Tambah Pengajuan </button>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card animated zoomIn">
        <div class="card-body ">
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
          html += `<td><button class="btn btn-md btn-info">Lihat</button> <button class="btn btn-md btn-danger">Batal</button></td>`;
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

  $('#btn_batal').click(function(){
    $('#form_pengajuan').hide("blind",{direction:"up"});
  });

  $('#btn_tambah').click(function(){
    $('#form_pengajuan').show("blind");
  });

  $('#form_pengajuan').hide();

  loadPengajuan();


});


</script>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
