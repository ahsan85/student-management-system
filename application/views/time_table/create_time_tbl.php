<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/bootstrap.min.css">
    <script src="<?php echo base_url() ?>/assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <title>Create Time </title>


    <style>
        .box {
            box-shadow:
                0 2.8px 2.2px rgba(0, 0, 0, 0.034),
                0 6.7px 5.3px rgba(0, 0, 0, 0.048),
                0 12.5px 10px rgba(0, 0, 0, 0.06),
                0 22.3px 17.9px rgba(0, 0, 0, 0.072),
                0 41.8px 33.4px rgba(0, 0, 0, 0.086),
                0 100px 80px rgba(0, 0, 0, 0.12);

        }
    </style>

</head>



<body>

    <form class="form container col-lg-4 box" style="border: 2px solid none; padding:25px 25px 25px;" method="post" action="">
        <div class="">

            <div style="text-align: center" class="mt-5">
                <h3>Create Time </h3>
            </div>

            <div class="form-group ">
                <label for="days">Days</label>
                <select name="days" class="form-control">
                    <option value="monday">Monday</option>
                    <option value="tuesday">Tuesday </option>
                    <option value="wednesday">Wednesday</option>
                    <option value="thursday">Thursday </option>
                    <option value="friday">Friday</option>
                </select>
            </div>
            <div class="form-group">
                <label for="slot">Slot</label>
                <select name="slot" class="form-control">
                    <option value="8:00AM To 9:00AM">Slot 1st (8:00AM To 8:59AM)</option>
                    <option value="9:00AM To 9:59AM">Slot 2nd (9:00AM To 9:59AM)</option>
                    <option value="10:00AM To 10:59AM">Slot 3rd (10:00AM To 10:59AM)</option>
                    <option value="11:00AM To 11:59AM">Slot 4th (11:00AM To 11:59AM)</option>
                    <option value="12:00PM To 12:59PM">Slot 5th (12:00PM To 12:59PM)</option>
                    <option value="1:00PM To 1:59PM">Slot 6th (1:00PM To 1:59PM)</option>
                    <option value="2:00PM To 2:59PM">Slot 7th (2:00PM To 2:59PM)</option>
                    <option value="3:00PM To 3:59PM">Slot 8th (3:00PM To 3:59PM)</option>
                    <option value="4:00PM To 4:59PM">Slot 9th (4:00PM To 4:59PM)</option>

                </select>
                <?php echo form_error("slot", "<div class='error' >", "</div>"); ?>
            </div>
            <div class="form-group ">
                <label for="teacherId">Teacher</label>
                <select name="teacherId" class="form-control">
                    <?php
                    foreach ($teachers as $teacher => $value) {  ?>
                        <option value="<?php echo "$value->id"; ?>"><?php echo "$value->name"; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>

            <div class="form-group ">
                <label for="subject">Subject</label>
                <select name="subject" class="form-control">
                    <?php
                    foreach ($teachers as $teacher => $value) {  ?>
                        <option value="<?php echo "$value->subject"; ?>"><?php echo "$value->subject"; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>

            <button type="submit" class="btn btn-primary"  name="submit1" value="1">Create</button>
        </div>
    </form>




</body>

</html>