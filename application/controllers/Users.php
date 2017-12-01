<?php
class Users extends CI_Controller{

  // Register user
  public function register(){
    $data['title'] = 'Registration';
    $this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
    $this->form_validation->set_rules('password', 'Password', 'required');
    if($this->form_validation->run() === FALSE){
      $this->load->view('templates/header');
      $this->load->view('users/register', $data);
      $this->load->view('templates/footer');
    } else {
      // Encrypt password
      $hash = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
      $this->user_model->register($hash);
      // Set message
      $this->session->set_flashdata('user_registered', 'You are now registered and can log in');
      redirect('home');
    }
  }
  // Log in user
  public function login(){
    $data['title'] = 'Login';
    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');
    if($this->form_validation->run() === FALSE){
      $this->load->view('templates/header');
      $this->load->view('users/login', $data);
      $this->load->view('templates/footer');
    } else {

      // Get username
      $username = $this->input->post('username');
      //get let model handle ocmpare
      $password = $this->input->post('password');
      // Login user
      $ID = $this->user_model->login($username, $password);
      if($ID){
        // Create session
        $user_data = array(
          'ID' => $ID,
          'username' => $username,
          'logged_in' => true
        );
        $this->session->set_userdata($user_data);
        // Set message
        $this->session->set_flashdata('user_loggedin', 'You are now logged in');
        redirect('home');
      } else {
        // Set message
        $this->session->set_flashdata('login_failed', 'Login is invalid');
        redirect('users/login');
      }
    }
  }
  // Log user out
  public function logout(){
    // Unset user data
    $this->session->unset_userdata('logged_in');
    $this->session->unset_userdata('ID');
    $this->session->unset_userdata('username');
    // Set message
    $this->session->set_flashdata('user_loggedout', 'You are now logged out');
    redirect('users/login');
  }
  // Check if username exists
  public function check_username_exists($username){
    $this->form_validation->set_message('check_username_exists', 'That username is taken. Please choose a different one');
    if($this->user_model->check_username_exists($username)){
      return true;
    } else {
      return false;
    }
  }
}
?>
