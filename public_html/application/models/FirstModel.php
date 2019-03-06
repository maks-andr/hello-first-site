<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FirstModel extends CI_Model {

    function get_register_form() {
        return include('forms/form_login.php');
    }

}
