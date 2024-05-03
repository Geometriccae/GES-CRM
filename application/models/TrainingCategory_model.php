<?php
class TrainingCategory_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }

    // Create a new TrainingCategory
    public function create($data) {
        $this->db->insert('TrainingCategory', $data);
        return $this->db->insert_id();
    }

    // Read all TrainingCategories
    public function read() {
        return $this->db->get('TrainingCategory')->result_array();
    }

    // Read a single TrainingCategory by ID
    public function read_single($id) {
        return $this->db->get_where('TrainingCategory', array('id' => $id))->row_array();
    }

    // Update a TrainingCategory
    public function update($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('TrainingCategory', $data);
    }
    public function getTrainingCategories() {
        return $this->db->get('TrainingCategory')->result();
    }

    // Delete a TrainingCategory
    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('TrainingCategory');
    }
}
?>
