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
          <!-- <div class="col-lg-4 ml-auto">
            <form class="input-icon my-3 my-lg-0">
              <input type="search" class="form-control header-search" placeholder="Masukkan No KK atau No NIK" tabindex="1">
              <div class="input-icon-addon">
                <i class="fe fe-search"></i>
              </div>
            </form>
          </div> -->
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

<div class="modal animated bounceInDown delay-2s" id="modal_dokumen">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title">Tambah Dokumen</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="form_data">
          <input type="hidden" name="no_pengajuan" id="no_pengajuan">
          <div class="form-group">
            <label for="form-label">Diambil Oleh</label>
            <input type="text" name="diambil_oleh" id="diambil_oleh" class="form-control">
          </div>
          <div class="form-group">
            <label for="form-label">Keterangan</label>
            <textarea class="form-control" name="keterangan" id="keterangan"></textarea>
          </div>
          <div class="form-group">
            <button type="submit" name="button" class="btn btn-info btn-md" id="submit">Submit</button>
            <button type="button" class="btn btn-danger btn-md" data-dismiss="modal" aria-label="Close">Batal</button>
          </div>
        </form>
      </div>
      <div class="modal-footer" id="content_btn"></div>
    </div>
  </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

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
            html += `<td><button class="btn btn-info btn-md" id="add_dokumen" data-id="${v.no_pengajuan}"><i class="fa fa-check"></i> Lihat</button></td>`;
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

  $(document).ready(function(){
    load_data();

    $(document).on('click', '#add_dokumen', function(){
      $('#modal_dokumen').modal('show');
      $('#no_pengajuan').val($(this).data('id'));
    });

    $('#form_data').on('submit', function(e){
      e.preventDefault();
      submit = true;

      $(this).find('#diambil_oleh, #keterangan, #tgl_pengambilan, #no_pengajuan').each(function(){
        if($(this).val() === ''){
          submit = false;
        } else {
          submit = true;
        }
      });

      if(submit == true){
        $.ajax({
          url: '<?= base_url().'api/add_dokumen' ?>',
          type: 'POST',
          data: $(this).serialize(),
          beforeSend: function(){
            $('#submit').addClass('btn-loading');
          },
          success: function(data){
            if(data == 'berhasil'){
              toastr.info('Berhasil menambah Dokumen', 'Berhasil');
              $('#modal_detail').modal('hide');
              load_data();
            } else {
              toastr.error('Gagal menambah Dokumen', 'Failed');
            }
            $('#submit').removeClass('btn-loading');
          },
          error: function(){
            toastr.error('Tidak dapat mengakses halaman', 'Error');
          }
        })
      } else {
        toastr.error('Silahkan mengisi data dengan lengkap', 'Error');
      }
    });

  });
</script>
