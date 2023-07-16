<?php $directory = base_url('public/admin/assets/'); ?>
<?php $this->load->view('admin/includes/bodyUp'); ?>
<?php $this->load->view('admin/includes/leftMenu'); ?>
<?php $this->load->view('admin/includes/nav'); ?>


    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-warning">Footer Fast Connections List</h6>
            <a href="<?php echo base_url('Footer_List'); ?>" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-left"></i>
            </span>
                <span class="text">Back</span>
            </a>
        </div>
        <div class="card-body">

            <br>
            <h3 class="text-center text-white bg-warning py-2 rounded">Footer Fast Connections Title Update</h3>
            <br>

            <form action="<?php echo base_url('Fast_Connect_Edit_Act'); ?>" method="post" enctype="application/x-www-form-urlencoded">

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane container active mx-0 px-0" id="home">
                        <div class="form-group row mt-3">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="title"><b>Fast Connections Title</b></label>
                                <input type="text" name="title" class="form-control" id="title" value="<?php echo $get_fast_connect_all_data['title']; ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <h3 class="text-center text-white bg-gradient-warning py-2 rounded">Fast Connections Links</h3>
                <br>
                <div class="tab-content">
                    <div class="tab-pane container active mx-0 px-0" id="home">
                        <div class="form-group row mt-3">
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <label for="first"><b>First Title</b></label>
                                <input type="text" name="first_title" class="form-control" id="first" value="<?php echo $get_fast_connect_all_data['first_title']; ?>">
                            </div>
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <label for="second"><b>Second Title</b></label>
                                <input type="text" name="second_title" class="form-control" id="second" value="<?php echo $get_fast_connect_all_data['second_title']; ?>">
                            </div>
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <label for="third"><b>Third Title</b></label>
                                <input type="text" name="third_title" class="form-control" id="third" value="<?php echo $get_fast_connect_all_data['third_title']; ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-pane container active mx-0 px-0" id="home">
                        <div class="form-group row mt-3">
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <label for="first"><b>First Title Link</b></label>
                                <input type="text" name="first_title_link" class="form-control" id="first" value="<?php echo $get_fast_connect_all_data['first_title_link']; ?>">
                            </div>
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <label for="second"><b>Second Title Link</b></label>
                                <input type="text" name="second_title_link" class="form-control" id="second" value="<?php echo $get_fast_connect_all_data['second_title_link']; ?>">
                            </div>
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <label for="third"><b>Third Title Link</b></label>
                                <input type="text" name="third_title_link" class="form-control" id="third" value="<?php echo $get_fast_connect_all_data['third_title_link']; ?>">
                            </div>
                        </div>
                    </div>
                </div>
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