<?php
/**
 * Auth for user authentication
 * @package Auth
 * @category Auth
 */
class Auth extends Common_Api_Controller {

    function __construct() {
        parent::__construct();
        
    }

    public function index_get() {
        $this->response(array(config_item('rest_status_field_name') => FALSE), rest_controller::HTTP_NOT_FOUND);
    }

    public function index_post() {
        $this->response(array(config_item('rest_status_field_name') => FALSE), rest_controller::HTTP_NOT_FOUND);
    }

    /**
     * App master data used for get application settings
     * @param
     * @return json array
     */
    public function get_app_setting_post() {
        
        $data_arr = array();
        $data_arr['android'] = array("min"=>"1.1","current"=>"1.2","link"=>"");
        $this->api_response_arry['data'] = $data_arr;
        $this->api_response();
    }

    public function apply_leave_post()
    {
        $this->form_validation->set_rules('reason', 'Reason', 'trim|required');

        if($this->form_validation->run() == FALSE) 
        {
            $this->send_validation_errors();
        }

        //code 

    }
}
