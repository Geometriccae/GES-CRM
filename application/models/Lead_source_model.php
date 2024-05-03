<?php
class Lead_source_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Create a new lead source
    public function create_lead_source($data) {
        return $this->db->insert('lead_source', $data);
    }

    // Read all lead sources
    public function get_all_lead_sources() {
        return $this->db->get('lead_source')->result();
    }

    // Read a specific lead source by source_id
    public function get_lead_source_by_id($source_id) {
        return $this->db->get_where('lead_source', array('source_id' => $source_id))->row();
    }

    // Update a lead source
    public function update_lead_source($source_id, $data) {
        $this->db->where('source_id', $source_id);
        return $this->db->update('lead_source', $data);
    }

    // Delete a lead source
    public function delete_lead_source($source_id) {
        return $this->db->delete('lead_source', array('source_id' => $source_id));
    }
    public function get_lead_sources() {
        // Assuming you have a table named 'lead_sources' in your database
        // and it has a column 'source_name' that stores the lead source names.
        $query = $this->db->select('source_name')
                          ->from('lead_sources')
                          ->get();

        if ($query->num_rows() > 0) {
            return $query->result(); // Return an array of lead sources.
        } else {
            return array(); // Return an empty array if no lead sources found.
        }
    }
}
?>
