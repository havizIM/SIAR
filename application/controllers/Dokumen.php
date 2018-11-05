<?php

  defined('BASEPATH') OR exit('No direct script access allowed');

  class Dokumen extends CI_Controller {

    public function __construct()
    {
      parent::__construct();
      date_default_timezone_set('Asia/Jakarta');

      $this->load->model('core');
      $this->load->model('main');
      if($this->session->userdata('login') != true)
      {
        redirect('/');
      }
    }

    function print_surat_ktp($id)
    {
      $where = array(
        'no_pengajuan' => $id
      );

      // $data = $this->m_sanksi->detail_sanksi($where)->result();

      $this->load->library('pdf');
      $pdf = new FPDF('P','mm','A4');
      $pdf->AddPage();

      $pdf->Image('image/logo.png',10,10,30,30);
      // $pdf->ln(12);
      $pdf->SetFont('Arial','B',15);
      // $pdf->Cell(80);
      $pdf->Cell(200,10,'RT. 011 / RW. 015',0,1,'C');
      $pdf->Cell(200,10,'KEL : PENJARINGAN, KEC : PENJARINGAN',0,1,'C');
      $pdf->Cell(200,10,'JAKARTA UTARA',0,1,'C');
      $pdf->ln(5);
      $pdf->Cell(190,0,'',1,0,'C');
      $pdf->ln(5);
      //
      // foreach ($data as $detail) {
      //   $nip = $detail->nip;
      //   $nama = $detail->nama;
      //   $jabatan = $detail->jabatan;
      //   $id_sanksi = $detail->id_sanksi;
      //   $tanggal = $detail->tanggal_sanksi;
      //   $jenis = $detail->jenis_sanksi;
      //   $keterangan = $detail->keterangan_sanksi;
      //
      //   if($jenis == 'SP1')
      //   {
      //     $sp = 'Surat Peringatan Pertama';
      //     $sp_next = 'akan diterbitkan Surat Peringatan Kedua';
      //   } elseif($jenis == 'SP2') {
      //     $sp = 'Surat Peringatan Kedua';
      //     $sp_next = 'akan diterbitkan Surat Peringatan Ketiga';
      //   } else {
      //     $sp = 'Surat Peringatan Ketiga';
      //     $sp_next = 'karyawan akan diberhentikan';
      //   }
      // }
      //
      $pdf->SetFont('Arial','B',13);
      $pdf->Cell(80);
      $pdf->Cell(30,5,'SURAT PENGANTAR',0,1,'C');
      $pdf->SetFont('Arial','I',10);
      $pdf->Cell(80);
      $pdf->Cell(30,5,'Nomor: ',0,1,'C');
      $pdf->ln(10);

      $pdf->SetFont('Arial','',10);
      $pdf->Cell(0,5,'Yang bertanda tangan di bawah ini, Pengurus RT/RW. 010/015 Kelurahan Penjaringan Kecamatan Penjaringan,',0,1);
      $pdf->Cell(0,5,'dengan ini menyatakan bahwa :',0,1);
      $pdf->ln(5);

      $pdf->Cell(50,5,'Nama',0,0);
      $pdf->Cell(50,5,': ',0,0);
      $pdf->ln(10);

      $pdf->Cell(50,5,'Jenis Kelamin',0,0);
      $pdf->Cell(50,5,': ',0,0);
      $pdf->ln(10);

      $pdf->Cell(50,5,'Tempat/Tgl.Lahir',0,0);
      $pdf->Cell(50,5,': ',0,0);
      $pdf->ln(10);

      $pdf->Cell(50,5,'Pekerjaan',0,0);
      $pdf->Cell(50,5,': ',0,0);
      $pdf->ln(10);

      $pdf->Cell(50,5,'Nomor KTP/KK',0,0);
      $pdf->Cell(50,5,': ',0,0);
      $pdf->ln(10);

      $pdf->Cell(50,5,'Kewarganegaraan',0,0);
      $pdf->Cell(50,5,': ',0,0);
      $pdf->ln(10);

      $pdf->Cell(50,5,'Pendidikan',0,0);
      $pdf->Cell(50,5,': ',0,0);
      $pdf->ln(10);

      $pdf->Cell(50,5,'Agama',0,0);
      $pdf->Cell(50,5,': ',0,0);
      $pdf->ln(10);

      $pdf->Cell(50,5,'Alamat',0,0);
      $pdf->Cell(50,5,': ',0,0);
      $pdf->ln(20);

      $pdf->Cell(50,5,'Maksud/Keperluan',0,0);
      $pdf->Cell(50,5,': ',0,0);
      $pdf->ln(30);
      //
      // $pdf->Cell(200,5,'Surat peringatan ini diberikan kepada saudara '.$nama.' dikarenakan karyawan yang bersangkutan',0,1);
      // $pdf->Cell(200,5,'melakukan kesalahan yakni '. $keterangan .'.',0,1);
      // $pdf->ln();
      //
      // $pdf->Cell(200,5,'Sehubungan dengan pelanggaran tersebut, perusahaan memberikan '.$sp.' dengan ketentuan',0,1);
      // $pdf->Cell(200,5,'sebagai berikut :',0,1);
      // $pdf->ln();
      //
      // $pdf->Cell(10, 5, '1. ', 0,0);
      // $pdf->Cell(190,5,'Surat peringatan ini berlaku 3 bulan sejak diterbitkan dan apabila dalam 3 bulan kedepan tidak melakukan',0,1);
      // $pdf->Cell(10, 5, '', 0,0);
      // $pdf->Cell(190,5,'maka '.$sp .' ini sudah tidak berlaku.',0,0);
      // $pdf->ln();
      //
      // $pdf->Cell(10, 5, '2. ', 0,0);
      // $pdf->Cell(190,5,'Apabila dalam kurun waktu 3 bulan kedepan saudara melakukan pelanggaran maka ',0,1);
      // $pdf->Cell(10, 5, ' ', 0,0);
      // $pdf->Cell(190,5,$sp_next,0,1);
      // $pdf->ln();
      //
      // $pdf->Cell(200,5,'Demikian Surat Peringatan ini dikeluarkan untuk menjadi bahan perenungan dan bahan perhatian.',0,1);
      // $pdf->ln(10);
      //

      $pdf->Cell(90,5,'Mengetahui',0,0,'C');
      $pdf->Cell(90,5,'Jakarta, ',0,0,'C');
      $pdf->ln(5);

      $pdf->Cell(90,5,'Pengurus RW. 015 / I',0,0,'C');
      $pdf->Cell(90,5,'Pengurus RT.011 / RW.015 ',0,0,'C');
      $pdf->ln(10);

      $pdf->Cell(180);
      $pdf->Cell(0,0,'()',0,1);

      $pdf->Output();
    }

  }

  ?>
