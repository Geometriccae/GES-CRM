<?php
// application/controllers/Services_required.php

class Services_required extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('services_required_model');
        $this->load->helper('url');
    }

    public function index() {
        $data['services'] = $this->services_required_model->get_all_services();
        $this->load->view('includes/header',$page_data);
        $this->load->view('deal/services_required/index', $data);
        $this->load->view('includes/footer', $page_data);
    }

    public function create() {
        if ($this->input->post()) {
            $data = array(
                'service_name' => $this->input->post('service_name')
            );
            $this->services_required_model->insert_service($data);
            redirect('services_required');
        } $this->load->view('includes/header',$page_data);
        $this->load->view('deal/services_required/create');
        $this->load->view('includes/footer', $page_data);
    }

    public function edit($id) {
        $data['service'] = $this->services_required_model->get_service($id);
        $this->load->view('includes/header',$page_data);
        $this->load->view('deal/services_required/edit', $data);
        $this->load->view('includes/footer', $page_data);
    }

    public function update($id) {
        $data = array(
            'service_name' => $this->input->post('service_name')
        );

        $this->services_required_model->update_service($id, $data);
        redirect('services_required');
    }

    public function delete($id) {
        $this->services_required_model->delete_service($id);
        redirect('services_required');
    }
}
