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
    <h1 class="page-title">Daftar Pengajuan</h1>
    <button type="submit" id="btn_tambah" class="btn btn-primary ml-auto"> <i class="fe fe-plus"></i> Tambah Pengajuan </button>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table card-table table-vcenter text-nowrap">
              <thead>
                <tr>
                  <th class="w-1">No.</th>
                  <th>###</th>
                  <th>###</th>
                  <th>###</th>
                  <th>###</th>
                  <th>###</th>
                  <th>###</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><span class="text-muted">001401</span></td>
                  <td><a href="invoice.html" class="text-inherit">Yugi Setiawan</a></td>
                  <td>
                    ###
                  </td>
                  <td>
                    ###
                  </td>
                  <td>
                    ###
                  </td>
                  <td>
                    <span class="status-icon bg-success"></span> ###
                  </td>
                  <td>###</td>
                  <td>
                    <a class="icon" href="javascript:void(0)">
                      <i class="fe fe-edit"></i>
                    </a>
                  </td>
                </tr>
                <tr>
                  <td><span class="text-muted">001402</span></td>
                  <td><a href="invoice.html" class="text-inherit">Dimas Kanjeng</a></td>
                  <td>
                    ###
                  </td>
                  <td>
                    ###
                  </td>
                  <td>
                    ###
                  </td>
                  <td>
                    <span class="status-icon bg-warning"></span> ###
                  </td>
                  <td>###</td>

                  <td>
                    <a class="icon" href="javascript:void(0)">
                      <i class="fe fe-edit"></i>
                    </a>
                  </td>
                </tr>
              </tbody>
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

$(document).ready(function(){

  $('#btn_batal').click(function(){
    $('#form_pengajuan').hide("blind",{direction:"up"});
  });

  $('#btn_tambah').click(function(){
    $('#form_pengajuan').show("blind");
  });

  $('#form_pengajuan').hide();

});


</script>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
