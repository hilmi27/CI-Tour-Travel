<?php
class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
    //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE){
			$url=base_url();
			redirect($url);
		}
  }

  function index(){
    $this->load->view('layouts/admin/dashboard');
  }

  function data_admin(){
    // function ini hanya boleh diakses oleh admin dan dosen
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
      $this->load->view('layouts/admin/dashboard');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }

  }

  function galeri(){
    // function ini hanya boleh diakses oleh admin dan dosen
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
      $this->load->view('layouts/admin/galeri');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  function penginapan(){
    // function ini hanya boleh diakses oleh admin dan mahasiswa
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='3'){
      $this->load->view('layouts/admin/penginapan');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
  function restaurant(){
    // function ini hanya boleh diakses oleh admin dan mahasiswa
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='3'){
      $this->load->view('layouts/admin/restaurant');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
}
