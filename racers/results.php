<?php
include '../components/bootstrap.php';
include 'root.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="<?php echo $path ?>
css\global-style.css">
</head>

<body>
  <?php include '../components/header.php'; ?>
  <div class="container-fluid mt-5" id="media-container">
    <div class="row d-flex justify-content-center" style="overflow-x: clip;">
      <img src="<?php echo $path ?>bg/HEADER-org.jpg" class="img-zoom ">
      <h2 class="position-absolute mt-5 text-white">RESULTS</h2>
    </div>
  </div>
  <div class="container mt-5">
    <div class="row d-flex justify-content-center">
      <div class="col-lg-4 text-center">
        <select class="form-select form-control mt-4">
          <option value="1">2020</option>
          <option value="2">2021</option>
          <option value="3">2022</option>
        </select>
        <select class="form-select form-control mt-4">
          <option value="1">Results</option>
          <option value="2">Total Points</option>
          <option value="3">Points Grid</option>
        </select>
      </div>
    </div>
  </div>
</body>

</html>
