<br />
<br />
<div class="row">
  <div class="col-md-2">
  </div>
  <div class="col-md-8">
    <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title">No Register</h4>
        <p class="card-category">Gunakan untuk menyalurkan hak suara</p>
      </div>
      <div class="card-body">
        <form  action="<?php echo URL; ?>regis" method="post">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <center>
                    <?php
                    //$tes = count($this->showCode);
                      foreach ($this->showCode as $key => $value) {
                        $code = strtoupper($value['idPeserta']);
                        $nama = strtoupper($value['nama']);
                        echo "<h1>$code</h1>";
                        echo "<h4>$nama</h4>";
                        //echo "<h4>$tes</h4>";
                      }
                    ?>
                </center>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary pull-right">Kembali</button>
          <div class="clearfix"></div>
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-2">
  </div>
</div>
