<?php
class Courses_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function get_all_courses() {
        return $this->db->get('Courses_Required')->result_array();
    }
    
    public function create_course($data) {
        return $this->db->insert('Courses_Required', $data);
    }

    public function get_course_by_id($id) {
        return $this->db->get_where('Courses_Required', array('id' => $id))->row_array();
    }

    public function update_course($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('Courses_Required', $data);
    }

    public function delete_course($id) {
        return $this->db->delete('Courses_Required', array('id' => $id));
    }
}
?>
