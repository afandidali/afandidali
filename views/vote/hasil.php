<div class="row">
  <div class="col-lg-6">
    <p>
    </p>
  </div>
  <div class="col-lg-4">
  </div>
</div>
<a onclick="move()" class='btn btn-primary' href="#">HITUNG</a>
<hr>

<div id="progress">
  <div id="bar"></div>
</div>

<br>

<script>
function move() {
  var elem = document.getElementById("bar");
  var width = 1;
  var id = setInterval(frame, 100);
  function frame() {
    if (width >= 100) {
      clearInterval(id);
      document.getElementById('result').style.display='block';
      $('.result').attr('style', 'display:block');
      $('.beforeResult').attr('style', 'display:none');
    } else {
      width++;
      elem.style.width = width + '%';
    }
  }
}
</script>

<br>
<div class="row">
  <?php
    $hasil  = $this->countHasil;
    $hasilAkhir = explode("/", $this->countHasil);
    foreach ($this->showCalon as $key => $value) {
      $idCalon    = $value['idCalon'];
      $nama       = $value['nama'];
      $foto       = $value['foto'];
      $visi       = $value['visi'];
      $misi       = $value['misi'];
      $email      = $value['email'];
      $noUrut     = $value['noUrut'];
      $hasilVote  = $hasilAkhir[$noUrut-1];

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
            <h2 id='beforeResult' class='card-title beforeResult'>0 Suara</h2>
            <h2 id='result' class='card-title result'>$hasilVote Suara</h2>
            <hr />
          </div>
        </div>
      </div>

      ";
    }
  ?>
</div>
