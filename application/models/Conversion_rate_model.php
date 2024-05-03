<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conversion_rate_model extends CI_Model {

    public function get_conversion_rates() {
        return $this->db->get('Conversion_rate')->result();
    }

    public function create_conversion_rate($rate) {
        $data = array('rate' => $rate);
        $this->db->insert('Conversion_rate', $data);
    }

    public function get_conversion_rate($id) {
        return $this->db->get_where('Conversion_rate', array('id' => $id))->row();
    }

    public function update_conversion_rate($id, $rate) {
        $data = array('rate' => $rate);
        $this->db->where('id', $id);
        $this->db->update('Conversion_rate', $data);
    }

    public function delete_conversion_rate($id) {
        $this->db->where('id', $id);
        $this->db->delete('Conversion_rate');
    }
}
