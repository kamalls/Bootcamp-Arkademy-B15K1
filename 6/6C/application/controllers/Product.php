<?php

class Product extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Product_model');
		$this->load->model('Cashier_model');
		$this->load->model('Category_model');
	}

	public function tambahproduk() {
		$idkasir = $this->input->post('cashier');
		$kategori = $this->input->post('category');
		$produk = $this->input->post('product');
		$harga = $this->input->post('price');
		$this->Product_model->addProduct($produk, $harga, $kategori, $idkasir);
		$this->session->set_flashdata('flash', 'Ditambah');
		redirect('Home');
	}

	public function hapusproduk($idproduk){
		$this->Product_model->deleteProduct($idproduk);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('Home');
	}

	public function ubahproduk(){
		$idproduk = $this->input->post('idprodukedit');
		$idkasir = $this->input->post('cashieredit');
		$kategori = $this->input->post('categoryedit');
		$produk = $this->input->post('productedit');
		$harga= $this->input->post('priceedit');
		
		$this->Product_model->updateProduct($idproduk, $produk, $harga, $kategori, $idkasir);
		$this->session->set_flashdata('flash', 'DiUbah');
		redirect('Home');
	}

	public function edit($idproduk){
		$kasir = $this->input->post('cashieredit');
		$kategori = $this->input->post('categoryedit');
		$produk = $this->input->post('productedit');
		$harga= $this->input->post('priceedit');

		$data['allproduct'] = $this->Product_model->getProduct();
		$data['product'] = $this->Product_model->getProductIdJoin($idproduk);
		$data['cashier'] = $this->Cashier_model->getCashier();
		$data['category'] = $this->Category_model->getCategory();
		$this->load->view('home/edit', $data);
	}

	public function update(){
		$idproduk = $this->input->post('idproductedit');
		$idkasir = $this->input->post('cashieredit');
		$kategori = $this->input->post('categoryedit');
		$produk = $this->input->post('productedit');
		$harga= $this->input->post('priceedit');
		
		$this->Product_model->updateProduct($idproduk, $produk, $harga, $kategori, $idkasir);
		redirect('Home');
	}
}