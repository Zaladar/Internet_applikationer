<?php
class Comments_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        public function get_comments($ID = FALSE){
          if ($ID === FALSE){
            $query = $this->db->get('comments');
                  return $query->result_array();
          }
          $query = $this->db->get_where('comments', array('ID' => $ID,
          'comment' => $comment,'recipie' => $recipie,'username' => $username));
          return $query->row_array();
        }
        public function del_comment($ID){
          $this->db->delete('mytable', array('ID' => $ID));
        }
}
