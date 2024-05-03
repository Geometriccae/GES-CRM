<?php
class Type_of_Activity_model extends CI_Model {

    public function get_activities() {
        $query = $this->db->get('Type_of_Activity');
        if ($query) {
            return $query->result();
        } else {
            // Handle the error, e.g., log it or return an empty array
            log_message('error', 'Database error: ' . $this->db->error()['message']);
            return array();
        }
    }

    public function insert_activity($data) {
        $this->db->insert('Type_of_Activity', $data);
        if ($this->db->affected_rows() > 0) {
            return $this->db->insert_id();
        } else {
            // Handle the error, e.g., log it or return an error code
            log_message('error', 'Insert error: ' . $this->db->error()['message']);
            return 0; // Or return an error code
        }
    }

    public function get_activity($id) {
        $query = $this->db->get_where('Type_of_Activity', array('id' => $id));
        if ($query) {
            return $query->row();
        } else {
            // Handle the error, e.g., log it or return null
            log_message('error', 'Database error: ' . $this->db->error()['message']);
            return null;
        }
    }

    public function update_activity($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('Type_of_Activity', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            // Handle the error, e.g., log it or return false
            log_message('error', 'Update error: ' . $this->db->error()['message']);
            return false;
        }
    }

    public function delete_activity($id) {
        $this->db->where('id', $id);
        $this->db->delete('Type_of_Activity');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            // Handle the error, e.g., log it or return false
            log_message('error', 'Delete error: ' . $this->db->error()['message']);
            return false;
        }
    }
    public function get_activity_types() {
        // Assuming you have a table named 'Type_of_Activity'
        $query = $this->db->get('Type_of_Activity');
        return $query->result();
    }
}
