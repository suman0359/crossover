<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public function __construct() {
        parent::__construct();

        $this->load->Model('Common_model', 'cm');
        $this->load->model('Report_model', 'rm');

        $this->user_id 		= $this->session->userdata('user_id');
        $this->user_role 	= $this->session->userdata('user_role');
    }

	public function checklogin() {
        if (!$this->session->userdata('user_logged')) {
            redirect('auth');
        }
    }

}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */