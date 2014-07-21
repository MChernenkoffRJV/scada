<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

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
	
	public function view($page='home')
	{
		$data['title'] = ucfirst($page);

		$this->load->view('templates/header', $data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer', $data);
	}
}

/* End of file hello.php */
/* Location: ./application/controllers/pages.php */