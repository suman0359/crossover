<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

	public function checklogin($username, $password){
         if(!empty ($username) && !empty($password)){
           
            $this->db->where('username', $username);
            $this->db->where('password', md5($password));
            $this->db->where('status', '1');
            $query = $this->db->get('users');
            
            if($query->num_rows() > 0){				 
               return  $query->row();
            }else{
                return NULL;
            }

        }
        else{
            return NULL;
        }
    }

    function check_username($username){
        $this->db->select('1', FALSE);
        $this->db->where('LOWER(username)=', strtolower($username));
        return $this->db->get('users')->num_rows;
    }

}

/* End of file Auth_model.php */
/* Location: ./application/models/Auth_model.php */