<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conversion_rate extends CI_Controller {

    public function __construct() {
        parent::__construct();
     
        $this->load->model('Conversion_rate_model');
    
    }

    public function index() {
        $data['conversion_rates'] = $this->Conversion_rate_model->get_conversion_rates();
        $this->load->view('includes/header',$page_data);
        $this->load->view('deal/conversion_rate/index', $data);
        $this->load->view('includes/footer',$page_data);
    }

    public function create() {
        $this->load->view('includes/header',$page_data);
        $this->load->view('deal/conversion_rate/create');
        $this->load->view('includes/footer',$page_data);
    }

    public function store() {
        $rate = $this->input->post('rate');
        $this->Conversion_rate_model->create_conversion_rate($rate);
        redirect('conversion_rate');
    }

    public function edit($id) {
        $data['conversion_rate'] = $this->Conversion_rate_model->get_conversion_rate($id);
        $this->load->view('includes/header',$page_data);
        $this->load->view('deal/conversion_rate/edit', $data);
        $this->load->view('includes/footer',$page_data);
    }

    public function update($id) {
        $rate = $this->input->post('rate');
        $this->Conversion_rate_model->update_conversion_rate($id, $rate);
        redirect('conversion_rate');
    }

    public function delete($id) {
        $this->Conversion_rate_model->delete_conversion_rate($id);
        redirect('conversion_rate');
    }
}
