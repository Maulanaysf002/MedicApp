<?= $this->extend('layouts') ?>

<?= $this->section('content') ?>
<div class="container">
  <h3 class="mt-4">Obat Table</h3>

  <!-- add data link -->
  <div class="d-flex justify-content-end">
    <a href="/Obat/create" class="btn btn-secondary"><i class="bi bi-plus"></i> Create</a>
  </div>
  <!-- table -->
  <div class="table-responsive mt-2">
    <table class="table table-bordered align-middle">
      <thead class="table-info">
        <tr>
          <th scope="col" width="40px" >No</th>
          <th scope="col" width="150px" >Nama Obat</th>
          <th scope="col" width="150px" >Golongan</th>
          <th scope="col" width="400px" >Kategori</th>
          <th scope="col" width="250px" >Bentuk</th>
          <th scope="col" width="50px" >Action</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($obat as $row): ?>
        <tr >
          <td><?= $nomor++ ?></td>
          <td ><?= $row['nama_obat'] ?></td>
          <td><?= $row['golongan'] ?></td>
          <td><?= $row['kategori'] ?></td>
          <td><?= $row['bentuk'] ?></td>
          <td class="d-flex gap-1">
            <a href="/Obat/edit/<?= $row['id_obat'] ?>" class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i></a>
            <form action="/Obat/delete/<?= $row['id_obat'] ?>" method="post">
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
  <?= $pager->links('obat', 'my_pagers') ?>

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