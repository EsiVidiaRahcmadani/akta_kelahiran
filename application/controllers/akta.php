<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class akta extends CI_Controller {

	var $API ="";
    function __construct(){
        parent::__construct();
        $this->API="http://localhost/api/";

        $this->load->helper(array('form', 'url', 'html'));
        
        $this->load->library('upload','table');
}

function index()
	{
	$this->load->view('data/index');
	}

    function unggah($id)
    {
        $this->load->model('daerah_model');
        $config['upload_path'] = 'uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']   = '10000';
        $config['max_width']  = '20000';
        $config['max_height']  = '20000';
        $config['remove_spaces']  = FALSE;
      
        $upload_error=array();
        $this->upload->initialize($config);
        for($i=0; $i<count($_FILES['gambar']['name']); $i++)
        {
            $_FILES['userfile']['name']= $_FILES['gambar']['name'][$i];
            $_FILES['userfile']['type']= $_FILES['gambar']['type'][$i];
            $_FILES['userfile']['tmp_name']= $_FILES['gambar']['tmp_name'][$i];
            $_FILES['userfile']['error']= $_FILES['gambar']['error'][$i];
            $_FILES['userfile']['size']= $_FILES['gambar']['size'][$i];
            
            if (!$this->upload->do_upload())
            {
                // fail
               $gambar="";
               $gbkk="";
               $gban="";
               $gbktp="";
               $gbrt="";
               $gbrw="";
               echo $this->upload->display_errors();
              
            }
            else {
              echo $fileName = $_FILES['gambar']['name'][$i];
               $images[$i] = $fileName;
            }
        }
       
        $gambar=$images[0];
        $gbkk=$images[1];
        $gban=$images[2];
        $gbktp=$images[3];
        $gbrt=$images[4];
        $gbrw=$images[5];
          
        $data=array(
            //'id_berkas'=>$this->session->userdata('ID'),
            //'nik'=>$this->input->post('nik'),
            'srt_ket_kelahiran'=>$gambar,
            'ftcopy_kk'=>$gbkk,
            'ftcop_aktanikah'=>$gban,
            'ktp'=>$gbktp,
            'srt_ket_rt'=>$gbrt,
            'srt_ket_rw'=>$gbrw,
        );
        
        $this->daerah_model->unggah('berkas',$data,$id);
        redirect("Pelayanan");
    }
    }