<div class=" py-4 container-fluid buttom-divider">
</div>
<nav class="navbar fixed-top navbar-expand-lg pt-lg-4 nav-bg-font" id="main-navbar">
  <!--  Show this only on mobile to medium screens  -->
  <div class="d-flex d-lg-none w-100 order-0">
    <div class="w-100 mobile-nav-btn">
      <button class="navbar-toggler navbar-dark navbar-btn-toggle " type="button" data-toggle="collapse" data-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    <a class=" w-100" href="<?php echo $path ?>index.php"><img class="" src="<?php echo $path ?>images/Championship_Off-Road_logo.png"></a>
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
              <a class="nav-link " id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                      <a class="dropdown-item d-lg-none d-block" href="<?php echo $path ?>national-events.php">
                        Events</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="<?php echo $path ?>events/antigo.php">Antigo
                        off-road National</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="<?php echo $path ?>events\cradon.php">Cardon Spring</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="<?php echo $path ?>events\erx.php">ERX</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="<?php echo $path ?>events\dirt-city.php">Dirt City</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="<?php echo $path ?>events\bark-river.php">Bark River</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="<?php echo $path ?>events\cradon-int.php">Cardon Fall</a>
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
              <a class="nav-link " id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                RACERS
              </a>
              <ul class="dropdown-menu body-bg " aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="<?php echo $path ?>#">Registration</a></li>
                <li><a class="dropdown-item" href="<?php echo $path ?>racers/results.php">Results</a></li>
                <li><a class="dropdown-item" href="<?php echo $path ?>#">Points</a></li>
                <li><a class="dropdown-item" href="<?php echo $path ?>#">Payouts</a></li>
                <li><a class="dropdown-item" href="<?php echo $path ?>#">FAQ</a></li>
                <li><a class="dropdown-item" href="<?php echo $path ?>#">Rulebook</a></li>
                <li><a class="dropdown-item" href="<?php echo $path ?>#">Lineups</a></li>
              </ul>
            </li>
            <!-- End of Dropdown level-1 -->
            <li class="nav-item dropdown">
              <a class="nav-link " href="<?php echo $path ?>http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                FANS
              </a>
              <div class="dropdown-menu body-bg" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="<?php echo $path ?>national-events.php">Events</a>
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
        <div class="col-lg-4 d-flex"><a href="<?php echo $path ?>index.php"><img class="navbar-brand d-none d-lg-block brand-logo-img" src="<?php echo $path ?>SITE_LOGO2.png"></a>
        </div>
        <div class="col-lg-4 d-flex">
          <ul class="navbar-nav px-3">
            <li class="nav-item dropdown">
              <a class="nav-link " href="<?php echo $path ?>social.php" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                social
              </a>
              <div class="dropdown-menu body-bg" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="<?php echo $path ?>#">Classes</a>
                <a class="dropdown-item" href="https://www.instagram.com/champoffroad/"><i class="fab fa-instagram"></i>&nbsp Intagram</a>
                <a class="dropdown-item" href="https://twitter.com/champsoffroad"><i class="fab fa-twitter-square"></i>&nbsp Twitter</a>
                <a class="dropdown-item" href="https://www.youtube.com/channel/UCdPwzNEMXIVxpBJZEeWmJ2w"><i class="fab fa-youtube-square"></i>&nbsp YouTube</a>
                <a class="dropdown-item" href="https://www.facebook.com/Championship-Off-Road-488210285321380/"><i class="fab fa-facebook-square"></i>&nbsp Facebook</a>
              </div>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="<?php echo $path ?>sponsors.php">SPONSORS</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link " href="<?php echo $path ?>http://example.com">
                shop
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!--   Show this only lg screens and up   -->
  </div>
</nav>

<script>
  document.addEventListener("DOMContentLoaded", function() {


    /////// Prevent closing from click inside dropdown
    document.querySelectorAll('.dropdown-menu').forEach(function(element) {
      element.addEventListener('click', function(e) {
        e.stopPropagation();
      });
    })
    // make it as accordion for smaller screens
    if (window.innerWidth < 992) {

      // close all inner dropdowns when parent is closed
      document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown) {
        everydropdown.addEventListener('hidden.bs.dropdown', function() {
          // after dropdown is hidden, then find all submenus
          this.querySelectorAll('.submenu').forEach(function(everysubmenu) {
            // hide every submenu as well
            everysubmenu.style.display = 'none';
          });
        })
      });

      document.querySelectorAll('.dropdown-menu a').forEach(function(element) {
        element.addEventListener('click', function(e) {

          let nextEl = this.nextElementSibling;
          if (nextEl && nextEl.classList.contains('submenu')) {
            // prevent opening link if link needs to open dropdown
            e.preventDefault();
            console.log(nextEl);
            if (nextEl.style.display == 'block') {
              nextEl.style.display = 'none';
            } else {
              nextEl.style.display = 'block';
            }

          }
        });
      })
    }
    // end if innerWidth

  });
</script>
