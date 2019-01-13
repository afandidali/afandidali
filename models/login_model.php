<?php
/**
 *
 */
class Login_Model extends Model
{

  function __construct()
  {
    parent::__construct();
  }

  public function run()
  {
    $username   = $_POST['username'];
    $password   = $_POST['password'];

    $sth = $this->db->prepare("SELECT username FROM admin WHERE
      username = :username AND password = MD5(:password)");

    $sth->execute(array(
      ':username' => $username,
      ':password' => $password
    ));

    //$data = $sth->fetchAll();
    $count = $sth->rowCount();
    if ($count > 0){
      // login
      Session::init();
      Session::set('loggedIn', true);
      header('location: ../dashboard');
    }else{
        header('location: ../index');
    }
  }
}
?>
