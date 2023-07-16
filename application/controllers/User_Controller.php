<?php



class User_Controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        
        $this->load->model("User_Model");
    }

    public function z(){
        redirect(base_url('Home'));
    }

    public function index(){
        $data['staff_all_data']             = $this->User_Model->staff_all_data();
        $data['nav_all_data']               = $this->User_Model->nav_all_data();
        $data['nav_logo_all_data']          = $this->User_Model->navlogo_get_img();
        $data['slider_all_data']            = $this->User_Model->slider_get_data();
        $data['about_all_data']             = $this->User_Model->u_get_about_data();
        $data['service_all_data']           = $this->User_Model->u_get_service_data();
        $data['service_list_all_data']      = $this->User_Model->u_get_service_list_data();
        $data['price_all_data']             = $this->User_Model->u_get_price_all_data();
        $data['w_hours_all_data']           = $this->User_Model->u_get_w_hours_all_data();
        $data['wh_time_all_data']           = $this->User_Model->u_get_wh_time_all_data();
        $data['review_title_all_data']      = $this->User_Model->u_get_review_title_all_data();
        $data['review_fb_all_data']         = $this->User_Model->u_get_review_fb_all_data();
        $data['footer_ct_all_data']         = $this->User_Model->u_get_footer_ct_all_data();
        $data['footer_connect_all_data']    = $this->User_Model->u_get_footer_connect_all_data();
        $data['news_all_data']              = $this->User_Model->u_get_news_all_data();
        $this->load->view('user/index', $data);
    }

    public function about(){
        $data['nav_all_data']           = $this->User_Model->nav_all_data();
        $data['nav_logo_all_data']      = $this->User_Model->navlogo_get_img();
        $this->load->view('user/about', $data);
    }

    public function services(){
        $data['nav_all_data']           = $this->User_Model->nav_all_data();
        $data['nav_logo_all_data']      = $this->User_Model->navlogo_get_img();
        $this->load->view('user/service', $data);
    }

    public function gallery(){
        $data['nav_all_data']           = $this->User_Model->nav_all_data();
        $data['nav_logo_all_data']      = $this->User_Model->navlogo_get_img();
        $this->load->view('user/gallery', $data);
    }

    public function contact(){
        $data['nav_all_data']           = $this->User_Model->nav_all_data();
        $data['nav_logo_all_data']      = $this->User_Model->navlogo_get_img();
        $this->load->view('user/contact', $data);
    }

}