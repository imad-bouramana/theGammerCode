<?php
class User_model extends CI_MODEL{
	public function register(){
		$data = array(
			'first_name' => $this->input->post('firstname'),
			'last_name' => $this->input->post('lastname'),
			'username' => $this->input->post('username'),
			'email' => $this->input->post('email'),
			'password' => sha1($this->input->post('password'))
			);
		$insert = $this->db->insert('users', $data);
		return $insert;
	}
	public function login($username, $password){
        $this->db->where('username', $username);
        $this->db->where('password', $password);

        $result = $this->db->get('users');
        if($result->num_rows() == 1){
             return $result->row(0)->id;
        }else{
        	return false;
        }
	}
}
