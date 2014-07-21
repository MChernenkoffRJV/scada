<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hello extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/hello
	 *	- or -  
	 * 		http://example.com/index.php/hello/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/hello/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	// public function index()
	
/*
	function Hello()
	{
		$this->load->view('welcome_message');
		// parent::CI_Controller();
	}
*/	
	function me()
	{
		$this->load->view('me_view');
	}

	function you()
	{
		$this->load->view('you_view');
	}
}

/* End of file hello.php */
/* Location: ./application/controllers/hello.php */