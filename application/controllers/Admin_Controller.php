<?php



class Admin_Controller extends CI_Controller{

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
        $firstName_az       = $_POST['FirstName_az'];
        $lastName_az        = $_POST['LastName_az'];
        $description_az     = $_POST['user_description_az'];

        $position           = $_POST['position'];
        $status             = $_POST['Status'];

        $firstName_en       = $_POST['FirstName_en'];
        $lastName_en        = $_POST['LastName_en'];
        $description_en     = $_POST['user_description_en'];

        $firstName_ru       = $_POST['FirstName_ru'];
        $lastName_ru        = $_POST['LastName_ru'];
        $description_ru     = $_POST['user_description_ru'];

        $email              = $_POST['Email'];
        $experience         = $_POST['Experience'];
        $mobile             = $_POST['mobile'];
        $whatsApp           = $_POST['WhatsApp'];
        $facebook           = $_POST['Facebook'];
        $instagram          = $_POST['Instagram'];
        $telegram           = $_POST['Telegram'];
        $youtube            = $_POST['Youtube'];


        if(!empty($firstName_az) && !empty($lastName_az) && !empty ($description_az) && !empty($status) && !empty($position)){

            $config['upload_path']          = './uploads/admin/staff/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|JPEG|PDF|mp3|mp4';
            $config['remove_spaces']        = TRUE;
            $config['file_ext_tolower']     = TRUE;
            $config['encrypt_name']         = TRUE;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if($this->upload->do_upload('file')){

                $file_name = $this->upload->data('file_name');
                $file_ext = $this->upload->data('file_ext');

                $data = [
                    's_name_az'         => $firstName_az,
                    's_surname_az'      => $lastName_az,
                    's_description_az'  => $description_az,
    
                    's_name_en'         => $firstName_en,
                    's_surname_en'      => $lastName_en,
                    's_description_en'  => $description_en,
    
                    's_name_ru'         =>$firstName_ru,
                    's_surname_ru'      =>$lastName_ru,
                    's_description_ru'  =>$description_ru,
    
                    's_position'        => $position,
                    's_status'          => $status,
                    's_email'           => $email,
                    's_experience'      => $experience,
                    's_mobile'          => $mobile,
                    's_whatsApp'        => $whatsApp,
                    's_facebook'        => $facebook,
                    's_instagram'       => $instagram,
                    's_telegram'        => $telegram,
                    's_youtube'         => $youtube,
                    's_img'             => $file_name,
                    's_img_ext'         => $file_ext,
                    's_create_date'     => date("Y-m-d H:i:s"),
                    's_create_id'       => "",
                ];

            }else{
                
                $data = [
                    's_name_az'         => $firstName_az,
                    's_surname_az'      => $lastName_az,
                    's_description_az'  => $description_az,
    
                    's_name_en'         => $firstName_en,
                    's_surname_en'      => $lastName_en,
                    's_description_en'  => $description_en,
    
                    's_name_ru'         =>$firstName_ru,
                    's_surname_ru'      =>$lastName_ru,
                    's_description_ru'  =>$description_ru,
    
                    's_position'        => $position,
                    's_status'          => $status,
                    's_email'           => $email,
                    's_experience'      => $experience,
                    's_mobile'          => $mobile,
                    's_whatsApp'        => $whatsApp,
                    's_facebook'        => $facebook,
                    's_instagram'       => $instagram,
                    's_telegram'        => $telegram,
                    's_youtube'         => $youtube,
                    's_create_date'     => date("Y-m-d H:i:s"),
                    's_create_id'       => "",
                ];

            }

            $this->Admin_Model->insert_staff($data);
            redirect(base_url('Staff_List'));

        }else{
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
        $firstName_az       = $_POST['FirstName_az'];
        $lastName_az        = $_POST['LastName_az'];
        $description_az     = $_POST['user_description_az'];

        $position           = $_POST['position'];
        $status             = $_POST['Status'];

        $firstName_en       = $_POST['FirstName_en'];
        $lastName_en        = $_POST['LastName_en'];
        $description_en     = $_POST['user_description_en'];

        $firstName_ru       = $_POST['FirstName_ru'];
        $lastName_ru        = $_POST['LastName_ru'];
        $description_ru     = $_POST['user_description_ru'];

        $email              = $_POST['Email'];
        $experience         = $_POST['Experience'];
        $mobile             = $_POST['mobile'];
        $whatsApp           = $_POST['WhatsApp'];
        $facebook           = $_POST['Facebook'];
        $instagram          = $_POST['Instagram'];
        $telegram           = $_POST['Telegram'];
        $youtube            = $_POST['Youtube'];


        if(!empty($firstName_az) && !empty($lastName_az) && !empty ($description_az) && !empty($status) && !empty($position)){

            $config['upload_path']          = './uploads/admin/staff/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|JPEG|PDF|mp3|mp4';
            $config['remove_spaces']        = TRUE;
            $config['file_ext_tolower']     = TRUE;
            $config['encrypt_name']         = TRUE;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if($this->upload->do_upload('file')){

                $file_name = $this->upload->data('file_name');
                $file_ext = $this->upload->data('file_ext');

                $data = [
                    's_name_az'         => $firstName_az,
                    's_surname_az'      => $lastName_az,
                    's_description_az'  => $description_az,
    
                    's_name_en'         => $firstName_en,
                    's_surname_en'      => $lastName_en,
                    's_description_en'  => $description_en,
    
                    's_name_ru'         =>$firstName_ru,
                    's_surname_ru'      =>$lastName_ru,
                    's_description_ru'  =>$description_ru,
    
                    's_position'        => $position,
                    's_status'          => $status,
                    's_email'           => $email,
                    's_experience'      => $experience,
                    's_mobile'          => $mobile,
                    's_whatsApp'        => $whatsApp,
                    's_facebook'        => $facebook,
                    's_instagram'       => $instagram,
                    's_telegram'        => $telegram,
                    's_youtube'         => $youtube,
                    's_img'             => $file_name,
                    's_img_ext'         => $file_ext,
                    's_create_date'     => date("Y-m-d H:i:s"),
                    's_create_id'       => "",
                ];

            }else{
                
                $data = [
                    's_name_az'         => $firstName_az,
                    's_surname_az'      => $lastName_az,
                    's_description_az'  => $description_az,
    
                    's_name_en'         => $firstName_en,
                    's_surname_en'      => $lastName_en,
                    's_description_en'  => $description_en,
    
                    's_name_ru'         =>$firstName_ru,
                    's_surname_ru'      =>$lastName_ru,
                    's_description_ru'  =>$description_ru,
    
                    's_position'        => $position,
                    's_status'          => $status,
                    's_email'           => $email,
                    's_experience'      => $experience,
                    's_mobile'          => $mobile,
                    's_whatsApp'        => $whatsApp,
                    's_facebook'        => $facebook,
                    's_instagram'       => $instagram,
                    's_telegram'        => $telegram,
                    's_youtube'         => $youtube,
                    's_create_date'     => date("Y-m-d H:i:s"),
                    's_create_id'       => "",
                ];

            }

            $this->Admin_Model->staff_update($id, $data);
            redirect(base_url('Staff_List'));

        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }
    }


}