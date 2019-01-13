<div class="main-panel">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
    <div class="container-fluid">
      <div class="navbar-wrapper">
        <!--
          <a class="navbar-brand" href="#himatif">Login Page</a>
        -->
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URL ?>dashboard">
              <i class="material-icons">bubble_chart</i> Kreatif - Inovative - Mandiri
            </a>
          </li>
          <li class="nav-item">
            <?php if (((Session::get('loggedIn') == true) || (Session::get('akses') == true)) && (Session::get('page') != 'regis')):?>
              <a class="nav-link" href="<?php echo URL; ?>dashboard/logout">
                <i class="material-icons">reply</i> Logout
              </a>
            <?php elseif (((Session::get('loggedIn') == true) || (Session::get('akses') == true)) && (Session::get('page') == 'regis')): ?>
              <a class="nav-link" href="<?php echo URL; ?>dashboard/">
                <i class="material-icons">dashboard</i> dashboard
              </a>
            <?php endif; ?>
          </li>
          <!-- your navbar here -->
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="content">
    <div class="container-fluid">
      <?php Session::init(); ?>
