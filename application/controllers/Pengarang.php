<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengarang extends CI_Controller{

  public function __construct(){
    parent:: __construct();
    $this->load->model('pengarang_model');
  }


  public function index(){
    $data['content'] = 'pengarang/pengarang';
    $data['title']   = 'Daftar Data Pengarang';
    $data['pengarang'] = $this->db->get('pengarang')->result();

    $this->load->view('dashboard', $data);
  }

  public function tambahPengarang(){
    $data['content'] = 'pengarang/tambah_pengarang';
    $data['title']   = 'Form Tambah Pengarang';

    $this->load->view('dashboard', $data);
  }

  public function simpan(){
    $data = array(
      'nama_pengarang'  => $this->input->post('nama_pengarang'),
    );

    $query = $this->db->insert('pengarang', $data);

    if($query = true){
      $this->session->set_flashdata('info', 'Data berhasil disimpan');
      redirect('pengarang');
    }
  }

  public function edit($id){
    $data['content'] = 'pengarang/edit_pengarang';
    $data['title'] = 'Form Edit Pengarang';
    $data['pengarang'] = $this->pengarang_model->edit($id);

    $this->load->view('dashboard', $data);
  }
  
  public function update(){
    $id_pengarang = $this->input->post('id_pengarang');
    $data = array(
      'nama_pengarang'  => $this->input->post('nama_pengarang'),
    );

    $query = $this->pengarang_model->update($id_pengarang, $data);
    if($query = true){
      $this->session->set_flashdata('info', 'Data berhasil di-update');
      redirect('pengarang');
    }
  }

  public function delete($id){
    $query = $this->pengarang_model->delete($id);
    if($query = true){
      $this->session->set_flashdata('info', 'Data berhasil dihapus');
      redirect('pengarang');
    }
  }


}