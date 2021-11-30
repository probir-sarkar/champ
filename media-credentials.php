<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Credentials</title>
    <?php include 'components/bootstrap.php';?>
    <link rel="stylesheet" href="css\global-style.css" />
    <!-- Only for testing -->
    <style>
    </style>
</head>

<body>
    <!-- NavBar --><?php include 'components/header.php'?>
    <div class="container-fluid margin-top-60" id="media-container">
        <div class="row mt-5 pt-5 d-flex justify-content-center" style="overflow-x: clip;">
            <img src="bg/HEADER-org.jpg" class="img-zoom ">
            <h2 class="position-absolute mt-5 text-white">Media Credentials</h2>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <p>
                    ISOC welcomes the media. It is our goal to make your job covering the events as easy as possible. To
                    obtain media credentials, please note the following information:
                    <br><br>

                    Please have your Editor/Director issue a letter of assignment produced on original company
                    stationery. Additionally, complete the form below and attach to your letter of assignment. Please
                    FAX this form to 763-497-2922 or email to info@isocracing.com no later than 10 days prior to the
                    race weekend.
                    <br><br>

                    SUBMITTING THIS REQUEST DOES NOT GUARANTEE YOU WILL RECEIVE OR BE GRANTED A MEDIA CREDENTIAL OR
                    ACCESS TO THE EVENT. YOU WILL RECEIVE A FOLLOW-UP CONFIRMATION PRIOR TO THE RACE
                </p>
            </div>
        </div>
        <div class="row text-white">
            <div class="col-lg-6">
                <form action="">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" name="antigo">
                        <label class="form-check-label" for="antigo">
                            Antigo, WI
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="crandon">
                        <label class="form-check-label" for="crandon">
                            Crandon, WI (June Event)
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="elk-river">
                        <label class="form-check-label" for="elk-river">
                            Elk River, MN
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="lena">
                        <label class="form-check-label" for="lena">
                            Lena, WI
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="bark-river">
                        <label class="form-check-label" for="bark-river">
                            Bark River, MI
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="cradon-labor">
                        <label class="form-check-label" for="cradon-labor">
                            Crandon, WI (Labor Day Event)
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" class="name">
                    </div>
                </form>
            </div>

        </div>

    </div>
</body>

</html>