<?php



class Admin_Controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_Model');
    }

    public function index()
    {
        $this->load->view('admin/login');
    }

    public function login_act()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (!empty($username) && !empty($password)) {

            $data = [
                "username" => $username,
                "password" => md5($password)
            ];

            $selectLogin = $this->Admin_Model->select_admin_login($data);

            if ($selectLogin) {
                $this->session->set_userdata("first_name", $selectLogin['name']);
                $this->session->set_userdata("sur_name", $selectLogin['surname']);
                $this->session->set_userdata("prof_img", $selectLogin['img_up']);
                redirect(base_url('Dashboard'));
            } else {
                $this->session->set_flashdata("flash_err", "Error! Wrong Username ve ya sifre sehvdir!");
                redirect($_SERVER['HTTP_REFERER']);
            }
        } else {
            $this->session->set_flashdata("flash_err", "Error! Boslug buraxmayin!");
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function log_out()
    {
        $this->session->unset_userdata("first_name");
        $this->session->unset_userdata("sur_name");
        $this->session->unset_userdata("img_up");
        $this->session->set_flashdata("flash_out_succ", "Bir daha sizi gozleyirik!");
        redirect(base_url("Login"));

    }

    public function navbar_list()
    {
        $data['get_single_img']  = $this->Admin_Model->m_get_single_img();
        $data['get_all_nav']     = $this->Admin_Model->get_all_nav();

        $this->load->view('admin/navbar/list', $data);
    }

    public function navbar_create()
    {
        $this->load->view('admin/navbar/create');
    }

    public function navbar_create_act()
    {
        $nav_name = $_POST['nav_name'];
        $nav_a_href = $_POST['nav_a_href'];

        if (!empty($nav_name) && !empty($nav_a_href)) {

            $data = [
                "nav_name" => $nav_name,
                "nav_a_href" => $nav_a_href
            ];

            $data = $this->security->xss_clean($data);

            $this->Admin_Model->insert_nav($data);
            redirect(base_url('Navbar_List'));

        } else {

            redirect($_SERVER['HTTP_REFERER']);

        }

    }

    public function navbar_delete($id)
    {
        $this->Admin_Model->delete_nav($id);
        redirect(base_url('Navbar_List'));
    }

    public function navbar_edit($id)
    {
        $data['nav_all_data'] = $this->Admin_Model->get_single_nav($id);

        $this->load->view('admin/navbar/update', $data);
    }

    public function navbar_edit_act($id)
    {
        $nav_name = $_POST['nav_name'];
        $nav_a_href = $_POST['nav_a_href'];

        if (!empty($nav_name) && !empty($nav_a_href)) {

            $data = [
                "nav_name" => $nav_name,
                "nav_a_href" => $nav_a_href
            ];

            $id = $this->security->xss_clean($id);
            $data = $this->security->xss_clean($data);

            $this->Admin_Model->nav_update($id, $data);
            redirect(base_url('Navbar_List'));

        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }

    }

    public function nav_logo_create()
    {
        $ifCreateAct = $this->Admin_Model->xl_return_rows("navbar_logo", "id");
        if ($ifCreateAct == (-1)) {
            $this->load->view('admin/navbar/logo_create');
        }
        else {
            redirect(base_url('Nav_Logo_Edit'));
        }
    }

    public function nav_logo_create_act()
    {

        if ($this->db->get('navbar_logo')->row_array()) {
            redirect(base_url('Nav_Logo_Edit'));
        } else {

            $img_href = $_POST['href'];

            if (!empty($img_href)) {

                $config['upload_path'] = './uploads/admin/navbar/';
                $config['allowed_types'] = 'png|svg';
                $config['remove_spaces'] = TRUE;
                $config['file_ext_tolower'] = TRUE;
                $config['encrypt_name'] = TRUE;

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('file')) {
    
                    $img = $this->upload->data();

                    $data = [
                        "file" => $img['file_name'],
                        "file_href" => $img_href
                    ];

                    $data_xss_cleaned = $this->security->xss_clean($data);

                    $this->Admin_Model->nav_img_create($data_xss_cleaned);
                    redirect(base_url('Navbar_List'));

                } else {
                    redirect(base_url('Nav_Logo_Create'));
                }

            } else {
                redirect($_SERVER['HTTP_REFERER']);
            }
        }

    }

    public function nav_logo_edit() {

        $ifCreateAct = $this->Admin_Model->xl_return_rows("navbar_logo", "id");
        if ($ifCreateAct == (-1)) {
            redirect(base_url('Nav_Logo_Create'));
        }
        else {
            $data['get_single_img'] = $this->Admin_Model->get_single_img($this->Admin_Model->xl_return_rows('navbar_logo', 'id'));
            $this->load->view('admin/navbar/logo_update', $data);
        }

    }

    public function nav_logo_edit_act()
    {
        $img_href = $_POST['href'];

            if (!empty($img_href)) {

                $config['upload_path'] = './uploads/admin/navbar/';
                $config['allowed_types'] = 'png|svg';
                $config['remove_spaces'] = TRUE;
                $config['file_ext_tolower'] = TRUE;
                $config['encrypt_name'] = TRUE;

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('file')) {

                    $img = $this->upload->data();

                    $data = [
                        "file" => $img['file_name'],
                        "file_href" => $img_href
                    ];

                    $data_xss_cleaned = $this->security->xss_clean($data);

                    $this->Admin_Model->nav_img_update($this->Admin_Model->xl_return_rows("navbar_logo", "id") ,$data_xss_cleaned);
                    redirect(base_url('Navbar_List'));

                } else {
                    redirect(base_url('Nav_Logo_Edit'));
                }

            } else {
                redirect($_SERVER['HTTP_REFERER']);
            }

    }

    public function dashboard()
    {
        $this->load->view('admin/index');
    }

    public function staff_list()
    {
        $data['get_all_data'] = $this->Admin_Model->get_all_data();

        $this->load->view('admin/staff/list', $data);
    }

    public function staff_create()
    {
        $this->load->view('admin/staff/create');
    }

    public function staff_create_act()
    {
        $firstName_az = $_POST['FirstName_az'];
        $lastName_az = $_POST['LastName_az'];
        $description_az = $_POST['user_description_az'];

        $position = $_POST['position'];
        $status = $_POST['Status'];

        $firstName_en = $_POST['FirstName_en'];
        $lastName_en = $_POST['LastName_en'];
        $description_en = $_POST['user_description_en'];

        $firstName_ru = $_POST['FirstName_ru'];
        $lastName_ru = $_POST['LastName_ru'];
        $description_ru = $_POST['user_description_ru'];

        $email = $_POST['Email'];
        $experience = $_POST['Experience'];
        $mobile = $_POST['mobile'];
        $whatsApp = $_POST['WhatsApp'];
        $facebook = $_POST['Facebook'];
        $instagram = $_POST['Instagram'];
        $telegram = $_POST['Telegram'];
        $youtube = $_POST['Youtube'];


        if (!empty($firstName_az) && !empty($lastName_az) && !empty($description_az) && !empty($status) && !empty($position)) {

            $config['upload_path'] = './uploads/admin/staff/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|JPG|JPEG|PDF|mp3|mp4';
            $config['remove_spaces'] = TRUE;
            $config['file_ext_tolower'] = TRUE;
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload('file')) {

                $file_name = $this->upload->data('file_name');
                $file_ext = $this->upload->data('file_ext');

                $data = [
                    's_name_az' => $firstName_az,
                    's_surname_az' => $lastName_az,
                    's_description_az' => $description_az,

                    's_name_en' => $firstName_en,
                    's_surname_en' => $lastName_en,
                    's_description_en' => $description_en,

                    's_name_ru' => $firstName_ru,
                    's_surname_ru' => $lastName_ru,
                    's_description_ru' => $description_ru,

                    's_position' => $position,
                    's_status' => $status,
                    's_email' => $email,
                    's_experience' => $experience,
                    's_mobile' => $mobile,
                    's_whatsApp' => $whatsApp,
                    's_facebook' => $facebook,
                    's_instagram' => $instagram,
                    's_telegram' => $telegram,
                    's_youtube' => $youtube,
                    's_img' => $file_name,
                    's_img_ext' => $file_ext,
                    's_create_date' => date("Y-m-d H:i:s"),
                    's_create_id' => "",
                ];

            } else {

                $data = [
                    's_name_az' => $firstName_az,
                    's_surname_az' => $lastName_az,
                    's_description_az' => $description_az,

                    's_name_en' => $firstName_en,
                    's_surname_en' => $lastName_en,
                    's_description_en' => $description_en,

                    's_name_ru' => $firstName_ru,
                    's_surname_ru' => $lastName_ru,
                    's_description_ru' => $description_ru,

                    's_position' => $position,
                    's_status' => $status,
                    's_email' => $email,
                    's_experience' => $experience,
                    's_mobile' => $mobile,
                    's_whatsApp' => $whatsApp,
                    's_facebook' => $facebook,
                    's_instagram' => $instagram,
                    's_telegram' => $telegram,
                    's_youtube' => $youtube,
                    's_create_date' => date("Y-m-d H:i:s"),
                    's_create_id' => "",
                ];

            }

            $data = $this->security->xss_clean($data);

            $this->Admin_Model->insert_staff($data);
            redirect(base_url('Staff_List'));

        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function staff_details($id)
    {
        $data['single_data'] = $this->Admin_Model->get_single_staff($id);

        $this->load->view('admin/staff/details', $data);
    }

    public function staff_delete($id)
    {
        $this->Admin_Model->delete_staff($id);
        redirect(base_url('Staff_List'));
    }

    public function staff_edit($id)
    {
        $data['single_data'] = $this->Admin_Model->get_single_staff($id);

        $this->load->view('admin/staff/update', $data);
    }

    public function staff_edit_act($id)
    {

        $firstName_az = $_POST['FirstName_az'];
        $lastName_az = $_POST['LastName_az'];
        $description_az = $_POST['user_description_az'];

        $position = $_POST['position'];
        $status = $_POST['Status'];

        $firstName_en = $_POST['FirstName_en'];
        $lastName_en = $_POST['LastName_en'];
        $description_en = $_POST['user_description_en'];

        $firstName_ru = $_POST['FirstName_ru'];
        $lastName_ru = $_POST['LastName_ru'];
        $description_ru = $_POST['user_description_ru'];

        $email = $_POST['Email'];
        $experience = $_POST['Experience'];
        $mobile = $_POST['mobile'];
        $whatsApp = $_POST['WhatsApp'];
        $facebook = $_POST['Facebook'];
        $instagram = $_POST['Instagram'];
        $telegram = $_POST['Telegram'];
        $youtube = $_POST['Youtube'];


        if (!empty($firstName_az) && !empty($lastName_az) && !empty($description_az) && !empty($status) && !empty($position)) {

            $config['upload_path'] = './uploads/admin/staff/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|JPG|JPEG|PDF|mp3|mp4';
            $config['remove_spaces'] = TRUE;
            $config['file_ext_tolower'] = TRUE;
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload('file')) {

                $file_name = $this->upload->data('file_name');
                $file_ext = $this->upload->data('file_ext');

                $data = [
                    's_name_az' => $firstName_az,
                    's_surname_az' => $lastName_az,
                    's_description_az' => $description_az,

                    's_name_en' => $firstName_en,
                    's_surname_en' => $lastName_en,
                    's_description_en' => $description_en,

                    's_name_ru' => $firstName_ru,
                    's_surname_ru' => $lastName_ru,
                    's_description_ru' => $description_ru,

                    's_position' => $position,
                    's_status' => $status,
                    's_email' => $email,
                    's_experience' => $experience,
                    's_mobile' => $mobile,
                    's_whatsApp' => $whatsApp,
                    's_facebook' => $facebook,
                    's_instagram' => $instagram,
                    's_telegram' => $telegram,
                    's_youtube' => $youtube,
                    's_img' => $file_name,
                    's_img_ext' => $file_ext,
                    's_create_date' => date("Y-m-d H:i:s"),
                    's_create_id' => "",
                ];

            } else {

                $data = [
                    's_name_az' => $firstName_az,
                    's_surname_az' => $lastName_az,
                    's_description_az' => $description_az,

                    's_name_en' => $firstName_en,
                    's_surname_en' => $lastName_en,
                    's_description_en' => $description_en,

                    's_name_ru' => $firstName_ru,
                    's_surname_ru' => $lastName_ru,
                    's_description_ru' => $description_ru,

                    's_position' => $position,
                    's_status' => $status,
                    's_email' => $email,
                    's_experience' => $experience,
                    's_mobile' => $mobile,
                    's_whatsApp' => $whatsApp,
                    's_facebook' => $facebook,
                    's_instagram' => $instagram,
                    's_telegram' => $telegram,
                    's_youtube' => $youtube,
                    's_create_date' => date("Y-m-d H:i:s"),
                    's_create_id' => "",
                ];

            }

            $id = $this->security->xss_clean($id);
            $data = $this->security->xss_clean($data);

            $this->Admin_Model->staff_update($id, $data);
            redirect(base_url('Staff_List'));

        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function slider_list() {

        $this->load->view('admin/slider/list');

    }

    public function slider_create() {

        $ifCreateAct = $this->Admin_Model->xl_return_rows("slider_video_text", "id");
        if($ifCreateAct == (-1)) {
            $this->load->view('admin/slider/slider_create');
        }else {
            redirect(base_url('Slider_Edit'));
        }

    }

    public function slider_create_act() {

        $h1_text_slider = $_POST['h1_text'];

        if (!empty($h1_text_slider)){

            $config['upload_path'] = './uploads/admin/slider/';
            $config['allowed_types'] = 'mp4';
            $config['remove_spaces'] = TRUE;
            $config['file_ext_tolower'] = TRUE;
            $config['encrypt_name'] = TRUE;
            $this->upload->initialize($config);

        } else{
            redirect($_SERVER['HTTP_REFERER']);
        }

    }

    public function slider_text_create() {

        $this->load->view('admin/slider/slider_text_create');

    }


}