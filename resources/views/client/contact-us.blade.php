<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="SMSI -  Secours Médico-Social Ivoirien">
  <link href="assets/images/icons/favicon.ico" rel="icon" />
  <title>SMSI - Secours Médico-Social Ivoirien</title>

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&family=Roboto:wght@400;700&display=swap">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
  <link rel="stylesheet" href="assets/css/libraries.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <div class="wrapper">
    <div class="preloader">
      <div class="loading"><span></span><span></span><span></span><span></span></div>
    </div><!-- /.preloader -->

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
                    <i class="icon-phone"></i><a href="tel:+5565454117">Numéro d'urgence: +225 0101010101</a>
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
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Nos Projets</a>
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

    <!-- ========================= 
            Google Map
    =========================  -->
    <section class="google-map py-0">
      <iframe frameborder="0" height="500" width="100%"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.465084634413!2d-3.985597020309497!3d5.345752380794217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1e95ec86d75df%3A0x6b32fdf5305bae3a!2sCentre%20hospitalier%20universitaire%20de%20Cocody!5e0!3m2!1sfr!2sci!4v1722362507259!5m2!1sfr!2sci"></iframe>
    </section><!-- /.GoogleMap -->

    <!-- ==========================
        contact layout 1
    =========================== -->
    <section class="contact-layout1 pt-0 mt--100">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="contact-panel d-flex flex-wrap">
              <form class="contact-panel__form" method="post" id="contactForm">
                <div class="row">
                  <div class="col-sm-12">
                    <h4 class="contact-panel__title">Besoin d'aide ? </h4>
                    <p class="contact-panel__desc mb-30">N'hésitez pas à contacter notre aimable personnel de réception
                      pour toute question d'ordre général ou médical.
                    </p>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <i class="icon-user form-group-icon"></i>
                      <input type="text" class="form-control" placeholder="Nom & prénom" id="contact-name"
                        name="contact-name" required>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <i class="icon-email form-group-icon"></i>
                      <input type="email" class="form-control" placeholder="Email" id="contact-email"
                        name="contact-email">
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                      <i class="icon-phone form-group-icon"></i>
                      <input type="text" class="form-control" placeholder="Téléphone" id="contact-Phone"
                        name="contact-phone" required>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-12">
                    <div class="form-group">
                      <i class="icon-alert form-group-icon"></i>
                      <textarea class="form-control" placeholder="Message" id="contact-message"
                        name="contact-message"></textarea>
                    </div>
                    <button type="submit" class="btn btn__secondary btn__rounded btn__block btn__xhight mt-10">
                      <span>Envoyez</span> <i class="icon-arrow-right"></i>
                    </button>
                    <div class="contact-result"></div>
                  </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
              </form>
              <div
                class="contact-panel__info d-flex flex-column justify-content-between bg-overlay bg-overlay-primary-gradient">
                <div class="bg-img"><img src="assets/images/banners/1.jpg" alt="banner"></div>
                <div>
                  <h4 class="contact-panel__title color-white">Contacts</h4>
                  <p class="contact-panel__desc font-weight-bold color-white mb-30">
                  </p>
                </div>
                <div>
                  <ul class="contact__list list-unstyled mb-30">
                    <li>
                      <i class="icon-phone"></i><a href="tel:+5565454117">Numéro d'urgence: +225 0101010101</a>
                    </li>
                    <li>
                      <i class="icon-location"></i><a href="#">Côte d'Ivoire, Abidjan</a>
                    </li>
                  </ul>
                  <a href="#" class="btn btn__white btn__rounded btn__outlined">Contactez-nous</a>
                </div>
              </div>
            </div>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.contact layout 1 -->

    <!-- ========================= 
      Testimonials layout 2
      =========================  -->
    <section class="testimonials-layout2 pt-130 pb-40">
      <div class="container">
        <div class="testimonials-wrapper">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-5">
              <div class="heading-layout2">
                <h3 class="heading__title">Témoignages</h3>
              </div>
              <!-- /.heading -->
            </div>
            <!-- /.col-lg-5 -->
            <div class="col-sm-12 col-md-12 col-lg-7">
              <div class="slider-with-navs">
                <!-- Testimonial #1 -->
                <div class="testimonial-item">
                  <h3 class="testimonial__title">
                    “Lorem ipsum dolor sit amet, consectetur adipiscing elit. In consequat suscipit lorem a mollis.
                    Phasellus pellentesque nec nibh nec sodales. In vel vehicula diam, a faucibus risus. Cras quis
                    ultrices purus. Nulla facilisi. Suspendisse potenti. Proin pretium sem felis, et ullamcorper erat
                    ultrices pharetra. ”
                  </h3>
                </div>
                <!-- /. testimonial-item -->
                <!-- Testimonial #2 -->
                <div class="testimonial-item">
                  <h3 class="testimonial__title">
                    “Lorem ipsum dolor sit amet, consectetur adipiscing elit. In consequat suscipit lorem a mollis.
                    Phasellus pellentesque nec nibh nec sodales. In vel vehicula diam, a faucibus risus. Cras quis
                    ultrices purus. Nulla facilisi. Suspendisse potenti. Proin pretium sem felis, et ullamcorper erat
                    ultrices pharetra. ”
                  </h3>
                </div>
                <!-- /. testimonial-item -->
                <!-- Testimonial #3 -->
                <div class="testimonial-item">
                  <h3 class="testimonial__title">
                    “Lorem ipsum dolor sit amet, consectetur adipiscing elit. In consequat suscipit lorem a mollis.
                    Phasellus pellentesque nec nibh nec sodales. In vel vehicula diam, a faucibus risus. Cras quis
                    ultrices purus. Nulla facilisi. Suspendisse potenti. Proin pretium sem felis, et ullamcorper erat
                    ultrices pharetra. ”
                  </h3>
                </div>
                <!-- /. testimonial-item -->
              </div>
              <!-- /.slick-carousel -->
              <div class="slider-nav mb-60">
                <div class="testimonial__meta">
                  <div class="testimonial__thmb">
                    <img src="assets/images/testimonials/thumbs/1.png" alt="author thumb" />
                  </div>
                  <!-- /.testimonial-thumb -->
                  <div>
                    <h4 class="testimonial__meta-title">Sami Wade</h4>
                  </div>
                </div>
                <!-- /.testimonial-meta -->
                <div class="testimonial__meta">
                  <div class="testimonial__thmb">
                    <img src="assets/images/testimonials/thumbs/2.png" alt="author thumb" />
                  </div>
                  <!-- /.testimonial-thumb -->
                  <div>
                    <h4 class="testimonial__meta-title">Ahmed</h4>
                  </div>
                </div>
                <!-- /.testimonial-meta -->
                <div class="testimonial__meta">
                  <div class="testimonial__thmb">
                    <img src="assets/images/testimonials/thumbs/3.png" alt="author thumb" />
                  </div>
                  <!-- /.testimonial-thumb -->
                  <div>
                    <h4 class="testimonial__meta-title">Sonia Blake</h4>
                  </div>
                </div>
                <!-- /.testimonial-meta -->
              </div>
              <!-- /.slider-nav -->
            </div>
            <!-- /.col-lg-7 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.testimonials-wrapper -->
      </div>
      <!-- /.container -->
    </section>

    <!-- ========================
     gallery
    =========================== -->
    <section class="gallery pt-0 pb-90">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="slick-carousel"
              data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "autoplay": true, "arrows": true, "dots": false, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
              <a class="popup-gallery-item" href="assets/images/gallery/1.jpg">
                <img src="assets/images/gallery/1.jpg" alt="gallery img">
              </a>
              <a class="popup-gallery-item" href="assets/images/gallery/2.jpg">
                <img src="assets/images/gallery/2.jpg" alt="gallery img">
              </a>
              <a class="popup-gallery-item" href="assets/images/gallery/3.jpg">
                <img src="assets/images/gallery/3.jpg" alt="gallery img">
              </a>
              <a class="popup-gallery-item" href="assets/images/gallery/4.jpg">
                <img src="assets/images/gallery/4.jpg" alt="gallery img">
              </a>
              <a class="popup-gallery-item" href="assets/images/gallery/5.jpg">
                <img src="assets/images/gallery/5.jpg" alt="gallery img">
              </a>
              <a class="popup-gallery-item" href="assets/images/gallery/6.jpg">
                <img src="assets/images/gallery/6.jpg" alt="gallery img">
              </a>
            </div><!-- /.gallery-images-wrapper -->
          </div><!-- /.col-xl-5 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.gallery 2 -->

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
                  Le Secours Médico-Social Ivoirien (SMSI) s’engage à prévenir les cancers cutanés chez les personnes
                  atteintes d’albinisme en Côte d’Ivoire. Pour atteindre cet objectif, SMSI sensibilise sur les risques
                  de l’exposition au soleil, distribue des crèmes solaires et des vêtements protecteurs, et offre des
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
                <ul class="list-unstyled footer__copyright-links d-flex flex-wrap justify-content-end mb-0">
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
    <button id="scrollTopBtn"><i class="fas fa-long-arrow-alt-up"></i></button>
  </div><!-- /.wrapper -->

  <script src="assets/js/jquery-3.5.1.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>