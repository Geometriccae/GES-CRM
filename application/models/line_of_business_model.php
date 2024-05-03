<?php
class Line_of_business_model extends CI_Model {

    public function get_all_lines_of_business() {
        $query = $this->db->get('line_of_business');
        return $query->result();
    }

    public function get_line_of_business($id) {
        $query = $this->db->get_where('line_of_business', array('id' => $id));
        return $query->row();
    }
  

    public function create_line_of_business($data) {
        $this->db->insert('line_of_business', $data);
        return $this->db->insert_id();
    }

    public function update_line_of_business($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('line_of_business', $data);
        return true;
    }

    public function delete_line_of_business($id) {
        $this->db->delete('line_of_business', array('id' => $id));
        return true;
    }
}
?>
