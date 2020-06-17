<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class L_Tourguide extends CI_Controller {

	function __construct()
    {
        parent::__construct();
         $this->load->model('Konfirmasi_t_model');
         $this->load->model('Pemesanan_tourguide_model');
         $this->load->model('Tour_guide_model');
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
        $data['bulan'] = $this->input->post('bulan') ? $this->input->post('bulan') : date("m");
        $data['tahun'] = $this->input->post('tahun') ? $this->input->post('tahun') : date("Y");
        $guide = $this->db->get("pemesanan_tourguide");
        $data['guide'] = $this->Tour_guide_model->get_all_tour_guide();
        $data['_view'] = 'layouts/admin/laporan/guide';
        $this->load->view('layouts/admin/main',$data);
  //       $guide = $this->db->get("tour_guide");
  //   	$data['guide'] = $this->Pemesanan_tourguide_model->laporanguide($id_tourguide);
		// $data['_view'] = 'layouts/admin/laporan/guide';
  //        $this->load->view('layouts/admin/main',$data);
	}

    function cetak()
    {
        $data['guide'] = $this->Tour_guide_model->get_all_tour_guide();

        $this->load->view('pdf/guide',$data);
    }

	
}

