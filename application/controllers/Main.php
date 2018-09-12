<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

 function index(){
   $login = $this->session->userdata('login');
   $level = $this->session->userdata('level');

   if ($login == 'User') {
     $this->load->view('warga/main');
   }else {
     switch ($level) {

        case 'Ketua RT':
          $this->load->view('rt/main');
        break;

        case 'Ketua RW':
          $this->load->view('rw/main');
        break;

        default:

        break;
     }
   }
	}
}
?>
