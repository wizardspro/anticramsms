<?php

class Profile_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }



    function profile($id) {
        
        $this->db->select('*');     
        $this->db->from('tbl_user');
        $this->db->where('tbl_user.userid',$id);
        $query = $this->db->get();
        return $query->result();
    }


    function update_user($id,$data){
        $this->db->where('userid',$id);
        $this->db->update('tbl_user',$data);

    }



   

   
    
}  