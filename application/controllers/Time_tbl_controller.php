<?php
class Time_tbl_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array("form", "url"));
        $this->load->library("form_validation", "session");
        $this->load->model('Db_model');

        if (!isset($this->session->loggedIn)) {
            redirect('login');
        }
    }


    public function time_table()
    {


        if (isset($_POST['create'])) {


            $deptdata = $this->input->post();

            $deptdetail = array(
                'name' => $deptdata['Department'],
                'degree' => $deptdata['Degree'],
                'semester' => $deptdata['Semester']
            );
            $depresult = $this->Db_model->get_department_tbl($deptdetail);


            if ($depresult) {

                echo "Error";
            } else {
                $this->session->set_userdata($deptdetail);
                $this->Db_model->insert_into_department_tbl($deptdetail);
                $techer_data = $this->Db_model->get_teacher_form_users_tbl();

                $dataView['teachers'] = $techer_data;

                $this->load->view('time_table/create_time_tbl', $dataView);
            }
        }

        if (isset($_POST['delete'])) {
            $deptdata = $this->input->post();


            $deptdetail = array(
                'name' => $deptdata['Department'],
                'degree' => $deptdata['Degree'],
                'semester' => $deptdata['Semester']
            );
            $depresult = $this->Db_model->get_department_tbl($deptdetail);
            var_dump($depresult['id']);
            die();

            $this->Db_model->delete_time($deptdetail);
        }


        if (isset($_POST['submit1'])) {

            $data = $this->input->post();
            $techer_data = $this->Db_model->get_teacher_form_users_tbl();

            $dataView['teachers'] = $techer_data;

            $this->form_validation->set_rules('slot', 'slot', 'is_unique[time_table.slot]');

            if ($this->form_validation->run() == FALSE &&  $this->Db_model->get_semester_id($this->session->semester)) {
                $this->load->view('time_table/create_time_tbl', $dataView);
            } else {
                $this->load->view('time_table/create_time_tbl', $dataView);

                $detail = array(
                    "semester_id" => $this->session->semester,
                    "days" => $data['days'],
                    "slot" => $data['slot'],
                    "teacher_id" => $data['teacherId'],
                    "subject" => $data['subject']

                );
                $this->Db_model->insert_into_time_tbl($detail);
            }
        }
    }



    public function get_time_tbl()
    {

        $timeTables = $this->Db_model->get_time();

        $this->load->view("partials/head");
        $this->load->view("partials/navbar");
        $this->load->view("time_table/view_time_table", [
            'days' => array(
                "monday" => "Monday",
                "tuesday" => "Tuesday",
                "wednesday" => "Wednesday",
                "thursday" => "Thursday",
                "friday" => "Friday",

            ),
            'slots' => array(
                "slot6" => "1:00PM To 1:59PM",
                "slot7" => "2:00PM To 2:59PM",
                "slot8" => "3:00PM To 3:59PM",
                "slot9" => "4:00PM To 4:59PM",

            ),
            'details' => $timeTables
        ]);
        $this->load->view("partials/foot");
    }
}
