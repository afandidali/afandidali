<?php
/**
 *
 */
class Vote_Model extends Model
{

  function __construct()
  {
    parent::__construct();
  }

  function showCalon()
  {
    $sth = $this->db->prepare('SELECT * FROM calonkahim ORDER BY idCalon ASC');
    $sth->execute();
    return $sth->fetchAll();
  }

  function countHasil()
  {
    $sth = $this->db->prepare('SELECT
      COUNT(CASE WHEN idCalon LIKE 1 THEN 1 END) AS c1,
      COUNT(CASE WHEN idCalon LIKE 2 THEN 1 END) AS c2,
      COUNT(CASE WHEN idCalon LIKE 3 THEN 1 END) AS c3
      FROM voting;');

    $sth->execute();
    $data = $sth->fetchAll();
    foreach ($data as $key => $value) {
      $hasil  = $value['c1'] ."/". $value['c2'] ."/". $value['c3'];
    }
    return $hasil;
  }

  function decVote()
  {
    $idPeserta = $_POST['idPeserta'];
    $idCalon = $_POST['idCalon'];
    $tglVote = date('Y-m-d H:i:s');

    $sth = $this->db->prepare('INSERT INTO voting (idPeserta, idCalon, tglVote) VALUES (:idPeserta, :idCalon, :tglVote)');
    $sth->execute(array(
      ':idPeserta'  => $idPeserta,
      ':idCalon'    => $idCalon,
      ':tglVote'    => $tglVote
    ));

    Session::init();
    Session::set('successVote', true);
    header('Location: '.URL.'vote');
  }

  public function run()
  {
    $idPeserta  = $_POST['idPeserta'];

    // Cek peserta
    $sth = $this->db->prepare("SELECT nama FROM peserta WHERE idPeserta = :idPeserta");
    $sth->execute(array(
      ':idPeserta' => $idPeserta
    ));
    $data = $sth->fetchAll();
    foreach ($data as $key => $value) {
      $nama   = $value['nama'];
    }

    $count = $sth->rowCount();
    Session::init();
    Session::set('successVote', false);
    if ($count > 0){
      Session::set('cekPeserta', true);
      Session::set('idPeserta', $idPeserta);
      Session::set('namaPeserta', $nama);

      //Cek hak suara
      $sth = $this->db->prepare("SELECT idVoting FROM voting WHERE idPeserta = :idPeserta");
      $sth->execute(array(
        ':idPeserta' => $idPeserta
      ));
      $count = $sth->rowCount();
      if ($count == 0) {
        Session::set('suara', true);
      }else{
        Session::set('suara', false);
      }
      header('location: '.URL.'vote/step2');
    }else{
      Session::set('cekPeserta', false);
      header('location: '.URL.'vote/step2');
    }

    // Cek hak suara
    $sth = $this->db->prepare("SELECT idVoting FROM voting WHERE idPeserta = :idPeserta");
    $sth->execute(array(
      ':idPeserta' => $idPeserta
    ));

    $count = $sth->rowCount();
    if ($count = 0){
      Session::set('hakSuara', true);
      Session::set('idPeserta', $idPeserta);
      header('location: '.URL.'vote/step2');
    }else{
      Session::set('hakSuara', false);
    }
  }
}

?>
