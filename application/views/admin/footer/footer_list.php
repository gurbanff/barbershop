<?php $directory = base_url('public/admin/assets/'); ?>
<?php $this->load->view('admin/includes/bodyUp'); ?>
<?php $this->load->view('admin/includes/leftMenu'); ?>
<?php $this->load->view('admin/includes/nav'); ?>

<div class="card shadow mb-4">
    <div class="card-header mb-4 py-3">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Footer Contact List</h5>
            <a href="<?php echo base_url('Footer_Ct_Create'); ?>">
                <button type="button" class="btn rounded-pill btn-outline-primary">
                    <i class="fas fa-arrow-right"></i> Create
                </button>
            </a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>#</th>
                    <th>First Title</th>
                    <th class="text-center">Location</th>
                    <th class="text-center">Phone</th>
                    <th class="text-center">Email</th>
                    <th>Operations</th>
                </tr>
                </thead>
                <tbody>

                <?php $say = 0; foreach($get_all_footer_contact as $item){ $say++ ?>

                    <tr>
                        <td>
                            <?php echo $say; ?>
                        </td>
                        <td>
                            <?php echo $item['title']; ?>
                        </td>
                        <td style="text-align: center;">
                            <?php echo $item['location']; ?>
                        </td>
                        <td style="text-align: center;">
                            <?php echo $item['phone']; ?>
                        </td>
                        <td style="text-align: center;">
                            <?php echo $item['email']; ?>
                        </td>
                        <td style="width: 200px !important;">
                            <a href="<?php echo base_url('Footer_Contact_Details/'.$item['id']); ?>" style="text-decoration: none;">
                                <button type="button" title="View" class="btn btn-success">
                                    <i class="fas fa-fw fa-eye"></i>
                                </button>
                            </a>
                            <a href="<?php echo base_url('Footer_Ct_Edit'); ?>" style="text-decoration: none;">
                                <button type="button" title="Update" class="btn btn-warning">
                                    <i class="fas fa-fw fa-pen"></i>
                                </button>
                            </a>
                            <a onclick="return confirm('Silmek istediyinize Eminsiz?')" href="<?php echo base_url('Footer_Ct_Delete/'.$item['id']); ?>" style="text-decoration: none;">
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

<!--Tab 2-->

<div class="card shadow mb-4">
    <div class="card-header mb-4 py-3">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Footer Fast Connections List</h5>
            <a href="<?php echo base_url('Fast_Connect_Create'); ?>">
                <button type="button" class="btn rounded-pill btn-outline-primary">
                    <i class="fas fa-arrow-right"></i> Create
                </button>
            </a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>#</th>
                    <th>First Title</th>
                    <th class="text-center">Location</th>
                    <th class="text-center">Phone</th>
                    <th class="text-center">Email</th>
                    <th>Operations</th>
                </tr>
                </thead>
                <tbody>

                <?php $say = 0; foreach($get_all_fast_connect as $item){ $say++ ?>

                    <tr>
                        <td>
                            <?php echo $say; ?>
                        </td>
                        <td>
                            <?php echo $item['title']; ?>
                        </td>
                        <td style="text-align: center;">
                            <?php echo $item['first_title']; ?>
                        </td>
                        <td style="text-align: center;">
                            <?php echo $item['second_title']; ?>
                        </td>
                        <td style="text-align: center;">
                            <?php echo $item['third_title']; ?>
                        </td>
                        <td style="width: 200px !important;">
                            <a href="<?php echo base_url('Fast_Connect_Details/'.$item['id']); ?>" style="text-decoration: none;">
                                <button type="button" title="View" class="btn btn-success">
                                    <i class="fas fa-fw fa-eye"></i>
                                </button>
                            </a>
                            <a href="<?php echo base_url('Fast_Connect_Edit'); ?>" style="text-decoration: none;">
                                <button type="button" title="Update" class="btn btn-warning">
                                    <i class="fas fa-fw fa-pen"></i>
                                </button>
                            </a>
                            <a onclick="return confirm('Silmek istediyinize Eminsiz?')" href="<?php echo base_url('Fast_Connect_Delete/'.$item['id']); ?>" style="text-decoration: none;">
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

<!--Tab 3-->

<div class="card shadow mb-4">
    <div class="card-header mb-4 py-3">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Footer Contact List</h5>
            <a href="<?php echo base_url('News_Create'); ?>">
                <button type="button" class="btn rounded-pill btn-outline-primary">
                    <i class="fas fa-arrow-right"></i> Create
                </button>
            </a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>#</th>
                    <th>First Title</th>
                    <th class="text-center">Twitter</th>
                    <th class="text-center">Facebook</th>
                    <th class="text-center">Youtube</th>
                    <th class="text-center">Instagram</th>
                    <th>Operations</th>
                </tr>
                </thead>
                <tbody>

                <?php $say = 0; foreach($get_all_news as $item){ $say++ ?>

                    <tr>
                        <td>
                            <?php echo $say; ?>
                        </td>
                        <td>
                            <?php echo $item['title']; ?>
                        </td>
                        <td style="text-align: center;">
                            <?php echo substr($item['twitter'],0,15).""; ?>

                        </td>
                        <td style="text-align: center;">
                            <?php echo substr($item['facebook'],0,15).""; ?>
                        </td>
                        <td style="text-align: center;">
                            <?php echo substr($item['youtube'],0,15).""; ?>
                        </td>
                        <td style="text-align: center;">
                            <?php echo substr($item['instagram'],0,15).""; ?>
                        </td>
                        <td style="width: 200px !important;">
                            <a href="<?php echo base_url('News_Details/'.$item['id']); ?>" style="text-decoration: none;">
                                <button type="button" title="View" class="btn btn-success">
                                    <i class="fas fa-fw fa-eye"></i>
                                </button>
                            </a>
                            <a href="<?php echo base_url('News_Edit'); ?>" style="text-decoration: none;">
                                <button type="button" title="Update" class="btn btn-warning">
                                    <i class="fas fa-fw fa-pen"></i>
                                </button>
                            </a>
                            <a onclick="return confirm('Silmek istediyinize Eminsiz?')" href="<?php echo base_url('News_Delete/'.$item['id']); ?>" style="text-decoration: none;">
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


<?php $this->load->view('admin/includes/footer'); ?>
<?php $this->load->view('admin/includes/footerStyle'); ?>
