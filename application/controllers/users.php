<?php 
class Users extends CI_Controller{
	public function register(){
		$this->form_validation->set_rules('firstname', 'First Name', 'trim|required|min_length[2]|max_length[20]');
		$this->form_validation->set_rules('lastname', 'Last Name', 'trim|required|min_length[2]|max_length[20]');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|matches[password]');
		
		if ($this->form_validation->run() == FALSE){
                   $data['contant_data'] = 'register';
	               $this->load->view("layout/main", $data);
           } else{
                   // $this->load->view('formsuccess');
	           	    if($this->User_model->register()){
                         $this->session->set_flashdata('registered', 'You Are Now Logester');
                         redirect('products');
	                 }
           	     }
		
	    }
	    public function login(){
	    	$this->form_validation->set_rules('username', 'Username', 'trim|required');
		    $this->form_validation->set_rules('password', 'Password', 'trim|required');

		    $username = $this->input->post('username');
		    $password = sha1($this->input->post('password'));
            
            $user_id = $this->User_model->login($username, $password);
            if($user_id){
            	$data = array(
                    'user_id' => $user_id,
                    'username' => $username,
                    'logged_in' => true
            		);
            	//session 
            	$this->session->set_userdata($data);
            	

            	// message session
            	$this->session->set_flashdata('pass_login', 'You Are Login In');
            	
            	redirect('products');
            }else{
            	$this->session->set_flashdata('fail_login', 'Sorry You Are Not Login In');
            	redirect('products');
           
            }
	    }

	    public function logout(){
	    	$this->session->unset_userdata('logged_in');
	    	$this->session->unset_userdata('user_id');
	    	$this->session->unset_userdata('username');
	    	$this->session->sess_destroy();
	    	redirect('products');
	    }
}