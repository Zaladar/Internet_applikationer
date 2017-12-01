<?php
class Recipe_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        public function get_comments($recipe){
          $query = $this->db->get_where('comments', array('recipe' => $recipe));
          return $query->results_array();
        }
        public function del_comment($ID){
          $this->db->delete('mytable', array('ID' => $ID));
        }

        /*class Post_model extends CI_Model{
      		public function __construct(){
      			$this->load->database();
      		}

      		public function create_post($post_image){
      			$slug = url_title($this->input->post('title'));
      			$data = array(
      				'title' => $this->input->post('title'),
      				'slug' => $slug,
      				'body' => $this->input->post('body'),
      				'category_id' => $this->input->post('category_id'),
      				'user_id' => $this->session->userdata('user_id'),
      			);
      			return $this->db->insert('posts', $data);
      		}

          public function get_posts(){
      		$query = $this->db->get_where('posts', array('reipie' => $recipe));
      		return $query->row_array();
      	  }

      		public function delete_post($id){
      			$image_file_name = $this->db->select('post_image')->get_where('posts', array('id' => $id))->row()->post_image;
      			$cwd = getcwd(); // save the current working directory
      			$image_file_path = $cwd."\\assets\\images\\posts\\";
      			chdir($image_file_path);
      			unlink($image_file_name);
      			chdir($cwd); // Restore the previous working directory
      			$this->db->where('id', $id);
      			$this->db->delete('posts');
      			return true;
      		}*/
}
?>
