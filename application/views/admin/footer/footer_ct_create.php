<?php $directory = base_url('public/admin/assets/'); ?>
<?php $this->load->view('admin/includes/bodyUp'); ?>
<?php $this->load->view('admin/includes/leftMenu'); ?>
<?php $this->load->view('admin/includes/nav'); ?>


    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Footer Contact Create List</h6>
            <a href="<?php echo base_url('Footer_List'); ?>" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-left"></i>
            </span>
                <span class="text">Back</span>
            </a>
        </div>
        <div class="card-body">

            <br>
            <h3 class="text-center text-white bg-primary py-2 rounded">Footer Contact Create</h3>
            <br>

            <form action="<?php echo base_url('Footer_Ct_Create_Act'); ?>" method="post" enctype="application/x-www-form-urlencoded">

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane container active mx-0 px-0" id="home">
                        <div class="form-group row mt-3">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="service_name1"><b>Footer Contact Title</b></label>
                                <input type="text" name="title" class="form-control" id="service_name1">
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <h3 class="text-center text-white bg-primary py-2 rounded">Footer Social Network</h3>
                <br>
                <div class="tab-content">
                    <div class="tab-pane container active mx-0 px-0" id="home">
                        <div class="form-group row mt-3">
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <label for="Location"><b>Location</b></label>
                                <textarea name="location" id="Location" class="form-control" type="text" cols="45" rows="2"></textarea>
                            </div>
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <label for="Phone"><b>Phone</b></label>
                                <input type="text" name="phone" class="form-control" id="Phone">
                            </div>
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <label for="Email"><b>Email</b></label>
                                <input type="text" name="email" class="form-control" id="Email">
                            </div>
                        </div>
                    </div>
                </div>
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