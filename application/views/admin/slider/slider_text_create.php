<?php $directory = base_url('public/admin/assets/'); ?>
<?php $this->load->view('admin/includes/bodyUp'); ?>
<?php $this->load->view('admin/includes/leftMenu'); ?>
<?php $this->load->view('admin/includes/nav'); ?>


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Staff Create
                <a href="<?php echo base_url('Staff_List'); ?>">
                    <button style="float: right;" type="button" class="btn btn-primary">Back</button>
                </a>
            </h6>
        </div>
        <div class="card-body">

            <br>
            <h3 class="text-center text-white bg-primary py-2 rounded">Slider Create</h3>
            <br>

            <form action="<?php echo base_url('#'); ?>" method="post" enctype="multipart/form-data">

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane container active mx-0 px-0" id="home">
                        <div class="form-group row mt-3">
                            <div class="col-sm-2 mb-3 mb-sm-0">
                                <label for="Status"><b>Status</b></label>
                                <select name="Status" id="Status" class="form-control">
                                    <option value="">-Select-</option>
                                    <option value="">edit</option>
                                    <option value="">phone</option>
                                </select>
                            </div>
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="FirstName"><b>First Name</b></label>
                                <input type="text" name="FirstName_az" class="form-control" id="FirstName" placeholder="First Name">
                            </div>
                        </div>
                    </div>
                </div>
                <br>

                <div class="form-group">
                    <div class="row">




                        <div class="col-sm-3 mb-3 mb-sm-0">
                            <label for="ProfilePhoto"><b>Profile Photo</b></label>
                            <input type="file" name="file" class="form-control" id="ProfilePhoto">
                        </div>
                    </div>
                </div>
                <br>

                <button type="submit" class="btn btn-primary">Submit</button>


            </form>



        </div>
    </div>


<?php $this->load->view('admin/includes/footer'); ?>
<?php $this->load->view('admin/includes/footerStyle'); ?>