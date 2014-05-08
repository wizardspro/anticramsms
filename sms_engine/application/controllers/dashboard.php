<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Dashboard extends CI_Controller {

	/**
	 * Candidate Login
	 *
	 * @access	public
	 * @param	
	 * @return	void
	 */

	function index() {

		if($this->session->userdata('is_logged_in')) {

			$id = $this->session->userdata('user_id');
			$this->load->model('subject_model');
			$query = $this->subject_model->subject_list($id);
			$data['records'] = $query;
			$this->load->view('dashboard_view',$data);

		}
		else {


			$this->load->view('sign_in_view');	

    		
		}	
	}
}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */