<?php
class Deal_it_service extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('It_service_model'); 
        $this->load->model('Project_Category_model');// Load the model
        $this->load->model('Services_required_model');
        $this->load->model('Next_step_model'); 
        $this->load->model('Project_value_model');
        $this->load->model('Stage_model');
        $this->load->model('Conversion_rate_model');
        $this->load->model('Campaign_source_model');
        $this->load->model('User_model');
        $this->load->model('Lead_model');

    }

    public function index() {
      
        $data['services'] = $this->It_service_model->get_services();
        $this->load->view('deal/services_list', $data); // Create a view to display the list
    }

   public function create() {
    $data = array();

    if ($this->input->post()) {
        // Form validation
        $this->load->library('form_validation');
        $this->form_validation->set_rules('Contact_Name', 'Contact Name', 'required');
        $this->form_validation->set_rules('Project_Category', 'Project Category', 'required');
        // Add more validation rules as needed

        if ($this->form_validation->run() === TRUE) {
            // Form data is valid, proceed to insert into the database
            $this->It_service_model->insert_service($this->input->post());
            redirect('deal_it_service');
        } else {
            // Validation failed, display error messages
            $data['validation_errors'] = validation_errors();
        }
    }

    // Load necessary data
    $data['contact_names'] = $this->Lead_model->get_contact_names();
    $data['categories'] = $this->Project_Category_model->get_categories();
    $data['required_list'] = $this->Services_required_model->get_all_required();
    $data['next_step_options'] = $this->Next_step_model->get_next_step_options();
    $data['project_values'] = $this->Project_value_model->get_project_values();
    $data['stages'] = $this->Stage_model->get_stages();
    $data['conversion_rates'] = $this->Conversion_rate_model->get_conversion_rates();
    $data['campaign_sources'] = $this->Campaign_source_model->get_campaign_sources();

    $this->load->view('deal/create_form', $data);
}



public function edit($id) {
    $data = array();
    
    $data['contact_names'] = $this->Lead_model->get_contact_names();
    $data['categories'] = $this->Project_Category_model->get_categories();
    $data['required_list'] = $this->Services_required_model->get_all_required();
    $data['next_step_options'] = $this->Next_step_model->get_next_step_options();
    $data['project_values'] = $this->Project_value_model->get_project_values();
    $data['stages'] = $this->Stage_model->get_stages();
    $data['conversion_rates'] = $this->Conversion_rate_model->get_conversion_rates();
    $data['campaign_sources'] = $this->Campaign_source_model->get_campaign_sources();
   
    // Load other necessary data
    
    // Retrieve the data of the selected record to edit
    $data['service'] = $this->It_service_model->get_service_by_id($id);

    // Load the edit form view
    $this->load->view('deal/edit_form', $data);
}

public function update() {
    $data = array();

    if ($this->input->post()) {
        // Form validation
        $this->load->library('form_validation');
        $this->form_validation->set_rules('Contact_Name', 'Contact Name', 'required');
        $this->form_validation->set_rules('Project_Category', 'Project Category', 'required');
        // Add more validation rules as needed

        if ($this->form_validation->run() === TRUE) {
            // Form data is valid, proceed to update the record in the database
            $updated_data = array(
                'Contact_Name' => $this->input->post('Contact_Name'),
                'Project_Category' => $this->input->post('Project_Category'),
                'Services_Required' => $this->input->post('Services_Required'),
                'Company_Name' => $this->input->post('Company_Name'),
                'Type_Of_Business' => $this->input->post('Type_Of_Business'),
                'Next_Step' => $this->input->post('Next_Step'),
                'Contact_Number' => $this->input->post('Contact_Number'),
                'Project_Value' => $this->input->post('Project_Value'),
                'Closing_Date' => $this->input->post('Closing_Date'),
                'Stage' => $this->input->post('Stage'),
                'Conversion_Rate' => $this->input->post('Conversion_Rate'),
                'Campaign_Source' => $this->input->post('Campaign_Source')
            );

            $it_services_id = $this->input->post('it_services_id');
            $this->It_service_model->update_service($it_services_id, $updated_data);

            redirect('deal_it_service');
        } else {
            // Validation failed, display error messages
            $data['validation_errors'] = validation_errors();
        }
    }

    // Load necessary data
    $data['contact_names'] = $this->Lead_model->get_contact_names();
    // Load other necessary data

    // Load the edit form view
    $this->load->view('deal/edit_form', $data);
}

    public function delete($id) {
        $this->It_service_model->delete_service($id);
        redirect('deal_it_service');
    }
    public function user_index() {
      
        $data['services'] = $this->It_service_model->get_services();
        $this->load->view('deal/user_services_list', $data); // Create a view to display the list
    }
    public function user_create() {
        $data = array();
    
        if ($this->input->post()) {
            // Form validation
            $this->load->library('form_validation');
            $this->form_validation->set_rules('Contact_Name', 'Contact Name', 'required');
            $this->form_validation->set_rules('Project_Category', 'Project Category', 'required');
            // Add more validation rules as needed
    
            if ($this->form_validation->run() === TRUE) {
                // Form data is valid, proceed to insert into the database
                $this->It_service_model->insert_service($this->input->post());
                redirect('deal_it_service/user_index');
            } else {
                // Validation failed, display error messages
                $data['validation_errors'] = validation_errors();
            }
        }
    
        // Load necessary data
        $data['contact_names'] = $this->Lead_model->get_contact_names();
        $data['categories'] = $this->Project_Category_model->get_categories();
        $data['required_list'] = $this->Services_required_model->get_all_required();
        $data['next_step_options'] = $this->Next_step_model->get_next_step_options();
        $data['project_values'] = $this->Project_value_model->get_project_values();
        $data['stages'] = $this->Stage_model->get_stages();
        $data['conversion_rates'] = $this->Conversion_rate_model->get_conversion_rates();
        $data['campaign_sources'] = $this->Campaign_source_model->get_campaign_sources();
    
        $this->load->view('deal/user_create_form', $data);
    }
    public function user_delete($id) {
        $this->It_service_model->delete_service($id);
        redirect('deal_it_service/user_index');
    }
    

public function user_edit($id) {
    $data = array();
    
    $data['contact_names'] = $this->Lead_model->get_contact_names();
    $data['categories'] = $this->Project_Category_model->get_categories();
    $data['required_list'] = $this->Services_required_model->get_all_required();
    $data['next_step_options'] = $this->Next_step_model->get_next_step_options();
    $data['project_values'] = $this->Project_value_model->get_project_values();
    $data['stages'] = $this->Stage_model->get_stages();
    $data['conversion_rates'] = $this->Conversion_rate_model->get_conversion_rates();
    $data['campaign_sources'] = $this->Campaign_source_model->get_campaign_sources();
   
    // Load other necessary data
    
    // Retrieve the data of the selected record to edit
    $data['service'] = $this->It_service_model->get_service_by_id($id);

    // Load the edit form view
    $this->load->view('deal/user_edit_form', $data);
}

public function user_update() {
    $data = array();

    if ($this->input->post()) {
        // Form validation
        $this->load->library('form_validation');
        $this->form_validation->set_rules('Contact_Name', 'Contact Name', 'required');
        $this->form_validation->set_rules('Project_Category', 'Project Category', 'required');
        // Add more validation rules as needed

        if ($this->form_validation->run() === TRUE) {
            // Form data is valid, proceed to update the record in the database
            $updated_data = array(
                'Contact_Name' => $this->input->post('Contact_Name'),
                'Project_Category' => $this->input->post('Project_Category'),
                'Services_Required' => $this->input->post('Services_Required'),
                'Company_Name' => $this->input->post('Company_Name'),
                'Type_Of_Business' => $this->input->post('Type_Of_Business'),
                'Next_Step' => $this->input->post('Next_Step'),
                'Contact_Number' => $this->input->post('Contact_Number'),
                'Project_Value' => $this->input->post('Project_Value'),
                'Closing_Date' => $this->input->post('Closing_Date'),
                'Stage' => $this->input->post('Stage'),
                'Conversion_Rate' => $this->input->post('Conversion_Rate'),
                'Campaign_Source' => $this->input->post('Campaign_Source')
            );

            $it_services_id = $this->input->post('it_services_id');
            $this->It_service_model->update_service($it_services_id, $updated_data);

            redirect('deal_it_service/user_index');
        } else {
            // Validation failed, display error messages
            $data['validation_errors'] = validation_errors();
        }
    }

    // Load necessary data
    $data['contact_names'] = $this->Lead_model->get_contact_names();
    // Load other necessary data

    // Load the edit form view
    $this->load->view('deal/user_edit_form', $data);
}

}
?>