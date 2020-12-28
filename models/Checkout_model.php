<?php 

/**
 * 
 */
class Checkout_model extends CI_Model
{
	
	public function save_customer_info()
	{
		$data=array();
		$data['customer_name'] = $this->input->post('customer_name');
		$data['email_address'] = $this->input->post('email_address');
		$data['password'] = md5($this->input->post('password'));


		$this->db->insert('tbl_customer',$data);
		$customer_id = $this->db->insert_id();
		return $customer_id;

	}
	public function get_customer_details($email_address)
	{
		$customer_details = $this->db->select('*')
							 ->from('tbl_customer')
							 ->where('email_address',$email_address)
							 ->get()
							 ->row();
		return $customer_details;
	}


	public function update_billing_info()
	{
		$data = array();
		$data['customer_name'] = $this->input->post('customer_name');
		$data['email_address'] = $this->input->post('email_address');
		$data['mobile_number'] = $this->input->post('mobile_number');
		$data['address'] = $this->input->post('address');
		$data['city'] = $this->input->post('city');
		$data['zip_code'] = $this->input->post('zip_code');
		$data['country'] = $this->input->post('country');

		$customer_id = $this->input->post('customer_id');
		$this->db->where('customer_id',$customer_id);
		$this->db->update('tbl_customer',$data);



	}
	public function select_customer_by_id($customer_id)
	{
		$customer_info = $this->db->select('*')
						 ->from('tbl_customer')
						 ->where('customer_id',$customer_id)
						 ->get()
						 ->row();


				return $customer_info;
	}
	public function update_shipping_info()
	{
		$data = array();
		$data['customer_name'] = $this->input->post('customer_name');
		$data['email_address'] = $this->input->post('email_address');
		$data['mobile_number'] = $this->input->post('mobile_number');
		// $data['address'] = $this->input->post('address');
		$data['city'] = $this->input->post('city');
		$data['zip_code'] = $this->input->post('zip_code');
		$data['fax_num'] = $this->input->post('fax_num');
		$data['house_number'] = $this->input->post('house_number');
		$data['country'] = $this->input->post('country');
		$data['state'] = $this->input->post('state');



		$this->db->insert('tbl_shipping',$data);
		$shipping_id = $this->db->insert_id();
		return $shipping_id;

		// $sdata= array();
		// $sdata['customer_id'] = $shipping_id;
		// $this->session->set_userdata($sdata);
		// redirect('/Payment');




		// $customer_id = $this->input->post('customer_id');
		// $this->db->where('customer_id',$customer_id);
		// $this->db->update('tbl_shipping',$data);
	}


	// public function shipping_by_id($customer_id)
	// {
	// 	$customer_info = $this->db->select('*')
	// 					 ->from('tbl_shipping')
	// 					 ->where('customer_id',$customer_id)
	// 					 ->get()
	// 					 ->row();


	// 			return $customer_info;
	// }

	public function payment_info()
	{
		$data = array();
		$data['payment_method'] = $this->input->post('payment_method');
		$this->db->insert('tbl_payment',$data);
		$payment_id = $this->db->insert_id();
		return $payment_id;		

	}
	public function save_order_info($odata)
	{
		$this->db->insert('tbl_order',$odata);
		$payment_id = $this->db->insert_id();
		return $payment_id;	

	}

	public function save_order_details($od_data)
	{
		$this->db->insert('tbl_order_details',$od_data);
		$payment_id = $this->db->insert_id();
		return $payment_id;	

	}



}