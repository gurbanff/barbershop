<?php $directory = base_url('public/admin/assets/'); ?>
<?php $this->load->view('admin/includes/bodyUp'); ?>
<?php $this->load->view('admin/includes/leftMenu'); ?>
<?php $this->load->view('admin/includes/nav'); ?>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Service Header List</h6>
        <a href="<?php echo base_url('Service_Header_Create'); ?>" class="btn btn-success btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
            <span class="text">Create</span>
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>#ID</th>
                    <th>First Name</th>
                    <th>Second Name</th>
                    <th>Operations</th>
                </tr>
                </thead>
                <tbody>

                <?php  $say = 0; foreach($get_service_data as $item){ $say++ ?>

                    <tr>
                        <td width="50">
                            <?php  echo $say; ?>
                        </td>
                        <td>
                           <?php echo $item['first_header']; ?>
                        </td>
                        <td>
                            <?php  echo $item['second_header']; ?>
                        </td>
                        <td width="200" class="text-center">
                            <a style="text-decoration: none;">
                                <button type="button" title="View" class="btn btn-outline-success" disabled>
                                    <i class="fas fa-fw fa-eye"></i>
                                </button>
                            </a>
                            <a href="<?php echo base_url('Service_Header_Edit'); ?>" style="text-decoration: none;">
                                <button type="button" title="Update" class="btn btn-outline-warning">
                                    <i class="fas fa-fw fa-pen"></i>
                                </button>
                            </a>
                            <a onclick="return confirm('Silmek istediyinize Eminsiz?')" href="<?php  echo base_url('Service_Header_Delete/'.$item['id']); ?>" style="text-decoration: none;">
                                <button type="button" title="Delete" class="btn btn-outline-danger">
                                    <i class="fas fa-fw fa-trash"></i>
                                </button>
                            </a>

                        </td>
                    </tr>

                <?php  } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

<!--                </div>-->
<!-- Tab 2 -->
<!-- DataTales Example -->

<div class="row">
    <div class="col-sm-12">
        <div class="card shadow mb-4 ">
            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-primary">Services Header List</h6>
                <a href="<?php echo base_url('Service_Create'); ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Create</span>
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>#ID</th>
                            <th>Head</th>
                            <th>Paragraph Name</th>
                            <th>Operations</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php $say = 0; foreach($get_list_data as $item){ $say++ ?>

                            <tr>
                                <td style="width: 50px; "><?php echo $say; ?></td>
                                <td><?php echo $item['first_heading']; ?></td>
                                <td><?php echo substr($item['second_header'],0,35)."..."; ?></td>
                                <td width="200" class="text-center">
                                    <a style="text-decoration: none;">
                                        <button type="button" title="View" class="btn btn-outline-success" disabled>
                                            <i class="fas fa-fw fa-eye"></i>
                                        </button>
                                    </a>
                                    <a href="<?php echo base_url('Service_List_Update/'.$item['id']); ?>" style="text-decoration: none;">
                                        <button type="button" title="Update" class="btn btn-outline-warning">
                                            <i class="fas fa-fw fa-pen"></i>
                                        </button>
                                    </a>
                                    <a onclick="return confirm('Silmek istediyinize Eminsiz?')" href="<?php echo base_url('Service_List_Delete/'.$item['id']); ?>" style="text-decoration: none;">
                                        <button type="button" title="Delete" class="btn btn-outline-danger">
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
</div>

<?php $this->load->view('admin/includes/footer'); ?>
<?php $this->load->view('admin/includes/footerStyle'); ?>
