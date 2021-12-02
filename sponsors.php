<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'components/bootstrap.php';?>
    <link rel="stylesheet" href="css\global-style.css">
    <link rel="stylesheet" href="css\sponsors.css">
</head>

<body>
    <?php include 'components/header.php'; ?>
    <div class="col-lg-12">
        <div class="text-center my-5">
            <button type="button" class="btn btn-light">SHOW HIDE</button>
        </div>
        <div class="row d-flex justify-content-center">
            
            <div id="filterOptions" class="text-center w-75">
                <button type="button" selector="all" class="btn btn-light">ALL</button>
                <button type="button" selector="amsol" class="btn btn-light">AMSOL</button>
                <button type="button" selector="bilstein" class="btn btn-light">BILSTEIN</button>
                <button type="button" selector="chirs-car-online" class="btn btn-light">CHRISTIAN CARS ONLINE</button>
                <button type="button" selector="cooper-tire" class="btn btn-light">COOPER TIRES</button>
                <button type="button" selector="falken-tires" class="btn btn-light">FALKEN TIRES</button>
                <button type="button" selector="kenda-tires" class="btn btn-light">KENDA TIRE</button>
                <button type="button" selector="maxxis" class="btn btn-light">MAXXIS</button>
                <button type="button" selector="race-pol-ktm" class="btn btn-light">RACEDRIVEN POLARIS KTM</button>
                <button type="button" selector="racequip" class="btn btn-light">RACEQUIP</button>

                <button type="button" selector="rival-moto" class="btn btn-light">RIVAL MOTORSPORTS/ CAN-AM</button>
                <button type="button" selector="rugged-radio" class="btn btn-light">RUGGED RADIOS</button>
                <button type="button" selector="sponsors" class="btn btn-light">SPONSORS</button>
                <button type="button" selector="toyo-tires" class="btn btn-light">TOYO TIRES</button>
                <button type="button" selector="air-force" class="btn btn-light">U.S AIR FORCE</button>
                <button type="button" selector="yokohama" class="btn btn-light">YOKOHAMA</button>
                <button type="button" selector="zie-cat" class="btn btn-light">ZIEGLER CAT</button>
            </div>
        </div>

    </div>
    <div class="container mt-5">
        <div class="row" id="ourHolder">
            <!-- Left Column -->
            <div class="col-lg-6">
                <div class="UX amsol div-link">
                    <img class="img-fluid d-block " src="images\sponsors\AMSOIL.png">
                    <p class="text-white p-4">AMSOIL is the recognized leader in synthetic lubricant technology. For
                        more information about AMSOIL and AMSOIL products visit www.amsoil.com or call (715) 392-7101.
                    </p>
                </div>
                <div class="cooper-tire div-link">
                    <img class="img-fluid d-block" src="images\sponsors\Cooper-logo-stack-wh-on-288.png">
                </div>
                <div class="yokohama div-link">
                    <img class="img-fluid d-block "
                        src="images\sponsors\1706_YTC_CORP_YokohamaLogoRed-White-on-Black_Logo-1200x227.jpg">
                </div>
                <div class="maxxis div-link">
                    <img class="img-fluid d-block" src="images\sponsors\maxxis-tires_word_orange.png">
                    <p class="text-white p-4">Maxxis Tires is committed to delivering high performance tires to the
                        world. Our products are unequaled in quality and performance.
                    </p>
                </div>
                <div class="kenda-tires div-link">
                    <img class="img-fluid d-block" src="images\sponsors\Kenda_Tire_CMYK_Outline.png">
                    <p class="text-white p-4">Kenda embraces short course off-road racing as it allows us to race DOT
                        tires – the same tires sold to consumers in retail stores. This racing series provides a rare
                        environment for fans to see how the products they can buy in store compete directly against
                        other brands. Additionally, it demonstrates the extreme performance and durability in conditions
                        that the average truck owner will appreciate. #Podium2PavementTM
                    </p>
                </div>
                <div class="bilstein div-link">
                    <img class="img-fluid d-block" src="images\sponsors\BILSTEIN_Logo14-4C.png">
                    <p class="text-white p-4">For more than 50 years, BILSTEIN has been developing successful dampers
                        used in motorsport racing. From off-road and rally world championships to titles at most of the
                        important 24-hour races to championships in Formula 1, BILSTEIN continues to lead the field.
                    </p>
                </div>
                <div class="zie-cat div-link">
                    <img class="img-fluid d-block" src="images\sponsors\ziegler-cat.png">
                    <p class="text-white p-4">With 21 locations in Minnesota and Iowa, Ziegler is one of the largest Cat
                        dealers in North America. Ziegler sells and services Cat construction, paving, forestry, and
                        mining equipment, as well as Cat trucks, generators, and industrial engines. In the agricultural
                        market, Ziegler represents Challenger, AGCO application, and Lexion machinery in Minnesota,
                        Iowa, Wisconsin, and Missouri.
                    </p>
                </div>
            </div>
            <!-- End of Left Column -->
            <!-- Right Column -->
            <div class="col-lg-6">
                <div class="air-force div-link">
                    <iframe width="100%" height="300" src="https://www.youtube.com/embed/gbGnNRWB-Fw"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <div class="falken-tires div-link">
                    <img class="img-fluid d-block" src="images\sponsors\FALKEN_BOX_PNG.png">
                </div>
                <div class="race-pol-ktm div-link">
                    <img class="img-fluid d-block " src="images\sponsors\racedriven.png">
                    <p class="text-white p-4">Our dealership has a rock solid reputation of providing excellent service, support and satisfaction. We pride ourselves on giving our customers the best service available, the best parts and accessories, and a staff that understands all aspects of our business.
                    </p>
                </div>
                <div class="toyo-tires div-link">
                    <img class="img-fluid d-block" src="images\sponsors\Toyo_Tires_Logo_no_tag_line-1200x129.png">
                    <p class="text-white p-4">Established in 1966, Toyo Tire U.S.A. Corp. represents the innovation, quality, performance, and excellent service that Toyo Tires has delivered worldwide for more than 70 years.
                    </p>
                </div>
                <div class="rival-moto div-link">
                    <img class="img-fluid d-block" src="images\sponsors\rival-motorsports.png">
                </div>
                <div class="racequip div-link">
                    <img class="img-fluid d-block" src="images\sponsors\racequip.png">
                </div>
                <div class="rugged-radio div-link">
                    <img class="img-fluid d-block" src="images\sponsors\rugged.png">
                    <p class="text-white p-4">Racing radios and communications for offroad, racing, circle track and aviation. Exclusive technology in headsets, intercoms, radios, and complete systems.
                    </p>
                </div>
            </div>
            <!-- End of Right Column -->
        </div>

    </div>
    <?php include 'components/divider.php'; ?>
    <?php include 'components/footer.php'; ?>
</body>
<script>
$(document).ready(function() {
    $('#filterOptions button').click(function() {
        var ourClass = $(this).attr('selector');
        $('#filterOptions li').removeClass('active');
        $(this).parent().addClass('active');
        if (ourClass == 'all') {
            $('#ourHolder div').children().show();
        } else {
            $('#ourHolder div').children('div:not(.' + ourClass + ')').hide();
            $('#ourHolder div').children('div.' + ourClass).show();
        }

        return false;
    });
});
</script>

</html>