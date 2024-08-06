<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="SMSI -  Secours Médico-Social Ivoirien" />
    <link href="assets/images/icons/favicon.ico" rel="icon" />
    <title>SMSI - Secours Médico-Social Ivoirien</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&family=Roboto:wght@400;700&display=swap" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" />
    <link rel="stylesheet" href="assets/css/libraries.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
    <div class="wrapper">
        <div class="preloader">
            <div class="loading">
                <span></span><span></span><span></span><span></span>
            </div>
        </div>
        <!-- /.preloader -->

        <!-- =========================
        Header
    =========================== -->
        <header class="header header-layout1">
            <div class="header-topbar">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-between">
                                <ul class="contact__list d-flex flex-wrap align-items-center list-unstyled mb-0">
                                    <li>
                                        <button class="miniPopup-emergency-trigger" type="button">
                                            ONG
                                        </button>
                                    </li>
                                    <li>
                                        <i class="icon-phone"></i><a href="tel:+5565454117">Numéro d'urgence: +225
                                            0101010101</a>
                                    </li>
                                    <li>
                                        <i class="icon-location"></i><a href="#">Côte d'Ivoire, Abidjan</a>
                                    </li>
                                </ul>
                                <!-- /.contact__list -->
                                <div class="d-flex">
                                    <ul class="social-icons list-unstyled mb-0 mr-30">
                                        <li>
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-door-open"></i></a>
                                        </li>
                                    </ul>
                                    <!-- /.social-icons -->
                                </div>
                            </div>
                        </div>
                        <!-- /.col-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.header-top -->
            <nav class="navbar navbar-expand-lg sticky-navbar">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.html">
                        <img src="assets/images/logo/logo.png" class="logo-light" alt="logo" />
                        <img src="assets/images/logo/logo.png" class="logo-dark" alt="logo" />
                    </a>
                    <button class="navbar-toggler" type="button">
                        <span class="menu-lines"><span></span></span>
                    </button>
                    <div class="collapse navbar-collapse" id="mainNavigation">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav__item">
                                <a href="index.html" class="nav__item-link">Accueil</a>
                            </li>
                            <!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="about-us.html" class="nav__item-link">À Propos</a>
                            </li>
                            <!-- /.nav-item -->
                            <li class="nav__item has-dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Nos
                                    Projets</a>
                                <ul class="dropdown-menu">
                                    <li class="nav__item">
                                        <a href="#" class="nav__item-link">Projet 1</a>
                                    </li>
                                    <!-- /.nav-item -->
                                    <li class="nav__item">
                                        <a href="#" class="nav__item-link">Projet 2</a>
                                    </li>
                                    <!-- /.nav-item -->
                                    <li class="nav__item">
                                        <a href="#" class="nav__item-link">Projet 3</a>
                                    </li>
                                    <!-- /.nav-item -->
                                </ul>
                                <!-- /.dropdown-menu -->
                            </li>
                            <!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="blog.html" class="nav__item-link">Blog</a>
                            </li>
                            <!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="contact-us.html" class="nav__item-link">Contacts</a>
                            </li>
                            <!-- /.nav-item -->
                        </ul>
                        <!-- /.navbar-nav -->
                        <button class="close-mobile-menu d-block d-lg-none">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                    <!-- /.navbar-collapse -->
                    <div class="d-none d-xl-flex align-items-center position-relative ml-30">
                        <a href="appointment.html" class="btn btn__primary btn__rounded ml-30">
                            <i class="icon-calendar"></i>
                            <span>Rendez-Vous</span>
                        </a>
                    </div>
                </div>
                <!-- /.container -->
            </nav>
            <!-- /.navabr -->
        </header>
        <!-- /.Header -->

        {{-- Body --}}
        @yield('contenu')
        {{-- End Body --}}

        <!-- ========================
      Footer
    ========================== -->
        <footer class="footer">
            <div class="footer-primary">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-3">
                            <div class="footer-widget-about">
                                <img src="assets/images/logo/logo.png" alt="logo" class="mb-30" />
                                <p class="color-gray">
                                    Le Secours Médico-Social Ivoirien (SMSI) s’engage à prévenir les cancers cutanés
                                    chez les personnes
                                    atteintes d’albinisme en Côte d’Ivoire. Pour atteindre cet objectif, SMSI
                                    sensibilise sur les risques
                                    de l’exposition au soleil, distribue des crèmes solaires et des vêtements
                                    protecteurs, et offre des
                                    consultations et un suivi médical spécialisés.
                                </p>
                                <a href="appointment.html" class="btn btn__primary btn__primary-style2 btn__link">
                                    <span>Prendre rendez-vous</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div>
                            <!-- /.footer-widget__content -->
                        </div>
                        <!-- /.col-xl-2 -->
                        <div class="col-sm-6 col-md-6 col-lg-2 offset-lg-1">

                            <!-- /.footer-widget__content -->
                        </div>
                        <!-- /.col-lg-2 -->
                        <div class="col-sm-6 col-md-6 col-lg-2">
                            <div class="footer-widget-nav">
                                <h6 class="footer-widget__title">Liens</h6>
                                <nav>
                                    <ul class="list-unstyled">
                                        <li><a href="#">À Propos</a></li>
                                        <li><a href="#">Nos projets</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Contacts</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- /.footer-widget__content -->
                        </div>
                        <!-- /.col-lg-2 -->
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="footer-widget-contact">
                                <h6 class="footer-widget__title color-heading">
                                    Contacts
                                </h6>
                                <ul class="contact-list list-unstyled">
                                    <li>
                                        <a href="tel:01061245741" class="phone__number">
                                            <i class="icon-phone"></i> <span>01061245741</span>
                                        </a>
                                    </li>
                                    <li class="color-body">
                                        Côte d'Ivoire, Abidjan.
                                    </li>
                                </ul>
                                <div class="d-flex align-items-center">
                                    <a href="contact-us.html" class="btn btn__primary btn__link mr-30">
                                        <i class="icon-arrow-right"></i>
                                        <span>Contacts</span>
                                    </a>
                                    <ul class="social-icons list-unstyled mb-0">
                                        <li>
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                    </ul>
                                    <!-- /.social-icons -->
                                </div>
                            </div>
                            <!-- /.footer-widget__content -->
                        </div>
                        <!-- /.col-lg-2 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.footer-primary -->
            <div class="footer-secondary">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <span class="fz-14">&copy; 2024</span>
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <nav>
                                <ul
                                    class="list-unstyled footer__copyright-links d-flex flex-wrap justify-content-end mb-0">
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Cookies</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.footer-secondary -->
        </footer>
        <!-- /.Footer -->
        <button id="scrollTopBtn">
            <i class="fas fa-long-arrow-alt-up"></i>
        </button>
    </div>
    <!-- /.wrapper -->

    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
