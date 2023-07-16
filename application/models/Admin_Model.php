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
        return $this->db
            ->order_by('s_id', 'DESC')
            ->join('staff_position','staff_position.id = staff.s_position', 'left')
            ->get('staff')
            ->result_array();
    }

    public function a_get_single_staff($id)
    {
        return $this->db->where('s_id', $id)->get('staff')->row_array();
    }

    public function a_get_position_single() {
        return $this->db->get("staff_position")->result_array();
    }

    public function a_position_select_security($position) {
        return $this->db->where("id", $position)->get('staff_position')->result_array();
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
        $this->db->where('id', $id)->update("wh_time", $data_xss_cleaned);
    }

    public function a_wh_time_delete($id) {
        $this->db->where("id", $id)->delete("wh_time");
    }

    public function a_get_review_list_data() {
        return $this->db->get("review_title")->result_array();
    }

    public function a_get_review_fb_list_data() {
        return $this->db->get("review_feedback")->result_array();
    }

    public function a_review_create_act($data_xss_cleaned) {
        $this->db->insert("review_title", $data_xss_cleaned);
    }

    public function a_review_edit_act($id, $data_xss_cleaned) {
        $this->db->where('id', $id)->update("review_title", $data_xss_cleaned);
    }

    public function a_get_review_edit_data ($id) {
        return $this->db->where("id", $id)->get("review_title")->row_array();
    }

    public function a_review_title_delete($id) {
        $this->db->where("id", $id)->delete("review_title");
    }

    public function a_review_fb_create($data_xss_cleaned) {
        $this->db->insert("review_feedback", $data_xss_cleaned);
    }

    public function a_get_review_fb_edit($id) {
        return $this->db->where("id", $id)->get("review_feedback")->row_array();
    }

    public function a_review_fb_edit($id, $data_xss_cleaned) {
        $this->db->where('id', $id)->update("review_feedback", $data_xss_cleaned);
    }

    public function a_footer_ct_create($data_cleaned) {
        $this->db->insert("footer_contact", $data_cleaned);
    }

    public function a_get_all_footer_contact() {
        return $this->db->get("footer_contact")->result_array();
    }

    public function a_footer_contact_single($id) {
        return $this->db->where("id", $id)->get("footer_contact")->row_array();
    }

    public function a_get_footer_ct_all_data($id) {
        return $this->db->where('id', $id)->get("footer_contact")->row_array();
    }

    public function a_footer_ct_edit($id, $data_xss_cleaned) {
        $this->db->where("id", $id)->update("footer_contact", $data_xss_cleaned);
    }

    public function a_footer_ct_delete($id) {
        $this->db->where("id", $id)->delete("footer_contact");
    }

    public function a_fast_connect_create($data_cleaned) {
        $this->db->insert("fast_connect", $data_cleaned);
    }

    public function a_fast_connect_edit($id, $data_cleaned) {
        $this->db->where("id", $id)->update("fast_connect", $data_cleaned);
    }

    public function a_get_fast_connect_all_data($id) {
        return $this->db->where('id', $id)->get("fast_connect")->row_array();
    }

    public function a_get_all_fast_connect() {
        return $this->db->get("fast_connect")->result_array();
    }

    public function a_fast_connect_delete($id) {
        $this->db->where("id", $id)->delete("fast_connect");
    }

    public function a_fast_connect_details_single($id) {
        return $this->db->where("id", $id)->get("fast_connect")->row_array();
    }

    public function a_news_create($data_cleaned) {
        $this->db->insert("news", $data_cleaned);
    }

    public function a_get_all_news() {
        return $this->db->get("news")->result_array();
    }

    public function a_news_details($id) {
        return $this->db->where("id", $id)->get("news")->row_array();
    }

    public function a_get_news_all_data($id) {
        return $this->db->where('id', $id)->get("news")->row_array();
    }

    public function a_news_edit($id, $data_cleaned) {
        $this->db->where("id", $id)->update("news", $data_cleaned);
    }

    public function a_news_delete($id) {
        $this->db->where("id", $id)->delete("news");
    }
}