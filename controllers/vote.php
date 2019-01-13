<?php

/**
 *
 */
class Vote extends Controller
{

  function __construct()
  {
    parent::__construct();
  }

  function index()
  {
    Session::init();
    Session::set('page', 'vote');
    $logged = Session::get('loggedIn');
    if ($logged == true){
      header('location: '.URL.'dashboard');
      exit;
    }
    $this->view->render('vote/index');
  }

  function run()
  {
    $this->model->run();
  }

  function decVote()
  {
    $this->model->decVote();
  }

  function step2()
  {
    Session::set('page', 'vote');
    $this->view->showCalon = $this->model->showCalon();
    $this->view->render('vote/step2');
  }

  function hasil()
  {
    Session::init();
    $logged = Session::get('loggedIn');
    if ($logged == false){
      Session::destroy();
      header('location: '.URL.'index');
      exit;
    }
    Session::set('page', 'vote');
    Session::set('akses', true);
    $this->view->showCalon = $this->model->showCalon();
    $this->view->countHasil = $this->model->countHasil();
    $this->view->render('vote/hasil');
  }

  function showCalon()
  {
    $this->model->showCalon();
  }
}

?>
