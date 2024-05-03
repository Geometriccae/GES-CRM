<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Campaign_source_model extends CI_Model {

    public function get_campaign_sources() {
        return $this->db->get('Campaign_Source')->result();
    }

    public function create_campaign_source($source_name) {
        $data = array('source_name' => $source_name);
        $this->db->insert('Campaign_Source', $data);
    }

    public function get_campaign_source($id) {
        return $this->db->get_where('Campaign_Source', array('id' => $id))->row();
    }

    public function update_campaign_source($id, $source_name) {
        $data = array('source_name' => $source_name);
        $this->db->where('id', $id);
        $this->db->update('Campaign_Source', $data);
    }

    public function delete_campaign_source($id) {
        $this->db->where('id', $id);
        $this->db->delete('Campaign_Source');
    }
}
