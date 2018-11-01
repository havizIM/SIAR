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

      $data['pengajuan'] = $this->main->show_pengajuan()->result();

      echo json_encode($data, JSON_PRETTY_PRINT);
    }

  }

?>
