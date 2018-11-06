<div class="my-3 my-md-5"></div>
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header bg-primary">
          <h1 class="card-title" style="font-size:25px; color:#ffffff;">Daftar Pengajuan Surat Kehilangan</h1>
          <div class="col-lg-2 ml-auto">
            <button class="btn btn-lg btn-default text-black" id="btn_print"><i class="fa fa-print"></i> Export PDF</button>
          </div>
        </div>
        <div class="card-body ">
          <div class="table-responsive">
            <table class="table card-table table-vcenter text-wrap" id="t_ktp">
              <thead>
                <tr>
                  <th class="w-1">No.</th>
                  <th>No. Dokumen</th>
                  <th>No. Pengajuan</th>
                  <th>Tgl. Pengajuan</th>
                  <th>NIK</th>
                  <th>Nama</th>
                  <th></th>
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

<div class="modal animated bounceInDown delay-2s" id="modal_print">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="judul">Print Pengajuan</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="form_report" target="_blank" method="post" action="<?= base_url().'dokumen/print_pkehilangan' ?>">
          <div class="form-group">
            <label class="form-label">Tanggal Awal</label>
            <input type="date" class="form-control" id="tgl_mulai" name="tgl_mulai" />
          </div>
          <div class="form-group">
            <label class="form-label">Tanggal Selesai</label>
            <input type="date" class="form-control" id="tgl_selesai" name="tgl_selesai" />
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-lg btn-info" id="submit"><i class="fa fa-print"></i> Print</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<script type="text/javascript">
  function load_data()
  {
    $.ajax({
      url: '<?= base_url().'api/select_kehilangan' ?>',
      type: 'GET',
      dataType: 'JSON',
      success: function(data){
        var html = '';
        var no = 1;

        if(data.ktp.length != 0){
          $.each(data.ktp, function(k,v){
            html += `<tr>`;
            html += `<td>${no++}</td>`;
            html += `<td>${v.no_dokumen}</td>`;
            html += `<td>${v.no_pengajuan}</td>`;
            html += `<td>${v.tgl_pengajuan}</td>`;
            html += `<td>${v.NIK}</td>`;
            html += `<td>${v.nama_pengajuan}</td>`;
            html += `<td><a class="btn btn-info btn-md text-white" href="<?= base_url().'dokumen/print_surat/' ?>${v.no_dokumen}" target="_blank"><i class="fa fa-print"></i> Print</a></td>`;
            html += `</tr>`;
          });
        } else {
          html += `<tr><td colspan="6" align="center">Tidak ada Pengajuan Surat Kehilangan</td></tr>`;
        }

        $('#t_ktp tbody').html(html);
      },
      error: function(){
          alert('Tidak dapat mengakses halaman');
      }
    });
  }

  $(document).ready(function(){
    load_data();

    $('#btn_print').on('click', function(){
      $('#tgl_mulai').val('');
      $('#tgl_selesai').val('');
      $('#modal_print').modal('show');
    });

    $('#form_report').on('submit', function(){

      var start_date = $('#tgl_mulai').val();
      var end_date = $('#tgl_selesai').val();

      if(start_date == '' || end_date == ''){
        toastr.warning('Silahkan isi tanggal dengan lengkap', 'Warning');
        return false;
      } else {
        return true;
      }
    });

  });
</script>
