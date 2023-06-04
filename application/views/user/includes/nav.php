<?php $directory = base_url('public/user/') ?>
<?php $segment = $this->uri->segment(1); ?>
<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-secondary navbar-dark sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
            <!-- <h1 class="mb-0 text-primary text-uppercase">XL-BARBERSHOP</h1> -->
            <img style="width: 90px; height: 90px !important" src="<?php echo $directory ?>img/image-07-08-22-10-34.png">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <?php foreach($nav_all_data as $item){ ?>
                    <a href="<?php echo base_url($item['nav_a_href']); ?>" class="nav-item nav-link <?php if(strtolower($segment) == strtolower($item['nav_a_href'])) { ?> active <?php } ?>"><?php echo $item['nav_name']; ?></a>
                <?php } ?>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->