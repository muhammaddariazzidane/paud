<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url("dashboard") ?>">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <!-- <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <i class="icon-layout menu-icon"></i>
        <span class="menu-title">Pembelajaran</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="<?= base_url("materi") ?>">Data materi</a></li>
          <li class="nav-item"> <a class="nav-link" href="<?= base_url("materi/pengajuan") ?>">Pengajuan materi</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url("siswa") ?>">
        <i class="ti-user menu-icon"></i>
        <span class="menu-title">Data siswa</span>
      </a>
    </li> -->
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url("kegiatan") ?>">
        <i class="ti-calendar menu-icon"></i>
        <span class="menu-title">Kegiatan</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url("gallery") ?>">
        <i class="ti-image menu-icon"></i>
        <span class="menu-title">Gallery</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url("logout") ?>">
        <i class="ti-power-off menu-icon"></i>
        <span class="menu-title">Logout</span>
      </a>
    </li>

  </ul>
</nav>
<!-- partial -->