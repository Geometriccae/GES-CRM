<?php
class ProjectController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Project_model');
    }

    public function index() {
        $data['projects'] = $this->Project_model->get_all_projects();
        $this->load->view('project/index', $data);
    }

    public function create() {
        if ($this->input->post()) {
            // Handle form submission to create a new project
            $data = array(
                'Project' => $this->input->post('Project')
            );
            $this->Project_model->create_project($data);
            redirect('ProjectController/index');
        } else {
            
            // Load the create project form
            $this->load->view('project/create');
        }
    }

    public function edit($id) {
        $data['project'] = $this->Project_model->get_project($id);
        $this->load->view('project/edit', $data);
    }

    public function update($id) {
        if ($this->input->post()) {
            // Handle form submission to update a project
            $data = array(
                'Project' => $this->input->post('Project')
            );
            $this->Project_model->update_project($id, $data);
            redirect('ProjectController/index');
        } else {
            // Load the edit project form
            $data['project'] = $this->Project_model->get_project($id);
            $this->load->view('project/edit', $data);
        }
    }

    public function delete($id) {
        $this->Project_model->delete_project($id);
        redirect('ProjectController/index');
    }
}
