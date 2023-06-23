<?php $directory = base_url('public/admin/assets/'); ?>
<?php $this->load->view('admin/includes/bodyUp'); ?>
<?php $this->load->view('admin/includes/leftMenu'); ?>
<?php $this->load->view('admin/includes/nav'); ?>

    <style>
        .fix_fa_select_glyph,
        .fix_fa_select_glyph>option {
            font-weight: 900 !important;
        }
    </style>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-warning">Staff Video and Text(h1) Create
                <a href="<?php echo base_url('Slider_List'); ?>">
                    <button style="float: right;" type="button" class="btn btn-warning">Back</button>
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
                            <input type="file" name="file" class="form-control p-1" id="ProfilePhoto">
                        </div>
                        <div class="col-sm-9">
                            <video autoplay muted loop
                                   style="border: 2px; solid orange"
                                   width="200" class="rounded"
                                    src="<?php echo base_url('uploads/admin/slider/') . $get_slider_edit['file']; ?>">
                            </video>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="id_first_icon"><b>First Icon</b></label>
                            <select name="first_icon" id="id_first_icon" class="fa fix_fa_select_glyph form-control">
                                <option <?php if ($get_slider_edit['icon'] == "none_icon") { ?> selected <?php } ?> value="none_icon">-</option>
                                <option <?php if ($get_slider_edit['icon'] == "fas fa-fw fa-map-marker-alt") { ?> selected <?php } ?> value="fas fa-fw fa-map-marker-alt">&#xf3c5;</option>
                                <option <?php if ($get_slider_edit['icon'] == "fas fa-fw fa-phone-alt") { ?> selected <?php } ?> value="fas fa-fw fa-phone-alt">&#xf879;</option>
                                <option <?php if ($get_slider_edit['icon'] == "fas fa-fw fa-star") { ?> selected <?php } ?> value="fas fa-fw fa-star">&#xf005;</option>
                                <option <?php if ($get_slider_edit['icon'] == "fas fa-fw fa-rocket") { ?> selected <?php } ?> value="fas fa-fw fa-rocket">&#xf135;</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <label for="id_first_p_text"><b>First P text</b></label>
                            <input value="<?php echo $get_slider_edit['first_p_text']; ?>" type="text" name="first_p_text" id="id_first_p_text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="id_second_p_icon"><b>Second Icon</b></label>
                            <select name="second_p_icon" id="id_second_p_icon" class="fa fix_fa_select_glyph form-control">
                                <option <?php if ($get_slider_edit['second_icon'] == "none_icon") { ?> selected <?php } ?> value="none_icon">-</option>
                                <option <?php if ($get_slider_edit['second_icon'] == "fas fa-fw fa-map-marker-alt") { ?> selected <?php } ?> value="fas fa-fw fa-map-marker-alt">&#xf3c5;</option>
                                <option <?php if ($get_slider_edit['second_icon'] == "fas fa-fw fa-phone-alt") { ?> selected <?php } ?> value="fas fa-fw fa-phone-alt">&#xf879;</option>
                                <option <?php if ($get_slider_edit['second_icon'] == "fas fa-fw fa-star") { ?> selected <?php } ?> value="fas fa-fw fa-bookmark">&#xf02e;</option>
                                <option <?php if ($get_slider_edit['second_icon'] == "fas fa-fw fa-rocket") { ?> selected <?php } ?> value="fas fa-fw fa-rocket">&#xf135;</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <label for="id_second_p_text"><b>Second P text</b></label>
                            <input value="<?php echo $get_slider_edit['second_p_text']; ?>" type="text" name="second_p_text" id="id_second_p_text" class="form-control">
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