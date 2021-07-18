<?php

class Pengembalian_model extends CI_Model{

  public function get_data_pengembalian(){
    $this->db->select('pengembalian.*, anggota.nama_anggota as nama_anggota, buku.judul_buku as judul_buku');
    $this->db->from('pengembalian');
    $this->db->join('anggota', 'anggota.id_anggota = pengembalian.id_anggota');
    $this->db->join('buku', 'buku.id_buku = pengembalian.id_buku');
    $this->db->order_by('id_pengembalian', 'DESC');
    return $this->db->get();
  }




}