<?php
class Project_value_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_project_values() {
        return $this->db->get('Project_Value')->result();
    }

    public function create_project_value($data) {
        return $this->db->insert('Project_Value', $data);
    }

    public function get_project_value($id) {
        return $this->db->get_where('Project_Value', array('id' => $id))->row();
    }

    public function update_project_value($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('Project_Value', $data);
    }

    public function delete_project_value($id) {
        return $this->db->delete('Project_Value', array('id' => $id));
    }
   
}
?>