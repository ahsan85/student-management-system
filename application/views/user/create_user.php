<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/bootstrap.min.css">
    <script src="<?php echo base_url() ?>/assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <title>Create User</title>

</head>
<style>
    /* .flex-container {
        padding: 0;
        margin: 0;
        list-style: none;
        max-width: 40%;
        align-items: center;

        margin-top: 5%;
    } */

    #outPopUp {
        position: absolute;
        width: 30%;
        /* z-index: 15; */
        top: 15%;
        left: 46%;
        margin: -100px 0 0 -150px;

    }

    .box {
        box-shadow:
            0 2.8px 2.2px rgba(0, 0, 0, 0.034),
            0 6.7px 5.3px rgba(0, 0, 0, 0.048),
            0 12.5px 10px rgba(0, 0, 0, 0.06),
            0 22.3px 17.9px rgba(0, 0, 0, 0.072),
            0 41.8px 33.4px rgba(0, 0, 0, 0.086),
            0 100px 80px rgba(0, 0, 0, 0.12);

    }


    div.error {
        color: red;
    }
</style>

<body>


    <div class="" id="outPopUp">
        <form class="box" style="border: 2px solid none; padding:25px 25px 25px;" method="post" action="">
            <a href="?back=true">Back</a>


            <h3 style="text-align: center" class="mb-3">Create User </h3>

            <div class="form-group mb-2">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" placeholder="name">
                <?php echo form_error("name", "<div class='error' >", "</div>"); ?>
            </div>
            <div class="form-group mb-2">
                <label for="Email">Email</label>
                <input type="email" class="form-control" name="Email" placeholder="Email">
                <?php echo form_error("Email", "<div class='error' >", "</div>"); ?>
            </div>
            <div class="form-group mb-2">
                <label for="Password">Password</label>
                <input type="password" class="form-control" name="Password" placeholder="Password">
                <?php echo form_error("Password", "<div class='error' >", "</div>"); ?>
            </div>
            <div class="form-group mb-2 ">
                <label for="Role">Role</label>
                <select name="Role" class="form-control  " id="type">
                    <option selected>Admin</option>
                    <option value="teacher">Teacher</option>

                    <option value="student">Student</option>
                </select>

            </div>

            <div class=" form-row  mb-2" id="class_sem">
                <div class="form-group col-md-6">
                    <label for="class">Class</label>
                    <select name="class" class="form-control">
                        <option selected>Morning</option>
                        <option value="evening">Evening</option>

                    </select>

                </div>

                <div class="form-group col-md-6">
                    <label for="semester">Semester</label>
                    <select name="semester" class="form-control">
                        <option value="1st" selected>1st</option>
                        <option value="2nd">2nd </option>
                        <option value="3rd">3rd</option>
                        <option value="4th">4th </option>
                        <option value="5th">5th</option>
                        <option value="6th">6th </option>
                        <option value="7th">7th</option>
                        <option value="8th">8th </option>
                    </select>
                </div>
            </div>
            <div class=" form-row">
                <div class="form-group col-md-6" id="dept">
                    <label for="Department">Department</label>
                    <select name="Department" class="form-control">
                        <option selected>Computer Science</option>
                        <option value="math">Maths</option>
                        <option value="physics">Physics</option>
                        <option value="english"> English</option>
                        <option value="BBA">BBA</option>
                    </select>

                </div>

                <div class="form-group col-md-6" id="session">
                    <label for="session">Session</label>
                    <select name="session" class="form-control">
                        <option selected>2018-22</option>
                        <option value="2019-23">2019-23</option>
                        <option value="2020-24">2020-24</option>
                        <option value="2021-25">2021-25</option>
                    </select>

                </div>

                <div class="form-group col-md-6" id="subject">
                    <label for="subject">Subject</label>
                    <input type="text" class="form-control" name="subject" placeholder="subject">
                    <?php echo form_error("subject", "<div class='error' >", "</div>"); ?>


                </div>
            </div>

            <button type="submit" class="btn btn-primary">Create</button>

        </form>

    </div>

    <script>
        $(function() {
            $('#session').hide();
            $('#class_sem').hide();
            $('#dept').hide();
            $('#subject').hide();
            $('#type').change(function() {
                if ($('#type').val() == 'Admin') {
                    //  $('#row_dim').show();
                    $('#session').hide();
                    $('#class_sem').hide();
                    $('#dept').hide()
                    $('#subject').hide();
                } else if ($('#type').val() == 'teacher') {
                    $('#dept').show()
                    $('#subject').show();
                    $('#session').hide();
                    $('#class_sem').hide();
                } else {
                    $('#session').show();
                    $('#class_sem').show();
                    $('#dept').show();
                    $('#subject').hide();
                }
            });

        });
    </script>

</body>

</html>

<?php
if (isset($_GET['back'])) {

    redirect('portal');
}
