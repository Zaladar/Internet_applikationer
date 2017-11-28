<?php
class Comments_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        public function get_comments(){
          $query = $this->db->get('comments');
          return $query->result_array();      
        }
}
