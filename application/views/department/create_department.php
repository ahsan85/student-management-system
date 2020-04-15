<!-- load html head section i.e css, js and meta -->
<?php $this->load->view("partials/head"); ?>
<?php $this->load->view("partials/navbar"); ?>
<style>
    div.error {
        color: red;
    }
</style>

<div class="container col-lg-4 mt-5">
   
    <form method="POST" action="">

        <div class="form-group">
            <label for="deptName">Department Name</label>
            <input type="text" class="form-control" name="department" placeholder="Enter department name">
            <?php echo form_error("department", "<div class='error' >", "</div>"); ?>
        </div>
        <div class="form-group">
            <label for="deptCode">Department Code</label>
            <input type="text" class="form-control" name="code" placeholder="Enter department code">
            <?php echo form_error("code", "<div class='error' >", "</div>"); ?>
        </div>

        <button type="submit" name="createDept" value="submit" class="btn btn-primary pull-right">Create</button>
    </form>
    <div class=" alert alert-success confirm-div"></div>
</div>


<script>
    // assumes you're using jQuery
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


<?php $this->load->view("partials/foot"); ?>