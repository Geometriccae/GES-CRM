<?php
class ActivityModel extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    // Create a new activity
    public function create_activity($data) {
        try {
            $this->db->insert('activityscheduler', $data);
            return $this->db->insert_id(); // Return the ID of the newly created activity
        } catch (Exception $e) {
            log_message('error', 'Error creating activity: ' . $e->getMessage());
            return false;
        }
    }

    // Read activities

    // Update an existing activity
    public function update_activity($data, $activity_id) {
        try {
            $this->db->where('ActivityID', $activity_id);
            $this->db->update('activityscheduler', $data);
            return true;
        } catch (Exception $e) {
            log_message('error', 'Error updating activity: ' . $e->getMessage());
            return false;
        }
    }

    // Delete an activity
    public function delete_activity($activity_id) {
        try {
            $this->db->where('ActivityID', $activity_id);
            $this->db->delete('activityscheduler');
            return true;
        } catch (Exception $e) {
            log_message('error', 'Error deleting activity: ' . $e->getMessage());
            return false;
        }
    }
    public function getActivitiesByAssignedTo($admin_full_name) {
        $this->db->select('ActivityID, TypeOfActivity, Project, Priority, Status, StartDate, EndDate, Description, Links');
        $this->db->where('AssignedTo', $admin_full_name);
        $this->db->order_by('ActivityID', 'DESC'); // Order by ActivityID in descending order (latest first)
        $query = $this->db->get('activityscheduler');
        return $query->result();
    }
    
    // Update the get_activities method
public function get_activities() {
    try {
        $this->db->select('ActivityID, TypeOfActivity, Project, AssignedTo, Priority, Status, StartDate, EndDate, Description, Links');
        $query = $this->db->get('activityscheduler');
        return $query->result();
    } catch (Exception $e) {
        log_message('error', 'Error fetching activities: ' . $e->getMessage());
        return false;
    }
}

// Update the get_activity method
public function get_activity($activity_id) {
    try {
        $this->db->select('ActivityID, TypeOfActivity, Project, AssignedTo, Priority, Status, StartDate, EndDate, Description, Links');
        $this->db->where('ActivityID', $activity_id);
        $query = $this->db->get('activityscheduler');
        return $query->row();
    } catch (Exception $e) {
        log_message('error', 'Error fetching activity by ID: ' . $e->getMessage());
        return false;
    }
}

}

?>
