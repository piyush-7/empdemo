<?php

require APPPATH.'libraries/REST_Controller.php';

class Leave_accept  extends Common_Api_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array("api/Emp_model"));
        $this->load->library(array("form_validation"));
        $this->load->helper("security");
    }


    public function index_get()
    {
        $emp_leave_status = $this->Emp_model->leave_accepted_get();
  
        if(count($emp_leave_status)>0){
  
        $this->response(array(
          "status" => 1,
          "message" => "Accepted Leave status found",
          "data" => $emp_leave_status
        ), REST_Controller::HTTP_OK);
        }else{
  
        $this->response(array(
          "status" => 0,
          "message" => "No Accepted-Leave status found",
          "data" => $emp_leave_status
        ), REST_Controller::HTTP_NOT_FOUND);
      }
    }

  
}