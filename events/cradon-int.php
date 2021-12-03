<?php include '../components/bootstrap.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo $path ?>css\events.css">
    <link rel="stylesheet" href="<?php echo $path ?>
css\global-style.css">

</head>

<body>
    <?php include '../components/header.php'?>
    <div class="container d-flex justify-content-center mt-lg-5">
        <div class="row gray">
            <div class="col-lg-12 mt-5">
                <div class="row">
                    <!-- 1 -->
                    <div class="col-lg-2 grayscale">
                        <a href="<?php echo $path; ?>events/antigo.php">
                            <img src="<?php echo $path; ?>poster/01-ANTIGO.png">
                        </a>
                    </div>

                    <!-- 2 -->
                    <div class="col-lg-2 grayscale">
                        <a href="<?php echo $path; ?>events/cradon.php">
                        <img src="<?php echo $path; ?>poster/02-CRANDON.png">
                        </a>
                    </div>

                    <!-- 3 -->
                    <div class="col-lg-2 grayscale">
                        <a href="<?php echo $path; ?>events/erx.php">
                            <img src="<?php echo $path; ?>poster/03-ERX.png" alt="">
                        </a>
                    </div>

                    <!-- 4 -->
                    <div class="col-lg-2 grayscale">
                        <a href="<?php echo $path; ?>events/dirt-city.php">
                        <img src="<?php echo $path; ?>poster/04-DIRT-CITY.png">
                        </a>
                    </div>

                    <!-- 5 -->
                    <div class="col-lg-2 grayscale">
                        <a href="<?php echo $path; ?>events/bark-river.php">
                        <img src="<?php echo $path; ?>poster/05-BARK-RIVER.png">
                        </a>
                    </div>

                    <!-- 6 -->
                    <div class="col-lg-2">
                        <a href="<?php echo $path; ?>events/cradon-int.php">
                        <img src="<?php echo $path; ?>poster/CHAMPOFFROAD_EVENT_TILE_06_CRANDON.png">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid p-0 event-notice mt-5">
        <img src="<?php echo $path ?>images\events\EVENT_HEADER_06_CRANDON.jpg" class="img-fluid">
    </div>

    <!-- Countdown -->

    <div id="demo" class="my-5 text-center"></div>

    <script>
    // Set the date we're counting down to
    var countDownDate = new Date("Jan 5, 2022 15:37:25").getTime();
    var id = "demo";
    </script>

    <!-- End of  Countdown -->
</body>
<script src="<?php echo $path ?>js\countdown.js"></script>

</html>