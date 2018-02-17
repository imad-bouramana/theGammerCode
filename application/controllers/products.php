<?php
class Products extends CI_Controller {
	public function index(){
		$data['products'] = $this->Product_model->get_product();
		$data['contant_data'] = 'products';
	   $this->load->view("layout/main", $data);

	 }
	public function detail($id){
		$data['product'] = $this->Product_model->get_detail($id);
		$data['contant_data'] = 'detail';
	   $this->load->view("layout/main", $data);
	}
}
