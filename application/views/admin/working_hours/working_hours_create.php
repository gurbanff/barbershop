<?php $directory = base_url('public/admin/assets/'); ?>
<?php $about = base_url('public/user/'); ?>
<?php $this->load->view('admin/includes/bodyUp'); ?>
<?php $this->load->view('admin/includes/leftMenu'); ?>
<?php $this->load->view('admin/includes/nav'); ?>

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

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Working Hours Title Create List</h6>
            <a href="<?php echo base_url('Working_Hours_List'); ?>" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-left"></i>
            </span>
                <span class="text">Back</span>
            </a>
        </div>
        <div class="card-body">

            <br>
            <h3 class="text-center text-white bg-primary py-2 rounded">Working Hours Create</h3>
            <br>

            <form action="<?php echo base_url('Working_Hours_Create_Act'); ?>" method="post" enctype="multipart/form-data">

                <!-- Tab panes -->
                <div class="container-xxl py-5">
                    <div class="container">
                        <div class="row g-5">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <style>
                                        .file_upload_block {
                                            width: 100%;
                                            height: 400px;
                                            display: flex;
                                            flex-direction: column;
                                            justify-content: center;
                                            align-items: center;
                                            border: 1px solid #B2BEB5;
                                            border-radius: 6px;
                                            font-size: 64px;
                                            transition: background-color 128ms linear, color 128ms linear;
                                            background-size: cover;
                                            background-repeat: no-repeat;
                                            background-position: center center;
                                            color: #2d3436;
                                            cursor: pointer;
                                        }

                                        .file_upload_block:hover {
                                            background-color: rgba(178, 190, 181, 0.3);
                                        }
                                    </style>
                                    <script>
                                        function setData(input) {
                                            document.querySelector(".file_upload_block").style.backgroundImage = `url("${URL.createObjectURL(input.files[0])}")`;
                                            document.querySelector(".file_upload_block").style.color = "#ffffff";
                                        }
                                    </script>
                                    <label for="price_lending_img"><b>Image Upload</b></label>
                                    <input type="file" name="working_hours_file" id="price_lending_img" onchange="setData(this);" hidden>
                                    <div class="file_upload_block mb-3">
                                        <i class="fas fa-plus-circle"></i>
                                    </div>
                                    <script>
                                        document.querySelector(".file_upload_block").addEventListener("click", function() {
                                            document.querySelector("#price_lending_img").click();
                                        });
                                    </script>
                                </div>
                            </div>
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="col-sm-8 mb-2">
                                    <label for="h1_text"><b>Title</b></label>
                                    <input type="text" name="w_hours_p_text" class="form-control" id="h1_text" placeholder="Iş saatlarımız">
                                </div>
                                <div class="col-sm-12 mb-2">
                                    <input type="text" name="w_hours_h1_text" class="form-control" id="h2_text" placeholder="H1 Text">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <button type="submit" class="learn-more">
                            <span class="circle" aria-hidden="true">
                            <span class="icon arrow"></span>
                            </span>
                    <span class="button-text">Create</span>
                </button>
            </form>
        </div>
    </div>


<?php $this->load->view('admin/includes/footer'); ?>
<?php $this->load->view('admin/includes/footerStyle'); ?>