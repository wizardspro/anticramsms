<?php

class Sign_up_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }


    function username_exists($username){
        $this->db->where('username',$username);
        $this->db->from('tbl_user');
        $query = $this->db->get();
        if( $query->num_rows() > 0 ){ return TRUE; } else { return FALSE; }

    }

    function register($data)
    {
        $this->db->insert('tbl_user', $data);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;      
    }


    function email_exists($email){
        $this->db->where('email',$email);
        $this->db->from('tbl_user');
        $query = $this->db->get();
        if( $query->num_rows() > 0 ){ return TRUE; } else { return FALSE; }

    }

   






















    

    function change_info($displayname, $email) {

            $data = array (
                    'displayname' => $displayname,
                    'email' => $email
                );

            $this->session->set_userdata($data);

            $this->db->where('id', $this->session->userdata('hr_id'));
            $this->db->update('uesr_table', $data);
            return true; 
    }

    function change_pass($password) {

            $data = array (
                    'password' => md5($password)
                );

            $this->session->set_userdata($data);

            $this->db->where('id', $this->session->userdata('id'));
            $this->db->update('uesr_table', $data);
            return true;
    }

    function list_trainer() {
        $permission='trainer';
        $this->db->select('*');
        $this->db->where('permission',$permission);
        $this->db->from('user_table');
        //$this->db->join('user_logs', 'user_logs.user_id = user_table.id','left');
        $query = $this->db->get(); 
        return $query->result();
    } 
     function add_trainer($data,$trainer_count) {  
        
        $this->db->where('count_id','1');
        $this->db->update('user_count', $trainer_count);
        
        $this->db->insert('user_table', $data);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : TRUE;   
       
    } 


    /*******************************************************************/
 

   
    
    function updateAccountStatus($id,$stat){
        
        $this->db->where('user_id',$id);
        $this->db->update('user_table',array('is_active'=>$stat));

        return $stat;

    }

    function delete_user($id) {

        $this->db->where('id', $id);
        $this->db->delete('user_table');

    }
    


    /*******************************************************************/

}  