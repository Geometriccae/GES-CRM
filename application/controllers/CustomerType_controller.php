<?php
// application/controllers/CustomerType_controller.php

class CustomerType_controller extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('CustomerType_model');

    }

    public function index() {
        // Load all CustomerTypes and display them
        $data['customer_types'] = $this->CustomerType_model->get_all_customer_types();
        // Load your view to display the list of customer types
        $this->load->view('includes/header', $page_data);
        $this->load->view('deal/customer_type/index', $data);
        $this->load->view('includes/footer', $page_data);
    }

    public function create() {
        if ($this->input->post()) {
            $customer_type_data = array(
                'CustomerType' => $this->input->post('customer_type')
            );

            if ($this->CustomerType_model->create_customer_type($customer_type_data)) {
                redirect('CustomerType_controller/index');
            } else {
                // Handle error and display a relevant error view
                $this->load->view('includes/header', $page_data);
                $this->load->view('customer_type/create_customer_type_error');
                $this->load->view('includes/footer', $page_data);
            }
        } else {
            // Load views for creating a new customer type
            $this->load->view('includes/header', $page_data);
            $this->load->view('deal/customer_type/create_customer_type');
            $this->load->view('includes/footer', $page_data);
        }
    }

    public function edit($id) {
        $data['customer_type'] = $this->CustomerType_model->get_customer_type_by_id($id);
        // Load your view to edit the customer type
        $this->load->view('includes/header', $page_data);
        $this->load->view('deal/customer_type/edit_customer_type', $data);
        $this->load->view('includes/footer', $page_data);
    }

    public function update($id) {
        if ($this->input->post()) {
            $customer_type_data = array(
                'CustomerType' => $this->input->post('customer_type')
            );

            if ($this->CustomerType_model->update_customer_type($id, $customer_type_data)) {
                redirect('CustomerType_controller/index');
            } else {
                // Handle error and display a relevant error view
                $this->load->view('includes/header', $page_data);
                $this->load->view('customer_type/update_customer_type_error');
                $this->load->view('includes/footer', $page_data);
            }
        } else {
            // Load views for updating a customer type
            $this->load->view('includes/header', $page_data);
            $this->load->view('customer_type/update_customer_type', $data);
            $this->load->view('includes/footer', $page_data);
        }
    }

    public function delete($id) {
        if ($this->CustomerType_model->delete_customer_type($id)) {
            redirect('CustomerType_controller/index');
        } else {
            // Handle error and display a relevant error view
            $this->load->view('includes/header', $page_data);
            $this->load->view('customer_type/delete_customer_type_error');
            $this->load->view('includes/footer', $page_data);
        }
    }
}
?>
