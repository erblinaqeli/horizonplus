<?php
class Perdoruesit_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}
	public function get_perdorues($s){
		$s=3;
		$query = $this->db->query("SELECT * FROM `users` WHERE `user_level`= $s");
		return $query->result_array();
}
public function get_borgje(){
		$s=0;
		$query = $this->db->query("
SELECT borgji.arsyeja,borgji.shuma,borgji.`aprovim/refuzim`,borgji.`bid`,users.fullname,account.account_nr
FROM borgji
LEFT JOIN users ON borgji.uid = users.uid
LEFT JOIN account ON borgji.uid = account.uid WHERE `aprovim/refuzim`= $s;");
		return $query->result_array();
}
public function get_perdorues1($id){
		

		$query = $this->db->get_where('users', array('uid' => $id));
		return $query->row_array();
}
public function get_borgje1($id){
		
$query = $this->db->query("SELECT
    borgji.`arsyeja`,
    borgji.shuma,
    borgji.`aprovim/refuzim`,
    borgji.`bid`,
    users.fullname,
    account.account_nr
FROM
    borgji
LEFT JOIN users ON borgji.uid = users.uid
LEFT JOIN account ON borgji.uid = account.uid
WHERE
    `bid` = '$id';");
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

public function apply_borgj(){
	
	$data = array(
		'arsyeja' =>$this->input->post('arsyeja'),
		
		'shuma' =>$this->input->post('shuma'),
		'uid' =>$this->input->post('uid')
	);
	return $this->db->insert('borgji',$data);
}
public function delete_user($id){
	$this->db->where('uid',$id);
	$this->db->delete('users');
	return true;
}
public function delete_borgje($id){
	$this->db->where('bid',$id);
	$this->db->delete('borgji');
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
public function update_borgj(){
$data = array(
		
		'shuma' =>$this->input->post('shuma'),
		'bid' =>$this->input->post('bid'),
		'aprovim/refuzim' =>$this->input->post('aprovim/refuzim')
	);
$this->db->where('bid',$this->input->post('bid'));
return $this->db->update('borgji',$data);
}
}