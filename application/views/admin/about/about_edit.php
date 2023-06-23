<?php $directory = base_url('public/admin/assets/'); ?>
<?php $about = base_url('public/user/'); ?>
<?php $this->load->view('admin/includes/bodyUp'); ?>
<?php $this->load->view('admin/includes/leftMenu'); ?>
<?php $this->load->view('admin/includes/nav'); ?>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-warning">About Update Page</h6>
        </div>
        <div class="card-body">

            <br>
            <h3 class="text-center text-white bg-warning py-2 rounded">About Update</h3>
            <br>

            <form action="<?php echo base_url('About_Edit_Act'); ?>" method="post" enctype="multipart/form-data">

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
                                    <input type="file" name="about_file" id="price_lending_img" onchange="setData(this);" hidden>
                                    <div class="file_upload_block mb-3">
                                        <i class="fas fa-plus-circle"></i>
                                    </div>
                                    <input type="text" name="image_h1_text" class="form-control mb-3" placeholder="Left Image Top Text" value="<?php echo $get_about_edit['image_h1_text']; ?>">
                                    <input type="text" name="image_h2_text" class="form-control"  placeholder="Left Image Bottom Text" value="<?php echo $get_about_edit['image_h2_text']; ?>">
                                    <script>
                                        document.querySelector(".file_upload_block").addEventListener("click", function() {
                                            document.querySelector("#price_lending_img").click();
                                        });
                                    </script>
                                </div>
                            </div>
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="col-sm-8 mb-2">
                                    <input type="text" name="about_p_text" class="form-control" id="h1_text" placeholder="Right Top Text" value="<?php echo $get_about_edit['about_p_text'];  ?>">
                                </div>
                                <div class="col-sm-12 mb-2">
                                    <input type="text" name="about_h2_text" class="form-control" id="h1_text" placeholder="Header Text" value="<?php echo $get_about_edit['about_h2_text']; ?>">
                                </div>
                                <div class="col-sm-12 mb-2">
                                    <textarea name="about_p1_text" class="form-control" type="text" name="" cols="45" rows="4"><?php echo $get_about_edit['about_p1_text']; ?></textarea>
                                </div>
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <div class="col-sm-12 mb-2">
                                            <input type="text" name="about_h3_text" class="form-control" id="h1_text" placeholder="RIght First Text" value="<?php echo $get_about_edit['about_h3_text']; ?>">
                                        </div>
                                        <div class="col-sm-12 mb-2">
                                            <textarea class="form-control" name="about_h3_p_text" type="text" cols="60" rows="5"><?php echo $get_about_edit['about_h3_p_text']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-sm-12 mb-2">
                                            <input type="text" name="about_h3_text_2" class="form-control" id="h1_text" placeholder="RIght Second Text" value="<?php echo $get_about_edit['about_h3_text_2']; ?>">
                                        </div>
                                        <div class="col-sm-12 mb-2">
                                            <textarea class="form-control" name="about_h3_p_text_2" type="text" cols="60" rows="5"><?php echo $get_about_edit['about_h3_p_text_2']; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-outline-success">Update</button>
            </form>
        </div>
    </div>


<?php $this->load->view('admin/includes/footer'); ?>
<?php $this->load->view('admin/includes/footerStyle'); ?>