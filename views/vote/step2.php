<div class="row">
  <div class="col-lg-6">
    <p>
      <?php
        if (Session::get('cekPeserta') == true) {
          $idPeserta = Session::get('idPeserta');
          $namaPeserta = Session::get('namaPeserta');
          if (Session::get('suara') == true) {
            $suara = "Tersedia";
          }else {
            $suara = "Sudah digunakan";
          }
          echo '<strong>'. strtoupper($idPeserta) .'</strong> : '. $namaPeserta .'<br />';
          echo '<strong> Hak suara : '. $suara .'</strong>';
        }else {
          // code...
          echo '<div style="color:red"><strong>NO REGISTRASI</strong> tidak terdaftar!!</div>';
        }
      ?>
    </p>
  </div>
  <div class="col-lg-4">
  </div>
</div>
<a class='btn btn-primary' href="<?php echo URL; ?>vote">Kembali</a>
<hr>

<br>
<div class="row">
  <?php
    foreach ($this->showCalon as $key => $value) {
      $idCalon  = $value['idCalon'];
      $nama     = $value['nama'];
      $foto     = $value['foto'];
      $visi     = $value['visi'];
      $misi     = $value['misi'];
      $email    = $value['email'];
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
            ";
            if ((Session::get('cekPeserta') == false) || (Session::get('suara') == false)) {
              echo '<strong style="color:red">TIDAK BISA MELAKUKAN VOTE!!</strong>';
            }else{
              echo '
                <form action="decVote" method="POST">
                  <input name="idPeserta" style="display:none" value="'.$idPeserta.'"/>
                  <input name="idCalon" style="display:none" value="'.$idCalon.'"/>
                  <button class="btn btn-primary">VOTE</button>
                </form>
              ';
            }
            echo "
            <hr />
          </div>
        </div>
      </div>

      ";
    }
  ?>
</div>
