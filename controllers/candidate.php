<?php

/**
 *
 */
class Candidate extends Controller
{

  function __construct()
  {
    parent::__construct();
    Session::init();

    $logged = Session::get('loggedIn');
    if ($logged == false){
      Session::destroy();
      header('location: '.URL.'index');
      exit;
    }
  }

  function index()
  {
    Session::set('page', 'candidate');
    Session::set('akses', true);
    $this->view->show = $this->model->show();
    $this->view->render('candidate/index');
  }

  function show()
  {
    $this->model->show();
  }
}

?>
