<?php 

	defined('BASEPATH')  OR exit('No direct script access allowed');

class Admin_panel extends CI_Controller
{

	public function __construct()
    {
        parent::__construct();

       if (!isset($this->session->user_id) && ($this->session->user_status != 1 )) {
       	# code...
       		redirect('admin');

       }
       //aikane ami jate login na krle dashboard e na duke oitar code korsi 
                
    }
	public function show_dashboard()
	{
		$data = array();
		$user_id = $this->session->userdata('user_id');
		$data['user'] = $this->adminmodel->get_user($user_id);
		$data['all_category'] = $this->adminmodel->select_all_published_category();
		$data['manufacturer_info'] = $this->products_model->get_all_active_manufacturer();
		$data['all_active_product'] = $this->welcome_model->all_active_product();
		$data['all_invoice'] = $this->products_model->select_all_invoice();
		$data['sidebar'] = $this->load->view('admindash/sidebar',$data, TRUE);
		$data['content'] = $this->load->view('admindash/content',$data, TRUE);	
		$this->load->view('admin/admin_master' ,$data);
	}
	public function show_admin_register_form()
	{ 

		// $this->load->view('admin/register_admin_form');
		// $data = array();
		// $data['content'] =$this->load->view('admin/register_admin_form' , '' , TRUE);
		// $this->load->view('admin/admin_master', $data);

		$data = array();
		$user_id = $this->session->userdata('user_id');
		$data['user'] = $this->adminmodel->get_user($user_id);
		$data['sidebar'] = $this->load->view('admindash/sidebar',$data, TRUE);
		$data['content'] = $this->load->view('admin/register_admin_form',$data, TRUE);
		$this->load->view('admin/admin_master', $data);

	}
	public function register_new_admin()
	{
		
			$this->form_validation->set_rules('user_name', 'User name ', 'required|max_length[255]');
			$this->form_validation->set_rules('user_email', 'Email', 'required|max_length[255]|is_unique[tbl_user.user_email]');
			$this->form_validation->set_rules('user_password', 'Password', 'required|min_length[8]');
			$this->form_validation->set_rules('user_password', ' Confirm Password', 'required|min_length[8]|matches[user_password]');

			if ($this->form_validation->run()) {

// ami adminmodel autiload e load korechi  
			$this->adminmodel->input_user_details();
			$user_id = $this->session->userdata('user_id');
		$data['user'] = $this->adminmodel->get_user($user_id);
			$data['success_message'] = "Data Inserted Successfully";


			$data['sidebar'] = $this->load->view('admindash/sidebar',$data, TRUE);
			$data['content'] = $this->load->view('admin/register_admin_form',$data, TRUE);
			$this->load->view('admin/admin_master', $data);
			}
			
			else
			{
				$data['unsuccess_message'] = "Data not Inserted ,Please try again";

			    $data['sidebar'] = $this->load->view('admindash/sidebar',$data, TRUE);
			    $data['content'] = $this->load->view('admin/register_admin_form',$data, TRUE);
			    $this->load->view('admin/admin_master', $data);

			}

			


			


	}







	public function show_add_category_form()
	{

		$data = array();
		$data['sidebar'] = $this->load->view('admindash/sidebar','', TRUE);
		$data['content'] = $this->load->view('admin/show_add_category_form','', TRUE);
		$this->load->view('admin/admin_master', $data);


	}


	public function save_category()
	{


		$this->form_validation->set_rules('category_name', 'Category name ', 'required|max_length[255]');
		$this->form_validation->set_rules('category_short_des', 'Category Short Description','required');
		$this->form_validation->set_rules('category_long_des', 'Category Long Description', 'required|min_length[8]');

		if ($this->form_validation->run()){

			$this->products_model->input_product_data();

			redirect('All-Category');				

		}else
		{
			$data['success_message'] = "Please Input Data";
			$data['sidebar'] = $this->load->view('admindash/sidebar',$data, TRUE);
			$data['content'] = $this->load->view('admin/show_add_category_form',$data, TRUE);
			$this->load->view('admin/admin_master', $data);
			// redirect('Add-Category');
		}



	}

	// public function categories_data()
	// {
	// 	$this->load->view('admin/all_category');
	// }
	// public function categories_data()
	// {
	// 	$this->load->view('admin/all_category');
	// }






	public function change_category_status($category_id, $status)
	{
		$this->load->model('products_model');
		$this->products_model->change_category_status($category_id, $status);
		redirect('All-Category');
	}
	public function edit_category($category_id)
	{


		$this->load->model('products_model');

		$data['category_data'] = $this->products_model->get_category_details($category_id);

		$data['sidebar'] = $this->load->view('admindash/sidebar',$data, TRUE);
		$data['content'] = $this->load->view('admin/show_edit_category_form',$data, TRUE);
		$this->load->view('admin/admin_master', $data);

	}
	public function update_category()
	{
		$this->load->model('products_model');
		$this->products_model->update_category();
		redirect('All-Category');

	}
	public function show_all_category()
	{


		$data['all_category'] = $this->adminmodel->select_all_published_category();

		$data['sidebar'] = $this->load->view('admindash/sidebar',$data, TRUE);
		$data['content'] = $this->load->view('admin/all_category',$data, TRUE);
		$this->load->view('admin/admin_master', $data);
	}



	public function add_products()
	{
		// $this->load->model('products_model');

		$data['manufacturer_info'] = $this->products_model->get_all_active_manufacturer();	
		$data['category_info'] = $this->products_model->get_all_active_category();
		$data['sidebar'] = $this->load->view('admindash/sidebar',$data, TRUE);
		$data['content'] = $this->load->view('admin/show_add_product_form',$data, TRUE);
		$this->load->view('admin/admin_master', $data);

	}
	public function save_product() 
	{

		$this->form_validation->set_rules('product_name', 'Product name ', 'required|max_length[255]');
		$this->form_validation->set_rules('product_short_desc', 'Product Short Description','required');
		$this->form_validation->set_rules('product_long_desc', 'Product Long Description', 'required|min_length[8]');
		$this->form_validation->set_rules('product_qty', 'Product Quantity','required');
		$this->form_validation->set_rules('product_price', 'Product Price','required');


		$this->form_validation->set_rules('product_category', 'Product category','required');

		if ($this->form_validation->run()) {

			$this->products_model->save_product();
			$this->session->set_userdata('message','product saved successfully');
			$this->add_products();


		}else
		{
			$this->session->set_userdata('unseccessfullmessage','Please input data ');
			$this->add_products();
			// $data['success_message'] = "Please Input Data";
			// $data['sidebar'] = $this->load->view('admindash/sidebar',$data, TRUE);
			// $data['content'] = $this->load->view('admin/show_add_product_form',$data, TRUE);
			// $this->load->view('admin/admin_master', $data);
		}

	}
	public function show_all_products()
	{

		$products_data['all_products'] = $this->products_model->get_all_products();

			// $data['admin_maincontent'] = $this->load->view('admin/all_category',$category_data, TRUE);

		$data['sidebar'] = $this->load->view('admindash/sidebar',$products_data, TRUE);
		$data['content'] = $this->load->view('admin/all_products',$data, TRUE);
		$this->load->view('admin/admin_master', $data);

	}

	public function change_product_status($product_id,$status)
	{
		$this->load->model('products_model');
		$this->products_model->change_product_status($product_id, $status);
		$this->show_all_products();
	}
	public function edit_product($product_id)
	{

		$data['manufacturer_info'] = $this->products_model->get_all_active_manufacturer();	
		$data['category_info'] = $this->products_model->get_all_active_category();

		$data['product_data'] = $this->products_model->get_product_details($product_id);		
		$data['sidebar'] = $this->load->view('admindash/sidebar',$data, TRUE);
		$data['content'] = $this->load->view('admin/show_edit_product_form',$data, TRUE);
		$this->load->view('admin/admin_master', $data);

	}
	public function update_product()
	{


		$this->load->model('products_model');
		$this->products_model->update_product();
		redirect('All-Products');

	}




	public function show_add_manufacturer_form()
	{
		$data = array();
		$data['sidebar'] = $this->load->view('admindash/sidebar','', TRUE);
		$data['content'] = $this->load->view('admin/show_add_manufacturer_form','', TRUE);
		$this->load->view('admin/admin_master', $data);
	}
	public function save_manufacturer()
	{
		$this->form_validation->set_rules('manufacturer_name', 'Category name ', 'required|max_length[255]');
		$this->form_validation->set_rules('manufacturer_short_desc', 'Category Short Description','required');
		$this->form_validation->set_rules('manufacturer_long_desc', 'Category Long Description', 'required|min_length[8]');

		if ($this->form_validation->run()){

			$this->products_model->input_manufacturer_data();

			$this->show_all_manufacturer();				

		}else
		{
			$data['success_message'] = "Please Input Data";
			$data['sidebar'] = $this->load->view('admindash/sidebar',$data, TRUE);
			$data['content'] = $this->load->view('admin/show_add_manufacturer_form',$data, TRUE);
			$this->load->view('admin/admin_master', $data);

			// redirect('Add-Category');
		}


	}


	public function show_all_manufacturer()
	{
		$manufacturer_data['all_manufacturer'] = $this->products_model->get_all_manufacturer();

			// $data['admin_maincontent'] = $this->load->view('admin/all_category',$category_data, TRUE);

		$data['sidebar'] = $this->load->view('admindash/sidebar',$manufacturer_data, TRUE);
		$data['content'] = $this->load->view('admin/all_manufacturer',$data, TRUE);
		$this->load->view('admin/admin_master', $data);
	}
	public function product_invoice()
	{
		$data = array();
		$data['all_invoice'] = $this->products_model->select_all_invoice();

		// echo "<pre>";
		// print_r($data);
		// exit();
		$data['sidebar'] = $this->load->view('admindash/sidebar',$data, TRUE);
		$data['content'] = $this->load->view('admin/product_invoice',$data, TRUE);
		$this->load->view('admin/admin_master', $data);
	}
	public function view_invoice()
	{
		$data = array();
		$data['all_invoice'] = $this->products_model->select_all_invoice();

		// echo "<pre>";
		// print_r($data);
		// exit();
		$data['sidebar'] = $this->load->view('admindash/sidebar',$data, TRUE);
		$data['content'] = $this->load->view('admin/view_invoice',$data, TRUE);
		$this->load->view('admin/admin_master', $data);
	}


}
 	// $data = array();
		//     $data['sidebar'] = $this->load->view('admindash/sidebar','', TRUE);
		//     $data['mess'] = 'This is jasbdasd'
		//     $data['content'] = $this->load->view('admin/register_admin_form','$data', TRUE);
		//     $this->load->view('admin/admin_master', $data);