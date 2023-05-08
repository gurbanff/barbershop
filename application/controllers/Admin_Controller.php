<?php



class Admin_Controller extends CI_Controller{

    public function index()
    {
        $this->load->view('admin/login');
    }

    public function login_act()
    {

    }

    public function dashboard()
    {
        $this->load->view('admin/index');
    }

    public function list()
    {
        $this->load->view('admin/product/list');
    }

}