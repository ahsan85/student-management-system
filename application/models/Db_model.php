<?php
class Db_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function insert_into_tbl($user)
    {

        $this->db->insert("users", $user);
    }

    public function is_user_exsist($user)
    {

        
        $this->db->select("*");
        $this->db->from("login_users");
        $where = array('email ' => $user['email'] , 'password ' => $user['password']);
        $this->db->where($where);
        $result=$this->db->get();
        $q=$result->row_array();
        return   $q;
    }
}
