<div style="min-height: 100vh;">
  <?php $this->load->view('components/navbar') ?>

  <div class="jumbotron position-relative text-center" style="min-height: 600px;  background-image: url(<?= base_url('assets/img-contact.jpg') ?>); background-size: cover; background-repeat: no-repeat; background-position: center; background-attachment: fixed;">
    <div class="position-absolute w-100 h-100" style="z-index: 999; top:0; left: 0; right: 0; background-color: rgba(0, 0, 0, 0.7);">
      <div class="text-white" style="margin-top: 12rem;">
        <h1 class="display-4 font-weight-bold">PAUD CENDRAWASIH</h1>
        <p class="lead my-4">
          Selamat datang di website resmi PAUD CENDRAWASIH
        </p>
        <!-- <hr class="my-4"> -->
        <div class="my-4"></div>
        <a class="btn btn-primary rounded-sm" href="#" role="button">Selengkapnya</a>
        <br />
        <div class="d-flex mt-3 justify-content-center">
          <a href="" class="mx-1 text-decoration-none bg-white rounded-lg px-1 d-flex align-items-center  display-5">
            <i class="bi bi-facebook"></i>
          </a>
          <a href="" class="mx-1 text-decoration-none bg-white rounded-lg px-1 d-flex align-items-center  display-5">
            <i class="bi bi-instagram text-danger"></i>
          </a>
          <a href="" class="mx-1 text-decoration-none bg-white rounded-lg px-1 d-flex align-items-center  display-5">
            <i class="bi bi-whatsapp text-success "></i>
          </a>

        </div>
      </div>
    </div>
  </div>

  <!-- layanan -->
  <div class="py-5 px-3">
    <div class="p-3 shadow py-5 ">

      <h2 class="text-center my-3 ">Layanan Kami</h2>
      <h4 class="my-4 text-center">Paud Cendrawasih memiliki layanan yang dapat disesuaikan dengan jenjang usia anak
      </h4>
      <div class="row pt-4 d-flex justify-content-center mx-auto ">
        <div class="col-lg-5  mb-3">
          <div class="text-center">
            <i style="font-size: 3rem;" class="ti-medall text-warning"></i>
            <div class="mt-4">
              <h4 class="font-weight-bold">Lorem, ipsum dolor.</h4>
              <p>Taman Penitipan Anak (TPA) Jaya Kartika memberikan pelayanan dengan pembiasaan kegiatan sehari-hari, ilmu pengetahuan dan penguatan agama mulai rentang usia 1,5 tahun hingga 7 tahun.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-5  mb-3">
          <div class="text-center">
            <i style="font-size: 3rem;" class="ti-face-smile text-warning"></i>
            <div class="mt-4">
              <h4 class="font-weight-bold">Lorem, ipsum dolor.</h4>
              <p>Taman Penitipan Anak (TPA) Jaya Kartika memberikan pelayanan dengan pembiasaan kegiatan sehari-hari, ilmu pengetahuan dan penguatan agama mulai rentang usia 1,5 tahun hingga 7 tahun.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="row mt-5">
        <div class="col-lg-5 mx-auto">
          <div class="card border-primary mb-3" style=" border: 1px solid;">
            <div class="card-header">Header</div>
            <div class="card-body text-primary">
              <h5 class="card-title">Primary card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
      </div> -->
    </div>
  </div>
  <!-- layanan -->
  <!-- card -->
  <div class="py-5 px-3">
    <h2 class="text-center pb-5">Kegiatan Terbaru</h2>
    <div class="row d-flex justify-content-center mx-auto ">
      <?php foreach ($kegiatan as $k) : ?>
        <div class="col-lg-4 mb-3">
          <div class="card shadow-sm">
            <img src="<?= base_url('assets/img/kegiatan/' . $k->file_kegiatan) ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?= $k->nama_kegiatan ?></h5>
              <p class="card-text"><?= $k->deskripsi ?>.</p>
            </div>
            <div class="card-body">
              <a href="<?= base_url('welcome/detail_kegiatan/' . $k->id) ?>" class="card-link">Lihat selengkapnya</a>
              <!-- <a href="#" class="card-link">Another link</a> -->
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>

  </div>
  <!-- card -->
  <!-- contact -->
  <div class="py-5 ">
    <div class="bgcontact position-relative " style="max-width: 100vw; min-width: 100vw; min-height: 700px;">
      <div class="position-absolute w-100 h-100" style="z-index: 99; top: 4; background-color: rgba(0, 0, 0, 0.6);"></div>
      <div class="position-absolute w-100 py-4 px-3 " style="z-index: 9999;">
        <div class="row d-flex  justify-content-center mx-auto ">
          <div class="col-lg-7 text-white mb-3">
            <h1 class="">Kontak</h1>
            <h6 class=" pt-4">Saran dan kritik sangat kami butuhkan untuk pengembangan website sekolah kami. Silahkan kirimkan saran, kritik ataupun pertanyaan anda dengan mengisi form yang telah disediakan. Anda juga dapat mengunjungi lokasi kami pada alamat yang tertera</>
              <div class="mt-4">
                <h4 class="">Alamat</h4>
                <p>Karangrejo, RT 03 RW 05, Ngringo, Jaten, Karanganyar, Jawa Tengah</p>
              </div>
              <div class="mt-4">
                <h4>Telepon</h4>
                <p>(0271) 8200597 / 081 329 053 838 Senin - Jumat, 08:00-22:00</p>
              </div>
          </div>
          <div class="col-lg-5 mb-3">
            <!-- <form class=""> -->
            <?= form_open('welcome/kontak', ['class' => 'bg-white p-4 rounded shadow-lg']) ?>
            <h3 class="text-center mb-4">Hubungi Kami</h3>
            <div class="form-group">
              <label for="Nama">Nama</label>
              <input required type="text" class="form-control" placeholder="Isi nama anda" name="nama" id="Nama" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input required type="email" class="form-control" placeholder="Isi email anda" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="pesan">Pesan</label>
              <textarea required class="form-control" placeholder="Tulis pesan anda" rows="3" name="pesan" id="pesan"></textarea>
            </div>
            <button type="submit" class="btn btn-success rounded-lg">Kirim</button>
            <!-- </form> -->
            <?= form_close() ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- contact -->
  <!-- footer -->
  <div class="pt-5 mt-5 px-3">

    <footer class="py-4 mt-4 bg-light">
      <p class="text-center">Copyright © 2023 PAUD CENDRAWASIH</p>
    </footer>
    <!-- footer -->
  </div>
</div>
<?php if ($this->session->success) : ?>
  <script>
    alert('<?= $this->session->success ?>')
  </script>
<?php endif ?>