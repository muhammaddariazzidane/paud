<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <?= form_open_multipart('materi/store', ['class' => 'modal-content']) ?>

    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Form tambah materi</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <div class="form-group mb-3">
        <label for="judul_materi">Judul materi</label>
        <input type="text" class="form-control" id="judul_materi" name="judul_materi" placeholder="menggambar gunung">
      </div>
      <div class="form-group mb-">
        <label for="file_materi">File materi</label>

        <div class="custom-file">
          <input type="file" class="custom-file-input " name="file_materi" id="customFile">
          <label class="custom-file-label" for="customFile">Choose file</label>
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