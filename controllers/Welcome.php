<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('welcome_model');
	}

 


	public function index()
	{
		$data = array();
		$data['slider'] =$this->load->view('pages/slider','',true);
		$data['title'] = "Home | E-Shopper"; 
		$data['all_active_product'] = $this->welcome_model->all_active_product();
		$data['featured_product'] = $this->load->view('pages/featured_product',$data,true);
		$data['catagory']= $this->load->view('pages/catagory','',true);
		$data['recommend']= $this->load->view('pages/recommend','',true);
		$this->load->view('master',$data);
	}
	public function accounts()
	{
		$data = array();
		$data['slider'] ='';
		$data['title'] = "Account | E-Shopper";
		$data['featured_product'] = "<h1 align='center';> This is a contact page</h1>";
		$data['catagory']= $this->load->view('pages/catagory','',true);
		$data['recommend']= $this->load->view('pages/recommend','',true);
		$this->load->view('master',$data);
	}

	public function category_product($category_id)
	{
		

		$data = array();
		$data['slider'] =$this->load->view('pages/slider','',true);
		$data['title'] = "Home | E-Shopper";
		$data['all_active_product_by_category'] =$this->welcome_model->all_active_product_by_category($category_id);
		$data['featured_product'] = $this->load->view('pages/category_product',$data,true);
		$data['catagory']= $this->load->view('pages/catagory','',true);
		$data['recommend']= $this->load->view('pages/recommend','',true);
		$this->load->view('master',$data);
	}
	public function manufacturer_product($manufacturer_id)
	{
		

		$data = array();
		$data['slider'] =$this->load->view('pages/slider','',true);
		$data['title'] = "Home | E-Shopper";
		$data['all_active_product_by_manufacturer'] =$this->welcome_model->all_active_product_by_manufacturer($manufacturer_id);
		$data['featured_product'] = $this->load->view('pages/manufacturer_product',$data,true);
		$data['catagory']= $this->load->view('pages/catagory','',true);
		$data['recommend']= $this->load->view('pages/recommend','',true);
		$this->load->view('master',$data);
	}


	public function product_details($product_id)
	{
		
		$data = array();
		$data['title'] = '';
		$data['slider'] ='';
		$data['product_info'] = $this->welcome_model->select_product_by_id($product_id);
		$data['featured_product'] = $this->load->view('pages/product_details',$data,true);
		$data['catagory']= $this->load->view('pages/catagory','',true);
		$data['recommend']=  $this->load->view('pages/recommend','',true);
		$this->load->view('master',$data);
	}


	
}
