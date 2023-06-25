<?php $directory = base_url('public/admin/assets/'); ?>
<?php $this->load->view('admin/includes/bodyUp'); ?>
<?php $this->load->view('admin/includes/leftMenu'); ?>
<?php $this->load->view('admin/includes/nav'); ?>


<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Navbar Create</h6>
        <a href="<?php echo base_url('Navbar_List'); ?>" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-left"></i>
            </span>
            <span class="text">Back</span>
        </a>
    </div>
    <div class="card-body">

        <br>
        <h3 class="text-center text-white bg-primary py-2 rounded">Navbar Section</h3>
        <br>

        <form action="<?php echo base_url('Navbar_Create_Act'); ?>" method="post" enctype="application/x-www-form-urlencoded">

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane container active mx-0 px-0" id="home">
                    <div class="form-group row mt-3">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="navname1"><b>New Nav Name</b></label>
                            <input type="text" name="nav_name" class="form-control" id="navname1">
                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="navname2"><b>Nav Link</b></label>
                            <input type="text" name="nav_a_href" class="form-control" id="navname2">
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-outline-success">Create</button>


        </form>



    </div>
</div>


<?php $this->load->view('admin/includes/footer'); ?>
<?php $this->load->view('admin/includes/footerStyle'); ?>