<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IT_Trainings_model extends CI_Model {

    public function getTrainings() {
        return $this->db->get('IT_Trainings')->result_array();
    }

    public function createTraining($data) {
        $this->db->insert('IT_Trainings', $data);
    }

    public function getTraining($id) {
        return $this->db->get_where('IT_Trainings', ['id' => $id])->row_array();
    }

   
    public function updateTraining($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('IT_Trainings', $data);
    }
 
    
    public function deleteTraining($id) {
        $this->db->where('id', $id);
        $this->db->delete('IT_Trainings');
    }
    public function getTrainingById($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('IT_Trainings');
        return $query->row_array(); // Return a single row as an associative array
    }
}
