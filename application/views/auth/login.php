<!-- load html head section i.e css, js and meta -->
<?php $this->load->view("partials/head"); ?>

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


<div class=" flex-container ">
    <form class="box" style="border: 2px solid none; padding:25px 25px 25px; width: 30%" method="post" action="">
        <h3 style="text-align: center" class="mb-4">Sign In</h3>
        <div class="form-group">
            <label for="Email">Email</label>
            <input type="email" class="form-control" name="Email" id="Email" placeholder="Email">
            <?php echo form_error("Email", "<div class='error' >", "</div>"); ?>
        </div>
        <div class="form-group">
            <label for="Password">Password</label>
            <input type="password" class="form-control" name="Password" id="password" placeholder="Password">
            <?php echo form_error("Password", "<div class='error' >", "</div>"); ?>
        </div>
        <div class="checkbox">
            <label><input type="checkbox" value="" name="remember">Remember Me</label>
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
    </form>

</div>

<!-- load html foot section which may also include javascript -->
<!-- <?php $this->load->view("partials/foot"); ?> -->

<footer class="page-footer font-small  fixed-bottom ">
    <div class="footer-copyright text-center py-3  p-3  bg-secondary text-white>© 2020 Copyright:
    <a href="" style=" color: white"> xyz</a>
    </div>
</footer>
<?php

if (isset($_COOKIE['email']) && isset($_COOKIE['password'])) {
    $email = $_COOKIE['email'];
    $password = $_COOKIE['password'];
    // var_dump($email);
    // die();
    echo "

    <script>
       var a= document.getElementById('Email').val = $email;
        console.log(a);
        document.getElementById('password').val = $password;
    </script>
    ";
}
?>
</body>

</html>
<?php
