<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bps extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('bps_model');
	}

	public function index()
	{
		$data['bps'] = $this->bps_model->get_bps();
		$data['title'] = 'BP List';	

		$this->load->view('templates/header', $data);
		$this->load->view('bps/index', $data);
		$this->load->view('templates/footer');	
	}

	public function view($bp_id)
	{
		$data['bps_item'] = $this->bps_model->get_bps($bp_id);
		if (empty($data['bps_item']))
		{
			show_404();
		}	
		$data['title'] = $data['bps_item']['CardName'];

		$this->load->view('templates/header', $data);
		$this->load->view('bps/view', $data);
		$this->load->view('templates/footer');		
	}	
	
	/* 
	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = 'Create a news item';

		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('text', 'text', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('news/create');
			$this->load->view('templates/footer');

		}
		else
		{
			$this->news_model->set_news();
			$this->load->view('news/success');
		}
	}
	*/
}

/* End of file bps.php */
/* Location: ./application/controllers/bps.php */