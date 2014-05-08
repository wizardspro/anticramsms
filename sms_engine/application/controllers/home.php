<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Homepage
	 *
	 * @access	public
	 * @param	
	 * @return	void
	 */

	public function index() {

		if($this->session->userdata('is_logged_in')) {

			redirect(base_url().'dashboard');
		}
		else {

    		$this->load->view('index');
		}	
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */