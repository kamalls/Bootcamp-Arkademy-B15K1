<?php

class Home extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Product_model');
		$this->load->model('Cashier_model');
		$this->load->model('Category_model');
	}

	public function index()
	{
		$data['product'] = $this->Product_model->getProduct();
		$data['cashier'] = $this->Cashier_model->getCashier();
		$data['category'] = $this->Category_model->getCategory();

		$this->load->view('home/home', $data);
	}
}