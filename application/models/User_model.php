<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
    public function getUsers() {
        // Assuming your table is named "users" and has columns "full_name" and "type"
        $query = $this->db
            ->select('full_name')
            ->where('type', 'user') // Filter by the 'type' column
            ->get('users');

        return $query->result_array();
    }
}
