<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index(){
		$this->load->view('home/login');
	}

	public function admin_login(){
		$this->load->view('home/login');
	}

	public function login() {
        if($this->session->userdata('user_logged')==TRUE){
            $msg = "You are Already Loged In!!";
            $this->session->set_flashdata('error', $msg);
            redirect('home/dashboard');
        }

        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('home/login');
        } else {

            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $this->load->model('auth_model');
            $checkdata = $this->auth_model->checklogin($username, $password);

            // echo "<pre>";
            // print_r($checkdata);
            // exit();

            if (!empty($checkdata)) {
                $userinfo = array(
                    'username' 		=> $checkdata->name,
                    'username' 		=> $checkdata->username,
                    'user_id' 		=> $checkdata->id,
                    'user_role' 	=> $checkdata->user_role,
                    'user_logged' 	=> TRUE
                );

                $this->session->set_userdata($userinfo);
                
                redirect('./');
            } else {
                $msg = "There is an error in login, Please try again!!";
                $this->session->set_flashdata('error', $msg);
                $this->load->view('home/login');
            }
        }
    }

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */