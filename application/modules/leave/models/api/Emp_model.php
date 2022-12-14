<?php

class Emp_model extends CI_Model{

    // public $emp;

  public function __construct(){

    
    parent::__construct();
    $this->load->database();
    // $this->emp = $this->load->database('tbl_emp',TRUE);

  }

  
  public function emp_insert($data=array()) //employee insert
  {
      return $this->db->insert("tbl_employee",$data);
  }


  public function emp_delete($emp_id) //employee delete
  {
    
    $this->db->where('emp_id', $emp_id);
    
    return $this->db->delete('tbl_employee');
    
    
  }


 public function get_employee() //all employee

 {
     $this->db->select("tbl_employee.emp_id,tbl_employee.emp_name,tbl_employee.emp_email,tbl_employee.emp_add,tbl_employee.emp_mobile,tbl_employee.emp_gender,tbl_employee.emp_dob,tbl_employee.emp_pancard,tbl_employee.emp_joining,tbl_employee.emp_salary,tbl_department.depart_name,tbl_designaion.desi_name");

     $this->db->from("tbl_employee");

     $this->db->join('tbl_department', 'tbl_employee.emp_id = tbl_department.emp_id');
     $this->db->join('tbl_designaion', 'tbl_employee.emp_id = tbl_designaion.emp_id');

     $query = $this->db->get();

     return $query->result();
 }

 public function find_employee($emp_id) //employee find specific id
 {
   
    $this->db->select("tbl_employee.emp_id,tbl_employee.emp_name,tbl_employee.emp_email,tbl_employee.emp_add,tbl_employee.emp_mobile,tbl_employee.emp_gender,tbl_employee.emp_dob,tbl_employee.emp_pancard,tbl_employee.emp_joining,tbl_employee.emp_salary,tbl_department.depart_name,tbl_designaion.desi_name");

    $this->db->from("tbl_employee");

    $this->db->join('tbl_department', 'tbl_employee.emp_id = tbl_department.emp_id');
    $this->db->join('tbl_designaion', 'tbl_employee.emp_id = tbl_designaion.emp_id');
   $this->db->get_where('emp_id', $emp_id);
   
   $query = $this->db->get();
   return $query->row();
   
   
 }


 public function leave_insert($data=array()) //leave request insert
{
     return  $this->db->insert("tbl_leave",$data);
}


 public function leave_fetch() //all leave fetch
 {
    
    $this->db->select("*");
    $this->db->from("tbl_leave");

    $query = $this->db->get();

    return $query->result();
 }



 public function leave_delete($leave_id) //leave delete
 {
    $this->db->where('emp_id', $leave_id);
    
    return $this->db->delete('tbl_leave');
 }


 public function department_insert($data=array()) //department insert
 {
     return  $this->db->insert("tbl_department",$data);
 }

 public function designation_insert($data=array()) //designation insert
 {
     return  $this->db->insert("tbl_designaion",$data);
 }


 public function get_manager() //employee get manager with leave status
 {
    $this->db->select('e.emp_id as Employee ID,e.emp_name as Name,IFNULL(m.emp_name,"No Manager") as Manager,tbl_leave.leave_reason');
    
    $this->db->from('tbl_employee as e');
    $this->db->join('tbl_employee as m', 'e.manager_id = m.emp_id','left');
    $this->db->join('tbl_leave', 'e.emp_id = tbl_leave.emp_id','left');
    $query=$this->db->get();

    return $query->result();

 }


      public function emp_depart() //employee department fetch
      {
            $this->db->select('tbl_employee.emp_id as Employee ID,tbl_employee.emp_name as Employee Name,tbl_department.depart_name as Department');

            $this->db->from('tbl_employee');

            $this->db->join('tbl_department', 'tbl_employee.emp_id = tbl_department.emp_id');

            $query=$this->db->get();

            return $query->result();

      }


      public function emp_leave_find() // employee leave find
      {
            $this->db->select('tbl_employee.emp_id as Employee ID,tbl_employee.emp_name as Employee Name,tbl_leave.leave_reason as Leave Reason');

            $this->db->from('tbl_employee');

            $this->db->join('tbl_leave', 'tbl_employee.emp_id = tbl_leave.emp_id');

            $query=$this->db->get();

            return $query->result();

      }


        public function emp_desi() //employee designation find
        {
            $this->db->select('tbl_employee.emp_id as Employee ID,tbl_employee.emp_name as Employee Name,tbl_designaion.desi_name as Designation Name');

                $this->db->from('tbl_employee');

                $this->db->join('tbl_designaion', 'tbl_employee.emp_id = tbl_designaion.emp_id');

                $query=$this->db->get();

                return $query->result();
        }

        public function update_employee_information($emp_id, $data) //working with not validation
        {
        
            $this->db->where("emp_id", $emp_id);
            return $this->db->update("tbl_employee", $data);
        }

        public function update_item($emp_id,$data=array()) // update Normal Method
        {
            $data=array(
            'emp_name' => $this->input->put('emp_name'),
            'emp_email'=> $this->input->put('emp_email'),
            'emp_password' => $this->input->put('emp_password'),
            'emp_add' => $this->input->put('emp_add'),
            'emp_mobile' => $this->input->put('emp_mobile'),
            'emp_gender' => $this->input->put('emp_gender'),
            'emp_dob' => $this->input->put('emp_dob'),
            'emp_pancard' => $this->input->put('emp_pancard'),
            'emp_joining' => $this->input->put('emp_joining'),
            'emp_salary' => $this->input->put('emp_salary'),
            'depart_id' => $this->input->put('depart_id'),
            'desi_id' => $this->input->put('desi_id'),
                );
                if($emp_id==0){
                    return $this->db->insert('tbl_employee',$data);
                }
                else
                {
                    $this->db->where('emp_id',$emp_id);
                    return $this->db->update('tbl_employee',$data);
                }        
                            
                    $this->db->where('emp_id',$emp_id);
                    $this->db->update('tbl_employee');
        }

        public function emp_update($emp_id,$data) //update third method
        {
            
            $this->db->where('emp_id', $emp_id);
            
           return $this->db->update('tbl_employee', $data);
            
            
        }

        public function leave_status() //find leave status
        {
            $this->db->select('tbl_employee.emp_id as Employee ID,tbl_employee.emp_name as Employee Name,tbl_leave.leave_id as Leave ID,tbl_leave.leave_status as Leave Status');

            $this->db->from('tbl_employee');

            $this->db->join('tbl_leave', 'tbl_employee.emp_id = tbl_leave.emp_id');

            $query=$this->db->get();

            return $query->result();

        }

        public function update_leave_status($leave_id, $status) //update leave status
        {

            $this->db->where("leave_id", $leave_id);
            return $this->db->update("tbl_leave", $status);
         }



        public function emp_dep_map($data=array()) //employee department update/insert
        {
         return  $this->db->insert("tbl_department",$data);
        }


        public function emp_desi_map($data=array()) //employee designation update/insert
        {
         return  $this->db->insert("tbl_designaion",$data);
        }

        public function leave_pending_get() //pending leave find
        {
            $this->db->select('tbl_employee.emp_id as Employee ID,tbl_employee.emp_name as Employee Name,tbl_leave.leave_id as Leave ID,tbl_leave.leave_status as Leave Status');

            $this->db->from('tbl_employee');

            $this->db->join('tbl_leave', 'tbl_employee.emp_id = tbl_leave.emp_id');
            $this->db->where('tbl_leave.leave_status=','pending');
            $this->db->or_where('tbl_leave.leave_status=','rejected');

            $query=$this->db->get();

            return $query->result();
        }


        public function leave_accepted_get() //accepted leave find
        {
            $this->db->select('tbl_employee.emp_id as Employee ID,tbl_employee.emp_name as Employee Name,tbl_leave.leave_id as Leave ID,tbl_leave.leave_status as Leave Status');

            $this->db->from('tbl_employee');

            $this->db->join('tbl_leave', 'tbl_employee.emp_id = tbl_leave.emp_id');
            $this->db->where('tbl_leave.leave_status=','Accepted');
            $this->db->or_where('tbl_leave.leave_status=','accepted');

            $query=$this->db->get();

            return $query->result();
        }

        public function emp_find($emp_id = "")
        {
            if(!empty($emp_id))
             {
                $query = $this->db->get_where('tbl_employee',array('emp_id'=>$emp_id));

                return $query->row_array();
             }

             else
              {
                $query = $this->db->get('tbl_employee');

                return $query->result_array();
              }
        }
}