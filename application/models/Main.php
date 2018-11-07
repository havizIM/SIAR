<?php

  defined('BASEPATH') OR exit('No direct script access allowed');

  class Main extends CI_Model
  {

    function select_user($where = null)
    {
      $this->db->select('a.*, b.rtrw');

      $this->db->from('t_user a');
      $this->db->join('t_keluarga b', 'b.no_kk = a.no_kk', 'left');

      if($where != null){
        $this->db->where($where);
      }
      return $this->db->get();
    }

    function select_keluarga($where = null)
    {
      $this->db->select('*');
      $this->db->select('(SELECT COUNT(NIK) FROM t_anggota WHERE t_anggota.no_kk = t_keluarga.no_kk) as jml_anggota');
      $this->db->select('(SELECT COUNT(no_kk) FROM t_user WHERE t_user.no_kk = t_keluarga.no_kk) as jml_user');
      $this->db->from('t_keluarga');

      if($where != null){
        $this->db->where($where);
      }

      return $this->db->get();
    }

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
      $this->db->select('(SELECT COUNT(no_dokumen) FROM t_dokumen WHERE t_dokumen.no_pengajuan = t_pengajuan.no_pengajuan) as jml_dokumen');
      $this->db->from('t_pengajuan');

      if($where != null)
      {
        $this->db->where($where);
      }

      return $this->db->get();
    }

    function upload($no)
		{
			$nama_file = 'dok_'.$no;
			$config['upload_path']   = './image/dokumen';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size']      = '3048';
			$config['remove_space']  = TRUE;
			$config['file_name'] = $nama_file;

			$this->load->library('upload', $config);

			if($this->upload->do_upload('foto_dokumen') ){
			     $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			     return $return;
			} else {
      		$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
		  		return $return;
			}
		}

    function update_foto($data)
    {
			return $this->db->insert('t_pelengkap', $data);
    }

    function select_pengajuan($where = null, $between = null)
    {
      $this->db->select('a.*, b.rtrw, c.no_dokumen, c.diambil_oleh, c.keterangan');

      $this->db->from('t_pengajuan a');
      $this->db->join('t_keluarga b', 'b.no_kk = a.no_kk', 'left');
      $this->db->join('t_dokumen c', 'c.no_pengajuan = a.no_pengajuan', 'left');

      if($where != null){
        $this->db->where($where);
      }

      if($between != null){
        $this->db->where($between);
      }

      return $this->db->get();
    }

    function select_summary($where = null, $status)
    {
      $this->db->select('COUNT(no_kk) as jml_keluarga');
      $this->db->select('(SELECT COUNT(no_pengajuan) FROM t_pengajuan WHERE status_pengajuan = "'.$status.'") as jml_pengajuan');

      $this->db->from('t_keluarga');

      if($where != null){
        $this->db->where($where);
      }
      return $this->db->get();
    }

    function print_surat($where)
    {
      $this->db->select('a.*, b.*, c.rtrw');

      $this->db->from('t_dokumen a');
      $this->db->join('t_pengajuan b', 'b.no_pengajuan = a.no_pengajuan', 'left');
      $this->db->join('t_keluarga c', 'c.no_kk = b.no_kk', 'left');

      $this->db->where($where);

      return $this->db->get();
    }

    function lookup_anggota($where)
    {
      $this->db->select('a.*, b.*');

      $this->db->from('t_anggota a');
      $this->db->join('t_keluarga b', 'b.no_kk = a.no_kk', 'left');

      $this->db->where($where);

      return $this->db->get();
    }
  }

?>
