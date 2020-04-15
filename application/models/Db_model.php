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


    // check is exist in database
    public function is_user_exsist($user)
    {


        $this->db->select("*");
        $this->db->from("users");
        $where = array('email ' => $user['email'], 'password ' => $user['password']);
        $this->db->where($where);
        $result = $this->db->get();
        $q = $result->row_array();
        return   $q;
    }

    /* This function will insert data in depaertments table .... it contain 2 fields
    1) name
    2) code
      */
    public function insert_into_departments_tbl($detail)
    {


        $this->db->insert("department", $detail);

    }

     /* This function will insert data in degree table .... it contain 4 fields
    0) department
    1) name
    2) code
    3) semester
      */
      public function insert_into_degree_tbl($detail)
      {
  
  
          $this->db->insert("degree", $detail);
  
      }
       
      /* get department from departments table
      */
      public function get_department()
      {
        $this->db->select('department.*, degree.name As deg_name, semester');
        $this->db->from('department');
        $this->db->join('degree', 'department_id= department.id');
        $query = $this->db->get();

        $result = false;
        if ($query->num_rows() > 0) {
            $result = $query->result();
        }

        return $result;
      }

    // public function get_department_tbl($detail)
    // {

    //     $this->db->select("*");
    //     $this->db->from("department");
    //     $where = array('name ' => $detail['name'], 'degree ' => $detail['degree'], 'semester ' => $detail['semester']);
    //     $this->db->where($where);
    //     $result = $this->db->get();
    //     $q = false;
    //     if ($result->num_rows() > 0) {
    //         $q = $result->row_array();
    //     }

    //     return $q;
    // }
    // public function get_department_id()
    // {

    //     $this->db->select("*");
    //     $this->db->from("department");
    //     // $where = array('name ' => $detail['name'], 'degree ' => $detail['degree'], 'semester ' => $detail['semester']);
    //     // $this->db->where($where);
    //     $result = $this->db->get();
    //     $q = false;
    //     if ($result->num_rows() > 0) {
    //         $q = $result->row_array();
    //     }

    //     return $q;
    // }


    // public function get_semester_id($detail)
    // {

    //     $this->db->select("*");
    //     $this->db->from("time_table");
    //     $where = array('semester_id ' => $detail);
    //     $this->db->where($where);
    //     $result = $this->db->get();
    //     $q = false;
    //     if ($result->num_rows() > 0) {
    //         $q = $result->result_array();
    //     }

    //     return $q;
    // }

    public function get_teacher_form_users_tbl()
    {

        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('role', 'teacher');

        $query = $this->db->get();

        $result = false;
        if ($query->num_rows() > 0) {
            $result = $query->result();
        }

        return $result;
    }


    public function insert_into_time_tbl($detail)
    {

        $this->db->insert("time_table", $detail);
    }



    // public function get_time_form_tbl()
    // {
    //     $this->db->select('*');
    //     $this->db->from('users');
    //     $this->db->where('role', 'teacher');

    //     $query = $this->db->get();

    //     $result = false;
    //     if ($query->num_rows() > 0) {
    //         $result = $query->result();
    //     }

    //     return $result;
    // }


    public function get_time()
    {




        $this->db->select('time_table.*, users.name As teacher_name');


        $this->db->from('time_table');



        $this->db->join('users', 'users.id= time_table.teacher_id');
        $this->db->where('semester_id', $this->session->semester);

        $query = $this->db->get();

        $result = false;
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
        }

        return $result;
    }
//   public function delete_time($detail)
//   {
//     $where = array('name ' => $detail['name'], 'degree ' => $detail['degree'], 'semester ' => $detail['semester']);
//     $this->db->where($where);
//     $this->db->delete('department');
//     $semester_id = array( 'semester_id ' => $detail['semester']);
//     $this->db->where($semester_id);
//     $this->db->delete('time_table');


//   }


}
