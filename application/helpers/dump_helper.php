<?php
/**
 * CodeIgniter Dump Helpers
 *
 * @package CodeIgniter
 * @category Helpers
 * @author Youssef JLIDAT (jlidat@gmail.com)
 * @version 1.0
 */

if (!function_exists('dump')) {
    function dump ($var, $show = TRUE, $exit = FALSE) {

        // Add formatting
        echo '<pre>';
        var_dump($var);
        echo '</pre>';

        //exit ?
        if ($exit == TRUE) {
            exit;
        }
        die();
    }
}

/* End of file dump_helper.php */
/* Location: ./application/helpers/dump_helper.php */