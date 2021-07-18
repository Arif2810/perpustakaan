<?php

class Pengarang_model extends CI_model{

  public function edit($id){
    $this->db->where('id_pengarang', $id);
    return $this->db->get('pengarang')->row_array();
  }

  public function update($id, $data){
    $this->db->where('id_pengarang', $id);
    $this->db->update('pengarang', $data);
  }

  public function delete($id){
    $this->db->where('id_pengarang', $id);
    $this->db->delete('pengarang');
  }




}