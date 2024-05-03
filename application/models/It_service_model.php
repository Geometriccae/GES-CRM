<?php
class It_service_model extends CI_Model {
    public function get_services() {
        return $this->db->get('it_services')->result();
    }

    public function insert_service($data) {
        $this->db->insert('it_services', $data);
    }
    public function update_service($id, $data) {
        $this->db->set($data); // Set the data to update
        $this->db->where('it_services_id', $id); // Specify the condition
        $this->db->update('it_services'); // Perform the update
        return $this->db->affected_rows(); // Check the number of affected rows after the update
    }
    
    
    public function get_service_by_id($id) {
        $query = $this->db->get_where('it_services', array('it_services_id' => $id));
        return $query->row();
    }

    public function delete_service($id) {
        $this->db->delete('it_services', array('it_services_id' => $id));
    }
    public function getDealWonCount() {
        $this->db->select('COUNT(*) as deal_won_count');
        $this->db->from('it_services');
        $this->db->where('Stage', 'Deal Won');

        $query = $this->db->get();
        $result = $query->row();

        return $result->deal_won_count;
    }
}
