<?php

class login_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function check_credential()
    {
        $username = set_value('username');
        $password = set_value('password');
        
        $hasil = $this->db->where('username',$username)
        ->where('password',$password)
        ->limit(1)
        ->get('user');
        
        if($hasil->num_rows() > 0){
            return $hasil->row();
        }else{
            return array();
        }
    }
}