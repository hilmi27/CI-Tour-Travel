<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class L_Paketwisata extends CI_Controller {

	function __construct()
    {
        parent::__construct();
         $this->load->model('Konfirmasi_p_model');
         $this->load->model('Pemesanan_model');
         $this->load->model('Paket_wisatum_model');
         $this->load->model('Pemesanan_model');
         $this->load->library('pdf_report');

        if(!$this->session->userdata('level')){
            $this->session->set_flashdata('login_gagal', 'Anda Harus Login terlebih dahulu.');
            redirect('login');
        } else if($this->session->userdata('level') && ($this->session->userdata('level') == "tourguide" || $this->session->userdata('level') == "tourguide")){
             $this->session->set_flashdata('login_gagal', 'Halaman Ini hanya dapat diakses oleh admin.');
            redirect('login');
        }

    }
	
	function index()
    {
        $paket = $this->db->get("pemesanan");

        $data['bulan'] = $this->input->post('bulan') ? $this->input->post('bulan') : date("m");
        $data['tahun'] = $this->input->post('tahun') ? $this->input->post('tahun') : date("Y");
    	$data['paket'] = $this->Paket_wisatum_model->get_all_paket_wisata();
		$data['_view'] = 'layouts/admin/laporan/paket';
         $this->load->view('layouts/admin/main',$data);
	}

    function cetak()
    {
         $data['paket'] = $this->Paket_wisatum_model->get_all_paket_wisata();

        $this->load->view('pdf/paket',$data);
    }

	
}

