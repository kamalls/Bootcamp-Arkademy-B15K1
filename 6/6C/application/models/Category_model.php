<?php

class Category_model extends CI_Model {

	public function getCategory()
	{
		$data = $this->db->query(" SELECT * FROM category ");
		return $data->result();
	}
}