<?php
/**
 *
 */
class Dashboard_Model extends Model
{

  function __construct()
  {
    parent::__construct();
  }

  function show()
  {
    $sth = $this->db->prepare('SELECT * FROM peserta ORDER BY nama ASC');
    $sth->execute();
    return $sth->fetchAll();
  }

  function showCalon()
  {
    $sth = $this->db->prepare('SELECT * FROM calonkahim ORDER BY idCalon ASC');
    $sth->execute();
    return $sth->fetchAll();
  }

  function showVote()
  {
    $sth = $this->db->prepare('SELECT voting.*, calonkahim.idCalon, calonkahim.noUrut, calonkahim.nama AS namaCalon
      FROM voting INNER JOIN calonkahim ON voting.idCalon = calonkahim.idCalon ORDER BY noUrut ASC');
    $sth->execute();
    return $sth->fetchAll();
  }

  function count()
  {
    $sth = $this->db->prepare('SELECT COUNT(idPeserta) AS jumlahPeserta FROM peserta');
    $sth->execute();
    return $sth->fetchAll();
  }

  function countVote(){
    $sth = $this->db->prepare('SELECT COUNT(idVoting) AS jumlahVote FROM voting');
    $sth->execute();
    return $sth->fetchAll();
  }
}

?>
