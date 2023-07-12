<?php $directory = base_url('public/admin/assets/'); ?>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
<ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php base_url('Dashboard'); ?>">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">SB Admin</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url('Dashboard'); ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>


        <!-- Heading -->
        <div class="sidebar-heading">
            Pages
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#carousel"
               aria-expanded="true" aria-controls="carousel">
                <i class="fas fa-fw fa-folder"></i>
                <span>Navbar</span>
            </a>
            <div id="carousel" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?php echo base_url('Navbar_List'); ?>">List</a>
                    <a class="collapse-item" href="<?php echo base_url('Navbar_Create'); ?>">Create</a>
                </div>
            </div>
        </li>
        <hr class="sidebar-divider d-none d-md-block">
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?php echo base_url('Slider_Create'); ?>" data-target="#slider"
               aria-expanded="true" aria-controls="carousel">
                <i class="fas fa-fw fa-folder"></i>
                <span>Slider</span>
            </a>
<!--            <div id="slider" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">-->
<!--                <div class="bg-white py-2 collapse-inner rounded">-->
<!--                    <a class="collapse-item" href="--><?php //echo base_url('Slider_List'); ?><!--">List</a>-->
<!--                    <a class="collapse-item" href="--><?php //echo base_url('#'); ?><!--">Create</a>-->
<!--                </div>-->
<!--            </div>-->
        </li>
        <hr class="sidebar-divider d-none d-md-block">
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?php echo base_url('About_Create'); ?>" data-target="#about"
               aria-expanded="true" aria-controls="carousel">
                <i class="fas fa-fw fa-folder"></i>
                <span>About</span>
            </a>
        </li>
        <hr class="sidebar-divider d-none d-md-block">
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#services"
               aria-expanded="true" aria-controls="services">
                <i class="fas fa-fw fa-folder"></i>
                <span>Services</span>
            </a>
            <div id="services" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?php echo base_url('Service_List'); ?>"> <i class="bx bx-right-arrow"></i> List</a>
                    <a class="collapse-item" href="<?php echo base_url('Service_Create'); ?>">Create</a>
                </div>
            </div>
        </li>
        <hr class="sidebar-divider d-none d-md-block">
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?php echo base_url('Price_Create'); ?>" data-target="#prices"
               aria-expanded="true" aria-controls="services">
                <i class="fas fa-fw fa-folder"></i>
                <span>Prices</span>
            </a>
        </li>
        <hr class="sidebar-divider d-none d-md-block">
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#w_hours"
               aria-expanded="true" aria-controls="services">
                <i class="fas fa-fw fa-folder"></i>
                <span>Working Hours</span>
            </a>
            <div id="w_hours" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?php echo base_url('Working_Hours_List'); ?>">List</a>
                    <a class="collapse-item" href="<?php echo base_url('Service_Create'); ?>">Create</a>
                </div>
            </div>
        </li>
        <hr class="sidebar-divider d-none d-md-block">
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
               aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>Staff</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?php echo base_url('Staff_List'); ?>">List</a>
                    <a class="collapse-item" href="<?php echo base_url('Staff_Create'); ?>">Create</a>
                </div>
            </div>
        </li>


        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">