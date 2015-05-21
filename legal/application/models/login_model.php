<?php
if (!defined('BASEPATH'))    exit('No direct script access allowed');

class Login_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this   ->load    ->database();       
    }   
    public function login($name, $password) {
		/*$client_ip = $_SERVER['REMOTE_ADDR']; 
		$arr = "123.176.46.18,202.153.45.14,202.153.36.187,202.153.46.146";
		$ip = explode(',',$arr);
		if($ip[0]==$client_ip || $ip[1]==$client_ip || $ip[2]==$client_ip || $ip[3]==$client_ip)
		{
			$this->db->select('*')->from('login')->where('name', $name)->where('password', $password);
		}
		else
		{
			$this->db->select('*')->from('login')->where('name', 'hi')->where('password', 'hello');
		}*/
		$this->db->select('*')->from('login')->where('name', $name)->where('password', $password);
        $query = $this->db->get();   
        if ($query->num_rows()!= 0) {
            $result = $query->row_array();
                 } else {
            $result = NULL;
        }
        return $result;
    }  
}
