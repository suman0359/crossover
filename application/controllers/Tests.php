<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tests extends MY_Controller {

	public function index(){
		$test_info['tests'] 	= $this->db->get('tests')->result_array();
		$data['main_content']	= $this->load->view('test/test_list', $test_info, TRUE);
		$this->load->view('master', $data);
	}

	public function add(){
		$form['name'] 			= '';
		$form['price'] 			= '';
		$form['button'] 		= 'Save';

		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Test` Name', 'required');
		$this->form_validation->set_rules('price', 'Test Price', 'required');

		if($this->form_validation->run()==FALSE){

			$data['main_content']	= $this->load->view('test/form', $form, TRUE);
			$this->load->view('master', $data);

		}else{
			$data['name'] 			= $this->input->post('name');
			$data['price'] 			= $this->input->post('price');

			if($this->db->insert('tests', $data)){
				$message['type'] 		= 'success';
				$message['message'] 	= 'Successfull Insert New Tests';

				$this->session->set_flashdata('notification', $message);

				redirect('tests/index');
			}
		}
	}

	public function update($test_id = ''){
		if ($test_id != '') {
		
			$testInfo = $this->db->where('id', $test_id)->get('tests')->row_array();
			$form['name'] 			= $testInfo['name'];
			$form['price'] 			= $testInfo['price'];
			$form['button'] 		= 'Update';

			$this->load->library('form_validation');
			$this->form_validation->set_rules('name', 'Test` Name', 'required');
			$this->form_validation->set_rules('price', 'Test Price', 'required');

			if($this->form_validation->run()==FALSE){

				$data['main_content']	= $this->load->view('test/edit_form', $form, TRUE);
				$this->load->view('master', $data);

			}else{
				$data['name'] 			= $this->input->post('name');
				$data['price'] 			= $this->input->post('price');

				if($this->db->where('id', $test_id)->update('tests', $data)){
					$message['type'] 		= 'success';
					$message['message'] 	= 'Successfull Insert New Tests';

					$this->session->set_flashdata('notification', $message);

					redirect('tests/index');
				}
			}
		}
	}

	public function delete($test_id=''){
		if ($test_id !=null){
			if ($this->db->where('id', $test_id)->delete('tests')){
				$message['type'] 		= 'success';
				$message['message'] 	= 'Successfull Delete Selected Test';

				$this->session->set_flashdata('notification', $message);

				redirect('tests');
			}
		}
	}

}

/* End of file Tests.php */
/* Location: ./application/controllers/Tests.php */