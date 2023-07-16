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
        <h6 class="m-0 font-weight-bold text-primary">Footer Contact Details</h6>
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
                    <td><?php echo $footer_contact_single['title']; ?></td>
                </tr>
                <tr>
                    <th>Location</th>
                    <td><?php echo $footer_contact_single['location']; ?></td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td><?php echo $footer_contact_single['phone']; ?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?php echo $footer_contact_single['email']; ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

</div>

<?php $this->load->view('admin/includes/footer'); ?>
<?php $this->load->view('admin/includes/footerStyle'); ?>
