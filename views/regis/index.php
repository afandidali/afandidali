<br />
<br />
<div class="row">
  <div class="col-md-2">
  </div>
  <div class="col-md-8">
    <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title">Register</h4>
        <p class="card-category">Please register to get uniqe code</p>
      </div>
      <div class="card-body">
        <form id="addRegis" action="<?php echo URL;?>regis/add" method="post">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="bmd-label-floating">Nama</label>
                <input name="nama" type="text" class="form-control" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <select style="color:#a9afbb;" name="jenis_kelamin" class="form-control jenis_kelamin" required>
                  <option value="">-- Pilih Jenis Kelmin --</option>
                  <option value="Laki-laki">Laki-laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label class="bmd-label-floating">No Telpon</label>
                <input name="no_tlp" type="text" class="form-control" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label class="bmd-label-floating">Email</label>
                <input name="email" type="email" class="form-control" required>
              </div>
            </div>
            <div class="col-md-5">
              <div class="form-group">
                <label class="bmd-label-floating">Kelas / Asal</label>
                <input name="kelas" type="text" class="form-control" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="bmd-label-floating">No Induk</label>
                <input name="no_induk" type="text" class="form-control" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="bmd-label-floating lbStatus">Status</label>
                <input name="status" type="text" class="form-control inStatus" required>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary pull-right">Submit</button>
          <div class="clearfix"></div>
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-2">
  </div>
  <script>
    $(document).ready(function(){
      $(".inStatus").focus(function(){
        $(".inStatus").attr("placeholder", "ex: Mahasiswa");
      });

      //validasi ini status
      $(".inStatus").focusout(function(){
        $(".inStatus").attr("placeholder", "");
        if ($(".inStatus").val() != "") {
          $(".lbStatus").attr("style", "color:green");
        }else{
          $(".lbStatus").removeAttr("style");
        }
      });

      //validasi isi jenis_kelamin
      $(".jenis_kelamin").click(function(){
        if ($(".jenis_kelamin").val() == "") {
          $(".jenis_kelamin").attr("style", "color:#a9afbb");
        }else{
          $(".jenis_kelamin").removeAttr("style");
        }
      });
    });
  </script>
</div>
