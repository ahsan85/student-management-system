<?php
class Degree_controller extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->helper(array("form", "url"));
        $this->load->library("form_validation");
        $this->load->model('Db_model');
    }


    public function create_degree()
    {
        $depts['departments']=$this->Db_model->get_department();
        
        if (isset($_POST['createDegree'])) {
            $degree_data = $this->input->post();
            $config_rules = array(array("field" => "degree", "lable" => "degreeName", "rules" => "required|min_length[3]|trim|is_unique[degree.name]"), array("field" => "code", "lable" => "degreeCode", "rules" => "required|trim|is_unique[degree.code]"), array("field" => "semester", "lable" => "numberOfSemester", "rules" => "required|trim|is_unique[degree.semester]"));
            $this->form_validation->set_rules($config_rules);
            if ($this->form_validation->run() == FALSE) {
                //$this->load->view("degree/create_degree",$depts);
                redirect('portal/create-degree');
            }
            else{
              
                $degree_array = array(
                    "department_id"=> $degree_data['department'],
                    "name"=> $degree_data['degree'],
                    "code"=> $degree_data['code'],
                    "semester"=> $degree_data['semester'],


                );
                $this->session->set_flashdata("success","Record has been inserted successfully");
                $this->Db_model->insert_into_degree_tbl($degree_array);
               
                redirect('portal/create-degree');
            }
        } else {
             
            $this->load->view("degree/create_degree",$depts);
        }
    }
}