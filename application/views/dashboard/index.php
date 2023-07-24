<?php
$role_id = $this->session->role_id;
?>
<?php $this->load->view('components/topbar') ?>
<div class="container-fluid page-body-wrapper">
  <?php $this->load->view('components/theme_setting') ?>
  <!-- partial -->
  <!-- partial:partials/_sidebar.html -->
  <?php $this->load->view('components/sidebar') ?>
  <!-- partial -->
  <div class="main-panel">
    <div class="content-wrapper">
      <!--  -->
      <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
              <h3 class="font-weight-bold">Selamat datang <?= $this->session->nama ?> </h3>
              <!-- <h6 class="font-weight-normal mb-0">Kamu punya <span class="text-primary"><?= $pengajuan_materi ?> pengajuan materi yang belum disetujui!</span></h6> -->
            </div>
            <div class="col-12 col-xl-4">
              <div class="justify-content-end d-flex">
                <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                  <button class="btn btn-sm btn-light bg-white " type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Hari ini <?= dateindo(date('Y-m-d')) ?>
                  </button>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--  -->
      <!-- row 2 -->
      <?php if ($role_id == 1) : ?>
        <div class="row d-flex ">

          <!-- <div class="col-md-3 col-sm-4 col-6 mb-4 stretch-card transparent">
            <div class="card bg-dark text-white">
              <div class="card-body">
                <p class="mb-4">Jumlah materi</p>
                <p class="fs-30 mb-2"><?= $materi ?></p>

              </div>
            </div>
          </div> -->
          <div class="col-md-3 col-sm-4 col-6 mb-4 stretch-card transparent">
            <div class="card bg-primary text-white">
              <div class="card-body">
                <p class="mb-4">Jumlah guru</p>
                <p class="fs-30 mb-2"><?= $guru ?></p>
              </div>
            </div>
          </div>
          <!-- <div class="col-md-3 col-sm-4 col-6 mb-4 stretch-card transparent">
              <div class="card bg-success text-white">
                <div class="card-body">
                  <p class="mb-4">Jumlah pengajuan materi</p>
                  <p class="fs-30 mb-2"><?= $pengajuan_materi ?></p>
                </div>
              </div>
            </div> -->
          <div class="col-md-3 col-sm-4 col-6 mb-4 stretch-card transparent">
            <div class="card bg-warning text-white">
              <div class="card-body">
                <p class="mb-4">Jumlah pengguna</p>
                <p class="fs-30 mb-2"><?= $users ?></p>
              </div>
            </div>
          </div>

        </div>
      <?php endif ?>
      <!-- row 2 -->
      <!-- row 3 -->
      <?php if ($role_id == 1) : ?>
        <div class="row mt-4">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <p class="card-title">Data pengguna</p>
                <div class="row">
                  <div class="col-12">
                    <div class="table-responsive table-hover">
                      <!-- <table id="example" class="display expandable-table" style="width:100%"> -->
                      <table id="" class="display expandable-table" style="width:100%">
                        <thead>
                          <tr class="text-center">
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $i = 1;
                          foreach ($user as $u) : ?>
                            <?php if ($u->role_id != 1) : ?>
                              <tr class="text-center">
                                <td><?= $i++ ?></td>
                                <td class="font-weight-bold"><?= $u->nama ?></td>
                                <td><?= $u->email ?></td>

                                <td><?= $u->role_id == 1 ? 'Kepala sekolah' : ($u->role_id == 2 ? 'Guru' : 'Pengguna') ?></td>
                                <td>
                                  <a href="" class="badge badge-info">Edit</a>
                                  <a href="<?= base_url('dashboard/delete_user/' . $u->id) ?>" class="badge badge-danger">Hapus</a>
                                </td>
                              </tr>
                            <?php endif ?>
                          <?php endforeach ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endif ?>
      <!-- row 3 -->
    </div>
    <!-- content-wrapper ends -->

  </div>
  <!-- main-panel ends -->
</div>