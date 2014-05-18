<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	header ( "Content-type: text/html; charset=utf-8" );

	class Online_question extends CI_Controller 
	{
		public function __construct(){
			parent::__construct();
	        date_default_timezone_set('UTC');
			$this->load->helper('url');
			$this->load->model(array('user_model','question_model'));
		}

		private function load_view($page, $data = NULL)
		{	
			if ( $this->session->userdata('username_online') != NULL ) 
			{
				$session = $this->session->all_userdata();
				$session['login_online'] = 1;
			}
			else
			{
				$session = NULL;
			}

			$this->load->view('online/header', $session);
			$this->load->view('online/'.$page, $data);
			$this->load->view('online/footer');
		}

		public function index()
		{
			$this->load_view('index');
		}

		public function rules()
		{
			$this->load_view('rules');
		}

		public function scores()
		{
			$data['rank'] = $this->user_model->get_online_rank();
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
			if ($this->user_model->check_user_and_password_online($username,$password)){
				$this->session->set_userdata('username_online',$username);
				$data['username'] = $username;
				$this->load_view('login_success',$data);
			}	else {
				redirect('online_question/login');
			}
		}

		public function exit_login()
		{
			if ($this->session->userdata('username_online')!=NULL) {
				$this->session->unset_userdata('username_online');
				$this->load_view('exit_success');
			}	else {
				redirect('online_question/login');
			}
		}

		//答题部分
		public function start()
		{
			if ($this->session->userdata('username_online')!=NULL) {	
				$this->load_view('select');	
			}	else {
				redirect('online_question/login');
			}
		}

		public function invalid()
		{
			$this->load_view('invalid');
		}

		public function questionare($mark = 0)
		{
			if (!is_numeric($mark)) $mark = 0;
			$l_time = time();
				//17号的
			if ( $l_time < 1400331600 || $l_time > 1400338800 ) {
				redirect('online_question/invalid');
			}
			if ($mark < 0 || $mark > 3) {
				show_404();
			}	else {		
				if ($this->session->userdata('username_online')!=NULL) {
					$username = $this->session->userdata('username_online');
					$check_data = $this->user_model->check_online_answer_time($username,$mark);
					if ($check_data) 
						$this->load_view('already');
					else {
						$data['select'] = $this->question_model->get_online_select_question_by_mark($mark);
						$data['blank']	= $this->question_model->get_online_blank_question_by_mark($mark);
						if ($this->user_model->check_start_time($username,$mark) == 0)
							$this->user_model->add_start_time($username,$mark);
						$data['mark'] = $mark;
						$data['time'] = $this->user_model->check_start_time($username,$mark);
						$this->load_view('questionare',$data);
					}
				}	else {
					redirect('online_question/login');
				}
			}
		}

		public function check_answer($mark)
		{
			if ($this->session->userdata('username_online')!=NULL) {
				$username = $this->session->userdata('username_online');
				$data['total_score'] = 0;

				for($i=0; $i<10; $i++)
					$answer_data[$i]['answer'] = $this->input->post('s_answer_'.($i+1),TRUE);
				$data['total_score'] += $this->question_model->check_online_select_answer($mark,$answer_data);
				
				for($i=0; $i<10; $i++)
					$answer_data[$i]['answer'] = $this->input->post('b_answer_'.($i+1),TRUE);
				$data['total_score'] += $this->question_model->check_online_blank_answer($mark,$answer_data);
				
				if ($data['total_score'] == 10) 
					$data['total_score'] += 2;

				$check_data = $this->user_model->check_online_answer_time($username,$mark);
				if ($check_data) 
					$this->load_view('already');
				else {
					$this->user_model->finished_online_question($this->session->userdata('username_online'),$mark);
					$this->user_model->add_score_online($username,$data['total_score']);
					if ($this->user_model->check_end_time($username,$mark) == 0)
							$this->user_model->add_end_time($username,$mark);
					$this->load_view('result',$data);
				}
			}	else {
				redirect('online_question/login');
			}
		}
	}



/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */