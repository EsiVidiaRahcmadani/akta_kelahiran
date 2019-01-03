 <?php
 
require APPPATH . '/libraries/REST_Controller.php';
 
class berkas extends REST_Controller {
 
    function __construct($config = 'rest') {
        parent::__construct($config);
    }
 
    // show data mahasiswa
    function index_get() {
        $nik = $this->get('nik');
        if ($nik == '') {
            $berkas = $this->db->get('berkas')->result();
        } else {
            $this->db->where('nik', $nik);
            $berkas = $this->db->get('berkas')->result();
        }
        $this->response($berkas, 200);
    }
 
    // insert new data to mahasiswa
    function index_post() {
        $data = array(
                    'nik'				=> $this->post('nik'),
                    'srt_ket_kelahiran'	=> $this->post('nm_kpl_keluarga'),
                    'ftcopy_kk'			=> $this->post('nama_ibu'),
                    'ftcop_aktanikah'	=> $this->post('nm_lengkap'),
                    'ktp'				=> $this->post('jk'),
                    'srt_ket_rt'        => $this->post('tmpt_dilahirkan'),
                    'srt_ket_rw'		=> $this->post('tgl_lahir'));
        $insert = $this->db->insert('berkas', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
    // update data mahasiswa
    function index_put() {
        $nik = $this->put('nik');
        $data = array(
                    'nik'               => $this->put('nik'),
                    'srt_ket_kelahiran' => $this->put('nm_kpl_keluarga'),
                    'ftcopy_kk'         => $this->put('nama_ibu'),
                    'ftcop_aktanikah'   => $this->put('nm_lengkap'),
                    'ktp'               => $this->put('jk'),
                    'srt_ket_rt'        => $this->put('tmpt_dilahirkan'),
                    'srt_ket_rw'        => $this->put('tgl_lahir'));
        $this->db->where('nik', $nik);
        $update = $this->db->update('berkas', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
    // delete mahasiswa
    function index_delete() {
        $nik = $this->delete('nik');
        $this->db->where('nik', $nik);
        $delete = $this->db->delete('berkas');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
}