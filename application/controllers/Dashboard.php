<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{

  public function __construct(){
    parent:: __construct();
    $this->load->model('dashboard_model');
  }

  public function index(){
    $this->security_model->getSecurity();
    $data['content'] = 'home';
    $data['title']   = 'Dashboard';
    $data['anggota'] = $this->dashboard_model->countAnggota();
    $data['buku'] = $this->dashboard_model->countBuku();
    $data['peminjaman'] = $this->dashboard_model->countPeminjaman();
    $data['pengembalian'] = $this->dashboard_model->countPengembalian();

    $this->load->view('dashboard', $data);
  }


}