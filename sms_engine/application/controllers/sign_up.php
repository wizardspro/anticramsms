<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *---------------------------------------------------------------
 * SMS
 *---------------------------------------------------------------
 *
 * An thesis project that allows AMI to get a jumpstart in managing
 * their application, training and deployment processes.
 *
 * VERSION 3.0:
 * Every line of codes are re-thought, re-designed and re-developed
 * to increase the reliability and performance of this application.
 *
 * @package		HRTMS Version 3.0
 * @author		HRTMS Dev Team
 * @copyright 	You have the right to copy (c) 2012-2013
 * @license  	Wait. What?
 * @link 		http://www.github.com/jemnuine/HRTMS
 * @since     	Version 1.0
 * @why? 		RD
 * @feels 		:(
 * @filesource
 */

class Sign_up extends CI_Controller {

	/**
	 * Homepage
	 *
	 * @access	public
	 * @param	
	 * @return	void
	 */

	function __construct() {
		parent::__construct();
		$this->load->helper("url");
		$this->load->library("form_validation");
		$this->load->model('sign_up_model');
	}

	public function index() {

		$this->load->helper('registration_helper');

		//validate form input
		$this->form_validation->set_rules('firstName', 'First Name', 'required|xss_clean');
		$this->form_validation->set_rules('lastName', 'Last Name', 'required|xss_clean');
		$this->form_validation->set_rules('middleName', 'Middle Name', 'xss_clean');
		$this->form_validation->set_rules('contactNo', 'Phone', 'required|xss_clean');
		$this->form_validation->set_rules('gender', 'Gender', 'required');
		$this->form_validation->set_rules('email', 'Email Address', 'required|valid_email');
		//$this->form_validation->set_rules('email_confirm', 'Email Address Confrimation', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|xss_clean|min_length[6]|is_unique[tbl_user.username]');
		$this->form_validation->set_rules('password', 'Password', 'required|matches[cpassword]|min_length[6]');
		$this->form_validation->set_rules('cpassword', 'Password Confirmation', '');
	
		

		if ($this->form_validation->run() == true)
		{
			//$reg_id = "AMI1308-REG-0030";
			$data = array(
				'username' 		=> strtolower($this->input->post('username')),
				'email'    		=> $this->input->post('email'),
				'password' 		=> md5($this->input->post('password')),
				'first_name' 	=> $this->input->post('firstName'),
				'last_name'  	=> $this->input->post('lastName'),
				'middle_name'	=> $this->input->post('middleName'),
				'gender'		=> $this->input->post('gender'),
				'contact_no'    => $this->input->post('contactNo'),
				'date_created'	=> date('Y-m-d H:i:s')
			);
			
		}
		if ($this->form_validation->run() == true && $this->sign_up_model->register($data))
		{ 
			//check to see if we are creating the user
			//redirect them to checkout page
	 		$this->load->view('success');
	 		//echo "Success";
		}
		else
		{ 
			//display the create user form
			//set the flash data error message if there is one
			$this->data['message'] = (validation_errors() ? validation_errors() : ($this->session->flashdata('message')));
			$this->load->view('sign_up_view', $this->data);
			
		}	
	}

	function username_exists(){ 
		$username = $this->input->post('username');
		if ( $this->sign_up_model->username_exists($username) == TRUE ) {
	      echo json_encode(FALSE);
	    } else {
	      echo json_encode(TRUE);
   	 	}

   	 /*	if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
			
	   }
	   else {
		    //header( 'Location: ../dashboard' );
		}*/
	}
	
	function email_exists(){ 
		$email = $this->input->post('email');
		//$email = "jdc@mail.com";
		if ($this->sign_up_model->email_exists($email) == TRUE ) {
	      echo json_encode(FALSE); 
	    } else {
	      echo json_encode(TRUE); 
	    }
	    /*if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
			

	   }
	   else {
		    header( 'Location: ../dashboard' );
		}*/
	}
}

/* End of file sign_up.php */
/* Location: ./application/controllers/sign_up.php */