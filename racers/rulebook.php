<?php
include '../components/bootstrap.php';
include 'root.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Rulebook | AMSOIL Championship Off-Road</title>
  <link rel="stylesheet" href="<?php echo $path ?>
css\global-style.css">
</head>

<body>
  <?php include '../components/header.php'; ?>
  <div class="container-fluid mt-5" id="media-container">
    <div class="row d-flex justify-content-center" style="overflow-x: clip;">
      <img src="<?php echo $path ?>bg/HEADER-org.jpg" class="img-zoom ">
      <h2 class="position-absolute mt-5 text-white">RULEBOOK</h2>
    </div>
  </div>
  <div class="container my-5" id="rulebook">
    <div class="row justify-content-center text-white">
      <h2>2021 CHAMPIONSHIP OFF-ROAD RULE BOOK</h2>
      <p >Please send any rule book questions to <a href="mailto:tech@isocracing.com" rel="noopener" target="_blank">tech@isocracing.com</a></p>
    </div>
    <div class="row justify-content-center text-white">
      <ul>
        <li>Updated 2/26/2021 &ndash; all changes for this year are in red</li>
        <li><a href="https://champoffroad.com/rulebook/#rule-book">AMSOIL CHAMPIONSHIP OFF-ROAD RULE BOOK</a></li>
        <li><a href="https://champoffroad.com/rulebook/#pro-spec-rule-book">AMSOIL CHAMPIONSHIP OFF-ROAD PRO SPEC RULE BOOK</a></li>
      </ul>
    </div>
    <div class="row justify-content-center mt-3">
      <div class="col-lg-6">
        <a href="https://champoffroad.com/wp-content/uploads/2022-AMSOIL-CHAMPIONSHIP-OFF-ROAD-RULEBOOK-V-6.pdf" target="_blank"><img alt="2021 Rule Book" src="<?php echo $path ?>images/rulebook/RULEBOOK_COVER.jpg" /></a>
      </div>
    </div>
    <h2 class="text-center mt-4 mb-1">2021 CHAMPIONSHIP OFF-ROAD PRO SPEC RULE BOOK</h2>
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <a href="https://champoffroad.com/wp-content/uploads/PRO-Spec-Rules-3.pdf" target="_blank"><img alt="2021 Pro Spec Rule Book" src="<?php echo $path ?>images/rulebook/RULEBOOK_COVER_PROSPEC-1.jpg" /></a>
      </div>
    </div>

  </div>
  <?php include '../components/divider.php'; ?>
  <?php include '../components/footer.php'; ?>
</body>

</html>
