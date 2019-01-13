<div class="sidebar" data-color="purple" data-background-color="white" data-image="<?php echo URL; ?>public/images/sidebar-1.jpg">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
-->
  <div class="logo">
    <a href="<?php echo URL ?>dashboard" class="simple-text logo-normal">
      KPU HIMATIF 2018
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <?php if ((Session::get('akses') == true) && (Session::get('page') != 'regis')):?>
        <li class="nav-item <?php if (Session::get('page') == 'dashboard') echo 'active'; ?> ">
          <a class="nav-link" href="<?php echo URL; ?>dashboard">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item <?php if (Session::get('page') == 'candidate') echo 'active'; ?> ">
          <a class="nav-link" href="<?php echo URL; ?>candidate">
            <i class="material-icons">recent_actors</i>
            <p>Calon Kahim</p>
          </a>
        </li>
        <li class="nav-item <?php if (Session::get('page') == 'regis') echo 'active'; ?> ">
          <a class="nav-link" href="<?php echo URL; ?>regis">
            <i class="material-icons">supervisor_account</i>
            <p>Regis Peserta</p>
          </a>
        </li>
        <li class="nav-item <?php if (Session::get('page') == 'vote') echo 'active'; ?> ">
          <a class="nav-link" href="<?php echo URL; ?>vote/hasil">
            <i class="material-icons">content_paste</i>
            <p>Hasil Voting</p>
          </a>
        </li>
      <?php elseif ((Session::get('akses') == true) && (Session::get('page') == 'regis')): ?>
        <li class="nav-item <?php if (Session::get('page') == 'regis') echo 'active'; ?> ">
          <a class="nav-link" href="<?php echo URL; ?>regis">
            <i class="material-icons">supervisor_account</i>
            <p>Regis Peserta</p>
          </a>
        </li>
      <?php else: ?>
        <li class="nav-item <?php if (Session::get('page') == 'index') echo 'active';?> ">
          <a class="nav-link" href="<?php echo URL; ?>index">
            <i class="material-icons">dashboard</i>
            <p>Main Page</p>
          </a>
        </li>
        <li class="nav-item <?php if (Session::get('page') == 'vote') echo 'active';?> ">
          <a class="nav-link" href="<?php echo URL; ?>vote">
            <i class="material-icons">how_to_vote</i>
            <p>Vote</p>
          </a>
        </li>
      <?php endif; ?>
      <!-- your sidebar here -->
    </ul>
  </div>
</div>
