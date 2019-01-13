<?php
/**
 *
 */
class Regis_Model extends Model
{

  function __construct()
  {
    parent::__construct();
  }

  public function add()
  {
    $nama           = $_POST['nama'];
    $jenisKelamin   = $_POST['jenis_kelamin'];
    $noTelpon       = $_POST['no_tlp'];
    $email          = $_POST['email'];
    $kelas          = $_POST['kelas'];
    $noInduk        = $_POST['no_induk'];
    $status         = $_POST['status'];
    $tglInput       = date('Y-m-d H:i:s');

    $id1            = substr(time(), -3);
    if ($jenisKelamin == 'Laki-laki'){
      $id2          = 25;
    }else{
      $id2          = 32;
    }
    $id3            = substr($noTelpon, -2);
    $idPeserta      = dechex($id1.$id2.$id3);

    $sth = $this->db->prepare('INSERT INTO peserta (idPeserta, nama, jenisKelamin, noTelpon, email, kelas, noInduk, status, tglInput) VALUES (:idPeserta, :nama, :jenisKelamin, :noTelpon, :email, :kelas, :noInduk, :status, :tglInput)');
    $sth->execute(array(
      ':idPeserta'      => $idPeserta,
      ':nama'           => $nama,
      ':jenisKelamin'   => $jenisKelamin,
      ':noTelpon'       => $noTelpon,
      ':email'          => $email,
      ':kelas'          => $kelas,
      ':noInduk'        => $noInduk,
      ':status'         => $status,
      ':tglInput'       => $tglInput
    ));

    header('Location: '.URL.'regis/code');
  }

  public function showCode()
  {
    $sth = $this->db->prepare('SELECT idPeserta, nama FROM peserta ORDER BY tglInput DESC LIMIT 1');
    $sth->execute();
    return $sth->fetchAll();
  }
}
?>
