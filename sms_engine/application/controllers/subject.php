<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Subject extends CI_Controller {

	/**
	 * Candidate Login
	 *
	 * @access	public
	 * @param	
	 * @return	void
	 */
	
	public function __construct()
 	{
 		parent::__construct();
 		$this->load->model('subject_model');
 	}

	function index() {

		if($this->session->userdata('is_logged_in')) {

			$this->load->view('dashboard_view');
		}
		else {

			$this->load->view('sign_in_view');	

    		
		}	
	}

	function add_subject(){

		$id = $this->input->post('id');
		$subj_name = $this->input->post('subj_name');
		$prof = $this->input->post('prof');
		$subj_day = $this->input->post('subj_day');
		$subj_time = $this->input->post('subj_time');
		$subj_room = $this->input->post('subj_room');
		$subj_end = $this->input->post('subj_end');

		$data = array(
			'userid' => $id,
			'subject' => $subj_name,
			'profname' => $prof,
			'day' => $subj_day ,
			'time' => $subj_time,
			'room' => $subj_room ,
			'endclass'=>$subj_end,
			);
		$this->subject_model->add_subject($data);
		echo "SUCCESSFUL";
	}

	function delete_subject(){

		$id = $this->input->post('id');

		$this->subject_model->delete_subject($id);
		echo "SUCCESSFULL";
	}

	function view_subject($id){

		
		
		if($this->session->userdata('is_logged_in')) {

			$this->load->view('subject_quiz_view');

			
		}
		else {

			$this->load->view('sign_in_view');	

    		
		}	
	}


}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */