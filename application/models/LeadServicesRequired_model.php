<?php
class LeadServicesRequired_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    public function get_all_services_required() {
        return $this->db->get('LeadServicesRequired')->result();
    }

    public function create_service_required($data) {
        $this->db->insert('LeadServicesRequired', $data);
    }

    public function get_service_required_by_id($id) {
        return $this->db->get_where('LeadServicesRequired', array('id' => $id))->row();
    }

    public function update_service_required($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('LeadServicesRequired', $data);
    }

    public function delete_service_required($id) {
        $this->db->where('id', $id);
        $this->db->delete('LeadServicesRequired');
    }
    
}
?>
