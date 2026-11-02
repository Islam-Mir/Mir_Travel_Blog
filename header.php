<header class="travel-header fixed-top">

    <!-- TOP BAR -->
    <div class="top-bar">
        <div class="container-fluid px-lg-5 d-flex justify-content-center">
            <div class="d-flex justify-content-between align-items-center  gap-5">

                    <div>
                         <h2 class="hero-header gap-5">Viaggiare è imparare senza libri, crescere senza confini e respirare il pianeta!</h2>
                    </div>

               

            </div>
        </div>
    </div>

    <!-- MAIN HEADER -->
    <div class="main-header">
        <div class="container-fluid px-lg-5">

            <div class="header-content">

                <!-- LOGO
                <a href="/" class="brand-logo">
                    <span class="brand-name">WANDER<span>MORE</span></span>
                    <small>TRAVEL JOURNAL</small>
                </a>  -->

                <!-- LOGO -->
            <a href="#" class="brand-logo">
                <img src="images/logo_SJ.PNG"
                    style="width:180px; height:65px; object-fit:contain;"
                    alt="WanderMore">
            </a>
                <!-- DESKTOP NAVIGATION -->
                <nav class="desktop-navigation">
                    <ul class="nav-menu">

                        <li class="nav-item dropdown">
                           
                               <a href="#" class="nav-link dropdown-toggle" id="destinationsToggle">
                                Destinazioni
                            </a>

                            <ul class="dropdown-menu mega-menu">
                                <li><a class="dropdown-item" href="/europa">Europa</a></li>
                                <li><a class="dropdown-item" href="/asia">Asia</a></li>
                                <li><a class="dropdown-item" href="/america">America</a></li>
                                <li><a class="dropdown-item" href="/africa">Africa</a></li>
                                <li><a class="dropdown-item" href="/oceania">Oceania</a></li>
                            </ul>
                        </li>

                        <li><a href="/city-guides" class="nav-link">City Guides</a></li>

                        <li><a href="/road-trips" class="nav-link">Road Trips</a></li>

                        <li><a href="/Primo_Sito_Web/travel-tips.php" class="nav-link">Travel Tips</a></li>

                        <li class="nav-item dropdown">
                            
                        <a href="#" class="nav-link dropdown-toggle" id="aboutToggle">                               
                                About
                            </a>

                            <ul class="dropdown-menu">
                                <li><a href="/about" class="dropdown-item">Chi sono</a></li>
                                <li><a href="/collaborazioni" class="dropdown-item">Collaborazioni</a></li>
                                <li><a href="/contatti" class="dropdown-item">Contatti</a></li>
                            </ul>
                        </li>

                    </ul>
                </nav>

                <!-- SEARCH -->
                <button class="search-toggle" id="searchToggle"
                        aria-label="Apri ricerca">
                    <i class="bi bi-search"></i>
                </button>

                <!-- MOBILE MENU BUTTON -->
                <button class="mobile-menu-toggle"
                        type="button"
                        data-bs-toggle="offcanvas"
                        data-bs-target="#mobileMenu"
                        aria-label="Apri menu">
                    <i class="bi bi-list"></i>
                </button>

            </div>

            <!-- SEARCH FORM -->
            <div class="search-panel" id="searchPanel">
                <form action="/" method="get">
                    <input type="search" name="s"
                           placeholder="Dove vuoi andare?"
                           aria-label="Cerca nel blog">
                    <button type="submit">
                        <i class="bi bi-search"></i>
                    </button>
                </form>
            </div>

        </div>
    </div>

    <!-- MOBILE OFFCANVAS -->
    <div class="offcanvas offcanvas-end mobile-navigation"
         tabindex="-1" id="mobileMenu">

        <div class="offcanvas-header">
            <span class="brand-name">WANDER<span>MORE</span></span>
            <button type="button" class="btn-close"
                    data-bs-dismiss="offcanvas"></button>
        </div>

        <div class="offcanvas-body">

            <nav>
                <a href="/destinazioni">Destinazioni</a>
                <a href="/europa" class="mobile-submenu">Europa</a>
                <a href="/asia" class="mobile-submenu">Asia</a>
                <a href="/america" class="mobile-submenu">America</a>
                <a href="/africa" class="mobile-submenu">Africa</a>

                <hr>

                <a href="/city-guides">City Guides</a>
                <a href="/road-trips">Road Trips</a>
                <a href="/Primo_Sito_Web/travel-tips.php">Travel Tips</a>
                <a href="/about">About</a>
                <a href="/collaborazioni">Collaborazioni</a>
                <a href="/contatti">Contatti</a>

                <a href="/newsletter" class="mobile-newsletter">
                    Iscriviti alla Newsletter
                </a>
            </nav>

        </div>
    </div>

</header>