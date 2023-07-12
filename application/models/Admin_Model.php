<?php



class Admin_Model extends CI_Model{

    public function xl_return_rows($navbar, $id) {

        $navbar_logo_rows_count = $this->db->from($navbar)->count_all_results();
        if ($navbar_logo_rows_count == 1) {
            return $this->db->get($navbar)->row_array()[$id];
        } else if ($navbar_logo_rows_count > 1) {
            return $this->db->order_by($id, "DESC")->limit(1)->get($navbar)->row_array()[$id];
        } else {
            return -1;
        }

    }   

    public function insert_staff($data)
    {
        $this->db->insert('staff', $data);
    }

    public function get_all_data()
    {
        return $this->db->order_by('s_id', 'DESC')->get('staff')->result_array();
    }

    public function get_single_staff($id)
    {
        return $this->db->where('s_id', $id)->get('staff')->row_array();
    }

    public function delete_staff($id)
    {
        $this->db->where('s_id', $id)->delete('staff');
    }

    public function staff_update($id, $data)
    {
        $this->db->where('s_id', $id)->update('staff', $data);
    }

    public function select_admin_login($data)
    {
        return $this->db->where($data)->get('admin')->row_array();
    }

    public function insert_nav($data)
    {
        $this->db->insert('navbar', $data);
    }

    public function get_all_nav()
    {
        return $this->db->get('navbar')->result_array();
    }

    public function delete_nav($id)
    {
        $this->db->where("id", $id)->delete('navbar');
    }

    public function get_single_nav($id)
    {
        return $this->db->where('id', $id)->get('navbar')->row_array();
    }

    public function nav_update($id, $data)
    {
        $this->db->where('id', $id)->update('navbar', $data);
    }

    public function nav_img_create($data)
    {
        $this->db->insert('navbar_logo', $data);
    }

    public function m_get_single_img() {

        return $this->db->get('navbar_logo')->result_array();

    }

    public function nav_img_update($id, $data) {

        $this->db->where("id", $id)->update('navbar_logo', $data);

    }

    public function get_single_img($id) {

        return $this->db->where('id', $id)->get('navbar_logo')->row_array();

    }

    public function a_nav_logo_delete($id) {

        $this->db->where('id', $id)->delete("navbar_logo");

    }

    public function a_slider_create($data_xss_cleaned) {
        $this->db->insert('slider_video_text', $data_xss_cleaned);
    }

    public function a_get_slider_edit($id) {

        return $this->db->where('id', $id)->get('slider_video_text')->row_array();

    }

    public function a_slider_edit($id, $data) {

        $this->db->where("id", $id)->update('slider_video_text', $data);

    }

    public function a_slider_delete($id) {
        $this->db->where('id', $id)->delete('slider_video_text');
    }

    public function a_about_create($data_xss_cleaned) {
        $this->db->insert('about', $data_xss_cleaned);
    }

    public function a_get_about_edit($id) {
        return $this->db->where("id", $id)->get('about')->row_array();
    }

    public function a_about_edit($id, $data) {
        $this->db->where("id", $id)->update("about", $data);
    }

    public function a_about_delete($id) {
        $this->db->where('id', $id)->delete('about');
    }

    public function a_service_create($data_xss_cleaned) {
        $this->db->insert('service', $data_xss_cleaned);
    }

    public function a_get_service_data_list() {
        return $this->db->get('service')->result_array();
    }

    public function a_get_service_list() {
        return $this->db->order_by('id', 'DESC')->get('service_list')->result_array();
    }

    public function a_get_service_single_data($id) {
        return $this->db->where('id', $id)->get('service')->row_array();
    }

    public function a_service_edit($id, $data_xss_cleaned) {
        $this->db->where('id', $id)->update("service", $data_xss_cleaned);
    }

    public function a_service_header_delete($id) {

        $this->db->where('id', $id)->delete('service');

    }

    public function a_service_list_create($data_xss_cleaned) {
        $this->db->limit(9)->insert('service_list', $data_xss_cleaned);
    }

    public function a_get_service_list_data($id) {
        return $this->db->where('id', $id)->get('service_list')->row_array();
    }

    public function a_service_list_edit($id, $data_xss_cleaned) {
        $this->db->where('id', $id)->update("service_list", $data_xss_cleaned);
    }

    public function a_service_list_delete($id) {
        $this->db->where('id', $id)->delete('service_list');
    }

    public function a_price_create($data_xss_cleaned) {
        $this->db->insert("price", $data_xss_cleaned);
    }

    public function a_get_price_data($id) {
        return $this->db->where("id", $id)->get('price')->row_array();
    }

    public function a_price_edit($id, $data_xss_cleaned) {
        $this->db->where('id', $id)->update("price", $data_xss_cleaned);
    }

    public function a_price_delete($id) {
        $this->db->where('id', $id)->delete("price");
    }

    public function a_get_whours_data_list() {
        return $this->db->get("working_hours")->result_array();
    }

    public function a_get_wh_time_data_list() {
        return $this->db->get("wh_time")->result_array();
    }

    public function a_working_hours_title_create($data_xss_cleaned) {
        $this->db->insert("working_hours", $data_xss_cleaned);
    }

    public function a_working_hours_title_edit($id, $data_xss_cleaned) {
        $this->db->where('id', $id)->update("working_hours", $data_xss_cleaned);
    }

    public function a_get_w_hours_data($id) {
        return $this->db->where("id", $id)->get("working_hours")->row_array();
    }

    public function a_working_hours_delete($id) {
        $this->db->where("id", $id)->delete("working_hours");
    }

    public function a_wh_time_create($data_xss_cleaned) {
        $this->db->insert("wh_time", $data_xss_cleaned);
    }

    public function a_get_wh_time_edit_data($id) {
        return $this->db->where("id", $id)->get("wh_time")->row_array();
    }

    public function a_wh_time_edit_act($id, $data_xss_cleaned) {
        $this->db->where('id', $id)->update("working_hours", $data_xss_cleaned);
    }

    public function a_wh_time_delete($id) {
        $this->db->where("id", $id)->delete("wh_time");
    }

}