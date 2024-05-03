<?php
class Next_step_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    public function create_next_step($data) {
        return $this->db->insert('Next_Step', $data);
    }

    public function get_all_next_steps() {
        return $this->db->get('Next_Step')->result();
    }

    public function get_next_step_by_id($id) {
        return $this->db->get_where('Next_Step', array('id' => $id))->row();
    }

    public function update_next_step($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('Next_Step', $data);
    }

    public function delete_next_step($id) {
        $this->db->where('id', $id);
        return $this->db->delete('Next_Step');
    }
    
    public function get_next_step_options() {
        $query = $this->db->get('Next_Step');
        return $query->result();
    }
}

?>