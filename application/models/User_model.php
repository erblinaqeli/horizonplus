<?php 
class User_model extends CI_Model{
	public function register($enc_password){
			// User data array
			$data = array(
				'fullname' => $this->input->post('fullname'),
				'email' => $this->input->post('email'),
                'username' => $this->input->post('username'),
                'mobile' => $this->input->post('mobile'),
                'password' => $enc_password,
                'ID_usersRole' => 3,
			);

			// Insert user
			return $this->db->insert('users', $data);
		}
		 function validate($username,$password){
    $this->db->where('username',$username);
    $this->db->where('password',$password);
    $result = $this->db->get('users',1);
    return $result;
  }
		//Log in User
	public function login($username, $password){
			// Validate
			$this->db->where('username', $username);
			$this->db->where('password', $password);

			$result = $this->db->get('users');
			$role = $result->row(6)->ID_usersRole;
			if($result->num_rows() == 1){
				return $result->row(0)->uid;
			} else {
				return false;
			}
		}
		// Check username exists
		
} 
