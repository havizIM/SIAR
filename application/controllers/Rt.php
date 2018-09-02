<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rt extends CI_Controller {

 function dashboard(){
		$this->load->view('rt/dashboard');
	}

  function halaman1(){
    $this->load->view('rt/halaman1');
  }

  function halaman2(){
    $this->load->view('rt/halaman2');
  }
}
?>
