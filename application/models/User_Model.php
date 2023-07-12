<?php

class User_Model extends CI_Model{

    public function staff_all_data()
    {
        return $this->db->select("s_name_az,s_position,
            s_email,s_mobile,
            s_whatsApp,s_instagram,
            s_youtube,s_facebook,
            s_telegram,s_img,s_status")->where("s_status","active")->limit(6)->get("staff")->result_array();
 
    }

    public function nav_all_data()
    {
        return $this->db->limit(6)->get('navbar')->result_array();
    }

    public function navlogo_get_img() {
        return $this->db->limit(1)->get('navbar_logo')->result_array();
    }

    public function slider_get_data() {
        return $this->db->limit(1)->get('slider_video_text')->row_array();
    }

    public function u_get_about_data() {
        return $this->db->limit(1)->get('about')->row_array();
    }

    public function u_get_service_data() {
        return $this->db->limit(1)->get('service')->row_array();
    }

    public function u_get_service_list_data() {
        return $this->db->limit(9)->get('service_list')->result_array();
    }

    public function u_get_price_all_data() {
        return $this->db->order_by("id", "desc")->limit(1)->get("price")->row_array();
    }

    public function u_get_w_hours_all_data() {
        return $this->db->limit(1)->get("working_hours")->row_array();
    }

    public function u_get_wh_time_all_data() {
        return $this->db->limit(7)->get("wh_time")->result_array();
    }


}