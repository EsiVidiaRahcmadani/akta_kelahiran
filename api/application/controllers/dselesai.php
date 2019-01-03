<?php
 
require APPPATH . '/libraries/REST_Controller.php';
 
class dselesai extends REST_Controller {
 
    function __construct($config = 'rest') {
        parent::__construct($config);
    }
 
    // show data mahasiswa
    function index_get() {
        $belum = $this->get('status');
            $kelahiran = $this->db->get("akta_kelahiran where status = 'Selesai' ")->result();
        $this->response($kelahiran, 200);
    }
}