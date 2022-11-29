<?php
class Adminat_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}
	public function get_admin($s){
		$s=2;
		$query = $this->db->query("SELECT * FROM `users` WHERE `user_level`= $s");
		return $query->result_array();
}
public function get_perdorues1($id){
		

		$query = $this->db->get_where('users', array('uid' => $id));
		return $query->row_array();
}
public function create_user(){
	$slug = url_title($this->input->post('title'));
	$data = array(
		'fullname' =>$this->input->post('fullname'),
		
		'username' =>$this->input->post('username'),
		'email' =>$this->input->post('email'),
		'password' =>md5($this->input->post('password')),
		'mobile' =>$this->input->post('mobile'),
		'user_level' =>$this->input->post('user_level')
	);

	return $this->db->insert('users',$data);
}
public function delete_user($id){
	$this->db->where('uid',$id);
	$this->db->delete('users');
	return true;
}
public function update_user(){
$data = array(
		'fullname' =>$this->input->post('fullname'),
		
		'username' =>$this->input->post('username'),
		'email' =>$this->input->post('email'),
		'password' =>md5($this->input->post('password')),
		'mobile' =>$this->input->post('mobile'),
		'user_level' =>$this->input->post('user_level')
	);
$this->db->where('uid',$this->input->post('uid'));
return $this->db->update('users',$data);
}
}