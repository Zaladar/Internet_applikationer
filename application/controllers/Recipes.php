<?php
    class Recipes extends CI_Controller {

      public function __construct(){
        parent::__construct();
        //$this->load->model('Recipe_model');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
  			$this->load->database();
      }

      public function index(){
        $data['title'] = "recipes";
        $this->load->view('templates/header', $data);
        $this->load->view('recipes/index', $data);
        $this->load->view('templates/footer');
      }

      public function view($page = 'index'){
        $data['title'] = ucfirst($page);
        $data['comments'] = $this->recipe_model->get_comments($page);
        $data['recipe'] = $page;

        if (!file_exists(APPPATH.'views/recipes/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        $this->load->view('templates/header', $data);
        $this->load->view('recipes/'.$page, $data);
        $this->load->view('recipes/comments', $data);
        $this->load->view('templates/footer', $data);
      }

      public function retrieve() {
        $result = $this->recipe_model->get_comments($data['recipe']);
        echo json_encode($result);
      }

      public function delete($ID){
        // Check login
        if(!$this->session->userdata('logged_in')){
          redirect('users/login');
        }
        $this->recipe_model->del_comment($ID);
      }

      public function create(){
        // Check login
        if(!$this->session->userdata('logged_in')){
          redirect('users/login');
        }
        $this->recipe_model->set_comments($data['recipe']);
        }
      }
?>
