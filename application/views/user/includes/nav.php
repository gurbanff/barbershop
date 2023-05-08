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
                <?php if($segment == ''){ ?>
                    <a href="<?php echo base_url('Home'); ?>" class="nav-item nav-link <?php if($segment == 'Home' || $segment == ''){ ?> active <?php } ?>">Ana səhifə</a>
                <?php }else{ ?>
                    <a href="<?php echo base_url('Home'); ?>" class="nav-item nav-link <?php if($segment == 'Home'){ ?> active <?php } ?>">Ana səhifə</a>
                <?php } ?>
                
                <a href="<?php echo base_url('About'); ?>" class="nav-item nav-link <?php if($segment == 'About'){ ?> active <?php } ?>">Haqqımızda</a>
                <a href="<?php echo base_url('Services'); ?>" class="nav-item nav-link <?php if($segment == 'Services'){ ?> active <?php } ?>">Xidmətlər</a>
              <!--   <a href="price.html" class="nav-item nav-link">Qiymətlər</a> -->
                <!-- <a href="team.html" class="nav-item nav-link">Ustalar</a> -->
                <a href="<?php echo base_url('Gallery'); ?>" class="nav-item nav-link <?php if($segment == 'Gallery'){ ?> active <?php } ?>">Qalereya</a>
                <a href="<?php echo base_url('Contact'); ?>" class="nav-item nav-link <?php if($segment == 'Contact'){ ?> active <?php } ?>">Əlaqə</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->