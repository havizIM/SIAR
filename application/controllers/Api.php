<?php

  defined('BASEPATH') OR exit('No direct script access allowed');

  class Api extends CI_Controller {

    function __construct()
    {
      parent::__construct();
      $this->load->model('core');
      $this->load->model('main');
    }

    function profile_keluarga()
    {
        header('Content-Type: application/json');

        $where = array(
          'a.no_kk' => $this->session->userdata('no_kk'),
          'a.status_keluarga' => 'Kepala Keluarga'
        );

        $where1 = array(
          'no_kk' => $this->session->userdata('no_kk')
        );

        $data['keluarga'] = $this->main->show_keluarga($where)->result();
        $data['anggota'] = $this->core->select('t_anggota', $where1)->result();

        echo json_encode($data, JSON_PRETTY_PRINT);
    }

    function show_pengajuan()
    {
      header('Content-Type: application/json');

      $where = array('no_kk' => $this->session->userdata('no_kk'));
      $data['pengajuan'] = $this->main->show_pengajuan($where)->result();

      echo json_encode($data, JSON_PRETTY_PRINT);
    }

    function add_pengajuan()
    {
      $data = array(
        'no_pengajuan' => $this->core->buatKode('t_pengajuan', 'PJ', 'no_pengajuan', 11),
        'no_kk' => $this->session->userdata('no_kk'),
        'tgl_pengajuan' => date('Y-m-d'),
        'NIK' => $this->input->post('nik'),
        'nama_pengajuan' => $this->input->post('nama_pengajuan'),
        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
        'tgl_lahir' => $this->input->post('tgl_lahir'),
        'tempat_lahir' => $this->input->post('tempat_lahir'),
        'pekerjaan' => $this->input->post('pekerjaan'),
        'kewarganegaraan' => $this->input->post('kewarganegaraan'),
        'pendidikan' => $this->input->post('pendidikan'),
        'agama' => $this->input->post('agama'),
        'alamat' => $this->input->post('alamat'),
        'keperluan' => $this->input->post('keperluan'),
        'status_pengajuan' => 'Proses'
      );

      $cek = $this->core->add_data('t_pengajuan', $data);

      if($cek){
        echo "berhasil";
      } else {
        echo "gagal";
      }
    }

    function batal_pengajuan($param)
    {
      $where = array(
        'no_pengajuan' => $param
      );

      $cek = $this->core->hapus_data('t_pengajuan', $where);

      if($cek){
        echo "berhasil";
      } else {
        echo "gagal";
      }
    }

    function upload_dokumen()
    {
      $no_pengajuan = $this->input->post('no_pengajuan');
      $keterangan = $this->input->post('keterangan');

      $upload = $this->main->upload($no_pengajuan);

      // echo $upload['result'];
      if($upload['result'] == "success"){

        $data = array(
  				'no_pengajuan' => $no_pengajuan,
          'keterangan' => $keterangan,
          'foto_dokumen' => $upload['file']['file_name']
  			);

        $cek = $this->core->add_data('t_pelengkap', $data);
        if($cek){
          echo "berhasil";
        } else {
          echo "gagal";
        }
      }
    }

    function detail_pengajuan($no_pengajuan)
    {
      header('Content-Type: application/json');

      $where = array('no_pengajuan' => $no_pengajuan);
      $data['detail'] = $this->core->select('t_pengajuan', $where)->result();
      $data['pelengkap'] = $this->core->select('t_pelengkap', $where)->result();

      echo json_encode($data, JSON_PRETTY_PRINT);
    }

  }

?>
