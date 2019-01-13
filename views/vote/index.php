  <br />
  <br />
  <br />
  <div class="row">
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Verifikasi</h4>
          <p class="card-category">Masukkan kode registrasi, dan gunakanlah hak pilih dengan bijak</p>
        </div>
        <div class="card-body">
          <form action="vote/run" method="post">
            <div class="row">
              <div class="col-md-3">
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Kode Registrasi</label>
                  <input name="idPeserta" type="text" class="form-control">
                </div>
              </div>
              <div class="col-md-3">
              </div>
            </div>
            <button type="submit" class="btn btn-primary pull-right">SUBMIT</button>
            <div class="clearfix"></div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-2">
    </div>
  </div>
  <?php
    if (Session::get('successVote') == true) {
      echo "
      <script>
        $(document).ready(function() {
          demo.showNotification('top','right');
        });
      </script>
      ";
    }
  ?>

<!-- your content here -->
