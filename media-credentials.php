<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Credentials</title>
    <?php include 'components/bootstrap.php';?>
    <link rel="stylesheet" href="css\global-style.css" />
    <link rel="stylesheet" href="css\media-credentials.css" />
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
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-12 text-white">
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
            <div class="col-lg-8">
                <form action="" id="media-form">
                    <!-- Upload letter of assignment -->
                    <div class="form-group">
                        <label for="exampleFormControlFile1">
                            * indicates required field
                            <br><b> Upload letter of assignment (pdf, jpg, png, or txt - 5MB Max)*</b></label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    <!-- End of Upload letter of assignment-->

                    <!-- Events -->


                    <div class="mt-3"><label><b>Event</b></label>
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
                    </div>
                    <!-- End of Events -->
                    <!-- Contact Form -->
                    <div class="mt-3"><label><b>Contact Details</b></label>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" class="name">
                            <label for="name">Company</label>
                            <input type="text" class="form-control" class="name">
                            <label for="name">Website</label>
                            <input type="text" class="form-control" class="name">
                            <label for="name">Address</label>
                            <input type="text" class="form-control" class="name">
                            <label for="name">City</label>
                            <input type="text" class="form-control" class="name">
                            <label for="name">State</label>
                            <input type="text" class="form-control" class="name">
                            <label for="name">Zip code</label>
                            <input type="text" class="form-control" class="name">
                            <div class="row">
                                <div class="col-lg-4">
                                    <label for="name">Email</label>
                                    <input type="text" class="form-control" class="name">
                                </div>
                                <div class="col-lg-4">
                                    <label for="name">Phone</label>
                                    <input type="text" class="form-control" class="name">
                                </div>
                                <div class="col-lg-4">
                                    <label for="name">Cell Phone</label>
                                    <input type="text" class="form-control" class="name">
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End of Contact Form -->
                    <!-- Primary Job Function  -->
                    <div class="mt-3"><label><b>Primary Job Function: </b></label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="antigo">
                            <label class="form-check-label" for="antigo">
                                TV/Broadcast Journalist
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="antigo">
                            <label class="form-check-label" for="antigo">
                                Radio Broadcast Journalist
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="antigo">
                            <label class="form-check-label" for="antigo">
                                Publication Photographer
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="antigo">
                            <label class="form-check-label" for="antigo">
                                Independent Photographer for race team or OEM
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="antigo">
                            <label class="form-check-label" for="antigo">
                                Other
                            </label>
                        </div>
                        <p>To be granted media access, proof of insurance is required and ISOC is required to be listed
                            as an additional insured. The medical information below is required and please submit via
                            fax or e-mail copies of the insurance information.</p>
                        <div class="form-group">
                            <label for="name">Medical Insurance Carrier </label>
                            <input type="text" class="form-control" class="name">
                            <label for="name">Medical Insurance Number </label>
                            <input type="text" class="form-control" class="name">
                            <label> <b> Upload copy of insurance (pdf, jpg, png 5MB Max)*</b></label>
                            <input type="file" class="form-control-file">
                            <label for="name">Known reactions or allergies to medications </label>
                            <input type="text" class="form-control" class="name">
                            <label for="name">Emergency Contact </label>
                            <input type="text" class="form-control" class="name">
                            <label for="name">Emergency Phone Number </label>
                            <input type="text" class="form-control" class="name">
                        </div>


                    </div>
                    <!-- End of Job Function -->
                    <!-- Address of the media company -->
                    <div class="mt-4"><label><b>Please Provide the Name and Address of the media company(s) you are
                                representing</b></label>
                        <div class="form-group">
                            <label for="name">Media Company Name </label>
                            <input type="text" class="form-control" class="name">
                            <label for="name">Website </label>
                            <input type="text" class="form-control" class="name">
                            <label for="name">Address</label>
                            <input type="text" class="form-control" class="name">
                            <label for="name">City </label>
                            <input type="text" class="form-control" class="name">
                            <label for="name">State </label>
                            <input type="text" class="form-control" class="name">
                            <label for="name">Zip Code </label>
                            <input type="text" class="form-control" class="name">
                            <div class="row">
                                <div class="col-lg-4">
                                    <label for="name">Phone </label>
                                    <input type="text" class="form-control" class="name">
                                </div>
                                <div class="col-lg-4">
                                    <label for="name">Fax </label>
                                    <input type="text" class="form-control" class="name">
                                </div>
                            </div>
                            <label for="name">Name of Editor / Director </label>
                            <input type="text" class="form-control" class="name">
                            <p><i>Please Note: Credentials will not be issued without the formal approval of your
                                    Editor/Director. Issuance of this credential is at the sole discretion of ISOC.</i>
                            </p>
                        </div>
                    </div>
                    <!-- End of Address of the Media Company -->
                    <!-- Terms and conditions -->
                    <div class="mt-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="crandon">
                            <label class="form-check-label" for="crandon">
                                <b>I AGREE to the following terms:</b>
                            </label>

                        </div>
                        <ul>
                            <li>Any photos taken by me at this event will be used in the performance of my
                                duties/responsibilities with the company listed above and will not be resold.</li>
                            <li>I agree to wear an ISOC media band at all times while in the track area.</li>
                            <li>I agree to comply with any/all instructions given to me by ISOC officials.</li>
                            <li>I agree to sign the Release and Waiver of Liability, Assumption of Risk and Indemnity
                                Agreement.</li>
                            <li>I agree to reference ISOC in all printed and aired work as a result of my assignment.
                            </li>
                            <li>I agree to provide ISOC with two (2) copies of the work published, aired or printed as a
                                result of my assignment via hard copy or email.</li>
                        </ul>
                        <p><b>Any violation of these terms will result in immediate revocation of your credential. ISOC
                                reserves the right to determine, at its sole discretion, what determines violation of
                                these terms.</b></p>
                    </div>
                    <!--  End of Terms and conditions -->
                    <!-- Submit Button -->
                    <button type="button" class="submit-btn btn ">SEND</button>
                </form>
            </div>

        </div>
    </div>
<?php include 'components/divider.php'; ?>
    <?php include 'components/footer.php' ;?>
</body>

</html>