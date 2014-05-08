<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Quiz extends CI_Controller {

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
 		$this->load->model('quiz_model');
 	}

	function index() {

		if($this->session->userdata('is_logged_in')) {

			$this->load->view('dashboard_view');
		}
		else {

			$this->load->view('sign_in_view');	

    		
		}	
	}

	function quiz_desc(){
		$id = $this->input->post('id');
		//$id = '9';
		$data = $this->quiz_model->quiz_info($id);

		foreach ($data as $row) {
			$quizid = $row->quiz_id;
		    $quizname = $row->quiz_name;
		    $quizcategory = $row->quiz_category;
		    $quizdate = $row->quiz_date;
		    $quiztimefrom = $row->quiz_time_to;
		    $quiztimeto = $row->quiz_time_from;
		    $quizroom = $row->quiz_room;
		    $settime = $row->set_time;
		    $setdate = $row->set_date;
		    $quiznotif = $row->quiz_notifdatetime;
		    $output_string = '<table width="100%">';
		    $output_string .= '<col width="20%">
		                       <col width="5%"> 
		                       <col width="75%">
		                       <legend>Details</legend> ';
		    	$output_string .= '<tr>';
		    		$output_string .= '<td>';
		    			$output_string .= 'Quiz Name';
		    		$output_string .= '</td>';
		    		$output_string .= '<td>';
		    			$output_string .= ':';
		    		$output_string .= '</td>';
		    		$output_string .= '<td>';
		    			$output_string .= $quizname;
		    		$output_string .= '</td>';
		    	$output_string .= '</tr>';
		    	$output_string .= '<tr>';
		    		$output_string .= '<td>';
		    			$output_string .= 'Category';
		    		$output_string .= '</td>';
		    		$output_string .= '<td>';
		    			$output_string .= ':';
		    		$output_string .= '</td>';
		    		$output_string .= '<td>';
		    			$output_string .= $quizcategory;
		    		$output_string .= '</td>';
		    	$output_string .= '</tr>';
		    	$output_string .= '<tr>';
		    		$output_string .= '<td>';
		    			$output_string .= 'Date';
		    		$output_string .= '</td>';
		    		$output_string .= '<td>';
		    			$output_string .= ':';
		    		$output_string .= '</td>';
		    		$output_string .= '<td>';
		    			$output_string .= $quizdate;
		    		$output_string .= '</td>';
		    	$output_string .= '</tr>';
		    	$output_string .= '<tr>';
		    		$output_string .= '<td>';
		    			$output_string .= 'Time';
		    		$output_string .= '</td>';
		    		$output_string .= '<td>';
		    			$output_string .= ':';
		    		$output_string .= '</td>';
		    		$output_string .= '<td>';
		    			$output_string .= date('h:i A', strtotime($quiztimeto)); //.' - '. date('h:i A', strtotime($quiztimefrom));//date('h:i A', strtotime($quizdate);;
		    		$output_string .= '</td>';
		    	$output_string .= '</tr>';
		    	$output_string .= '<tr>';
		    		$output_string .= '<td>';
		    			$output_string .= 'Room';
		    		$output_string .= '</td>';
		    		$output_string .= '<td>';
		    			$output_string .= ':';
		    		$output_string .= '</td>';
		    		$output_string .= '<td>';
		    			$output_string .= $quizroom;
		    		$output_string .= '</td>';
		    	$output_string .= '</tr>';
		    	$output_string .= '<tr>';
		    		$output_string .= '<td>';
		    			$output_string .= 'Alert';
		    		$output_string .= '</td>';
		    		$output_string .= '<td>';
		    			$output_string .= ':';
		    		$output_string .= '</td>';
		    		$output_string .= '<td>';
		    			$output_string .= date('h:i A', strtotime($settime)); //.' - '. date('h:i A', strtotime($quiztimefrom));//date('h:i A', strtotime($quizdate);;
		    		$output_string .= '</td>';
		    	$output_string .= '</tr>';
		    	$output_string .= '<tr>';
		    		$output_string .= '<td>';
		    			$output_string .= ' ';
		    		$output_string .= '</td>';
		    		$output_string .= '<td>';
		    			$output_string .= ':';
		    		$output_string .= '</td>';
		    		$output_string .= '<td>';
		    			$output_string .= $setdate;
		    		$output_string .= '</td>';
		    	$output_string .= '</tr>';
		    $output_string .= '</table>';


		}
		$this->output->set_output(json_encode($output_string));

	}
	function view_quiz(){

		$id = $this->input->post('id');
		//$id = '16';
		$data = $this->quiz_model->view_quiz($id);
		$data1 = $this->quiz_model->subj_name($id);
		foreach ($data1 as $row) {
			$subj_name = $row->subject;

		}
		//$output_string = '<h3>'.$subj_name.'</h3>';
		$output_string = '<div><a class="btn btn-success" onclick="add_quiz('.$id.');">Add Task</a></div><br>';
		$output_string .= "";
		if(!$data){
			$output_string .= 'No quiz';
		}
		else{
			//$output_string .= '<div class="panel-group" id="accordion">';
			$output_string .= '<div class="offset-2"><ul class="list-group">';
			foreach($data as $row) {
			    $quizid = $row->quiz_id;
			    $quizname = $row->quiz_name;

			/*    $quizcategory = $row->quiz_category;
			    $quizdate = $row->quiz_date;
			    $quiztime = $row->quiz_time;
			    $quizroom = $row->quiz_room;
			    $quiznotif = $row->quiz_notifdatetime;*/

				
				$output_string .= '<li class="list-group-item">';
				$output_string .= '<a style="cursor:pointer" onclick=quiz_desc('.$quizid.')>'.$quizname.'</a>';	
				$output_string .= '<span class"pull-right">
									<span class="pull-right"><a class="delete_btn" style="cursor:pointer;" onclick="delete_quiz('.$quizid.');"><i class="fa fa-times"></i></a></span>
								   </span>';	
				$output_string .= '</li>';	
				/*$output_string .= '<div class="panel panel-default">';
					$output_string .= '<div class="panel-heading">';
						$output_string .= '<h4 class="panel-title">';
						$output_string .= '<a data-toggle="collapse" data-parent="#accordion"  href="#collapse_'.$quizid.'">'.$quizname;
						$output_string .= '</a>';
						$output_string .= '<span class="pull-right"><a class="delete_btn" style="cursor:pointer;" a="<?php echo $row->subjectid;?>"><i class="fa fa-times"></i></a></span>';
						$output_string .= '</h4>';
					$output_string .= '</div>';
					$output_string .= '<div id= "collapse_'.$quizid.'" class="panel-collapse collapse">';
						$output_string .= '<div class="panel-body">';
											$output_string .= '<table width="100%">
											<col width="15%">
					                        <col width="5%"> 
					                        <col width="80%">';
						$output_string .= '<legend>Details</legend>';
						$output_string .= ' <tr>
					                          <td>Category</td>
					                          <td>:</td>
					                          <td>'.$quizcategory.'</td>
					                        </tr>

					                        <tr>
					                          <td>Date</td>
					                          <td>:</td>
					                          <td>'.$quizdate.'</td>
					                        </tr>
					                        <tr>
					                          <td>Time</td>
					                          <td>:</td>
					                          <td>'.$quiztime.'</td>
					                        </tr>
					                        <tr>
					                          <td>Room</td>
					                          <td>:</td>
					                          <td>'.$quizroom.'</td>
					                        </tr>';
						$output_string .= '</table>';
						$output_string .= '</div>';
					$output_string .= '</div>';
				$output_string .= '</div>';*/
			}
			
			$output_string .= '</ul></div>';
		}
		$this->output->set_output(json_encode($output_string));
	
	}

	function delete_quiz(){

		$id = $this->input->post('id');

		$this->quiz_model->delete_quiz($id);
		echo "SUCCESSFUL";
	}

	function view_subject($id){

		
		
		if($this->session->userdata('is_logged_in')) {

			$this->load->view('subject_quiz_view');

			
		}
		else {

			$this->load->view('sign_in_view');	

    		
		}	
	}
	function add_quiz(){

		$subj_id = $this->input->post('subj_id');
		$quiz_name = $this->input->post('quiz_name');
		$quiz_category = $this->input->post('quiz_category');
		//$quiz_date = $this->input->post('quiz_date');
		$sched = $this->input->post('sched');
		//$token = $this->input->post('token');
		$smsToken = 'Kx2rxJeJH1sdcGEU3OZipf0kx0wO';
		$msg = $this->input->post('msg');
		//$quiz_time_from = $this->input->post('quiz_time_from');
		//$quiz_time_to = $this->input->post('quiz_time_to');
		//$quiz_room = $this->input->post('quiz_room');
		//$set_date = $this->input->post('set_date');
		//$set_time = $this->input->post('set_time');

		$data = array(
			'subject_id' => $subj_id,
			'quiz_name' => $quiz_name,
			'quiz_category' => $quiz_category,
			'sched' => $sched,
			'msg' => $msg,
			'token' => $smsToken,
			//'quiz_time_from' => $quiz_time_from,
			//'quiz_time_to' => $quiz_time_to,
			//'quiz_room' => $quiz_room,
			//'set_date'=> $set_date,
			//'set_time'=> $set_time,
			);
		$this->quiz_model->add_quiz($data);
		echo "SUCCESSFUL";
	}


}


/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */