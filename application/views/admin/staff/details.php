<?php $directory = base_url('public/admin/assets/'); ?>
<?php $this->load->view('admin/includes/bodyUp'); ?>
<?php $this->load->view('admin/includes/leftMenu'); ?>
<?php $this->load->view('admin/includes/nav'); ?>
<?php $this->load->view('admin/includes/statistics'); ?>
<style>
    .success_st, .danger_st
    {
        width: 100px;
        height: 20px;
        color: white;
        padding: 5px;
        background: green;
        border-radius: 4px;
    }

    .danger_st
    {
        background: red;
    }
</style>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary">Staff Details</h6>
                            <a href="<?php echo base_url('Staff_List'); ?>" class="btn btn-primary btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-arrow-left"></i>
                                </span>
                                <span class="text">Back</span>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    
                                    <tr>
                                        <th style="width: 200px;">Name Surname Az</th>
                                        <td><?php echo $single_data['s_name_az']; ?> <?php echo $single_data['s_surname_az']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Name Surname En</th>
                                        <td><?php echo $single_data['s_name_en']; ?> <?php echo $single_data['s_surname_en']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Name Surname Ru</th>
                                        <td><?php echo $single_data['s_name_ru']; ?> <?php echo $single_data['s_surname_ru']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Description Az</th>
                                        <td><?php echo $single_data['s_description_az']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Description En</th>
                                        <td><?php echo $single_data['s_description_en']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Description Ru</th>
                                        <td><?php echo $single_data['s_description_ru']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Position</th>
                                        <td><?php echo $single_data['s_position']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td><?php echo $single_data['s_email']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Experience</th>
                                        <td><?php echo $single_data['s_experience']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Mobile</th>
                                        <td><?php echo $single_data['s_mobile']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>WhatsApp</th>
                                        <td><?php echo $single_data['s_whatsApp']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Facebook</th>
                                        <td><?php echo $single_data['s_facebook']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Instagram</th>
                                        <td><?php echo $single_data['s_instagram']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Telegram</th>
                                        <td><?php echo $single_data['s_telegram']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Youtube</th>
                                        <td><?php echo $single_data['s_youtube']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <?php if($single_data['s_status'] == "Active"){ ?>
                                            <td><span class="success_st"><?php echo $single_data['s_status']; ?></span></td>
                                        <?php }else{ ?>
                                            <td><span class="danger_st"><?php echo $single_data['s_status']; ?></span></td>
                                        <?php } ?>
                                    </tr>
                                    <tr>
                                        <th>Image</th>
                                        <!-- <td> -->
                                            <?php if($single_data['s_img']){ ?>
                                                <td><img width="70" height="70"  src="<?php echo base_url('uploads/admin/staff/'.$single_data['s_img']); ?>"/></td>
                                            <?php }else{ ?>
                                                <td><img width="70" height="70" style="object-fit: cover;" src="<?php echo base_url('uploads/admin/staff/noimage.png'); ?>"/></td>
                                            <?php } ?>
                                        <!-- </td> -->
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

<?php $this->load->view('admin/includes/footer'); ?>
<?php $this->load->view('admin/includes/footerStyle'); ?>
