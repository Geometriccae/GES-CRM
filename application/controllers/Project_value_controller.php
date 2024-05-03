<?php
class Project_value_controller extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Project_value_model'); // Load the model
    }

    public function index() {
        $data['project_values'] = $this->Project_value_model->get_project_values();
        $this->load->view('includes/header',$page_data);
        $this->load->view('deal/project_value_list', $data);
        $this->load->view('includes/footer',$page_data);
    }

    public function create() {
        $this->load->library('form_validation');
    
        $this->form_validation->set_rules('amount', 'Amount', 'required|numeric');
    
        if ($this->form_validation->run() === FALSE) {
            // Validation failed, reload the create view with validation errors
            $this->load->view('deal/create_project_value');
        } else {
            $data = array(
                'amount' => $this->input->post('amount')
            );
    
            $this->Project_value_model->create_project_value($data);
    
            // Redirect with a success message
            $this->session->set_flashdata('success_message', 'Project value created successfully.');
            redirect('project_value_controller');
        }
    }
    

    public function edit($id) {
        $data['project_value'] = $this->Project_value_model->get_project_value($id);
        $this->load->view('includes/header',$page_data);
        $this->load->view('deal/edit_project_value', $data);
        $this->load->view('includes/footer',$page_data);
    }

    public function update($id) {
        $data = array(
            'amount' => $this->input->post('amount')
        );

        $this->Project_value_model->update_project_value($id, $data);
        redirect('project_value_controller');
    }

    public function delete($id) {
        $this->Project_value_model->delete_project_value($id);
        redirect('project_value_controller');
    }
}

?>