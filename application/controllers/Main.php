<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

 function index(){
   $login ="";
   $hak_akses ="Rt";

   if ($login == 'user') {
     $this->load->view('warga/main');
   }else {
     switch ($hak_akses) {

        case 'Rt':
          $this->load->view('rt/main');
        break;

        case 'Rw':
          $this->load->view('rw/main');
        break;

        default:

        break;
     }
   }
	}
}
?>
