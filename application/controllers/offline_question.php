<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	header ( "Content-type: text/html; charset=utf-8" );
	
	class Offline_question extends CI_Controller 
	{
		public function __construct(){
			parent::__construct();
	        date_default_timezone_set('UTC');
			$this->load->helper('url');
			$this->load->model(array('user_model','question_model'));
		}

		function load_view($page, $data = NULL)
		{
			if ( $this->session->userdata('username_offline') != NULL ) 
			{
				$session = $this->session->all_userdata();
				$session['login_offline'] = 1;
			}
			else
			{
				$session = NULL;
			}

			$this->load->view('offline/header', $session);
			$this->load->view('offline/'.$page, $data);
			$this->load->view('offline/footer');
		}

		public function index()
		{	
			$this->load_view('index');
		}

		public function AJAX()
		{	
			$this->load->view('AJAX');
		}

		public function rules()
		{
			$this->load_view('rules');
		}

		public function scores()
		{
			$data['rank'] = $this->user_model->get_offline_rank();
			$this->load_view('scores',$data);
		}

		public function login()
		{
			$this->load_view('login');
		}

		public function check_login()
		{	//test
			$username = $this->input->post('username',TRUE);
			$password = $this->input->post('password',TRUE);
			if ($this->user_model->check_user_and_password_offline($username,$password)) {
				$this->session->set_userdata('username_offline',$username);
				$data['username'] = $username;
				$this->load_view('login_success',$data);
			}	else {
				redirect('offline_question/login');
			}
		}

		public function exit_login()
		{
			if ($this->session->userdata('username_offline')!=NULL) {
				$this->session->unset_userdata('username_offline');
				$this->load_view('exit_success');
			}	else {
				redirect('offline_question/login');
			}
		}

		//答题部分
		public function start()
		{
			if ($this->session->userdata('username_offline')!=NULL) {	
				$this->load_view('select');	
			}	else {
				redirect('offline_question/login');
			}
		}

		public function questionare($mark = 0)
		{
			if (!is_numeric($mark)) $mark = 0;
			if ($mark < 0 || $mark > 9) {
				show_404();
			}	else {
				$psw = array(
						0 => '254147',
						1 => '512276',
						2 => '247854',
						3 => '324795',
						4 => '395542',
						5 => '217777',
						6 => '821114',
						7 => '321476',
						8 => '399624',
						9 => '754414');
				if ($this->session->userdata('username_offline')!=NULL) {
					if ($this->input->post('password',TRUE) != $psw[$mark]) 
						redirect('offline_question/start');
					$username = $this->session->userdata('username_offline');
					$check_data = $this->user_model->check_offline_answer_time($username,$mark);
					if ($check_data) 
						$this->load_view('already');
					else {
						$data['select'] = $this->question_model->get_offline_select_question_by_mark($mark);
						$data['blank']	= $this->question_model->get_offline_blank_question_by_mark($mark);
						if ($this->user_model->check_start_time($username,$mark) == 0)
							$this->user_model->add_start_time($username,$mark);
						$data['mark'] = $mark;
						$data['time'] = $this->user_model->check_start_time($username,$mark);
						$this->load_view('questionare',$data);	
					}
				}	else {
					redirect('offline_question/login');
				}
			}
		}

		public function check_answer($mark)
		{
			if ($this->session->userdata('username_offline')!=NULL) {
				$username = $this->session->userdata('username_offline');
				$data['total_score'] = 0;

				for($i=0; $i<10; $i++)
					$answer_data[$i]['answer'] = $this->input->post('s_answer_'.($i+1),TRUE);
				$data['total_score'] += $this->question_model->check_offline_select_answer($mark,$answer_data);

				for($i=0; $i<10; $i++)
					$answer_data[$i]['answer'] = $this->input->post('b_answer_'.($i+1),TRUE);
				$data['total_score'] += $this->question_model->check_offline_blank_answer($mark,$answer_data);
				
				if ($data['total_score'] == 10) 
					$data['total_score'] += 2;

				$check_data = $this->user_model->check_offline_answer_time($username,$mark);
				if ($check_data) 
					$this->load_view('already');
				else {
					$this->user_model->finished_offline_question($this->session->userdata('username_offline'),$mark);
					$this->user_model->add_score_offline($username,$data['total_score']);
					if ($this->user_model->check_end_time($username,$mark) == 0)
							$this->user_model->add_end_time($username,$mark);
					$this->load_view('result',$data);
				}
			}	else {
				redirect('offline_question/login');
			}
		}
	}

	/* End of file welcome.php */
	/* Location: ./application/controllers/welcome.php */