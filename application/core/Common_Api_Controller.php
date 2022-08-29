<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
/**
 * Base class for all rest api
 * @package Core
 * @category Rest
 */
class Common_Api_Controller extends REST_Controller {

    public $data = array();
    public $api_response_arry = array(
        "response_code" => rest_controller::HTTP_OK,
        "service_name" => "",
        "message" => "",
        "global_error" => "",
        "error" => array(),
        "data" => array()
    );

    public function __construct() {
        parent::__construct();
        $_POST = $this->post();
    }

    /**
     * return service api response data
     * @return json array
     */
    public function api_response() {
        $output = array();
        $output['service_name'] = $this->api_response_arry['service_name'];
        $output['message']      = $this->api_response_arry['message'];
        $output['global_error'] = $this->api_response_arry['global_error'];
        $output['error']        = $this->api_response_arry['error'];
        $output['data']         = $this->api_response_arry['data'];
        $output['response_code'] = $this->api_response_arry['response_code'];

        //for query log hook added in log folder
        $hook = & load_class('Hooks', 'core');
        $hook->call_hook('post_controller');

        if (method_exists($this, 'response')) {
            $this->response($output, $this->api_response_arry['response_code']);
        } else {
            http_response_code($this->api_response_arry['response_code']);
        }
    }

    /**
     * Retrieve the validation errors array and send as response.
     * @return none
     */
    public function send_validation_errors($return_only = FALSE) {
        $errors = $this->form_validation->error_array();
        $return['response_code'] = REST_Controller::HTTP_INTERNAL_SERVER_ERROR;
        $return['error'] = $errors;
        $return['service_name'] = '';
        $return['message'] = '';
        $return['global_error'] = '';
        $return['data'] = '';

        if (!$this->input->post()) {
            $return['global_error'] = $this->lang->line('input_invalid_format');
        }

        if ($return_only === TRUE) {
            return $return;
        }

        $this->response($return, REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
    }

}
