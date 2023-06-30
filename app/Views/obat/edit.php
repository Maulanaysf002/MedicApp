<?php $this->extend('layouts'); ?>

<?= $this->section('content') ?>
<div class="container">
  <h3 class="mt-4">Form Edit Data Obat</h3>

  <!-- form -->
  <form action="/Obat/update/<?= $obat['id_obat'] ?>" method="post" class="mt-5">
    <?= csrf_field() ?>
    <div class="row mb-3">
      <label for="nama" class="col-sm-2 col-form-label">Nama Obat</label>
      <div class="col">
        <input value="<?= $obat['nama_obat'] ?>" type="text" class="form-control" id="nama" name="nama_obat" required>
      </div>
    </div>
    <div class="row mb-3">
      <label for="asal" class="col-sm-2 col-form-label">Golongan</label>
      <div class="col">
        <input value="<?= $obat['golongan'] ?>" type="text" class="form-control" id="asal" name="golongan" required>
      </div>
    </div>
    <div class="row mb-3">
      <label for="keahlian" class="col-sm-2 col-form-label">Kategori</label>
      <div class="col">
        <input value="<?= $obat['kategori'] ?>" type="text" class="form-control" id="keahlian" name="kategori" required>
      </div>
    </div>
    <div class="row mb-3">
      <label for="nomor_IDI" class="col-sm-2 col-form-label">Bentuk</label>
      <div class="col">
        <input value="<?= $obat['bentuk'] ?>" type="text" class="form-control" id="nomor_IDI" name="bentuk" required>
      </div>
    </div>
    <div class=" d-flex justify-content-end">
      <button type="submit" class="btn btn-success mx-2">Update Data</button>
      <a href="<?= site_url('Obat') ?>" class="btn btn-primary">Back</a>
    </div>
  </form>
  <!-- form end -->

</div>
<?= $this->endSection() ?>