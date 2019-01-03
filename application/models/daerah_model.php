<?php

class daerah_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function get_province()
    {
        $this->db->order_by('name','ASC');
        $hasil=$this->db->get('provinces');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        }else{
            return false;
        }
    }

    public function get_regency($province_id)
    {
        $regency="<option value='0'>--Pilih Kabupaten/Kota--</option>";
        $this->db->order_by('name','ASC');
        $hasil= $this->db->get_where('regencies',array('province_id'=>$province_id));
        foreach ($hasil->result_array() as $data ) {
            $regency.= "<option value='$data[id]'>$data[name]</option>";
        }
        return $regency;
    }   

    public function get_district($regency_id)
    {
        $district="<option value='0'>--Pilih Kecamatan--</option>";
        $this->db->order_by('name','ASC');
        $hasil= $this->db->get_where('districts',array('regency_id'=>$regency_id));
        foreach ($hasil->result_array() as $data ) {
            $district.= "<option value='$data[id]'>$data[name]</option>";
        }
        return $district;
    }

    public function databerkas()
    {
        $this->db->order_by('id_berkas', 'ASC');
        $query = $this->db->get('berkas');
        return $query->result();
    }

    function unggah($table,$data,$id)
    {
        $this->db->where('id_berkas',$id)->update($table,$data);
    }
}