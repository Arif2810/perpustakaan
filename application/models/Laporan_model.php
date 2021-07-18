<?php

class Laporan_model extends CI_Model{

  public function getAllData(){
    $this->db->select('*');
    $this->db->from('peminjaman');
    $this->db->join('anggota', 'anggota.id_anggota = peminjaman.id_anggota');
    $this->db->join('buku ', 'buku.id_buku  = peminjaman.id_buku');
    return $this->db->get()->result();
  }
  
  public function filterData($tgl_awal, $tgl_akhir){
    $this->db->select('*');
    $this->db->from('peminjaman');
    $this->db->join('anggota', 'anggota.id_anggota = peminjaman.id_anggota');
    $this->db->join('buku ', 'buku.id_buku  = peminjaman.id_buku');
    $this->db->where('peminjaman.tgl_pinjam >=', $tgl_awal);
    $this->db->where('peminjaman.tgl_pinjam <=', $tgl_akhir);
    return $this->db->get()->result();
  }


}