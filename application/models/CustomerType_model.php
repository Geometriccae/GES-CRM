<?php
class CustomerType_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    // Function to create a new customer type
    public function create_customer_type($data)
    {
        return $this->db->insert('CustomerType', $data);
    }

    // Function to get all customer types
    public function get_all_customer_types()
    {
        return $this->db->get('CustomerType')->result();
    }

    // Function to get a specific customer type by ID
    public function get_customer_type_by_id($id)
    {
        return $this->db->where('id', $id)->get('CustomerType')->row();
    }

    // Function to update a customer type
    public function update_customer_type($id, $data)
    {
        return $this->db->where('id', $id)->update('CustomerType', $data);
    }

    // Function to delete a customer type by ID
    public function delete_customer_type($id)
    {
        return $this->db->where('id', $id)->delete('CustomerType');
    }
    public function get_customer_types() {
        $query = $this->db->get('CustomerType');
        return $query->result();
    }
}
?>
