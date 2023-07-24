<div style="min-height: 100vh;">
    <?php $this->load->view('components/navbar') ?>
    <div class="py-5 mt-5">
        <div class="d-flex row justify-content-center">
            <div class="col-lg-7">

                <div class="card    shadow">
                    <img src="<?= base_url('assets/img/kegiatan/' . $kegiatan->file_kegiatan) ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $kegiatan->nama_kegiatan ?></h5>
                        <p class="card-text"><?= $kegiatan->deskripsi ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>