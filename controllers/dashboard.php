<?php

/**
 *
 */
class Dashboard extends Controller
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

    Session::set('page', 'dashboard');
    Session::set('akses', true);
  }

  function index()
  {
    $this->view->show = $this->model->show();
    $this->view->count = $this->model->count();
    $this->view->countVote = $this->model->countVote();
    $this->view->render('dashboard/index');
  }

  function candidate()
  {
    $this->view->count = $this->model->count();
    $this->view->countVote = $this->model->countVote();
    $this->view->showCalon = $this->model->showCalon();
    $this->view->render('dashboard/candidate');
  }

  function golput()
  {
    $this->view->count = $this->model->count();
    $this->view->countVote = $this->model->countVote();
    $this->view->render('dashboard/golput');
  }

  function vote()
  {
    $this->view->count = $this->model->count();
    $this->view->countVote = $this->model->countVote();
    $this->view->showVote = $this->model->showVote();
    $this->view->render('dashboard/vote');
  }

  function show()
  {
    $this->model->show();
  }

  function showCalon()
  {
    $this->model->showCalon();
  }

  function count()
  {
    $this->model->count();
  }

  function countVote()
  {
    $this->model->countVote();
  }

  function showVote()
  {
    $this->model->showVote();
  }

  function logout()
  {
    Session::destroy();
    header('location: ../index');
    exit;
  }
}


?>
