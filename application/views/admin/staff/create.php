<?php $directory = base_url('public/admin/assets/'); ?>
<?php $this->load->view('admin/includes/bodyUp'); ?>
<?php $this->load->view('admin/includes/leftMenu'); ?>
<?php $this->load->view('admin/includes/nav'); ?>

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Staff Create</h6>
        <a href="<?php echo base_url('Staff_List'); ?>" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-left"></i>
            </span>
            <span class="text">Back</span>
        </a>
    </div>
    <div class="card-body">
        <?php if ($this->session->flashdata("err")){ ?>
            <h1><?php echo $this->session->flashdata("err"); ?></h1>
        <?php } ?>
        <br>
        <h3 class="text-center text-white bg-primary py-2 rounded">Contact Information</h3>
        <br>

        <form action="<?php echo base_url('Staff_Create_Act'); ?>" method="post" enctype="multipart/form-data">

            <!-- Nav pills -->
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="pill" href="#home">AZE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#menu1">ENG</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#menu2">RUS</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane container active mx-0 px-0" id="home">
                    <div class="form-group row mt-3">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="FirstName"><b>First Name</b></label>
                            <input type="text" name="FirstName_az" class="form-control" id="FirstName" placeholder="First Name">
                        </div>
                        <div class="col-sm-6">
                            <label for="LastName"><b>Last Name</b></label>
                            <input type="text" name="LastName_az" class="form-control" id="LastName" placeholder="Last Name">
                        </div>
                        <div class="col-sm-12 mb-3 mb-sm-0 mt-3">
                            <label for="description"><b>Description</b></label>
                            <textarea name="user_description_az" id="description" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                    </div>
                </div>

                <div class="tab-pane container fade mx-0 px-0" id="menu1">
                <div class="form-group row mt-3">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="FirstName"><b>First Name EN</b></label>
                            <input type="text" name="FirstName_en" class="form-control" id="FirstName" placeholder="First Name">
                        </div>
                        <div class="col-sm-6">
                            <label for="LastName"><b>Last Name EN</b></label>
                            <input type="text" name="LastName_en" class="form-control" id="LastName" placeholder="Last Name">
                        </div>
                        <div class="col-sm-12 mb-3 mb-sm-0 mt-3">
                            <label for="description"><b>Description EN</b></label>
                            <textarea name="user_description_en" id="description" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                    </div>
                </div>

                <div class="tab-pane container fade mx-0 px-0" id="menu2">
                <div class="form-group row mt-3">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="FirstName"><b>First Name RU</b></label>
                            <input type="text" name="FirstName_ru" class="form-control" id="FirstName" placeholder="First Name">
                        </div>
                        <div class="col-sm-6">
                            <label for="LastName"><b>Last Name RU</b></label>
                            <input type="text" name="LastName_ru" class="form-control" id="LastName" placeholder="Last Name">
                        </div>
                        <div class="col-sm-12 mb-3 mb-sm-0 mt-3">
                            <label for="description"><b>Description RU</b></label>
                            <textarea name="user_description_ru" id="description" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">

                    <div class="col-sm-4 mb-3 mb-sm-0">
                        <label for="Position"><b>Position</b></label>
                        <select name="position" id="Position" class="form-control">
                            <option value="">-SELECT-</option>
                            <?php foreach ($get_position_single as $item) { ?>
                                <option value="<?php echo $item['id']; ?>"><?php echo $item['p_name_en']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-sm-4 mb-3 mb-sm-0">
                        <label for="mob"><b>Mob</b></label>
                        <input type="text" name="mobile" class="form-control" id="mob" placeholder="+994-- --- -- --">
                    </div>
                    <div class="col-sm-4 mb-3 mb-sm-0">
                        <label for="WhatsApp"><b>WhatsApp</b></label>
                        <input type="text" name="WhatsApp" class="form-control" id="WhatsApp" placeholder="+994-- --- -- --">
                    </div>
                </div>
            </div>

            <br>
            <h3 class="text-center text-white bg-primary py-2 rounded">Social Network</h3>
            <br>
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="Facebook"><b>Facebook</b></label>
                        <input type="text" name="Facebook" class="form-control" id="Facebook" placeholder="Facebook">
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="Instagram"><b>Instagram</b></label>
                        <input type="text" name="Instagram" class="form-control" id="Instagram" placeholder="Instagram">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="Telegram"><b>Telegram</b></label>
                        <input type="text" name="Telegram" class="form-control" id="Telegram" placeholder="Telegram">
                    </div>

                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="Youtube"><b>Youtube</b></label>
                        <input type="text" name="Youtube" class="form-control" id="Youtube" placeholder="Youtube">
                    </div>
                </div>
            </div>
            <br>

            <br>
            <h3 class="text-center text-white bg-primary py-2 rounded">Extra</h3>
            <br>

            <div class="form-group">
                <div class="row">


                    <div class="col-sm-3 mb-3 mb-sm-0">
                        <label for="Status"><b>Status</b></label>
                        <select name="Status" id="Status" class="form-control">
<!--                            <option value="">Choose</option>-->
                            <?php foreach ($get_status_single as $item) { ?>
                                <option value="<?php echo $item['id']; ?>"><?php echo $item['status']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    
                    <div class="col-sm-4 mb-3 mb-sm-0">
                        <label for="Email"><b>Email</b></label>
                        <input type="text" name="Email" class="form-control" id="Email" placeholder="Email">
                    </div>

                    <div class="col-sm-4 mb-3 mb-sm-0">
                        <label for="Experience"><b>Experience</b></label>
                        <input type="text" name="Experience" class="form-control" id="Experience" placeholder="Experience">
                    </div>

                    <div class="col-sm-3 mb-3 mb-sm-0">
                        <label for="ProfilePhoto"><b>Profile Photo</b></label>
                        <input type="file" name="file" class="form-control" id="ProfilePhoto">
                    </div>
                </div>
            </div>
            <br>

            <button type="submit" class="btn btn-outline-success">Create</button>


        </form>



    </div>
</div>


<?php $this->load->view('admin/includes/footer'); ?>
<?php $this->load->view('admin/includes/footerStyle'); ?>