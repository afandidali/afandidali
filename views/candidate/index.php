<div class="row">
  <div class="col-lg-12 col-md-12">
    <div class="card">
      <div class="card-header card-header-tabs card-header-primary">
        <div class="nav-tabs-navigation">
          <div class="nav-tabs-wrapper">
            <span class="nav-tabs-title">Menu :</span>
            <ul class="nav nav-tabs" data-tabs="tabs">
              <li class="nav-item">
                <a class="nav-link active" href="#profile" data-toggle="tab">
                  <i class="material-icons">list</i> List
                  <div class="ripple-container"></div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#messages" data-toggle="tab">
                  <i class="material-icons">note_add</i> Tambah Data
                  <div class="ripple-container"></div>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="tab-content">
          <div class="tab-pane active" id="profile">
            <table class="table">
              <thead class=" text-primary">
                <tr>
                  <th>
                  </th>
                  <th>Nama</th>
                  <th>NIM</th>
                  <th>Kelas</th>
                  <th>Email</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $i = 1;
                  foreach ($this->show as $key => $value) {
                    echo '
                    <tr>
                      <td>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value="">
                            <span class="form-check-sign">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
                      </td>
                      <td>'.$value['nama'].'</td>
                      <td>'.$value['nim'].'</td>
                      <td>'.$value['kelas'].'</td>
                      <td>'.$value['email'].'</td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" title="Edit Calon" class="btn btn-primary btn-link btn-sm">
                          <i class="material-icons">edit</i>
                        </button>
                        <button type="button" rel="tooltip" title="Delete" class="btn btn-danger btn-link btn-sm">
                          <i class="material-icons">close</i>
                        </button>
                      </td>
                    </tr>';
                    $i++;
                  }
                ?>
              </tbody>
            </table>
          </div>
          <div class="tab-pane" id="messages">
            <form action="login/run" method="post">
              <div class="row">
                <br />
                <div class="col-md-12">
                  UNDER CONSTRUCT!!
                </div>
                <hr />
              </div>
              <button type="submit" class="btn btn-primary pull-right">Login</button>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
