<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Items extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('items_model');
		$this->load->model('orders_model');
	}

/*
	public function index()
	{
		$data['items'] = $this->items_model->get_items();
		$data['title'] = 'Item List';	

		$this->load->view('templates/header', $data);
		$this->load->view('items/index', $data);
		$this->load->view('templates/footer');	
	}
*/
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

		$data['suppliers_items'] = $this->orders_model->get_suppliers_for_item($item_id);
		$this->load->view('items/suppliers', $data);
	
		$data['orders_items'] = $this->orders_model->get_orders_for_item($item_id);
		$this->load->view('items/orders', $data);
	
		$this->load->view('templates/footer');		
	}	
	// items/orders is routed to this function
	public function orders_for($item_id)
	{
		$data['orders_items'] = $this->orders_model->get_orders_for_item($item_id);
		$this->load->view('items/orders', $data);
	}

	// items/suppliers is routed to this function
	public function suppliers_for($item_id)
	{
		$data['suppliers_items'] = $this->orders_model->get_suppliers_for_item($item_id);
		$this->load->view('items/suppliers', $data);
	}
}
/* End of file items.php */
/* Location: ./scada/controllers/items.php */