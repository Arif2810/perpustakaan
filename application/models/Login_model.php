<?php

class Login_model extends CI_Model{

  public function proses_login($user, $pass){
    $password = md5($pass);

    $user = $this->db->where('username', $user);
    $pass = $this->db->where('password', $password);
    $query = $this->db->get('users');

    if($query->num_rows() > 0){
      foreach($query->result() as $row){
        $sess = array(
          'id'       => $row->id,
          'nama'     => $row->nama,
          'username' => $row->username,
          'password' => $row->password,
          'level'    => $row->level
        );
        $this->session->set_userdata($sess);
      }
      redirect('dashboard');
    }
    else{
      $this->session->set_flashdata('info', '<div class="alert alert-danger" role="alert">Login gagal, Silahkan periksa username dan password</div>');
      redirect('login');
    }
  }

}