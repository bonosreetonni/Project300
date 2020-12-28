<?php  



class Cart_model extends CI_Model
{
	public function select_product_by_id($product_id)
	{
			$product_info = $this->db->select('*')
						 ->from('tbl_product')
						 ->where('product_id',$product_id)
						 ->get()
						 ->row();


				return $product_info;


	}
	
}