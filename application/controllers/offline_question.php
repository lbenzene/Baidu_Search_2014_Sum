<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Offline_question extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->model('question_model');
//		$this->load->library('session');
	}

	function load_view($page, $data = NULL)
	{
		$login = $this->session->userdata('login');
		if ( $login ) 
		{
			$session = $this->session->all_userdata();
		}
		else
		{
			$session = NULL;
		}

		$this->load->view('offline/header', $session);
		$this->load->view('offline/side_bar');
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
		$session_data = array('username_offline' => $_POST['username']);
		$this->session->set_userdata( $session_data );
		// var_dump($this->session->all_userdata());
		$this->load_view('login_success');

	}

	public function exit_login()
	{
		$this->session->unset_userdata('login');
		$this->load_view('exit_success');
	}

	//答题部分
	public function start()
	{
		$this->load_view('select');
	}

	public function questionare($mark)
	{
		if (!is_numeric($mark)) $mark = 0;
		if ($mark < 0 || $mark > 9) {
			show_404();
		}	else {		
			if ($this->session->userdata('username_offline')!=NULL) {
				$data = $this->question_model->get_offline_question_by_mark($mark);
				$this->load_view('questionare',$data);
			}	else {
				redirect('offline_question/login');
			}
		}
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */