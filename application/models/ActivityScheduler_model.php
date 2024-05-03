<?php
class ActivityScheduler_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function create_activity($data) {
        $this->db->insert('ActivityScheduler', $data);
        return $this->db->insert_id();
    }

    public function get_activities() {
        $query = $this->db->get('ActivityScheduler');
        return $query->result();
    }

    public function get_activity($id) {
        $query = $this->db->get_where('ActivityScheduler', array('id' => $id));
        return $query->row();
    }
    public function get_activityy($id) {
        $query = $this->db->get_where('ActivityScheduler', array('id' => $id));
        return $query->row();
    }
    public function update_activity($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('ActivityScheduler', $data);
    }

    public function delete_activity($id) {
        $this->db->delete('ActivityScheduler', array('id' => $id));
    }
    // application/models/Activity_model.php



   
    public function get_activity_by_id($activity_id) {
        // Implement your logic to retrieve an activity by ID from the database here
        // Example query:
        $query = $this->db->get_where('activities', array('id' => $activity_id)); // 'activities' should be your database table name
        return $query->row(); // Return the single activity
    }


}
