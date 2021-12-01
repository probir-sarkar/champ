<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'components/bootstrap.php';?>
</head>

<body>
    <div class="col-lg-12">
        <div class="row ">
            <div id="filterOptions" class="text-center">
                <button type="button" selector="all" class="btn btn-light">ALL</button>
                <button type="button" selector="amsol" class="btn btn-light">AMSOL</button>
                <button type="button" selector="bilstein" class="btn btn-light">BILSTEIN</button>
                <button type="button" selector="chirs-car-online" class="btn btn-light">CHRISTIAN CARS ONLINE</button>
                <button type="button" selector="cooper-tire" class="btn btn-light">COOPER TIRES</button>
                <button type="button" selector="falken-tires" class="btn btn-light">FALKEN TIRES</button>
                <button type="button" selector="kenda-tires" class="btn btn-light">KENDA TIRE</button>
                <button type="button" selector="maxxis" class="btn btn-light">MAXXIS</button>
                <button type="button" selector="race-pol-ktm" class="btn btn-light">RACEDRIVEN POLARIS KTM</button>
                <button type="button" selector="rival-moto" class="btn btn-light">RIVAL MOTORSPORTS/ CAN-AM</button>
                <button type="button" selector="rugged-radio" class="btn btn-light">RUGGED RADIOS</button>
                <button type="button" selector="sponsors" class="btn btn-light">SPONSORS</button>
                <button type="button" selector="toyo-tires" class="btn btn-light">TOYO TIRES</button>
                <button type="button" selector="yokohama" class="btn btn-light">YOKOHAMA</button>
                <button type="button" selector="zie-cat" class="btn btn-light">ZIEGLER CAT</button>
            </div>
        </div>

    </div>
    <div class="container">
        <div class="row" id="ourHolder">
            <div class="col-lg-6 UX amsol">
                <img class="img-fluid d-block " src="sponsors\AMSOIL.png">
            </div>
            <div class="col-lg-6 UI chirs-car-online">
                <img class="img-fluid d-block " src="sponsors\Christiancarsonline-logo.png">
            </div>
            <div class="col-lg-6 Graphic  cooper-tire">
                <img class="img-fluid d-block" src="sponsors\Cooper-logo-stack-wh-on-288.png">
            </div>
            <div class="col-lg-6 Design falken-tires">
                <img class="img-fluid d-block" src="sponsors\FALKEN_BOX_PNG.png">
            </div>
        </div>

    </div>
</body>
<script>
$(document).ready(function() {
    $('#filterOptions button').click(function() {
        var ourClass = $(this).attr('selector');
        $('#filterOptions li').removeClass('active');
        $(this).parent().addClass('active');
        if (ourClass == 'all') {
            $('#ourHolder').children().show();
        } else {
            $('#ourHolder').children('div:not(.' + ourClass + ')').hide();
            $('#ourHolder').children('div.' + ourClass).show();
        }

        return false;
    });
});
</script>

</html>