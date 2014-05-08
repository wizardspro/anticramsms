<?php

class Quiz_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }



    function view_quiz($id) {  
        $this->db->select('*');     
        $this->db->from('quiz');
        $this->db->where('quiz.subject_id',$id);
        $query = $this->db->get();
        return $query->result();
    }
    
    function quiz_info($id) {  
        $this->db->select('*');     
        $this->db->from('quiz');
        $this->db->where('quiz.quiz_id',$id);
        $query = $this->db->get();
        return $query->result();
    }
    
    function subj_name($id)
    {
        $this->db->select('*');     
        $this->db->from('subject');
        $this->db->where('subject.subjectid',$id);
        $query = $this->db->get();
        return $query->result();
    }

    function add_quiz($data) {
        $this->db->insert('quiz',$data);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : TRUE;
      
    }

    function delete_quiz($id){

        $this->db->where('quiz_id', $id);
        $this->db->delete('quiz'); 
    }

   


   

   
    
}  