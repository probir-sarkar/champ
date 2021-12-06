<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'components/bootstrap.php';?>
    <link rel="stylesheet" href="css\global-style.css">
</head>
<body>
    <?php include 'components/header.php'; ?>
    <div class="container-fluid mt-5" id="media-container">
        <div class="row d-flex justify-content-center" style="overflow-x: clip;">
            <img src="bg/HEADER-org.jpg" class="img-zoom ">
            <h2 class="position-absolute mt-5 text-white">SOCIAL</h2>
        </div>
        <div class="container">
            <div class="row py-5 text-center ">
                <div class="col-lg-3">
                    <a href=""><i class="fab fa-facebook-square txt-cl-orange display-1"></i></a>
                </div>
                <div class="col-lg-3">
                    <a href=""><i class="fab fa-twitter-square txt-cl-orange display-1"></i></a>
                </div>
                <div class="col-lg-3">
                    <a href=""><i class="fab fa-youtube txt-cl-orange display-1"></i></a>
                </div>
                <div class="col-lg-3">
                    <a href=""><i class="fab fa-instagram-square txt-cl-orange display-1"></i></a>
                </div>
            </div>
        </div>
    <?php include 'components/divider.php'; ?>
    <?php include 'components/footer.php'; ?>
</body>
</html>