<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LP_per_paket extends CI_Controller {

	function __construct()
    {
        parent::__construct();
         $this->load->model('Konfirmasi_p_model');
         $this->load->model('Pemesanan_model');
         $this->load->model('Paket_wisatum_model');
         $this->load->library('pdf_report');

        if(!$this->session->userdata('level')){
            $this->session->set_flashdata('login_gagal', 'Anda Harus Login terlebih dahulu.');
            redirect('login');
        } else if($this->session->userdata('level') && ($this->session->userdata('level') == "tourguide" )){
             $this->session->set_flashdata('login_gagal', 'Halaman Ini hanya dapat diakses oleh admin.');
            redirect('login');
        }

    }
	
	function index()
    {
        $pemesanan = $this->db->get("pemesanan");
        $data['bulan'] = $this->input->post('bulan') ? $this->input->post('bulan') : date("m");
        $data['tahun'] = $this->input->post('tahun') ? $this->input->post('tahun') : date("Y");
        $data['alamat'] = $this->input->post('alamat') ? $this->input->post('alamat') : "semua";
        
        if($data['alamat'] == "semua"){
            $alamat = "";
        } else {
             $alamat = $data['alamat'];
        }

        $id_touragent = $this->session->userdata('id_touragent');

    	$data['laporan'] = $this->Pemesanan_model->data_per_laporan($id_touragent,$data['bulan'],$data['tahun'],$alamat);
		$data['_view'] = 'layouts/admin/laporan/paket_wisata';
         $this->load->view('layouts/admin/main',$data);
	}

    function cetak($bulan,$tahun,$alamat)
    {
        if($alamat == "semua"){
            $alamat = "";
        }
        $id_touragent = $this->session->userdata('id_touragent');

        $data['laporan'] = $this->Pemesanan_model->data_per_laporan($id_touragent,$bulan,$tahun,$alamat);

        $this->load->view('pdf/laporan_paket',$data);
        
    }

	
}

