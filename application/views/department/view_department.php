<?php $this->load->view("partials/head"); ?>
<table class="table">
  <thead>
    <tr>
      
      <th scope="col">Department</th>
      <th scope="col">Department Code</th>
      <th scope="col">No Of Semesters</th>
      <th scope="col">Degree offer</th>
    </tr>
  </thead>
  <tbody>
   
    <?php  foreach ($view as $data => $view_data) {  ?>
        <tr>
               <td><?php echo $view_data->name ; ?></td>
               <td><?php echo $view_data->code ; ?></td>
               <td><?php echo $view_data->semester ; ?></td>
               <td><?php echo $view_data->deg_name ; ?></td>
               
               </tr>
     <?php } ?>
       
  </tbody>
</table>


<?php $this->load->view("partials/foot");

