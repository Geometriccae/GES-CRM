<?php
class User_admin_model extends CI_Model {

    public function authenticate($username, $password) {
        $query = $this->db->get_where('admin_user', array('username' => $username, 'password' => sha1($password)));

        if ($query->num_rows() == 1) {
            return $query->row_array();
        } else {
            return false;
        }
    }
}
