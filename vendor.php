<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'components/bootstrap.php';?>
    <link rel="stylesheet" href="css\global-style.css" />
    <link rel="stylesheet" href="css\vendor.css" />

</head>

<body>
    <!-- NavBar --><?php include 'components/header.php'?>
    <div class="container-fluid margin-top-60" id="media-container">
        <div class="row mt-5 pt-5 d-flex justify-content-center" style="overflow-x: clip;">
            <img src="bg/HEADER-org.jpg" class="img-zoom ">
            <h2 class="position-absolute mt-5 text-white">VENDOR INFORMATION</h2>
        </div>
    </div>
    <div class="container my-5">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6">
                <form action="" class="text-white" id="vendor-form">
                    <div class="form-group">
                        <label>Choose your event(s)</label>
                        <select multiple class="form-control">
                            <option>Antigo,WI</option>
                            <option>Crandon,WI(June Event)</option>
                            <option>Elk River,WI</option>
                            <option>Lena,WI</option>
                            <option>Bark River,WI</option>
                            <option>Crandon,WI(Labor Day Event)</option>
                        </select>
                        <label for="">Company Name (required)</label>
                        <input type="text" class="form-control" required>
                        <label for="">Company Name (required)</label>
                        <input type="text" class="form-control" required>
                        <label>Desired Display Size</label>
                        <select class="form-control">
                            <option>10x10</option>
                            <option>10x20</option>
                            <option>10x30</option>
                        </select>
                    </div>
                    <button type="button" class="submit-btn btn ">SEND</button>
                </form>
            </div>
        </div>
    </div>
    <?php include 'components/divider.php'; ?>
    <?php include 'components/footer.php'; ?>

</body>

</html>