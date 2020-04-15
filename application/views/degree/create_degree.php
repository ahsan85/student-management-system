<!-- load html head section i.e css, js and meta -->
<?php $this->load->view("partials/head"); ?>
<?php $this->load->view("partials/navbar"); ?>

<style>
    div.error {
        color: red;
    }
</style>

<div class="container col-lg-4 mt-3">
    <form method="POST">
        <div class="form-group">
            <label for="department">Select Department </label>
            <select name="department" class="form-control">
                < <?php  foreach ($departments as $department){?>
                
                <option selected value="<?php echo $department->id ?>"><?php echo $department->name ?></option>
                <?php  } ?>
            
            </select>

        </div>
        <div class="form-group">
            <label for="degreeName">Degree Name</label>
            <input type="text" class="form-control" name="degree" placeholder="Enter degree name">
            <?php echo form_error("degree", "<div class='error' >", "</div>"); ?>
        </div>
        <div class="form-group">
            <label for="degreeCode"> Degree Code</label>
            <input type="text" class="form-control" name="code" placeholder="Enter degree code">
            <?php echo form_error("code", "<div class='error' >", "</div>"); ?>
        </div>
        <div class="form-group">
            <label for="numberOfSemester">Semester</label>
            <input type="text" class="form-control" name="semester" placeholder="Enter Number of Semester">
            <?php echo form_error("semester", "<div class='error' >", "</div>"); ?>
        </div>

        <button type="submit" name="createDegree" class="btn btn-primary pull-right">Create</button>
    </form>
    <div class=" alert alert-success confirm-div"></div>
</div>
<script>
   
    $(document).ready(function() {
        $('.confirm-div').hide();
        <?php if ($this->session->flashdata('success')) { ?>
            $('.confirm-div').html('<?php echo $this->session->flashdata('success'); ?>').show();
           // $(".confirm-div").hide(5000);
           var timeout = 3000;
           $('.confirm-div').delay(timeout).fadeOut(300);

        <?php } ?>
    });
</script>



<?php $this->load->view("partials/foot"); 

