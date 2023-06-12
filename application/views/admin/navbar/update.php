<?php $directory = base_url('public/admin/assets/'); ?>
<?php $this->load->view('admin/includes/bodyUp'); ?>
<?php $this->load->view('admin/includes/leftMenu'); ?>
<?php $this->load->view('admin/includes/nav'); ?>


<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Navbar Create
            <a href="<?php echo base_url('Navbar_List'); ?>">
                <button style="float: right;" type="button" class="btn btn-primary">Back</button>
            </a>
        </h6>
    </div>
    <div class="card-body">

        <br>
        <h3 class="text-center text-white bg-primary py-2 rounded">Navbar Section</h3>
        <br>

        <form action="<?php echo base_url('Navbar_Edit_Act/'.$nav_all_data['id']); ?>" method="post" enctype="application/x-www-form-urlencoded">

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane container active mx-0 px-0" id="home">
                    <div class="form-group row mt-3">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="navname1"><b>New Nav Name</b></label>
                            <input type="text" name="nav_name" class="form-control" id="navname1" value="<?php echo $nav_all_data['nav_name']; ?>">
                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="navname2"><b>Nav Link</b></label>
                            <input type="text" name="nav_a_href" class="form-control" id="navname2" value="<?php echo $nav_all_data['nav_a_href']; ?>">
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