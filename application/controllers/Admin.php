<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct() {
        parent::__construct();
        $this->load->model('Lead_model');
        $this->load->model('lead_source_model');
        $this->load->model('lead_status_model');
        $this->load->model('LeadServicesRequired_model');
        $this->load->model('Line_of_business_model');
        $this->load->model('It_service_model'); 
    }
	public function index() {
        if ($this->input->post()) {
            $email = $this->input->post('email_id');
            $password = sha1($this->input->post('password'));
    
            $data = $this->db->get_where('users', array(
                'email_id' => $email,
                'password' => $password,
                'account_status' => 1
            ))->result_array();
    
            if (count($data) >= 1) {
                $uid = $data[0]['id'];
                $first_name = $data[0]['first_name'];
                $last_name = $data[0]['last_name'];
                $email = $data[0]['email_id'];
                $user_type = $data[0]['type'];
                $full_name = $data[0]['full_name']; // Retrieve the "full_name" column value
    
                $this->session->set_userdata('admin_uid', $uid);
                $this->session->set_userdata('admin_first_name', $first_name);
                $this->session->set_userdata('admin_last_name', $last_name);
                $this->session->set_userdata('admin_email', $email);
                $this->session->set_userdata('admin_user_type', $user_type);
                $this->session->set_userdata('admin_full_name', $full_name); // Store the full name in the session
            }
        }
    
        if ($this->session->userdata('admin_uid')) {
            // Check the user type and redirect accordingly
            if ($this->session->userdata('admin_user_type') === 'admin') {
                // Get total number of leads
        $data['total_leads'] = $this->Lead_model->get_total_leads();
       
        $data['current_month_leads'] = $this->Lead_model->getLeadsForCurrentMonth();
        $data['previous_month_leads'] = $this->Lead_model->getLeadsForPreviousMonth();
       // Calculate the counts
       $data['count'] = $this->Lead_model->countTodaysFollowUp();
       $data['current_month_lead_count'] = count($data['current_month_leads']);
       $data['previous_month_lead_count'] = count($data['previous_month_leads']);
     $data['leads'] = $this->Lead_model->getLeadsForPreviousMonth();
        $data['leads'] = $this->Lead_model->getLeadsForCurrentMonth();
        $data['dealWonCount'] = $this->It_service_model->getDealWonCount();
        $page_data['page_title'] = 'Dashboard';
        $page_data['page'] = 'dashboard';
        $this->load->view('includes/header',$page_data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('includes/footer', $page_data);
            } elseif ($this->session->userdata('admin_user_type') === 'user') {
                // Get total number of leads
        $data['total_leads'] = $this->Lead_model->get_total_leads();
       
        $data['current_month_leads'] = $this->Lead_model->getLeadsForCurrentMonth();
        $data['previous_month_leads'] = $this->Lead_model->getLeadsForPreviousMonth();
       // Calculate the counts
       $data['current_month_lead_count'] = count($data['current_month_leads']);
       $data['previous_month_lead_count'] = count($data['previous_month_leads']);

        $data['leads'] = $this->Lead_model->getLeadsForPreviousMonth();
        $data['leads'] = $this->Lead_model->getLeadsForCurrentMonth();
        $page_data['page_title'] = 'Dashboard';
        $page_data['page'] = 'dashboard';
        $this->load->view('user_includes/header',$page_data);
        $this->load->view('user/dashboard', $data);
        $this->load->view('user_includes/footer', $page_data);
            } else {
                // Handle other cases or show an error message
            }
        } else {
            $page_data['page_title'] = 'Login Admin';
            $this->load->view('admin/login', $page_data);
        }
    }
    
	public function logout(){
		$this->session->sess_destroy();
		redirect('admin');
	}
    
	
	public function lead() {
        $data['leads'] = $this->Lead_model->get_all_leads();
        $this->load->view('includes/header',$page_data);
        $this->load->view('admin/lead', $data);
        $this->load->view('includes/footer',$page_data);
    }

    public function add_lead() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = array(
                'ServicesRequired' => $this->input->post('ServicesRequired'),
                'TypeOfCustomer' => $this->input->post('TypeOfCustomer'),
                'name' => $this->input->post('name'),
                'company' => $this->input->post('company'),
                'contact_no' => $this->input->post('contact_no'),
                'email' => $this->input->post('email'),
                'address' => $this->input->post('address'),
                'gst_no' => $this->input->post('gst_no'),
                'location' => $this->input->post('location'),
                'country' => $this->input->post('country'),
                'follow_up_date' => $this->input->post('follow_up_date'),
                'industry' => $this->input->post('industry'),
                'l_source' => $this->input->post('lead_source'),
                'l_status' => $this->input->post('l_status'),
                'line_of_business' => $this->input->post('line_of_business'), // Add this line to include the Line of Business
            );
    
            // Fetch the available options for ServicesRequired
    
            $insert_id = $this->Lead_model->add_lead($data);
    
            if ($insert_id) {
                $this->session->set_flashdata('success', 'Lead added successfully.');
                redirect('admin/lead');
            } else {
                $this->session->set_flashdata('error', 'Failed to add lead.');
                redirect('admin/add_lead');
            }
        } else {
            $data['lead_services_required'] = $this->LeadServicesRequired_model->get_all_services_required();
            // Load the $lead_sources data from your model (adjust the method name if needed)
            $data['lead_sources'] = $this->Lead_model->get_lead_sources();
            $data['lead_status'] = $this->Lead_model->get_lead_status();
            $data['type_of_customer_options'] = array('Individual', 'Organization');
            $data['line_of_business_options'] = $this->Line_of_business_model->get_all_lines_of_business(); // Add the available options here
            $this->load->view('admin/add_lead', $data);
        }
    }
    
    public function edit_lead($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = array(
                'ServicesRequired' => $this->input->post('ServicesRequired'),
                'TypeOfCustomer' => $this->input->post('TypeOfCustomer'),
                'name' => $this->input->post('name'),
                'company' => $this->input->post('company'),
                'contact_no' => $this->input->post('contact_no'),
                'email' => $this->input->post('email'),
                'address' => $this->input->post('address'),
                'gst_no' => $this->input->post('gst_no'),
                'location' => $this->input->post('location'),
                'country' => $this->input->post('country'),
                'follow_up_date' => $this->input->post('follow_up_date'),
                'industry' => $this->input->post('industry'),
                'l_source' => $this->input->post('lead_source'),
                'l_status' => $this->input->post('l_status'),
                'line_of_business' => $this->input->post('line_of_business'), // Add Line of Business
            );
    
            // Call the edit_lead method to update the lead
            $result = $this->Lead_model->edit_lead($id, $data);
    
            if ($result) {
                $this->session->set_flashdata('success', 'Lead updated successfully.');
                redirect('admin/lead');
            } else {
                $this->session->set_flashdata('error', 'Failed to update lead.');
                redirect('admin/edit_lead/' . $id);
            }
        } else {
            // Load the lead data to display in the edit form
            $lead_data = $this->Lead_model->get_lead($id);
            $data['lead_services_required'] = $this->LeadServicesRequired_model->get_all_services_required();
            $data['lead_sources'] = $this->Lead_model->get_lead_sources();
            $data['lead_status'] = $this->Lead_model->get_lead_status();
            $data['line_of_business_options'] = $this->Line_of_business_model->get_all_lines_of_business(); // Add Line of Business options
            $data = array_merge($data, $lead_data);
    
            // Load the view with the lead data
            $this->load->view('admin/edit_lead', $data);
        }
    }
    
    
    
    public function delete_lead($id) {
        $delete_status = $this->Lead_model->delete_lead($id);

        if ($delete_status) {
            $this->session->set_flashdata('success', 'Lead deletedSuccessfully deleted the lead.');

            redirect('admin/lead');
        } else {
            $this->session->set_flashdata('error', 'Failed to delete lead.');
            redirect('admin');
        }
    }
    public function calendar() {
        
        $this->load->view('admin/calendar', $data);
    }
    public function register()
{
    $this->load->library('form_validation');
    $page_data['page_title'] = 'Register';

    if ($this->input->post()) {
        // Form validation rules
        $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('email_id', 'Email', 'trim|required|valid_email|is_unique[users.email_id]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|matches[password]');
        $this->form_validation->set_rules('type', 'Type', 'trim|required');

        if ($this->form_validation->run() == TRUE) {
            // Registration data is valid, save it into the database
            $first_name = $this->input->post('first_name');
            $last_name = $this->input->post('last_name');
            $full_name = $first_name . ' ' . $last_name;

            $data = array(
                'first_name' => $first_name,
                'last_name' => $last_name,
                'full_name' => $full_name, // Combine first_name and last_name
                'email_id' => $this->input->post('email_id'),
                'password' => sha1($this->input->post('password')),
                'account_status' => 1,
                'role' => 'SUADMIN',
                'type' => $this->input->post('type')
            );

            $this->db->insert('users', $data);

            // Redirect to login page after successful registration
            redirect('admin');
        }
    }

    $this->load->view('admin/register', $page_data);
}

    
  
    public function lead_source() {
          $data['lead_sources'] = $this->lead_source_model->get_all_lead_sources();
        $this->load->view('admin/lead_source', $data);
    }
    // Create a new lead source
    public function create() {
        if ($this->input->post()) {
            $data = array(
                'source_name' => $this->input->post('source_name')
            );

            if ($this->lead_source_model->create_lead_source($data)) {
                // Handle success
                redirect('admin/read');
            } else {
                // Handle failure
                echo "Failed to create lead source.";
            }
        } else {
            $this->load->view('admin/create_lead_source');
        }
        
    }

    // Read all lead sources
    public function read() {
        $data['lead_sources'] = $this->lead_source_model->get_all_lead_sources();
        $this->load->view('admin/lead_source', $data);
    }

    // Update a lead source
    public function update($source_id) {
        if ($this->input->post()) {
            $data = array(
                'source_name' => $this->input->post('source_name')
            );

            if ($this->lead_source_model->update_lead_source($source_id, $data)) {
                // Handle success
                redirect('admin/read');
            } else {
                // Handle failure
                echo "Failed to update lead source.";
            }
        } else {
            $data['lead_source'] = $this->lead_source_model->get_lead_source_by_id($source_id);
            $this->load->view('admin/update_lead_source', $data);
        }
    }

    // Delete a lead source
    public function delete($source_id) {
        if ($this->lead_source_model->delete_lead_source($source_id)) {
            // Handle success
            redirect('admin/read');
        } else {
            // Handle failure
            echo "Failed to delete lead source.";
        }
    }
 
    public function lead_status() {
        // Display list of lead statuses or any initial view you want for the admin panel.
        // Example: $this->load->view('admin_dashboard');
        $data['lead_statuses'] = $this->lead_status_model->get_all_lead_statuses();
        $this->load->view('admin/lead_status', $data);
    }

    public function add_lead_status() {
        // Function to add a new lead status to the 'lead_status' table.
        if ($this->input->post()) {
            $status_name = $this->input->post('status_name');
            // Validate input if required.

            // Call the lead_status_model function to insert the new lead status into the database.
            $this->lead_status_model->insert_lead_status($status_name);
            redirect('admin/lead_status');
        } else {
            // Display the view to add a new lead status.
            $this->load->view('admin/add_lead_status_form');
        }
    }

    public function edit_lead_status($status_id) {
        // Function to edit an existing lead status in the 'lead_status' table.
        if ($this->input->post()) {
            $status_name = $this->input->post('status_name');
            // Validate input if required.

            // Call the lead_status_model function to update the lead status in the database.
            $this->lead_status_model->update_lead_status($status_id, $status_name);
            redirect('admin/lead_status');
        } else {
            // Get the lead status data from the database using the status_id.
            $data['lead_status'] = $this->lead_status_model->get_lead_status_by_id($status_id);
            // Display the view to edit the lead status.
            $this->load->view('admin/edit_lead_status_form', $data);
        }
    }

    public function delete_lead_status($status_id) {
        // Function to delete a lead status from the 'lead_status' table.
        // Call the lead_status_model function to delete the lead status from the database.
        $this->lead_status_model->delete_lead_status($status_id);
        redirect('admin/lead_status');
    }
    public function settings() {
        $this->load->view('d_settings', $data);
    }
    public function user_lead() {
        $data['leads'] = $this->Lead_model->get_all_leads();
        $this->load->view('user_includes/header',$page_data);
        $this->load->view('admin/user_lead', $data);
        $this->load->view('user_includes/footer',$page_data);
    }
    public function user_add_lead() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = array(
                'ServicesRequired' => $this->input->post('ServicesRequired'),
                'TypeOfCustomer' => $this->input->post('TypeOfCustomer'),
                'name' => $this->input->post('name'),
                'company' => $this->input->post('company'),
                'contact_no' => $this->input->post('contact_no'),
                'email' => $this->input->post('email'),
                'address' => $this->input->post('address'),
                'gst_no' => $this->input->post('gst_no'),
                'location' => $this->input->post('location'),
                'country' => $this->input->post('country'),
                'follow_up_date' => $this->input->post('follow_up_date'),
                'industry' => $this->input->post('industry'),
                'l_source' => $this->input->post('lead_source'),
                'l_status' => $this->input->post('l_status'),
                'line_of_business' => $this->input->post('line_of_business'), // Add this line to include the Line of Business
            );
    
            // Fetch the available options for ServicesRequired
    
            $insert_id = $this->Lead_model->add_lead($data);
    
            if ($insert_id) {
                $this->session->set_flashdata('success', 'Lead added successfully.');
                redirect('admin/user_lead');
            } else {
                $this->session->set_flashdata('error', 'Failed to add lead.');
                redirect('admin/user_add_lead');
            }
        } else {
            $data['lead_services_required'] = $this->LeadServicesRequired_model->get_all_services_required();
            // Load the $lead_sources data from your model (adjust the method name if needed)
            $data['lead_sources'] = $this->Lead_model->get_lead_sources();
            $data['lead_status'] = $this->Lead_model->get_lead_status();
            $data['type_of_customer_options'] = array('Individual', 'Organization');
            $data['line_of_business_options'] = $this->Line_of_business_model->get_all_lines_of_business(); // Add the available options here
            $this->load->view('admin/user_add_lead', $data);
        }
    }
    public function user_edit_lead($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = array(
                'ServicesRequired' => $this->input->post('ServicesRequired'),
                'TypeOfCustomer' => $this->input->post('TypeOfCustomer'),
                'name' => $this->input->post('name'),
                'company' => $this->input->post('company'),
                'contact_no' => $this->input->post('contact_no'),
                'email' => $this->input->post('email'),
                'address' => $this->input->post('address'),
                'gst_no' => $this->input->post('gst_no'),
                'location' => $this->input->post('location'),
                'country' => $this->input->post('country'),
                'follow_up_date' => $this->input->post('follow_up_date'),
                'industry' => $this->input->post('industry'),
                'l_source' => $this->input->post('lead_source'),
                'l_status' => $this->input->post('l_status'),
                'line_of_business' => $this->input->post('line_of_business'), // Add Line of Business
            );
    
            // Call the edit_lead method to update the lead
            $result = $this->Lead_model->edit_lead($id, $data);
    
            if ($result) {
                $this->session->set_flashdata('success', 'Lead updated successfully.');
                redirect('admin/user_lead');
            } else {
                $this->session->set_flashdata('error', 'Failed to update lead.');
                redirect('admin/usr_edit_lead/' . $id);
            }
        } else {
            // Load the lead data to display in the edit form
            $lead_data = $this->Lead_model->get_lead($id);
            $data['lead_services_required'] = $this->LeadServicesRequired_model->get_all_services_required();
            $data['lead_sources'] = $this->Lead_model->get_lead_sources();
            $data['lead_status'] = $this->Lead_model->get_lead_status();
            $data['line_of_business_options'] = $this->Line_of_business_model->get_all_lines_of_business(); // Add Line of Business options
            $data = array_merge($data, $lead_data);
    
            // Load the view with the lead data
            $this->load->view('admin/user_edit_lead', $data);
        }
    }
    public function user_delete_lead($id) {
        $delete_status = $this->Lead_model->delete_lead($id);

        if ($delete_status) {
            $this->session->set_flashdata('success', 'Lead deletedSuccessfully deleted the lead.');

            redirect('admin/user_lead');
        } else {
            $this->session->set_flashdata('error', 'Failed to delete lead.');
            redirect('admin');
        }
    }
    
}

?>

