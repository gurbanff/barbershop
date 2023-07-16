<?php $directory = base_url('public/admin/assets/'); ?>
<?php $about = base_url('public/user/'); ?>
<?php $this->load->view('admin/includes/bodyUp'); ?>
<?php $this->load->view('admin/includes/leftMenu'); ?>
<?php $this->load->view('admin/includes/nav'); ?>


    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-warning">Review Feedback Update List</h6>
            <a href="<?php echo base_url('Review_List'); ?>" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-left"></i>
            </span>
                <span class="text">Back</span>
            </a>
        </div>
        <div class="card-body">

            <br>
            <h3 class="text-center text-white bg-warning py-2 rounded">Review Feedback Update</h3>
            <br>

            <form action="<?php echo base_url('Review_Fb_Edit_Act/'.$get_review_fb_edit['id']); ?>" method="post" enctype="multipart/form-data">

                <!-- Tab panes -->
                <div class="container-xxl py-5">
                    <div class="container">
                        <div class="row g-5">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <style>
                                        .file_upload_block {
                                            width: 100%;
                                            height: 200px;
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
                                    <input type="file" name="file" id="price_lending_img" onchange="setData(this);" hidden>
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
                                    <label for="h1_text"><b>Name</b></label>
                                    <input type="text" name="name" class="form-control" id="h1_text" placeholder="name or nickname" value="<?php echo $get_review_fb_edit['name']; ?>">
                                </div>
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                    <label for="Position"><b>Position</b></label>
                                    <select name="position" id="Position" class="form-control">
                                        <option value="">-SELECT-</option>
                                        <option <?php if($get_review_fb_edit['position'] == "Mühasib"){echo "SELECTED";} ?> value="Mühasib">Mühasib</option>
                                        <option <?php if($get_review_fb_edit['position'] == "Zərgər"){echo "SELECTED";} ?> value="Zərgər">Zərgər</option>
                                        <option <?php if($get_review_fb_edit['position'] == "Pediatr"){echo "SELECTED";} ?> value="Pediatr">Pediatr</option>
                                        <option <?php if($get_review_fb_edit['position'] == "İstifadəçi"){echo "SELECTED";} ?> value="İstifadəçi">İstifadəçi</option>
                                    </select>
                                </div>
                                <div class="col-sm-12 mb-2">
                                    <label for="message"><b>Message</b></label>
                                    <textarea name="message" id="message" class="form-control" type="text" cols="45" rows="4"><?php echo $get_review_fb_edit['message']; ?></textarea>
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
                    <span class="button-text">Update</span>
                </button>
            </form>
        </div>
    </div>


<?php $this->load->view('admin/includes/footer'); ?>
<?php $this->load->view('admin/includes/footerStyle'); ?>