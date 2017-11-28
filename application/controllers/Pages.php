<?php
    class Pages extends CI_Controller {
      public function view($page = 'home'){
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
          show_404();
        }
        $data['title'] = ucfirst($page);

        $this->load->view('templates/header');
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer');
      }
/*
  		public function calendar(){
        $this->load->view('header');
        $this->load->view('calendar');
        $this->load->view('footer');
      }
      public function recipies(){
        $this->load->view('header');
        $this->load->view('recipies');
        $this->load->view('footer');
      }
      public function meatballs(){
        $this->load->view('header');
        $this->load->view('meatballs');
        $this->load->view('footer');
      }
      public function meatballs(){
        $this->load->view('header');
        $this->load->view('pancakes');
        $this->load->view('footer');
      }*/
    }
    ?>
