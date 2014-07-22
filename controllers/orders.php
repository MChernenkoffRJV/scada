<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Orders extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('orders_model');
	}

	public function index()
	{
		$data['orders'] = $this->orders_model->get_order();
		$data['title'] = 'Orders List';	

		$this->load->view('templates/header', $data);
		$this->load->view('orders/index', $data);
		$this->load->view('templates/footer');	
	}

	public function view($order_id)
	{
		$data['orders_item'] = $this->orders_model->get_order($order_id);
		if (empty($data['orders_item']))
		{
			show_404();
		}	
		$data['title'] = $data['orders_item']['ItemName'];

		$this->load->view('templates/header', $data);
		$this->load->view('orders/view', $data);
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