<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	var $API ="";
    function __construct(){
        parent::__construct();
        $this->API="http://localhost/api/";

        $this->load->helper(array('form', 'url', 'html'));
        
        $this->load->library('upload','table');
}

function index()
	{
	$this->load->view('admin/index');
	}

    function data()
    {
    $dataakta['akta'] = json_decode($this->curl->simple_get($this->API.'admin'));
        // print_r($dataakta); die;
        $this->load->view('admin/data',$dataakta);
        // $data = array(
        //     'nik' => $this->input->get('cari')
        // );

}

function edit($nik){
    $where = array('nik' => $nik);
    
    $edit['akta'] = json_decode($this->curl->simple_get($this->API.'edit',$where));
        // print_r($edit); die;
        $this->load->view('admin/editakta',$edit);
    }

    function update($nik){
        // print_r('S'); die;
        
        if(isset($_POST['submit'])){
            $data = array(
                'nik'               =>  $this->input->post('nik'),
                'nm_kpl_keluarga'   =>  $this->input->post('nmkpl'),
                'nama_ibu'          =>  $this->input->post('nmibu'),
                'nm_lengkap'        =>  $this->input->post('nm'));
            // print_r($data); die;
            $update =  $this->curl->simple_put($this->API.'admin', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            // if ($update){
            //     echo 'aw'; die;
            // }else{
            //     echo 'uw'; die;
            // }
            // if($update)
            // {
            //     $this->session->set_flashdata('hasil','Update Data Berhasil');
            // }else
            // {
            //    $this->session->set_flashdata('hasil','Update Data Gagal');
            // }
            redirect('admin/data');
        }else{
            $data['akta'] = json_decode($this->curl->simple_get($this->API.'admin'));
            // $params = array('nik'=>  $this->uri->segment(3));
            // $data['akta'] = json_decode($this->curl->simple_get($this->API.'admin'));
            $this->load->view('admin',$data);
        }
    }

    function hapus($nik){
        if(empty($nik)){
            redirect('admin');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'admin', array('nik'=>$nik), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete)
            {
                $this->session->set_flashdata('hasil','Delete Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Delete Data Gagal');
            }
            redirect('admin/data');
        }
    }

    function berkas()
    {
    $berkas['berkas'] = json_decode($this->curl->simple_get($this->API.'berkas'));
        // print_r($dataakta); die;
        $this->load->view('admin/berkas',$berkas);
    }
    }