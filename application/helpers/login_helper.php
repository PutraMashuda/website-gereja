<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * This helper for checking
 * user is logged in or not
 */
if (!function_exists('isLoggedIn')) {
    function IsLoggedIn()
    {
        $CI = &get_instance();
        $isLoggedIn = $CI->session->userdata('isLoggedIn');
        if (!isset($isLoggedIn) || $isLoggedIn != true) {
            return false;
        } else {
            return true;
        }
    }
}