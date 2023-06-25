<?php $directory = base_url('public/admin/assets/'); ?>
<?php $this->load->view('admin/includes/bodyUp'); ?>
<?php $this->load->view('admin/includes/leftMenu'); ?>
<?php $this->load->view('admin/includes/nav'); ?>


<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-warning">Navbar Logo Update</h6>
        <a href="<?php echo base_url('Navbar_List'); ?>" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-left"></i>
            </span>
            <span class="text">Back</span>
        </a>
    </div>
    <div class="card-body">

        <br>
        <h3 class="text-center text-white bg-warning py-2 rounded">Navbar Logo Image</h3>
        <br>

        <form action="<?php echo base_url('Nav_Logo_Edit_Act'); ?>" method="post" enctype="multipart/form-data">

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane container active mx-0 px-0" id="home">
                    <div class="form-group row mt-3">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <div class="d-flex flex-column justify-content-start align-items-start">
                                <label for="file_u"><b>Logo Update</b></label>
                                    <div class="d-flex flex-row justify-content-start align-items-start">
                                        <img width="50" id="inp_img" src="<?php echo base_url('uploads/admin/navbar/') . $get_single_img['file']; ?>">
                                        <input type="file" name="file" class="form-control" id="file_u" hidden>
                                    </div>
                                    <script>
                                        document.querySelector("#inp_img").addEventListener("click", function () {
                                            document.querySelector("#file_u").click();
                                        });
                                    </script> 
                                </div>
                            </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="Link"><b>Nav Link</b></label>
                            <input type="text" name="href" class="form-control" id="Link" value="<?php echo $get_single_img['file_href']; ?>">
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