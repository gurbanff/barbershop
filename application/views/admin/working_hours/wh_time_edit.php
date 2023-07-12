<?php $directory = base_url('public/admin/assets/'); ?>
<?php $this->load->view('admin/includes/bodyUp'); ?>
<?php $this->load->view('admin/includes/leftMenu'); ?>
<?php $this->load->view('admin/includes/nav'); ?>


    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-warning">Working Time Update</h6>
            <a href="<?php echo base_url('Working_Hours_List'); ?>" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-left"></i>
            </span>
                <span class="text">Back</span>
            </a>
        </div>
        <div class="card-body">

            <br>
            <h3 class="text-center text-white bg-warning py-2 rounded">Working Time</h3>
            <br>

            <form action="<?php echo base_url('Wh_Time_Edit_Act/'.$get_wh_time_edit_data['id']); ?>" method="post" enctype="application/x-www-form-urlencoded">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane container active mx-0 px-0" id="home">
                        <div class="form-group row mt-3">
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <label for="Position"><b>Week</b></label>
                                <select name="week" id="Position" class="form-control">
                                    <option value="">-SELECT-</option>
                                    <option <?php if($get_wh_time_edit_data['week'] == 'Bazar ertəsi'){echo "SELECTED";} ?> value="Bazar ertəsi">Bazar ertəsi</option>
                                    <option <?php if($get_wh_time_edit_data['week'] == 'Çərşəmbə axşamı'){echo 'SELECTED';} ?> value="Çərşəmbə axşamı">Çərşəmbə axşamı</option>
                                    <option <?php if($get_wh_time_edit_data['week'] == 'Çərşəmbə'){echo 'SELECTED';} ?> value="Çərşəmbə">Çərşəmbə</option>
                                    <option <?php if($get_wh_time_edit_data['week'] == 'Cümə axşamı'){echo 'SELECTED';} ?> value="Cümə axşamı">Cümə axşamı</option>
                                    <option <?php if($get_wh_time_edit_data['week'] == 'Cümə'){echo 'SELECTED';} ?> value="Cümə">Cümə</option>
                                    <option <?php if($get_wh_time_edit_data['week'] == 'Şənbə'){echo 'SELECTED';} ?> value="Şənbə">Şənbə</option>
                                    <option <?php if($get_wh_time_edit_data['week'] == 'Bazar'){echo 'SELECTED';} ?> value="Bazar">Bazar</option>
                                </select>
                            </div>
                            <div class="col-sm-2 mb-3 mb-sm-0">
                                <label for="date">Start Time</label>
                                <input type="time" name="start_time" id="date" class="form-control" value="<?php echo $get_wh_time_edit_data['start_time']; ?>">
                            </div>
                            <div class="col-sm-2 mb-3 mb-sm-0">
                                <label for="date">Close Time</label>
                                <input type="time" name="close_time" id="date" class="form-control" value="<?php echo $get_wh_time_edit_data['close_time']; ?>">
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