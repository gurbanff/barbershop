<?php $directory = base_url('public/user/') ?>
<?php $this->load->view('user/includes/bodyUp'); ?>
<?php $this->load->view('user/includes/nav'); ?>


    <!-- Carousel Start -->
    <?php if ($slider_all_data) { ?>
        <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                       <video autoplay muted loop id="myVideo">
                            <source src="<?php echo base_url('uploads/admin/slider/').$slider_all_data['file']; ?>" type="video/mp4">
                        </video>
                        <div class="carousel-caption d-flex align-items-center justify-content-center text-start">
                            <div class="mx-sm-5 px-5" style="max-width: 900px;">
                                <h1 style="color: #D7B56D !important" class="mb-3"><?php echo $slider_all_data['h1_text']; ?></h1><br><br><br><br>
                                <h3 style="font-size: 17px !important" class="text-white  mb-4 animated slideInDown"><i style="color: #D7B56D !important" class="<?php echo $slider_all_data['icon']; ?> me-2"></i><?php echo $slider_all_data['first_p_text']; ?></h3>
                                <h3 style="font-size: 17px !important" class="text-white mb-4 animated slideInDown"><i style="color: #D7B56D !important" class="<?php echo $slider_all_data['second_icon']; ?> me-2"></i><?php echo $slider_all_data['second_p_text']; ?></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <!-- Carousel End -->

    <!-- About Start -->
<?php if($about_all_data) { ?>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid w-75 align-self-end" src="<?php echo base_url('uploads/admin/about/').$about_all_data['about_file']; ?>" alt="">
                        <div class="w-50 bg-secondary p-5" style="margin-top: -25%;">
                            <h1 style="color: #D7B56D !important;" class="text-primary mb-3 text-center"><?php echo $about_all_data['image_h1_text']; ?></h1>
                            <h2 class="mb-0 text-center"><?php echo $about_all_data['image_h2_text']; ?></h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p style="color: #D7B56D !important" class="d-inline-block bg-secondary text-primary py-1 px-4"><?php echo $about_all_data['about_p_text']; ?></p>
                    <h2 class="mb-4"><?php echo $about_all_data['about_h2_text']; ?></h2>
                    <p style="white-space: pre-wrap;"><?php echo $about_all_data['about_p1_text']; ?></p>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <h3 class="mb-3"><?php echo $about_all_data['about_h3_text']; ?></h3>
                            <p class="mb-0"><?php echo $about_all_data['about_h3_p_text']; ?></p>
                        </div>
                        <div class="col-md-6">
                            <h3 class="mb-3"><?php echo $about_all_data['about_h3_text_2']; ?></h3>
                            <p class="mb-0"><?php echo $about_all_data['about_h3_p_text_2']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
    <!-- About End -->

    <!-- Service Start -->
<?php if($service_all_data){ ?>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p style="color: #D7B56D !important" class="d-inline-block bg-secondary text-primary py-1 px-4"><?php echo $service_all_data['first_header']; ?></p>
                <h2><?php echo $service_all_data['second_header']; ?></h2>
            </div>
            <?php if($service_list_all_data){ ?>
            <div class="row g-4">
                <?php foreach($service_list_all_data as $item){ ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
                        <div class="ps-4">
                            <h3 style="color: #D7B56D !important" class="mb-3"><?php echo $item['first_heading']; ?></h3>
                            <p><?php echo $item['second_header']; ?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <?php } ?>
        </div>
    </div>
<?php } ?>
    <!-- Service End -->


    <!-- Price Start -->
<?php if ($price_all_data){ ?>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-secondary h-100 d-flex flex-column justify-content-center p-5">
                        <p style="color: #D7B56D !important" class="d-inline-flex bg-dark text-primary py-1 px-4 me-auto">Qiymətlər</p>
                        <h2 class="mb-4"><?php echo $price_all_data['price_h1_text']; ?></h2>
                        <div>
                            <?php
                                for ($price_index = 0; $price_index < count(explode("[price_separator_text]", $price_all_data["price_arr_text"])); $price_index++) { ?>
                                <div class="d-flex justify-content-between border-bottom py-2">
                                    <h6 class="mb-0"><?php echo explode("[price_separator_text]", $price_all_data["price_arr_text"])[$price_index]; ?></h6>
                                    <span style="color: #D7B56D !important; text-transform:uppercase;" class="text-primary"><?php echo explode("[price_separator_value]", $price_all_data["price_arr_value"])[$price_index] . " " . explode("[price_separator_currency]", $price_all_data["price_arr_currency"])[$price_index]; ?></span>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100">
                        <img class="img-fluid h-100" src="<?php echo $directory ?>img/price.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
    <!-- Price End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p style="color: #D7B56D !important" class="d-inline-block bg-secondary text-primary py-1 px-4">Ustalarımız</p>
                <h2>Ustalarımızla tanış olun:</h2>
            </div>
            <div class="row g-4 justify-content-center">
            <?php foreach ($staff_all_data as $item) { ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="team-img position-relative overflow-hidden">
                            <img style="height: 400px !important; width:100% !important; object-fit: cover;" class="img-fluid" src="<?php echo base_url("uploads/admin/staff/") . $item["s_img"]; ?>" alt="">
                            <div class="team-social">
                                <?php if ($item["s_email"]) { ?>
                                    <a class="btn btn-square" href="mailto:<?php echo $item["s_email"]; ?>"><i style="color: #D7B56D !important" class="fas fa-envelope"></i></a>
                                <?php } ?>
                                <?php if ($item["s_mobile"]) { ?>
                                    <a class="btn btn-square" href="tel:<?php echo $item["s_mobile"]; ?>"><i style="color: #D7B56D !important" class="fas fa-mobile"></i></a>
                                <?php } ?>
                                <?php if ($item["s_whatsApp"]) { ?>
                                    <a class="btn btn-square" href="https://api.whatsapp.com/send?phone=<?php echo $item["s_whatsApp"]; ?>"><i style="color: #D7B56D !important" class="fab fa-whatsapp"></i></a>
                                <?php } ?>
                                <?php if ($item["s_facebook"]) { ?>
                                    <a class="btn btn-square" href="<?php echo $item["s_facebook"]; ?>"><i style="color: #D7B56D !important" class="fab fa-facebook"></i></a>
                                <?php } ?>
                                <?php if ($item["s_instagram"]) { ?>
                                    <a class="btn btn-square" href="<?php echo $item["s_instagram"]; ?>"><i style="color: #D7B56D !important" class="fab fa-instagram"></i></a>
                                <?php } ?>
                                <?php if ($item["s_telegram"]) { ?>
                                    <a class="btn btn-square" href="<?php echo $item["s_telegram"]; ?>"><i style="color: #D7B56D !important" class="fab fa-telegram"></i></a>
                                <?php } ?>
                                <?php if ($item["s_youtube"]) { ?>
                                    <a class="btn btn-square" href="<?php echo $item["s_youtube"]; ?>"><i style="color: #D7B56D !important" class="fab fa-youtube"></i></a>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="bg-secondary text-center p-4">
                            <h5><?php echo $item["s_name_az"]; ?></h5>
                            <span style="color: #D7B56D !important" class="text-primary text-capitalize"><?php echo $item["s_position"]; ?></span>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Working Hours Start -->
<?php if ($w_hours_all_data){ ?>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="h-100">
                        <img class="img-fluid h-100" src="<?php echo base_url('uploads/admin/working_hours/').$w_hours_all_data['w_hours_img']; ?>" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-secondary h-100 d-flex flex-column justify-content-center p-5">
                        <p style="color: #D7B56D !important" class="d-inline-flex bg-dark text-primary py-1 px-4 me-auto"><?php echo $w_hours_all_data['w_hours_p_text']; ?></p>
                        <h2 class="mb-4"><?php echo $w_hours_all_data['w_hours_h1_text']; ?></h2>

                        <div>
                            <?php foreach($wh_time_all_data as $item) { ?>
                                <div class="d-flex justify-content-between border-bottom py-2">
                                    <h6 class="mb-0"><?php echo $item['week']; ?></h6>
                                    <span><?php echo $item['start_time']; ?>-<?php echo $item['close_time']; ?></span>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <!-- Working Hours End -->


    <!-- Testimonial Start -->
<?php if ($review_title_all_data){ ?>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p style="color: #D7B56D !important" class="d-inline-block bg-secondary text-primary py-1 px-4"><?php echo $review_title_all_data['title']; ?></p>
                <h1><?php echo $review_title_all_data['second_title']; ?></h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <?php foreach ($review_fb_all_data as $item) { ?>
                    <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='<?php echo base_url('uploads/admin/review_feedback/').$item['file']; ?>' alt=''>">
                        <h4><?php echo $item['name']; ?></h4>
                        <p style="color: #D7B56D !important" class="text-primary"><?php echo $item['position']; ?></p>
                        <span class="fs-5"><?php echo $item['message']; ?></span>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php } ?>
    <!-- Testimonial End -->

    
<?php $this->load->view('user/includes/footer') ?>    
<?php $this->load->view('user/includes/footerStyle') ?>