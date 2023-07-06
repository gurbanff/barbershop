<?php $directory = base_url('public/admin/assets/'); ?>
<?php $this->load->view('admin/includes/bodyUp'); ?>
<?php $this->load->view('admin/includes/leftMenu'); ?>
<?php $this->load->view('admin/includes/nav'); ?>


    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-warning">Services Update</h6>
            <a href="<?php echo base_url('Service_List'); ?>" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-left"></i>
            </span>
                <span class="text">Back</span>
            </a>
        </div>
        <div class="card-body">

            <br>
            <h3 class="text-center text-white bg-warning py-2 rounded">Service Update Section</h3>
            <br>

            <form action="<?php echo base_url('Service_List_Update_Act/'.$get_service_data['id']); ?>" method="post" enctype="application/x-www-form-urlencoded">

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane container active mx-0 px-0" id="home">
                        <div class="form-group row mt-3">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="service_name_1"><b>Heading Name</b></label>
                                <input type="text" name="first_heading" class="form-control" id="service_name_1" value="<?php echo $get_service_data['first_heading']; ?>">
                            </div>
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <div class="col-sm-12 mb-2">
                                    <textarea id="service_name_2" class="form-control" type="text" name="second_area" cols="45" rows="4"><?php echo $get_service_data['second_header']; ?></textarea>
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