<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search_competition extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
//		$this->load->modal('');
	}

	function load_view($page, $data=NULL)
	{
		// $this->load->library('session');

		$login = $this->session->userdata('login');
		if ( $login ) 
		{
			$session = $this->session->all_userdata();
		}
		else
		{
			$session = NULL;
		}
		$this->load->view('header', $session);
		// $this->load->view('side_bar');
		$this->load->view($page, $data);
		$this->load->view('footer');
	}

	public function index()
	{

		$this->load_view('index');
	}

				//!!!!!!表单验证
	public function register()
	{
//		$this->load_view('register');
		$this->load->helper(array('form', 'url'));
	  
		$this->load->library('form_validation');
		// $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]|xss_clean');
		// $this->form_validation->set_rules('password', 'Password', 'trim|required|matches[passconf]|md5');
		// $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
		// $this->form_validation->set_rules('email', 'Email', 'required');
		$reg_rules = array(
						array(
							'field' => '{{userform.username.html_name}}',
							'label' => 'lang:Username',
							'rules' => 'trim|required|min_length[5]|max_length[12]|callback_name_used()|xss_clean'), 
						array(
							'field' => '{{userform.password.html_name}}',
							'label' => 'Password',
							'rules' => 'trim|required|matches[passconf]|md5'),
		);
		$this->form_validation->set_rules($reg_rules);
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load_view('register');
		}
		else
		{
			$this->load_view('reg_success');
		}
	}

	public function signup()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

		$this->load_view('signup');
	}

	public function name_used($str)
	{
		$this->load->modal('user');
		$name_used = $this->user->find_username($str);
		if ($name_used)
		{
			$this->form_validation->set_message('username_check', 'The %s has been used.');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}


	public function rules()
	{
		$this->load_view('rules');
	}

	public function competition()
	{

		$this->load_view('start');
	}

	public function login()
	{
		$this->load_view('login');
	}

	//登录检查
	// 
	public function check_login()
	{
/*
		$this->load->modal('user');
		$username = escapeshellcmd($_POST['username']);
		$user = $this->user->get_user($username);
		if ($user) 
		{
			$password = escapeshellcmd($_POST['password']);
			if ($user[0]->password === md5($password)) 
			{
				$session_data = array('username' => $user[0]->username, 'login' => TRUE);
				$this->session->set_userdata( $session_data );
				// $this->session->userdata('login');
				$this->load_view('login_sussess');
			}
			else
			{
				$data = array('login_sussess' => FALSE, 'info' => '密码错误' );
				$this->load_view('login_error', $data);
			}
		}
		else
		{
			$data = array('login_sussess' => FALSE, 'info' => '用户名错误' );
			$this->load_view('login_error', $data);

		}
*/			//test
		$session_data = array('username' => $_POST['username'], 'login' => TRUE);
		$this->session->set_userdata( $session_data );
		// var_dump($this->session->all_userdata());
		$this->load_view('login_success');

	}

	public function exit_login()
	{
		$this->session->unset_userdata('login');
		$this->load_view('exit');
	}

			//!!!!!!答题答案传输
	public function questionare()
	{
/*
		if (isset($submit)) 
		{
			foreach ($variable as $key => $value) {
				$qst_answer[$key] = $_POST('qst_select');
			}
		}
*/
/*
		$this->load->modal('question');
		$choice_qst = $this->question->get_queston();
		$filling_qst = $this->question->get_queston();
		foreach ($choice_qst as $key => $value) {
			$data['choice_qst'][$key]['qst_content'] = $choice_qst[$key]->qst_content;
			$data['choice_qst'][$key]['qst_answerA'] = $choice_qst[$key]->qst_answerA;
			$data['choice_qst'][$key]['qst_answerB'] = $choice_qst[$key]->qst_answerB;
			$data['choice_qst'][$key]['qst_answerC'] = $choice_qst[$key]->qst_answerC;
			$data['choice_qst'][$key]['qst_answerD'] = $choice_qst[$key]->qst_answerD;
			$data['choice_qst'][$key]['qst_select'] = $choice_qst[$key]->qst_select;
		}

		foreach ($filling_qst as $key => $value) {
			$data['filling_qst'][$key]['qst_content'] = $filling_qst[$key]->qst_content;
			$data['filling_qst'][$key]['qst_answer'] = $filling_qst[$key]->qst_answer;
		}
*/
		$login = $this->session->userdata('login');
		if ( $login ) 
		{
			$session = $this->session->all_userdata();
		}
		else
		{
			$session = NULL;
		}
		$this->load->view('questionare', $session);
		$this->load->view('footer');
	}


	//  new add on March 3rd
	//  display scores and the 
	public function scores()
	{
		//methods to get scores here.
		//$data = $this->****;
		//要排列
		$this->load_view('scores');
	}

	
}

/* End of file */
