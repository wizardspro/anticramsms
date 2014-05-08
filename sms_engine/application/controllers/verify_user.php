<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Verify_user extends CI_Controller {

	function __construct() {

		parent::__construct();
	}

	function index() {

		$this->load->model('sign_in_model');
		$result = $this->sign_in_model->validate();

		if(!$result || !$this->session->userdata('is_logged_in')) {

        	redirect(base_url()."sign_in");
		}
		else {
			
			redirect(base_url()."dashboard");
		}
	}
}

/* End of file verify_user.php */
/* Location: ./application/controllers/verify_user.php */