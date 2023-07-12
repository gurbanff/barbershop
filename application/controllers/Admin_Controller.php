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
                $config['upload_path']      = './uploads/admin/navbar/';
                $config['allowed_types']    = 'png|svg';
                $config['remove_spaces']    = TRUE;
                $config['file_ext_tolower'] = TRUE;
                $config['encrypt_name']     = TRUE;
                $this->upload->initialize($config);

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
            $config['upload_path']      = './uploads/admin/navbar/';
            $config['allowed_types']    = 'png|svg';
            $config['remove_spaces']    = TRUE;
            $config['file_ext_tolower'] = TRUE;
            $config['encrypt_name']     = TRUE;
            $this->upload->initialize($config);

            if ($this->upload->do_upload('file')) {

                $img = $this->upload->data();

                $data = [
                    "file" => $img['file_name'],
                    "file_href" => $img_href
                ];

                $data_xss_cleaned = $this->security->xss_clean($data);

                $this->Admin_Model->nav_img_update($this->Admin_Model->xl_return_rows("navbar_logo", "id"),$data_xss_cleaned);
                redirect(base_url('Navbar_List'));

            } else {
                redirect(base_url('Nav_Logo_Create'));
            }

        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function nav_logo_delete() {

        $this->Admin_Model->a_nav_logo_delete($this->Admin_Model->xl_return_rows("navbar_logo", "id"));
        redirect(base_url('Nav_Logo_Create'));
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

        $data['slider_get_all_data'] = $this->db->get('slider_video_text')->result_array();
        $this->load->view('admin/slider/list', $data);

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
        $first_icon     = $_POST['first_icon'];
        $first_p_text   = $_POST['first_p_text'];
        $second_icon    = $_POST['second_p_icon'];
        $second_p_text  = $_POST['second_p_text'];

        if (!empty($h1_text_slider)){

            $config['upload_path']      = './uploads/admin/slider/';
            $config['allowed_types']    = 'mp4';
            $config['remove_spaces']    = TRUE;
            $config['file_ext_tolower'] = TRUE;
            $config['encrypt_name']     = TRUE;
            $this->upload->initialize($config);

            if ($this->upload->do_upload('file')) {

                $img = $this->upload->data();

                $data = [
                    "h1_text"       => $h1_text_slider,
                    "file"          => $img['file_name'],
                    "icon"          => $first_icon,
                    "first_p_text"  => $first_p_text,
                    "second_icon"   => $second_icon,
                    "second_p_text" => $second_p_text
                ];

                $data_xss_cleaned = $this->security->xss_clean($data);

                $this->Admin_Model->a_slider_create($data_xss_cleaned);
                redirect(base_url('Slider_Edit'));

            } else{
                redirect(base_url('Slider_Create'));
            }

        } else{
            redirect($_SERVER['HTTP_REFERER']);
        }

    }

    public function slider_edit() {
        $ifCreateAct = $this->Admin_Model->xl_return_rows("slider_video_text", "id");
        if ($ifCreateAct == (-1)) {
            redirect(base_url('Slider_Create'));
        } else {
            $data['get_slider_edit'] = $this->Admin_Model->a_get_slider_edit($this->Admin_Model->xl_return_rows("slider_video_text", "id"));
            $this->load->view('admin/slider/slider_update', $data);
        }

    }

    public function slider_edit_act() {

        $h1_text_slider = $_POST['h1_text'];
        $first_icon     = $_POST['first_icon'];
        $first_p_text   = $_POST['first_p_text'];
        $second_icon    = $_POST['second_p_icon'];
        $second_p_text  = $_POST['second_p_text'];

        if (true){

            $config['upload_path']      = './uploads/admin/slider/';
            $config['allowed_types']    = 'mp4';
            $config['remove_spaces']    = TRUE;
            $config['file_ext_tolower'] = TRUE;
            $config['encrypt_name']     = TRUE;
            $this->upload->initialize($config);

            if ($this->upload->do_upload('file')) {

                $img = $this->upload->data();

                $data = [
                    "h1_text"       => $h1_text_slider,
                    "file"          => $img['file_name'],
                    "icon"          => $first_icon,
                    "first_p_text"  => $first_p_text,
                    "second_icon"   => $second_icon,
                    "second_p_text" => $second_p_text
                ];

                $data_xss_cleaned = $this->security->xss_clean($data);

                $this->Admin_Model->a_slider_edit($this->Admin_Model->xl_return_rows("slider_video_text", "id"), $data_xss_cleaned);
                redirect(base_url('Slider_List'));

            } else{

                $data = [
                    "h1_text"       => $h1_text_slider,
                    "icon"          => $first_icon,
                    "first_p_text"  => $first_p_text,
                    "second_icon"   => $second_icon,
                    "second_p_text" => $second_p_text
                ];

                $data_xss_cleaned = $this->security->xss_clean($data);

                $this->Admin_Model->a_slider_edit($this->Admin_Model->xl_return_rows("slider_video_text", "id"), $data_xss_cleaned);
                redirect(base_url('Slider_List'));
            }

        } else{
            redirect($_SERVER['HTTP_REFERER']);
        }

    }

    public function slider_delete() {
        $this->Admin_Model->a_slider_delete($this->Admin_Model->xl_return_rows("slider_video_text", "id"));
        redirect(base_url('Slider_Create'));
    }

    public function about_create() {

        $ifCreateAct = $this->Admin_Model->xl_return_rows("about", "id");
            if($ifCreateAct == (-1)) {
                $this->load->view('admin/about/about_create');
            }
            else {
                redirect(base_url('About_Edit'));
            }

    }

    public function about_create_act() {

        $image_h1_text      = $_POST['image_h1_text'];
        $image_h2_text      = $_POST['image_h2_text'];
        $about_p_text       = $_POST['about_p_text'];
        $about_h2_text      = $_POST['about_h2_text'];
        $about_p1_text      = $_POST['about_p1_text'];
        $about_h3_text      = $_POST['about_h3_text'];
        $about_h3_p_text    = $_POST['about_h3_p_text'];
        $about_h3_text_2    = $_POST['about_h3_text_2'];
        $about_h3_p_text_2	= $_POST['about_h3_p_text_2'];

        if (true) {
            $config['upload_path']      = './uploads/admin/about/';
            $config['allowed_types']    = 'jpg|png|jpeg|JPG|JPEG|mp4';
            $config['remove_spaces']    = TRUE;
            $config['file_ext_tolower'] = TRUE;
            $config['encrypt_name']     = TRUE;
            $this->upload->initialize($config);

            if ($this->upload->do_upload('about_file')) {
                $about_file = $this->upload->data();

                $data = [
                    "image_h1_text"     => $image_h1_text,
                    "image_h2_text"     => $image_h2_text,
                    "about_p_text"      => $about_p_text,
                    "about_h2_text"     => $about_h2_text,
                    "about_p1_text"     => $about_p1_text,
                    "about_h3_text"     => $about_h3_text,
                    "about_h3_p_text"   => $about_h3_p_text,
                    "about_h3_text_2"   => $about_h3_text_2,
                    "about_h3_p_text_2" => $about_h3_p_text_2,
                    "about_file"        => $about_file['file_name']
                ];

                $data_xss_cleaned = $this->security->xss_clean($data);

                $this->Admin_Model->a_about_create($data_xss_cleaned);
                redirect(base_url('Dashboard'));
            }else {
                $data = [
                    "image_h1_text"     => $image_h1_text,
                    "image_h2_text"     => $image_h2_text,
                    "about_p_text"      => $about_p_text,
                    "about_h2_text"     => $about_h2_text,
                    "about_p1_text"     => $about_p1_text,
                    "about_h3_text"     => $about_h3_text,
                    "about_h3_p_text"   => $about_h3_p_text,
                    "about_h3_text_2"   => $about_h3_text_2,
                    "about_h3_p_text_2" => $about_h3_p_text_2,
                ];

                $data_xss_cleaned = $this->security->xss_clean($data);

                $this->Admin_Model->a_about_create($data_xss_cleaned);
                redirect(base_url('Dashboard'));
            }

        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }

    }

    public function about_edit() {
        $ifCreateAct = $this->Admin_Model->xl_return_rows("about", "id");
        if ($ifCreateAct == (-1)) {
            redirect(base_url("About_Create"));
        } else {
            $data['get_about_edit'] = $this->Admin_Model->a_get_about_edit($this->Admin_Model->xl_return_rows("about", "id"));
            $this->load->view('admin/about/about_edit', $data);
        }
    }

    public function about_edit_act() {

        $image_h1_text      = $_POST['image_h1_text'];
        $image_h2_text      = $_POST['image_h2_text'];
        $about_p_text       = $_POST['about_p_text'];
        $about_h2_text      = $_POST['about_h2_text'];
        $about_p1_text      = $_POST['about_p1_text'];
        $about_h3_text      = $_POST['about_h3_text'];
        $about_h3_p_text    = $_POST['about_h3_p_text'];
        $about_h3_text_2    = $_POST['about_h3_text_2'];
        $about_h3_p_text_2	= $_POST['about_h3_p_text_2'];

        if (true) {
            $config['upload_path']      = './uploads/admin/about/';
            $config['allowed_types']    = 'jpg|png|jpeg|JPG|JPEG|mp4';
            $config['remove_spaces']    = TRUE;
            $config['file_ext_tolower'] = TRUE;
            $config['encrypt_name']     = TRUE;
            $this->upload->initialize($config);

            if ($this->upload->do_upload('about_file')) {
                $about_file = $this->upload->data();

                $data = [
                    "image_h1_text"     => $image_h1_text,
                    "image_h2_text"     => $image_h2_text,
                    "about_p_text"      => $about_p_text,
                    "about_h2_text"     => $about_h2_text,
                    "about_p1_text"     => $about_p1_text,
                    "about_h3_text"     => $about_h3_text,
                    "about_h3_p_text"   => $about_h3_p_text,
                    "about_h3_text_2"   => $about_h3_text_2,
                    "about_h3_p_text_2" => $about_h3_p_text_2,
                    "about_file"        => $about_file['file_name']
                ];

                $data_xss_cleaned = $this->security->xss_clean($data);

                $this->Admin_Model->a_about_edit($this->Admin_Model->xl_return_rows("about", "id"), $data_xss_cleaned);
                redirect(base_url("About_Edit"));

            } else {
                $data = [
                    "image_h1_text"     => $image_h1_text,
                    "image_h2_text"     => $image_h2_text,
                    "about_p_text"      => $about_p_text,
                    "about_h2_text"     => $about_h2_text,
                    "about_p1_text"     => $about_p1_text,
                    "about_h3_text"     => $about_h3_text,
                    "about_h3_p_text"   => $about_h3_p_text,
                    "about_h3_text_2"   => $about_h3_text_2,
                    "about_h3_p_text_2" => $about_h3_p_text_2,
                ];

                $data_xss_cleaned = $this->security->xss_clean($data);

                $this->Admin_Model->a_about_edit($this->Admin_Model->xl_return_rows("about", "id"), $data_xss_cleaned);
                redirect(base_url("About_Edit"));
            }

        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }

    }

    public function about_delete() {
        $this->Admin_Model->a_about_delete($this->Admin_Model->xlreturn_rows("about", "id"));
        redirect(base_url("About_Create"));
    }

    public function service_list() {

        $data['get_service_data'] = $this->Admin_Model->a_get_service_data_list();
        $data['get_list_data']    = $this->Admin_Model->a_get_service_list();

        $this->load->view('admin/services/services_list', $data);
    }

    public function service_header_create() {

        $ifCreateAct = $this->Admin_Model->xl_return_rows("service", "id");
        if($ifCreateAct == (-1)) {
            $this->load->view('admin/services/service_header_create');
        } else {
            redirect(base_url('Service_Header_Edit'));
        }
    }

    public function service_header_create_act() {

        $first_head     = $_POST['first_header'];
        $second_head    = $_POST['second_header'];

        if(!empty($first_head) && !empty($second_head)) {

            $data = [
                "first_header"  => $first_head,
                "second_header" => $second_head
            ];

            $data_xss_cleaned = $this->security->xss_clean($data);
            $this->Admin_Model->a_service_create($data_xss_cleaned);
            redirect(base_url("Service_List"));

        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }

    }

    public function service_header_edit() {

        $ifCreateAct = $this->Admin_Model->xl_return_rows("service", "id");
        if ($ifCreateAct == (-1)) {
            redirect(base_url('Service_Header_Create'));
        } else {
            $data['get_service_data'] = $this->Admin_Model->a_get_service_single_data($this->Admin_Model->xl_return_rows('service', 'id'));
            $this->load->view('admin/services/service_header_edit', $data);
        }

    }

    public function service_header_edit_act() {

        $first_head     = $_POST['first_header'];
        $second_head    = $_POST['second_header'];

        if(!empty($first_head) && !empty($second_head)) {

            $data = [
                "first_header"  => $first_head,
                "second_header" => $second_head
            ];

            $data_xss_cleaned = $this->security->xss_clean($data);
            $this->Admin_Model->a_service_edit($id, $data_xss_cleaned);
            redirect(base_url('Service_List'));

        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }

    }

    public function service_header_delete($id) {

        $this->Admin_Model->a_service_header_delete($this->Admin_Model->xl_return_rows("service", "id"));
        redirect(base_url('Service_Header_Create'));

    }

    public function service_list_create() {

            $this->load->view('admin/services/service_create');
//        $ifCreateAct = $this->Admin_Model->xl_return_rows("services", "id");
//            if($ifCreateAct == (-1)) {
//                $this->load->view('admin/services/service_create');
//            }
//            else {
//                redirect(base_url('Service_Edit'));
//            }

    }

    public function service_list_create_act() {

        $first_heading  = $_POST['first_heading'];
        $second_area    = $_POST['second_area'];

        if(!empty($first_heading) && !empty($second_area)) {

            $data = [
                "first_heading" => $first_heading,
                "second_header" => $second_area
            ];

            $data_xss_cleaned = $this->security->xss_clean($data);
            $this->Admin_Model->a_service_list_create($data_xss_cleaned);
            redirect(base_url("Service_List"));

        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }

    }

    public function service_list_update($id){
        $ifCreateAct = $this->Admin_Model->xl_return_rows("service_list", "id");
        if ($ifCreateAct == (-1)) {
            redirect(base_url('Service_Create'));
        } else {
            $data['get_service_data'] = $this->Admin_Model->a_get_service_list_data($this->Admin_Model->xl_return_rows("service_list", "id"));
            $this->load->view('admin/services/service_edit', $data);
        }
    }

    public function service_list_update_act($id) {

        $first_heading  = $_POST['first_heading'];
        $second_area    = $_POST['second_area'];

        if(!empty($first_heading) && !empty($second_area)) {

            $data = [
              "first_heading" => $first_heading,
              "second_header" => $second_area
            ];

            $data_xss_cleaned = $this->security->xss_clean($data);
            $this->Admin_Model->a_service_list_edit($id, $data_xss_cleaned);
            redirect(base_url('Service_List'));

        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }

    }

    public function service_list_delete($id) {
        $this->Admin_Model->a_service_list_delete($this->Admin_Model->xl_return_rows("service_list", "id"));
        redirect(base_url('Service_List'));
    }

    public function price_create() {
        $ifPriceCreateAct = $this->Admin_Model->xl_return_rows("price", "id");
            if ($ifPriceCreateAct == (-1)) {
                $this->load->view('admin/price/price_create');
            } else {
                $data['get_price_data'] = $this->Admin_Model->a_get_price_data($this->Admin_Model->xl_return_rows("price", "id"));
                redirect(base_url('Price_Edit'));
            }
    }

    public function price_create_act() {
        $price_h1_text      = $this->input->post('input_price_base_h1_text');
        $price_arr_text     = implode("[price_separator_text]", $this->input->post('input_price_text'));
        $price_arr_value    = implode("[price_separator_value]", $this->input->post('input_price_value'));
        $price_arr_currency = implode("[price_separator_currency]", $this->input->post('input_currency'));

       if(!empty($price_h1_text)&& !empty($price_arr_text) && !empty($price_arr_value) && !empty($price_arr_currency)) {
           $config['upload_path']      = './uploads/admin/price/';
           $config['allowed_types']    = 'jpg|png|jpeg|JPG|JPEG|mp4';
           $config['remove_spaces']    = TRUE;
           $config['file_ext_tolower'] = TRUE;
           $config['encrypt_name']     = TRUE;
           $this->upload->initialize($config);

           if ($this->upload->do_upload('input_price_lending_img')) {
               $price_img = $this->upload->data('file_name');

               $data = [
                   "price_h1_text"          => $price_h1_text,
                   "price_arr_text"         => $price_arr_text,
                   "price_arr_value"        => $price_arr_value,
                   "price_arr_currency"     => $price_arr_currency,
                   "price_img"              => $price_img
               ];

               $data_xss_cleaned = $this->security->xss_clean($data);
               $this->Admin_Model->a_price_create($data_xss_cleaned);
               redirect(base_url('Price_Edit'));
           } else {
               $data = [
                   "price_h1_text"          => $price_h1_text,
                   "price_arr_text"         => $price_arr_text,
                   "price_arr_value"        => $price_arr_value,
                   "price_arr_currency"     => $price_arr_currency
               ];

               $data_xss_cleaned = $this->security->xss_clean($data);
               $this->Admin_Model->a_price_create($data_xss_cleaned);
               redirect(base_url('Price_Edit'));
           }

       } else {
            redirect($_SERVER['HTTP_REFERER']);
       }

    }

    public function price_edit() {
        $ifPriceEditAct = $this->Admin_Model->xl_return_rows("price", "id");
            if ($ifPriceEditAct == (-1)) {
                redirect(base_url("Price_Create"));
            } else {
                $data['get_price_data'] = $this->Admin_Model->a_get_price_data($this->Admin_Model->xl_return_rows("price", "id"));
                $this->load->view('admin/price/price_edit', $data);
            }
    }

    public function price_edit_act() {
        $price_h1_text      = $this->input->post('input_price_base_h1_text');
        $price_arr_text     = implode("[price_separator_text]", $this->input->post('input_price_text'));
        $price_arr_value    = implode("[price_separator_value]", $this->input->post('input_price_value'));
        $price_arr_currency = implode("[price_separator_currency]", $this->input->post('input_currency'));

        if(true) {
            $config['upload_path']      = './uploads/admin/price/';
            $config['allowed_types']    = 'jpg|png|jpeg|JPG|JPEG|mp4';
            $config['remove_spaces']    = TRUE;
            $config['file_ext_tolower'] = TRUE;
            $config['encrypt_name']     = TRUE;
            $this->upload->initialize($config);

            if ($this->upload->do_upload('input_price_lending_img')) {
                $price_img = $this->upload->data('file_name');

                $data = [
                    "price_h1_text"          => $price_h1_text,
                    "price_arr_text"         => $price_arr_text,
                    "price_arr_value"        => $price_arr_value,
                    "price_arr_currency"     => $price_arr_currency,
                    "price_img"              => $price_img
                ];

                $data_xss_cleaned = $this->security->xss_clean($data);
                $this->Admin_Model->a_price_edit($this->Admin_Model->xl_return_rows("price", "id"), $data_xss_cleaned);
                redirect(base_url('Price_Edit'));
            } else {
                $data = [
                    "price_h1_text"          => $price_h1_text,
                    "price_arr_text"         => $price_arr_text,
                    "price_arr_value"        => $price_arr_value,
                    "price_arr_currency"     => $price_arr_currency
                ];

                $data_xss_cleaned = $this->security->xss_clean($data);
                $this->Admin_Model->a_price_edit($this->Admin_Model->xl_return_rows("price", "id"), $data_xss_cleaned);
                redirect(base_url('Price_Edit'));
            }

        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function price_delete($id) {
        $this->Admin_Model->a_price_delete($this->Admin_Model->xl_return_rows("price", "id"));
        redirect(base_url('Price_Create'));
    }

    public function working_hours_list() {
        $data['get_all_data']         = $this->Admin_Model->a_get_whours_data_list();
        $data['get_wh_time_all_data'] = $this->Admin_Model->a_get_wh_time_data_list();
        $this->load->view('admin/working_hours/working_hours_list', $data);
    }

    public function working_hours_create() {
        $ifWHoursCreateAct = $this->Admin_Model->xl_return_rows("working_hours", "id");
        if ($ifWHoursCreateAct == (-1)) {
            $this->load->view('admin/working_hours/working_hours_create');
        } else {
            redirect(base_url("Working_Hours_Edit"));
        }
    }

    public function working_hours_create_act() {
        $w_hours_p_text     = $this->input->post("w_hours_p_text");
        $w_hours_h1_text    = $this->input->post("w_hours_h1_text");

        if (!empty($w_hours_p_text) && !empty($w_hours_h1_text)) {
            $config['upload_path']      = './uploads/admin/working_hours/';
            $config['allowed_types']    = 'png|jpg|jpeg|JPG|JPEG|';
            $config['remove_spaces']    = TRUE;
            $config['file_ext_tolower'] = TRUE;
            $config['encrypt_name']     = TRUE;
            $this->upload->initialize($config);

            if ($this->upload->do_upload('working_hours_file')) {
                $w_hours_img = $this->upload->data("file_name");

                $data = [
                    "w_hours_p_text"  => $w_hours_p_text,
                    "w_hours_h1_text" => $w_hours_h1_text,
                    "w_hours_img"     => $w_hours_img
                ];

                $data_xss_cleaned = $this->security->xss_clean($data);
                $this->Admin_Model->a_working_hours_title_create($data_xss_cleaned);
                redirect(base_url("Working_Hours_List"));

            } else {
                $data = [
                    "w_hours_p_text"  => $w_hours_p_text,
                    "w_hours_h1_text" => $w_hours_h1_text,
                ];

                $data_xss_cleaned = $this->security->xss_clean($data);
                $this->Admin_Model->a_working_hours_title_create($data_xss_cleaned);
                redirect(base_url("Working_Hours_List"));
            }
        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }

    }

    public function working_hours_edit() {
        $ifWHoursEditAct = $this->Admin_Model->xl_return_rows("working_hours", "id");
            if ($ifWHoursEditAct == (-1)) {
                redirect(base_url("Working_Hours_Create"));
            } else {
                $data['get_w_hours_edit'] = $this->Admin_Model->a_get_w_hours_data($this->Admin_Model->xl_return_rows("working_hours", "id"));
                $this->load->view('admin/working_hours/working_hours_edit', $data);
            }
    }

    public function working_hours_edit_act() {
        $w_hours_p_text     = $this->input->post("w_hours_p_text");
        $w_hours_h1_text    = $this->input->post("w_hours_h1_text");

        if (!empty($w_hours_p_text) && !empty($w_hours_h1_text)) {
            $config['upload_path']      = './uploads/admin/working_hours/';
            $config['allowed_types']    = 'png|jpg|jpeg|JPG|JPEG|';
            $config['remove_spaces']    = TRUE;
            $config['file_ext_tolower'] = TRUE;
            $config['encrypt_name']     = TRUE;
            $this->upload->initialize($config);

            if ($this->upload->do_upload('working_hours_file')) {
                $w_hours_img = $this->upload->data("file_name");

                $data = [
                    "w_hours_p_text"  => $w_hours_p_text,
                    "w_hours_h1_text" => $w_hours_h1_text,
                    "w_hours_img"     => $w_hours_img
                ];

                $data_xss_cleaned = $this->security->xss_clean($data);
                $this->Admin_Model->a_working_hours_title_edit($this->Admin_Model->xl_return_rows("working_hours", "id"), $data_xss_cleaned);
                redirect(base_url("Working_Hours_List"));

            } else {
                $data = [
                    "w_hours_p_text"  => $w_hours_p_text,
                    "w_hours_h1_text" => $w_hours_h1_text,
                ];

                $data_xss_cleaned = $this->security->xss_clean($data);
                $this->Admin_Model->a_working_hours_title_edit($this->Admin_Model->xl_return_rows("working_hours", "id"), $data_xss_cleaned);
                redirect(base_url("Working_Hours_List"));
            }
        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function working_hours_delete($id) {
        $this->Admin_Model->a_working_hours_delete($this->Admin_Model->xl_return_rows("working_hours", "id"));
        redirect(base_url("Working_Hours_Create"));
    }

    public function wh_time_create() {
        $this->load->view('admin/working_hours/wh_time_create');
    }

    public function wh_time_create_act() {
        $wh_week     = $this->input->post('week');
        $wh_start    = $this->input->post('start_time');
        $wh_close    = $this->input->post('close_time');

        if (!empty($wh_week) && !empty($wh_start) && !empty($wh_close)) {
            $data = [
                "week"       => $wh_week,
                "start_time" => $wh_start,
                "close_time" => $wh_close
            ];
            $data_xss_cleaned = $this->security->xss_clean($data);
            $this->Admin_Model->a_wh_time_create($data_xss_cleaned);
            redirect(base_url('Working_Hours_List'));
        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function wh_time_edit($id) {
        $data['get_wh_time_edit_data'] = $this->Admin_Model->a_get_wh_time_edit_data($id);
        $this->load->view('admin/working_hours/wh_time_edit', $data);
    }

    public function wh_time_edit_act($id) {
        $wh_week     = $this->input->post('week');
        $wh_start    = $this->input->post('start_time');
        $wh_close    = $this->input->post('close_time');

        if (!empty($wh_week) && !empty($wh_start) && !empty($wh_close)) {
            $data = [
                "week"       => $wh_week,
                "start_time" => $wh_start,
                "close_time" => $wh_close
            ];
            $id = $this->security->xss_clean($id);
            $data_xss_cleaned = $this->security->xss_clean($data);
            $this->Admin_Model->a_wh_time_edit_act($data_xss_cleaned);
            redirect(base_url('Working_Hours_List'));
        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function wh_time_delete($id) {
        $this->Admin_Model->a_wh_time_delete($id);
        redirect(base_url("Wh_Time_Create"));
    }

}