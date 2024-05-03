<?php
class User_task extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

public function index() {
    // Check if the user is logged in
    if ($this->session->userdata('admin_full_name')) {
        // Retrieve the logged-in admin's full name
        $admin_full_name = $this->session->userdata('admin_full_name');
        
        // Load the database model if it's not already loaded
        $this->load->model('ActivityModel');

        // Get activities where AssignedTo matches the admin's full name
        $data['activities'] = $this->ActivityModel->getActivitiesByAssignedTo($admin_full_name);

        // Load the view with the retrieved data
        $page_data['page_title'] = 'Assigned Activities';
        $this->load->view('user_includes/header', $page_data);
        $this->load->view('user/task', $data); // Pass the full name to the view
        $this->load->view('user_includes/footer', $page_data);
    } else {
        $page_data['page_title'] = 'Login Admin';
        $this->load->view('admin/login', $page_data);
    }
}
public function task_table() {
    // Check if the user is logged in
    if ($this->session->userdata('admin_full_name')) {
        // Retrieve the logged-in admin's full name
        $admin_full_name = $this->session->userdata('admin_full_name');
        
        // Load the database model if it's not already loaded
        $this->load->model('ActivityModel');

        // Get activities where AssignedTo matches the admin's full name
        $data['activities'] = $this->ActivityModel->getActivitiesByAssignedTo($admin_full_name);

        // Load the view with the retrieved data
        $page_data['page_title'] = 'Assigned Activities';
        $this->load->view('user_includes/header', $page_data);
        $this->load->view('user/task_table', $data); // Pass the full name to the view
        $this->load->view('user_includes/footer', $page_data);
    } else {
        $page_data['page_title'] = 'Login Admin';
        $this->load->view('admin/login', $page_data);
    }
}
}
?>