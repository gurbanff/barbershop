<?php $directory = base_url('public/admin/assets/'); ?>
<?php $this->load->view('admin/includes/bodyUp'); ?>
<?php $this->load->view('admin/includes/leftMenu'); ?>
<?php $this->load->view('admin/includes/nav'); ?>


    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-warning">Review Create Section</h6>
            <a href="<?php echo base_url('Review_List'); ?>" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-left"></i>
            </span>
                <span class="text">Back</span>
            </a>
        </div>
        <div class="card-body">

            <br>
            <h3 class="text-center text-white bg-warning py-2 rounded">Review Create</h3>
            <br>

            <form action="<?php echo base_url('Review_Edit_Act'); ?>" method="post" enctype="application/x-www-form-urlencoded">

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane container active mx-0 px-0" id="home">
                        <div class="form-group row mt-3">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="service_name1"><b>Review First Name</b></label>
                                <input type="text" name="title" class="form-control" id="service_name1" value="<?php echo $get_review_edit_data['title']; ?>">
                            </div>
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="service_name2"><b>Review Second Name</b></label>
                                <input type="text" name="second_title" class="form-control" id="service_name2" value="<?php echo $get_review_edit_data['second_title']; ?>">
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