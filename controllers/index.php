<?php

/**
 *
 */
class Index extends Controller
{

  function __construct()
  {
    parent::__construct();
    Session::init();
    $logged = Session::get('loggedIn');
    if ($logged == true){
      header('location: '.URL.'dashboard');
      exit;
    }
  }

  function index()
  {
    Session::set('page', 'index');
    $this->view->render('index/index');
  }

  function details()
  {
    $this->view->render('index/details');
  }
}

?>
