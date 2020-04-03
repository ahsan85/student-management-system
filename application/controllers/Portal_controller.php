<?php
class Portal_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array("url"));
    

    }


    public function portal_view()
    {
      $this->load->view('portal_body');
        
    }

    public function portal_view_actions()
    {
       
       if(isset($_POST['register'])){
         redirect('student-portal/registration-form') ;
       }
    }

}
