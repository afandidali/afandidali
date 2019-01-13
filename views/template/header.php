<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8" />
  <!-- favicon
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo URL; ?>public/images/fav.png">
    <link rel="icon" type="image/png" href="<?php echo URL; ?>public/images/fav.png">
  -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    KPU HIMATIF 2018
  </title>

  <link rel="stylesheet" href="<?php echo URL; ?>public/css/default.css"  />
  <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.js"></script>
  <script type="text/javascript" src="<?php echo URL; ?>public/js/custom.js"></script>

  <!-- Template material -->
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!-- Fonts and icons -->
  <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/icons.css" />
  <link rel="stylesheet" href="<?php echo URL; ?>public/css/font.css">
  <link href="<?php echo URL; ?>public/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <!-- //Template material -->

  <!-- Data table -->
  <script type="text/javascript" src="<?php echo URL; ?>public/DataTables/media/js/jquery.js"></script>
  <script type="text/javascript" src="<?php echo URL; ?>public/DataTables/media/js/jquery.dataTables.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/DataTables/media/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/DataTables/media/css/dataTables.bootstrap.css">
  <!-- ///Data table -->

  <?php
    if (isset($this->js))
    {
      foreach ($this->js as $js) {
        echo '<script type="text/javascript" src="'.URL.'views/'.$js.'"></script>';
      }
    }
  ?>
</head>
<body>

<div class="wrapper ">
