<?php $this->extend('layouts'); ?>

<?= $this->section('content') ?>
<div class="container">
  <h3 class="mt-4">Form Edit Data Pasien</h3>

  <!-- form -->
  <form action="/Pasien/update/<?= $pasien['id_pasien'] ?>" method="post" class="mt-4">
        <?= csrf_field(); ?>
        <div class="row mb-3">
          <label for="nama_pasien" class="col-sm-2 col-form-label">Nama Pasien</label>
          <div class="col-sm-10">
            <input value="<?= $pasien['nama_pasien'] ?>" type="text" class="form-control" id="nama_pasien" name="nama_pasien" required>
          </div>
        </div>
        <div class="row mb-3">
          <label for="usia" class="col-sm-2 col-form-label">Usia</label>
          <div class="col-sm-10">
            <input value="<?= $pasien['usia'] ?>" type="number" class="form-control" id="usia" name="usia" required>
          </div>
        </div>
        <div class="row mb-3">
          <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
          <div class="col-sm-10">
            <input  value="<?= $pasien['alamat'] ?>" type="text" class="form-control" id="alamat" name="alamat" required>
          </div>
        </div>
        <div class="row mb-3">
          <label for="kelamin" class="col-sm-2 col-form-label">Kelamin</label>
          <div class="col-md-4">
            <!-- <input type="text" class="form-control" id="kelamin" name="kelamin" required> -->
            <select id="kelamin" class="form-select" name="kelamin" required>
              <option value="pria" <?= $pasien['kelamin'] == 'pria' ? 'selected' : '' ?> >pria</option>
              <option value="wanita" <?= $pasien['kelamin'] == 'wanita' ? 'selected' : '' ?>>wanita</option>
            </select>
          </div>
        </div>
        <div class="row mb-3">
          <label for="tgl-lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
          <div class="col-md-4">
            <input value="<?= $pasien['tgl_lahir'] ?>" type="date" class="form-control" id="tgl-lahir" name="tgl_lahir" required>
          </div>
        </div>
        <div class="row">
          <div class=" d-flex justify-content-end">
            <button type="submit" class="btn btn-success mx-2">Update Data</button>
            <a href="<?= site_url('Pasien') ?>" class="btn btn-primary">Back</a>
          </div>
        </div>
      </form>
  <!-- form end -->

</div>
<?= $this->endSection() ?>