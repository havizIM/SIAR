<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rw extends CI_Controller {

 function dashboard(){
		$this->load->view('rw/dashboard');
	}

  function halaman1(){
    $this->load->view('rw/halaman1');
  }

  function halaman2(){
    $this->load->view('rw/halaman2');
  }
}
?>
