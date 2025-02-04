<?php include 'components/bootstrap.php'; ?>
<link rel="stylesheet" href="css\global-style.css">
<nav class="navbar fixed-top navbar-expand-lg pt-lg-4 nav-bg-font" id="main-navbar">
    <!--  Show this only on mobile to medium screens  -->
    <div class="d-flex d-lg-none w-100 order-0">
        <div class="w-100 mobile-nav-btn">
            <button class="navbar-toggler navbar-dark navbar-btn-toggle " type="button" data-toggle="collapse"
                data-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <a class=" w-100" href="<?php echo $path ?>index.php"><img class=""
                src="<?php echo $path ?>images/Championship_Off-Road_logo.png"></a>
        <span class="w-100"></span>
    </div>
    <!--  Use flexbox utility classes to change how the child elements are justified  -->
    <div class="collapse navbar-collapse" id="navbarToggle">
        <div class="container-fluid">
            <div class="row nav-dropdown-font" style="width: 100%;">
                <div class="col-lg-4 d-flex">
                    <!-- Dropdown level-0 -->
                    <ul class="navbar-nav px-3">
                        <li class="nav-item dropdown">
                            <a class="nav-link " id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                TOUR
                            </a>
                            <ul class="dropdown-menu body-bg " aria-labelledby="navbarDropdownMenuLink">
                                <!-- Dropdown level-2 -->
                                <li>
                                    <a class="dropdown-item" href="<?php echo $path ?>national-events.php">
                                        Events &raquo;
                                    </a>
                                    <ul class="submenu dropdown-menu body-bg">
                                        <li>
                                            <a class="dropdown-item d-lg-none d-block"
                                                href="<?php echo $path ?>national-events.php">
                                                Events
                                        </li>
                                        </a>
                                        <li>
                                            <a class="dropdown-item" href="<?php echo $path ?>events/antigo.php">Antigo
                                                off-road National</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="<?php echo $path ?>#">Cardon Spring</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="<?php echo $path ?>#">ERX</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="<?php echo $path ?>#">Dirt City</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="<?php echo $path ?>#">Cardon Fall</a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- End of Dropdown level-2 -->
                                <li><a class="dropdown-item" href="<?php echo $path ?>media-credentials.php">Media</a>
                                </li>
                                <li><a class="dropdown-item" href="<?php echo $path ?>vendor.php">Vendor</a></li>
                            </ul>
                        </li>
                        <!-- Dropdown level-1 -->
                        <li class="nav-item dropdown">
                            <a class="nav-link " id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                RACERS
                            </a>
                            <ul class="dropdown-menu body-bg " aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="<?php echo $path ?>#">Registration</a></li>
                                <li><a class="dropdown-item" href="<?php echo $path ?>#">Results</a></li>
                                <li><a class="dropdown-item" href="<?php echo $path ?>#">Points</a></li>
                                <li><a class="dropdown-item" href="<?php echo $path ?>#">Payouts</a></li>
                                <li><a class="dropdown-item" href="<?php echo $path ?>#">FAQ</a></li>
                                <li><a class="dropdown-item" href="<?php echo $path ?>#">Rulebook</a></li>
                                <li><a class="dropdown-item" href="<?php echo $path ?>#">Lineups</a></li>
                            </ul>
                        </li>
                        <!-- End of Dropdown level-1 -->
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="<?php echo $path ?>http://example.com"
                                id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                FANS
                            </a>
                            <div class="dropdown-menu body-bg" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="<?php echo $path ?>#">Events</a>
                                <a class="dropdown-item" href="<?php echo $path ?>#">Tickets</a>
                                <a class="dropdown-item" href="<?php echo $path ?>#">Live stream</a>
                                <a class="dropdown-item" href="<?php echo $path ?>#">On Demands</a>
                                <a class="dropdown-item" href="<?php echo $path ?>#">Tv Schedule</a>
                                <a class="dropdown-item" href="<?php echo $path ?>#">News</a>
                                <a class="dropdown-item" href="<?php echo $path ?>#">Podcast</a>
                                <a class="dropdown-item" href="<?php echo $path ?>#">Email list</a>
                            </div>
                        </li>

                    </ul>
                    <!-- End of Dropdown level-0 -->
                </div>
                <div class="col-lg-4 d-flex"><a href="<?php echo $path ?>index.php"><img
                            class="navbar-brand d-none d-lg-block brand-logo-img"
                            src="<?php echo $path ?>SITE_LOGO2.png"></a>
                </div>
                <div class="col-lg-4 d-flex">
                    <ul class="navbar-nav px-3">
                        <li class="nav-item ">
                            <a class="nav-link" href="<?php echo $path ?>social.php">social</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="<?php echo $path ?>sponsors.php">SPONSORS</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="<?php echo $path ?>http://example.com"
                                id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                shop
                            </a>
                            <div class="dropdown-menu body-bg" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="<?php echo $path ?>#">Action</a>
                                <a class="dropdown-item" href="<?php echo $path ?>#">Another action</a>
                                <a class="dropdown-item" href="<?php echo $path ?>#">Something else here</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--   Show this only lg screens and up   -->
    </div>
</nav>
<div class=" py-5 container-fluid buttom-divider">
</div>
<script>
$(document).ready(function(){
    $(".dropdown").hover(function(){
        var dropdownMenu = $(this).children(".dropdown-menu");
        if(dropdownMenu.is(":visible")){
            dropdownMenu.parent().toggleClass("open");
        }
    });
}); 
</script>