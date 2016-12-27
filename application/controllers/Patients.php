<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patients extends CI_Controller {

	public function index(){

		$patients_info['patients'] 	= $this->db->get('patients')->result_array();
		$data['main_content']	= $this->load->view('patients/patients_list', $patients_info, TRUE);
		$this->load->view('master', $data);
	}

	public function add(){

		$form['first_name'] 		= '';
		$form['last_name'] 			= '';
		$form['username'] 			= '';
		$form['email'] 				= '';
		$form['password'] 			= '';
		$form['age'] 				= '';
		$form['weight'] 			= '';
		$form['phone'] 				= '';
		$form['address'] 			= '';
		$form['button'] 			= 'Save';

		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('first_name', 'Frist Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run()==FALSE){

			$data['main_content']	= $this->load->view('patients/form', $form, TRUE);
			$this->load->view('master', $data);

		}else{
			$data['first_name'] 		= $this->input->post('first_name');
			$data['last_name'] 			= $this->input->post('last_name');
			$data['username'] 			= $this->input->post('username');
			$data['email'] 				= $this->input->post('email');
			$data['password'] 			= md5($this->input->post('password'));
			$data['age'] 				= $this->input->post('age');
			$data['weight'] 			= $this->input->post('weight');
			$data['phone'] 				= $this->input->post('phone');
			$data['address'] 			= $this->input->post('address');

			if($this->db->insert('patients', $data)){
				$message['type'] 		= 'success';
				$message['message'] 	= 'Successfull Insert New patients';

				$this->session->set_flashdata('notification', $message);

				redirect('patients/index');
			}
		}
	}

	public function update($patients_id=''){
		$patients_info = $this->db->where('id', $patients_id)->get('patients')->row_array();
				
		$form['first_name'] 		= $patients_info['first_name'];
		$form['last_name'] 			= $patients_info['last_name'];
		$form['username'] 			= $patients_info['username'];
		$form['email'] 				= $patients_info['email'];
		$form['password'] 			= '';
		$form['age'] 				= $patients_info['age'];
		$form['weight'] 			= $patients_info['weight'];
		$form['phone'] 				= $patients_info['phone'];
		$form['address'] 			= $patients_info['address'];
		$form['button'] 			= 'Add New patients';

		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('first_name', 'Frist Name', 'required');
		$this->form_validation->set_rules('username', 'User Name', 'required');
		

		if($this->form_validation->run()==FALSE){

			$data['main_content']	= $this->load->view('patients/form', $form, TRUE);
			$this->load->view('master', $data);

		}else{
			$data['first_name'] 		= $this->input->post('first_name');
			$data['last_name'] 			= $this->input->post('last_name');
			$data['patientsname'] 			= $this->input->post('patientsname');
			$data['email'] 				= $this->input->post('email');

			if($this->input->post('password') !='') {
				$data['password'] 			= md5($this->input->post('password'));
			}

			$data['role'] 				= $this->input->post('role_id');
			$data['phone'] 				= $this->input->post('phone');
			$data['address'] 			= $this->input->post('address');

			if($this->db->where('id', $patients_id)->update('patients', $data)){
				$message['type'] 		= 'success';
				$message['message'] 	= 'Successfull Updated patients';

				$this->session->set_flashdata('notification', $message);

				redirect('patients/index');
			}
		}
	}

	public function delete($patients_id=''){
		if ($patients_id !=null){
			if ($this->db->where('id', $patients_id)->delete('patients')){
				$message['type'] 		= 'success';
				$message['message'] 	= 'Successfull Delete Selected patients';

				$this->session->set_flashdata('notification', $message);

				redirect('patients/index');
			}
		}
	}

}

/* End of file patients.php */
/* Location: ./application/controllers/patients.php */