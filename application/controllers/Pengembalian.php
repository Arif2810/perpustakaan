<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengembalian extends CI_Controller{

  public function __construct(){
    parent:: __construct();
    $this->load->model('pengembalian_model');
  }

  public function index(){
    $data['content'] = 'pengembalian/pengembalian';
    $data['title'] = 'Data Pengembalian';
    $data['pengembalian'] = $this->pengembalian_model->get_data_pengembalian()->result();
    // var_dump($data['pengembalian']);

    $this->load->view('dashboard', $data);
  }



}