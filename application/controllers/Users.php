<?php
class Users extends CI_Controller{
  // Register user
  public function register(){
    $data['title'] = 'Registration';
    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
    $this->form_validation->set_rules('password', 'Password', 'required');
    if($this->form_validation->run() === FALSE){
      $this->load->view('templates/header');
      $this->load->view('Users/register', $data);
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
      $this->load->view('Users/login', $data);
      $this->load->view('templates/footer');
    } else {

      // Get username
      $username = $this->input->post('username');
      // Get and encrypt the password pass un encrypted!!! not with md5
      $password = $this->input->post('password');
      // Login user
      $user_id = $this->user_model->login($username, $password);
      if($user_id){
        // Create session
        $user_data = array(
          'ID' => $user_id,
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
        redirect('index.php/users/login');
      }
    }
  }
  // Log user out
  public function logout(){
    // Unset user data
    $this->session->unset_userdata('logged_in');
    $this->session->unset_userdata('user_id');
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
/*
  class User extends CI_Controller{

    public function __construct() {
    parent::__construct();

    // Load form helper library
    $this->load->helper('form');

    //load helper url
    $this->load->helper('url')

    // Load form validation library
    $this->load->library('form_validation');

    // Load session library
    $this->load->library('session');

    // Load database
    $this->load->model('login_database');
    }


    /*public function register(){
      $data['title'] = 'sign up';

      $this->form_validation->set_rules('username', 'Username',
        'required|is_unique[users.username]');
      $this->form_validation->set_rules('password', 'Password', 'required');
      array(
              'required'      => 'You have not provided %s.',
              'is_unique'     => 'This %s already exists.'
      );
      if ($this->form_validation->run() == FALSE)
               {
                       $this->load->view('template regisgter');
               }
               else
               {
                       $this->load->view('formsuccess');
               }
    }
  }*/
/*
//ska ha flertalet funktioner, is logged in, register
session_start(); //we need to start session in order to access it through CI

Class User extends CI_Controller {

public function __construct() {
parent::__construct();

// Load form helper library
$this->load->helper('form');

//load helper url
$this->load->helper('url')

// Load form validation library
$this->load->library('form_validation');

// Load session library
$this->load->library('session');

// Load database
$this->load->model('login_database');
}

// Show login page
public function index() {
$this->load->view('login_form');
}

// Show registration page
public function user_registration_show() {
$this->load->view('register');//view register
}

// Validate and store registration data in database
public function new_user_registration() {
  $data = array(
  'username' => $this->input->post('username'),
  'userpassword' => $this->input->post('password')
  );
  $data = $this->security->xss_clean($data);
  $data = $this->
  $result = $this->login_database->registration_insert($data);
if ($result == TRUE) {
$data['message_display'] = 'Registration Successfully !';
$this->load->view('login_form', $data);
} else {
$data['message_display'] = 'Username already exist!';
$this->load->view('registration_form', $data);
}
}
}

// Check for user login process
public function user_login_process() {

$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
if ($this->form_validation->run() == FALSE) {
if(isset($this->session->userdata['logged_in'])){
$this->load->view('admin_page');
}else{
$this->load->view('login_form');
}
} else {
$data = array(
'username' => $this->input->post('username'),
'password' => $this->input->post('password')
);
$result = $this->login_database->login($data);
if ($result == TRUE) {

$username = $this->input->post('username');
$result = $this->login_database->read_user_information($username);
if ($result != false) {
$session_data = array(
'is_login' => $result[0]->user_name,
'email' => $result[0]->user_email,
);
// Add user data in session
$this->session->set_userdata('logged_in', $session_data);
$this->load->view('admin_page');
}
} else {
$data = array(
'error_message' => 'Invalid Username or Password'
);
$this->load->view('login_form', $data);
}
}
}

// Logout from admin page
public function logout() {

// Removing session data
$sess_array = array(
'username' => ''
);
$this->session->unset_userdata('logged_in', $sess_array);
$data['message_display'] = 'Successfully Logout';
$this->load->view('login_form', $data);
}

}
*/
?>
