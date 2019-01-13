<?php

/**
 *
 */
class Regis extends Controller
{

  function __construct()
  {
    parent::__construct();
    Session::init();
    Session::set('page', 'regis');
    Session::set('akses', true);

    $this->view->js = array('regis/js/default.js');

    $logged = Session::get('loggedIn');
    if ($logged == false){
      Session::destroy();
      header('location: '.URL.'index');
      exit;
    }
  }

  function index()
  {
    $this->view->render('regis/index');
  }

  function code()
  {
    $this->view->showCode = $this->model->showCode();
    $this->view->render('regis/code');
  }

  function showCode(){
    $this->model->showCode();
  }

  function add()
  {
    $this->model->add();
  }
}

?>
