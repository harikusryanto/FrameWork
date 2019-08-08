<!doctype php>
<php lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <link rel="icon" href="<?php echo base_url(); ?>assets1/img/logo1.png" type="image/png">
        <title>Website Monitoring Perkembangan Anak</title>
        <title>Nexus SaaSu</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets1/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets1/vendors/linericon/style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets1/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets1/vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets1/css/magnific-popup.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets1/vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets1/vendors/animate-css/animate.css">
        <!-- main css -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets1/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets1/css/responsive.css">
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
       <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.php"><img src="<?php echo base_url(); ?>assets1/img/logo1.png" width="90" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                         aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav justify-content-center">
                             <li class="nav-item active"><a class="nav-link" href="<?php echo site_url("")?>">Beranda</a></li>
                           <li class="nav-item"><a class="nav-link" href="<?php echo site_url("welcome/blog")?>">Perkembangan Anak</a></li>
                            <!--<li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>assets1/gallery.html">Galeri</a>-->
                            <li class="nav-item submenu dropdown">
                                <a href="<?php echo base_url(); ?>assets1/#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                 aria-expanded="false">Ibu & Anak</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url("welcome/artikel")?>">Artikel</a>
                                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url()?>">Video Edukasi</a>
                                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url()?>">Tips-Tips</a>
                                </ul>
                                <li class="nav-item"><a class="nav-link" href="<?php echo site_url("welcome/kontak")?>">Tentang Kami</a></li>
                            </li>

                                </ul>
                            </li>
                            <!--<li class="nav-item submenu dropdown">
                            <!--<li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                 aria-expanded="false">Blog</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
                                    <li class="nav-item"><a class="nav-link" href="single-blog.php">Blog Details</a></li>
                                <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>-->

                                </ul>
                            </li>
                            
                            
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="nav-item"><a href="#" class="primary_btn">masuk</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
                <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
                <div class="container">
                    <div class="banner_content text-center">
                        <div class="page_link">
                            <a href="#">Selamat Datang</a>
                        </div>
                        <h2>Website Monitoring Tumbuh Kembang Anak</h2>
                        <h2>Usia 0-12 Tahun</h2>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Contact Area =================-->
        <section class="contact_area section_gap">
            <div class="container">
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="contact_info">
                            <div class="info_item">
                                <i class="lnr lnr-home"></i>
                                <h6>California, United States</h6>
                                <p>Santa monica bullevard</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-phone-handset"></i>
                                <h6><a href="#">00 (440) 9865 562</a></h6>
                                <p>Mon to Fri 9am to 6 pm</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-envelope"></i>
                                <h6><a href="#">support@colorlib.com</a></h6>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukin Nama Anda">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                                </div>
                               <!--  <div class="form-group">
                                    <input type="text" class="form-control" id="" name="pesan" placeholder="Enter Subject">
                                </div> -->
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="pesan" id="pesan" rows="1" placeholder="Enter Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 text-right">
                                <button type="submit" value="submit" class="primary_btn">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--================Contact Area =================-->
        
        <!--================Footer Area =================-->
        
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="social_widget">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->
        
        <!--================Contact Success and Error message Area =================-->
        <div id="success" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Thank you</h2>
                        <p>Your message is successfully sent...</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modals error -->

        <div id="error" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Sorry !</h2>
                        <p> Something went wrong </p>
                    </div>
                </div>
            </div>
        </div>
        <!--================End Contact Success and Error message Area =================-->
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="<?php echo base_url(); ?>assets1/js/jquery-3.2.1.min.js"></script>
        <script src="<?php echo base_url(); ?>assets1/js/popper.js"></script>
        <script src="<?php echo base_url(); ?>assets1/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets1/js/stellar.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
        <script src="<?php echo base_url(); ?>assets1/vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="<?php echo base_url(); ?>assets1/vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="<?php echo base_url(); ?>assets1/vendors/isotope/isotope-min.js"></script>
        <script src="<?php echo base_url(); ?>assets1/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="<?php echo base_url(); ?>assets1/js/jquery.ajaxchimp.min.js"></script>
        <script src="<?php echo base_url(); ?>assets1/js/mail-script.js"></script>
        <script src="<?php echo base_url(); ?>assets1/vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="<?php echo base_url(); ?>assets1/vendors/counter-up/jquery.counterup.min.js"></script>
        <!-- contact js -->
        <script src="<?php echo base_url(); ?>assets1/js/jquery.form.js"></script>
        <script src="<?php echo base_url(); ?>assets1/js/jquery.validate.min.js"></script>
        <script src="<?php echo base_url(); ?>assets1/js/contact.js"></script>
        <!--gmaps Js-->
        <script src="<?php echo base_url(); ?>assets1/https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="<?php echo base_url(); ?>assets1/js/gmaps.min.js"></script>
        <script src="<?php echo base_url(); ?>assets1/js/theme.js"></script>
    </body>
</php>