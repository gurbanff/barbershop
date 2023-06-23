<?php $directory = base_url('public/admin/assets/'); ?>
<?php $this->load->view('admin/includes/bodyUp'); ?>
<?php $this->load->view('admin/includes/leftMenu'); ?>
<?php $this->load->view('admin/includes/nav'); ?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Slider Video and Text(h1) List
            <a href="<?php echo base_url('Slider_Create'); ?>">
                <button style="float: right;" type="button" class="btn btn-primary">Create</button>
            </a>
        </h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>#</th>
                    <th>File Link</th>
                    <th class="text-center">Video Slider</th>
                    <th>Operations</th>
                </tr>
                </thead>
                <tbody>

                <?php $say = 0; foreach($slider_get_all_data as $item){ $say++ ?>

                <tr>

                    <td>
                        <?php echo $say; ?>
                    </td>

                    <td>
                        <?php echo $item['h1_text']; ?>
                    </td>

                    <td style="text-align: center;">
                        <?php if($item['file']){ ?>
                            <video autoplay muted loop
                                    width="150"
                                     src="<?php echo base_url('uploads/admin/slider/') . $item['file']; ?>">

                            </video>
                        <?php }else{ ?>
                            <img width="50px" height="50px" style="object-fit: cover;" src="<?php echo base_url('uploads/admin/staff/noimage.png'); ?>" />
                        <?php } ?>
                    </td>

                    <td style="width: 200px !important;">
                        <a style="text-decoration: none;">
                            <button type="button" title="View" class="btn btn-success" disabled>
                                <i class="fas fa-fw fa-eye"></i>
                            </button>
                        </a>
                        <a href="<?php echo base_url('Slider_Edit'); ?>" style="text-decoration: none;">
                            <button type="button" title="Update" class="btn btn-warning">
                                <i class="fas fa-fw fa-pen"></i>
                            </button>
                        </a>
                        <a onclick="return confirm('Silmek istediyinize Eminsiz?')" href="<?php echo base_url('Slider_Delete'); ?>" style="text-decoration: none;">
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

<?php #$this->load->view('admin/includes/footer'); ?>
<?php $this->load->view('admin/includes/footerStyle'); ?>
