<?php
class ActivityController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('ActivityModel');
        $this->load->model('User_model');
        $this->load->model('Project_model');
    }

    public function create() {
        if ($this->input->post()) {
            // Form submission, save the data
            $data = array(
                'TypeOfActivity' => $this->input->post('TypeOfActivity'),
                'Project' => $this->input->post('Project'),
                'AssignedTo' => $this->input->post('AssignedTo'),
                'Priority' => $this->input->post('Priority'),
                'Status' => $this->input->post('Status'),
                'StartDate' => $this->input->post('StartDate'),
                'EndDate' => $this->input->post('EndDate'),
                'Description' => $this->input->post('Description'), // New field
                'Links' => $this->input->post('Links') // New field
            );
    
            $this->ActivityModel->create_activity($data);
            redirect('ActivityController/index');
        } else {
            // Fetch user data to populate the "Assigned To" dropdown
            $data['users'] = $this->User_model->getUsers();
            $this->load->model('Type_of_Activity_model');
    
            // Fetch activity types from the model
            $data['activity_types'] = $this->Type_of_Activity_model->get_activity_types();
            $data['projects'] = $this->Project_model->get_all_projects();
            $this->load->view('includes/header', $page_data);
            $this->load->view('ActivityScheduler/create', $data);
            $this->load->view('includes/footer', $page_data);
        }
    }
    
    
    // Read activities
    public function index() {
        $data['activities'] = $this->ActivityModel->get_activities();
        $this->load->view('includes/header',$page_data);
        $this->load->view('ActivityScheduler/index', $data);
        $this->load->view('includes/footer',$page_data);
    }

    // Update an activity
    public function edit($activity_id) {
        if ($this->input->post()) {
            // Form submission, update the activity
            $data = array(
                'TypeOfActivity' => $this->input->post('TypeOfActivity'),
                'Project' => $this->input->post('Project'),
                'AssignedTo' => $this->input->post('AssignedTo'),
                'Priority' => $this->input->post('Priority'),
                'Status' => $this->input->post('Status'),
                'StartDate' => $this->input->post('StartDate'),
                'EndDate' => $this->input->post('EndDate'),
                'Description' => $this->input->post('Description'), // New field
                'Links' => $this->input->post('Links')
            );
            $this->ActivityModel->update_activity($data, $activity_id);
            redirect('ActivityController/index'); // Redirect to the activity list
        } else {
            // Display the edit form
            $data['activity'] = $this->ActivityModel->get_activity($activity_id);
            $this->load->view('includes/header',$page_data);
            $this->load->view('ActivityScheduler/edit', $data);
            $this->load->view('includes/footer',$page_data);
            
        }
    }
    
    // Delete an activity
    public function delete($activity_id) {
        $this->ActivityModel->delete_activity($activity_id);
        redirect('ActivityController/index'); // Redirect to the activity list
    }
    public function user_edit($activity_id) {
        if ($this->input->post()) {
            // Form submission, update the activity
            $data = array(
               
                'Status' => $this->input->post('Status')
            );
            $this->ActivityModel->update_activity($data, $activity_id);
            redirect('User_task/index'); // Redirect to the activity list
        } else {
            // Display the edit form
            $data['activity'] = $this->ActivityModel->get_activity($activity_id);
            $this->load->view('user_includes/header',$page_data);
            $this->load->view('user/edit', $data);
            $this->load->view('user_includes/footer',$page_data);
            
        }
    }
    public function email($activity_id) {
       
            // Display the edit form
            $data['activity'] = $this->ActivityModel->get_activity($activity_id);
            $this->load->view('includes/header',$page_data);
            $this->load->view('email/index', $data);
            $this->load->view('includes/footer',$page_data);
       
    }
   
    public function submit_form() {
        // Load email library
        $this->load->library('email');
    
        // Fetch form data
        $to_email = $this->input->post('to_email');
        $subject = $this->input->post('subject');
        $message = $this->compose_email_message();
    
        // Configure email parameters
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.gmail.com'; // Use 'ssl://' for secure connection
        $config['smtp_port'] = 465; // Use port 465 for SSL
        $config['smtp_user'] = 'digitalsolutions.ges@gmail.com';
        $config['smtp_pass'] = 'kjef vnwt ntsr nvri';
        $config['charset'] = 'utf-8';
        $config['mailtype'] = 'html';
        $config['newline'] = "\r\n";
    
        $this->email->initialize($config);
    
        $this->email->set_newline("\r\n");
        $this->email->from('vijay.anand189@gmail.com', 'Vijay Anand');
        $this->email->to($to_email);
        $this->email->subject($subject);
        $this->email->message($message);
    
        // Send email
        if ($this->email->send()) {
            echo 'Email sent successfully.';
        } else {
            show_error($this->email->print_debugger());
        }
    }
    
    private function compose_email_message() {
        // Fetch additional data
        $typeOfActivity = $this->input->post('TypeOfActivity');
        $project = $this->input->post('Project');
        $assignedTo = $this->input->post('AssignedTo');
        $startDate = $this->input->post('StartDate');
        $endDate = $this->input->post('EndDate');
        $description = $this->input->post('Description');
        $priority = $this->input->post('Priority');
        $status = $this->input->post('Status');
        $links = $this->input->post('Links');
    
        // Compose email message
        $message = '<html><body>';
        $message .= '<h2>Form Data</h2>';
        $message .= '<p><strong>Type of Activity:</strong> ' . htmlspecialchars($typeOfActivity) . '</p>';
        $message .= '<p><strong>Project:</strong> ' . htmlspecialchars($project) . '</p>';
        $message .= '<p><strong>Assigned To:</strong> ' . htmlspecialchars($assignedTo) . '</p>';
        $message .= '<p><strong>Start Date:</strong> ' . htmlspecialchars($startDate) . '</p>';
        $message .= '<p><strong>End Date:</strong> ' . htmlspecialchars($endDate) . '</p>';
        $message .= '<p><strong>Description:</strong> ' . htmlspecialchars($description) . '</p>';
        $message .= '<p><strong>Priority:</strong> ' . htmlspecialchars($priority) . '</p>';
        $message .= '<p><strong>Status:</strong> ' . htmlspecialchars($status) . '</p>';
        $message .= '<p><strong>Links:</strong> ' . htmlspecialchars($links) . '</p>';
        $message .= '</body></html>';
    
        return $message;
    }
    
    // Read activities
    public function user_index() {
        $data['activities'] = $this->ActivityModel->get_activities();
        $this->load->view('user_includes/header',$page_data);
        $this->load->view('ActivityScheduler/user_index', $data);
        $this->load->view('user_includes/footer',$page_data);
    }
    public function useredit($activity_id) {
        if ($this->input->post()) {
            // Form submission, update the activity
            $data = array(
                'TypeOfActivity' => $this->input->post('TypeOfActivity'),
                'Project' => $this->input->post('Project'),
                'AssignedTo' => $this->input->post('AssignedTo'),
                'Priority' => $this->input->post('Priority'),
                'Status' => $this->input->post('Status'),
                'StartDate' => $this->input->post('StartDate'),
                'EndDate' => $this->input->post('EndDate'),
                'Description' => $this->input->post('Description'), // New field
                'Links' => $this->input->post('Links')
            );
            $this->ActivityModel->update_activity($data, $activity_id);
            redirect('ActivityController/user_index'); // Redirect to the activity list
        } else {
            // Display the edit form
            $data['activity'] = $this->ActivityModel->get_activity($activity_id);
            $this->load->view('user_includes/header',$page_data);
            $this->load->view('ActivityScheduler/user_edit', $data);
            $this->load->view('user_includes/footer',$page_data);
            
        }
    }
    public function user_create() {
        if ($this->input->post()) {
            // Form submission, save the data
            $data = array(
                'TypeOfActivity' => $this->input->post('TypeOfActivity'),
                'Project' => $this->input->post('Project'),
                'AssignedTo' => $this->input->post('AssignedTo'),
                'Priority' => $this->input->post('Priority'),
                'Status' => $this->input->post('Status'),
                'StartDate' => $this->input->post('StartDate'),
                'EndDate' => $this->input->post('EndDate'),
                'Description' => $this->input->post('Description'), // New field
                'Links' => $this->input->post('Links') // New field
            );
    
            $this->ActivityModel->create_activity($data);
            redirect('ActivityController/user_index');
        } else {
            // Fetch user data to populate the "Assigned To" dropdown
            $data['users'] = $this->User_model->getUsers();
            $this->load->model('Type_of_Activity_model');
    
            // Fetch activity types from the model
            $data['activity_types'] = $this->Type_of_Activity_model->get_activity_types();
            $data['projects'] = $this->Project_model->get_all_projects();
            $this->load->view('user_includes/header', $page_data);
            $this->load->view('ActivityScheduler/user_create', $data);
            $this->load->view('user_includes/footer', $page_data);
        }
    }
    public function user_delete($activity_id) {
        $this->ActivityModel->delete_activity($activity_id);
        redirect('ActivityController/user_index'); // Redirect to the activity list
    }
}
?>
