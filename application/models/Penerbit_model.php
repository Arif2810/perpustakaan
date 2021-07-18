<?php

class Penerbit_model extends CI_model{

  public function edit($id){
    $this->db->where('id_penerbit', $id);
    return $this->db->get('penerbit')->row_array();
  }

  public function update($id, $data){
    $this->db->where('id_penerbit', $id);
    $this->db->update('penerbit', $data);
  }

  public function delete($id){
    $this->db->where('id_penerbit', $id);
    $this->db->delete('penerbit');
  }

}