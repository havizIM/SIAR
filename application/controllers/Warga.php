<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Warga extends CI_Controller {

 function dashboard(){
		$this->load->view('warga/dashboard');
	}

  function halaman1(){
    $this->load->view('warga/halaman1');
  }

  function halaman2(){
    $this->load->view('warga/halaman2');
  }
}
?>
