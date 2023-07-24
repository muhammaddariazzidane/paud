<?php
$role_id = $this->session->role_id;
?>
<nav style="z-index: 99999;" class="navbar  shadow-none fixed-top navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="#">PAUD CENDRAWASIH</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNavDropdown">
      <ul class="navbar-nav align-items-center ml-auto text-right">
        <li class="nav-item ">
          <a class="nav-link text-white" href="<?= base_url() ?>">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#kegiatan">Kegiatan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="<?= base_url('welcome/gallery') ?>">Galeri</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Tentang kami</a>
        </li>
        <?php if ($role_id) : ?>
          <?php if ($role_id != 3) : ?>
            <li class="nav-item">
              <a class="nav-link text-white" href="<?= base_url('dashboard') ?>">Dashboard</a>
            </li>
          <?php endif ?>
          <li class="nav-item">
            <a href="<?= base_url('logout') ?>" class="nav-link  active btn rounded-lg bg-danger">Logout</a>
          </li>
        <?php else : ?>
          <li class="nav-item">
            <a href="<?= base_url('login') ?>" class="nav-link active btn rounded-lg bg-success">Login</a>
          </li>
        <?php endif ?>
      </ul>
    </div>
  </div>
</nav>