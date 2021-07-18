<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

  public function __construct(){
    parent:: __construct();
    $this->load->model('login_model');
  }

  public function index(){
    $this->load->view('login');
  }

  public function proses_login(){
    $user = $this->input->post('username');
    $pass = $this->input->post('password');

    $this->login_model->proses_login($user, $pass);
  }

  public function logout(){
    $this->session->sess_destroy();
    redirect('login');
  }



}