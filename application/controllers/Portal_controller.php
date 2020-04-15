<?php
class Portal_controller extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->helper(array("form", "url"));
    $this->load->model('Db_model');

    if (!isset($this->session->loggedIn)) {
      redirect('login');
    }
  }


  public function portal_view()
  {
    $this->load->view('portal_body');
  }



  public function time_table()
  {

    if (isset($_POST['submit'])) {

      $data = $this->input->post();
      $detail = array(
        'name' => $data['Department'],
        'degree' => $data['Degree'],
        'semester' => $data['Semester']


      );
      $this->Db_model->insert_into_department_tbl($detail);
      $this->create_time_table();
    }
  }




  public function create_time_table()
  {


    $techer_data = $this->Db_model->get_teacher_form_users_tbl();
    $dataView['teachers']=$techer_data;
    // var_dump($dataView);
   
    

     $this->load->view('time_table/create_time_tbl',$dataView);

  }
}
