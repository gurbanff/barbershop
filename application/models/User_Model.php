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

}