
	<?php
    if (!defined('BASEPATH')) exit('No direct script access allowed');

    if (!function_exists('demo')) {
        function demo($s)
        {
            // get main CodeIgniter object
            $ci = get_instance();
            var_dump($s);
            die();


            // Write your logic as per requirement

        }
    }
