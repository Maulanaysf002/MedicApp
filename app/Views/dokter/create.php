<?php $this->extend('layouts'); ?>

<?= $this->section('content') ?>
<div class="container">
  <h3 class="mt-4">Form Tambah Data Dokter</h3>

  <!-- form -->
  <form action="/Dokter/save" method="post" class="mt-5">
    <?= csrf_field() ?>
    <div class="row mb-3">
      <label for="nama" class="col-sm-2 col-form-label">Nama Dokter</label>
      <div class="col">
        <input type="text" class="form-control" id="nama" name="nama_dokter" required>
      </div>
    </div>
    <div class="row mb-3">
      <label for="asal" class="col-sm-2 col-form-label">Asal</label>
      <div class="col">
        <input type="text" class="form-control" id="asal" name="asal" required>
      </div>
    </div>
    <div class="row mb-3">
      <label for="keahlian" class="col-sm-2 col-form-label">Keahlian</label>
      <div class="col">
        <input type="text" class="form-control" id="keahlian" name="keahlian" required>
      </div>
    </div>
    <div class="row mb-3">
      <label for="nomor_IDI" class="col-sm-2 col-form-label">Nomor IDI</label>
      <div class="col">
        <input type="number" class="form-control" id="nomor_IDI" name="nomor_IDI" required>
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