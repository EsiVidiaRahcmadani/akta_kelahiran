<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {

	var $API ="";
    function __construct(){
        parent::__construct();
        $this->API="http://localhost/api/";

        $this->load->helper(array('form', 'url', 'html'));
        
        $this->load->library('upload','table');
    }

    public function index()
	{
        $this->load->helper('url');
        $this->load->model('daerah_model');
        $this->load->library('session');
        $data['provinces'] = $this->daerah_model->get_province();
        $this->load->view('webuser/pendaftaran',$data);
        // print_r($data['provinces']); die;
    }

    function daftar()
    {
        if(isset($_POST['post'])){
            $date = date('Y-m-d H:i:s');
            $data = array(
                'nik'               =>  $this->input->post('nik'),
                'nm_kpl_keluarga'   =>  $this->input->post('nmkpl'),
                'nama_ibu'          =>  $this->input->post('nmibu'),
                'nm_lengkap'        =>  $this->input->post('nm'),
                'jk'                =>  $this->input->post('jk'),
                'tmpt_dilahirkan'   =>  $this->input->post('ttl'),
                'tgl_lahir'         =>  $this->input->post('tgl'),
                'tgl_daftar'        =>  date("Y-m-d H:i:s"),
                'province_id'       =>  set_value('province'),
                'regency_id'        =>  set_value('regency'),
                'district_id'       =>  set_value('district'),
                'tgl_ambil'         =>  date("Y-m-d H:i:s", strtotime($date. ' + 7 days + 4 hours')),
                'status'            =>  $this->input->post('status'));
        //print_r($data); die;
            $insert =  $this->curl->simple_post($this->API.'ak', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            $insert =  $this->curl->simple_post($this->API.'join', $data, array(CURLOPT_BUFFERSIZE => 10));
            if($insert)
            {
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            redirect('pendaftaran/lanjut');
        }
        // }else{
        //      $data[''] = json_decode($this->curl->simple_get($this->API.'ak'));
        //      $this->load->view('webuser/pendaftaran',$data);
        //  }
    }

    function lanjut()
    {
        $this->load->model('daerah_model');
        $data=array(
            'data_berkas' => $this->daerah_model->databerkas(),
            
        );
        $this->load->view('berkas/unggah',$data);
    }

    public function get_data()
    {
         $this->load->model('daerah_model');
        $modul=$this->input->post('modul');
        $id=$this->input->post('id');
        if($modul=="regency"){
        echo $this->daerah_model->get_regency($id);
        } else if($modul=="district") {
        echo $this->daerah_model->get_district($id);
        }
    }
}