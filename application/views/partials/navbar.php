<nav class="navbar navbar-light bg-light">
    <button class="btn btn-outline-success  ml-4" type="button">My Profile</button>
    <button class="btn  btn-outline-secondary ml-4" type="button">Time Table</button>
    <button class="btn  btn-outline-secondary ml-4 " type="button">Attendance</button>
    <button class="btn  btn-outline-secondary ml-4" type="button">Date Sheet</button>
    <button class="btn  btn-outline-secondary ml-4" type="button">Academics Detail</button>
    <button class="btn  btn-outline-secondary ml-4" type="button">Fee Detail</button>
    <button class="btn  btn-outline-secondary ml-4" type="submit" name="help">Help</button>

    <?php
    if ($this->session->role == 'admin'  ||  $this->session->role == 'teacher') {
    ?>
        <a class="btn  btn-outline-secondary ml-4" type="submit" name="register">Register Person</a>
    <?php
    }
    ?>

    <a class="btn  btn-outline-secondary ml-4" name="logout" href="?logout=true">Log Out</a>
</nav>

<?php

if (isset($_GET['logout'])) {
    session_destroy();
    redirect('login');
}

?>