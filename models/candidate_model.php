<?php
/**
 *
 */
class Candidate_Model extends Model
{

  function __construct()
  {
    parent::__construct();
  }

  public function show()
  {
    $sth = $this->db->prepare("SELECT * FROM calonKahim ORDER BY idCalon ASC");
    $sth->execute();
    return $sth->fetchAll();
  }

}
?>
