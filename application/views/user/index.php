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
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p style="color: #D7B56D !important" class="d-inline-block bg-secondary text-primary py-1 px-4">Xidmətlərimiz</p>
                <h2>Biz nələr edirik?</h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
                        <!-- <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <img  class="img-fluid" src="<?php echo $directory ?>img/haircut.png" alt="">
                        </div> -->
                        <div class="ps-4">
                            <h3 style="color: #D7B56D !important" class="mb-3">Saç kəsimi</h3>
                            <p>Hər üz quruluşuna uyğun xüsusi saç kəsim formaları. Həmçinin anatomik saç kəsimi.</p>
                        </div>
                        <!-- <a class="btn btn-square" href=""><i class="fa fa-plus text-primary"></i></a> -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
                        <!-- <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <img class="img-fluid" src="<?php echo $directory ?>img/beard-trim.png" alt="">
                        </div> -->
                        <div class="ps-4">
                            <h3 style="color: #D7B56D !important" class="mb-3">Saqqal kəsimi</h3>
                            <p>Seyrək saqqallara forma verilməsi. Özəl buxar vasitəsiylə saqqalın ülgüc ilə təraş edilməsi.</p>
                        </div>
                        <!-- <a class="btn btn-square" href=""><i class="fa fa-plus text-primary"></i></a> -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
                        <!-- <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <img class="img-fluid" src="<?php echo $directory ?>img/mans-shave.png" alt="">
                        </div> -->
                        <div class="ps-4">
                            <h3 style="color: #D7B56D !important" class="mb-3">Saç darama</h3>
                            <p>Gedəcəyiniz tədbirə uyğun saçların daranması. Seyrək saçların topik vasitəsylə örtülməsi.</p>
                        </div>
                        <!-- <a class="btn btn-square" href=""><i class="fa fa-plus text-primary"></i></a> -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
                        <div class="ps-4">
                            <h3 style="color: #D7B56D !important" class="mb-3">Saç boyama</h3>
                            <p>Hər növ saçların peşəkar boyanması. Ağ saçların mikro boya ilə örtünməsi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
                        <div class="ps-4">
                            <h3 style="color: #D7B56D !important" class="mb-3">Keratin + Perma</h3>
                            <p>Orijinal schwarzkopf məhsulları ilə saçların düzləşdirilməsi və həmçinin burulması</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
                        <div class="ps-4">
                            <h3 style="color: #D7B56D !important" class="mb-3">Üz təmizlənməsi</h3>
                            <p>Hydrafacial aparatında, xüsusi serumlar, birdəfəlik başlıqlar və pilinqlərdən istifadə edilməklə üzün təmizlənməsi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Price Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-secondary h-100 d-flex flex-column justify-content-center p-5">
                        <p style="color: #D7B56D !important" class="d-inline-flex bg-dark text-primary py-1 px-4 me-auto">Qiymətlər</p>
                        <h2 class="mb-4">Qiymətlərimizlə tanış olun</h2>
                        <div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="mb-0">Saç kəsimi</h6>
                                <span style="color: #D7B56D !important" class="text-primary">20 AZN</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="mb-0">Saqqal kəsimi</h6>
                                <span style="color: #D7B56D !important" class="text-primary">5-15 AZN</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="mb-0">Təraş</h6>
                                <span style="color: #D7B56D !important" class="text-primary">10-20 AZN</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="mb-0">Saç boyama</h6>
                                <span style="color: #D7B56D !important" class="text-primary">15-30 AZN</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="mb-0">Keratin + Perma</h6>
                                <span style="color: #D7B56D !important" class="text-primary">30-150 AZN</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="mb-0">Saç darama</h6>
                                <span style="color: #D7B56D !important" class="text-primary">5-15 AZN</span>
                            </div>
                            <div class="d-flex justify-content-between py-2">
                                <h6 class="mb-0">VİP saç kəsimi</h6>
                                <span style="color: #D7B56D !important" class="text-primary">30-50 AZN</span>
                            </div>
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
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="h-100">
                        <img class="img-fluid h-100" src="<?php echo $directory ?>img/open.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-secondary h-100 d-flex flex-column justify-content-center p-5">
                        <p style="color: #D7B56D !important" class="d-inline-flex bg-dark text-primary py-1 px-4 me-auto">İş saatlarımız</p>
                        <h2 class="mb-4">Ödənişsiz dayanacağımız mövcuddur</h2>
                        <div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="mb-0">Bazar ertəsi</h6>
                                <span>10:00-21:00</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="mb-0">Çərşəmbə axşamı</h6>
                                <span>10:00-21:00</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="mb-0">Çərşəmbə</h6>
                                <span>10:00-21:00</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="mb-0">Cümə axşamı</h6>
                                <span>10:00-21:00</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="mb-0">Cümə</h6>
                                <span>10:00-21:00</span>
                            </div>
                            <div class="d-flex justify-content-between py-2">
                                <h6 class="mb-0">Şənbə / Bazar</h6>
                                <span>10:00-20:00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Working Hours End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p style="color: #D7B56D !important" class="d-inline-block bg-secondary text-primary py-1 px-4">Rəylər</p>
                <h1>Müştərilərimiz nə düşünür?</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='<?php echo $directory ?>img/testimonial-1.jpg' alt=''>">
                    <h4>Nail bəy</h4>
                    <p style="color: #D7B56D !important" class="text-primary">Mühasib</p>
                    <span class="fs-5">Bizə doğma insan, mehriban, pozitiv bərbərimiz İbrahim usta, əlləriniz var olsun, dəyərli sənətkar!</span>
                </div>
                <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='<?php echo $directory ?>img/testimonial-2.jpg' alt=''>">
                    <h4>Fərid bəy</h4>
                    <p style="color: #D7B56D !important" class="text-primary">Pediatr</p>
                    <span class="fs-5">Öz dərin təşəkkürümü bildirirəm ki, ailəvi olaraq bizə layiqli xidmət göstərirsiniz və biz də daima sizə sadiq qalırıq.</span>
                </div>
                <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='<?php echo $directory ?>img/testimonial-3.jpg' alt=''>">
                    <h4>Ayaz bəy</h4>
                    <p style="color: #D7B56D !important" class="text-primary">Zərgər</p>
                    <span class="fs-5">Peşəkar bərbərlikdən savayı, əsl dost, sevimli, pozitiv və gülərüz insan, sənə ən əsası can sağlığı, uzun ömür və gələcək işlərində hər zaman uğur əldə etməyi arzulayıram. </span>
                </div>
            </div>      
        </div>
    </div>
    <!-- Testimonial End -->

    
<?php $this->load->view('user/includes/footer') ?>    
<?php $this->load->view('user/includes/footerStyle') ?>