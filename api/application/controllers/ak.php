 <?php
 
require APPPATH . '/libraries/REST_Controller.php';
 
class ak extends REST_Controller {
 
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
 
    // insert new data to mahasiswa
    function index_post() {
        $data = array(
                    'nik'				=> $this->post('nik'),
                    'nm_kpl_keluarga'	=> $this->post('nm_kpl_keluarga'),
                    'nama_ibu'			=> $this->post('nama_ibu'),
                    'nm_lengkap'		=> $this->post('nm_lengkap'),
                    'jk'				=> $this->post('jk'),
                    'tmpt_dilahirkan'	=> $this->post('tmpt_dilahirkan'),
                    'tgl_lahir'			=> $this->post('tgl_lahir'),
                    'tgl_daftar'		=> $this->post('tgl_daftar'),
                    'tgl_ambil'			=> $this->post('tgl_ambil'),
                    'province_id'       => $this->post('province_id'),
                    'regency_id'        => $this->post('regency_id'),
                    'district_id'       => $this->post('district_id'),
                    'status'            => $this->post('status'));
        $insert = $this->db->insert('akta_kelahiran',$data);
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
                    'nik'				=> $this->put('nik'),
                    'nm_kpl_keluarga'	=> $this->put('nm_kpl_keluarga'),
                    'nama_ibu'			=> $this->put('nama_ibu'),
                    'nm_lengkap'		=> $this->put('nm_lengkap'),
                    'jk'				=> $this->put('jk'),
                    'tmpt_dilahirkan'	=> $this->put('tmpt_dilahirkan'),
                    'tgl_lahir'			=> $this->put('tgl_lahir'),
                    'tgl_daftar'		=> $this->put('tgl_daftar'),
                    'tgl_ambil'			=> $this->put('tgl_ambil'),
                    'status'			=> $this->put('status'));
                    // 'province_id'		=> $this->put('province_id'),
                    // 'regency_id'		=> $this->put('regency_id'),
                    // 'district_id'		=> $this->put('district_id'));
        $this->db->where('nik', $nik);
        $update = $this->db->update('akta_kelahiran', $data);
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
        $delete = $this->db->delete('akta_kelahiran');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
}