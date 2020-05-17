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
					<li class="active"><a href="<?= base_url() ?>#hero">Home</a></li>
					<li><a href="<?= site_url('welcome/about') ?>">About Us</a></li>
					<li><a href="#features">Service</a></li>
					<li><a href="<?= base_url('welcome/harga') ?>">Pricing</a></li>
					<li><a href="<?= base_url('welcome/blog') ?>">Blog</a></li>
					<li><a href="<?= base_url('welcome/contact') ?>">Contact</a></li>

				</ul>

			</nav><!-- .nav-menu -->

			<a href="#login" data-toggle="modal" class="get-started-btn ml-auto">Login</a>

		</div>
	</header><!-- End Header -->

	<!-- ======= Hero Section ======= -->
	<section id="hero">
		<div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

			<ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

			<div class="carousel-inner" role="listbox">

				<!-- Slide 1 -->
				<div class="carousel-item active" style="background-image: url(assets/assets/img/carousel/1.png)">
					<div class="carousel-container">
						<div class="container">
							<h2 class="animate__animated animate__fadeInDown">Profesional Service</h2>
							<p class="animate__animated animate__fadeInUp">Jasa Service AC Semarang dikerjakan secara profesional oleh teknisi berpengalaman dibidangnya.</p>
							<!-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> -->
						</div>
					</div>
				</div>

				<!-- Slide 2 -->
				<div class="carousel-item" style="background-image: url(assets/assets/img/carousel/2.jpg)">
					<div class="carousel-container">
						<div class="container">
							<h2 class="animate__animated animate__fadeInDown">Utamakan Kualitas</h2>
							<p class="animate__animated animate__fadeInUp">Mengutamakan kualitas service AC Semarang, Garuda Teknik memberikan jaminan garansi.</p>
							<!-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> -->
						</div>
					</div>
				</div>

				<!-- Slide 3 -->
				<div class="carousel-item" style="background-image: url(assets/assets/img/carousel/3.jpg)">
					<div class="carousel-container">
						<div class="container">
							<h2 class="animate__animated animate__fadeInDown">Bersih Dan Rapi</h2>
							<p class="animate__animated animate__fadeInUp">Teknisi diajarkan untuk selalu bersih dan rapi setiap detail pekerjaan.</p>
							<!-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> -->
						</div>
					</div>
				</div>

			</div>

			<a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>

			<a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
				<span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>

		</div>
	</section><!-- End Hero -->

	<main id="main">

		<!-- ======= About Section ======= -->
		<section id="about" class="about">
			<div class="container">
				<div class="section-title">
					<h2>Tentang Kami</h2>
					<p>Garuda Teknik Semarang</p>
				</div>
				<div class="row content">
					<div class="col-lg-6">
						<!-- <h2>TENTANG <br> GARUDA TEKNIK SEMARANG</h2> -->
						<h3>Menyediakan jasa service AC (Air Conditioner ) atau pendingin ruangan untuk rumah, kantor , sekolah , pabrik dan lain lain.</h3>
						<p>
							Dengan Teknisi yang berpengalaman, serta menggunakan alat-alat standart service AC dan sparepart yang berkualitas. Garuda Teknik Semarang menyediakan layanan berikut:
						</p>
					</div>
					<div class="col-lg-6 pt-4 pt-lg-0">
						<ul>
							<li><i class="ri-check-double-line"></i> Penjualan Unit AC Pendingin</li>
							<li><i class="ri-check-double-line"></i> Instalasi menggunakan alat standart dan Teknisi yang berpengalaman </li>
							<li><i class="ri-check-double-line"></i> Service dan Trouble Shooting AC </li>
							<li><i class="ri-check-double-line"></i> Maintenance AC secara berkala </li>
						</ul>
						<!-- <p class="font-italic">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
							magna aliqua.
						</p> -->
					</div>
				</div>

			</div>
		</section><!-- End About Section -->

		<!-- ======= Clients Section ======= -->
		<!-- <section id="clients" class="clients section-bg">
			<div class="container">

				<div class="row">

					<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
						<img src="<?= base_url('assets/') ?>assets/img/clients/client-1.png" class="img-fluid" alt="">
					</div>

					<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
						<img src="<?= base_url('assets/') ?>assets/img/clients/client-2.png" class="img-fluid" alt="">
					</div>

					<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
						<img src="<?= base_url('assets/') ?>assets/img/clients/client-3.png" class="img-fluid" alt="">
					</div>

					<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
						<img src="<?= base_url('assets/') ?>assets/img/clients/client-4.png" class="img-fluid" alt="">
					</div>

					<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
						<img src="<?= base_url('assets/') ?>assets/img/clients/client-5.png" class="img-fluid" alt="">
					</div>

					<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
						<img src="<?= base_url('assets/') ?>assets/img/clients/client-6.png" class="img-fluid" alt="">
					</div>

				</div>

			</div>
		</section> -->
		<!-- End Clients Section -->

		<!-- ======= Services Section ======= -->
		<section id="features" class="features">
			<div class="container">

				<div class="section-title">
					<h2>Service</h2>
					<p>pelayanan terbaik dari kami</p>
				</div>

				<div class="row">
					<div class="col-lg-3">
						<ul class="nav nav-tabs flex-column">
							<li class="nav-item">
								<a class="nav-link active show" data-toggle="tab" href="#tab-1">CUCI AC (INDOR & OUTDOOR)</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-2">TAMBAH / ISI FREON</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-3">BONGKAR PASANG UNIT AC</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-4">MASALAH AC</a>
							</li>
						</ul>
					</div>
					<div class="col-lg-9 mt-4 mt-lg-0">
						<div class="tab-content">
							<div class="tab-pane active show" id="tab-1">
								<div class="row">
									<div class="col-lg-8 details order-2 order-lg-1">
										<h3>CUCI AC (INDOR & OUTDOOR)</h3>
										<p>Kebersihan AC adalah hal yang utama untuk menunjang kualitas dari pendingin ruangan tersebut, dengan AC yang bersih maka perputaran udara yang melewati unit AC juga akan lancar, sehingga udara ruangan jadi cepat dingin. Menggunakan peralatan cuci AC standart Jepang (Kyowa) yang memang dikhususkan untuk mencuci AC sehingga menjadi lebih bersih dan yang paling penting tidak merusak kisi kisi atau aluminium AC.</p>
									</div>
									<div class="col-lg-4 text-center order-1 order-lg-2">
										<img src="<?= base_url('assets/')?>assets/img/features-1.png" alt="" class="img-fluid">
									</div>
								</div>
							</div>
							<div class="tab-pane" id="tab-2">
								<div class="row">
									<div class="col-lg-8 details order-2 order-lg-1">
										<h3>TAMBAH / ISI FREON</h3>
										<p>Menambah Freon AC tidak boleh sembarangan, dalam hal ini ada beberapa yang perlu di perhatikan seperti hal nya, jenis freon yang digunakan, alat isi freon yang dipakai, tekanan freon yang di isi akan berbeda beda tergantung jenis dan kapasitas unit AC tersebut. Teknisi Garuda Teknik Semarang menggunakan alat yang tepat dan standart ukur yang presisi untuk tiap tiap jenis unit AC.</p>
									</div>
									<div class="col-lg-4 text-center order-1 order-lg-2">
										<img src="<?= base_url('assets/')?>assets/img/features-2.png" alt="" class="img-fluid">
									</div>
								</div>
							</div>
							<div class="tab-pane" id="tab-3">
								<div class="row">
									<div class="col-lg-8 details order-2 order-lg-1">
										<h3>BONGKAR PASANG UNIT AC</h3>
										<p>Pemasangan AC tidaklah sederhana seperti yang dilihat, namun pemasangan harus dengan aturan aturan standart instalasi AC. Contoh untuk penggunaan braket outdoor haruslah sesuai dengan jenis kapasitas AC, penggunaan pipa AC, juga proses vacum yang wajib untuk jenis jenis AC modern saat ini. Teknisi Garuda Teknik telah dibekali bermacam standart dalam penanganan instalasi AC.</p>
									</div>
									<div class="col-lg-4 text-center order-1 order-lg-2">
										<img src="<?= base_url('assets/')?>assets/img/features-3.png" alt="" class="img-fluid">
									</div>
								</div>
							</div>
							<div class="tab-pane" id="tab-4">
								<div class="row">
									<div class="col-lg-8 details order-2 order-lg-1">
										<h3>MASALAH AC</h3>
										<p>TroubleShooting AC bermacam macam, dari AC yang tidak dingin, unit netes air, sampai unit yang berisik dan masih banyak lagi permasalahan tentang AC. Penanganan masalah AC harus di lakukan dengan tepat sasaran, jika tidak bisa mengakibatkan kerusakan lainya atau bahkan malah memperburuk keadaan. Garuda Teknik menyediakan Teknisi yang berpengalaman untuk penanganan masalah AC juga dengan sistem kantor yang konsisten, sehingga penanganan akan lebih terjaga kualitasnya.</p>
									</div>
									<div class="col-lg-4 text-center order-1 order-lg-2">
										<img src="<?= base_url('assets/')?>assets/img/features-4.png" alt="" class="img-fluid">
									</div>
								</div>
							</div>
							<div class="tab-pane" id="tab-5">
								<div class="row">
									<div class="col-lg-8 details order-2 order-lg-1">
										<h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
										<p class="font-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
										<p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
									</div>
									<div class="col-lg-4 text-center order-1 order-lg-2">
										<img src="<?= base_url('assets/')?>assets/img/features-5.png" alt="" class="img-fluid">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</section><!-- End Services Section -->

		<!-- ======= Portfolio Section ======= -->
		<section id="portfolio" class="portfolio">
			<div class="container">

				<div class="section-title">
					<h2>Product kita</h2>
					<p>Product yang kami tawarkan</p>
				</div>

				<!-- <div class="row">
					<div class="col-lg-12 d-flex justify-content-center">
						<ul id="portfolio-flters">
							<li data-filter="*" class="filter-active">All</li>
							<li data-filter=".filter-app">New</li>
							<li data-filter=".filter-card">Card</li>
							<li data-filter=".filter-web">Web</li>
						</ul>
					</div>
				</div> -->

				<div class="row portfolio-container">

					<div class="col-lg-4 col-md-6 portfolio-item filter-app">
						<div class="portfolio-wrap">
							<img src="<?= base_url('assets/') ?>assets/img/product/daikin.jpg" class="img-fluid" alt="daikin logo">
							<div class="portfolio-info">
								<h4>DAIKIN</h4>
								<!-- <p>App</p> -->
								<div class="portfolio-links">
									<a href="<?= base_url('assets/') ?>assets/img/product/daikin.jpg" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
									<a href="<?= base_url('assets/') ?>portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-web">
						<div class="portfolio-wrap">
							<img src="<?= base_url('assets/') ?>assets/img/product/panasonic.jpg" class="img-fluid" alt="">
							<div class="portfolio-info">
								<h4>PANASONIC</h4>
								<!-- <p>Web</p> -->
								<div class="portfolio-links">
									<a href="<?= base_url('assets/') ?>assets/img/product/panasonic.png" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
									<a href="<?= base_url('assets/') ?>portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-app">
						<div class="portfolio-wrap">
							<img src="<?= base_url('assets/') ?>assets/img/product/sharp.jpg" class="img-fluid" alt="">
							<div class="portfolio-info">
								<h4>SHARP</h4>
								<!-- <p>App</p> -->
								<div class="portfolio-links">
									<a href="<?= base_url('assets/') ?>assets/img/product/sharp.jpg" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="bx bx-plus"></i></a>
									<a href="<?= base_url('assets/') ?>portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-card">
						<div class="portfolio-wrap">
							<img src="<?= base_url('assets/') ?>assets/img/product/lg.jpg" class="img-fluid" alt="">
							<div class="portfolio-info">
								<h4>LG</h4>
								<!-- <p>Card</p> -->
								<div class="portfolio-links">
									<a href="<?= base_url('assets/') ?>assets/img/product/lg.png" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="bx bx-plus"></i></a>
									<a href="<?= base_url('assets/') ?>portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>
		</section><!-- End Portfolio Section -->

		<!-- ======= Testimonials Section ======= -->

		<section id="testimonials" class="testimonials">
			<div class="container">
				<div class="section-title">
					<h2>Testimonial</h2>
					<p>Testimonial our customers</p>
				</div>
				<div class="row">

					<div class="col-lg-6">
						<div class="testimonial-item">
							<img src="<?= base_url('assets/') ?>assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
							<h3>Saul Goodman</h3>
							<h4>Ceo &amp; Founder</h4>
							<p>
								<i class="bx bxs-quote-alt-left quote-icon-left"></i>
								Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
								<i class="bx bxs-quote-alt-right quote-icon-right"></i>
							</p>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="testimonial-item mt-4 mt-lg-0">
							<img src="<?= base_url('assets/') ?>assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
							<h3>Sara Wilsson</h3>
							<h4>Designer</h4>
							<p>
								<i class="bx bxs-quote-alt-left quote-icon-left"></i>
								Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
								<i class="bx bxs-quote-alt-right quote-icon-right"></i>
							</p>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="testimonial-item mt-4">
							<img src="<?= base_url('assets/') ?>assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
							<h3>Jena Karlis</h3>
							<h4>Store Owner</h4>
							<p>
								<i class="bx bxs-quote-alt-left quote-icon-left"></i>
								Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
								<i class="bx bxs-quote-alt-right quote-icon-right"></i>
							</p>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="testimonial-item mt-4">
							<img src="<?= base_url('assets/') ?>assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
							<h3>Matt Brandon</h3>
							<h4>Freelancer</h4>
							<p>
								<i class="bx bxs-quote-alt-left quote-icon-left"></i>
								Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
								<i class="bx bxs-quote-alt-right quote-icon-right"></i>
							</p>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="testimonial-item mt-4">
							<img src="<?= base_url('assets/') ?>assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
							<h3>John Larson</h3>
							<h4>Entrepreneur</h4>
							<p>
								<i class="bx bxs-quote-alt-left quote-icon-left"></i>
								Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
								<i class="bx bxs-quote-alt-right quote-icon-right"></i>
							</p>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="testimonial-item mt-4">
							<img src="<?= base_url('assets/') ?>assets/img/testimonials/testimonials-6.jpg" class="testimonial-img" alt="">
							<h3>Emily Harison</h3>
							<h4>Store Owner</h4>
							<p>
								<i class="bx bxs-quote-alt-left quote-icon-left"></i>
								Eius ipsam praesentium dolor quaerat inventore rerum odio. Quos laudantium adipisci eius. Accusamus qui iste cupiditate sed temporibus est aspernatur. Sequi officiis ea et quia quidem.
								<i class="bx bxs-quote-alt-right quote-icon-right"></i>
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>

	</main><!-- End #main -->

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