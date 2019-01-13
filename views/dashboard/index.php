<?php include 'menu.php'; ?>
<hr />
<!-- Tabel data peserta -->
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title ">Data Peserta</h4>
        <p class="card-category"> Demi kerahasiaan hasil vote, no register tidak ditampilkan</p>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table data">
            <thead class=" text-primary">
              <th>
                NO
              </th>
              <th>
                Nama
              </th>
              <th>
                Status
              </th>
              <th>
                Kelas/Asal
              </th>
              <th>
                No Telpon
              </th>
            </thead>
            <tbody>
              <?php
                $i = 1;
                foreach ($this->show as $key => $value) {
                  echo '
                  <tr>
                    <td>'.$i.'</td>
                    <td>'.$value['nama'].'</td>
                    <td>'.$value['status'].'</td>
                    <td>'.$value['kelas'].'</td>
                    <td class="text-primary">'.$value['noTelpon'].'</td>
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
