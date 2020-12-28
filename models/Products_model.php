<?php 

/**
 * 
 */

class Products_model extends CI_Model
{
	
		public function input_product_data(){

			$data['category_name'] = $this->input->post('category_name' , 'TRUE');
			$data['category_short_des'] = $this->input->post('category_short_des' , 'TRUE');
			$data['category_long_des'] = $this->input->post('category_long_des' , 'TRUE');

			$data['category_status'] = 1;
			
			// echo "<pre>";
			// print_r($data);
			// echo "</pre>";		

           $this->db->insert('tbl_category', $data);
           
          	 
		}
		

	public function get_all_category(){
		$data = $this->db->select('*')
					 ->from('tbl_category')
					 ->get()
					 ->result();
		return $data;



	}
	public function change_category_status($category_id, $status)
	{
		$data['category_status'] = $status;
		$this->db->where('category_id' , $category_id);
		$this->db->update('tbl_category' ,$data);

	}
	public function get_category_details($category_id)
	{
		$result = $this->db->select('*')->from('tbl_category')
					   ->where('category_id',$category_id)
					   ->get()
					   ->row();
		return $result;
	}
	public function update_category()
	{
		$data = $this->input->post(NULL,TRUE);
		$category_id = $data['category_id'];
		unset( $data['category_id']);
		$this->db->where('category_id', $category_id)->update('tbl_category',$data);

	}
	public function get_all_active_category()
	{
		$result = $this->db->select('*')
						 ->from('tbl_category')
						 ->where('category_status', 1)
						 ->get()
						 ->result();

		return $result;

	}
	private function upload_product_image()
	{
		$config['upload_path']          = './uploads/'; 
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 10000;  //kb
        $config['max_width']            = 20000;
        $config['max_height']           = 17680; 

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('product_image')) {
        	$data = $this->upload->data();
        	//ami nice path doriye diyechi
        	$image_path = "uploads/$data[file_name]";
        	return $image_path;
        }
        else
        {
        	$errors = $this->upload->display_errors();
        	print_r($errors);
        }

	}
	public function save_product()
	{
		$product_data = $this->input->post(NULL ,TRUE);
		$top_product = $this->input->post('top_product' , TRUE);

		if ($top_product == NULL) {
			$product_data['top_product'] = 0;		 
		}
		else
		{
			$product_data['top_product'] = 1;
		}


		$product_data['product_status'] = 1;
		$product_data['product_image'] = $this->upload_product_image();
		$this->db->insert('tbl_product' , $product_data);


	}
	public function get_all_products()
	{

		$data = $this->db->select('*')
						 ->from('tbl_product')
						 ->get()
						 ->result();
		return $data;
	}

	public function change_product_status($product_id, $status)
	{
		$data['product_status'] = $status;
		$this->db->where('product_id' , $product_id);
		$this->db->update('tbl_product',$data);

	}
	
	public function get_product_details($product_id)
	{
		$result = $this->db->select('*')->from('tbl_product')
					   ->where('product_id',$product_id)
					   ->get()
					   ->row();
		return $result;
	}
	public function update_product()
	{
		$data = $this->input->post(NULL,TRUE);

		// echo "<pre>";
		// print_r($data);
		$product_id = $data['product_id'];
		unset( $data['product_id']);
		$this->db->where('product_id', $product_id)->update('tbl_product',$data);

	}



	public function input_manufacturer_data()
	{
			$data['manufacturer_name'] = $this->input->post('manufacturer_name' , 'TRUE');
			$data['manufacturer_short_desc'] = $this->input->post('manufacturer_short_desc' , 'TRUE');
			$data['manufacturer_long_desc'] = $this->input->post('manufacturer_long_desc' , 'TRUE');
			$data['manufacturer_status'] = 1;
			
			// echo "<pre>";
			// print_r($data);
			// echo "</pre>";		

            $this->db->insert('tbl_manufacturer', $data);
	}
	public function get_all_manufacturer()
	{
		$data = $this->db->select('*')
						 ->from('tbl_manufacturer')
						 ->get()
						 ->result();
		return $data;

	}
	public function get_all_active_manufacturer()
	{
		$result = $this->db->select('*')
						 ->from('tbl_manufacturer')
						 ->where('manufacturer_status', 1)
						 ->get()
						 ->result();

		return $result;

	}
	public function get_all_top_product()
	{
		$result = $this->db->select('*')
						 ->from('tbl_product')
						 ->where('top_product', 1)
						 ->get()
						 ->result();

		return $result;

	}
	public function select_all_invoice()
	{
		$result = $this->db->select('*')
						 ->from('tbl_order')
						 ->join('tbl_customer','tbl_customer.customer_id= tbl_order.customer_id')
						 ->join('tbl_shipping','tbl_shipping.shipping_id= tbl_order.shipping_id')
						 ->get()
						 ->result();

		return $result;

	}
}
  