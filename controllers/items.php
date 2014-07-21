<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Items extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('items_model');
	}

	public function index()
	{
		$data['items'] = $this->items_model->get_items();
		$data['title'] = 'Item List';	

		$this->load->view('templates/header', $data);
		$this->load->view('items/index', $data);
		$this->load->view('templates/footer');	
	}

	public function view($item_id)
	{
		$data['items_item'] = $this->items_model->get_items($item_id);
		if (empty($data['items_item']))
		{
			show_404();
		}	
		$data['title'] = $data['items_item']['ItemName'];

		$this->load->view('templates/header', $data);
		$this->load->view('items/view', $data);
		$this->load->view('items/links', $data);
		$this->load->view('items/suppliers', $data);
		$this->load->view('items/orders', $data);
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