<?php

class Sign_in_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }


    function validate() {

        $username = $this->security->xss_clean($this->input->post('username'));
        $password = $this->security->xss_clean($this->input->post('password'));
        
        $this->db->where('username', $username);
        $this->db->where('password', MD5($password));
        
        $query = $this->db->get('tbl_user');

        if($query->num_rows == 1) {
            
            $row = $query->row();

            $data = array(
                'user_id' => $row->userid,
                'username' => $row->username,
                'password' => $row->password,
                'last_name' => $row->last_name,
                'middle_name' => $row->middle_name,
                'first_name' => $row->first_name,
                'contactNo' => $row->contact_no,
                'email' => $row->email,
                'is_logged_in' => true,
        
            );
            $this->session->set_userdata($data);
            return true;

        }
        else{

            // If the previous process did not validate
            // then return false.
            $this->session->set_flashdata('error_msg', '<p style="font-size:12px;" class="bg-danger"><i class="fa fa-asterisk" style="color:red"></i> Invalid username and/or password.</p>');
            return false;
        }

    }

}