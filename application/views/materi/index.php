<?php $role_id = $this->session->role_id;
$this->load->view('components/topbar') ?>
<div class="container-fluid page-body-wrapper">
  <?php $this->load->view('components/theme_setting') ?>
  <!-- partial -->
  <!-- partial:partials/_sidebar.html -->
  <?php $this->load->view('components/sidebar') ?>
  <!-- partial -->
  <div class="main-panel">
    <div class="content-wrapper">
      <?php if ($role_id == 1) : ?>
        <div class="row">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary rounded-lg" data-toggle="modal" data-target="#exampleModal">
            Tambah materi
          </button>

          <!-- Modal -->
          <?php $this->load->view('components/modal/modal_materi') ?>

        </div>
      <?php endif ?>


      <!-- table -->
      <div class="row mt-4">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <p class="card-title">Data materi</p>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive table-hover">
                    <table id="" class="display expandable-table" style="width:100%">
                      <thead>
                        <tr class="text-center">
                          <th>No</th>
                          <th>Judul materi</th>
                          <th>File materi</th>
                          <th>Tanggal Dibuat</th>
                          <th>Status</th>
                          <?php if ($role_id == 1) : ?>
                            <th>Aksi</th>
                          <?php endif ?>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 1;
                        foreach ($materi as $k) : ?>
                          <tr class="text-center">
                            <td><?= $i++ ?></td>
                            <td class="font-weight-bold"><?= $k->judul_materi ?></td>
                            <td>
                              <a href="<?= base_url('assets/file/' . $k->file_materi) ?>" class="badge badge-success">Print materi <i class="ti-eye"></i></a>
                            </td>
                            <td><?= dateindo($k->tgl_dibuat) ?></td>
                            <td><?= $k->status == 1 ? 'Dalam pembelajaran' : 'Pending' ?></td>
                            <?php if ($role_id == 1) : ?>
                              <td class="font-weight-medium">
                                <a href="#" class="badge badge-info">Edit</a>
                                <a href="<?= base_url('materi/delete/' . $k->id) ?>" onclick="return confirm('yakin mau hapus materi?')" class="badge badge-danger">Hapus</a>
                              </td>
                            <?php endif ?>
                          </tr>
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
      <!-- table -->
    </div>
  </div>

</div>