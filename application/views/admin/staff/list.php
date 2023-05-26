<?php $directory = base_url('public/admin/assets/'); ?>
<?php $this->load->view('admin/includes/bodyUp'); ?>
<?php $this->load->view('admin/includes/leftMenu'); ?>
<?php $this->load->view('admin/includes/nav'); ?>
<?php $this->load->view('admin/includes/statistics'); ?>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name Surname</th>
                                            <th>Position</th>
                                            <th>Email</th>
                                            <th>Experience</th>
                                            <th>Status</th>
                                            <th>Image</th>
                                            <th>Operations</th>
                                        </tr>
                                    </thead>
                                    <!-- <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot> -->
                                    <tbody>

                                        <?php $say = 0; foreach($get_all_data as $item){ $say++ ?>

                                            <tr>
                                                <td><?php echo $say; ?></td>
                                                <td><?php echo $item['s_name_az']; ?> <?php echo $item['s_surname_az']; ?> </td>
                                                <td><?php echo $item['s_position']; ?></td>
                                                <td><?php echo $item['s_email']; ?></td>
                                                
                                                <td>
                                                    <?php if($item['s_experience']){ ?>
                                                        <?php echo $item['s_experience']; ?> - year
                                                    <?php }else{ ?>
                                                        <?php echo "<b style='color: red;'>Not Selected</b>"; ?>
                                                    <?php } ?>
                                                </td>
                                                <td><?php echo $item['s_status']; ?></td>
                                                <td>
                                                    <?php if($item['s_img']){ ?>
                                                        <img width="50px" height="50px" style="object-fit: cover;" src="<?php #echo base_url('uploads/admin/staff/'.$item['s_img']) ?>" />
                                                    <?php }else{ ?>
                                                        <img width="50px" height="50px" style="object-fit: cover;" src="<?php echo base_url('uploads/admin/staff/noimage.png'); ?>" />
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                <a href="#" style="text-decoration: none;">
                                                        <button type="button" title="View" class="btn btn-success">
                                                            <i class="fas fa-fw fa-eye"></i>
                                                        </button>
                                                    </a>
                                                    <a href="#" style="text-decoration: none;">
                                                        <button type="button" title="Update" class="btn btn-warning">
                                                            <i class="fas fa-fw fa-pen"></i>
                                                        </button>
                                                    </a>
                                                    <a href="#" style="text-decoration: none;">
                                                        <button type="button" title="Delete" class="btn btn-danger">
                                                            <i class="fas fa-fw fa-trash"></i>
                                                        </button>
                                                    </a>
                                                    
                                                </td>
                                            </tr>

                                        <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

<?php $this->load->view('admin/includes/footer'); ?>
<?php $this->load->view('admin/includes/footerStyle'); ?>
