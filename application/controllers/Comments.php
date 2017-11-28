<?php
    class Comments extends CI_Controller {

      public function __construct(){
        parent::__construct();
        $this->load->model('Comments_model');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');

      }

      public function index(){
        $data['comments'] = $this->comments_model->get_comments();
        $this->load->view('templates/header', $data);
        $this->load->view('comments/index', $data);
        $this->load->view('templates/footer');
      }

      foreach($query->result_array() as $row){
          echo $row['someContent'];
}
?>
