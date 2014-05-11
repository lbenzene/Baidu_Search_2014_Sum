<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	header ( "Content-type: text/html; charset=utf-8" );

	class Online_question extends CI_Controller 
	{
		public function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->model(array('user_model','question_model'));
		}

		function load_view($page, $data = NULL)
		{	
			if ( $this->session->userdata('username_online') != NULL ) 
			{
				$session = $this->session->all_userdata();
				$session['login'] = 1;
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
			$this->session->unset_userdata('username_online');
			$this->load_view('exit_success');
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

		public function questionare($mark = 0)
		{
			if (!is_numeric($mark)) $mark = 0;
			if ($mark < 0 || $mark > 5) {
				show_404();
			}	else {		
				if ($this->session->userdata('username_online')!=NULL) {
					$data['select'] = $this->question_model->get_online_select_question_by_mark($mark);
					$data['blank']	= $this->question_model->get_online_blank_question_by_mark($mark);
					$data['mark'] = $mark;
					$this->load_view('questionare',$data);
				}	else {
					redirect('online_question/login');
				}
			}
		}

		public function check_answer($mark)
		{
			if ($this->session->userdata('username_online')!=NULL) {
				//$check_data = $this->input->post('data',TRUE)
				$data['total_score'] = 0;
				$data['total_score'] += $this->question_model->check_online_select_answer($mark,$check_data);
				$data['total_score'] += $this->question_model->check_online_blank_answer($mark,$check_data);
				if ($data['total_score'] == 10) 
					$data['total_score'] += 2;
				$this->load_view('result',$data);
			}	else {
				redirect('online_question/login');
			}
		}
	}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */