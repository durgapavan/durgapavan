<?php
if (!defined('BASEPATH'))    exit('No direct script access allowed');

class Functions_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this   ->load    ->database();       
    }   
       
    public function data_all($table) {

    	$this->db->select('*')->from($table);
    	$query = $this->db->get();
    	if ($query->num_rows()!= 0) {
    		$result = $query->result_array();
    	} else {
    		$result = NULL;
    	}
    	return $result;
    }
    
    // sql query to show few fields for the user
     public function data_user($table) {

    	$this->db->select('title, actor, actress, producer, banner, language, org_language,agg_date, agg_exp')->from($table);
    	$query = $this->db->get();
    	if ($query->num_rows()!= 0) {
    		$result = $query->result_array();
    	} else {
    		$result = NULL;
    	}
    	return $result;
    }
	public function data_where($table,$array) {
		 $this->db->select('*')->from($table);
		$this->db->where($array); 
    	$query = $this->db->get();
    	if ($query->num_rows()!= 0) {
    		$result = $query->result_array();
    	} else {
    		$result = NULL;
    	}
    	return $result;
    }    
    public function edit($id) {
    
    	$this->db->select('*')->from('legal')->where('id', $id);
    	$query = $this->db->get();
    	if ($query->num_rows()!= 0) {
    		$result = $query->row_array();
    	} else {
    		$result = NULL;
    	}
    	return $result;
    }
	public function delete($table,$id) {    
    	$this->db->where('id', $id);
	$this->db->delete($table);     	
    }	
    public function insert($rec,$table){
       
    	$this->db->insert($table, $rec);
    }
    public function update($rec,$id){
       
    	$this->db->where('id',$id);    	
    	$this->db->update("legal", $rec);
        redirect('/claims/show/up', 'refresh');
    }
    /*inserting role data into tables*/
    public function rolesdata($table) {

    	$this->db->select('*')->from($table);
    	$query = $this->db->get();
    	if ($query->num_rows()!= 0) {
    		$result = $query->result_array();
    	} else {
    		$result = NULL;
    	}
    	return $result;
}
public function settings() {

    	$this->db->select('u.*, d.departments as dept_id, l.login_time as lastlogin')
                ->from('login u, department d, logs l')
                ->where('u.id = l.users_id')
                ->where('u.dept_id = d.dept_id')
                ->where('u.role_id != ', '1');
         
    	$query = $this->db->get();
    	if ($query->num_rows()!= 0) {
    		$result = $query->result_array();
    	} else {
    		$result = NULL;
    	}
    	return $result;
    }
     public function insertlogs($rec){
       
          $sql = "INSERT INTO logs(id, users_id, login_time) VALUES ('',$rec,now())";
    	$this->db->query($sql);
    	$this->db->trans_complete();
    	return $this->db->insert_id(); 
        
    }
     public function agreement_expiry() {
         $query=$this->db->query('SELECT * FROM legal WHERE agg_exp <= (NOW() + INTERVAL 30 DAY) and agg_exp > now()');
        if ($query->num_rows()!= 0) {
    		$result = $query->result_array();
    	} else {
    		$result = NULL;
    	}
    	return $result;

}
public function agreement_expiry14days() {
         $query=$this->db->query('SELECT * FROM legal WHERE agg_exp <= (NOW() + INTERVAL 14 DAY) and agg_exp > now()');
        if ($query->num_rows()!= 0) {
    		$result = $query->result_array();
    	} else {
    		$result = NULL;
    	}
    	return $result;

}
public function agreement_expiry1day() {
         $query=$this->db->query('SELECT * FROM legal WHERE agg_exp <= (NOW() + INTERVAL 1 DAY) and agg_exp > now()');
        if ($query->num_rows()!= 0) {
    		$result = $query->result_array();
    	} else {
    		$result = NULL;
    	}
    	return $result;

}
public function agreement_todayexpired() {
         $query=$this->db->query('SELECT * FROM legal WHERE agg_exp = curdate()');
        if ($query->num_rows()!= 0) {
    		$result = $query->result_array();
    	} else {
    		$result = NULL;
    	}
    	return $result;

}

public function password($cpassword,$id){
		$this   ->	db  ->select("*")
				      ->from("login")
				      -> where('password',$cpassword)
				      -> where('id',$id);
		$query=$this->db->get();
		//echo $this->db->last_query();
		if($query->num_rows()>0){
			$result =	$query->row_array();
		}else{
			$result=	array();
		}
		return $result;
	}
	public function updatepassword($id,$data){
		$this->db->where('id', $id);
		$this->db->update('login', $data); 
	}
         public function profiledata($id){
		$this->db->select("*")
			->from("legal")
			
                        ->order_by('id','desc')
                        ->limit('1')
                        -> where('id',$id); 
		$query=$this->db->get();
		return $query->row_array();
	}
        
          public  function pdfdata($id)
    {
        $this->db->distinct()
		          ->select('*')
				  ->limit(1)
                 ->from('legal')
				 ->where('title', $id);
           
        $getData = $this->db->get();
        if($getData->num_rows() > 0)
        return $getData->result_array();
        else return null;
    }
   public function docdata($id)
    {
        $this->db->distinct()
                ->select('*')
		 ->from('legal')
		 ->where('title', $id)
                 ->limit(1);
           
        $getData = $this->db->get();
        if($getData->num_rows() > 0){
        return $getData->result_array();}
        else { return null;}
    }
   

        }

