<?php
class Product_model extends CI_MODEL{
	public function get_product(){
      $this->db->select(" * ");
      $this->db->from("product");
      $query = $this->db->get();
      return $query->result();
     
	}

	public function get_detail($id){
      $this->db->select(" * ");
      $this->db->from("product");
      $this->db->where("id", $id);
      $query = $this->db->get();
      return $query->row();
     
	}
	public function get_category(){
	  $this->db->select(" * ");
      $this->db->from("categorie");
      $query = $this->db->get();
      return $query->result();
	}
	public function get_popular(){
	  $this->db->select(" P.*, COUNT(O.product_id) AS total");
      $this->db->from("orders AS O");
      $this->db->join("product AS P","O.product_id = P.id", "INNER");
      $this->db->group_by("O.product_id");
      $this->db->order_by('total', "DESC");

      $query = $this->db->get();
      return $query->result();
	}
}