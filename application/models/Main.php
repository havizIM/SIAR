<?php

  defined('BASEPATH') OR exit('No direct script access allowed');

  class Main extends CI_Model
  {
    function show_keluarga($where)
    {
      $this->db->select('a.nama, b.*');

      $this->db->from('t_anggota a');
      $this->db->join('t_keluarga b', 'b.no_kk = a.no_kk', 'left');

      $this->db->where($where);
      return $this->db->get();
    }

    function show_pengajuan($where = null)
    {
      $this->db->select('*');
      $this->db->select('(SELECT COUNT(no_pengajuan) FROM t_pelengkap WHERE t_pelengkap.no_pengajuan = t_pengajuan.no_pengajuan) as jml_pelengkap');
      $this->db->from('t_pengajuan');

      if($where != null)
      {
        $this->db->where($where);
      }

      return $this->db->get();
    }
  }

?>
