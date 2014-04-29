<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->helper('url');
//		$this->load->modal('search_competition');
//		$this->load->library('session');
	}

	function load_view($page, $data = NULL)
	{

		$this->load->view('header', $data);
		$this->load->view('side_bar');
		$this->load->view($page);
		$this->load->view('footer');
	}

	public function index(){

		$this->load_view('login');
	}

	function check_login()
	{
		$this->load->modal('user');
		$user = $this->user->user_select($_POST('username'));
		if ($user) 
		{
			if ($user[0]->password === md5(_POST['password'])) 
			{
				$this->load->library('session');
				$session_data = array('username' => $user[0]->username, 'login' => TRUE);
				$this->session->set_userdata( $session_data );
				// $this->session->userdata();
				$this->load_view('index');
			}
			else
			{
				echo "密码错误";
			}
			echo "用户名错误";
		}
	}

/*
	function check_session()
	{
		$this->load->library('session');
	}

	function exit_login()
	{
		$this->load->library('session');
		$this->session->unset('user');
		$this->load_view('index');
	}
*/
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */