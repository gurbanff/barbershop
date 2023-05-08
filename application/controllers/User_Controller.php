<?php



class User_Controller extends CI_Controller {

    public function index(){
        $this->load->view('user/index');
    }

    public function about(){
        $this->load->view('user/about');
    }

    public function services(){
        $this->load->view('user/service');
    }

    public function gallery(){
        $this->load->view('user/gallery');
    }

    public function contact(){
        $this->load->view('user/contact');
    }

}