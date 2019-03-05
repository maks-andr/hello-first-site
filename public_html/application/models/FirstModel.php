<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FirstModel extends CI_Model {
    
    function get_users() {
        $query = $this->db->get('Users');
        return $query->result_array();
    }
    
}
