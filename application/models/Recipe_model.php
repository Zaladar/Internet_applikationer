<?php
class Recipe_model extends CI_Model {

        public function __construct(){
                $this->load->database();
        }

        public function get_comments($recipe){
          $query = $this->db->get_where('comments', array('recipe' => $recipe));
          return $query->result_array();
        }

        public function set_comments($recipe){
    			// User data array

    			$data = array(
            'username' => $this->session->userdata('username'),
            'recipe' => $recipe,
            'comment' => $this->input->post('comment')
    			);
          // cross site scripting
          $data = $this->security->xss_clean($data);
    			// Insert user
    			return $this->db->insert('comments', $data);
    		}

        public function del_comment($ID){
          return $this->db->delete('comments', array('ID' => $ID));
        }
}
?>
