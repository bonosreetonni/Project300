<?php 

/**
 * 
 */
class Cart extends CI_Controller
{
	
	public function add_to_cart()
	{
		
		$product_id = $this->input->post('product_id',true);
// aikane product_id and qty ai nam gulo form er name value pik korar jonno use krechi 
		$qty = $this->input->post('qty',true);
		$product_info = $this->cart_model->select_product_by_id($product_id);
// aikane ami documentory teke ansi baki gula 
		$data = array(
			'id'      => $product_info->product_id,
			'qty'     => $qty,
			'price'   => $product_info->product_price,
			'name'    => $product_info->product_name,
			'options' => array('image' => $product_info->product_image)
		);

		$this->cart->insert($data);
		return redirect('show-cart');


	}
	public function show_cart()
	{
		$data = array();
		$data['title'] = 'Add Cart';
		$data['slider'] ='';
		// $data['product_info'] = $this->cart_model->select_product_by_id($product_id);
		$data['featured_product'] = $this->load->view('pages/cart_view',$data,true);
		// $data['catagory']= $this->load->view('pages/catagory','',true);
		// $data['recommend']=  $this->load->view('pages/recommend','',true);
		$data['catagory']='';
		$data['manufacturer']='';
		$data['price_range']='';
		$data['recommend']='';
		$this->load->view('master',$data);
	}
	public function delete_to_cart($rowid)
	{
		// aikane ami aita user guide er update cart teke enechei 
		$data = array(
			'rowid' => $rowid,
			'qty'   => 0
		);

		$this->cart->update($data);
		return redirect('show-cart');

	}
	public function update_cart()
	{

		$rowid = $this->input->post('rowid',true);
		$qty = $this->input->post('qty',true);
		$data = array(
			'rowid' => $rowid,
			'qty'   => $qty
		);

		$this->cart->update($data);
		return redirect('show-cart');
	}
	
}


?>