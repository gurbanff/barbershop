<?php



class Admin_Model extends CI_Model{

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

}