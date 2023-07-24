<div class="position-relative top-0" style="min-height: 100vh; background-image: url(<?= base_url('assets/img-contact.jpg') ?>); background-position: center; background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
  <?php $this->load->view('components/navbar') ?>
  <!-- <h2 class="text-center mt-5 pt-5 font-weight-bold text-white">Galeri</h2> -->
  <div sty class="row py-5 px-4 mx-3" style="padding-top: 160px !important;">
    <?php foreach ($gallery as $g) : ?>
      <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-3 p-0 shadow">
        <div class="card rounded-lg">
          <div class="card-body">
            <img src="<?= base_url('assets/img/gallery/' . $g->file_gallery) ?>" class="card-img-top" alt="">
          </div>
        </div>
      </div>
    <?php endforeach ?>
  </div>
</div>