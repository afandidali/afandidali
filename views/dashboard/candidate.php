<?php include 'menu.php'; ?>
*Centang untuk menampilkan VISI/MISI
<div class="row">
  <div class="col-lg-6">
    <table class="table">
      <tbody>
        <tr>
          <td>
            <div id="cbVisi" class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" value="" type="checkbox">
                <span class="form-check-sign">
                  <span class="check"></span>
                </span>
              </label>
            </div>
          </td>
          <td><strong>Tampilkan VISI</strong></td>

          <td>
            <div id="cbMisi" class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" value="" type="checkbox">
                <span class="form-check-sign">
                  <span class="check"></span>
                </span>
              </label>
            </div>
          </td>
          <td><strong>Tampilkan MISI</strong></td>
        </tr>
      </tbody>
    </table>
  </div>

</div>
<br />
<div class="row">
  <?php
    foreach ($this->showCalon as $key => $value) {
      $nama   = $value['nama'];
      $foto   = $value['foto'];
      $visi   = $value['visi'];
      $misi   = $value['misi'];
      $email  = $value['email'];
      $noUrut     = $value['noUrut'];

      echo "
      <div class='col-md-4 hide'>
        <div class='card card-profile'>
          <div class='card-avatar'>
            <a href='#'>
              <img class='img' src='".URL."public/images/calon/$foto' />
            </a>
          </div>
          <div class='card-body'>
          <h4 class='card-category text-gray' style='margin-top: -8px;'>NO.$noUrut</h6>
            <h6 class='card-category text-gray'>$email</h6>
            <h4 class='card-title'>$nama</h4>
            <hr />
            <h5 class='visi'>VISI</h5>
            <p class='card-description visi' style='color:black;'>$visi</p>
            <hr />
            <h5 class='misi'>MISI</h5>
            <p class='card-description misi' style='color:black;'>$misi</p>
          </div>
        </div>
      </div>

      ";
    }
  ?>
    <script>
      $(document).ready(function() {
        $(".visi").hide();
        $(".misi").hide();

        $('#cbVisi :checkbox').change(function() {
            // this will contain a reference to the checkbox
            if (this.checked) {
                $(".visi").show();
            } else {
                $(".visi").hide();
            }
        });

        $('#cbMisi :checkbox').change(function() {
            // this will contain a reference to the checkbox
            if (this.checked) {
                $(".misi").show();
            } else {
                $(".misi").hide();
            }
        });
      });
    </script>


</div>
