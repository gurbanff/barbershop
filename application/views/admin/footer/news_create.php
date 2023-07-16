<?php $directory = base_url('public/admin/assets/'); ?>
<?php $this->load->view('admin/includes/bodyUp'); ?>
<?php $this->load->view('admin/includes/leftMenu'); ?>
<?php $this->load->view('admin/includes/nav'); ?>


    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">News List</h6>
            <a href="<?php echo base_url('Footer_List'); ?>" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-left"></i>
            </span>
                <span class="text">Back</span>
            </a>
        </div>
        <div class="card-body">

            <br>
            <h3 class="text-center text-white bg-primary py-2 rounded">News Title Create</h3>
            <br>

            <form action="<?php echo base_url('News_Create_Act'); ?>" method="post" enctype="application/x-www-form-urlencoded">

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane container active mx-0 px-0" id="home">
                        <div class="form-group row mt-3">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="title"><b>News Title</b></label>
                                <input type="text" name="title" class="form-control" id="title">
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <h3 class="text-center text-white bg-primary py-2 rounded">News Links Create</h3>
                <br>
                <div class="tab-content">
                    <div class="tab-pane container active mx-0 px-0" id="home">
                        <div class="form-group row mt-3 d-flex justify-content-center align-content-center">
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <label for="twitter"><b>Twitter Link</b></label>
                                <textarea name="twitter" id="twitter" class="form-control" type="text" cols="45" rows="2"></textarea>
                            </div>
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <label for="facebook"><b>Facebook Link</b></label>
                                <textarea name="facebook" id="facebook" class="form-control" type="text" cols="45" rows="2"></textarea>
                            </div>
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <label for="youtube"><b>Youtube Link</b></label>
                                <textarea name="youtube" id="youtube" class="form-control" type="text" cols="45" rows="2"></textarea>
                            </div>
                            <div class="col-sm-4 mt-3 mb-3 mb-sm-0">
                                <label for="instagram"><b>Instagram Link</b></label>
                                <textarea name="instagram" id="instagram" class="form-control" type="text" cols="45" rows="2"></textarea>
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