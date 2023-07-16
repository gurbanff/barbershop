<!-- Footer Start -->
<div class="container-fluid bg-secondary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <?php if($footer_ct_all_data){ ?>
                    <?php foreach ($footer_ct_all_data as $item){ ?>
                        <div class="col-lg-4 col-md-6">
                            <h4 class="mb-4"><?php echo $item['title']; ?></h4>
                            <div class="d-flex align-items-center mb-2">
                                <div class="btn-square bg-dark flex-shrink-0 me-3">
                                    <span style="color: #D7B56D !important" class="fa fa-map-marker-alt text-primary"></span>
                                </div>
                                <span><?php echo $item['location']; ?></span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <div class="btn-square bg-dark flex-shrink-0 me-3">
                                    <span style="color: #D7B56D !important" class="fa fa-phone-alt text-primary"></span>
                                </div>
                                <span><?php echo $item['phone']; ?></span>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="btn-square bg-dark flex-shrink-0 me-3">
                                    <span style="color: #D7B56D !important" class="fa fa-envelope-open text-primary"></span>
                                </div>
                                <span><?php echo $item['email']; ?></span>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
                <?php if($footer_connect_all_data) { ?>
                    <?php foreach ($footer_connect_all_data as $item) { ?>
                        <div class="col-lg-4 col-md-6">
                            <h4 class="mb-4"><?php echo $item['title']; ?></h4>
                            <a class="btn btn-link" href="<?php echo base_url($item['first_title_link']); ?>"><?php echo $item['first_title']; ?></a>
                            <a class="btn btn-link" href="<?php echo base_url($item['second_title_link']); ?>"><?php echo $item['second_title']; ?></a>
                            <a class="btn btn-link" href="<?php echo base_url($item['third_title_link']); ?>"><?php echo $item['third_title']; ?></a>
                        </div>
                    <?php } ?>
                <?php } ?>
                <?php if ($news_all_data) { ?>
                    <?php foreach ($news_all_data as $item) { ?>
                        <div class="col-lg-4 col-md-6">
                            <h4 class="mb-4"><?php echo $item['title']; ?></h4>
                            <div class="d-flex pt-1 m-n1">
                                <a class="btn btn-lg-square btn-dark text-primary m-1" href="<?php echo base_url($item['twitter']); ?>"><i style="color: #D7B56D !important" class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg-square btn-dark text-primary m-1" href="<?php echo base_url($item['facebook']); ?>"><i style="color: #D7B56D !important" class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg-square btn-dark text-primary m-1" href="<?php echo base_url($item['youtube']); ?>"><i style="color: #D7B56D !important" class="fab fa-youtube"></i></a>
                                <a class="btn btn-lg-square btn-dark text-primary m-1" href="<?php echo base_url($item['instagram']); ?>"><i style="color: #D7B56D !important" class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-12 text-center text-md-center mb-3 mb-md-0">
                        &copy; XL Barbershop 2022
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->