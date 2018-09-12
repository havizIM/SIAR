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

    $cek = $this->core->select('t_user', $where);
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

  function cekLoginAdmin() {
		$username = $this->input->post('username');
    $password = sha1($this->input->post('password'));

    $where = array(
      'username' =>  $username,
      'password' => $password
    );


		$cek = $this->core->select('t_admin', $where);
		if($cek->num_rows() == 1){
      foreach($cek->result() as $key){
        $level = $key->level;
      }

			$session = array(
        'login' => 'Admin',
        'level' => $level
      );

			$this->session->set_userdata($session);
			echo "berhasil";
		} else {
			echo "gagal";
		}
	}

}
?>
