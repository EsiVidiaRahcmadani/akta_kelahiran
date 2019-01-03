<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelayanan extends CI_Controller {

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
		$this->load->library('session');
		$this->load->view('webuser/menu');
	}

	function cari()
	{
		$this->load->view('webuser/caridata');
	}

	function monitoring(){
		$data = array(
			'nik' => $this->input->get('cari')
		);

		// $nik = $this->input->post('cari');
		// print_r($data); die;

	$dataakta['akta'] = json_decode($this->curl->simple_get($this->API.'ak',$data));
        $this->load->view('webuser/monitoring',$dataakta);
}

public function lihat_berkas($nik)
	{
		$edit = array('nik' => $nik);
		//print_r($edit); die;		
		$dataakta['akta'] = json_decode($this->curl->simple_get($this->API.'join',$edit));
	// $dataakta['akta'] = json_decode($this->curl->simple_get($this->API.'berkas'));
	$this->load->view('webuser/lihatdata',$dataakta);
		}
}