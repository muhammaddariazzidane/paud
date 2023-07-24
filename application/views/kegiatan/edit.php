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
        <?= form_open_multipart('kegiatan/update/' . $kegiatan->id) ?>
        <div class="col-lg-12 shadow py-3 bg-white rounded-lg">
          <div class="form-group mb-3">
            <label for="nama_kegiatan">Nama kegiatan</label>
            <input type="text" class="form-control" id="nama_kegiatan" value="<?= $kegiatan->nama_kegiatan ?>" name="nama_kegiatan" placeholder="menggambar gunung">
            <div id="validationServerUsernameFeedback" class="invalid-feedback d-block">
              <?= form_error('nama_kegiatan') ?>
            </div>
          </div>
          <div class="form-group mb-3">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="menggambar gunung" rows="4"><?= $kegiatan->deskripsi ?></textarea>
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
          <button type="submit" class="btn btn-primary  rounded-lg">Update</button>
        </div>

        <?= form_close() ?>
      </div>

    </div>
  </div>

</div>