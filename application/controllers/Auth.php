<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
 function __construct() {
   parent::__construct();
   $this->load->model('core');
 }

 function index()
	{
		$this->load->view('login');
	}

  function admin()
  {
    $this->load->view('login_admin');
  }

  function cekLogin() {
    $no_kk = $this->input->post('no_kk');
    $password = sha1($this->input->post('password'));

    $where = array(
      'no_kk' =>  $no_kk,
      'password' => $password
    );

    $cek = $this->core->select_info($where);
    if($cek->num_rows() == 1){
      $session = array(
        'login' => 'User'
      );

      $this->session->set_userdata($session);
      echo "berhasil";
    } else {
      echo "gagal";
    }
  }

}
?>
