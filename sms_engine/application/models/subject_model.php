<?php

class Subject_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }

    function subject_list($id) {  
        $this->db->select('*');     
        $this->db->from('subject');
        $this->db->where('subject.userid',$id);
        $query = $this->db->get();
        return $query->result();
    }

    function add_subject($data) {
        $this->db->insert('subject',$data);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : TRUE;
      
    }
    
    function delete_subject($id){

        $this->db->where('subjectid', $id);
        $this->db->delete('subject'); 
    }

}  