<?php

class Security_model extends CI_model{

  public function getSecurity(){
    $username = $this->session->userdata('username');

    if(empty($username)){
      $this->session->sess_destroy();
      redirect('login');
    }
  }
}