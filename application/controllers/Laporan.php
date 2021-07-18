<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller{

  public function __construct(){
    parent:: __construct();
    $this->load->model('laporan_model');
    $this->load->helper('tglIndo_helper');
    $this->load->library('pdf_report');
  }

  public function index(){
    $tgl_awal = $this->input->post('tgl_awal');
    $tgl_akhir = $this->input->post('tgl_akhir');

    $this->session->set_flashdata('tgl_awal', $tgl_awal);
    $this->session->set_flashdata('tgl_akhir', $tgl_akhir);

    if(empty($tgl_awal) || empty($tgl_akhir)){
      $data['content'] = 'laporan/laporan';
      $data['title']   = 'Laporan Peminjaman';
      $data['laporan'] = $this->laporan_model->getAllData();
    }
    else{
      $data['content'] = 'laporan/laporan';
      $data['title']   = 'Laporan Peminjaman';    
      $data['laporan'] = $this->laporan_model->filterData($tgl_awal, $tgl_akhir);
    }
    $this->load->view('dashboard', $data);
  }

  public function pdf_report(){
    if(empty($this->session->userdata('tgl_awal')) || empty($this->session->userdata('tgl_akhir'))){
      $data['laporan'] = $this->laporan_model->getAllData();
      $this->load->view('laporan/pdf_peminjaman', $data);
    }
    else{
      $data['laporan'] = $this->laporan_model->filterData($this->session->userdata('tgl_awal'), $this->session->userdata('tgl_akhir'));
      $this->load->view('laporan/pdf_peminjaman', $data);
    }
  }





}