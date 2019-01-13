<?php
  /**
   *
   */
  class View
  {

    function __construct()
    {
      //echo 'This is the view';
    }

    public function render($name, $noInclude = false)
    {
      if ($noInclude == true){
        require 'views/' . $name . '.php';
      }
      else {
        require 'views/template/header.php';
        require 'views/template/sidebar.php';
        require 'views/template/navbar.php';
        require 'views/' . $name . '.php';
        require 'views/template/footer.php';
      }
    }
  }

?>
