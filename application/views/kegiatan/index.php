<?php $this->load->view('components/topbar') ?>
<div class="container-fluid page-body-wrapper">
  <?php $this->load->view('components/theme_setting') ?>
  <!-- partial -->
  <!-- partial:partials/_sidebar.html -->
  <?php $this->load->view('components/sidebar') ?>
  <!-- partial -->
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary rounded-lg" data-toggle="modal" data-target="#exampleModal">
          Tambah kegiatan
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <?= form_open_multipart('kegiatan/store', ['class' => 'modal-content']) ?>
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Form tambah kegiatan</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-group mb-3">
                <label for="nama_kegiatan">Nama kegiatan</label>
                <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" placeholder="menggambar gunung">
                <div id="validationServerUsernameFeedback" class="invalid-feedback d-block">
                  <?= form_error('nama_kegiatan') ?>
                </div>
              </div>
              <div class="form-group mb-3">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="menggambar gunung" rows="4"></textarea>
                <div id="validationServerUsernameFeedback" class="invalid-feedback d-block">
                  <?= form_error('deskripsi') ?>
                </div>
              </div>
              <div class="form-group mb-">
                <label for="file_kegiatan">File materi</label>
                <div class="custom-file">
                  <!-- <input type="file" name="file_kegiatan" id="" class="form-control-file"> -->
                  <input type="file" class="custom-file-input " name="file_kegiatan" id="customFile">
                  <label class="custom-file-label" for="customFile">Choose file</label>
                  <div id="validationServerUsernameFeedback" class="invalid-feedback d-block">
                    <?= form_error('file_kegiatan') ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary rounded-lg" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary  rounded-lg">Tambah</button>
            </div>
            <?= form_close() ?>
          </div>
        </div>
      </div>
      <!-- table -->
      <div class="row mt-4">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <p class="card-title">Data kegiatan</p>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive table-hover">
                    <table id="" class="display expandable-table" style="width:100%">
                      <thead>
                        <tr class="text-center">
                          <th>No</th>
                          <th>Nama Kegiatan</th>
                          <th>Deskripsi</th>
                          <th>Foto kegiatan</th>
                          <th>Tanggal kegiatan</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 1;
                        foreach ($kegiatan as $k) : ?>
                          <tr class="text-center">
                            <td><?= $i++ ?></td>
                            <td class="font-weight-bold"><?= $k->nama_kegiatan ?></td>
                            <td><?= $k->deskripsi ?></td>
                            <td>
                              <img src="<?= base_url('assets/img/kegiatan/' . $k->file_kegiatan) ?>" width="50" alt="">
                            </td>
                            <td><?= dateindo($k->post_at) ?></td>
                            <td class="font-weight-medium">
                              <a href="<?= base_url('edit_kegiatan/' . $k->id) ?>" class="badge badge-info">Edit</a>
                              <a href="<?= base_url('kegiatan/delete/' . $k->id) ?>" onclick="return confirm('yakin mau hapus kegiatan?')" class="badge badge-danger">Hapus</a>
                            </td>
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