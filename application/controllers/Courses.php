<?php
class Courses extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Courses_model'); // Load the Courses_model
    }

    public function index() {
        $data['courses'] = $this->Courses_model->get_all_courses();
        $this->load->view('includes/header'); // Load the header view
        $this->load->view('deal/courses/course_list', $data); // Load the course list view
        $this->load->view('includes/footer'); // Load the footer view
    }

    public function add() {
        if ($this->input->post()) {
            $course_data = array(
                'Courses_Required' => $this->input->post('Courses_Required')
            );
            $this->Courses_model->create_course($course_data);
            redirect('courses/index');
        } else {
            $this->load->view('includes/header'); // Load the header view
            $this->load->view('deal/courses/add_course'); // Load the add course view
            $this->load->view('includes/footer'); // Load the footer view
        }
    }

    public function edit($id) {
        if ($this->input->post()) {
            $course_data = array(
                'Courses_Required' => $this->input->post('Courses_Required')
            );
            $this->Courses_model->update_course($id, $course_data);
            redirect('courses/index');
        } else {
            $data['course'] = $this->Courses_model->get_course_by_id($id);
            $this->load->view('includes/header'); // Load the header view
            $this->load->view('deal/courses/edit_course', $data); // Load the edit course view
            $this->load->view('includes/footer'); // Load the footer view
        }
    }

    public function delete($id) {
        $this->Courses_model->delete_course($id);
        redirect('courses/index');
    }
}
?>
