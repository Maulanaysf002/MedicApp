<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?></title>
  <!-- bootstrap 5 css (sandstone) -->
  <!-- <link rel="stylesheet" href="bootstrap-5.3.0-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap-5.3.0-dist/css/bootstrap(sandstone).css"> -->
  <link rel="stylesheet" href="bootstrap-icons-1.10.5\font\bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootswatch@5.3.0/dist/sandstone/bootstrap.min.css" rel="stylesheet">
  
  <!-- vanila css -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- navbar -->
<?= $this->include('components/navbar') ?>
<!-- navbar end-->

<!-- konten -->
<?= $this->renderSection('content') ?>
<!-- konten end-->

<!-- footer -->
<?= $this->include('components/footer') ?>
<!-- footer end-->

<!-- bootstrap 5 js (sandstone) -->
<script src="bootstrap-5.3.0-dist/js/bootstrap.min.js"></script>
<script src="bootstrap-5.3.0-dist/js/bootstrap.bundle.js"></script>
<script src="bootstrap-5.3.0-dist/js/bootstrap.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>