<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

	/**
	 * Homepage
	 *
	 * @access	public
	 * @param	
	 * @return	void
	 */

	public function index() {

		if($this->session->userdata('is_logged_in')) {

			redirect(base_url().'about');
		}
		else {

    		$this->load->view('about1');
		}	
	}
}
