<?php 

class Admin_login extends CI_Controller
{
	 
	public function index()
	{
		$this->load->view('admin/admin_login');
	}
	public function check_admin_login() 
	{
		$user_email = $this->input->post('user_email',TRUE);
		$user_password = $this->input->post('user_password' ,TRUE);


		// passsword hash php r build in function eita diya amke age passsword ekbar print korate hbe 
		// then oi encript kora password nia amke databse e ager pass er jaygay bosate hbe 
		// pore anr bicer noto kre code likle aramse code khub valovabee encript hoe jabe 


		// $encrypt_password = password_hash($user_password, PASSWORD_DEFAULT);
		// echo $encrypt_password;
		// exit();

		$this->load->model('adminmodel');
		$user_details = $this->adminmodel->get_user_details($user_email);

		if (password_verify($user_password, $user_details->user_password)) {
			if ($user_details->user_status == 1) {

				$session_data['user_email'] = $user_details ->user_email;
				$session_data['user_name'] = $user_details ->user_name;
				$session_data['user_status'] = $user_details ->user_status; 
				$session_data['user_role'] = $user_details ->user_role;
				$session_data['user_id'] = $user_details ->user_id;
				

				$this->session->set_userdata($session_data);
				redirect('admin-dashboard');
				
				}else
				{
					$data['error_message'] = "Not a valid user";
						$this->load->view('admin/admin_login' ,$data);
					}
				} 
		
		else
		{
			// return redirect('admin');
			$data['error_message'] = "Incorrect Email or Password";
			$this->load->view('admin/admin_login' ,$data);
		}
		
	}
	public function check_admin_logout()
	{ 
		$this->session->sess_destroy();
		redirect('admin');
		//aikane ami route er address diyechi
	}




}