<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Type_of_Activity extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Type_of_Activity_model');
    }

    public function index() {
        $data['activities'] = $this->Type_of_Activity_model->get_activities();
        $this->load->view('typeofactivity/index', $data);
    }

    public function create() {
        if ($this->input->post()) {
            // Handle form submission to create a new activity
            $data = array(
                'Type_of_Activity' => $this->input->post('Type_of_Activity')
            );
            $this->Type_of_Activity_model->insert_activity($data);
            redirect('Type_of_Activity/index');
        } else {
            // Display the create form
            $this->load->view('typeofactivity/create');
        }
    }

 

    public function update($id) {
        if ($this->input->post()) {
            // Handle form submission to update an activity
            $data = array(
                'Type_of_Activity' => $this->input->post('Type_of_Activity')
            );
            $this->Type_of_Activity_model->update_activity($id, $data);
            redirect('Type_of_Activity/index');
        } else {
            // Display the edit form
            $data['activity'] = $this->Type_of_Activity_model->get_activity($id);
            $this->load->view('typeofactivity/edit', $data);
        }
    }

    public function delete($id) {
        $this->Type_of_Activity_model->delete_activity($id);
        redirect('Type_of_Activity/index');
    }
}
