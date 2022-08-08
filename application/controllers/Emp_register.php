<?php

require APPPATH.'libraries/REST_Controller.php';

class Emp_model extends REST_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        
        $this->load->model('Emp_model');
        
        $this->load->library('form_validation');
        $this->load->helper("security");
        
    }

    public function emp_register()
    {
        $emp_name = $this->security->xss_clean($this->input->post("emp_name"));
        $emp_email = $this->security->xss_clean($this->input->post("emp_email"));
        $emp_add = $this->security->xss_clean($this->input->post("emp_add"));
        $emp_mobile = $this->security->xss_clean($this->input->post("emp_mobile"));
        $emp_gender = $this->security->xss_clean($this->input->post("emp_gender"));
        $emp_dob = $this->security->xss_clean($this->input->post("emp_dob"));
        $emp_pancard = $this->security->xss_clean($this->input->post("emp_pancard"));
        $emp_joining = $this->security->xss_clean($this->input->post("emp_joining"));
        $emp_salary = $this->security->xss_clean($this->input->post("emp_salary"));


         //form validation
         $this->form_validation->set_rules("emp_name", "Name", "required");
         $this->form_validation->set_rules("emp_email", "Email", "required|valid_email|valid_emails|is_unique[tbl_employee.emp_email]");
         $this->form_validation->set_rules("emp_add", "Address", "required");
         $this->form_validation->set_rules("emp_mobile", "Mobile", "required|exact_length[10]|numeric");
         $this->form_validation->set_rules("emp_gender", "Gender", "required");
         $this->form_validation->set_rules("emp_dob", "emp_dob", "required");
         $this->form_validation->set_rules("emp_pancard", "Pancard", "required");
         $this->form_validation->set_rules("emp_joining", "Date", "required");
         $this->form_validation->set_rules("emp_salary", "Salary", "required");


         if($this->form_validation->run() === FALSE){

            //   // we have some errors
              $this->response(array(
                "status" => 0,
                "message" => "All fields are needed"
              ) , REST_Controller::HTTP_NOT_FOUND);
            }else{
        
              if(!empty($emp_name) && !empty($emp_email) && !empty($emp_add) && !empty($emp_mobile) && !empty($emp_name) && !empty($emp_name) && !empty($emp_name) && !empty($emp_name) && !empty($emp_name) ){
                // all values are available
                $emp = array(
                  "emp_name" => $emp_name,
                  "emp_email" => $emp_email,
                  "emp_add" => $emp_add,
                  "emp_mobile" => $emp_mobile,
                  "emp_mobile" => $emp_mobile,
                  "emp_mobile" => $emp_mobile,
                  "emp_mobile" => $emp_mobile,
                  "emp_mobile" => $emp_mobile,
                  "emp_mobile" => $emp_mobile,
                );
        
                if($this->Emp_model->emp_insert($emp)){
        
                  $this->response(array(
                    "status" => 1,
                    "message" => "Student has been created"
                  ), REST_Controller::HTTP_OK);
                }else{
        
                  $this->response(array(
                    "status" => 0,
                    "message" => "Failed to create student"
                  ), REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
                }
              }else{
                // we have some empty field
                $this->response(array(
                  "status" => 0,
                  "message" => "All fields are needed"
                ), REST_Controller::HTTP_NOT_FOUND);
              }
            }
        }

}