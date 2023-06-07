<?php $directory = base_url('public/admin/assets/'); ?>
<?php $this->load->view('admin/includes/bodyUp'); ?>
<?php $this->load->view('admin/includes/leftMenu'); ?>
<?php $this->load->view('admin/includes/nav'); ?>


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Navbar Logo List
                                <a href="<?php echo base_url('Nav_Logo_Create'); ?>">
                                    <button style="float: right;" type="button" class="btn btn-primary">Create</button>
                                </a>
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#ID</th>
                                            <th>Navbar Logo</th>
                                            <th>Navbar Logo Link</th>
                                            <th>Operations</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php $say = 0; foreach($get_single_img as $item){ $say++ ?>

                                            <tr>                                             
                                                <td width="50">
                                                    <?php echo $say; ?>
                                                </td>
                                                <td>
                                                    <?php if($item['file']){ ?>
                                                        <img width="50px" height="50px" style="object-fit: cover;" src="<?php echo base_url('uploads/admin/navbar/'.$item['file']) ?>" />
                                                    <?php }else{ ?>
                                                        <img width="50px" height="50px" style="object-fit: cover;" src="<?php echo base_url('uploads/admin/staff/noimage.png'); ?>" />
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <?php echo $item['file_href']; ?>
                                                </td>
                                                <td width="200">
                                                    <a style="text-decoration: none;">
                                                        <button type="button" title="View" class="btn btn-success" disabled>
                                                            <i class="fas fa-fw fa-eye"></i>
                                                        </button>
                                                    </a>
                                                    <a href="<?php echo base_url('Nav_Logo_Edit'); ?>" style="text-decoration: none;">
                                                        <button type="button" title="Update" class="btn btn-warning">
                                                            <i class="fas fa-fw fa-pen"></i>
                                                        </button>
                                                    </a>
                                                    <a onclick="return confirm('Silmek istediyinize Eminsiz?')" href="<?php #echo base_url('Navbar_Delete/'.$item['id']); ?>" style="text-decoration: none;">
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
                    <!-- Tab 2 -->
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Navbar List
                                <a href="<?php echo base_url('Navbar_Create'); ?>">
                                    <button style="float: right;" type="button" class="btn btn-primary">Create</button>
                                </a>
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#ID</th>
                                            <th>Navbar Name</th>
                                            <th>Navbar Link</th>
                                            <th>Operations</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php $say = 0; foreach($get_all_nav as $item){ $say++ ?>

                                            <tr>
                                                <td style="width: 50px; "><?php echo $say; ?></td>                                                
                                                <td><?php echo $item['nav_name']; ?></td>                                                
                                                <td><?php echo $item['nav_a_href']; ?></td>                                                
                                                <td width="200">
                                                    <a style="text-decoration: none;">
                                                        <button type="button" title="View" class="btn btn-success" disabled>
                                                            <i class="fas fa-fw fa-eye"></i>
                                                        </button>
                                                    </a>
                                                    <a href="<?php echo base_url('Navbar_Edit/'.$item['id']); ?>" style="text-decoration: none;">
                                                        <button type="button" title="Update" class="btn btn-warning">
                                                            <i class="fas fa-fw fa-pen"></i>
                                                        </button>
                                                    </a>
                                                    <a onclick="return confirm('Silmek istediyinize Eminsiz?')" href="<?php echo base_url('Navbar_Delete/'.$item['id']); ?>" style="text-decoration: none;">
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
