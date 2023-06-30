<?php $this->extend('layouts'); ?>

<?= $this->section('content') ?>
<div class="container">
  <h3 class="mt-4">Form Tambah Data Obat</h3>

  <!-- form -->
  <form action="/Obat/save" method="post" class="mt-5">
    <?= csrf_field() ?>
    <div class="row mb-3">
      <label for="nama_obat" class="col-sm-2 col-form-label">Nama Obat</label>
      <div class="col">
        <input type="text" class="form-control" id="nama_obat" name="nama_obat" required>
      </div>
    </div>
    <div class="row mb-3">
      <label for="golongan" class="col-sm-2 col-form-label">Golongan</label>
      <div class="col">
        <input type="text" class="form-control" id="golongan" name="golongan" required>
      </div>
    </div>
    <div class="row mb-3">
      <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
      <div class="col">
        <input type="text" class="form-control" id="kategori" name="kategori" required>
      </div>
    </div>
    <div class="row mb-3">
      <label for="bentuk" class="col-sm-2 col-form-label">Bentuk Obat</label>
      <div class="col">
        <input type="text" class="form-control" id="bentuk" name="bentuk" required>
      </div>
    </div>
    <div class=" d-flex justify-content-end">
      <button type="submit" class="btn btn-success mx-2">Submit Data</button>
      <a href="<?= site_url('Dokter') ?>" class="btn btn-primary">Back</a>
    </div>
  </form>
  <!-- form end -->

</div>
<?= $this->endSection() ?>