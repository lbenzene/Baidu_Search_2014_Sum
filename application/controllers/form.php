<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


	class Form extends CI_Controller {
	 

		public function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
		}

		public function test()
	 	{
	  		$this->load->helper(array('form', 'url'));
	  
	   		$this->load->view('test');
	  	}


	  	public function form()
	  	{
	  		echo $_POST['test'];
	  	}
	}
	?>
