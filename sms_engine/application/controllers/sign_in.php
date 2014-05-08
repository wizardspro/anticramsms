<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Sign_in extends CI_Controller {

	/**
	 * Candidate Login
	 *
	 * @access	public
	 * @param	
	 * @return	void
	 */

	function index() {

		if($this->session->userdata('is_logged_in')) {

			//redirect($this->session->userdata('last_visit'));
			redirect(base_url()."dashboard");
		}
		else {

		/*	if($this->input->get('forgot')) {

				$data['is_forgot'] = 1;
			}
			else {

				$data['is_forgot'] = NULL;
			}*/
			$this->load->view('sign_in_view');	

    		
		}	
	}
}

/* End of file sign_in.php */
/* Location: ./application/controllers/sign_in.php */