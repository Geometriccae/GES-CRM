<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lead_status_model extends CI_Model {

    public function insert_lead_status($status_name) {
        // Function to insert a new lead status into the 'lead_status' table.
        $data = array(
            'status_name' => $status_name
        );
        $this->db->insert('lead_status', $data);
    }

    public function update_lead_status($status_id, $status_name) {
        // Function to update an existing lead status in the 'lead_status' table.
        $data = array(
            'status_name' => $status_name
        );
        $this->db->where('status_id', $status_id);
        $this->db->update('lead_status', $data);
    }

    public function get_lead_status_by_id($status_id) {
        // Function to get lead status data by status_id from the 'lead_status' table.
        $query = $this->db->get_where('lead_status', array('status_id' => $status_id));
        return $query->row_array();
    }

    public function get_all_lead_statuses() {
        // Function to get all lead statuses from the 'lead_status' table.
        $query = $this->db->get('lead_status');
        return $query->result_array();
    }

    public function delete_lead_status($status_id) {
        // Function to delete a lead status from the 'lead_status' table.
        $this->db->where('status_id', $status_id);
        $this->db->delete('lead_status');
    }
    public function get_lead_status() {
        // Assuming you have a table named 'lead_status' in your database
        // and it has a column 'status_name' that stores the lead status names.
        $query = $this->db->select('status_name')
                          ->from('lead_status')
                          ->get();
    
        if ($query->num_rows() > 0) {
            return $query->result(); // Return an array of lead statuses.
        } else {
            return array(); // Return an empty array if no lead statuses found.
        }
    }
    
}
