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


  function cekLogin() {
    $no_kk = $this->input->post('no_kk');
    $password = sha1($this->input->post('password'));

    $where = array(
      'no_kk' =>  $no_kk,
      'password' => $password
    );

    $cek = $this->core->select('t_user', $where);
    if($cek->num_rows() == 1){
      foreach($cek->result() as $key){
          $no_kk = $key->no_kk;
          $level = $key->level;
      }

      $session = array(
        'no_kk' => $no_kk,
        'level' => $level,
        'login' => true
      );

      $this->session->set_userdata($session);
      echo "berhasil";
    } else {
      echo "gagal";
    }
  }


  function logout()
  {
    $this->session->sess_destroy();
    redirect(base_url().'');
  }


}
?>
