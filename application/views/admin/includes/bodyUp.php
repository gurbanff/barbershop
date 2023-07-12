<?php if(!($this->session->userdata("first_name")) && !($this->session->userdata('sur_name')) && !($this->session->userdata("img_up"))){
    $this->session->set_flashdata('flash_err', 'Error! Wrong Artisliy eleme!');
    redirect(base_url('Login'));
}

?>
<?php $directory = base_url('public/admin/assets/'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>SB_Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo $directory ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="<?php echo $directory ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo $directory ?>css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        .iconDevil
        {
            display: inline-block;
            font-size: 40px;
            width: 10px;
            text-align: left;
        }
        @import url("https://fonts.googleapis.com/css?family=Mukta:700");
        * {
            box-sizing: border-box;
        }
        *::before, *::after {
            box-sizing: border-box;
        }

        body {
            font-size: 1rem;
            line-height: 1.5;
            margin: 0;
            min-height: 100vh;
            background: #f3f8fa;
        }

        button {
            position: relative;
            display: inline-block;
            cursor: pointer;
            outline: none;
            border: 0;
            vertical-align: middle;
            text-decoration: none;
            background: transparent;
            padding: 0;
            font-size: inherit;
            font-family: inherit;
        }
        button.learn-more {
            width: 12rem;
            height: auto;
            float: right;
        }
        button.learn-more .circle {
            transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
            position: relative;
            display: block;
            margin: 0;
            width: 3rem;
            height: 3rem;
            background: #26de81;
            border-radius: 1.625rem;
        }
        button.learn-more .circle .icon {
            transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
            position: absolute;
            top: 0;
            bottom: 0;
            margin: auto;
            background: #fff;
        }
        button.learn-more .circle .icon.arrow {
            transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
            left: 0.625rem;
            width: 1.125rem;
            height: 0.125rem;
            background: none;
        }
        button.learn-more .circle .icon.arrow::before {
            position: absolute;
            content: "";
            top: -0.25rem;
            right: 0.0625rem;
            width: 0.645rem;
            height: 0.625rem;
            border-top: 0.150rem solid #fff;
            border-right: 0.150rem solid #fff;
            transform: rotate(45deg);
        }
        button.learn-more .button-text {
            transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            padding: 0.75rem 0;
            margin: 0 0 0 1.85rem;
            color: #282936;
            font-weight: 500;
            line-height: 1.6;
            text-align: center;
            text-transform: uppercase;
        }
        button:hover .circle {
            width: 100%;
        }
        button:hover .circle .icon.arrow {
            background: #fff;
            transform: translate(1rem, 0);
        }
        button:hover .button-text {
            color: #fff;
        }

    </style>

</head>

<body id="page-top">