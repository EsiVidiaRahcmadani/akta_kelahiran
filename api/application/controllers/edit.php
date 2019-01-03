 <?php
 
require APPPATH . '/libraries/REST_Controller.php';
 
class edit extends REST_Controller {
 
    function __construct($config = 'rest') {
        parent::__construct($config);
    }
 
    // show data mahasiswa
    function index_get() {
        $nik = $this->get('nik');
        if ($nik == '') {
            $kelahiran = $this->db->get('akta_kelahiran')->result();
        } else {
            $this->db->where('nik', $nik);
            $kelahiran = $this->db->get('akta_kelahiran')->result();
        }
        $this->response($kelahiran, 200);
    }
}