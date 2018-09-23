<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rw extends CI_Controller {

 function dashboard(){
		$this->load->view('rw/dashboard');
	}

  function pengajuan(){
    $this->load->view('rw/pengajuan');
  }

  function warga(){
    $this->load->view('rw/warga');
  }

  function laporan(){
    $this->load->view('rw/laporan');
  }
}
?>
