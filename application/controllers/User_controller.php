<?php
class User_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array("form", "url"));
        $this->load->library("form_validation");
        $this->load->model('Db_model');
    }




    /* login form end */

    /* registration  form start*/



    public function create_user()
    {

        if (isset($_POST['Email']) and isset($_POST['Password'])) {



            $config_rules = array(
                array(
                    "field" => "name",
                    "lable" => "name",
                    "rules" => "required|trim"
                ),
                array(
                    "field" => "Email",
                    "lable" => "Email",
                    "rules" => "required|trim|is_unique[users.email]"
                ),
                array(
                    "field" => "Password",
                    "lable" => "Password",
                    "rules" => "required|min_length[6]|trim"
                ),
                // help
                array(
                    "field" => "subject",
                    "lable" => "subject",
                    "rules" => "required|min_length[6]|trim"
                ),

            );


            $this->form_validation->set_rules($config_rules);
            if ($this->form_validation->run() == False) {
                $this->load->view('user/create_user');
            } else {
                $data = $this->input->post();
                if ($_POST['Role'] == 'Admin') {
                    $data_array = array(
                        "name" => $data['name'],
                        "email" => $data['Email'],
                        "password" => $data['Password'],
                        "role" => $data['Role'],


                    );
                } else if ($_POST['Role'] == 'teacher') {

                    $data_array = array(
                        "name" => $data['name'],
                        "email" => $data['Email'],
                        "password" => $data['Password'],
                        "role" => $data['Role'],
                        "department" => $data['Department'],
                        "subject" => $data['subject']


                    );
                } else {
                    // $data = $this->input->post();
                    $data_array = array(
                        "name" => $data['name'],
                        "email" => $data['Email'],
                        "password" => $data['Password'],
                        "department" => $data['Department'],
                        "class" => $data['class'],
                        'semester' => $data['semester'],
                        "role" => $data['Role'],
                        "session" => $data['session'],

                    );
                }
                $result = $this->Db_model->insert_into_tbl($data_array);
                $this->load->view('user/create_user');
            }
        } else {
            $this->load->view('user/create_user');
        }
    }
}
