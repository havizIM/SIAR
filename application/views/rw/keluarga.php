<div class="my-3 my-md-5"></div>
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header bg-primary">
          <h1 class="card-title" style="font-size:25px; color:#ffffff;">Daftar Keluarga </h1>
          <div class="col-lg-4 ml-auto">
            <form class="input-icon my-3 my-lg-0">
              <input type="search" class="form-control header-search" placeholder="Masukkan No KK.." tabindex="1">
              <div class="input-icon-addon">
                <i class="fe fe-search"></i>
              </div>
            </form>
          </div>
        </div>
        <div class="card-body ">
          <div class="table-responsive">
            <table class="table card-table table-vcenter text-wrap" id="t_keluarga">
              <thead>
                <tr>
                  <th class="w-1">#</th>
                  <th>No.KK</th>
                  <th>Alamat</th>
                  <th class="text-wrap">Kode POS</th>
                  <th>Provinsi</th>
                  <th>Kotamadya</th>
                  <th>Kecamatan</th>
                  <th>Kelurahan</th>
                  <th>Jml Anggota</th>
                  <th></th>
                </tr>
              </thead>
              <tbody></tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal animated bounceInDown delay-2s" id="modal_keluarga">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title">Tambah Data Keluarga</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="form_keluarga">
          <div class="form-group">
            <label class="form-label">No. KK</label>
            <input type="text" class="form-control" id="no_kk" name="no_kk" minlength="16" maxlength="16"/>
          </div>
          <div class="form-group">
            <label class="form-label">Tanggal KK</label>
            <input type="date" class="form-control" id="tgl_kk" name="tgl_kk" />
          </div>
          <div class="form-group">
            <label class="form-label">Alamat</label>
            <textarea name="alamat" id="alamat" rows="8" cols="80" class="form-control"></textarea>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" id="submit">Simpan</button>
            <button type="button" class="btn btn-danger" id="batal">Batal</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<script type="text/javascript">
  function load_data(cari){
    $.ajax({
      url: '<?= base_url().'api/select_keluarga' ?>',
      type: 'POST',
      dataType: 'JSON',
      data: {cari: cari},
      success: function(data){
        var html = '';
        var no = 1;

        if(data.keluarga.length != 0){
          $.each(data.keluarga, function(k,v){
            html += `<tr>`;
              html += `<td>${no++}</td>`;
              html += `<td>${v.no_kk}</td>`;
              html += `<td>${v.alamat}</td>`;
              html += `<td>${v.kode_pos}</td>`;
              html += `<td>${v.provinsi}</td>`;
              html += `<td>${v.kotamadya}</td>`;
              html += `<td>${v.kecamatan}</td>`;
              html += `<td>${v.kelurahan}</td>`;
              html += `<td>${v.jml_anggota}</td>`;
              html += `<td><a class="btn btn-info btn-md" href="#/anggota/${v.no_kk}">Detail</a></td>`;
            html += `</tr>`;
          });
        } else {
          html += `<tr>`;
          html += `<td colspan="10" align="center">Tidak ada data keluarga</td>`;
          html += `</tr>`;
        }

        $('#t_keluarga tbody').html(html);
      },
      error: function(){
        alert('Tidak dapat mengakses halaman');
      }
    })
  }

  $(document).ready(function(){
    load_data();


    });
  });
</script>
