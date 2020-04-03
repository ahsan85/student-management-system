<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/bootstrap.min.css">
    <script src="<?php echo base_url() ?>/assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <title>Registration Form</title>

</head>
<style>
    .flex-container {
        padding: 0;
        margin: 0;
        list-style: none;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 5%;
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


    <div class=" flex-container">
        <form class="box" style="border: 2px solid none; padding:25px 25px 25px;" method="post" action="registration-form-submit">
            <h3 style="text-align: center" class="mb-4">Register Yourself </h3>
            <div class="form-group">
                <label for="Email">Email</label>
                <input type="email" class="form-control" name="Email" placeholder="Email">
                <?php echo form_error("Email", "<div class='error' >", "</div>"); ?>
            </div>
            <div class="form-group">
                <label for="Password">Password</label>
                <input type="password" class="form-control" name="Password" placeholder="Password">
                <?php echo form_error("Password", "<div class='error' >", "</div>"); ?>
            </div>

            <div class="form-group">
                <label for="Department">Department</label>
                <select name="Department" class="form-control">
                    <option selected>Computer Science</option>
                    <option>Maths</option>
                    <option>Physics</option>
                    <option>English</option>
                    <option>BBA</option>
                </select>

            </div>
            <div class="form-group">
                <label for="Class">Class </label>
                <select name="Class" class="form-control">
                    <option value="morning" selected>Morning</option>
                    <option value="evening">Evening </option>
                </select>

            </div>
            <div class=" form-row">
                <div class="form-group col-md-6">
                    <label for="Role">Role</label>
                    <select name="Role" class="form-control">
                        <option selected>Admin</option>
                        <option >Teacher</option>
                
                        <option>Student</option>
                    </select>

                </div>

                <div class="form-group col-md-6">
                    <label for="session">Session</label>
                    <select name="session" class="form-control">
                        <option selected>2018-22</option>
                        <option>2019-23</option>
                        <option>2020-24</option>
                        <option>2021-25</option>
                    </select>

                </div>
            </div>

            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>

    </div>

</body>

</html>