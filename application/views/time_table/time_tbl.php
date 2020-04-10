<div class="container mt-5 " style="width: 30%">

    <form class="form" method="POST" action="time-table/create-time">
        <div class="form-group">
            <label for="Degree">Select Degree </label>
            <select name="Degree" class="form-control">
                <option value="bachelor" selected>bachelor degree</option>
                <option value="associate">associate degree </option>
            </select>

        </div>
        <div class="form-group">
            <label for="Department">Select Department </label>
            <select name="Department" class="form-control">
                <option selected value="cs">Computer Science</option>
                <option value="maths">Maths</option>
                <option value="physics">Physics</option>
                <option value="english">English</option>
                <option value="BBA">BBA</option>
            </select>

        </div>
        <div class="form-group">
            <label for="Semester">Select Semester </label>
            <select name="Semester" class="form-control">
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

        <button type="submit" name="submit" value="1" class=" btn fa fa-chevron-circle-right pull-right" aria-hidden="true" style="font-size: 30px"></button>

        <form>
</div>

<?php
