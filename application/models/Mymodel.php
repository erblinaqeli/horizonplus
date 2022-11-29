<?php 
class Mymodel extends CI_Model{
{
    function __construct()
    {
        parent::__construct();
    }

    function search($keyword)
    {
        $this->db->like('fullname ',$keyword);
        $query  =   $this->db->get('users');
        return $query->result();
    }
} 
?>