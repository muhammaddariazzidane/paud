<div class="container-fluid">
  <div class="row py-5 ">
    <div class="col-lg-4 rounded shadow mx-auto">
      <div class="my-4 text-center">
        <h2>Register</h2>
      </div>
      <div class="card">
        <div class="card-body">
          <div class="form-body">
            <?= form_open('register', ['class' => 'row g-3']) ?>
            <div class="col-12 mb-3">
              <label for="inputEmailAddress" class="form-label">Nama</label>
              <input required type="text" value="<?= set_value('nama') ?>" class="form-control" id="nama" placeholder="John doe" name="nama" autocomplete="off">
              <div id="validationServerUsernameFeedback" class="invalid-feedback d-block">
                <?= form_error('nama') ?>
              </div>
            </div>
            <div class="col-12 mb-3">
              <label for="inputEmailAddress" class="form-label">Email Address</label>
              <input required type="email" value="<?= set_value('email') ?>" class="form-control" id="inputEmailAddress" placeholder="Email Address" name="email" autocomplete="off">
              <div id="validationServerUsernameFeedback" class="invalid-feedback d-block">
                <?= form_error('email') ?>
              </div>
            </div>
            <div class="col-12 mb-3">
              <label for="inputChoosePassword" class="form-label">Password</label>
              <div class="input-group" id="show_hide_password">
                <input required type="password" class="form-control border-end-0" id="inputChoosePassword" name="password" placeholder="Enter Password">
                <div id="validationServerUsernameFeedback" class="invalid-feedback d-block">
                  <?= form_error('password') ?>
                </div>
              </div>
            </div>
            <p class="px-3 mt-2">
              Sudah puya akun?
              <a href="<?= base_url('login') ?>" class="text-decoration-underline ms-1">Login disini</a>
            </p>
            <div class="col-12">
              <button type="submit" class="btn btn-primary rounded-sm">Register</button>
            </div>
            <?= form_close() ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--end row-->
</div>