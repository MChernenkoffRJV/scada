<?php
class Items_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_items($item_id = FALSE)
	{
	/*
	if ($item_id === FALSE)
	{
		$query = $this->db->get('ocrd_view');
		return $query->result_array();
	}
	*/
	$query = $this->db->get_where('oitm', array('ItemCode' => $item_id));
	return $query->row_array();
	}
}
?>