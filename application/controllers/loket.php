<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class loket extends CI_Controller {

	var $API ="";
    function __construct(){
        parent::__construct();
        $this->API="http://localhost/api/";

        $this->load->helper(array('form', 'url', 'html'));
        
        $this->load->library('upload','table');
}

function index()
	{
        $kelahiran['belum'] = json_decode($this->curl->simple_get($this->API.'loket'));
        $kelahiran['selesai'] = json_decode($this->curl->simple_get($this->API.'dselesai'));
        $kelahiran['berkas'] = json_decode($this->curl->simple_get($this->API.'berkas'));
	$this->load->view('loket/home',$kelahiran);
	}

	function edit($nik){
		$edit = array('nik' => $nik);
		$loket['akta'] = json_decode($this->curl->simple_get($this->API.'edit',$edit));
		$this->load->view('loket/edit',$loket);
	}

	function update($nik){
        // print_r('S'); die;
        
        if(isset($_POST['post'])){
            $data = array(
                'nik'               =>  $this->input->post('nik'),
                'nm_kpl_keluarga'   =>  $this->input->post('nmkpl'),
                'nama_ibu'          =>  $this->input->post('nmibu'),
                'nm_lengkap'        =>  $this->input->post('nm'));
            //print_r($data); die;
            $update =  $this->curl->simple_put($this->API.'loket', $data, array(CURLOPT_BUFFERSIZE => 10)); 
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
            redirect('loket');
        }else{
            $data['akta'] = json_decode($this->curl->simple_get($this->API.'loket'));
            // $params = array('nik'=>  $this->uri->segment(3));
            // $data['akta'] = json_decode($this->curl->simple_get($this->API.'admin'));
            $this->load->view('loket',$data);
        }
    }

    function hapus($nik){
        if(empty($nik)){
            redirect('admin');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'loket', array('nik'=>$nik), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete)
            {
                $this->session->set_flashdata('hasil','Delete Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Delete Data Gagal');
            }
            redirect('loket');
        }
    }
}