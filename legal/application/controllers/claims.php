<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Claims extends CI_Controller {
	        public function __construct()
        {
	parent::__construct();
        
       $this->load->library('form_validation');
       	}
        private function sessionchk(){
          $role_id = $this->session->userdata("role_id");
           $dept_id = $this->session->userdata("dept_id");
           if($dept_id!=1 && $dept_id!=3)
            {
                redirect("claims/index","refresh");
	    }
	}
         // Login Page for Dashboard
        public function index()
        {
        $this->load->view("login");
       }
       public function login()
        {
          $this->sessionchk();
        $this->load->view('links/top');
                $this->load->view('links/menu');
                $this->load->view('dashboard');
                $this->load->view('links/bottom'); 
       }
        //After login view the dashboard
        public function logindata()
	{
                $username=$this->input->post("name");
		 $password=$this->input->post("password");
                $this->load->model("login_model");
		 $data=$this->login_model->login($username,$password);
		if(count($data) == 0){
			$data['msg']="Sorry! Invalid Username/Password";
			$this->load->view("login",$data);
		}else {	
               $this->session->set_userdata('id',$data['id']);
               $this->session->set_userdata('name',$data['name']);
               $this->session->set_userdata('role_id',$data['role_id']);
               $this->session->set_userdata('dept_id',$data['dept_id']);
               $this->session->userdata('id');
	        $this->session->userdata('name');
               $this->session->userdata('role_id');
               $this->session->userdata('dept_id');
                $this->load->model("functions_model");
                $data['data']=$this->functions_model->insertlogs( $this->session->userdata('id'));
                if($this->session->userdata('name')== "1"){
                    
                }
                
                redirect('claims/login', 'refresh');
                }
        }
// copy rights show
    public function show($ack="") {
        if($ack == "in"){
				$data['msg']="New Record Inserted Succesfully!";
		}else if($ack == "up"){
				$data['msg']="Record Updated Succesfully!";
		}else if($ack == "del"){
				$data['msg']="Record Deleted Succesfully!";
		}else{
				$data['msg']="";
		}
        
        $this->sessionchk();
    	$this->load->view('links/top');
    	$this->load->view('links/menu');    
    	$data=array();
    	$this->load->model("functions_model");
    	$data['data']=$this->functions_model->data_all('legal');    		
    	$this->load->view('legal',$data);
    	    	
    	$this->load->view('links/bottom');
    }
    //add data to the copy rights menu  
     public function add() {
         $this->sessionchk();
    	$this->load->view('links/top');
    	$this->load->view('links/menu');
    	$this->load->view('legal_add');  
    	$this->load->view('links/bottom');
    }  
    // insert copy rights  data in to database 
    public function insertdata(){
    	
    	$data = array();    	
		$data['data']=$this->input->post();
		unset($data['data']['submit']);
        $this->form_validation->set_rules('title', 'Title',  'required');
		$this->form_validation->set_rules('cast', 'Other Crew', 'required');
		$this->form_validation->set_rules('actor', 'Actor', 'required');
		$this->form_validation->set_rules('actress', 'Actress', 'required');
		$this->form_validation->set_rules('director', 'Director', 'required');
		$this->form_validation->set_rules('music_director', 'Music Director', 'required');
		$this->form_validation->set_rules('producer', 'Producer', 'required');
		$this->form_validation->set_rules('banner', 'Banner', 'required');
		$this->form_validation->set_rules('release', 'Date Of Theortical Release', 'required');
		$this->form_validation->set_rules('language', 'Language', 'required');
		$this->form_validation->set_rules('partners', 'Partners / Provider Name', 'required');
		$this->form_validation->set_rules('stright', 'Straight / DUB', 'required');
		if($this->input->post('stright')=='dub'){
		$this->form_validation->set_rules('org_language', 'Original Language', 'required');
		}
		$this->form_validation->set_rules('genre', 'Genre', 'required');
		$this->form_validation->set_rules('rating', 'Rating', 'required');
		$this->form_validation->set_rules('subtitle', 'Subtitle', 'required');
		$this->form_validation->set_rules('censor', 'Censor', 'required');
		$this->form_validation->set_rules('censor_rating', 'Censor Rating', 'required');
		$this->form_validation->set_rules('agg_date', 'Agreement Start Date', 'required');
		$this->form_validation->set_rules('agg_exp', 'Agreement End Expiry', 'required');
		$this->form_validation->set_rules('territory', 'Territory', 'required');
		$this->form_validation->set_rules('exclusive', 'Exclusive / Non Exclusive', 'required');
		$this->form_validation->set_rules('source', 'Source Type', 'required');
		$this->form_validation->set_rules('format', 'Format HD/SD/TAPE', 'required');
		$this->form_validation->set_rules('synopsis', 'Synopsis', 'required');
		$this->form_validation->set_rules('images', 'Images', 'required');
		$this->form_validation->set_rules('posters', 'Posters', 'required');
		$this->form_validation->set_rules('sound', 'Sound Tracks', 'required');

		
		if ($this->form_validation->run() == FALSE)
		{
                         $this->sessionchk();
			$this->load->view('links/top');
			$this->load->view('links/menu');
			$data=array();
    	    $this->load->model("functions_model");
    	    $data['data']=$this->functions_model->data_all('legal');
			$this->load->view('legal_add',$data);
			$this->load->view('links/bottom');
		}
		else
		{
                  
		$this->load->model('functions_model');
    	$query=$this->functions_model->insert($data['data'],'legal');
    	redirect('claims/show', 'refresh');
		}	
       
    }
    // edit copyrights data
     public function edit() {
    	$id=$_GET['id'];
         $this->sessionchk();
        $this->load->view('links/top');
    	$this->load->view('links/menu');
    	$this->load->model("functions_model");
        $data = array();
    	$data['res']=$this->functions_model->edit($id);
       
    	$this->load->view('legal_edit',$data);  
    	$this->load->view('links/bottom');
    } 
   	 public function getlang() {
    	$val=$_POST['val'];
		if($val=='dub'){
    	$this->load->view('getlang');  
		}
    } 
    // delete copyrigths data from table and database.
    public function delete() {
    	$id=$_GET['id'];
        $this->sessionchk();
    	$this->load->model("functions_model");
    	$this->functions_model->delete('legal',$id);
    	$data['data']=$this->functions_model->data_all('legal');
    	redirect('claims/show', 'refresh');
    }  	
    // update copyrights data from database

        public function updatedata(){
                $id=$this->input->get_post('hidden');
               
         	$data = array();
                $data['title']=$this->input->get_post('title');
		$data['cast']=$this->input->get_post('cast');
                $data['actor']=$this->input->get_post('actor');
                $data['actress']=$this->input->get_post('actress');
		$data['director']=$this->input->get_post('director');
                $data['music_director']=$this->input->get_post('music_director');
		$data['producer']=$this->input->get_post('producer');
                $data['banner']=$this->input->get_post('banner');
		$data['release']=$this->input->get_post('release');
                $data['language']=$this->input->get_post('language');
		$data['partners']=$this->input->get_post('partners');
                $data['stright']=$this->input->get_post('stright');
		$data['org_language']=$this->input->get_post('org_language');
                $data['genre']=$this->input->get_post('genre');
		$data['rating']=$this->input->get_post('rating');
                $data['subtitle']=$this->input->get_post('subtitle');
		$data['censor']=$this->input->get_post('censor');
                $data['censor_rating']=$this->input->get_post('censor_rating');
		$data['agg_date']=$this->input->get_post('agg_date');
                $data['agg_exp']=$this->input->get_post('agg_exp');
                $data['territory']=$this->input->get_post('territory');
		$data['exclusive']=$this->input->get_post('exclusive');
                $data['source']=$this->input->get_post('source');
		$data['format']=$this->input->get_post('format');
                $data['delivery']=$this->input->get_post('delivery');
		$data['synopsis']=$this->input->get_post('synopsis');
                $data['images']=$this->input->get_post('images');
		$data['posters']=$this->input->get_post('posters');
                $data['sound']=$this->input->get_post('sound');
		$id=$this->input->get_post('hidden');
		$this->load->model('functions_model');
		$this->functions_model->update($data,$id);
           redirect('claims/show', 'refresh');        
	}
        
        /* Add Users By Admin*/
         public function addusers() {
         $this->sessionchk();
    	$this->load->view('links/top');
    	$this->load->view('links/menu');    
    	$this->load->view('adduser');
    	    	
    	$this->load->view('links/bottom');
    }
    // insert users in to database
        public function insertrolesdata(){
    	
    	$data = array();    	
		$data['data']=$this->input->post();
                unset($data['data']['submit']);
                $this->form_validation->set_rules('name', 'Name',  'required');
		$this->form_validation->set_rules('role_id', 'Roles', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('dept_id', 'Department', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		if ($this->form_validation->run() == FALSE)
		{
                        $this->sessionchk();
			$this->load->view('links/top');
			$this->load->view('links/menu');
			$data=array();
    	    $this->load->model("functions_model");
    	    $data['data']=$this->functions_model->rolesdata('login', $data);
			$this->load->view('adduser',$data);
			$this->load->view('links/bottom');
                }
		else 
		{
                  
		$this->load->model('functions_model');
                
                $query=$this->functions_model->insert($data['data'],'login');

                redirect('claims/addusers', 'refresh');
	}
} 
        // view the number of users added by Admin.
         public function settings() {
    
        $this->sessionchk();
    	$this->load->view('links/top');
    	$this->load->view('links/menu');    
    	$data=array();
    	$this->load->model("functions_model");
    	$data['data']=$this->functions_model->settings();    		
    	$this->load->view('settings',$data);
    	    	
    	$this->load->view('links/bottom');
           }
          
    }
    //aggrement expiry
    public function agreement_expiry() {
        
        $this->sessionchk();
    	$this->load->view('links/top');
    	$this->load->view('links/menu');    
    	$data=array();
    	$this->load->model("functions_model");
    	$data['data']=$this->functions_model->agreement_expiry();    		
    	$this->load->view('agreement_expiry',$data);
    	    	
    	$this->load->view('links/bottom');
    }
     public function agreement_expiry14days() {
        
        $this->sessionchk();
    	$this->load->view('links/top');
    	$this->load->view('links/menu');    
    	$data=array();
    	$this->load->model("functions_model");
    	$data['data']=$this->functions_model->agreement_expiry14days();    		
    	$this->load->view('agreement_expiry',$data);
    	    	
    	$this->load->view('links/bottom');
    }
     public function agreement_expiry1day() {
        
        $this->sessionchk();
    	$this->load->view('links/top');
    	$this->load->view('links/menu');    
    	$data=array();
    	$this->load->model("functions_model");
    	$data['data']=$this->functions_model->agreement_expiry1day();    		
    	$this->load->view('agreement_expiry',$data);
    	    	
    	$this->load->view('links/bottom');
    }
     public function agreement_todayexpired() {
        
        $this->sessionchk();
    	$this->load->view('links/top');
    	$this->load->view('links/menu');    
    	$data=array();
    	$this->load->model("functions_model");
    	$data['data']=$this->functions_model->agreement_todayexpired();    		
    	$this->load->view('agreement_expiry',$data);
    	    	
    	$this->load->view('links/bottom');
    }
    public function changepassword()
	{
	
         $this->sessionchk();
    	$this->load->view('links/top');
    	$this->load->view('links/menu');    
    	$this->load->view('passwordview');
        $this->load->view('links/bottom');
		
	}
        public function updatepassword()
	{
                    $this->sessionchk();
		 $cpassword=$this->input->post("current_password");
		 $npassword=$this->input->post("new_password");
		 $cnpassword=$this->input->post("confirm_new_password");
                  $email=$this->input->post("email");
                  $this->load->model("functions_model");
		 $data=$this->functions_model->password($cpassword,$this->session->userdata("id"));
		if(count($data) == 0){  
			$res['msg']="Old Password Incorrect!";
                        $this->load->view('links/top');
                $this->load->view('links/menu');    
                $this->load->view("passwordview",$res);
                $this->load->view('links/bottom');
		}else{
			if($npassword == $cnpassword){
				$rec=array("password"=>$npassword);
				$this->functions_model->updatepassword($data['id'],$rec);
                               $res['msg']="Password Updated Successfully!";
                                redirect('claims/logout', 'refresh');
			}else{
                            if($npassword != $cnpassword){
				$res['msg']="Password Mismatched!";
                                $this->load->view('links/top');
                $this->load->view('links/menu');    
                $this->load->view("passwordview",$res);
                $this->load->view('links/bottom');
                            }
			}			
                }
	}
         public function profile_view()
	{
              $this->sessionchk(); 
			
                $this->load->model("functions_model");
                $data['res']=$this->functions_model->profiledata($_GET['id']);
                 $this->load->view('links/top');
                 $this->load->view('links/menu');
                   $this->load->view("profileview",$data);
                $this->load->view('links/bottom');
		
	}
      
     public function logout()
        {
          $this->session->sess_destroy();
    
   redirect('claims/index', 'refresh');
  
   
	}
      


}
      