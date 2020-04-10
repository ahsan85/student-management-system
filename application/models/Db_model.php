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


    public function insert_into_department_tbl($detail)
    {
       
        $this->db->insert("department", $detail);

    }

    public function get_data_form_users_tbl()
    {

        


        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('role','teacher');
    
        $query = $this->db->get();
    
        $result = false;
        if ($query->num_rows() > 0) {
          $result = $query->result();
        }
    
        return $result;
      
    }



}
