<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Campaign_source extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Campaign_source_model');
    }

    public function index() {
        $data['campaign_sources'] = $this->Campaign_source_model->get_campaign_sources();
        $this->load->view('deal/campaign_source/index', $data);
    }

    public function create() {
        $this->load->view('deal/campaign_source/create');
    }

    public function store() {
        $source_name = $this->input->post('source_name');
        $this->Campaign_source_model->create_campaign_source($source_name);
        redirect('campaign_source');
    }

    public function edit($id) {
        $data['campaign_source'] = $this->Campaign_source_model->get_campaign_source($id);
        $this->load->view('deal/campaign_source/edit', $data);
    }

    public function update($id) {
        $source_name = $this->input->post('source_name');
        $this->Campaign_source_model->update_campaign_source($id, $source_name);
        redirect('campaign_source');
    }

    public function delete($id) {
        $this->Campaign_source_model->delete_campaign_source($id);
        redirect('campaign_source');
    }
}
