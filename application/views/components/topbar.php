    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="<?= base_url("assets/") ?>"><img src="<?= base_url("assets/") ?>" class="mr-2" alt="" /></a>
        <a class="navbar-brand brand-logo-mini" href="<?= base_url("assets/") ?>"><img src="<?= base_url("assets/") ?>" alt="" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>

        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div style="overflow: scroll; max-height: 13rem; overflow-x: hidden;" class="dropdown-menu  dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications <span class="ml-1">(<?= $jumlah_pesan ?>)</span></p>
              <?php foreach ($pesan as $p) : ?>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-warning">
                      <i class="ti-comment-alt mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal"><?= $p->pesan ?></h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                      <?= dateindo($p->tgl_dikirim) ?>
                    </p>
                  </div>
                </a>
              <?php endforeach ?>


            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle shadow-sm px-3 rounded-lg" style="cursor: pointer;" data-toggle="dropdown" id="profileDropdown">
              <!-- <img src="https://source.unsplash.com/200x400?<?= $this->session->nama ?>" alt="profile" /> -->
              <?= $this->session->nama ?>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a href="<?= base_url() ?>" class="dropdown-item">
                <i class="ti-home text-primary"></i>
                Beranda
              </a>
              <a href="<?= base_url('logout') ?>" class="dropdown-item">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>

        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->