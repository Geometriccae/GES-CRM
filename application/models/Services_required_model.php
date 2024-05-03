<?php
class Services_required_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    public function create_required($data) {
        return $this->db->insert('Services_Required', $data);
    }

    public function get_all_required() {
        return $this->db->get('Services_Required')->result();
    }

    public function get_required_by_id($id) {
        return $this->db->get_where('Services_Required', array('id' => $id))->row();
    }

    public function update_required($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('Services_Required', $data);
    }

    public function delete_required($id) {
        $this->db->where('id', $id);
        return $this->db->delete('Services_Required');
    }
    
}

?>