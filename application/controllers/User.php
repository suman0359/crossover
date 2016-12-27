<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index(){

		$user_info['users'] 	= $this->db->select('users.*, user_role.name as user_role')->join('user_role', 'user_role.id=users.role', 'left')->get('users')->result_array();
		$data['main_content']	= $this->load->view('user/user_list', $user_info, TRUE);
		$this->load->view('master', $data);
	}

	public function add(){

		$form['first_name'] 		= '';
		$form['last_name'] 			= '';
		$form['username'] 			= '';
		$form['email'] 				= '';
		$form['password'] 			= '';
		$form['role_id'] 			= '';
		$form['phone'] 				= '';
		$form['address'] 			= '';
		$form['button'] 			= 'Add New User';

		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('first_name', 'Frist Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run()==FALSE){

			$form['role_list']			= $this->db->get('user_role')->result_array();

			$data['main_content']	= $this->load->view('user/form', $form, TRUE);
			$this->load->view('master', $data);

		}else{
			$data['first_name'] 		= $this->input->post('first_name');
			$data['last_name'] 			= $this->input->post('last_name');
			$data['username'] 			= $this->input->post('username');
			$data['email'] 				= $this->input->post('email');
			$data['password'] 			= md5($this->input->post('password'));
			$data['role'] 				= $this->input->post('role_id');
			$data['phone'] 				= $this->input->post('phone');
			$data['address'] 			= $this->input->post('address');

			if($this->db->insert('users', $data)){
				$message['type'] 		= 'success';
				$message['message'] 	= 'Successfull Insert New User';

				$this->session->set_flashdata('notification', $message);

				redirect('user/index');
			}
		}
	}

	public function update($user_id=''){
		$user_info = $this->db->where('id', $user_id)->get('users')->row_array();
				
		$form['first_name'] 		= $user_info['first_name'];
		$form['last_name'] 			= $user_info['last_name'];
		$form['username'] 			= $user_info['username'];
		$form['email'] 				= $user_info['email'];
		$form['password'] 			= '';
		$form['role_id'] 			= $user_info['role'];
		$form['phone'] 				= $user_info['phone'];
		$form['address'] 			= $user_info['address'];
		$form['button'] 			= 'Add New User';

		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('first_name', 'Frist Name', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		

		if($this->form_validation->run()==FALSE){

			$form['role_list']			= $this->db->get('user_role')->result_array();

			$data['main_content']	= $this->load->view('user/form', $form, TRUE);
			$this->load->view('master', $data);

		}else{
			$data['first_name'] 		= $this->input->post('first_name');
			$data['last_name'] 			= $this->input->post('last_name');
			$data['username'] 			= $this->input->post('username');
			$data['email'] 				= $this->input->post('email');

			if($this->input->post('password') !='') {
				$data['password'] 			= md5($this->input->post('password'));
			}

			$data['role'] 				= $this->input->post('role_id');
			$data['phone'] 				= $this->input->post('phone');
			$data['address'] 			= $this->input->post('address');

			if($this->db->where('id', $user_id)->update('users', $data)){
				$message['type'] 		= 'success';
				$message['message'] 	= 'Successfull Updated User';

				$this->session->set_flashdata('notification', $message);

				redirect('user/index');
			}
		}
	}

	public function delete($user_id=''){
		if ($user_id !=null){
			if ($this->db->where('id', $user_id)->delete('users')){
				$message['type'] 		= 'success';
				$message['message'] 	= 'Successfull Delete Selected User';

				$this->session->set_flashdata('notification', $message);

				redirect('user/index');
			}
		}
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */