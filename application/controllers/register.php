<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

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

	public function __construct(){
		parent::__construct();

		$this->load->helper('url');
//		$this->load->modal('search_competition');
//		$this->load->library('session');
	}

	function load_view($page, $data = NULL){

		$this->load->view('header', $data);
		$this->load->view('side_bar');
		$this->load->view($page);
		$this->load->view('footer');
	}

	public function index(){

		$this->load_view('register');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */