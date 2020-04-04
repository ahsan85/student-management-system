<?php
class Auth_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array("form", "url"));
        $this->load->library("form_validation");
        $this->load->model('Db_model');

        if (isset($this->session->loggedIn)) {

            redirect('student-portal');
        }
    }


    public function login()
    {


        // somehow check that request is get or post
        // if post than validate and submit data
        // if get than simply show the form
        if (isset($_POST['Email']) && isset($_POST['Password'])) {
            $config_rules = array(
                array(
                    "field" => "Email",
                    "lable" => "Email",
                    "rules" => "required"
                ),
                array(
                    "field" => "Password",
                    "lable" => "Password",
                    "rules" => "required|min_length[5]"
                ),

            );

            $this->form_validation->set_rules($config_rules);

            if ($this->form_validation->run()) {
                $data = $this->input->post();
                $data_array = array(
                    "email" => $data['Email'],
                    "password" => $data['Password']

                );
                $ressult = $this->Db_model->is_user_exsist($data_array);
                if ($ressult) {
                    $data = array(
                        'email' => $ressult['email'],
                        'password' =>  $ressult['password'],
                        'role' => $ressult['role'],
                        'loggedIn' => true

                    );
                    $this->session->set_userdata($data);

                    redirect('student-portal');
                }
            }
        }



        $this->load->view('auth/login');
    }
























    public function register_user()
    {
        $this->load->view('registration-form');
    }

    public function registeration_form_submit()
    {

        $config_rules = array(
            array(
                "field" => "Email",
                "lable" => "Email",
                "rules" => "required"
            ),
            array(
                "field" => "Password",
                "lable" => "Password",
                "rules" => "required|min_length[6]"
            ),
            // array(
            //     "field" => "Department",
            //     "lable" => "Department",
            //     "rules" => "required|min_length[3]"
            // ),
            // array(
            //     "field" => "Class",
            //     "lable" => "Class",
            //     "rules" => "required|min_length[3]"
            // ),
            // array(
            //     "field" => "Role",
            //     "lable" => "Role",
            //     "rules" => "required|min_length[3]"
            // ),

            // array(
            //     "field" => "session",
            //     "lable" => "session",
            //     "rules" => "required|min_length[3]"
            // ),


        );

        $this->form_validation->set_rules($config_rules);

        if ($this->form_validation->run() == FALSE) {
            $this->register_user();
        } else {
            $data = $this->input->post();
            $data_array = array(
                "email" => $data['Email'],
                "password" => $data['Password'],
                "department" => $data['Department'],
                "class" => $data['Class'],
                "role" => $data['Role'],
                "session" => $data['session'],

            );
            /// var_dump($data_array);
            // $this->insert_user_in_tbl($data_array);
        }
    }

    public function insert_user_in_tbl($data_array)
    {
        // var_dump("sdfsdf");
        //$this->Db_model->insert_into_tbl($data_array);
    }
}
