<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stages extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Stage_model');
    }

    public function index() {
        $data['stages'] = $this->Stage_model->get_stages();
        $this->load->view('includes/header',$page_data);
        $this->load->view('deal/stages/index', $data);
        $this->load->view('includes/footer',$page_data);
    }

    public function create() {
        $this->load->view('includes/header',$page_data);
        $this->load->view('deal/stages/create');
        $this->load->view('includes/footer',$page_data);
    }

    public function store() {
        $stage = $this->input->post('stage');
        $this->Stage_model->create_stage($stage);
        redirect('stages');
    }

    public function edit($id) {
        $data['stage'] = $this->Stage_model->get_stage($id);
        $this->load->view('includes/header',$page_data);
        $this->load->view('deal/stages/edit', $data);
        $this->load->view('includes/footer',$page_data);
    }

    public function update($id) {
        $stage = $this->input->post('stage');
        $this->Stage_model->update_stage($id, $stage);
        redirect('stages');
    }

    public function delete($id) {
        $this->Stage_model->delete_stage($id);
        redirect('stages');
    }
}
