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

date_default_timezone_set("Asia/Manila");
while (1) {
    $current = date('Y-m-d H:i:s');
    $sql = mysql_query("SELECT * FROM quiz WHERE sched = '$current'");
    if ($sql) {
        if (mysql_num_rows($sql)>0) {
            while ($alert = mysql_fetch_assoc($sql)) {
                $token = $alert['token'];
                $msg = $alert['msg'];
                $handle = curl_init();
                $body = array('outboundSMSMessageRequest' => array('address' => 'acr:authorization','senderAddress' => '406704',
                 'outboundSMSTextMessage' => array('message' => $msg)));
                curl_setopt($handle, CURLOPT_URL, 'https://x.smart.com.ph/1/smsmessaging/outbound/406704/requests');
                curl_setopt($handle, CURLOPT_HEADER, TRUE);
                curl_setopt($handle, CURLOPT_HTTPHEADER, array('Authorization: Bearer '.$token,
                    'Content-Type: application/json','Accept: application/json'));
                curl_setopt($handle, CURLOPT_POST, TRUE);
                curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, 0);
                curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, 0);   
                curl_setopt($handle, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($handle, CURLOPT_POSTFIELDS, json_encode($body));
                $result = curl_exec($handle);
                curl_close($handle);
            }
        }
    }
}
?>
    }
    
   
    
}  