<div class="container-fluid">
  <div class="row my-5">
    <div class="col-lg-4 rounded shadow mx-auto">
      <div class="my-4 text-center">
        <h2> Login</h2>
      </div>
      <?php if ($this->session->success) : ?>
        <div class="alert alert-success alert-dismissible " role="alert">
          <?= $this->session->success ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php endif ?>
      <?php if ($this->session->error) : ?>
        <div class="alert alert-danger alert-dismissible " role="alert">
          <?= $this->session->error ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> <?php endif ?>
      <div class="card">
        <div class="card-body">
          <div class="form-body">
            <?= form_open('login', ['class' => 'row g-3']) ?>
            <div class="col-12 mb-3">
              <label for="email" class="form-label">Email Address</label>
              <input type="email" class="form-control" id="email" placeholder="Email Address" name="email" autocomplete="off">
            </div>
            <div class="col-12 mb-3">
              <label for="password" class="form-label">Password</label>
              <div class="input-group" id="show_hide_password">
                <input type="password" class="form-control border-end-0" id="password" name="password" placeholder="Enter Password">
              </div>
            </div>
            <p class="mt-2 px-3">
              Belum puya akun?
              <a href="<?= base_url('register') ?>" class="text-decoration-underline ms-1">Register disini</a>
            </p>
            <div class="col-12">
              <button type="submit" class="btn btn-primary rounded-sm">Login</button>
            </div>
            <?= form_close() ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--end row-->
</div>