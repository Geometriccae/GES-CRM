<?php
class Project_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    // Create a new project
    public function create_project($data) {
        return $this->db->insert('Project', $data);
    }

    // Retrieve a project by ID
    public function get_project($id) {
        return $this->db->get_where('Project', array('id' => $id))->row();
    }

    // Update an existing project
    public function update_project($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('Project', $data);
    }

    // Delete a project by ID
    public function delete_project($id) {
        return $this->db->delete('Project', array('id' => $id));
    }

    // Retrieve all projects
    public function get_all_projects() {
        return $this->db->get('Project')->result();
    }
    
}
