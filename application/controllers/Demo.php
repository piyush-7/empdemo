<?php


require APPPATH.'libraries/REST_Controller.php';

class Emp_register extends REST_Controller
{


    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();

        $this->load->library("form_validation");
        $this->load->model('Emp_model');
        
    }  
    
    
    

    public function emp_regi()
    {
        $emp_name = $this->security->xss_clean($this->input->post("emp_name"));
        $emp_email = $this->security->xss_clean($this->input->post("emp_email"));
        $emp_add = $this->security->xss_clean($this->input->post("emp_add"));
        $emp_gender = $this->security->xss_clean($this->input->post("emp_gender"));
        $emp_pancard = $this->security->xss_clean($this->input->post("emp_pancard"));
        $emp_joining = $this->security->xss_clean($this->input->post("emp_joining"));
        $emp_salary = $this->security->xss_clean($this->input->post("emp_salary"));


        //form validation
        $this->form_validation->set_rules("emp_name", "Name", "required");
        $this->form_validation->set_rules("emp_email", "Email", "required|valid_email");
        $this->form_validation->set_rules("emp_add", "Address", "required");
        $this->form_validation->set_rules("emp_gender", "Gender", "required");
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
        
              if(!empty($name) && !empty($email) && !empty($mobile) && !empty($course)){
                // all values are available
                $student = array(
                  "name" => $name,
                  "email" => $email,
                  "mobile" => $mobile,
                  "course" => $course
                );
        
       
    }





}
