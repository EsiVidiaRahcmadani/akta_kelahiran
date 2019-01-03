<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

 public function __construct()
{
	parent::__construct();
    #load_library dan helper yang dibutuhkan
    $this->load->library(array('table','form_validation'));
    $this->load->helper(array('form','url'));
    $this->load->model('login_model','',TRUE);
    $this->load->model('user_model');
    $this->load->library('session');
    $this->load->helper('date');
    // $this->load->model('user_model','',TRUE);
}
	
	function index()
	{
	$this->load->view('login/login');
	}

	function login()

    {
        $this->form_validation->set_rules('username','Username','required|alpha_numeric');
        $this->form_validation->set_rules('password','Password','required|alpha_numeric');
        
        if($this->form_validation->run() == FALSE){
            $this->load->view('web/login');
        }else{
            $this->load->model('login_model');
            $valid_user = $this->login_model->check_credential();
            
            if($valid_user == FALSE){
                $this->session->set_flashdata('error','Maaf, username atau password yang Anda masukkan salah. Silakan coba lagi');
                redirect('login');
            }else{
                $this->session->set_userdata('id_user',$valid_user->id_user);
                $this->session->set_userdata('username',$valid_user->username);
                $this->session->set_userdata('group',$valid_user->group);
                
                switch($valid_user->group){
                    case 1 :
                    redirect('admin'); 
                    break;
                    case 2 :
                    redirect('pelayanan'); 
                    break;
                    case 3 :
                    redirect('loket'); 
                    break;
                    default: 
                    break;
                }
            }
        }
    }

    function daftar()
    {
        $this->form_validation->set_rules('nama_user','Nama Lengkap','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('username','Username','required|alpha_numeric|min_length[5]|max_length[20]|is_unique[user.username]');
        $this->form_validation->set_rules('password','Password','required|alpha_numeric|min_length[8]|max_length[24]');
        $this->form_validation->set_rules('province','Provinsi','required');
        $this->form_validation->set_rules('regency','Kabupaten/Kota','required');
        $this->form_validation->set_rules('district','Kecamatan','required');
        
        if($this->form_validation->run() == FALSE){
            $data['provinces'] = $this->user_model->get_province();
            $this->load->view('webuser/register', $data);
        }else{
            $user_data = array (
                'id_user' => $this->user_model->get_user_id(),
                'nama_user' => set_value('nama_user'),
                'email' => set_value('email'),
                'username' => set_value('username'),
                'password' => set_value('password'),
                'province_id' => set_value('province'),
                'regency_id' => set_value('regency'),
                'district_id' => set_value('district'),
                'group' => '2',
            );
            $this->user_model->register($user_data);
            $valid_user = $this->user_model->check_credential();
            $this->session->set_userdata('id_user',$valid_user->id_user);
            $this->session->set_userdata('username',$valid_user->username);
            
            switch($valid_user->group){
                 case 1 :
                    redirect('user'); 
                    break;
                    case 2 :
                    redirect(base_url()); 
                    break;

                    case 3 :
                    redirect('loket'); 
                    break;
                    default: 
                    break;
            }
        }
    }

    function reg()
    {
        
    }
}