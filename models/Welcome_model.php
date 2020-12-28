<?php

/**
 * 
 */
class welcome_model extends CI_Model
{
	public function all_active_product()
	{
			$result = $this->db->select('*')
						 ->from('tbl_product')
						 ->where('product_status', 1)
						 ->get()
						 ->result();

		return $result;
	}
	public function select_product_by_id($product_id)
	{	
		$product_info = $this->db->select('*')
						 ->from('tbl_product')
						 ->where('product_id',$product_id)
						 ->join('tbl_manufacturer', 'tbl_manufacturer.manufacturer_id = tbl_product.manufacturer_id')
						 ->get()
						 ->row();

						 // echo "<pre>";
						 // print_r($product_info);
				return $product_info;

	}
	public function all_active_product_by_category($category_id)
	{
		
		$result = $this->db->select('*')
						 ->from('tbl_product')
						 ->where('product_status', 1)
						 ->where('category_id', $category_id)
						 // ->join('tbl_category', 'tbl_category.category_id = tbl_product.category_id')

						 ->get()
						 ->result();

		return $result;

	}
	public function all_active_product_by_manufacturer($manufacturer_id)
	{
		
		$result = $this->db->select('*')
						 ->from('tbl_product')
						 ->where('product_status', 1)
						 ->where('manufacturer_id', $manufacturer_id)
						 // ->join('tbl_category', 'tbl_category.category_id = tbl_product.category_id')

						 ->get()
						 ->result();

		return $result;

	}
	
}