<?= $this->extend('layouts') ?>

<?= $this->section('content') ?>
<div class="container">
  <h3 class="mt-4" style="font-weight: bold;">Welcome To MedicApp...</h3>

  <!-- tugas name -->
  <div class="card mt-5">
    <div class="card-header">
      Tugas Pemograman Web
    </div>
    <div class="card-body">
      <h5 class="card-title">MedicApp</h5>
      <p class="card-text">adalah Aplikasi yang dibuat untuk manajemen data dokter, obat dan pasien. dengan CRUD sederhana yang terkoneksi kedatabase mysql dengan framework CodeIgniter 4</p>
    </div>
  </div>
  <!-- tugas name end-->

  <!-- card ruangan -->
  <h3 class="mt-5 fs-4" >Special Rooms</h3>
  <div class="row mt-4 d-flex flex-row">
    <!-- card 1 -->
    <div class="col-md-6">
      <div class="card mb-3 shadow-sm " style="max-width: 540px; height: 150px;">
        <div class="row g-0 h-100">
          <div class="col-md-4">
            <img src="/img/room-1.jpg" class="img-fluid rounded-start h-100 w-100" alt="room 1" >
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Operating Room</h5>
              <p class="card-text small">this is a special room that is never closed to treat patients who need surgery</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- card 1 end -->
    <!-- card 2 -->
    <div class="col-md-6">
      <div class="card mb-3 shadow-sm " style="max-width: 540px; height: 150px;">
        <div class="row g-0 h-100">
          <div class="col-md-4">
            <img src="/img/room-3.jpg" class="img-fluid rounded-start h-100 w-100 " alt="room 1" >
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">VIP Room</h5>
              <p class="card-text small">This is a VIP room for you with super complete care facilities</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- card 2 end -->
    <!-- card 3 -->
    <div class="col-md-6">
      <div class="card mb-3 shadow-sm " style="max-width: 540px; height: 150px;">
        <div class="row g-0 h-100">
          <div class="col-md-4">
            <img src="/img/room-2.jpg" class="img-fluid rounded-start h-100 w-100 " alt="room 1" >
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Dentist Special Room</h5>
              <p class="card-text small">This is a fun dentist's office with a feel that doesn't make you afraid to treat your teeth</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- card 3 end -->
    <!-- card 4 -->
    <div class="col-md-6">
      <div class="card mb-3 shadow-sm " style="max-width: 540px; height: 150px;">
        <div class="row g-0 h-100">
          <div class="col-md-4">
            <img src="/img/room-4.jpg" class="img-fluid rounded-start h-100 w-100" alt="room 1" >
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Laboratorium Room</h5>
              <p class="card-text small">this is the room where our lab team is always ready to test your test results and provide them in a timely manner</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- card 4 end -->
  </div>
  <!-- card ruangan end -->

  <!-- fasilitas -->
  <h3 class="mt-5 fs-4" >Our Facility</h3>
  <div id="carouselExampleCaptions" class="carousel slide mt-4">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner ">
      <div class="carousel-item active">
        <img src="/img/garden-facilities.jpg" class="d-block w-100 rounded-2" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Beautiful Back Garden</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/img/canteen-facility.jpg" class="d-block w-100 rounded-2" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Clean Canteen</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/img/medical-device.jpg" class="d-block w-100 rounded-2" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>International Medical Device Standart</h5>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- fasilitas end -->

  <!-- Dokter Berpengalaman -->
  <h3 class="mt-5 fs-4">Licensed Doctor</h3>
  <div class="row d-flex mt-4">
    <!-- card doctor 1 -->
    <div class="col-md-4">
      <div class="card shadow-sm" style="width: 18rem;">
        <img src="/img/doctor-1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>      
    </div>
    <!-- card doctor 1 -->
    <div class="col-md-4">
      <div class="card shadow-sm" style="width: 18rem;">
        <img src="/img/doctor-2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>      
    </div>
    <!-- card doctor 1 -->
    <div class="col-md-4">
      <div class="card shadow-sm" style="width: 18rem;">
        <img src="/img/doctor-3.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>      
    </div>
  </div>

  <!-- Dokter Berpengalaman end -->


</div>
<?= $this->endSection() ?>