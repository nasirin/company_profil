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
</header>