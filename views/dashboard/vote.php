<?php include 'menu.php'; ?>
<hr />
<!-- Tabel data peserta -->
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title ">Data Hasil Voting</h4>
        <p class="card-category"> Data yang tampil diurutkan secara random</p>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table data">
            <thead class=" text-primary">
              <th>
                NO
              </th>
              <th>
                NO REGISTRASI
              </th>
              <th>
                NAMA CALON
              </th>
            </thead>
            <tbody>
              <?php
                $i = 1;
                foreach ($this->showVote as $key => $value) {
                  echo '
                  <tr>
                    <td>'.$i.'</td>
                    <td>'.$value['idPeserta'].'</td>
                    <td class="text-primary">'.$value['namaCalon'].'</td>
                  </tr>';
                  $i++;
                }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
