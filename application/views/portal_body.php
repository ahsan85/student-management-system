<!-- load html head section i.e css, js and meta -->
<?php $this->load->view("partials/head"); ?>
<?php $this->load->view("partials/navbar"); ?>
<?php  //$this->load->view("user/profile"); 
if (isset($_GET['time-table']) && $this->session->role == 'Admin') {
    $this->load->view("time_table/time_tbl");
}

//var_dump($this->session->role);

$this->load->view("partials/foot");
?>