<?php
    class Pages extends CI_Controller {
      public function __construct() {
        //Load helper and library.
        parent::__construct();
        //$this->load->helper('url');
      }
      public function view($page = 'home'){
        echo (APPPATH.'views/pages/'.$page.'.php');
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                echo (APPPATH.'views/pages/'.$page.'.php');
                show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
      }
}
?>
