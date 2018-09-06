<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

 function index()
	{
		$this->load->view('login');
	}

  function admin()
  {
    $this->load->view('login_admin');
  }
}
?>
