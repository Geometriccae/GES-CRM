<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stage_model extends CI_Model {

    public function get_stages() {
        return $this->db->get('Stage')->result();
    }

    public function create_stage($stage) {
        $data = array('stage' => $stage);
        $this->db->insert('Stage', $data);
    }

    public function get_stage($id) {
        return $this->db->get_where('Stage', array('id' => $id))->row();
    }

    public function update_stage($id, $stage) {
        $data = array('stage' => $stage);
        $this->db->where('id', $id);
        $this->db->update('Stage', $data);
    }

    public function delete_stage($id) {
        $this->db->where('id', $id);
        $this->db->delete('Stage');
    }
    
}
