<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Garuda Teknik</title>

    <!-- Favicons -->
    <link href="<?= base_url('assets/') ?>assets/img/tab-img.ico" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets/') ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>assets/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <a href="<?= base_url() ?>" class="logo"><img src="<?= base_url('assets/assets/img/logo.jpg') ?>" alt="" class="img-fluid"></a>

            <nav class="nav-menu d-none d-lg-block">

                <ul>
                    <li><a href="<?= base_url() ?>#hero">Home</a></li>
                    <li><a href="<?= site_url('welcome/about') ?>">About Us</a></li>
                    <li><a href="<?= base_url() ?>#features">Service</a></li>
                    <li class="active"><a href="<?= base_url('welcome/harga') ?>">Pricing</a></li>
                    <li><a href="<?= base_url('welcome/blog') ?>">Blog</a></li>
                    <li><a href="<?= base_url('welcome/contact') ?>">Contact</a></li>

                </ul>

            </nav><!-- .nav-menu -->

            <a href="#login" data-toggle="modal" class="get-started-btn ml-auto">Login</a>

        </div>
    </header><!-- End Header -->

    <!-- modal login -->
    <div class="modal fade" id="login">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" id="username" name="username" class="form-control" placeholder="Masukan username..">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Masukan password...">
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-secondary">Sign Up</button>
                            <button type="button" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Pricing</h2>
                    <ol>
                        <li><a href="<?= base_url() ?>">Home</a></li>
                        <li>Pricing</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">
            <div class="container">

                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="box">
                            <h3>CUCI AC</h3>
                            <h4><sup>Rp</sup>50.000<span> / AC</span></h4>
                            <ul>
                                <li>service 1</li>
                                <li>service 2</li>
                                <li>service 3</li>
                                <li class="na">service 4</li>
                                <li class="na">service ..</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Order Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
                        <div class="box featured">
                            <h3>TAMBAH / ISI FREON</h3>
                            <h4><sup>Rp</sup>100.000<span> / AC</span></h4>
                            <ul>
                                <li>service 1</li>
                                <li>service 2</li>
                                <li>service 3</li>
                                <li class="na">service 4</li>
                                <li class="na">service ..</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Order Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                        <div class="box">
                            <h3>BONGKAR PASANG UNIT AC</h3>
                            <h4><sup>Rp</sup>112.000<span> / AC</span></h4>
                            <ul>
                                <li>service 1</li>
                                <li>service 2</li>
                                <li>service 3</li>
                                <li class="na">service 4</li>
                                <li class="na">service ..</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Order Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                        <div class="box">
                            <span class="advanced">Advanced</span>
                            <h3>Full Service</h3>
                            <h4><sup>Rp</sup>200.000<span> / AC</span></h4>
                            <ul>
                                <li>service 1</li>
                                <li>service 2</li>
                                <li>service 3</li>
                                <li>service 4</li>
                                <li>service 5</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Order Now</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Pricing Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq">
            <div class="container">

                <div class="section-title">
                    <h2>Pembayaran</h2>
                    <p>Pembayaran Aman</p>
                </div>

                <div class="row faq-item d-flex align-items-stretch">
                    <div class="col-lg-5">
                        <i class="bx bx-help-circle"></i>
                        <h4>TRANSFER BANK</h4>
                    </div>
                    <div class="col-lg-7">
                        <p>
                            Bank : BCA <br>
                            A/N : CV. GARUDA JAYA PERKASA <br>
                            No.rek : 246 246 4488
                        </p>
                    </div>
                </div><!-- End F.A.Q Item-->

                <div class="row faq-item d-flex align-items-stretch">
                    <div class="col-lg-5">
                        <i class="bx bx-help-circle"></i>
                        <h4>MENGGUNAKAN TRANSFER ATAU CASH DITEMPAT </h4>
                    </div>
                    <div class="col-lg-7">
                        <p>
                            Pembayaran Cash ditempat dilengkapi dengan invoice Pembayaran.
                        </p>
                    </div>
                </div><!-- End F.A.Q Item-->

            </div>
        </section><!-- End Frequently Asked Questions Section -->

        <section id="garansi" class="faq">
            <div class="container">

                <div class="section-title">
                    <h2>Garansi</h2>
                    <p>GARANSI SERVICE AC SEMARANG</p>
                </div>

                <div class="row faq-item d-flex align-items-stretch">
                    <div class="col-lg-5">
                        <i class="bx bx-help-circle"></i>
                        <h4>GARANSI TERJAMIN</h4>
                    </div>
                    <div class="col-lg-7">
                        <p>
                            Garansi dari Garuda Teknik Semarang, adalah 30 hari dari sejak terhitung hari dimana setelah service AC Pendingin.
                        </p>
                        <p>
                            Garansi Service berupa jasa instalasi, sparepart, freon, juga unit. Jadi tidak perlu kuatir untuk penanganan AC di Garuda Teknik Semarang, karena kualitas adalah yang utama dalam layanan kami. Segera hubungi layanan Service AC Semarang di Garuda Teknik.
                        </p>
                    </div>
                </div><!-- End F.A.Q Item-->

            </div>
        </section><!-- End Frequently Asked Questions Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3>Garuda Teknik Semarang</h3>
                            <p>
                                Jalan Kuala Mas IV / 201<br>
                                Semarang<br><br>
                                <strong>WA:</strong> 0895 607 800 800<br>
                                <strong>Office:</strong> (024) 865 794 77<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url() ?>">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('welcome/about') ?>">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url() ?>#features">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('welcome/harga') ?>">Pricing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('welcome/blog') ?>">Blog</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('welcome/contact') ?>">Contact</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a>CUCI AC (INDOR & OUTDOOR)</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a>BONGKAR PASANG UNIT AC</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a>TAMBAH / ISI FREON</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a>MASALAH AC</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p>Dapatkan berita terbaru dari kami</p>
                        <form action="" method="post">
                            <input type="email" name="email" placeholder="Masukan email anda"><input type="submit" value="Subscribe">
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Sailor</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/sailor-free-bootstrap-theme/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url('assets/') ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/') ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/') ?>assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="<?= base_url('assets/') ?>assets/vendor/php-email-form/validate.js"></script>
    <script src="<?= base_url('assets/') ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url('assets/') ?>assets/vendor/venobox/venobox.min.js"></script>
    <script src="<?= base_url('assets/') ?>assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="<?= base_url('assets/') ?>assets/vendor/owl.carousel/owl.carousel.min.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url('assets/') ?>assets/js/main.js"></script>

</body>

</html>