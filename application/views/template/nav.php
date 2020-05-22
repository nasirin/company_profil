<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

        <a href="<?= base_url() ?>" class="logo"><img src="<?= base_url('assets/assets/img/logo.jpg') ?>" alt="" class="img-fluid"></a>

        <nav class="nav-menu d-none d-lg-block">

            <ul>
                <li class="<?= $this->uri->segment('1') == "" ? 'active' : '' ?>"><a href="<?= base_url() ?>#hero">Home</a></li>
                <li class="<?= $this->uri->segment('2') == 'about' ? 'active' : '' ?>"><a href="<?= site_url('welcome/about') ?>">About Us</a></li>
                <li><a href="#features">Service</a></li>
                <li class="<?= $this->uri->segment('2') == 'harga' ? 'active' : '' ?>"><a href="<?= base_url('welcome/harga') ?>">Pricing</a></li>
                <li class="<?= $this->uri->segment('2') == 'blog' ? 'active' : '' ?>"><a href="<?= base_url('welcome/blog') ?>">Blog</a></li>
                <li class="<?= $this->uri->segment('2') == 'contact' ? 'active' : '' ?>"><a href="<?= base_url('welcome/contact') ?>">Contact</a></li>

            </ul>

        </nav><!-- .nav-menu -->
        <?php if ($this->session->userdata('nama') == null) { ?>
            <a href="#login" data-toggle="modal" class="get-started-btn ml-auto">Login</a>
        <?php } else { ?>
            <div class="ml-auto">
                <div class="dropdown">
                    <button class=" get-started-btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?= ucwords($this->session->userdata('nama')) ?>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="<?= site_url('auth/logout') ?>">Logout</a>
                    </div>
                </div>
            </div>
        <?php } ?>

    </div>
</header>