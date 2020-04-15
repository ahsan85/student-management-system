<?php
class Department_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array("form", "url"));
        $this->load->library("form_validation");
        $this->load->model('Db_model');
    }


    public function create_department()
    {


        if (isset($_POST['createDept'])) {
            $dept_data = $this->input->post();
            $config_rules = array(array("field" => "department", "lable" => "deptName", "rules" => "required|min_length[3]|trim|alpha|is_unique[department.name]"), array("field" => "code", "lable" => "deptCode", "rules" => "required|trim|is_unique[department.code]"));
            $this->form_validation->set_rules($config_rules);
            if ($this->form_validation->run() == FALSE) {
                $this->load->view("department/create_department");
            }
            else{
              
                $dept_array = array(
                    "name"=> $dept_data['department'],
                    "code"=> $dept_data['code']
                );
                $this->session->set_flashdata("success","Record has been inserted successfully");
                $this->Db_model->insert_into_departments_tbl($dept_array);
                //$this->load->view("department/create_department");
                redirect('portal/create-degree');
            }
        } else {
           
            $this->load->view("department/create_department");
        }      
    }


    public function view_departments()
    {
        $view_dept['view']=$this->Db_model->get_department(); 
      //  var_dump($view_dept);

        $this->load->view('department/view_department',$view_dept);

    }
}
