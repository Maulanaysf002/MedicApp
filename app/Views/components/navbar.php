<nav class="navbar navbar-expand-lg bg-primary shadow sticky-top" data-bs-theme="dark">
  <div class="container">
    <a class="navbar-brand fs-4" href="#">MedicApp <i class="bi bi-capsule-pill"></i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link fs-6" href="/">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle fs-6" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Data Management</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="<?= site_url('Dokter') ?>">Data Dokter</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?= site_url('Obat') ?>">Data Obat</a>
            <a class="dropdown-item" href="<?= site_url('Pasien') ?>">Data Pasien</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>