<div class="my-3 my-md-5"></div>
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header bg-primary">
          <h1 class="card-title" style="font-size:25px; color:#ffffff;">Daftar Surat Pindah</h1>
          <div class="col-lg-2 ml-auto">
            <button class="btn btn-lg btn-default"><i class="fa fa-print"></i> Export PDF</button>
          </div>
        </div>
        <div class="card-body ">
          <div class="table-responsive">
            <table class="table card-table table-vcenter text-wrap" id="t_ktp">
              <thead>
                <tr>
                  <th class="w-1">No.</th>
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
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<script type="text/javascript">
  function load_data()
  {
    $.ajax({
      url: '<?= base_url().'api/select_pindah' ?>',
      type: 'GET',
      dataType: 'JSON',
      success: function(data){
        var html = '';
        var no = 1;

        if(data.ktp.length != 0){
          $.each(data.ktp, function(k,v){
            html += `<tr>`;
            html += `<td>${no++}</td>`;
            html += `<td>${v.no_pengajuan}</td>`;
            html += `<td>${v.tgl_pengajuan}</td>`;
            html += `<td>${v.NIK}</td>`;
            html += `<td>${v.nama_pengajuan}</td>`;
            html += `<td><a class="btn btn-info btn-md"><i class="fa fa-print"></i> Print</a></td>`;
            html += `</tr>`;
          });
        } else {
          html += `<tr><td colspan="6" align="center">Tidak ada Pengajuan KTP</td></tr>`;
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
  });
</script>
