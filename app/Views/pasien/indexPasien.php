<?= $this->extend('layouts') ?>

<?= $this->section('content') ?>
<div class="container">
  <h3 class="mt-4">Pasien Table</h3>

  <!-- add data link -->
  <div class="d-flex justify-content-end">
    <a href="/Pasien/create" class="btn btn-secondary"><i class="bi bi-plus"></i> Create</a>
  </div>
  <!-- table -->
  <div class="table-responsive mt-2">
    <table class="table table-bordered align-middle">
      <thead class="table-info">
        <tr>
          <th scope="col" >No</th>
          <th scope="col"  >Nama Pasien</th>
          <th scope="col" >Usia</th>
          <th scope="col" >Alamat</th>
          <th scope="col"  >Kelamin</th>
          <th scope="col" >Tanggal Lahir</th>
          <th scope="col" >Action</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($pasien as $row): ?>
        <tr >
          <td><?= $nomor++ ?></td>
          <td ><?= $row['nama_pasien'] ?></td>
          <td><?= $row['usia'] ?></td>
          <td><?= $row['alamat'] ?></td>
          <td><?= $row['kelamin'] ?></td>
          <td><?= $row['tgl_lahir'] ?></td>
          <td class="d-flex gap-1">
            <a href="/Pasien/edit/<?= $row['id_pasien'] ?>" class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i></a>
            <form action="/Pasien/delete/<?= $row['id_pasien'] ?>" method="post">
              <input type="hidden" value="DELETE" name="_method">
              <button class="btn btn-sm btn-danger" onclick="confirm('Apakah anda yakin ingin menghapus data ?')"><i class="bi bi-trash3"></i></button>
            </form>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <!-- table end -->

  <!-- pager -->
  <?= $pager->links('pasien', 'my_pagers') ?>

  <!-- alert data save -->
  <?php if(session()->getFlashdata('save')) : ?>
    <script>
      alert('<?= session()->getFlashdata('save') ?>');
    </script>
  <?php endif; ?>
  <!-- alert data delete -->
  <?php if(session()->getFlashdata('delete')) : ?>
    <script>
      alert('<?= session()->getFlashdata('delete') ?>');
    </script>
  <?php endif; ?>
  <!-- alert data delete -->
  <?php if(session()->getFlashdata('update')) : ?>
    <script>
      alert('<?= session()->getFlashdata('update') ?>');
    </script>
  <?php endif; ?>

</div>
<?= $this->endSection() ?>