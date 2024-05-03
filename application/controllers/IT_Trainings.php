<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IT_Trainings extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('IT_Trainings_model');
        $this->load->model('It_service_model'); 
        $this->load->model('Project_Category_model');// Load the model
        $this->load->model('Services_required_model');
        $this->load->model('Next_step_model'); 
        $this->load->model('Project_value_model');
        $this->load->model('Stage_model');
        $this->load->model('Conversion_rate_model');
        $this->load->model('Campaign_source_model');
        $this->load->model('Courses_model');
    }

    public function index() {
        $data['trainings'] = $this->IT_Trainings_model->getTrainings();
        $this->load->view('includes/header',$page_data);
        $this->load->view('deal/trainings_list', $data);
        $this->load->view('includes/footer',$page_data);
    }

    public function create() {
        // Handle form submission and create a new training record
        if ($_POST) {
            $this->IT_Trainings_model->createTraining($_POST);
            redirect('IT_Trainings/index');
        }
                $this->load->model('CustomerType_model');
                $this->load->model('User_model'); // Load the User_model
                $data['full_names'] = $this->User_model->get_full_names(); // Fetch full names from the model
                $this->load->model('Lead_model');
             
                $data['courses_required'] = $this->Courses_model->get_all_courses();
                // Fetch contact names from the model
                $data['contact_names'] = $this->Lead_model->get_contact_names();
                // Load the form view passing the fetched full names
                $data['categories'] = $this->Project_Category_model->get_categories();
                $data['required_list'] = $this->Services_required_model->get_all_required();
               // Load the model
                $data['next_step_options'] = $this->Next_step_model->get_next_step_options(); // Fetch options
                $data['project_values'] = $this->Project_value_model->get_project_values();
                $data['stages'] = $this->Stage_model->get_stages();
                // ... Other data fetching logic ...
                // Load other necessary data and views
                $data['conversion_rates'] = $this->Conversion_rate_model->get_conversion_rates();
                $data['campaign_sources'] = $this->Campaign_source_model->get_campaign_sources();
        // Fetch CustomerType data
        $data['customer_types'] = $this->CustomerType_model->get_customer_types();
        $this->load->model('TrainingCategory_model');
        $page_data['training_categories'] = $this->TrainingCategory_model->getTrainingCategories();
        $this->load->model('User_model'); // Load the User_model
        $data['full_names'] = $this->User_model->get_full_names();
        $this->load->view('includes/header', $page_data);
        $this->load->view('deal/create_training', $data);
        $this->load->view('includes/footer', $page_data);
    }

   
    public function edit($id) {
        if ($_POST) {
            // Handle form submission and update training record
            $this->IT_Trainings_model->updateTraining($id, $_POST);
            redirect('IT_Trainings/index');
        }
        
        
        $data['training'] = $this->IT_Trainings_model->getTrainingById($id);
        $this->load->view('includes/header',$page_data);
        $this->load->view('deal/edit_training', $data); // Create an edit_training.php view
        $this->load->view('includes/footer',$page_data);
    }
    
    

    
    public function delete($id) {
        // Delete training record
        $this->IT_Trainings_model->deleteTraining($id);
        redirect('IT_Trainings/index');
    }
    
    
}
