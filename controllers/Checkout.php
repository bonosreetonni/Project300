<?php

class Checkout extends CI_Controller
{
	
	public function check_out()
	{
		$data = array();
		$data['title'] = 'Checkout';
		$data['slider'] ='';
		// $data['product_info'] = $this->cart_model->select_product_by_id($product_id);
		$data['featured_product'] = $this->load->view('pages/check_out',$data,true);
		// $data['catagory']= $this->load->view('pages/catagory','',true);
		// $data['recommend']=  $this->load->view('pages/recommend','',true);
		$data['catagory']='';
		$data['manufacturer']='';
		$data['price_range']='';
		$data['recommend']='';
		$this->load->view('master',$data);
	}

	public function customer_registration()
	{
		
		$customer_id = $this->checkout_model->save_customer_info();

		$sdata =array();
		$sdata['customer_name']= $this->input->post('customer_name');
		$sdata['customer_id']= $customer_id;
		$this->session->set_userdata($sdata);
		redirect('/Billing');


	}
	public function customer_login()
	{
		$email_address = $this->input->post('email_address',TRUE);
		$password = $this->input->post('password',TRUE);
		$encrypt_password = md5($password);
		$customer_details = $this->checkout_model->get_customer_details($email_address);
		if ($encrypt_password == $customer_details->password) {			
			$session_data['email_address'] = $customer_details->email_address;
				$session_data['password'] = $customer_details->password;

				$this->session->set_userdata($session_data);
				redirect('Billing');
			
		}
		else
		{
			echo"vul oise ";

		}
		


				
	

// $user_email = $this->input->post('user_email',TRUE);
// 		$user_password = $this->input->post('user_password' ,TRUE);
// //aikane ami database ew md5 korechi password input dear smy ,,
// 		$encrypt_password = md5($user_password);
// 		$user_details = $this->adminmodeltwo->get_user_details($user_email);

// 		if ($encrypt_password == $user_details->user_password) {
// 					if ($user_details->user_status == 1) {

// 				$session_data['user_email'] = $user_details ->user_email;
// 				$session_data['user_status'] = $user_details ->user_status;
// 				$session_data['user_role'] = $user_details ->user_role;
// 				$session_data['user_id'] = $user_details ->user_id;
				

// 				$this->session->set_userdata($session_data);
// 				redirect('Authority-dashboard');
				
// 				}
// 				else
// 				{
// 					$data['error_message'] = "Not a valid user";
// 						$this->load->view('back_endtwo/authority_login' ,$data);
// 					}
// 				}
		
// 		else
// 		{
// 			$data['error_message'] = "Incorrect Email or Password";
// 		 	$this->load->view('back_endtwo/authority_login' ,$data);
// 		}






	}
	public function update_billing()
	{

		$this->checkout_model->update_billing_info();
		redirect('/Shipping');
	}
	// public function login()
	// {
	// 	$data = array();
	// 	$data['slider'] =$this->load->view('pages/slider','',true);
	// 	$data['title'] = "Home | E-Shopper";
	// 	$data['all_active_product'] = $this->welcome_model->all_active_product();
	// 	$data['featured_product'] = $this->load->view('pages/featured_product',$data,true);
	// 	$data['catagory']= $this->load->view('pages/catagory','',true);
	// 	$data['recommend']= $this->load->view('pages/recommend','',true);
	// 	$this->load->view('master',$data);
		
	// }
	public function billing()
	{
		$data = array();
		$data['title'] ='Checkout';
		$data['slider'] ='';
		$customer_id = $this->session->userdata('customer_id');
		$data['customer_info'] = $this->checkout_model->select_customer_by_id($customer_id);
		$data['featured_product'] = $this->load->view('pages/billing',$data,true);
		// $data['catagory']= $this->load->view('pages/catagory','',true);
		// $data['recommend']=  $this->load->view('pages/recommend','',true);
		$data['catagory']='';
		$data['manufacturer']='';
		$data['price_range']='';
		$data['recommend']='';
		$this->load->view('master',$data);
	}
	public function shipping()
	{
		$data = array();
		$data['title'] ='Checkout';
		$data['slider'] ='';
		// $customer_id = $this->session->userdata('customer_id');
		// $data['customer_info'] = $this->checkout_model->shipping_by_id($customer_id);
		$data['featured_product'] = $this->load->view('pages/shipping',$data,true);
		$data['catagory']='';
		$data['manufacturer']='';
		$data['price_range']='';
		$data['recommend']='';
		$this->load->view('master',$data);
	}
	public function shipping_info()
	{
		$shipping_id = $this->checkout_model->update_shipping_info();
		$sdata= array();
		$sdata['shipping_id'] = $shipping_id;
		$this->session->set_userdata($sdata);
		redirect('Payment');

	}
	public function payment()
	{
		$data = array();
		$data['title'] ='Checkout';
		$data['slider'] ='';
		// $data['product_info'] = $this->cart_model->select_product_by_id($product_id);
		$data['featured_product'] = $this->load->view('pages/payment',$data,true);
		// $data['catagory']= $this->load->view('pages/catagory','',true);
		// $data['recommend']=  $this->load->view('pages/recommend','',true);
		$data['catagory']='';
		$data['manufacturer']='';
		$data['price_range']='';
		$data['recommend']='';
		$this->load->view('master',$data);
	}

	public function place_order()
	{	
		$payment_id = $this->checkout_model->payment_info();
		$sdata= array();

		$sdata['payment_id'] = $payment_id;
		$this->session->set_userdata($sdata);

		$odata = array();
		$odata['payment_id'] = $this->session->userdata('payment_id');
		$odata['shipping_id'] = $this->session->userdata('shipping_id');
		$odata['order_total'] = $this->session->userdata('total');
		$odata['customer_id'] = $this->session->userdata('customer_id');
          //jeitate ami data insert krbo                jekhan teke ami data nibo
		$order_id = $this->checkout_model->save_order_info($odata);


		//$paymet_id = $this->session->userdata('payment_id');
		// echo $payment_id . "<br>";
		// echo $shipping_id . "<br>";
		// echo $total_order."<br>";
		// echo $customer_id;
		// exit();

		$all_contents = $this->cart->contents();
		//cart er build in function

		$od_data = array();

		foreach ($all_contents as $contents) {
			
			$od_data['order_id'] = $order_id;
			$od_data['product_id'] = $contents['id'];
			$od_data['product_name'] = $contents['name'];
			$od_data['product_price'] = $contents['price'];
			$od_data['product_sales_quantity'] = $contents['qty'];
	 //jeitate ami data insert krbo                jekhan teke ami data nibo
		}
		$order_details_id = $this->checkout_model->save_order_details($od_data);


		$this->cart->destroy();
		redirect('success-mess');
		
	}

	// public function order_details()
	// {
	// 	$payment_id = $this->checkout_model->save_order_info();
	// 	$vdata= array();
	// 	$vdata['order_id'] = $order_id;
	// 	$this->session->set_userdata($vdata);
	// 	$kdata = array();
	// 	$kdata['order_id'] = $this->session->userdata('order_id');
	// 	$order_details = $this->checkout_model->save_order_details($kdata);




	// }
	public function success_mess()
	{
		
		$data = array();
		$data['title'] ='success message';
		$data['slider'] ='';
		$data['featured_product'] = $this->load->view('pages/success_mess',$data,true);
		// $data['catagory']= $this->load->view('pages/catagory','',true);
		// $data['recommend']=  $this->load->view('pages/recommend','',true);
		$data['catagory']='';
		$data['manufacturer']='';
		$data['price_range']='';
		$data['recommend']='';
		$this->load->view('master',$data);




	}


}