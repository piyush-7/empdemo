<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Emp_model extends CI_Model {
   
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    

    public function emp_insert($data=array())
    {
        return $this->db->insert("tbl_employee",$data);
    }
    

}

/* End of file Emp_model.php */
