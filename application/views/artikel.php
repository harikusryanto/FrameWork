<!doctype php>
<php lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="<?php echo base_url(); ?>assets1/img/logo1.png" type="image/png">
        <title>Website Monitoring Perkembangan Anak</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets1/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets1/vendors/linericon/style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets1/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets1/vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets1/vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets1/css/magnific-popup.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets1/vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets1/vendors/animate-css/animate.css">
        <!-- main css -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets1/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets1/css/responsive.css">
    </head>
    <body class="blog_page">
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.php"> <img src="<?php echo base_url(); ?>assets1/img/logo1.png" width="90" alt=""></a>
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
                                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url()?>">Artikel</a>
                                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url()?>">Video Edukasi</a>
                                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url()?>">Tips-Tips</a>
                                </ul>
                                <li class="nav-item"><a class="nav-link" href="<?php echo site_url("welcome/kontak")?>">Tentang Kami</a></li>
                            </li>
                            

                                </ul>
                            </li>
                            
                            
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="nav-item"><a href="<?php echo site_url("welcome/login")?>" class="primary_btn">masuk</a></li>
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
                            <a href="#">Website Monitoring Tumbuh Kembang Anak</a>
                        </div>
                        <h2>Artikel</h2>
                        <h2></h2>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
            
       
        
        <!--================Blog Area =================-->
        <section class="blog_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog_left_sidebar">
                            <article class="row blog_item">
                               <div class="col-md-3">
                                   <div class="blog_info text-right">
                                        <div class="post_tag">
                                            <a href="#">Food,</a>
                                            <a class="#" href="#">Technology,</a>
                                            <a href="#">Politics,</a>
                                            <a href="#">Lifestyle</a>
                                        </div>
                                        <ul class="blog_meta list">
                                            <li><a href="#">Administrator<i class="lnr lnr-user"></i></a></li>
                                            <li><a href="#"">August 7, 2019<i class="lnr lnr-calendar-full"></i></a></li>
                                            <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                                           
                                        </ul>
                                    </div>
                               </div>
                                <div class="col-md-9">
                                    <div class="blog_post">
                                        <img src="<?php echo base_url(); ?>assets1/img/blog/main-blog/m-1.jpg" alt="">
                                        <div class="blog_details">
                                            <a href="<?php echo site_url("welcome/artikel1")?>"><h2>Panduan Penyimpanan Makanan Si Kecil</h2></a>
                                            <p>Si Kecil biasanya tidak akan menolak makanan yang hangat atau makanan yang memiliki suhu ruangan. Dengan cara memanaskan dan menyimpan yang tepat, maka nutrisi yang terkandung di dalam makanan juga akan bertahan dan dapat dimanfaatkan oleh tubuh si Kecil dengan optimis</p>
                                            <a href="art1.php" class="blog_btn">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="row blog_item">
                               <div class="col-md-3">
                                   <div class="blog_info text-right">
                                        <div class="post_tag">
                                            <a href="#">#Ibu&Anak,</a>
                                            <a class="active" href="#">#Bayi,</a>
                                            <a href="#">#Kesehatan,</a>
                                            <a href="#">#Keluarga</a>
                                        </div>
                                       <ul class="blog_meta list">
                                            <li><a href="#">Administrator<i class="lnr lnr-user"></i></a></li>
                                            <li><a href="#"">August 6, 2019<i class="lnr lnr-calendar-full"></i></a></li>
                                            <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                                           
                                        </ul>
                                    </div>
                               </div>
                                <div class="col-md-9">
                                    <div class="blog_post">
                                        <img src="<?php echo base_url(); ?>assets1/img/blog/main-blog/m-2.jpg" alt="">
                                        <div class="blog_details">
                                            <a href="art2.php"><h2>Libatkan Suami Ketika Ibu Menyusui Si Kecil
</h2></a>
                                            <p>Saat Ibu memasuki fase menyusui, Tidak ada salahnya untuk melibatkan suami ketika Ibu menyusui bayi. Ini akan membuat tugas Ibu menjadi lebih ringan sekaligus membuat ikatan batin antara Ibu, suami dan bayi semakin erat</p>
                                            <a href="art2.php" class="blog_btn">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="row blog_item">
                               <div class="col-md-3">
                                   <div class="blog_info text-right">
                                        <div class="post_tag">
                                            <a href="#">Food,</a>
                                            <a class="active" href="#">Technology,</a>
                                            <a href="#">Politics,</a>
                                            <a href="#">Lifestyle</a>
                                        </div>
                                        <ul class="blog_meta list">
                                            <li><a href="#">Administrator<i class="lnr lnr-user"></i></a></li>
                                            <li><a href="#"">August 5, 2019<i class="lnr lnr-calendar-full"></i></a></li>
                                            <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                                           
                                        </ul>
                                    </div>
                               </div>
                                <div class="col-md-9">
                                    <div class="blog_post">
                                        <img src="<?php echo base_url(); ?>assets1/img/blog/main-blog/m-3.jpg" alt="">
                                        <div class="blog_details">
                                            <a href="art3.php"><h2>Tips Memperkenalkan Makanan Pada Bayi 6 – 8 Bulan</h2></a>
                                            <p>Memberikan makanan padat pendamping ASI pada bayi umumnya mulai diperkenalkan saat si Kecil menginjak usia enam bulan. Hal di atas sesuai dengan rekomendasi dari World Health Organization (WHO) setelah bayi melalui periode ASI ekslusifnya. Makanan padat perlu diperkenalkan secara perlahan pada si Kecil, agar tubuhnya mampu beradaptasi dengan baik. Makanan padat berguna untuk memenuhi kebutuhan nutrisi yang lengkap dalam tumbuh kembang si Kecil.</p>
                                            <a href="art3.php" class="blog_btn">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="row blog_item">
                               <div class="col-md-3">
                                   <div class="blog_info text-right">
                                        <div class="post_tag">
                                            <a href="#">Food,</a>
                                            <a class="active" href="#">Technology,</a>
                                            <a href="#">Politics,</a>
                                            <a href="#">Lifestyle</a>
                                        </div>
                                       <ul class="blog_meta list">
                                            <li><a href="#">Administrator<i class="lnr lnr-user"></i></a></li>
                                            <li><a href="#"">August 4, 2019<i class="lnr lnr-calendar-full"></i></a></li>
                                            <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                                           
                                        </ul>
                                    </div>
                               </div>
                                <div class="col-md-9">
                                    <div class="blog_post">
                                        <img src="<?php echo base_url(); ?>assets1/img/blog/main-blog/m-4.jpeg" alt="">
                                        <div class="blog_details">
                                            <a href="art4.php"><h2>Tips Memberikan Makanan Pada Bayi 8 - 10 Bulan</h2></a>
                                            <p>Di periode ini, ia mulai beradaptasi dengan rasa dan tekstur makanan, ada kemungkinan bayi mulai memiliki makanan kesukaannya dan mulai tidak menyukai suatu jenis makanan. Ibu juga memiliki tantangan baru agar si Kecil tidak memilih-milih jenis makanan, terutama sayuran dan buah-buahan. Asupan sayuran seimbang dapat membantu si Kecil memenuhi kebutuhan nutrisi hariannya. Perlu diingat bahwa di masa ini, Ibu sudah tidak perlu lagi menyajikan makanan dalam bentuk bubur puree</p>
                                            <a href="art4.php" class="blog_btn">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="row blog_item">
                               <div class="col-md-3">
                                   <div class="blog_info text-right">
                                        <div class="post_tag">
                                            <a href="#">Food,</a>
                                            <a class="active" href="#">Technology,</a>
                                            <a href="#">Politics,</a>
                                            <a href="#">Lifestyle</a>
                                        </div>
                                        <ul class="blog_meta list">
                                            <li><a href="#">Administrator<i class="lnr lnr-user"></i></a></li>
                                            <li><a href="#"">August 3, 2019<i class="lnr lnr-calendar-full"></i></a></li>
                                            <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                                           
                                        </ul>
                                    </div>
                               </div>
                                <div class="col-md-9">
                                    <div class="blog_post">
                                        <img src="<?php echo base_url(); ?>assets1/img/blog/main-blog/m-5.jpg" alt="">
                                        <div class="blog_details">
                                            <a href="art5.php"><h2>Perkembangan Bayi Usia 1 Bulan</h2></a>
                                            <p>Pada usia 1 bulan, si Kecil mulai mengeksplorasi tangan dan kakinya. Ia juga akan mulai "menjawab" kata-kata Ibu dengan ocehan dan mengikuti objek dengan matanya. Ketahui selengkapnya di sini.</p>
                                            <a href="art5.php" class="blog_btn">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                           
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget search_widget">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search Posts">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="lnr lnr-magnifier"></i></button>
                                    </span>
                                </div><!-- /input-group -->
                                <div class="br"></div>
                            </aside>
                            
                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title">Popular Posts</h3>
                                <div class="media post_item">
                                    <img src="<?php echo base_url(); ?>assets1/img/blog/popular-post/post1.jpg" alt="post">
                                    <div class="media-body">
                                        <a href="blog-details.php"><h3>Space The Final Frontier</h3></a>
                                        <p>2 Days ago</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="<?php echo base_url(); ?>assets1/img/blog/popular-post/post2.jpg" alt="post">
                                    <div class="media-body">
                                        <a href="blog-details.php"><h3>The Amazing Hubble</h3></a>
                                        <p>12 Hours ago</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="<?php echo base_url(); ?>assets1/img/blog/popular-post/post3.jpg" alt="post">
                                    <div class="media-body">
                                        <a href="blog-details.php"><h3>Astronomy Or Astrology</h3></a>
                                        <p>3 Days ago</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="<?php echo base_url(); ?>assets1/img/blog/popular-post/post4.jpg" alt="post">
                                    <div class="media-body">
                                        <a href="blog-details.php"><h3>Asteroids telescope</h3></a>
                                        <p>1 Weeks ago</p>
                                    </div>
                                </div>
                                <div class="br"></div>
                            </aside>
                            <aside class="single_sidebar_widget ads_widget">
                                <a href="#"><img class="img-fluid" src="img/blog/add.jpg" alt=""></a>
                                <div class="br"></div>
                            </aside>
                            <aside class="single_sidebar_widget post_category_widget">
                                <h4 class="widget_title">Post Catgories</h4>
                                <ul class="list cat-list">
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Technology</p>
                                            <p>37</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Lifestyle</p>
                                            <p>24</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Fashion</p>
                                            <p>59</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Art</p>
                                            <p>29</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Food</p>
                                            <p>15</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Architecture</p>
                                            <p>09</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Adventure</p>
                                            <p>44</p>
                                        </a>
                                    </li>															
                                </ul>
                                <div class="br"></div>
                            </aside>
                            
                            <aside class="single-sidebar-widget tag_cloud_widget">
                                <h4 class="widget_title">Tag Clouds</h4>
                                <ul class="list">
                                    <li><a href="#">Technology</a></li>
                                    <li><a href="#">Fashion</a></li>
                                    <li><a href="#">Architecture</a></li>
                                    <li><a href="#">Fashion</a></li>
                                    <li><a href="#">Food</a></li>
                                    <li><a href="#">Technology</a></li>
                                    <li><a href="#">Lifestyle</a></li>
                                    <li><a href="#">Art</a></li>
                                    <li><a href="#">Adventure</a></li>
                                    <li><a href="#">Food</a></li>
                                    <li><a href="#">Lifestyle</a></li>
                                    <li><a href="#">Adventure</a></li>
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->

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
            
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="<?php echo base_url(); ?>assets1/js/jquery-3.2.1.min.js"></script>
        <script src="<?php echo base_url(); ?>assets1js/popper.js"></script>
        <script src="<?php echo base_url(); ?>assets1js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets1js/stellar.js"></script>
        <script src="<?php echo base_url(); ?>assets1js/jquery.magnific-popup.min.js"></script>
        <script src="<?php echo base_url(); ?>assets1/vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="<?php echo base_url(); ?>assets1/vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="<?php echo base_url(); ?>assets1/vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="<?php echo base_url(); ?>assets1/vendors/isotope/isotope-min.js"></script>
        <script src="<?php echo base_url(); ?>assets1/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="<?php echo base_url(); ?>assets1/js/jquery.ajaxchimp.min.js"></script>
        <script src="<?php echo base_url(); ?>assets1/js/mail-script.js"></script>
        <script src="<?php echo base_url(); ?>assets1/vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="<?php echo base_url(); ?>assets1/vendors/counter-up/jquery.counterup.min.js"></script>
        <script src="<?php echo base_url(); ?>assets1/js/theme.js"></script>
    </body>
</php>