<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model
{
	public function get_announcements()
	{
		$this->db->select('*')
				->from('announcements')
				->order_by('createdDt', 'DESC');

		return $this->db->get()->result();
	}

	public function get_ann_contents()
	{
		$this->db->select('*')
				->from('announcement_contents')
				->order_by('createdDt', 'desc')
				->order_by('item_no', 'asc');

		return $this->db->get()->result();
	}

	public function get_updates()
	{
		$this->db->select('*')
				->from('updates')
				->order_by('createdDt', 'desc');

		return $this->db->get()->result();
	}

	public function get_contents()
	{
		$this->db->select('*')
				->from('update_contents')
				->order_by('createdDt', 'desc')
				->order_by('item_no', 'asc');

		return $this->db->get()->result();
	}
}

?>