<?php
// application/models/Project_category_model.php

class Project_category_model extends CI_Model {

    public function create($data) {
        $this->db->insert('Project_Category', $data);
        return $this->db->insert_id();
    }

    public function get_all() {
        return $this->db->get('Project_Category')->result();
    }

    public function get_by_id($id) {
        return $this->db->get_where('Project_Category', array('id' => $id))->row();
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('Project_Category', $data);
    }

    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('Project_Category');
    }
    public function get_category($id) {
        return $this->db->get_where('Project_Category', array('id' => $id))->row();
    }

    public function update_category($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('Project_Category', $data);
    }
    public function get_all_project_categories() {
        // Retrieve all project categories from the project_category table
        return $this->db->get('project_category')->result();
    }
}
