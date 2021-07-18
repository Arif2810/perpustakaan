<?php

class Anggota_model extends CI_model{

  public function id_anggota(){
    $this->db->select('RIGHT(anggota.id_anggota, 3) as code', FALSE);
    $this->db->order_by('id_anggota', 'DESC');
    $this->db->limit(1);
    $query = $this->db->get('anggota');

    if($query->num_rows() > 0){
      $data = $query->row();
      $code = intval($data->code) + 1;
    }
    else{
      $code = 1;
    }

    $codemax = str_pad($code, 3, "0", STR_PAD_LEFT);
    $coderesult = "AG" . $codemax;
    return $coderesult;
  }

  public function edit($id){
    $this->db->where('id_anggota', $id);
    return $this->db->get('anggota')->row_array();
  }

  public function update($id_anggota, $data){
    $this->db->where('id_anggota', $id_anggota);
    $this->db->update('anggota', $data);
  }

  public function delete($id){
    $this->db->where('id_anggota', $id);
    $this->db->delete('anggota');
  }





}
