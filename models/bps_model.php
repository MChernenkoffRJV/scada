<?php
class Bps_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_bps($bp_id = FALSE)
	{
	if ($bp_id === FALSE)
	{
		// $this->db->select('ocrd.cardcode, ocrd.cardname, ocrd_more.link as link');
		// $this->db->from('ocrd');
		// $this->db->join('ocrd_more', 'ocrd.cardcode = ocrd_more.cardcode', 'left');
		
		// $query = $this->db->get();
		$query = $this->db->get('ocrd_view');
		return $query->result_array();
	}
	$query = $this->db->get_where('ocrd', array('CardCode' => $bp_id));
	return $query->row_array();
	}
	
	/*
	public function set_news()
	{
	$this->load->helper('url');

	$slug = url_title($this->input->post('title'), 'dash', TRUE);

	$data = array(
		'title' => $this->input->post('title'),
		'slug' => $slug,
		'text' => $this->input->post('text')
	);

	return $this->db->insert('news', $data);
	}
	*/
}
?>