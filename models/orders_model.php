<?php
class Orders_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_orders_for_item($item_id = FALSE)
	{
	if ($item_id === FALSE)
	{
		return false;
	}
	$this->db->select('*');
	$this->db->from('vOrders');
	$this->db->where('ItemCode', $item_id);
	$this->db->order_by('DocDate', 'desc');
	$query = $this->db->get();
	return $query->result_array();
	}
	
	public function get_suppliers_for_item($item_id = FALSE)
	{
	if ($item_id === FALSE)
	{
		return false;
	}
	/* 	"SELECT DISTINCT cardname, t1.cardcode " . 
		"FROM orders t0 join ocrd t1 on t0.cardcode = t1.cardcode " .
		"where itemcode = \"" . $id . "\" " .
		"order by cardname";
	*/
	$this->db->distinct();
	$this->db->select('cardname, ocrd.cardcode');
	$this->db->from('orders');
	$this->db->join('ocrd', 'orders.cardcode = ocrd.cardcode');
	$this->db->where('itemcode = "'.$item_id.'"');
	$this->db->order_by('cardname');
	$query = $this->db->get();
	return $query->result_array();
	}
}
?>