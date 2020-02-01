<?php

class Cashier_model extends CI_Model {

	public function getCashier()
	{
		$data = $this->db->query(" SELECT * FROM cashier ");
		return $data->result();
	}
}