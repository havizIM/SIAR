<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

 function index(){

   $hak_akses ="Warga";


   switch ($hak_akses) {
      case 'Warga':
        $this->load->view('warga/main');
      break;

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
?>
