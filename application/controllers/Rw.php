<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rw extends CI_Controller {

  function dashboard(){
 		$this->load->view('rw/dashboard');
 	}

   function ktp(){
     $this->load->view('rw/ktp');
   }

   function domisili(){
     $this->load->view('rw/domisili');
   }

   function kehilangan(){
     $this->load->view('rw/kehilangan');
   }

   function kematian(){
     $this->load->view('rw/kematian');
   }

   function pindah(){
     $this->load->view('rw/pindah');
   }

   function keluarga(){
     $this->load->view('rw/keluarga');
   }

   function anggota($id){
     $data['keluarga'] =
     $this->load->view('rt/anggota', $data);
   }
}
?>
