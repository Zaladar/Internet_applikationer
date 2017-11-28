<?php
    class Pages extends CI_Controller {
      public function view($page = 'home'){
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
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
