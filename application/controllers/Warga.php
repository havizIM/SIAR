<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Warga extends CI_Controller {

 function dashboard(){
		$this->load->view('warga/dashboard');
	}

  function pengajuan(){
    $this->load->view('warga/pengajuan');
  }

  function profil_keluarga(){
    $this->load->view('warga/profil_keluarga');
  }
}
?>
