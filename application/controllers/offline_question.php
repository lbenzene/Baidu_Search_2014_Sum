<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	header ( "Content-type: text/html; charset=utf-8" );
	
	class Offline_question extends CI_Controller 
	{
		public function __construct(){
			parent::__construct();
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

		public function rules()
		{
			$this->load_view('rules');
		}

		public function scores()
		{
			$this->load_view('scores');
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
			$this->session->unset_userdata('username_offline');
			$this->load_view('exit_success');
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
				if ($this->session->userdata('username_offline')!=NULL) {
					$data['select'] = $this->question_model->get_offline_select_question_by_mark($mark);
					$data['blank']	= $this->question_model->get_offline_blank_question_by_mark($mark);
					$data['mark'] = $mark;
					$this->load_view('questionare',$data);
				}	else {
					redirect('offline_question/login');
				}
			}
		}

		public function check_answer($mark)
		{
			if ($this->session->userdata('username_offline')!=NULL) {
				$data['total_score'] = 0;

				for($i=0; $i<10; $i++)
					$check_data[$i]['answer'] = $this->input->post('s_answer_'.$i,TRUE);
				$data['total_score'] += $this->question_model->check_offline_select_answer($mark,$check_data);
				
				for($i=0; $i<10; $i++)
					$check_data[$i]['answer'] = $this->input->post('b_answer_'.$i,TRUE);
				$data['total_score'] += $this->question_model->check_offline_blank_answer($mark,$check_data);
				
				if ($data['total_score'] == 10) 
					$data['total_score'] += 2;
				$this->load_view('result',$data);
			}	else {
				redirect('offline_question/login');
			}
		}
	}

	/* End of file welcome.php */
	/* Location: ./application/controllers/welcome.php */