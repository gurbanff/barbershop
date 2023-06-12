<?php $directory = base_url('public/admin/assets/'); ?>
<?php $this->load->view('admin/includes/bodyUp'); ?>
<?php $this->load->view('admin/includes/leftMenu'); ?>
<?php $this->load->view('admin/includes/nav'); ?>


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Staff Video and Text(h1) Create
                <a href="<?php echo base_url('Slider_List'); ?>">
                    <button style="float: right;" type="button" class="btn btn-primary">Back</button>
                </a>
            </h6>
        </div>
        <div class="card-body">

            <br>
            <h3 class="text-center text-white bg-warning py-2 rounded">Slider Video and H1 Text Create</h3>
            <br>

            <form action="<?php echo base_url('Slider_Edit_Act'); ?>" method="post" enctype="multipart/form-data">

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane container active mx-0 px-0" id="home">
                        <div class="form-group row mt-3">
                            <div class="col-sm-8 mb-3 mb-sm-0">
                                <label for="h1_text"><b>H1 Text</b></label>
                                <input type="text" name="h1_text" class="form-control" id="h1_text" placeholder="Header Text" value="<?php echo $get_slider_edit['h1_text']; ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 mb-3 mb-sm-0">
                            <label for="ProfilePhoto"><b>Slider Video Animation</b></label>
                            <input type="file" name="file" class="form-control" id="ProfilePhoto">
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