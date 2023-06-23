<?php $directory = base_url('public/user/') ?>
<!DOCTYPE html>
<html lang="az">

<head>
    <meta charset="utf-8">
    <title>Barbershop</title>
    <link rel="shortcut icon" href="<?php echo $directory ?>img/image-07-08-22-10-34.png">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?php echo $directory ?>img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Oswald:wght@600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo $directory ?>lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo $directory ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo $directory ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo $directory ?>css/style.css" rel="stylesheet">
</head>

       <style>
            .port-image {
             width: 100%;}

           .gallery_product {
            margin-bottom: 30px;}
           .btn:focus{
            outline: none!important;
            border:none!important;
            box-shadow: none!important;}
       </style>


<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div style="color: #D7B56D !important"  class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Yüklənir...</span>
        </div>
    </div>


<?php $this->load->view('user/includes/nav'); ?>


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="mb-3">Qalereya</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="index.html">Ana səhifə</a></li>
                    <li style="color: #D7B56D !important" class="breadcrumb-item text-primary active" aria-current="page">Qalereya</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <!-- <p style="color: #D7B56D !important" class="d-inline-block bg-secondary text-primary py-1 px-4">Xidmətlərimiz</p> -->
                <h2 style="color: #D7B56D !important">Siz ən yaxşısına layiqsiniz!</h2>
            </div>

   <div class="container-fluid">
        <div class="row port-page">

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="<?php echo $directory ?>image/bir.jpg" class="img-responsive center-block port-image">
            </div>
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                <img src="<?php echo $directory ?>image/iki.jpg" class="img-responsive center-block port-image">
            </div>
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="<?php echo $directory ?>image/dord.jpg" class="img-responsive center-block port-image">
            </div>
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="<?php echo $directory ?>image/alti.jpg" class="img-responsive center-block port-image">
            </div>
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="<?php echo $directory ?>image/doqquz.jpg" class="img-responsive center-block port-image">
            </div>
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="<?php echo $directory ?>image/onbir.jpg" class="img-responsive center-block port-image">
            </div>
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="<?php echo $directory ?>image/yeddi.jpg" class="img-responsive center-block port-image">
            </div>
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="<?php echo $directory ?>image/oniki.jpg" class="img-responsive center-block port-image">
            </div>
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="<?php echo $directory ?>image/onuch.jpg" class="img-responsive center-block port-image">
            </div>
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="<?php echo $directory ?>image/otuz.jpg" class="img-responsive center-block port-image">
            </div>
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="<?php echo $directory ?>image/otuzbir.jpg" class="img-responsive center-block port-image">
            </div>
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="<?php echo $directory ?>image/otuziki.jpg" class="img-responsive center-block port-image">
            </div>        
  </div>
        </div>

<?php $this->load->view('user/includes/footer') ?>    
<?php $this->load->view('user/includes/footerStyle') ?>