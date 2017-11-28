<?php
    class Comments extends CI_Controller {

      public function __construct(){
        parent::__construct();
        $this->load->model('Comments_model');
        $this->load->model('url_helper');
      }

      public function index(){
        $data['comments'] = $this->comments_model->get_comments();
      }
}
?>

foreach($query->result_array() as $row){
    echo $row['someContent'];
