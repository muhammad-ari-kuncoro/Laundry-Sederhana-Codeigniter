<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

    <title>Laundry Happy</title>
<!--
Elegance Template
https://templatemo.com/tm-528-elegance
-->
<!-- Additional CSS Files -->
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/font-awesome.css">

<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/fullpage.min.css">

<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/owl.carousel.css">

<link rel="stylesheet" href="<?= base_url(); ?>assets/css/animate.css">

<link rel="stylesheet" href="<?= base_url(); ?>assets/css/templatemo-style.css">

<link rel="stylesheet" href="<?= base_url(); ?>assets/css/responsive.css">

</head>

<body>

    <div id="video">
        <div class="preloader">
            <div class="preloader-bounce">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <header id="header">
            <div class="container-fluid">
                <div class="navbar">
                    <a href="#" id="logo" title="Elegance by TemplateMo">
                        LAUNDRY HAPPY 
                    </a>
                    <div class="navigation-row">
                        <nav id="navigation">
                            <button type="button" class="navbar-toggle"> <i class="fa fa-bars"></i> </button>
                            <div class="nav-box navbar-collapse">
                                <ul class="navigation-menu nav navbar-nav navbars" id="nav">
                                    <li data-menuanchor="slide01" class="active"><a href="#slide01">Home</a></li>
                                    <li data-menuanchor="slide02"><a href="#slide02">About app</a></li>
                                    <li data-menuanchor="slide03"><a href="#slide03">Services</a></li>
                                    <li data-menuanchor="slide04"><a href="#slide04">Pelayanan</a></li>
                                    <li data-menuanchor="slide05"><a href="#slide05">About Me</a></li>
                                    <li data-menuanchor="slide07"><a href="<?= base_url('auth'); ?>">Log-in</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <video autoplay muted loop id="myVideo">
          <source src="<?= base_url(); ?>assets/img/elge.mp4" type="video/mp4">
          </video>

          <div id="fullpage" class="fullpage-default">

            <div class="section animated-row" data-section="slide01">
                <div class="section-inner">
                    <div class="welcome-box">
                        <span class="welcome-first animate" data-animate="fadeInUp">Hello, welcome to</span>
                        <h1 class="welcome-title animate" data-animate="fadeInUp">Laundry Happy</h1>
                        <p class="animate" data-animate="fadeInUp">Disini Kami Melayani Pengguna Mulai Dari Mencuci pakaian, Karpet Dan  Pakaian lainnya</p>

                    </div>
                </div>
            </div>



            <div class="section animated-row" data-section="slide03">
                <div class="section-inner">
                    <div class="row justify-content-center">
                        <div class="col-md-8 wide-col-laptop">
                            <div class="title-block animate" data-animate="fadeInUp">
                                <span> Aplikasi Membuat</span>
                                <h2>Menggunakan:</h2>
                            </div>
                            <div class="services-section">
                                <div class="services-list owl-carousel">
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="service-box">
                                            <h3>CodeIgniter</h3>
                                            <p>Aplikasi Ini Menggunakan Framework Codeigniter</p>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="service-box">
                                            <h3>PHP</h3>
                                            <p> Aplikasi Ini Menggunakan Bahasa PHP Dengan Versi 7</p>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="service-box">
                                            <h3>Templates Bootstrap</h3>
                                            <p>Aplikasi Ini Menggunakan Template Bootsrap Version 3</p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section animated-row" data-section="slide04">
                <div class="section-inner">
                    <div class="row justify-content-center">
                        <div class="col-md-7 wide-col-laptop">
                            <div class="title-block animate" data-animate="fadeInUp">
                                <span>Laundry</span>
                                <h2>Percentace Peminat Pelanggan</h2>
                            </div>
                            <div class="skills-row animate" data-animate="fadeInDown">
                                <div class="row">
                                    <div class="col-md-8 offset-md-2">   
                                        <div class="skill-item">
                                            <h6>Karpet</h6>
                                            <div class="skill-bar">
                                                <span>30%</span>
                                                <div class="filled-bar"></div>
                                            </div>          
                                        </div>
                                        <div class="skill-item">
                                            <h6>Pakaian</h6>
                                            <div class="skill-bar">
                                                <span>70%</span>
                                                <div class="filled-bar-2"></div>
                                            </div>          
                                        </div>                
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section animated-row" data-section="slide06">
                <div class="section-inner">
                    <div class="row justify-content-center">
                        <div class="col-md-8 wide-col-laptop">
                            <div class="title-block animate" data-animate="fadeInUp">
                                <span>Laundry</span>
                                <h2>Melayani</h2>
                            </div>
                            <div class="gallery-section">
                                <div class="gallery-list owl-carousel">
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="<?= base_url(); ?>assets/img/karpet.jpg" alt="">
                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                                <h4>Melayani Karpet</h4>
                                                <p>Kami Melayani Pencucian Karpet Masjid , Karpet Rumah Tangga </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="<?= base_url(); ?>assets/img/baju.jpg" alt="">
                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                                <h4>Melayani Pakaian</h4>
                                                <p>Kami Melayani Pencucian Pakaian Mulai Dari Kaos, Sweater
                                                ,Hoodie, Jeans Dan Lain Lain</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="<?= base_url(); ?>assets/img/cod.jpg" alt="">
                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                                <h4>Melayani COD</h4>
                                                <p>Disini Kami melayani COD , mulai dari Karpet Hingga Pakaian Anda </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section animated-row" data-section="slide05">
                <div class="section-inner">
                    <div class="row justify-content-center">
                        <div class="col-md-8 wide-col-laptop">
                            <div class="title-block animate" data-animate="fadeInUp">
                                <span>About Me</span>
                                <h2>My Profile</h2>
                            </div>
                            <div class="col-md-8 offset-md-2">
                                <div class="testimonials-section">
                                    <div class="testimonials-slider owl-carousel">
                                        <div class="item animate" data-animate="fadeInUp">
                                            <div class="testimonial-item">
                                                <div class="client-row">
                                                    <img src="<?= base_url(); ?>assets/img/bebek.jpg" class="rounded-circle">
                                                </div>
                                                <div class="testimonial-content">
                                                    <h4>Muhammad Ari Kuncoro</h4>
                                                    <h5>Kelas : XII RPL 2</h5>
                                                    <p>Aplikasi Ini Cuma Aplikasi Sederhana Saya Membuat Ini Tidak Sepenuh Nya , Ada Beberapa Ambil Dari Google </p>
                                                    <span>Facebook : Muhammad ari kuncoro ari</span>
                                                    <br>
                                                    <span>Instagram : muhammadaii11</span>
                                                </div>                                           
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            


        <script src="<?= base_url(); ?>assets/js/jquery.js"></script>

        <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>

        <script src="<?= base_url(); ?>assets/js/fullpage.min.js"></script>

        <script src="<?= base_url(); ?>assets/js/scrolloverflow.js"></script>

        <script src="<?= base_url(); ?>assets/js/owl.carousel.min.js"></script>

        <script src="<?= base_url(); ?>assets/js/jquery.inview.min.js"></script>

        <script src="<?= base_url(); ?>assets/js/form.js"></script>

        <script src="<?= base_url(); ?>assets/js/custom.js"></script>


    </body>
    </html>