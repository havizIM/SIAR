<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
 function __construct() {
   parent::__construct();
   $this->load->model('core');
   $this->load->model('main');
 }

 function index()
	{
    $login = $this->session->userdata('login');
    if($login == true){
      redirect('/main');
    }
		$this->load->view('login');
	}


  function cekLogin() {
    $no_kk = $this->input->post('no_kk');
    $password = sha1($this->input->post('password'));

    $where = array(
      'a.no_kk' =>  $no_kk,
      'a.password' => $password
    );

    $cek = $this->main->select_user($where);
    if($cek->num_rows() == 1){
      foreach($cek->result() as $key){
          $no_kk = $key->no_kk;
          $level = $key->level;
          $rtrw = $key->rtrw;
      }

      $session = array(
        'no_kk' => $no_kk,
        'rtrw' => $rtrw,
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
