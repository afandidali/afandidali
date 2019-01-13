<?php
  foreach ($this->count as $key => $value) {
    $jumPeserta = $value['jumlahPeserta'];
  }
  foreach ($this->countVote as $key => $value) {
    $jumVote = $value['jumlahVote'];
  }
  $jumGolput = $jumPeserta - $jumVote;
?>
<div class="row">
  <div class="col-lg-3 col-md-6 col-sm-6">
    <div class="card card-stats">
      <div class="card-header card-header-warning card-header-icon">
        <div class="card-icon">
          <i class="material-icons">person</i>
        </div>
        <p class="card-category">Peserta</p>
        <h3 class="card-title"><?php echo $jumPeserta;?><small> Orang</small></h3>
      </div>
      <div class="card-footer">
        <div class="stats">
          <i class="material-icons text-primary">launch</i>
          <a href="<?php echo URL; ?>dashboard/index">Lihat Data</a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6">
    <div class="card card-stats">
      <div class="card-header card-header-info card-header-icon">
        <div class="card-icon">
          <i class="material-icons">recent_actors</i>
        </div>
        <p class="card-category">Calon Kahim</p>
        <h3 class="card-title">3 <small>Orang</small></h3>
      </div>
      <div class="card-footer">
        <div class="stats">
          <i class="material-icons text-primary">launch</i>
          <a href="<?php echo URL; ?>dashboard/candidate">Lihat Data</a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6">
    <div class="card card-stats">
      <div class="card-header card-header-success card-header-icon">
        <div class="card-icon">
          <i class="material-icons">how_to_vote</i>
        </div>
        <p class="card-category">Jumlah Voting</p>
        <h3 class="card-title"><?php echo $jumVote;?><small> Suara</small></h3>
      </div>
      <div class="card-footer">
        <div class="stats">
          <i class="material-icons text-primary">launch</i>
          <a href="<?php echo URL; ?>dashboard/vote">Lihat Data</a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6">
    <div class="card card-stats">
      <div class="card-header card-header-danger card-header-icon">
        <div class="card-icon">
          <i class="material-icons">info_outline</i>
        </div>
        <p class="card-category">Golput</p>
        <h3 class="card-title"><?php echo $jumGolput;?><small> Suara</small></h3>
      </div>
      <div class="card-footer">
        <div class="stats">
          <i class="material-icons text-primary">launch</i>
          <a href="<?php echo URL; ?>dashboard/golput" class="lihatData">Lihat Data</a>
        </div>
      </div>
    </div>
  </div>
</div>
