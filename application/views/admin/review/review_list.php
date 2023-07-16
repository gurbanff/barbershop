<?php $directory = base_url('public/admin/assets/'); ?>
<?php $this->load->view('admin/includes/bodyUp'); ?>
<?php $this->load->view('admin/includes/leftMenu'); ?>
<?php $this->load->view('admin/includes/nav'); ?>

<div class="card shadow mb-4">
    <div class="card-header mb-4 py-3">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Review List</h5>
            <a href="<?php echo base_url('Review_Create'); ?>">
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
                    <th class="text-center">Second Title</th>
                    <th>Operations</th>
                </tr>
                </thead>
                <tbody>

                <?php $say = 0; foreach($get_all_data as $item){ $say++ ?>

                    <tr>
                        <td>
                            <?php echo $say; ?>
                        </td>
                        <td>
                            <?php echo $item['title']; ?>
                        </td>
                        <td style="text-align: center;">
                            <?php echo $item['second_title']; ?>
                        </td>
                        <td style="width: 200px !important;">
                            <a style="text-decoration: none;">
                                <button type="button" title="View" class="btn btn-success" disabled>
                                    <i class="fas fa-fw fa-eye"></i>
                                </button>
                            </a>
                            <a href="<?php echo base_url('Review_Edit'); ?>" style="text-decoration: none;">
                                <button type="button" title="Update" class="btn btn-warning">
                                    <i class="fas fa-fw fa-pen"></i>
                                </button>
                            </a>
                            <a onclick="return confirm('Silmek istediyinize Eminsiz?')" href="<?php echo base_url('Working_Hours_Delete/'.$item['id']); ?>" style="text-decoration: none;">
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
            <h5 class="mb-0">Review Feedback List</h5>
            <a href="<?php echo base_url('Review_Fb_Create'); ?>">
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
                    <th>Name</th>
                    <th class="text-center">Position</th>
                    <th class="text-center">Message</th>
                    <th>Operations</th>
                </tr>
                </thead>
                <tbody>

                <?php $say = 0; foreach($get_review_fb_all_data as $item){ $say++ ?>

                    <tr>
                        <td>
                            <?php echo $say; ?>
                        </td>
                        <td style="text-align: center; padding-top: 20px;">
                            <?php echo $item['name']; ?>
                        </td>
                        <td style="text-align: center; padding-top: 20px;">
                            <?php echo $item['position']; ?>
                        </td>
                        <td style="text-align: center; padding-top: 20px;">
                            <?php echo $item['message']; ?>
                        </td>
                        <td style="width: 200px !important;">
                            <a style="text-decoration: none;">
                                <button type="button" title="View" class="btn btn-success" disabled>
                                    <i class="fas fa-fw fa-eye"></i>
                                </button>
                            </a>
                            <a href="<?php echo base_url('Review_Fb_Edit/'.$item['id']); ?>" style="text-decoration: none;">
                                <button type="button" title="Update" class="btn btn-warning">
                                    <i class="fas fa-fw fa-pen"></i>
                                </button>
                            </a>
                            <a onclick="return confirm('Silmek istediyinize Eminsiz?')" href="<?php #echo base_url('Wh_Time_Delete/'.$item['id']); ?>" style="text-decoration: none;">
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
