<?= $this->extend('layouts') ?>

<?= $this->section('content') ?>
<div class="container">
  <h3 class="mt-4">Dokter Table</h3>

  <!-- add data link -->
  <div class="d-flex justify-content-end">
    <a href="/Dokter/create" class="btn btn-secondary"><i class="bi bi-plus"></i> Create</a>
  </div>
  <!-- table -->
  <div class="table-responsive mt-2">
    <table class="table table-bordered align-middle">
      <thead class="table-info">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Dokter</th>
          <th scope="col">Asal</th>
          <th scope="col">Keahlian</th>
          <th scope="col">Nomor IDI</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($dokter as $row): ?>
        <tr>
          <td><?= $nomor++ ?></td>
          <td><?= $row['nama'] ?></td>
          <td><?= $row['asal'] ?></td>
          <td><?= $row['keahlian'] ?></td>
          <td><?= $row['nomor_IDI'] ?></td>
          <td class="d-flex gap-1 ">
            <a href="/Dokter/edit/<?= $row['id_dokter'] ?>" class="btn btn-sm btn-warning w-50"><i class="bi bi-pencil-square"></i></a>
            <form action="/Dokter/delete/<?= $row['id_dokter'] ?>" method="post">
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
  <?= $pager->links('dok', 'my_pagers') ?>

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