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
        'password' => $hash,
			);
			// Insert user
			return $this->db->insert('user', $data);
		}
		// Log user in
		public function login($username, $password){
			// Validate
			$this->db->where('username', $username);
			$result = $this->db->get('user');
      $row = $result->$row();
      if(password_verify($password,$row['password'])&&$result->num_rows() == 1){
  				return $result->row(0)->ID;
			}
      else {return false;}
		}
		// Check username exists
		public function check_username_exists($username){
			$query = $this->db->get_where('user', array('username' => $username));
			if(empty($query->row_array())){
				return true;
			} else {
				return false;
			}
		}
	}
