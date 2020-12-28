<?php 

/**
 * 
 
 
 */ 
class Adminmodel extends CI_Model 
{ 
	



	public function get_user_details($user_email)
	{
		$user_details = $this->db->select('*')
							 ->from('tbl_user')
							 ->where('user_email',$user_email)
							 ->get()
							 ->row();
		return $user_details;
	}
	public function get_user($user_id)
	{
		$user_details = $this->db->select('*')
							 ->from('tbl_user')
							 ->where('user_id',$user_id)
							 ->get()
							 ->row();
		return $user_details;
	}

	public function input_user_details()
	{
		// $new_user = $this->db->insert()


			$data['user_name'] = $this->input->post('user_name' , 'TRUE');
			$data['user_email'] = $this->input->post('user_email' , 'TRUE');

// aikane ami databasee password encrpt krechi 
			$password = $this->input->post('user_password' , 'TRUE');
			$encrypted_password = password_hash($password, PASSWORD_DEFAULT);
			$data['user_password'] = $encrypted_password;


			$data['user_role'] = 1;
			$data['user_status'] = 1;
			// $data['re_pass'] = $this->input->post('re_pass' , 'TRUE');
		

           $this->db->insert('tbl_user', $data);
          	 



	}
	public function select_all_published_category()
	{
		$result = $this->db->select('*')
						 ->from('tbl_category')
						 ->where('category_status', 1)
						 ->get()
						 ->result(); 

		return $result;

	}
	public function select_all_published_manufacturer()
	{
		$result = $this->db->select('*')
						 ->from('tbl_manufacturer')
						 ->where('manufacturer_status', 1)
						 ->get()
						 ->result();

		return $result;

	}

}