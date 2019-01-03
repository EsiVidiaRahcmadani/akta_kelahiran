<?php
 
require APPPATH . '/libraries/REST_Controller.php';
 
class join extends REST_Controller {
 
    function __construct($config = 'rest') {
        parent::__construct($config);
    }

    function index_get() {
    	$nik = $this->get('nik');
        if ($nik == '') {
            $this->db->join('berkas', 'akta_kelahiran.nik = berkas.nik');
            $kelahiran = $this->db->get('akta_kelahiran')->result();
        } else {
            $this->db->where('berkas.nik', $nik);
            $this->db->join('berkas', 'akta_kelahiran.nik = berkas.nik');
            $kelahiran = $this->db->get('akta_kelahiran')->result();
        }
        $this->response($kelahiran, 200);
    }
    
    function index_post() {
        
    }
}