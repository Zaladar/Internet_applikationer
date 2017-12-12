<?php
	class User_model extends CI_Model{
		public function __construct()
		{
						$this->load->database();
		}

		public function register($hash){
			// User data array
			$data = array(
				'username' => $this->input->post('username'),
				'password' => $hash
			);
			//Cross site scripting
			$data = $this->security->xss_clean($data);
			// Insert user
			return $this->db->insert('user', $data);
		}

		public function login($username, $password){
			// Validate
			$this->db->where('username', $username);
			$result = $this->db->get('user');
			$row = $result->row_array();
			if(password_verify($password,$row['password'])&&($result->num_rows() == 1)){
  				return $result->row(0)->ID;
			}
			else {return false;}
		}

		public function verify_username($username){
			$query = $this->db->get_where('user', array('username' => $username));
			if(empty($query->row_array())){
				return true;
			} else {
				return false;
			}
		}
	}
