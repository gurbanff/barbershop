<?php $directory = base_url('public/admin/assets/'); ?>
<?php $this->load->view('admin/includes/bodyUp'); ?>
<?php $this->load->view('admin/includes/leftMenu'); ?>
<?php $this->load->view('admin/includes/nav'); ?>


    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-warning">Services Create</h6>
            <a href="<?php echo base_url('Service_List'); ?>" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-left"></i>
            </span>
                <span class="text">Back</span>
            </a>
        </div>
        <div class="card-body">

            <br>
            <h3 class="text-center text-white bg-warning py-2 rounded">Navbar Section</h3>
            <br>

            <form action="<?php echo base_url('Service_Header_Edit_Act/'.$service_single_data['id']); ?>" method="post" enctype="application/x-www-form-urlencoded">

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane container active mx-0 px-0" id="home">
                        <div class="form-group row mt-3">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="service_name1"><b>Service First Name</b></label>
                                <input type="text" name="first_header" class="form-control" id="service_name1" value="<?php echo $service_single_data['first_header']; ?>">
                            </div>
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="service_name2"><b>Service Second Namek</b></label>
                                <input type="text" name="second_header" class="form-control" id="service_name2" value="<?php echo $service_single_data['second_header']; ?>">
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