<?php $directory = base_url('public/admin/assets/'); ?>
<?php $this->load->view('admin/includes/bodyUp'); ?>
<?php $this->load->view('admin/includes/leftMenu'); ?>
<?php $this->load->view('admin/includes/nav'); ?>

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
        <h6 class="m-0 font-weight-bold text-primary">Footer Fast Connect Details</h6>
        <a href="<?php echo base_url('Footer_List'); ?>" class="btn btn-primary btn-icon-split">
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
                    <th style="width: 200px;">Title</th>
                    <td><?php echo $fast_connect_details['title']; ?></td>
                </tr>
                <tr>
                    <th>First Title</th>
                    <td><?php echo $fast_connect_details['first_title']; ?></td>
                </tr>
                <tr>
                    <th>First Title Link</th>
                    <td><?php echo $fast_connect_details['first_title_link']; ?></td>
                </tr>
                <tr>
                    <th>Second Title</th>
                    <td><?php echo $fast_connect_details['second_title']; ?></td>
                </tr>
                <tr>
                    <th>Second Title Link</th>
                    <td><?php echo $fast_connect_details['second_title_link']; ?></td>
                </tr>
                <tr>
                    <th>Third Title</th>
                    <td><?php echo $fast_connect_details['second_title']; ?></td>
                </tr>
                <tr>
                    <th>Third Title Link</th>
                    <td><?php echo $fast_connect_details['third_title_link']; ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

</div>

<?php $this->load->view('admin/includes/footer'); ?>
<?php $this->load->view('admin/includes/footerStyle'); ?>