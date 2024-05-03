<?php
// application/controllers/Project_category.php

class Project_category extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('project_category_model');
    }

    public function index() {
        $data['categories'] = $this->project_category_model->get_all();
        $this->load->view('deal/project_category/index', $data);
    }

    public function create() {
        $this->load->view('deal/project_category/create');
    }

    public function store() {
        $data = array(
            'Project_Category_name' => $this->input->post('project_category_name')
        );

        $this->project_category_model->create($data);
        redirect('project_category');
    }
    public function edit($id) {
        $data['category'] = $this->project_category_model->get_category($id);
        $this->load->view('deal/project_category/edit', $data);
    }

    public function update($id) {
        $data = array(
            'Project_Category_name' => $this->input->post('project_category_name')
        );

        $this->project_category_model->update_category($id, $data);
        redirect('project_category');
    }
    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('Project_Category');
        redirect('project_category');
        // You might want to add some error handling or success messages here
    }
    // Add other CRUD methods like edit, update, delete
}
