<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Profile extends CI_Controller {

	/**
	 * Candidate Login
	 *
	 * @access	public
	 * @param	
	 * @return	void
	 */
	function __construct() {
		parent::__construct();
		$this->load->helper("url");
		$this->load->library("form_validation");
		$this->load->model('profile_model');
	}

	function index() {

		if($this->session->userdata('is_logged_in')) {

			$id = $this->session->userdata('user_id');
			$query = $this->profile_model->profile($id);
			$data['records'] = $query;
			$this->load->view('profile_view',$data);
		}
		else {

			$this->load->view('sign_in_view');	

    		
		}	
	}
	function edit_profile() {

		if($this->session->userdata('is_logged_in')) {

			//validate form input
			$this->form_validation->set_rules('firstName', 'First Name', 'required|xss_clean');
			$this->form_validation->set_rules('lastName', 'Last Name', 'required|xss_clean');
			$this->form_validation->set_rules('middleName', 'Middle Name', 'xss_clean');
			$this->form_validation->set_rules('contactNo', 'Phone', 'required|xss_clean');
			$this->form_validation->set_rules('gender', 'Gender', 'required');
			
			$id = $this->session->userdata('user_id');
			if ($this->form_validation->run() == true)
			{
				
				$data = array(
					'first_name' 	=> $this->input->post('firstName'),
					'last_name'  	=> $this->input->post('lastName'),
					'middle_name'	=> $this->input->post('middleName'),
					'gender'		=> $this->input->post('gender'),
					'contact_no'    => $this->input->post('contactNo'),
					'date_update'	=> date('Y-m-d H:i:s')
				);
				$this->profile_model->update_user($id,$data);
				
			}
			if ($this->form_validation->run() == true)
			{ 
				$this->data['message'] = $this->session->set_flashdata('message','<button type="button" class="close" data-dismiss="alert">&times;</button><div class="alert alert-success">Successfully Updated.</div>');
				
				redirect(base_url().'profile/edit_profile');
				//$this->load->view("success");
			}
			else
			{ 
				//display the create user form
				//set the flash data error message if there is one
				$this->data['message'] = (validation_errors() ? validation_errors() : ($this->session->flashdata('message')));
				//$this->data['message'] = $this->session->set_flashdata('message','<div class="alert alert-success">'.validation_errors().'</div>');
				
				$id = $this->session->userdata('user_id');
				$query = $this->profile_model->profile($id);
				$this->data['records'] = $query;
				$this->load->view('edit_profile_view',$this->data);	
					
			}	
			

		}
		else {

			$this->load->view('sign_in_view');	

    		
		}	
	}
	function change_pass() {

		

		
	}
}

/* End of file profile.php */
/* Location: ./application/controllers/profile.php */ 		