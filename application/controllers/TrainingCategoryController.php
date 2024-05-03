<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TrainingCategoryController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('TrainingCategory_model');
    }

   // Create a new TrainingCategory
   public function create() {
    $page_data = array(); // You may need to define $page_data depending on your requirements.
    
    if ($this->input->post('TrainingCategory')) {
        $data = array(
            'TrainingCategory' => $this->input->post('TrainingCategory')
        );
        $this->TrainingCategory_model->create($data);
        redirect('TrainingCategoryController/index');
    } else {
        $page_data['title'] = 'Create Training Category'; // Change this title as needed.
        $this->load->view('includes/header', $page_data);
        $this->load->view('deal/TrainingCategory/create'); // Assuming your view file is named create.php
        $this->load->view('includes/footer', $page_data); // Assuming your view file is named create.php
      
    }
}


    // Read all TrainingCategories
    public function index() {
        $data['categories'] = $this->TrainingCategory_model->read();
        $this->load->view('deal/TrainingCategory/categories_view', $data);
    }

    // Read a single TrainingCategory by ID
    public function view($id) {
        $data['category'] = $this->TrainingCategory_model->read_single($id);
        $this->load->view('deal/TrainingCategory/category_view', $data);
    }

    public function update($id) {
        $page_data = array(); // You may need to define $page_data depending on your requirements.
    
        // Check if a TrainingCategory with the given ID exists
        $category = $this->TrainingCategory_model->read_single($id);
    
        if (!$category) {
            // Redirect to the index page or show an error message if the category doesn't exist.
            redirect('TrainingCategoryController/index');
        }
    
        if ($this->input->post('TrainingCategory')) {
            $data = array(
                'TrainingCategory' => $this->input->post('TrainingCategory')
            );
            $this->TrainingCategory_model->update($id, $data);
            redirect('TrainingCategoryController/index');
        } else {
            $page_data['title'] = 'Edit Training Category'; // Change this title as needed.
            $page_data['category'] = $category;
    
            $this->load->view('includes/header', $page_data);
            $this->load->view('deal/TrainingCategory/edit', $page_data); // Create an 'edit.php' view file.
            $this->load->view('includes/footer', $page_data);
        }
    }
    
    // Delete a TrainingCategory
    public function delete($id) {
        $this->TrainingCategory_model->delete($id);
        redirect('TrainingCategoryController/index');
    }
}
?>
